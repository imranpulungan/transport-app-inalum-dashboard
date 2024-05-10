'use strict';

var ExAsUser = (function() {
    var idTable = "#AsTable";
    var MAIN = 'trans/request/';
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
        rowId: 'asset_number',
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
                width: "1%",
                data: "schedule_number"
            },
            {
                targets: i++,
                data: "total_passenger"
            },
            {
                targets: i++,
                data: "departure",
                render: function(data, type, full, meta) {
                    return data;
                },
            },
            {
                targets: i++,
                data: "departure_time",
                render: function(data, type, full, meta) {
                    return data;
                }
            },
            {
                targets: i++,
                data: "arrival",
                render: function(data, type, full, meta) {
                    return data;
                },
            },
            {
                targets: i++,
                data: "arrival_time",
                render: function(data, type, full, meta) {
                    return data;
                },
            },
            {
                targets: i++,
                data: null,
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
                            console.log({res});
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
            $('.existPaginate').val(1)
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
        // inputEmailTrigger();
        addTrigger();
        updateTrigger();
        updateClickTrigger();
        deleteTrigger();
        statusClickTrigger();
        statusHoverTrigger();
        openQrClickTrigger();
    }

    var statusClickTrigger = function() {
        $("table tbody").on("click", ".gantiStatus", function() {
            var drop = tb.row($(this).parents("tr")).data();
            Swal.fire({
                position: 'top',
                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Anda Yakin?</h4><p class="text-muted mx-4 mb-0">' + (drop.status == '1' ? 'Nonaktifkan' : 'Aktifkan') + ' Akun <b>' + drop.nama + '</b>?</p></div></div>',
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
                            status: drop.status,
                            scrty: true
                        },
                        success: function(response) {
                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.status) {
                                    ExAl.Toast.Success(res.header, res.message + ': <b>' + drop.nama + '</b>');
                                } else {
                                    ExAl.Toast.Failed(res.header, res.message);
                                }
                            }
                        }
                    })
                } else {
                    $(this).replaceWith(print_status_user(drop.status));
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
            $('#edit_id_revaluation').val(drop.id_revaluation);                                    
            $('#edit_asset_number').val(drop.asset_number);
            $('#edit_rupiah').val(drop.rupiah);
            $('#edit_dollar').val(drop.dollar);
            $('#edit_year').val(drop.year);

            ExAl.Modal.Show('#modalEdit');
        });
    }

    var openQrClickTrigger = function() {
        $("table tbody").on("click", ".tombolOpenQr", function() {
            var drop = tb.row($(this).parents("tr")).data();         
            $('#qrcode-plat-number').html(drop.kd_kendaraan);
            $('#qrcode-canvas-image').attr('src', e3nCeL0t + drop.qr_code);
            $('#qrcode-canvas-image').attr('height', '100%');
            $('#qrcode-canvas-image').attr('width', '100%');

            ExAl.Modal.Show('#modalQRCode');
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
                            id_revaluation: drop.id_revaluation,
                            asset_number: drop.asset_number,
                            scrty: true
                        },
                        success: function(response) {
                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.status) {
                                    loadData()
                                    ExAl.Toast.Success(res.header, res.message);
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

    var monthSelected;
    var weekSelected;

    $('#week').on('change', function() {
        weekSelected = this.value;
        loadSchedule();

    });

    $('#month').on('change', function() {
        monthSelected = this.value;
        loadSchedule();
    });

    $(".myButton").click(function() {
        console.log('x');
        // // Retrieve the data attached to the button
        // var myData = $(this).data('mydata');
        
        // // Access the object and its properties
        // console.log("Name: " + myData.name);
        // console.log("Age: " + myData.age);
    });
    
    
    function loadSchedule () {
        $("#schedule-available").html("<center>Loading...</center>");
        var monthArray = monthSelected.split("-");

        if (monthArray[0] != null && monthArray[1] != null && weekSelected != null) {
            $.ajax({
                url: e3nCeL0t + MoDaD + MAIN + "available",
                method: "POST",
                async: true,
                data: {
                    scrty   : true,
                    month   : monthArray[1],
                    week    : weekSelected,
                    year    : monthArray[0]
                },
                success: function(response) {
                    var respon = ExAs.uXvbI(response)
                    if (ExAs.Utils.Json.valid(respon)) {
                        var res = JSON.parse(respon);
                        console.log(res);
                        var no = 1;
                        var newLement = "";
    
                        if (res.success) {
                            (res.data).forEach(element => {
                                element.number = no++;
                                newLement += `<div class="col-lg-4">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col">
                                                            <div class="card-body">
                                                                <h5 class="card-title">
                                                                    ${element.departure_day}
                                                                    <div class="badge ${element.type_schedule_bus == "WEEKEND" ? "bg-secondary" : "bg-primary"}">
                                                                    ${element.type_schedule_bus}</div>
                                                                </h5>
                                                                <p class="card-text"><small class="text-muted">${element.departure_date}</small></p>
                                                                   
                                                                <a href="${e3nCeL0t}${MoDaD}${MAIN}add?schedule_number=${element.schedule_number}&departure_date=${element.departure_date}" 
                                                                    class="btn btn-primary btn-sm" role="button" type="button">Pilih</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>`;
                            });
    
                            setTimeout(() => {
                                $("#schedule-available").html(newLement);
                            }, 500);
                            // return;
                        }
                    }
    
                    // setTimeout(() => {
                    //     $("#schedule-available").html("Data tidak ditemukan");
                    // }, 500);
                }
            });
        } 
    };
    

    return {
        run: function() {
            search();
            Transaction();
            $( "#year" ).datepicker({dateFormat: 'yy'});
            // setInterval(loadData, GLOBAL_COOLDOWN)
        },
        refresh: function() { loadData() }
    }
})();

ExAs.Dom(ExAsUser.run())