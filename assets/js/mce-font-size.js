/**
 * "Veličina slova" dropdown for the Classic Editor (TinyMCE).
 *
 * Toggles the block editor's `has-{slug}-font-size` preset classes on the
 * paragraph(s) in the current selection, so classic and block content share
 * one set of front-end styles. The presets come from PHP through
 * editor.settings.telegram_font_sizes (see functions-shared.php).
 */
(function () {
    var LABEL = 'Veličina slova';
    var DEFAULT_VALUE = 'default';
    // The block editor shows these abbreviations for up to five presets.
    var ABBREVIATIONS = ['S', 'M', 'L', 'XL', 'XXL'];

    function sizeClass(slug) {
        return 'has-' + slug + '-font-size';
    }

    function buildItems(sizes) {
        var useAbbreviations = sizes.length <= ABBREVIATIONS.length;
        var items = sizes.map(function (size, index) {
            return {
                text: useAbbreviations ? ABBREVIATIONS[index] : size.name,
                value: size.slug
            };
        });

        return [{ text: 'Zadano', value: DEFAULT_VALUE }].concat(items);
    }

    tinymce.PluginManager.add('telegram_font_size', function (editor) {
        var sizes = editor.settings.telegram_font_sizes || [];
        var items = buildItems(sizes);

        function findItem(slug) {
            for (var i = 0; i < items.length; i++) {
                if (items[i].value === slug) {
                    return items[i];
                }
            }
            return null;
        }

        // First size class found walking up from the caret to the body.
        function currentSlug(parents) {
            for (var i = 0; i < parents.length; i++) {
                for (var j = 0; j < sizes.length; j++) {
                    if (editor.dom.hasClass(parents[i], sizeClass(sizes[j].slug))) {
                        return sizes[j].slug;
                    }
                }
            }
            return null;
        }

        function applySize(slug) {
            var blocks = editor.selection.getSelectedBlocks();
            if (!blocks.length) {
                return;
            }

            editor.undoManager.transact(function () {
                blocks.forEach(function (block) {
                    sizes.forEach(function (size) {
                        editor.dom.removeClass(block, sizeClass(size.slug));
                    });
                    if (slug !== DEFAULT_VALUE) {
                        editor.dom.addClass(block, sizeClass(slug));
                    }
                });
            });
            editor.nodeChanged();
        }

        editor.addButton('telegram_font_size', {
            type: 'listbox',
            text: LABEL,
            tooltip: LABEL,
            values: items,
            fixedWidth: true,
            onselect: function (e) {
                applySize(e.control.value());
            },
            onPostRender: function () {
                var listbox = this;
                editor.on('nodeChange', function (e) {
                    var slug = currentSlug(e.parents);
                    var item = slug ? findItem(slug) : null;
                    listbox.value(item ? item.value : null);
                    listbox.text(item ? item.text : LABEL);
                });
            }
        });
    });
})();
