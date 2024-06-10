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
.seat {
    width: 40px;
    height: 40px;
    background-color: #6c757d;
    margin: 5px;
    border-radius: 5px;
    display: inline-block;
}
.seat.selected {
    background-color: #28a745;
}
.seat.available {
    background-color: #82B378;
}
.card-passenger{
    background-color: '#EEEEEE';
    cursor: pointer;
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
                        <h4>Atur Posisi Duduk Penumpang</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="d-flex flex-column justify-content-center" id="canvas-seat">                                                                    
                                </div>
                            </div>
                            <div class="col-7">
                                <input type="hidden" id="passenger-selected">
                                <div class="d-flex flex-column justify-content-left p-3" id="canvas-passenger">                                                                    
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- end col -->
    </div>
</div>