<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"><?= isset($title) && $title !== '' ? $title : 'Surat Izin Kerja Aman'; ?></h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <?php if (isset($parent) && $parent !== '') : ?>
                                <li class="breadcrumb-item"><span><?= $parent; ?></span></li>
                            <?php endif; ?>                            
                            <li class="breadcrumb-item active"><span><?= isset($title) && $title !== '' ? $title : 'Surat Izin Kerja Aman'; ?></span></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row g-4 mb-3">
            <div class="col-sm">
                <div class="d-flex justify-content-sm-first gap-2">

                    <div class="">
                        <select class="form-select w-2 ml-2" id="tableLength">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="-1">All</option>
                        </select>
                    </div>

                    <div class="search-box ms-2">
                        <input type="text" class="form-control" id="tableSearch" placeholder="Cari...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-auto">
                <div>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="ri-add-line align-bottom me-1"></i> <?= getLangKey('schedule_btn_add'); ?></button>
                    <button type="button" class="btn btn-warning btn-label" onclick="ExAsUser.refresh()">
                        <i class="ri-refresh-line label-icon align-middle fs-16 me-2"></i>
                        Refresh
                    </button>
                </div>
            </div>
        </div>

        <style>
            .mr-auto,
            .mx-auto {
                margin-right: auto !important;
            }

            .ml-auto,
            .mx-auto {
                margin-left: auto !important;
            }
        </style>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="align-items-center d-flex">
                            <div class="d-flex" id="tableInfo"></div>

                            <div class="ml-auto d-none d-sm-none d-md-block">
                                <div class="input-group">
                                    <button type="button" class="btn btn-danger btn-label previous">
                                        <i class="ri-arrow-left-s-line label-icon align-middle fs-16 me-2"></i>
                                        Previous
                                    </button>
                                    <input type="number" style="max-width: 50px;text-align:center" value="1" class="form-control existPaginate" readonly placeholder="">
                                    <button type="button" class="btn btn-danger btn-label right next rounded-end">
                                        <i class="ri-arrow-right-s-line label-icon align-middle fs-16 ms-2"></i>
                                        Next
                                    </button>
                                </div>
                            </div>
                            <div class="ml-auto d-sm-block d-md-none">
                                <div class="input-group">
                                    <button type="button" class="btn btn-danger previous">
                                        <i class="ri-arrow-left-s-line label-icon align-middle fs-16"></i>
                                    </button>
                                    <input type="number" style="max-width: 50px;text-align:center" value="1" class="form-control existPaginate" readonly placeholder="">
                                    <button type="button" class="btn btn-danger right next rounded-end">
                                        <i class="ri-arrow-right-s-line label-icon align-middle fs-16"></i>
                                    </button>
                                    <!-- <button type="button" class="btn btn-secondary rounded-start ms-1">
                                        <i class="ri-filter-line label-icon align-middle fs-16"></i>
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div><!-- end card header -->
                    <div class="progress table-progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                    </div>

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="table-responsive table-card">
                                <table class="table align-middle table-nowrap mb-0" style="margin-top: 0px !important;" id="AsTable">
                                    <thead class="table-light">
                                        <tr>
                                            <!-- <th><?= getLangKey('show_schedule_col_1'); ?></th> -->
                                            <th><?= getLangKey('show_schedule_col_2'); ?></th>
                                            <th><?= getLangKey('show_schedule_col_3'); ?></th>
                                            <th><?= getLangKey('show_schedule_col_4'); ?></th>                                            
                                            <th><?= getLangKey('show_schedule_col_5'); ?></th>                                            
                                            <th><?= getLangKey('show_schedule_col_6'); ?></th>                                            
                                            <th><?= getLangKey('show_schedule_col_7'); ?></th>
                                            <th>Aksi</th>                                  
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

    </div>
</div>

