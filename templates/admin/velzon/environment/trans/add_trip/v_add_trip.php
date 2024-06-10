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
            <form autocomplete="off" enctype="multipart/form-data" method="post" data-type="save" id="form_tambah" class="needs-validation" novalidate>
                <div class="card">
                    <div class="card-header">
                        <h3>Tambah Trip Baru</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12 col-md-12 col-sm-12">
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
                                    <label><?= getLangKey('departure_date'); ?> <span class="text-danger">*</span></label>
                                    <input readonly type="date" required class="form-control" placeholder="<?= getLangKey('departure_date_plc'); ?>" id="departure_date" name="departure_date" />                                        
                                </div>   
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label><?= getLangKey('departure_day'); ?> <span class="text-danger">*</span></label>
                                    <input readonly type="text" required class="form-control" placeholder="<?= getLangKey('departure_day_plc'); ?>" id="departure_day" name="departure_day" />
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label><?= getLangKey('departure_time'); ?> <span class="text-danger">*</span></label>
                                    <input readonly type="time" required class="form-control" placeholder="<?= getLangKey('departure_time_plc'); ?>" id="departure_time" name="departure_time" />                                        
                                </div>                             
                            </div>

                            <div class="row">                                
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label><?= getLangKey('return_date'); ?> <span class="text-danger">*</span></label>
                                    <input type="date" required class="form-control" placeholder="<?= getLangKey('return_date_plc'); ?>" id="return_date" name="return_date"/>
                                </div>      
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label><?= getLangKey('return_day'); ?> <span class="text-danger">*</span></label>
                                    <input readonly type="text" required class="form-control" placeholder="<?= getLangKey('return_day_plc'); ?>" id="return_day" name="return_day" />                                                                            
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label><?= getLangKey('return_time'); ?> <span class="text-danger">*</span></label>
                                    <input type="time" required class="form-control" placeholder="<?= getLangKey('return_time_plc'); ?>" id="return_time" name="return_time" />                                        
                                </div>                        
                            </div>
                            
                            <div class="row">                                
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label><?= getLangKey('trip_number'); ?> <span class="text-danger">*</span></label>
                                    <input type="text" required class="form-control" placeholder="<?= getLangKey('trip_number_plc'); ?>" id="trip_number" name="trip_number" />                                        
                                </div>      
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <label><?= getLangKey('bus_number'); ?> <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="<?= getLangKey('bus_number_plc'); ?>" id="bus_number" name="bus_number" />                                        
                                </div>                        
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary font-weight-bold" id="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div><!-- end col -->
    </div>
</div>