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
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="ri-add-line align-bottom me-1"></i> <?= getLangKey('trip_bus_weekend_btn_add'); ?></button>
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
                                            <th><?= getLangKey('show_trip_bus_weekend_col_2'); ?></th>
                                            <th><?= getLangKey('show_trip_bus_weekend_col_3'); ?></th>
                                            <th><?= getLangKey('show_trip_bus_weekend_col_4'); ?></th>                                            
                                            <th><?= getLangKey('show_trip_bus_weekend_col_5'); ?></th>
                                            <th><?= getLangKey('show_trip_bus_weekend_col_6'); ?></th>
                                            <th><?= getLangKey('show_trip_bus_weekend_col_7'); ?></th>
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
            <div class="modal-content border-0 overflow-hidden">
                <div class="modal-header p-3">
                    <h4 class="card-title mb-0"><?= getLangKey('trip_bus_weekend_add_modal_title'); ?></h4>
                    <button type="button" class="btn-close tutup"></button>
                </div>
                <div class="alert alert-warning rounded-0 mb-0">
                    <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                </div>
                <div class="modal-body pb-2">                    
                    <div class="mb-3">
                        <label><?= getLangKey('trip_bus_weekend_add_modal_label_month'); ?> <span class="text-danger">*</span></label>
                        <input type="month" required class="form-control" placeholder="<?= getLangKey('trip_bus_weekend_add_modal_label_month_plc'); ?>" data-error="<?= getLangKey('trip_bus_weekend_add_modal_label_month_error'); ?>" id="month" name="month" />
                        <div class="invalid-feedback"><?= getLangKey('trip_bus_weekend_add_modal_label_month_error'); ?></div>
                    </div>
                    <div class="mb-3">
                        <label><?= getLangKey('trip_bus_weekend_add_modal_label_week'); ?> <span class="text-danger">*</span></label>
                        <select name="week" id="week" class="form-control" required>
                            <option>Pilih Periode Minggu</option>
                            <option value="1">Minggu ke-1</option>
                            <option value="2">Minggu ke-2</option>
                            <option value="3">Minggu ke-3</option>
                            <option value="4">Minggu ke-4</option>
                        </select>
                        <div class="invalid-feedback"><?= getLangKey('trip_bus_weekend_add_modal_label_week_error'); ?></div>
                    </div>
                    <div class="mb-3 row" id="schedule-available">                            
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>