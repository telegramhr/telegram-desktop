(function() {

    tinymce.PluginManager.add('telegram_shortcodes', function( editor, url )
    {
        editor.addButton('telegram_shortcodes', {
            icon: 'blockquote',
            text: false,
            tooltip: 'Citat',
            onclick: function(e) {
                tinyMCE.activeEditor.selection.setContent( '[quote_box]'+tinyMCE.activeEditor.selection.getContent()+'[/quote_box]' );
            }
        });
        editor.addButton('telegram_specijal_quote', {
            icon: 'bubble',
            text: false,
            tooltip: 'Specijal quote',
            onclick: function(e) {
                tinyMCE.activeEditor.selection.setContent( '[specijal_quote]'+tinyMCE.activeEditor.selection.getContent()+'[/specijal_quote]' );
            }
        });
        editor.addButton('telegram_specijal_highlight', {
            icon: 'sun',
            text: false,
            tooltip: 'Specijal highlight',
            onclick: function(e) {
                tinyMCE.activeEditor.selection.setContent( '[specijal_highlight]'+tinyMCE.activeEditor.selection.getContent()+'[/specijal_highlight]' );
            }
        });
        editor.addButton('telegram_specijal_slike', {
            icon: 'image',
            text: false,
            tooltip: 'Specijal slike',
            cmd: 'telegram_specijal_slike_form'
        });
        editor.addCommand('telegram_specijal_slike_form', function () {
            var frame = wp.media({
                title: 'Odaberi slike za specijal',
                multiple: true,
                library: { type: 'image' },
                button: { text: 'Umetni' }
            });
            frame.on('select', function () {
                var ids = frame.state().get('selection').map(function (attachment) {
                    return attachment.id;
                }).join(',');
                if (ids) {
                    editor.windowManager.open({
                        width: 500,
                        height: 280,
                        title: 'Specijal slike opcije',
                        body: [
                            {
                                type: 'listbox',
                                name: 'specijal_slike_mode',
                                label: 'Prikaz',
                                values: [
                                    { text: 'Puna širina', value: 'full' },
                                    { text: 'Fiksna širina (1090px)', value: 'fixed' }
                                ]
                            },
                            {
                                type: 'textbox',
                                name: 'specijal_slike_texts',
                                label: 'Tekstovi (svaki red = novi overlay)',
                                multiline: true,
                                minHeight: 120
                            }
                        ],
                        onsubmit: function (e) {
                            var mode = e.data.specijal_slike_mode || 'full';
                            var sc = '[specijal_slike mode="' + mode + '" ids="' + ids + '"';
                            var texts = (e.data.specijal_slike_texts || '').trim();
                            if (texts) {
                                sc += ' texts="' + texts.replace(/\n/g, '||') + '"';
                            }
                            sc += ']';
                            tinyMCE.activeEditor.selection.setContent(sc);
                        }
                    });
                }
            });
            frame.open();
        });
        editor.addButton('telegram_mali-video', {
            icon: 'mali-video',
            text: false,
            tooltip: 'Manji video',
            onclick: function(e) {
                tinyMCE.activeEditor.selection.setContent( '[youtube='+tinyMCE.activeEditor.selection.getContent()+'&w=560&h=315]' );
            }
        });
        editor.addButton('telegram_comparison', {
            cmd: 'telegram_compare_form',
            title: 'Usporedba',
            icon: 'comparison'
        });
        editor.addCommand('telegram_compare_form', function () {
            editor.windowManager.open({
                width: 480,
                title: 'Dodaj slike za usporedbu',
                height: 400,
                body: [
                    {
                        type: 'textbox',
                        id: 'tel_img1t',
                        label: 'Prva slika'
                    },
                    {
                        type: 'button',
                        text: 'Odaberi',
                        id: 'tel_img1',
                        onclick: function(e) {
                            var id = jQuery(e.target).parent('div').attr('id');
                            wp.media.editor.send.attachment = function(props, attachment){
                                jQuery('#'+id+'t').val(attachment.id);
                            }.bind(id);
                            wp.media.editor.open(this);
                        }
                    },
                    {
                        type: 'textbox',
                        id:'tel_img1v',
                        label: 'Tekst prve slike'
                    },
                    {
                        type: 'textbox',
                        id: 'tel_img2t',
                        label: 'Druga slika'
                    },
                    {
                        type: 'button',
                        text: 'Odaberi',
                        id: 'tel_img2',
                        onclick: function(e) {
                            var id = jQuery(e.target).parent('div').attr('id');
                            wp.media.editor.send.attachment = function(props, attachment){
                                jQuery('#'+id+'t').val(attachment.id);
                            }.bind(id);
                            wp.media.editor.open(this);
                        }
                    },
                    {
                        type: 'textbox',
                        id:'tel_img2v',
                        label: 'Tekst druge slike'
                    },
                    {
                        type: 'checkbox',
                        checked:false,
                        id:'tel_full',
                        label: 'Koristi punu veličinu'
                    }
                ],
                onsubmit: function(e) {
                    var full = jQuery('#tel_full').hasClass('mce-checked')?1:0;
                    tinyMCE.activeEditor.selection.setContent( '[compare_box img1="'+jQuery('#tel_img1t').val()+'" img2="'+jQuery('#tel_img2t').val()+'" tekst1="'+jQuery('#tel_img1v').val()+'" tekst2="'+jQuery('#tel_img2v').val()+'" full="'+ full +'"][/compare_box]' );
                }

            });

        })
        editor.addButton('telegram_post_embed', {
            icon: 'dashicon dashicons-admin-post',
            text: false,
            tooltip: 'Umetni članak',
            onclick: function() {
                var overlay = document.createElement('div');
                overlay.id = 'tpe-overlay';
                overlay.style.cssText = 'position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);z-index:100100;display:flex;align-items:center;justify-content:center;';

                var modal = document.createElement('div');
                modal.style.cssText = 'background:#fff;border-radius:8px;padding:20px;width:480px;max-height:500px;display:flex;flex-direction:column;';

                var title = document.createElement('h3');
                title.textContent = 'Umetni članak';
                title.style.cssText = 'margin:0 0 12px;font-size:16px;';

                var input = document.createElement('input');
                input.type = 'text';
                input.placeholder = 'Pretraži članke...';
                input.style.cssText = 'width:100%;padding:8px 12px;border:1px solid #ddd;border-radius:4px;font-size:14px;box-sizing:border-box;';

                var newTabLabel = document.createElement('label');
                newTabLabel.style.cssText = 'display:flex;align-items:center;gap:6px;margin-top:10px;font-size:13px;color:#444;cursor:pointer;';
                var newTabCheckbox = document.createElement('input');
                newTabCheckbox.type = 'checkbox';
                newTabCheckbox.style.cssText = 'margin:0;';
                newTabLabel.appendChild(newTabCheckbox);
                newTabLabel.appendChild(document.createTextNode('Otvori u novom tabu'));

                var results = document.createElement('div');
                results.style.cssText = 'margin-top:12px;overflow-y:auto;max-height:350px;';

                var closeBtn = document.createElement('button');
                closeBtn.textContent = '✕';
                closeBtn.style.cssText = 'position:absolute;top:10px;right:14px;background:none;border:none;font-size:20px;cursor:pointer;color:#666;';

                modal.style.position = 'relative';
                modal.appendChild(closeBtn);
                modal.appendChild(title);
                modal.appendChild(input);
                modal.appendChild(newTabLabel);
                modal.appendChild(results);
                overlay.appendChild(modal);
                document.body.appendChild(overlay);

                var searchTimer = null;

                function close() {
                    if (overlay.parentNode) overlay.parentNode.removeChild(overlay);
                }

                closeBtn.onclick = close;
                overlay.addEventListener('click', function(e) {
                    if (e.target === overlay) close();
                });

                input.addEventListener('input', function() {
                    var q = input.value.trim();
                    if (searchTimer) clearTimeout(searchTimer);
                    if (q.length < 2) {
                        results.innerHTML = '<p style="color:#999;font-size:13px;">Unesite najmanje 2 znaka...</p>';
                        return;
                    }
                    searchTimer = setTimeout(function() {
                        results.innerHTML = '<p style="color:#999;font-size:13px;">Tražim...</p>';
                        jQuery.ajax({
                            url: ajaxurl,
                            data: { action: 'telegram_search_posts', q: q },
                            success: function(data) {
                                results.innerHTML = '';
                                if (!data || !data.length) {
                                    results.innerHTML = '<p style="color:#999;font-size:13px;">Nema rezultata.</p>';
                                    return;
                                }
                                data.forEach(function(post) {
                                    var item = document.createElement('div');
                                    item.style.cssText = 'padding:10px 12px;border-bottom:1px solid #eee;cursor:pointer;';
                                    item.innerHTML = '<strong style="font-size:14px;">' + post.title + '</strong><br><span style="font-size:12px;color:#888;">' + post.date + ' &middot; ID: ' + post.id + '</span>';
                                    item.onmouseover = function() { item.style.background = '#f5f5f5'; };
                                    item.onmouseout = function() { item.style.background = 'none'; };
                                    item.onclick = function() {
                                        var target = newTabCheckbox.checked ? ' target=_blank' : '';
                                        editor.insertContent('[telegram_post id=' + post.id + target + ']');
                                        close();
                                    };
                                    results.appendChild(item);
                                });
                            }
                        });
                    }, 300);
                });

                setTimeout(function() { input.focus(); }, 50);
            }
        });
    });
    jQuery('#wp-link-close').on('click', function() {
        jQuery('#telegram_compare_div').hide();

    });

})();