<?php if (hasPermission('IN')) : ?>
    <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_tambah" class="needs-validation" novalidate>
                <div class="modal-content border-0 overflow-hidden">
                    <div class="modal-header p-3">
                        <h4 class="card-title mb-0"><?= getLangKey('schedule_add_modal_title'); ?></h4>
                        <button type="button" class="btn-close tutup"></button>
                    </div>
                    <div class="alert alert-warning rounded-0 mb-0">
                        <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                    </div>
                    <div class="modal-body pb-2">                                                            
                        <div class="mb-3">
                            <label><?= getLangKey('schedule_add_modal_label_type'); ?> <span class="text-danger">*</span></label>                            
                            <select class="form-control" required style="width: 100%" id="type_schedule_bus" name="type_schedule_bus">
                                <option value="WEEKEND">WEEKEND</option>
                                <option value="HOLIDAY" selected>HOLIDAY</option>
                            </select>
                            <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_type_error'); ?></div>
                        </div>
                        <div class="p-3">
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label><?= getLangKey('schedule_add_modal_label_departure'); ?> <span class="text-danger">*</span></label>
                                    <input type="text" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_departure_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_departure_error'); ?>" id="departure" name="departure" />
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_departure_error'); ?></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label><?= getLangKey('schedule_add_modal_label_departure_time'); ?> <span class="text-danger">*</span></label>
                                    <input type="time" min="<?= date('Y-m-d'); ?>" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_departure_time_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_departure_time_error'); ?>" id="departure_time" name="departure_time" />
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_departure_time_error'); ?></div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label><?= getLangKey('schedule_add_modal_label_departure_date'); ?> <span class="text-danger">*</span></label>
                                    <input type="date" min="<?= date('Y-m-d'); ?>" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_departure_date_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_departure_date_error'); ?>" id="departure_date" name="departure_date" />
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_departure_date_error'); ?></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label><?= getLangKey('schedule_add_modal_label_departure_day'); ?> <span class="text-danger">*</span></label>
                                    <select class="form-control" required style="width: 100%" id="departure_day" name="departure_day">
                                        <option value="MONDAY">Senin</option>
                                        <option value="TUESDAY" selected>Selasa</option>
                                        <option value="WEDNESDAY" selected>Rabu</option>
                                        <option value="THURSDAY" selected>Kamis</option>
                                        <option value="FRIDAY" selected>Jum'at</option>
                                        <option value="SATURDAY" selected>Sabtu</option>
                                        <option value="SUNDAY" selected>Minggu</option>
                                    </select>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_departure_day_error'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="row mb-3">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label><?= getLangKey('schedule_add_modal_label_arrival'); ?> <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_arrival_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_arrival_error'); ?>" id="arrival" name="arrival" />
                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_arrival_error'); ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label><?= getLangKey('schedule_add_modal_label_arrival_time'); ?> <span class="text-danger">*</span></label>
                                <input type="time" min="<?= date('Y-m-d'); ?>" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_arrival_time_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_arrival_time_error'); ?>" id="arrival_time" name="arrival_time" />
                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_arrival_time_error'); ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label><?= getLangKey('schedule_add_modal_label_arrival_date'); ?> <span class="text-danger">*</span></label>
                                <input type="date" min="<?= date('Y-m-d'); ?>" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_arrival_date_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_arrival_date_error'); ?>" id="arrival_date" name="arrival_date" />
                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_arrival_date_error'); ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label><?= getLangKey('schedule_add_modal_label_arrival_day'); ?> <span class="text-danger">*</span></label>
                                <select class="form-control" required style="width: 100%" id="arrival_day" name="arrival_day">
                                    <option value="MONDAY">Senin</option>
                                    <option value="TUESDAY" selected>Selasa</option>
                                    <option value="WEDNESDAY" selected>Rabu</option>
                                    <option value="THURSDAY" selected>Kamis</option>
                                    <option value="FRIDAY" selected>Jum'at</option>
                                    <option value="SATURDAY" selected>Sabtu</option>
                                    <option value="SUNDAY" selected>Minggu</option>
                                </select>
                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_arrival_day_error'); ?></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="modal-footer">
                        <button type="button" class="tutup btn btn-danger font-weight-bold">Batal</button>
                        <button type="button" class="btn btn-primary font-weight-bold" id="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>

