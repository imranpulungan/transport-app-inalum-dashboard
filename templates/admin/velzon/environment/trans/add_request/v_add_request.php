<style>
    .f1-steps { overflow: hidden; position: relative; margin-top: 20px; }

.f1-progress { position: absolute; top: 24px; left: 0; width: 100%; height: 1px; background: #ddd; }
.f1-progress-line { position: absolute; top: 0; left: 0; height: 1px; background: #338056; }

.f1-step { position: relative; float: left; width: 33%; padding: 0 5px; }

.f1-step-icon {
	display: inline-block; width: 40px; height: 40px; margin-top: 4px; background: #ddd;
	font-size: 16px; color: #fff; line-height: 40px;
	-moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%;
}
.f1-step.activated .f1-step-icon {
	background: #fff; border: 1px solid #338056; color: #338056; line-height: 38px;
}
.f1-step.active .f1-step-icon {
	width: 48px; height: 48px; margin-top: 0; background: #338056; font-size: 22px; line-height: 48px;
}

.f1-step p { color: #ccc; }
.f1-step.activated p { color: #338056; }
.f1-step.active p { color: #338056; }

.f1 fieldset { display: none; text-align: left; }

.f1-buttons { text-align: right; }

.f1 .input-error { border-color: #f35b3f; }

table {
  border-collapse: separate; 
  border-spacing: 1em;
}
fieldset{
    padding: 20px
}
</style>
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
                            <!-- <li class="breadcrumb-item active">Daftar User</li> -->
                        </ol>
                    </div>

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
        
        <div class="col-xl-12">
            <form action="" method="post" class="f1">
                <div class="card">
                    <div class="card-header">
                        <div class="f1-steps text-center">
                            <div class="f1-progress">
                                <div class="f1-progress-line" data-now-value="10" data-number-of-steps="3" style="width: 33%;"></div>
                            </div>
                            <div class="f1-step active">
                                <div class="f1-step-icon">
                                    <i class="ri-suitcase-2-line"></i>
                                </div>
                                <p>Informasi Keberangkatan</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon">
                                    <i class="mdi mdi-human-male-female"></i>
                                </div>

                                <p>Data Penumpang</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon">
                                    <i class="mdi mdi-check-circle-outline"></i>
                                </div>
                                <p>Request</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <fieldset>
                                <div class="row">
                                    <input type="hidden" required class="form-control" id="departure_code" name="departure_code" />
                                    <input type="hidden" required class="form-control" id="arrival_code" name="arrival_code" />
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                        <label><?= getLangKey('schedule_number'); ?> <span class="text-danger">*</span></label>
                                        <input readonly type="text" required class="form-control " placeholder="<?= getLangKey('schedule_number'); ?>" id="schedule_number" name="schedule_number" />                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                        <label><?= getLangKey('type_schedule_bus'); ?> <span class="text-danger">*</span></label>
                                        <input readonly type="text" required class="form-control" placeholder="<?= getLangKey('type_schedule_bus_plc'); ?>" id="type_schedule_bus" name="type_schedule_bus" />                                        
                                    </div>                                                               
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                        <label><?= getLangKey('departure'); ?> <span class="text-danger">*</span></label>
                                        <input readonly type="text" required class="form-control " placeholder="<?= getLangKey('departure'); ?>" id="departure" name="departure" />                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                        <label><?= getLangKey('arrival'); ?> <span class="text-danger">*</span></label>
                                        <input readonly type="text" required class="form-control" placeholder="<?= getLangKey('arrival'); ?>" id="arrival" name="arrival" />                                        
                                    </div>                                                               
                                </div>         
                                <hr>                       
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <label><?= getLangKey('departure_day'); ?> <span class="text-danger">*</span></label>
                                        <input readonly type="text" required class="form-control" placeholder="<?= getLangKey('departure_day_plc'); ?>" id="departure_day" name="departure_day" />
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <label><?= getLangKey('departure_date'); ?> <span class="text-danger">*</span></label>
                                        <input readonly type="date" required class="form-control" placeholder="<?= getLangKey('departure_date_plc'); ?>" id="departure_date" name="departure_date" />                                        
                                    </div>   
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <label><?= getLangKey('departure_time'); ?> <span class="text-danger">*</span></label>
                                        <input readonly type="time" required class="form-control" placeholder="<?= getLangKey('departure_time_plc'); ?>" id="departure_time" name="departure_time" />                                        
                                    </div>                             
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <label><?= getLangKey('return_day'); ?> <span class="text-danger">*</span></label>
                                        <input readonly type="text" required class="form-control" placeholder="<?= getLangKey('return_day_plc'); ?>" id="return_day" name="return_day" />
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <label><?= getLangKey('return_date'); ?> <span class="text-danger">*</span></label>
                                        <input readonly type="date" required class="form-control" placeholder="<?= getLangKey('return_date_plc'); ?>" id="return_date" name="return_date" />                                        
                                    </div>      
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <label><?= getLangKey('return_time'); ?> <span class="text-danger">*</span></label>
                                        <input readonly type="time" required class="form-control" placeholder="<?= getLangKey('return_time_plc'); ?>" id="return_time" name="return_time" />                                        
                                    </div>                        
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label for="search-user">Cari Pengguna</label>
                                            <div class="input-group">             
                                                <input autocomplete="off" name="search-user" id="search-user" type="text" class="form-control">
                                            </div>
                                            <div id="list-user" class="d-none list-group"></div>
                                            <input type="hidden" name="id_user" id="id_user"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label><?= getLangKey('total_passenger'); ?> <span class="text-danger">*</span></label>
                                            <select name="total_passenger" id="total_passenger" class="form-control">
                                                <option value="1">1 Penumpang</option>
                                                <option value="2">2 Penumpang</option>
                                                <option value="3">3 Penumpang</option>
                                                <option value="4">4 Penumpang</option>
                                            </select>
                                            <div class="invalid-feedback"><?= getLangKey('total_passenger_error'); ?></div>
                                        </div>
                                    </div>                             
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div id="data-passenger" class="row"></div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                    <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-sm-12 h6 p-2">
                                        <h4>Informasi Keberangkatan</h4>
                                        <table id="final-departure" class="w-100"></table>
                                    </div>
                                    <div class="col-lg-7 col-md-6 col-sm-12">
                                        <h4>Informasi Penumpang</h4>
                                        <div id="final-passenger" class="row"></div>
                                    </div>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                    <button id="btn-request" type="button" class="btn btn-primary">Request Sekarang</button>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- end col -->

    </div>
</div>

<div class="modal fade" id="modalPassenger" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form autocomplete="off" method="post" data-type="save" id="form_passenger" class="needs-validation" novalidate>
            <div class="modal-content border-0 overflow-hidden">
                <div class="modal-header p-3">
                    <h4 class="card-title mb-0"><?= getLangKey('passenger_add_modal_title'); ?> <span id="urutan-penumpang"></span></h4>
                    <button type="button" class="btn-close tutup"></button>
                </div>
                <div class="alert alert-warning rounded-0 mb-0">
                    <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                </div>
                
                <div class="modal-body pb-2">
                <div class="mb-3">
                        <input type="hidden" id="input_id" name="input_id"/>
                    </div>
                    <div class="mb-3">
                        <label><?= getLangKey('passenger_modal_label_name'); ?> <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" placeholder="<?= getLangKey('passenger_modal_label_name_plc'); ?>" data-error="<?= getLangKey('passenger_modal_label_name_error'); ?>" id="input_name" name="input_name" />
                        <div class="invalid-feedback"><?= getLangKey('passenger_modal_label_name_error'); ?></div>
                    </div>
                    <div class="mb-3">
                        <label><?= getLangKey('passenger_modal_input_age'); ?> <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" placeholder="<?= getLangKey('passenger_modal_input_age_plc'); ?>" data-error="<?= getLangKey('passenger_modal_input_age_error'); ?>" id="input_age" name="input_age" />
                        <div class="invalid-feedback"><?= getLangKey('passenger_modal_input_age_error'); ?></div>
                    </div> 
                    <div class="mb-3">
                        <label><?= getLangKey('passenger_modal_input_gender'); ?> <span class="text-danger">*</span></label>                        
                        <select name="input_gender" id="input_gender" class="form-control">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>                            
                        </select>
                        <div class="invalid-feedback"><?= getLangKey('passenger_modal_input_gender_error'); ?></div>
                    </div>                      
                    <div class="mb-3">
                        <label><?= getLangKey('passenger_modal_input_relation'); ?> <span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" placeholder="<?= getLangKey('passenger_modal_input_relation_plc'); ?>" data-error="<?= getLangKey('passenger_modal_input_relation_error'); ?>" id="input_relation" name="input_relation" />
                        <div class="invalid-feedback"><?= getLangKey('passenger_modal_input_relation_error'); ?></div>
                    </div>
                    <div class="mb-3">
                        <label><?= getLangKey('passenger_modal_input_seat'); ?> <span class="text-danger">*</span></label>
                        <!-- <input type="text" required class="form-control" placeholder="<?= getLangKey('passenger_modal_input_seat_plc'); ?>" data-error="<?= getLangKey('passenger_modal_input_seat_error'); ?>" id="input_seat" name="input_seat" /> -->
                        <select name="input_seat" id="input_seat" class="form-control"></select>
                        <div class="invalid-feedback"><?= getLangKey('passenger_modal_input_seat_error'); ?></div>
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