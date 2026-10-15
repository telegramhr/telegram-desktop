/**
 * "Veličina slova" dropdown for the Classic Editor (TinyMCE).
 *
 * Mirrors the block editor's typography control:
 *  - presets toggle the `has-{slug}-font-size` classes on the paragraph(s)
 *    in the current selection, so classic and block content share one set
 *    of front-end styles;
 *  - "Prilagođeno (px)…" writes an inline `font-size: NNpx` on the block(s),
 *    exactly like the block editor's custom px value.
 * The presets come from PHP through editor.settings.telegram_font_sizes
 * (see functions-shared.php).
 */
(function () {
    var LABEL = 'Veličina slova';
    var DEFAULT_VALUE = 'default';
    var CUSTOM_VALUE = 'custom';
    var CUSTOM_LABEL = 'Prilagođeno (px)…';
    var PX_PREFIX = 'px:';
    var SEPARATOR = { text: '-' };
    var MIN_PX = 8;
    var MAX_PX = 200;
    // The block editor shows these abbreviations for up to five presets.
    var ABBREVIATIONS = ['S', 'M', 'L', 'XL', 'XXL'];

    function sizeClass(slug) {
        return 'has-' + slug + '-font-size';
    }

    function pxValue(px) {
        return PX_PREFIX + px;
    }

    // Menu: Zadano | S M L XL | 14px 16px … (common sizes) | Prilagođeno (px)…
    function buildItems(sizes, commonPx) {
        var useAbbreviations = sizes.length <= ABBREVIATIONS.length;
        var presetItems = sizes.map(function (size, index) {
            return {
                text: useAbbreviations ? ABBREVIATIONS[index] : size.name,
                value: size.slug
            };
        });
        var pxItems = commonPx.map(function (px) {
            return { text: px + 'px', value: pxValue(px) };
        });

        var items = [{ text: 'Zadano', value: DEFAULT_VALUE }];
        if (presetItems.length) {
            items = items.concat([SEPARATOR], presetItems);
        }
        if (pxItems.length) {
            items = items.concat([SEPARATOR], pxItems);
        }

        return items.concat([SEPARATOR, { text: CUSTOM_LABEL, value: CUSTOM_VALUE }]);
    }

    // "18px" / "18" -> 18, anything else -> null.
    function parsePx(value) {
        var match = /^\s*(\d+(?:\.\d+)?)\s*(px)?\s*$/i.exec(value || '');
        if (!match) {
            return null;
        }
        var px = Math.round(parseFloat(match[1]));
        return px >= MIN_PX && px <= MAX_PX ? px : null;
    }

    tinymce.PluginManager.add('telegram_font_size', function (editor) {
        var sizes = editor.settings.telegram_font_sizes || [];
        var commonPx = (editor.settings.telegram_font_sizes_px || [])
            .map(parsePx)
            .filter(Boolean);
        var items = buildItems(sizes, commonPx);

        function findItem(slug) {
            for (var i = 0; i < items.length; i++) {
                if (items[i].value === slug) {
                    return items[i];
                }
            }
            return null;
        }

        function findSize(slug) {
            for (var i = 0; i < sizes.length; i++) {
                if (sizes[i].slug === slug) {
                    return sizes[i];
                }
            }
            return null;
        }

        // First size found walking up from the caret to the body:
        // { slug: 'large' } for a preset class, { px: 18 } for an inline size.
        function currentSize(parents) {
            for (var i = 0; i < parents.length; i++) {
                var node = parents[i];
                for (var j = 0; j < sizes.length; j++) {
                    if (editor.dom.hasClass(node, sizeClass(sizes[j].slug))) {
                        return { slug: sizes[j].slug };
                    }
                }
                var px = node.nodeType === 1 ? parsePx(editor.dom.getStyle(node, 'font-size')) : null;
                if (px) {
                    return { px: px };
                }
            }
            return null;
        }

        function clearSize(block) {
            sizes.forEach(function (size) {
                editor.dom.removeClass(block, sizeClass(size.slug));
            });
            editor.dom.setStyle(block, 'font-size', '');
        }

        function updateBlocks(mutate) {
            var blocks = editor.selection.getSelectedBlocks();
            if (!blocks.length) {
                return;
            }

            editor.undoManager.transact(function () {
                blocks.forEach(function (block) {
                    clearSize(block);
                    mutate(block);
                });
            });
            editor.nodeChanged();
        }

        function applyPreset(slug) {
            updateBlocks(function (block) {
                if (slug !== DEFAULT_VALUE) {
                    editor.dom.addClass(block, sizeClass(slug));
                }
            });
        }

        function applyPx(px) {
            updateBlocks(function (block) {
                editor.dom.setStyle(block, 'font-size', px + 'px');
            });
        }

        // Pre-fill the dialog with the size currently in effect.
        function initialPx() {
            var current = currentSize(editor.dom.getParents(editor.selection.getStart()));
            if (!current) {
                return '';
            }
            if (current.px) {
                return current.px;
            }
            var preset = findSize(current.slug);
            return preset ? parsePx(preset.size) || '' : '';
        }

        function openCustomDialog() {
            editor.windowManager.open({
                title: LABEL + ' (px)',
                body: [{
                    type: 'textbox',
                    name: 'px',
                    label: 'px',
                    value: initialPx(),
                    autofocus: true
                }],
                onsubmit: function (e) {
                    var px = parsePx(e.data.px);
                    if (!px) {
                        editor.windowManager.alert(
                            'Unesite broj između ' + MIN_PX + ' i ' + MAX_PX + '.'
                        );
                        e.preventDefault();
                        return;
                    }
                    applyPx(px);
                },
                // Resync the dropdown label after Cancel (it was set to "custom").
                onclose: function () {
                    editor.nodeChanged();
                }
            });
        }

        editor.addButton('telegram_font_size', {
            type: 'listbox',
            text: LABEL,
            tooltip: LABEL,
            values: items,
            fixedWidth: true,
            onselect: function (e) {
                var value = e.control.value();
                if (value === CUSTOM_VALUE) {
                    openCustomDialog();
                    return;
                }
                if (value.indexOf(PX_PREFIX) === 0) {
                    applyPx(parsePx(value.slice(PX_PREFIX.length)));
                    return;
                }
                applyPreset(value);
            },
            onPostRender: function () {
                var listbox = this;
                editor.on('nodeChange', function (e) {
                    var current = currentSize(e.parents);
                    if (current && current.px) {
                        // Highlight the matching common size, if any.
                        listbox.value(findItem(pxValue(current.px)) ? pxValue(current.px) : null);
                        listbox.text(current.px + 'px');
                        return;
                    }
                    var item = current ? findItem(current.slug) : null;
                    listbox.value(item ? item.value : null);
                    listbox.text(item ? item.text : LABEL);
                });
            }
        });
    });
})();