<?php if (hasPermission('UP')) : ?>
    <div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_edit" class="needs-validation" novalidate>
                <div class="modal-content border-0 overflow-hidden">
                    <div class="modal-header p-3">
                        <h4 class="card-title mb-0"><?= getLangKey('schedule_edit_modal_title'); ?></h4>
                        <button type="button" class="btn-close tutup"></button>
                    </div>
                    <div class="alert alert-warning rounded-0 mb-0">
                        <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                    </div>
                    <div class="modal-body pb-2">                                                            
                        <div class="mb-3">
                            <label><?= getLangKey('schedule_add_modal_label_number'); ?> <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" readonly class="form-control readonly" placeholder="<?= getLangKey('schedule_add_modal_label_number_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_number_error'); ?>" id="schedule_number" name="schedule_number" />
                            </div>                            
                            <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_number_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label><?= getLangKey('schedule_add_modal_label_type'); ?> <span class="text-danger">*</span></label>                            
                            <div class="input-group mb-3">
                                <input type="text" readonly class="form-control readonly" placeholder="<?= getLangKey('schedule_add_modal_label_type_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_type_error'); ?>" id="edit_type_schedule_bus" name="type_schedule_bus" />
                            </div>
                            <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_type_error'); ?></div>
                        </div>                        
                        <div class="p-3">
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label><?= getLangKey('schedule_add_modal_label_departure'); ?> <span class="text-danger">*</span></label>
                                    <input type="text" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_departure_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_departure_error'); ?>" id="edit_departure" name="departure" />
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_departure_error'); ?></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label><?= getLangKey('schedule_add_modal_label_departure_time'); ?> <span class="text-danger">*</span></label>
                                    <input type="time" min="<?= date('Y-m-d'); ?>" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_departure_time_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_departure_time_error'); ?>" id="edit_departure_time" name="departure_time" />
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_departure_time_error'); ?></div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label><?= getLangKey('schedule_add_modal_label_departure_date'); ?> <span class="text-danger">*</span></label>
                                    <input type="date" min="<?= date('Y-m-d'); ?>" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_departure_date_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_departure_date_error'); ?>" id="edit_departure_date" name="departure_date" />
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_departure_date_error'); ?></div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label><?= getLangKey('schedule_add_modal_label_departure_day'); ?> <span class="text-danger">*</span></label>
                                    <select class="form-control" required style="width: 100%" id="edit_departure_day" name="departure_day">
                                        <option value="MONDAY">Senin</option>
                                        <option value="TUESDAY" selected>Selasa</option>
                                        <option value="WEDNESDAY" selected>Rabu</option>
                                        <option value="THURSDAY" selected>Kamis</option>
                                        <option value="FRIDAY" selected>Jum'at</option>
                                        <option value="SATURDAY" selected>Sabtu</option>
                                        <option value="SUNDAY" selected>Minggu</option>
                                    </select>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_departure_day_error'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="row mb-3">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label><?= getLangKey('schedule_add_modal_label_arrival'); ?> <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_arrival_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_arrival_error'); ?>" id="edit_arrival" name="arrival" />
                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_arrival_error'); ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label><?= getLangKey('schedule_add_modal_label_arrival_time'); ?> <span class="text-danger">*</span></label>
                                <input type="time" min="<?= date('Y-m-d'); ?>" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_arrival_time_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_arrival_time_error'); ?>" id="edit_arrival_time" name="arrival_time" />
                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_arrival_time_error'); ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label><?= getLangKey('schedule_add_modal_label_arrival_date'); ?> <span class="text-danger">*</span></label>
                                <input type="date" min="<?= date('Y-m-d'); ?>" required class="form-control" placeholder="<?= getLangKey('schedule_add_modal_label_arrival_date_plc'); ?>" data-error="<?= getLangKey('schedule_add_modal_label_arrival_date_error'); ?>" id="edit_arrival_date" name="arrival_date" />
                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_arrival_date_error'); ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label><?= getLangKey('schedule_add_modal_label_arrival_day'); ?> <span class="text-danger">*</span></label>
                                <select class="form-control" required style="width: 100%" id="edit_arrival_day" name="arrival_day">
                                    <option value="MONDAY">Senin</option>
                                    <option value="TUESDAY" selected>Selasa</option>
                                    <option value="WEDNESDAY" selected>Rabu</option>
                                    <option value="THURSDAY" selected>Kamis</option>
                                    <option value="FRIDAY" selected>Jum'at</option>
                                    <option value="SATURDAY" selected>Sabtu</option>
                                    <option value="SUNDAY" selected>Minggu</option>
                                </select>
                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_arrival_day_error'); ?></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="modal-footer">
                        <button type="button" class="tutup btn btn-danger font-weight-bold">Batal</button>
                        <button type="button" class="btn btn-primary font-weight-bold" id="submitEdit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>