(function() {
    tinymce.PluginManager.add('whimsy_sc_mce_button', function( editor, url ) {
        editor.addButton( 'whimsy_sc_mce_button', {
            title: 'Shortcodes',
            icon:  'code',
            type:  'menubutton',
            style: 'whimsy',
            menu: [
                
                {
                    text: 'Accordion',
                    icon: 'icon dashicons-feedback',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Insert Accordion Shortcode',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'accordionIntro',
                                    label: 'Introduction',
                                    value: ''
                                },
                                {
                                    type: 'textbox',
                                    name: 'panelContent',
                                    label: 'Panel Content',
                                    value: '',
                                    multiline: true,
                                    minWidth: 300,
                                    minHeight: 100
                                }
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( '[accordion][panel intro="' + e.data.accordionIntro + '"]' + e.data.panelContent + '[/panel][/accordion]');
                            }
                        });
                    }
                },
                {
                    text: 'Box',
                    icon: 'icon dashicons-format-aside',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Insert Box Shortcode',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'boxContent',
                                    label: 'Box Content',
                                    value: '',
                                    multiline: true,
                                    minWidth: 300,
                                    minHeight: 100
                                },
                                {
                                    type: 'listbox',
                                    name: 'boxStyle',
                                    label: 'Style',
                                    'values': [
                                        {text: 'Plain', value: ''},
                                        {text: 'Info', value: 'info'},
                                        {text: 'Download', value: 'download'},
                                        {text: 'Warning', value: 'warning'},
                                        {text: 'Tick', value: 'tick'},
                                        {text: 'Heart', value: 'heart'}
                                    ]
                                },
                                {
                                    type: 'textbox',
                                    name: 'boxClassName',
                                    label: 'Custom Class',
                                    value: ''
                                }
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( '[box style="' + e.data.boxStyle + '" class="' + e.data.boxClassName + '"]' + e.data.boxContent + '[/box]');
                            }
                        });
                    }
                },
                {
                    text: 'Button',
                    icon: 'icon dashicons-align-none',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Insert Button Shortcode',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'textboxName',
                                    label: 'Content',
                                    value: ''
                                },
                                {
                                    type: 'listbox',
                                    name: 'styleName',
                                    label: 'Style',
                                    'values': [
                                        {text: 'Default', value: ''},
                                        {text: 'Aqua', value: 'aqua'},
                                        {text: 'Pink', value: 'pink'},
                                        {text: 'Violet', value: 'violet'},
                                        {text: 'Purple', value: 'purple'},
                                        {text: 'Orange', value: 'orange'},
                                        {text: 'Yellow', value: 'yellow'},
                                        {text: 'Red', value: 'red'}
                                    ]
                                },
                                {
                                    type: 'listbox',
                                    name: 'size',
                                    label: 'Size',
                                    'values': [
                                        {text: 'XL', value: 'xl'},
                                        {text: 'Large', value: 'large'},
                                        {text: 'Regular', value: ''},
                                        {text: 'Small', value: 'small'}
                                    ]
                                },
                                {
                                    type: 'textbox',
                                    name: 'btnClassName',
                                    label: 'Custom Class',
                                    value: ''
                                }
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( '[button size="' + e.data.size + '" style="' + e.data.styleName + '" class="' + e.data.btnClassName + '"]' + e.data.textboxName + '[/button]');
                            }
                        });
                    }
                },
                {
                    text: 'Columns',
                    icon: 'icon dashicons-tagcloud',
                    menu: [
                        {
                            text: '50% | 50%',
                            onclick: function() {
                                editor.insertContent('[row][column size="6"]Content...[/column][column size="6"]Content...[/column][/row]');
                            }
                        },
                        {
                            text: '40% | 60%',
                            onclick: function() {
                                editor.insertContent('[row][column size="4"]Content...[/column][column size="8"]Content...[/column][/row]');
                            }
                        },
                        {
                            text: '25% | 75%',
                            onclick: function() {
                                editor.insertContent('[row][column size="3"]Content...[/column][column size="9"]Content...[/column][/row]');
                            }
                        },
                        {
                            text: '33% | 33% | 33%',
                            onclick: function() {
                                editor.insertContent('[row][column size="4"]Content...[/column][column size="4"]Content...[/column][column size="4"]Content...[/column][/row]');
                            }
                        },
                        {
                            text: '25% | 25% | 25% | 25%',
                            onclick: function() {
                                editor.insertContent('[row][column size="3"]Content...[/column][column size="3"]Content...[/column][column size="3"]Content...[/column][column size="3"]Content...[/column][/row]');
                            }
                        },
                        {
                            text: '10% | 10% | 10% | 10% | 10% | 10%',
                            onclick: function() {
                                editor.insertContent('[row][column size="2"]Content...[/column][column size="2"]Content...[/column][column size="2"]Content...[/column][column size="2"]Content...[/column][column size="2"]Content...[/column][column size="2"]Content...[/column][/row]');
                            }
                        },
                        {
                            text: '100%',
                            onclick: function() {
                                editor.insertContent('[row][column size="12"]Content...[/column][/row]');
                            }
                        }
                    ]
                },
                {
                    text: 'Divider',
                    icon: 'icon dashicons-minus',
                    menu: [
                        {
                            text: 'Plain',
                            onclick: function() {
                                editor.insertContent('[divider]');
                            }
                        },
                        {
                            text: 'Alternate',
                            onclick: function() {
                                editor.insertContent('[divider style="alt"]');
                            }
                        },
                        {
                            text: 'Fancy',
                            onclick: function() {
                                editor.insertContent('[divider style="fancy"]');
                            }
                        }
                    ]
                },
                {
                    text: 'Post Lists',
                    icon: 'icon dashicons-list-view',
                    menu: [
                        {
                            text: 'Category List',
                            onclick: function() {
                                editor.windowManager.open( {
                                    title: 'Insert Category List Shortcode',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'categoryName',
                                            label: 'Category Name (Slug)',
                                            value: ''
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'categoryLimit',
                                            label: 'Post Limit',
                                            value: ''
                                        }
                                    ],
                                    onsubmit: function( e ) {
                                        editor.insertContent( '[category name="' + e.data.categoryName + '" limit="' + e.data.categoryLimit + '"]');
                                    }
                                });
                            }
                        },
                        {
                            text: 'Recent Post List',
                            onclick: function() {
                                editor.windowManager.open( {
                                    title: 'Insert Recent Posts Shortcode',
                                    body: [
                                        {
                                            type: 'textbox',
                                            name: 'recentLimit',
                                            label: 'Text Box',
                                            value: '30'
                                        }
                                    ],
                                    onsubmit: function( e ) {
                                        editor.insertContent( '[recent limit="' + e.data.recentLimit + '"]');
                                    }
                                });
                            }
                        }
                    ]
                }
            ]
        });
    });
})();