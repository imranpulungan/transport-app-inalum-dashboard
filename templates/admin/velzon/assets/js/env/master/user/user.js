'use strict';

var copyToClipboard = (copyText = "") => {    
    navigator.clipboard.writeText(copyText);
    alert(copyText);
}

var ExAsUser = (function() {
    var idTable = "#AsTable";
    var MAIN = 'master/user/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    var tableApi, modal_header;

    var ses = ExAs.uXvbI(all_session);
    var sSion = JSON.parse(ses);
    var i = 0;

    var limit = 10;

    var tb = new DataTable(idTable, {
        dom : "Bfrtip",
        processing: true,
        serverSide: true,
        paging: true,
        info: true,
        "order": [
            [0, 'asc']
        ],
        scrollY: true,
        autoWidth: false,
        // scrollX: true,
        // scrollCollapse: false,
        // deferRender: true,
        rowId: 'username',
        // // info: !0,
        pagingType: 'simple_numbers',
        "fnInfoCallback": function(oSettings, iStart, iEnd, iMax, iTotal, sPre) {
            if (iTotal != 0) {
                $('#tableInfo').html('Menampilkan Data ' + iStart + " - " + (isNaN(iEnd) ? iTotal : iEnd) + " dari " + iTotal + ' Data')
            } else {
                $('#tableInfo').html('Tidak ada Data')
                $('.existPaginate').val(1)
            }
            return iStart + " - " + iEnd + " of " + iTotal;
        },
        columnDefs: [{
            targets: i++,
            data: "username",
            render: function(data, type, full, meta) {
                return data
            }
        },
        {
            targets: i++,
            data: "nama",
            render: function(data, type, full, meta) {
                return data
            },
        },
        {
            targets: i++,
            data: "username",
            visible: false,
            render: function(data, type, full, meta) {
                return data
            }
        },
        {
            targets: i++,
            data: "email",
            render: function(data, type, full, meta) {
                return data;
            },
        },
        {
            targets: i++,
            data: "no_hp",
            render: function(data, type, full, meta) {
                return data;
            },
        },
        {
            targets: i++,
            data: "nm_role",
            render: function(data, type, full, meta) {
                return data;
            },
        },
        {
            targets: i++,
            data: "alias_seksi",
            render: function(data, type, full, meta) {
                return data;
            },
        },
        {
            targets: i++,
            data: "status",
            render: function(data, type, full, meta) {
                // return print_date(data)
                return print_status_user(data, full.id_user)
            }
        },
        // {
        //     targets: i++,
        //     width: "10%",
        //     data: "nm_role",
        //     // visible: false,
        //     render: function(data, type, full, meta) {
        //         return data
        //     }
        // },
        {
            targets: i++,
            visible: (ExAs.Permission('VW') ||
                    ExAs.Permission('UP') ||
                    ExAs.Permission('DT')) ?
                true : false,
            width: "5%",
            data: "status",
            render: function(data, type, full, meta) {
                return action_btn(data)
            }
        },
    ],
        "language": {
            "emptyTable": '<p style="margin-top: 15px !important">' +
                'Tidak ada data' +
                '</p>'
        },
        drawCallback: function () {
            var table = this.api();
            var pageInfo = table.page.info();
            if (isNaN(pageInfo.page)) {
                table.ajax.reload();
            }
        },        
        ajax: function(oData, oCallback, oSetting) {
            $.ajax({
                url: e3nCeL0t + MoDaD + MAIN + "load",
                method: "POST",
                async: true,
                data: {
                    scrty: true,
                    start: oData.start,
                    limit: limit, //oData.search.value != '' ? 1 : limit
                    keyword: oData.search.value
                },
                success: function(response) {
                        ExAl.Loading.Table.Hide();
                    var respon = ExAs.uXvbI(response)
                    if (ExAs.Utils.Json.valid(respon)) {
                        var res = JSON.parse(respon)                            
                        var no = 1;
                        var newLement = [];

                        if (res.success) {
                            (res.data.data).forEach(element => {
                                element.number = no++;
                                newLement.push(element)
                            });
                        }    

                        oCallback({
                            recordsTotal: res.data?.recordsTotal ?? 0,
                            recordsFiltered: res.data?.recordsFiltered ?? 0,
                            data: res.data?.data ?? []
                        })
                    }
                }
            });
        },
    })

    var tableCss = function() {
        $(idTable).attr('style', 'margin:0px !important');
        $('.paging_simple_numbers').addClass('p-3');            
    }

    var hideSearch = function() {
        $(".dt-search").addClass("d-none");
    }

    var search = () => {
        /**
         * Init All Environment
         */
        hideSearch();
        tableCss();

        var search = ExAs.Doc.Select("#tableSearch");
        ExAs.Doc.Listen('keyup', function() {
            if (tb.search() !== this.value) {                
                tb.search(this.value, true, false).draw();
            }
            $('.existPaginate').val(1)
        }, search)
    }

    var print_status_user = function(value, id_user = null) {
        if (value == '1') {
            return '<button type="button" class="btn btn-sm rounded-pill btn-success waves-effect waves-light text-center gantiStatus" style="min-width: 100px"' + (id_user == sSion['token'] ? ' disabled' : '') + '>Aktif</button>';
        } else if (value == '0') {
            return '<button type="button" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light text-center gantiStatus" style="min-width: 100px"' + (id_user == sSion['token'] ? ' disabled' : '') + '>Nonaktif</button>';
        } else {
            return '<button type="button" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light text-center gantiStatus" style="min-width: 100px"' + (id_user == sSion['token'] ? ' disabled' : '') + '>Error</button>';
        }
    }
    
    var action_btn = function(status) {
        return '<div class="btn-group" role="group">' +
            // (ExAs.Permission('VW') ? '<button type="button" class="btn btn-primary btn-icon waves-effect waves-light tombolDetail"><i class="ri-search-line"></i></button>' : '') +
            (ExAs.Permission('UP') ? '<button type="button" class="btn btn-warning btn-icon waves-effect waves-light tombolEdit"><i class="ri-edit-2-fill"></i></button>' : '') +
            (ExAs.Permission('DT') ? '<button type="button" class="btn btn-danger btn-icon waves-effect waves-light tombolDelete"><i class="ri-delete-bin-5-line"></i></button>' : '') +
            '</div>';
    }
    /**
     * Getting Data From Database
     */

    var loadData = () => {
        tb.ajax.reload(null, false);
    }
    /**
     * Transaction
     */

    var Transaction = function() {
        addTrigger();
        updateTrigger();
        updateClickTrigger();
        deleteTrigger();
        statusClickTrigger();
        statusHoverTrigger();
    }

    var updateClickTrigger = function() {
        $("table tbody").on("click", ".tombolEdit", function() {
            var drop = tb.row($(this).parents("tr")).data();
            
            $('#uid_user_edit').val(drop.id_user)
            $('#username_edit').val(drop.username)
            $('#nama_edit').val(drop.nama)                    
            $('#no_hp_edit').val(drop.no_hp)                    
            $("#role_edit").val(drop.id_role).change();                    
            $("#seksi_edit").val(drop.id_seksi).change();                    
            ExAl.Modal.Show('#modalEdit');
        });
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

                                if (res.status) {
                                    ExAl.Toast.Success(res.header, res.message, function(result) {
                                        if (result.isDismissed) {
                                            loadData();
                                            ExAl.Modal.Close('#modalTambah', true);
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
                    $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                    $("#form_tambah button").removeAttr("disabled");
                }
            });
        }
    };

    var updateTrigger = function() {
        if (ExAs.Doc.Exist("#form_edit")) {

            ExAs.Validator("#submitEdit", function(isValid) {
                if (isValid == true) {
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

    var statusClickTrigger = function() {
        $("table tbody").on("click", ".gantiStatus", function() {
            var drop = tb.row($(this).parents("tr")).data();
            Swal.fire({
                position: 'top',
                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Anda Yakin?</h4><p class="text-muted mx-4 mb-0">' + (drop.status == '1' ? 'Nonaktifkan' : 'Aktifkan') + ' Data Pengguna <b>' + drop.username + '</b>?</p></div></div>',
                showCancelButton: 1,
                showConfirmButton: 1,
                allowOutsideClick: !1,
                allowEscapeKey: !1,
                focusConfirm: false,
                buttonsStyling: false,
                confirmButtonClass: "btn btn-primary w-xs me-2 mb-1",
                confirmButtonText: '<i class="' + (drop.status == '1' ? 'ri-user-unfollow-line' : 'ri-user-follow-line') + ' label-icon align-middle fs-16 me-2"></i> Ya, ' + (drop.status == '1' ? 'Nonaktifkan' : 'Aktifkan') + '',
                cancelButtonClass: "btn btn-danger w-xs me-2 mb-1",
                cancelButtonText: '<i class="ri-close-line label-icon align-middle fs-16 me-2"></i> Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "update_status",
                        method: "POST",
                        async: false,
                        data: {
                            id: drop.id_user,
                            status: drop.status == '1' ? '0': '1',
                            scrty: true
                        },
                        success: function(response) {
                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.status) {
                                    loadData();
                                    ExAl.Toast.Success(res.header, res.message + ': <b>' + drop.asset_number + '</b>');
                                } else {
                                    ExAl.Toast.Failed(res.header, res.message);
                                }
                            }
                        }
                    })
                } else {
                    $(this).replaceWith(print_status_asset(drop.status));
                }
            })
        });
    }

    var statusHoverTrigger = function() {
        $("table tbody").on("mouseenter", ".gantiStatus", function() {
            if ($(this).html() == "Aktif") {
                $(this).html('Nonaktifkan').removeClass('btn-success').addClass('btn-warning');
            } else if ($(this).html() == "Nonaktif") {
                $(this).html('Aktifkan').removeClass('btn-danger').addClass('btn-secondary');
            }
        });
        $("table tbody").on("mouseleave", ".gantiStatus", function() {
            if ($(this).html() == "Nonaktifkan") {
                $(this).html('Aktif').removeClass('btn-warning').addClass('btn-success');
            } else if ($(this).html() == "Aktifkan") {
                $(this).html('Nonaktif').removeClass('btn-secondary').addClass('btn-danger');
            }
        });
    }

    var importTrigger = function() {
        if (ExAs.Doc.Exist("#form_import")) {
            console.log('test');
            ExAs.Validator("#submitImport", function(isValid) {
                var data = new FormData();

                //Form data
                var form_data = $('#form_import').serializeArray();
                $.each(form_data, function(key, input) {
                    data.append(input.name, input.value);
                });

                //File data
                var file_data = $('input[name="file_csv"]')[0].files;
                for (var i = 0; i < file_data.length; i++) {
                    data.append("file_csv", file_data[i]);
                }

                //Custom data
                data.append('scrty', true);

                // var _input = $("#form_import").serializeArray();
                // _input.push({ name: "scrty", value: true })

                $(this).addClass("spinner spinner-white spinner-right disabled");
                $("#form_import button").attr("disabled", "disabled");

                if (isValid == true) {
                    $('.full-loading').addClass("active");
                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "insert_json",
                        method: "POST",
                        data: data,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            $("#submitImport").removeClass("spinner spinner-white spinner-right disabled");
                            $("#form_import button").removeAttr("disabled");

                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.success) {
                                    var teks = '';
                                    var icon = "success";
                                    if (res.data.gagal == "") {
                                        teks = 'Berhasil Menyimpan ' + res.data.berhasil + ' Data';
                                    } else if (res.data.berhasil == 0) {
                                        teks = 'Gagal Menyimpan Data';
                                        icon = "danger";
                                    } else {
                                        teks = 'Berhasil Menyimpan ' + res.data.berhasil + ' Data<br>Gagal Menyimpan data ke ' + res.data.gagal;
                                    }
                                    $('.full-loading').removeClass("active");

                                    ExAl.Toast.Success(res.header, teks, function(result) {
                                        if (result.isDismissed) {
                                            loadData();
                                            ExAl.Modal.Close('#modalImport', true);
                                        }
                                    });
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
                                                ExAl.Modal.Close('#modalImport', true);
                                            }
                                        });
                                } else {
                                    $('.full-loading').removeClass("active");
                                    ExAl.Toast.Failed(res.header, res.message);
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
                            } else {
                                $('.full-loading').removeClass("active");
                            }
                        },
                        error: function(e) {
                            // console.log(e);
                            $("#submitImport").removeClass("spinner spinner-white spinner-right disabled");
                        },
                    });
                } else {
                    $("#submitImport").removeClass("spinner spinner-white spinner-right disabled");
                    $("#form_import button").removeAttr("disabled");
                }
            });
        }
    };

    var loadRole = function(){
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "role",
            method: "POST",
            async: false,
            data: {
                scrty: true
            },
            success: function(response) {
                var resp = JSON.parse(response);
                if (resp.data) {
                    var roleOption = resp.data;
                    $.each(roleOption, function(i, el){ 
                        $('#role_edit').append( new Option(el.nm_role,el.id_role) );
                        $('#role').append( new Option(el.nm_role,el.id_role) );                        
                    });
                }
            }
        })
    }

    var loadSeksi = function () {
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "seksi",
            method: "POST",
            async: false,
            data: {
                scrty: true
            },
            success: function (response) {
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon)
                    var select = "";
                    if (res.success) {
                        select += "<option></option>";
                        $.each(res.data, function (index, item) {
                            select += '<option value=' + item.id_seksi + '>' + item.alias_seksi + ' - ' + item.nm_seksi + '</option>';
                        })
                        $('#seksi').append(select);
                        $('#seksi_edit').append(select);
                    }
                }
            }
        })
    }

    var deleteTrigger = function() {
        $("table tbody").on("click", ".tombolDelete", function() {
            var drop = tb.row($(this).parents("tr")).data();
            ExAl.Toast.Delete({}, function(result) {
                if (result) {
                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "delete",
                        method: "POST",
                        async: false,
                        data: {
                            id: drop.id_user,
                            scrty: true
                        },
                        success: function(response) {
                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.status) {
                                    loadData()
                                    ExAl.Toast.Success(res.header, res.message + ': <b>' + drop.username + '</b>');
                                } else {
                                    ExAl.Toast.Failed(res.header, res.message);
                                }
                            }
                        }
                    })
                }
            })
        });
    }    

    return {
        run: function() {
            search();
            tableCss();
            loadRole();
            loadSeksi();
            Transaction();
        },
        refresh: function() { loadData() }
    }
})();

ExAs.Dom(ExAsUser.run())