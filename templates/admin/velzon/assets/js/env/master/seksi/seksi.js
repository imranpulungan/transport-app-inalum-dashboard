'use strict';

var ExAsUser = (function() {
    var idTable = "#AsTable";
    var MAIN = 'master/seksi/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    var tableApi, modal_header;

    var tb = new DataTable(idTable, {
        "order": [
            [0, 'asc']
        ],
        columnDefs: [{
                targets: [4],
                orderable: false,
            },
            {
                targets: [5],
                visible: false,
                searchable: false
            }
        ],
        "fnInfoCallback": function(oSettings, iStart, iEnd, iMax, iTotal, sPre) {
            $('#tableInfo').html('Data ' + iStart + "-" + iEnd + " dari " + iTotal + ' Data')
            return iStart + " - " + iEnd + " of " + iTotal;
        },
        drawCallback: function(oSettings) {
            tableApi = this.api()
        }
    })

    var tableCss = function() {
        $(idTable).attr('style', 'margin:0px !important');
    }

    var hideSearch = function() {
        $(idTable + "_filter").hide();
        $(idTable + "_length").hide();
    }

    var hidePagination = function() {
        $(idTable + "_paginate").hide();
        $(idTable + "_info").hide();
    }

    var select2 = function() {
        $('select.select2').each(function() {
            var label = $(this).closest('div')
            label = label.find('label').text()
            label = label.replace('*', '')
            $(this).select2({
                placeholder: "Silahkan Pilih " + label,
                allowClear: true,
                dropdownParent: $(this).closest('.modal')
            });
        });
    }

    var pagination = function() {
        ExAs.Table.Pagination(tableApi)
    }

    var search = () => {
        /**
         * Init All Environment
         */
        hideSearch();
        hidePagination();
        tableCss();

        pagination();
        select2();

        var search = ExAs.Doc.Select("#tableSearch");
        ExAs.Doc.Listen('keyup', function() {
            if (tb.search() !== this.value) {
                tb.search(this.value, true, false).draw();
            }
        }, search)

        var filter = ExAs.Doc.Select("#tableLength");
        ExAs.Doc.Listen('change', function() {
            tb.page.len($(this).val()).draw();
            var page = tb.page.info();
            if (page.pages == 1) {
                $('.previous').attr('disabled', true);
                $('.next').attr('disabled', true);
                $('.existPaginate').val(1)
            } else {
                $('.previous').attr('disabled', true);
                $('.next').removeAttr('disabled');
            }
        }, filter)
    }

    var action_btn = function(status = null) {
        return '<div class="input-group">' +
            (ExAs.Permission('UP') ? '<button type="button" class="btn btn-warning btn-icon waves-effect waves-light tombolEdit"><i class="ri-edit-2-fill"></i></button>' : '') +            
            '</div>';
    }

    /**
     * Getting Data From Database
     */

    var loadData = () => {
        ExAl.Loading.Table.Show();
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "load",
            method: "POST",
            async: false,
            data: {
                scrty: true
            },
            success: function(response) {
                ExAl.Loading.Table.Hide();
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon)
                    if (res.success) {
                        var no = 1;
                        var availableData = []
                        var totalDataExist = 0;
                        var deletedData = []
                        tb.rows().every(function(rowIdx, tableLoop, rowLoop) {
                            var data = this.data();
                            availableData.push(data[5])
                        });

                        totalDataExist = availableData.length

                        $.each(res.data, function(i, item) {
                            var isReady = availableData.includes(item.id_seksi);
                            if (isReady === false) {
                                totalDataExist++;
                                tb.row.add([
                                    totalDataExist,
                                    item.nm_seksi,
                                    item.alias_seksi,
                                    item.kuota_seksi,
                                    action_btn(),
                                    item.id_seksi,
                                ])
                            } else {
                                tb.rows().every(function(rowIdx, tableLoop, rowLoop) {
                                    var data = this.data();
                                    if (data[5] == item.id_seksi) {
                                        if (data[1] !== item.nm_seksi) {
                                            tb.cell(rowIdx, 1)
                                                .data(item.nm_seksi)
                                        }

                                        if (data[2] !== item.alias_seksi) {
                                            tb.cell(rowIdx, 2)
                                                .data(item.alias_seksi)
                                        }
                                        
                                        if (data[3] !== item.kuota_seksi) {
                                            tb.cell(rowIdx, 4)
                                                .data(item.kuota_seksi)
                                        }

                                        if (data[4] !== action_btn()) {
                                            tb.cell(rowIdx, 4)
                                                .data(action_btn())
                                        }
                                    }
                                });
                            }
                            deletedData.push(item.id_seksi)
                        })

                        tb.draw(false);

                        $.each(availableData, function(i, item) {
                                var isDeleted = deletedData.includes(availableData[i]);
                                var indexes = availableData.indexOf(availableData[i]);
                                if (isDeleted === false) {
                                    tb.rows(function(idx, data, node) {
                                        return data[5] === availableData[i];
                                    }).remove().draw(false);
                                }
                            })
                            // $.each(availableData, function(i, item) {
                            //     var isDeleted = deletedData.includes(availableData[i]);
                            //     var indexes = availableData.indexOf(availableData[i]);
                            //     if (isDeleted === false) {
                            //         // tb.row(indexes).remove();
                            //         tb.clear().draw();
                            //         loadData()
                            //     }
                            // })
                    } else {
                        tb.clear().draw();
                    }
                }
            }
        })
    }

    /**
     * Transaction
     */

    var Transaction = function() {
        addTrigger();
        updateTrigger();
        updateClickTrigger();
    }

    var addTrigger = function() {
        if (ExAs.Doc.Exist("#form_tambah")) {

            ExAs.Validator("#submit", function(isValid) {
                var _input = $("#form_tambah").serializeArray();
                _input.push({ name: "scrty", value: true })

                $(this).addClass("spinner spinner-white spinner-right disabled");
                $("#form_tambah button").attr("disabled", "disabled");

                if (isValid == true) {
                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "add",
                        method: "POST",
                        data: $.param(_input),
                        success: function(response) {
                            $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                            $("#form_tambah button").removeAttr("disabled");

                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.success) {
                                    swal
                                        .fire({
                                            text: 'Berhasil Menyimpan Data',
                                            icon: "success",
                                            timer: 3000,
                                            showCancelButton: false,
                                            showConfirmButton: false,
                                        })
                                        .then(function(result) {
                                            if (result.isDismissed) {
                                                loadData();
                                                ExAl.Modal.Close('#modalTambah', true);
                                            }
                                        });
                                } else {
                                    swal
                                        .fire({
                                            text: _getMessage(res.error, 'Gagal Menyimpan Data'),
                                            icon: "error",
                                            timer: 3000,
                                            showCancelButton: false,
                                            showConfirmButton: false,
                                        })
                                        .then(function() {});
                                }
                            }
                        },
                        error: function(e) {
                            // console.log(e);
                            $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                        },
                    });
                } else {
                    $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                    $("#form_tambah button").removeAttr("disabled");
                }
            });
        }
    };

    var updateClickTrigger = function() {
        $("table tbody").on("click", ".tombolEdit", function() {
            var drop = tb.row($(this).parents("tr")).data();
            if (modal_header == '' || typeof modal_header === 'undefined') {
                modal_header = $('#modal_header_edit').text();
            }
            $('#modal_header_edit').html(modal_header + ': <b>' + drop[2] + '</b>');
            $('#id_seksi_edit').val(drop[5])
            $('#nama_edit').val(drop[1])
            $('#alias_edit').val(drop[2])
            $('#kuota_edit').val(drop[3])
            ExAl.Modal.Show('#modalEdit');
        });
    }

    var updateTrigger = function() {
        if (ExAs.Doc.Exist("#form_edit")) {

            ExAs.Validator("#submitEdit", function(isValid) {
                if (isValid == true) {
                    // updateTrigger();
                    var _input = $("#form_edit").serializeArray();
                    _input.push({ name: "scrty", value: true })

                    $(this).addClass("spinner spinner-white spinner-right disabled");
                    $("#form_edit button").attr("disabled", "disabled");

                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "edit",
                        method: "POST",
                        data: $.param(_input),
                        success: function(response) {
                            $("#submitEdit").removeClass("spinner spinner-white spinner-right disabled");
                            $("#form_edit button").removeAttr("disabled");

                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                $('#modal_header_edit').html(modal_header);
                                if (res.status) {
                                    ExAl.Toast.Success(res.header, res.message, function(result) {
                                        if (result.isDismissed) {
                                            loadData();
                                            ExAl.Modal.Close('#modalEdit', true);
                                            $('#form_edit').trigger('reset')
                                        }
                                    });
                                } else {
                                    ExAl.Toast.Failed(res.header, res.message);
                                }
                            }
                        },
                        error: function(e) {
                            // console.log(e);
                            $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                        },
                    });
                } else {
                    $("#submitEdit").removeClass("spinner spinner-white spinner-right disabled");
                    $("#form_edit button").removeAttr("disabled");
                }
            });
        }
    }

    return {
        run: function() {
            search();
            loadData();
            Transaction();
        },
        refresh: function() { loadData() }
    }
})();

ExAs.Dom(ExAsUser.run())