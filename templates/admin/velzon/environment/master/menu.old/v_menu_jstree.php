<link href="<?= assets_url(); ?>plugins/custom/jstree/jstree.bundle.css" rel="stylesheet" type="text/css" />
<div id="kt_tree_5" class="tree-demo">
</div>
<br />
<button id="submit">Simpan</button>

<script src="<?= assets_url(); ?>plugins/custom/jstree/jstree.bundle.js"></script>
<script type="text/javascript">
    $("#kt_tree_5").jstree({
        "core": {
            "themes": {
                "responsive": false
            },
            // so that create works
            "check_callback": true,
            "data": [{
                    "text": "Parent Node",
                    "children": [{
                        "text": "Initially selected",
                        "state": {
                            "selected": true
                        }
                    }, {
                        "text": "Custom Icon",
                        "icon": "flaticon2-warning text-danger"
                    }, {
                        "text": "Initially open",
                        "icon": "fa fa-folder text-success",
                        "state": {
                            "opened": true
                        },
                        "children": [{
                            "text": "Another node",
                            "icon": "fa fa-file text-waring"
                        }]
                    }, {
                        "text": "Another Custom Icon",
                        "icon": "flaticon2-bell-5 text-waring"
                    }, {
                        "text": "Disabled Node",
                        "icon": "fa fa-check text-success",
                        "state": {
                            "disabled": true
                        }
                    }, {
                        "text": "Sub Nodes",
                        "icon": "fa fa-folder text-danger",
                        "children": [{
                                "text": "Item 1",
                                "icon": "fa fa-file text-waring",
                                "a_attr": {
                                    "href": "item"
                                }
                            },
                            {
                                "text": "Item 2",
                                "icon": "fa fa-file text-success"
                            },
                            {
                                "text": "Item 3",
                                "icon": "fa fa-file text-default"
                            },
                            {
                                "text": "Item 4",
                                "icon": "fa fa-file text-danger"
                            },
                            {
                                "text": "Item 5",
                                "icon": "fa fa-file text-info"
                            }
                        ]
                    }]
                },
                "Another Node"
            ]
        },
        "types": {
            "default": {
                "icon": "fa fa-folder text-success"
            },
            "file": {
                "icon": "fa fa-file  text-success"
            }
        },
        "state": {
            "key": "demo2"
        },
        "plugins": ["dnd", "state", "types", "checkbox"]
    });

    $('#submit').on('click', function(e) {
        var v = $('#kt_tree_5').jstree(true).get_json('#', {
            flat: true
        })
        // var mytext = JSON.stringify(v);
        console.log(v);
    })
</script>