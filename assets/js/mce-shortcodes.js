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
            icon: 'blockquote',
            text: false,
            tooltip: 'Specijal quote',
            onclick: function(e) {
                tinyMCE.activeEditor.selection.setContent( '[specijal_quote]'+tinyMCE.activeEditor.selection.getContent()+'[/specijal_quote]' );
            }
        });
        editor.addButton('telegram_specijal_highlight', {
            icon: 'blockquote',
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
                        width: 300,
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
                            }
                        ],
                        onsubmit: function (e) {
                            var mode = e.data.specijal_slike_mode || 'full';
                            tinyMCE.activeEditor.selection.setContent('[specijal_slike mode="' + mode + '" ids="' + ids + '"]');
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
    });
    jQuery('#wp-link-close').on('click', function() {
        jQuery('#telegram_compare_div').hide();

    });

})();