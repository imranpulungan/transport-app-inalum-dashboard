<?php

if (!function_exists('generateMenuDraggable')) {
	function generateMenuDraggable($data)
	{
		// var_dump($data);
		// exit();
		$mn = '';
		foreach ($data as $key => $value) {
			$mn .= '<div class="list-group-item nested-' . $value->level . '" id="' . $value->id_menu . '">';
			// var_dump($value);
			// echo $value->id_menu;
			$mn .= '<div class="d-flex align-items-center">';
			$mn .= '<div class="flex-grow-1">';
			if (isset($value->icon_menu) && $value->icon_menu != null && $value->icon_menu != "") {
				$mn .= '<i class="' . explode('"', $value->icon_menu)[1] . ' fs-16 align-middle text-primary me-2"></i> ';
				// $mn .= $value->icon_menu . ' ';
			}
			if (isset($value->nm_menu) && $value->nm_menu != null && $value->nm_menu != "") {
				// $mn .= $value->nm_menu;
				$mn .= '<span class="nm_menu" ' .
					'data-id="' . (base64_encode($value->id_menu)) . '" ' .
					'data-link="' . (base64_encode($value->link_menu)) . '" ' .
					'data-status="' . (base64_encode($value->status)) . '" ' .
					'data-icon="' . (base64_encode($value->icon_menu)) . '">' . $value->nm_menu . '</span>';
			}
			$mn .= '</div>';
			$mn .= '<div class="flex-shrink-0">';
			if ($value->status == 'A') {
				$mn .= '<span class="badge rounded-pill badge-outline-success me-2">Active</span>';
			} else {
				$mn .= '<span class="badge rounded-pill badge-outline-danger me-2">Inactive</span>';
			}
			$mn .= '<div class="btn-group" role="group">';
			$mn .= '<button type="button" class="btn btn-sm btn-warning btn-icon waves-effect waves-light tombolEdit" ' .
				'data-id="' . (base64_encode($value->id_menu)) . '" ><i class="ri-edit-2-fill"></i></button>';
			$mn .= '<button type="button" class="btn btn-sm btn-danger btn-icon waves-effect waves-light tombolDelete" ' .
				'data-id="' . (base64_encode($value->id_menu)) . '" ><i class="ri-delete-bin-5-line"></i></button>';
			$mn .= '</div>';
			$mn .= '</div>';
			$mn .= '</div>';
			$mn .= '<div class="list-group nested-list nested-sortable">';
			if (isset($value->submenu)) {
				// foreach ($value->submenu as $key2 => $value2) {
				$mn .= generateMenuDraggable($value->submenu);
				// var_dump($value2);
				// }
			}
			$mn .= '</div>';
			$mn .= '</div>';
		}

		return $mn;
	}
}
?>
<style>
	.offcanvas-body .navbar-nav .nav-link {
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		padding: .625rem 1.5rem;
		color: var(--vz-vertical-menu-item-color);
		font-size: .9375rem;
		font-family: hkgrotesk, sans-serif;
	}

	.offcanvas-body .navbar-nav .nav-sm .nav-link {
		color: var(--vz-vertical-menu-sub-item-color-dark);
	}

	.offcanvas-body .navbar-nav .nav-link i {
		display: inline-block;
		min-width: 1.75rem;
		font-size: 18px;
		line-height: inherit;
	}
</style>
<div class="page-content">

	<div class="container-fluid">
		<div class="offcanvas offcanvas-end border-0" tabindex="-1" id="go-to-offcanvas" style="visibility: visible; width: 285px" aria-modal="true" role="dialog">
			<div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
				<h5 class="m-0 me-2 text-light">Preview</h5>

				<button id="close-offcanvas" type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body align-items-center bg-primary" style="padding: 0rem 0rem;">
				<div id="scrollbar">
					<div class="container-fluid">

						<div id="two-column-menu">
						</div>
						<ul class="navbar-nav" id="navbar-nav">

						</ul>
					</div>
				</div>
			</div>
			<div class="offcanvas-footer p-3 text-center bg-primary">
				<button type="button" class="btn btn-danger w-100" data-bs-dismiss="offcanvas">Tutup</a>
			</div>
		</div>

		<div class="customizer-setting d-block">
			<div id="previewBtn" class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#go-to-offcanvas" aria-controls="theme-settings-offcanvas">
				<i class="ri-file-list-line"></i>
			</div>
		</div>
		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Menu List</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<?php if (isset($grandparent) && $grandparent !== '') : ?>
								<li class="breadcrumb-item"><span><?= $grandparent; ?></span></li>
							<?php endif; ?>
							<?php if (isset($parent) && $parent !== '') : ?>
								<li class="breadcrumb-item"><span><?= $parent; ?></span></li>
							<?php endif; ?>
							<li class="breadcrumb-item active"><span><?= isset($title) && $title !== '' ? $title : 'Inalum Financial Highlights'; ?></span></li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->

		<div class="card">
			<div class="card-header align-items-center d-flex">
				<div class="mb-0 flex-grow-1">
					<?php if (hasPermission('IN')) : ?>
						<button class="btn btn-success tombolTambah" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="ri-add-circle-line align-bottom me-1"></i> Tambah Menu</button>
					<?php endif; ?>
				</div>
				<div class="flex-shrink-0">
					<?php if (hasPermission('IN')) : ?>
						<button class="btn btn-secondary simpan"><i class="ri-checkbox-circle-line align-bottom me-1"></i> Simpan Perubahan</button>
					<?php endif; ?>
				</div>
			</div><!-- end card header -->

			<div class="card-body">
				<div class="list-group nested-list nested-sortable" id="menu_draggable">
					<?php
					if ($menu_all->success) {
						echo generateMenuDraggable($menu_all->data[0]->submenu);
					}
					?>
				</div>
			</div><!-- end card-body -->
		</div>

	</div>
	<!-- container-fluid -->
</div>

<?php if (hasPermission('IN')) : ?>
	<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<form autocomplete="off" method="post" data-type="save" id="form_tambah" class="needs-validation" novalidate>
				<div class="modal-content border-0 overflow-hidden">
					<div class="modal-header p-3">
						<h4 class="card-title mb-0">Tambah Menu</h4>
						<button type="button" class="btn-close tutup"></button>
					</div>
					<div class="alert alert-warning rounded-0 mb-0">
						<p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
					</div>
					<div class="modal-body pb-2">
						<div class="mb-3">
							<label for="name" class="form-label">Nama Menu <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Menu" required>
							<div class="invalid-feedback">Nama Menu Wajib Diisi!</div>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Link Menu <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="link_menu" name="link_menu" placeholder="Masukkan Link Menu">
							<div class="invalid-feedback">Link Menu Wajib Diisi!</div>
						</div>
						<div class="row">
							<div class="col-sm-6 mt-3">
								<button type="button" class="w-100 btn btn-primary btn-label right iconBtn" data-bs-toggle="modal" data-bs-target="#modalIcon" data-modal="Tambah">
									<i class="ri-user-smile-line label-icon align-middle fs-16 ms-2 iconPreview"></i> <span class="iconText">Pilih Icon</span>
								</button>
								<input type="hidden" class="form-control" id="iconTambah" name="icon" placeholder="Masukkan Icon">
							</div>
							<div class="col-sm-6 mt-3 div_statusTambah">
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
						<h4 class="card-title mb-0" id="modal_header_edit">Edit Menu</h4>
						<button type="button" class="btn-close tutup"></button>
					</div>
					<div class="alert alert-warning rounded-0 mb-0">
						<p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
					</div>
					<div class="modal-body pb-2">
						<div class="mb-3">
							<label for="name" class="form-label">Nama Menu <span class="text-danger">*</span></label>
							<input type="hidden" name="idmenu" id="id_menu_edit">
							<input type="text" class="form-control" id="nama_edit" name="nama" placeholder="Masukkan Nama Menu" required>
							<div class="invalid-feedback">Nama Menu Wajib Diisi!</div>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Link Menu <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="link_edit" name="link_menu" placeholder="Masukkan Link Menu">
							<div class="invalid-feedback">Link Menu Wajib Diisi!</div>
						</div>
						<div class="row">
							<div class="col-sm-6 mt-3">
								<button type="button" class="w-100 btn btn-primary btn-label right iconBtn" data-bs-toggle="modal" data-bs-target="#modalIcon" data-modal="Edit">
									<i class="ri-user-smile-line label-icon align-middle fs-16 ms-2 iconPreview"></i> <span class="iconText">Pilih Icon</span>
								</button>
								<input type="hidden" class="form-control" id="iconEdit" name="icon" placeholder="Masukkan Icon">
							</div>
							<div class="col-sm-6 mt-3 div_statusEdit">
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

<?php if (hasPermission('UP') || hasPermission('IN')) : ?>
	<div class="modal fade" id="modalIcon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
		<div class="modal-dialog modal-fullscreen" role="document">
			<div class="modal-content border-0 overflow-hidden">
				<div class="modal-header p-3">
					<h4 class="card-title mb-0">Pilih Icon</h4>
					<!-- <button type="button" class="btn-close tutup"></button> -->
				</div>
				<div class="alert alert-info rounded-0 mb-0">
					<!-- <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p> -->
					<input type="text" class="form-control" id="search_icon" name="search_icon" placeholder="Cari Icon" autocomplete="off">
				</div>
				<div class="modal-body pb-2" style="height: 81vh;">
					<div class="col-12" id="icons">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Buildings </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-line"></i> ri-home-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-fill"></i> ri-home-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-2-line"></i> ri-home-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-2-fill"></i> ri-home-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-3-line"></i> ri-home-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-3-fill"></i> ri-home-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-4-line"></i> ri-home-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-4-fill"></i> ri-home-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-5-line"></i> ri-home-5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-5-fill"></i> ri-home-5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-6-line"></i> ri-home-6-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-6-fill"></i> ri-home-6-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-7-line"></i> ri-home-7-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-7-fill"></i> ri-home-7-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-8-line"></i> ri-home-8-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-8-fill"></i> ri-home-8-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-gear-line"></i> ri-home-gear-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-gear-fill"></i> ri-home-gear-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-wifi-line"></i> ri-home-wifi-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-wifi-fill"></i> ri-home-wifi-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-smile-line"></i> ri-home-smile-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-smile-fill"></i> ri-home-smile-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-smile-2-line"></i> ri-home-smile-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-smile-2-fill"></i> ri-home-smile-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-heart-line"></i> ri-home-heart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-home-heart-fill"></i> ri-home-heart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-building-line"></i> ri-building-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-building-fill"></i> ri-building-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-building-2-line"></i> ri-building-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-building-2-fill"></i> ri-building-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-building-3-line"></i> ri-building-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-building-3-fill"></i> ri-building-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-building-4-line"></i> ri-building-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-building-4-fill"></i> ri-building-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hotel-line"></i> ri-hotel-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hotel-fill"></i> ri-hotel-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-community-line"></i> ri-community-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-community-fill"></i> ri-community-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-government-line"></i> ri-government-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-government-fill"></i> ri-government-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bank-line"></i> ri-bank-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bank-fill"></i> ri-bank-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-store-line"></i> ri-store-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-store-fill"></i> ri-store-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-store-2-line"></i> ri-store-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-store-2-fill"></i> ri-store-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-store-3-line"></i> ri-store-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-store-3-fill"></i> ri-store-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hospital-line"></i> ri-hospital-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hospital-fill"></i> ri-hospital-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ancient-gate-line"></i> ri-ancient-gate-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ancient-gate-fill"></i> ri-ancient-gate-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ancient-pavilion-line"></i> ri-ancient-pavilion-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ancient-pavilion-fill"></i> ri-ancient-pavilion-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Business </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-line"></i> ri-mail-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-fill"></i> ri-mail-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-open-line"></i> ri-mail-open-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-open-fill"></i> ri-mail-open-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-send-line"></i> ri-mail-send-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-send-fill"></i> ri-mail-send-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-unread-line"></i> ri-mail-unread-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-unread-fill"></i> ri-mail-unread-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-add-line"></i> ri-mail-add-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-add-fill"></i> ri-mail-add-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-check-line"></i> ri-mail-check-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-check-fill"></i> ri-mail-check-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-close-line"></i> ri-mail-close-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-close-fill"></i> ri-mail-close-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-download-line"></i> ri-mail-download-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-download-fill"></i> ri-mail-download-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-forbid-line"></i> ri-mail-forbid-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-forbid-fill"></i> ri-mail-forbid-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-lock-line"></i> ri-mail-lock-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-lock-fill"></i> ri-mail-lock-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-settings-line"></i> ri-mail-settings-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-settings-fill"></i> ri-mail-settings-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-star-line"></i> ri-mail-star-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-star-fill"></i> ri-mail-star-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-volume-line"></i> ri-mail-volume-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mail-volume-fill"></i> ri-mail-volume-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-inbox-line"></i> ri-inbox-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-inbox-fill"></i> ri-inbox-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-inbox-archive-line"></i> ri-inbox-archive-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-inbox-archive-fill"></i> ri-inbox-archive-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-inbox-unarchive-line"></i> ri-inbox-unarchive-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-inbox-unarchive-fill"></i> ri-inbox-unarchive-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cloud-line"></i> ri-cloud-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cloud-fill"></i> ri-cloud-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cloud-off-line"></i> ri-cloud-off-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cloud-off-fill"></i> ri-cloud-off-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-attachment-line"></i> ri-attachment-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-attachment-fill"></i> ri-attachment-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-profile-line"></i> ri-profile-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-profile-fill"></i> ri-profile-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-archive-line"></i> ri-archive-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-archive-fill"></i> ri-archive-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-archive-drawer-line"></i> ri-archive-drawer-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-archive-drawer-fill"></i> ri-archive-drawer-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-at-line"></i> ri-at-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-at-fill"></i> ri-at-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-award-line"></i> ri-award-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-award-fill"></i> ri-award-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-medal-line"></i> ri-medal-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-medal-fill"></i> ri-medal-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-medal-2-line"></i> ri-medal-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-medal-2-fill"></i> ri-medal-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bar-chart-line"></i> ri-bar-chart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bar-chart-fill"></i> ri-bar-chart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bar-chart-horizontal-line"></i> ri-bar-chart-horizontal-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bar-chart-horizontal-fill"></i> ri-bar-chart-horizontal-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bar-chart-2-line"></i> ri-bar-chart-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bar-chart-2-fill"></i> ri-bar-chart-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bar-chart-box-line"></i> ri-bar-chart-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bar-chart-box-fill"></i> ri-bar-chart-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bar-chart-grouped-line"></i> ri-bar-chart-grouped-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bar-chart-grouped-fill"></i> ri-bar-chart-grouped-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bubble-chart-line"></i> ri-bubble-chart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bubble-chart-fill"></i> ri-bubble-chart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pie-chart-line"></i> ri-pie-chart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pie-chart-fill"></i> ri-pie-chart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pie-chart-2-line"></i> ri-pie-chart-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pie-chart-2-fill"></i> ri-pie-chart-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pie-chart-box-line"></i> ri-pie-chart-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pie-chart-box-fill"></i> ri-pie-chart-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-donut-chart-line"></i> ri-donut-chart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-donut-chart-fill"></i> ri-donut-chart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-line-chart-line"></i> ri-line-chart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-line-chart-fill"></i> ri-line-chart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bookmark-line"></i> ri-bookmark-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bookmark-fill"></i> ri-bookmark-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bookmark-2-line"></i> ri-bookmark-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bookmark-2-fill"></i> ri-bookmark-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bookmark-3-line"></i> ri-bookmark-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bookmark-3-fill"></i> ri-bookmark-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-briefcase-line"></i> ri-briefcase-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-briefcase-fill"></i> ri-briefcase-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-briefcase-2-line"></i> ri-briefcase-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-briefcase-2-fill"></i> ri-briefcase-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-briefcase-3-line"></i> ri-briefcase-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-briefcase-3-fill"></i> ri-briefcase-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-briefcase-4-line"></i> ri-briefcase-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-briefcase-4-fill"></i> ri-briefcase-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-briefcase-5-line"></i> ri-briefcase-5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-briefcase-5-fill"></i> ri-briefcase-5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calculator-line"></i> ri-calculator-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calculator-fill"></i> ri-calculator-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calendar-line"></i> ri-calendar-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calendar-fill"></i> ri-calendar-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calendar-2-line"></i> ri-calendar-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calendar-2-fill"></i> ri-calendar-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calendar-event-line"></i> ri-calendar-event-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calendar-event-fill"></i> ri-calendar-event-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calendar-todo-line"></i> ri-calendar-todo-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calendar-todo-fill"></i> ri-calendar-todo-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calendar-check-line"></i> ri-calendar-check-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-calendar-check-fill"></i> ri-calendar-check-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-customer-service-line"></i> ri-customer-service-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-customer-service-fill"></i> ri-customer-service-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-customer-service-2-line"></i> ri-customer-service-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-customer-service-2-fill"></i> ri-customer-service-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flag-line"></i> ri-flag-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flag-fill"></i> ri-flag-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flag-2-line"></i> ri-flag-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flag-2-fill"></i> ri-flag-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-global-line"></i> ri-global-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-global-fill"></i> ri-global-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-honour-line"></i> ri-honour-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-honour-fill"></i> ri-honour-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-links-line"></i> ri-links-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-links-fill"></i> ri-links-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-printer-line"></i> ri-printer-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-printer-fill"></i> ri-printer-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-printer-cloud-line"></i> ri-printer-cloud-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-printer-cloud-fill"></i> ri-printer-cloud-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-record-mail-line"></i> ri-record-mail-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-record-mail-fill"></i> ri-record-mail-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-reply-line"></i> ri-reply-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-reply-fill"></i> ri-reply-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-send-plane-line"></i> ri-send-plane-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-send-plane-fill"></i> ri-send-plane-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-send-plane-2-line"></i> ri-send-plane-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-send-plane-2-fill"></i> ri-send-plane-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-projector-line"></i> ri-projector-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-projector-fill"></i> ri-projector-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-projector-2-line"></i> ri-projector-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-projector-2-fill"></i> ri-projector-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slideshow-line"></i> ri-slideshow-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slideshow-fill"></i> ri-slideshow-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slideshow-2-line"></i> ri-slideshow-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slideshow-2-fill"></i> ri-slideshow-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slideshow-3-line"></i> ri-slideshow-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slideshow-3-fill"></i> ri-slideshow-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slideshow-4-line"></i> ri-slideshow-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slideshow-4-fill"></i> ri-slideshow-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-window-line"></i> ri-window-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-window-fill"></i> ri-window-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-window-2-line"></i> ri-window-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-window-2-fill"></i> ri-window-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stack-line"></i> ri-stack-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stack-fill"></i> ri-stack-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-service-line"></i> ri-service-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-service-fill"></i> ri-service-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-registered-line"></i> ri-registered-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-registered-fill"></i> ri-registered-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-trademark-line"></i> ri-trademark-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-trademark-fill"></i> ri-trademark-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-advertisement-line"></i> ri-advertisement-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-advertisement-fill"></i> ri-advertisement-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-copyright-line"></i> ri-copyright-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-copyright-fill"></i> ri-copyright-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-line"></i> ri-creative-commons-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-fill"></i> ri-creative-commons-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-by-line"></i> ri-creative-commons-by-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-by-fill"></i> ri-creative-commons-by-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-nc-line"></i> ri-creative-commons-nc-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-nc-fill"></i> ri-creative-commons-nc-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-nd-line"></i> ri-creative-commons-nd-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-nd-fill"></i> ri-creative-commons-nd-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-sa-line"></i> ri-creative-commons-sa-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-sa-fill"></i> ri-creative-commons-sa-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-zero-line"></i> ri-creative-commons-zero-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-creative-commons-zero-fill"></i> ri-creative-commons-zero-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Communication </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-1-line"></i> ri-chat-1-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-1-fill"></i> ri-chat-1-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-2-line"></i> ri-chat-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-2-fill"></i> ri-chat-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-3-line"></i> ri-chat-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-3-fill"></i> ri-chat-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-4-line"></i> ri-chat-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-4-fill"></i> ri-chat-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-message-line"></i> ri-message-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-message-fill"></i> ri-message-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-message-2-line"></i> ri-message-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-message-2-fill"></i> ri-message-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-message-3-line"></i> ri-message-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-message-3-fill"></i> ri-message-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-check-line"></i> ri-chat-check-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-check-fill"></i> ri-chat-check-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-delete-line"></i> ri-chat-delete-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-delete-fill"></i> ri-chat-delete-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-forward-line"></i> ri-chat-forward-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-forward-fill"></i> ri-chat-forward-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-upload-line"></i> ri-chat-upload-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-upload-fill"></i> ri-chat-upload-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-download-line"></i> ri-chat-download-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-download-fill"></i> ri-chat-download-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-new-line"></i> ri-chat-new-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-new-fill"></i> ri-chat-new-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-settings-line"></i> ri-chat-settings-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-settings-fill"></i> ri-chat-settings-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-smile-line"></i> ri-chat-smile-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-smile-fill"></i> ri-chat-smile-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-smile-2-line"></i> ri-chat-smile-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-smile-2-fill"></i> ri-chat-smile-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-smile-3-line"></i> ri-chat-smile-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-smile-3-fill"></i> ri-chat-smile-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-heart-line"></i> ri-chat-heart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-heart-fill"></i> ri-chat-heart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-off-line"></i> ri-chat-off-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-off-fill"></i> ri-chat-off-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-feedback-line"></i> ri-feedback-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-feedback-fill"></i> ri-feedback-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-discuss-line"></i> ri-discuss-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-discuss-fill"></i> ri-discuss-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-question-answer-line"></i> ri-question-answer-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-question-answer-fill"></i> ri-question-answer-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-questionnaire-line"></i> ri-questionnaire-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-questionnaire-fill"></i> ri-questionnaire-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-video-chat-line"></i> ri-video-chat-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-video-chat-fill"></i> ri-video-chat-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-voice-line"></i> ri-chat-voice-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-voice-fill"></i> ri-chat-voice-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-quote-line"></i> ri-chat-quote-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-quote-fill"></i> ri-chat-quote-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-follow-up-line"></i> ri-chat-follow-up-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-follow-up-fill"></i> ri-chat-follow-up-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-poll-line"></i> ri-chat-poll-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-poll-fill"></i> ri-chat-poll-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-history-line"></i> ri-chat-history-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-history-fill"></i> ri-chat-history-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-private-line"></i> ri-chat-private-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chat-private-fill"></i> ri-chat-private-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Design </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pencil-line"></i> ri-pencil-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pencil-fill"></i> ri-pencil-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-edit-line"></i> ri-edit-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-edit-fill"></i> ri-edit-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-edit-2-line"></i> ri-edit-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-edit-2-fill"></i> ri-edit-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ball-pen-line"></i> ri-ball-pen-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ball-pen-fill"></i> ri-ball-pen-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-quill-pen-line"></i> ri-quill-pen-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-quill-pen-fill"></i> ri-quill-pen-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mark-pen-line"></i> ri-mark-pen-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mark-pen-fill"></i> ri-mark-pen-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-markup-line"></i> ri-markup-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-markup-fill"></i> ri-markup-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pen-nib-line"></i> ri-pen-nib-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pen-nib-fill"></i> ri-pen-nib-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-edit-box-line"></i> ri-edit-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-edit-box-fill"></i> ri-edit-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-edit-circle-line"></i> ri-edit-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-edit-circle-fill"></i> ri-edit-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sip-line"></i> ri-sip-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sip-fill"></i> ri-sip-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-brush-line"></i> ri-brush-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-brush-fill"></i> ri-brush-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-brush-2-line"></i> ri-brush-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-brush-2-fill"></i> ri-brush-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-brush-3-line"></i> ri-brush-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-brush-3-fill"></i> ri-brush-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-brush-4-line"></i> ri-brush-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-brush-4-fill"></i> ri-brush-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-paint-brush-line"></i> ri-paint-brush-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-paint-brush-fill"></i> ri-paint-brush-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contrast-line"></i> ri-contrast-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contrast-fill"></i> ri-contrast-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contrast-2-line"></i> ri-contrast-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contrast-2-fill"></i> ri-contrast-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drop-line"></i> ri-drop-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drop-fill"></i> ri-drop-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-blur-off-line"></i> ri-blur-off-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-blur-off-fill"></i> ri-blur-off-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contrast-drop-line"></i> ri-contrast-drop-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contrast-drop-fill"></i> ri-contrast-drop-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contrast-drop-2-line"></i> ri-contrast-drop-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contrast-drop-2-fill"></i> ri-contrast-drop-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compasses-line"></i> ri-compasses-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compasses-fill"></i> ri-compasses-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compasses-2-line"></i> ri-compasses-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compasses-2-fill"></i> ri-compasses-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scissors-line"></i> ri-scissors-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scissors-fill"></i> ri-scissors-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scissors-cut-line"></i> ri-scissors-cut-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scissors-cut-fill"></i> ri-scissors-cut-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scissors-2-line"></i> ri-scissors-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scissors-2-fill"></i> ri-scissors-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slice-line"></i> ri-slice-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slice-fill"></i> ri-slice-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eraser-line"></i> ri-eraser-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eraser-fill"></i> ri-eraser-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ruler-line"></i> ri-ruler-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ruler-fill"></i> ri-ruler-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ruler-2-line"></i> ri-ruler-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ruler-2-fill"></i> ri-ruler-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pencil-ruler-line"></i> ri-pencil-ruler-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pencil-ruler-fill"></i> ri-pencil-ruler-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pencil-ruler-2-line"></i> ri-pencil-ruler-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pencil-ruler-2-fill"></i> ri-pencil-ruler-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-t-box-line"></i> ri-t-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-t-box-fill"></i> ri-t-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-input-method-line"></i> ri-input-method-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-input-method-fill"></i> ri-input-method-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-artboard-line"></i> ri-artboard-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-artboard-fill"></i> ri-artboard-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-artboard-2-line"></i> ri-artboard-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-artboard-2-fill"></i> ri-artboard-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-crop-line"></i> ri-crop-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-crop-fill"></i> ri-crop-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-crop-2-line"></i> ri-crop-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-crop-2-fill"></i> ri-crop-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-screenshot-line"></i> ri-screenshot-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-screenshot-fill"></i> ri-screenshot-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-screenshot-2-line"></i> ri-screenshot-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-screenshot-2-fill"></i> ri-screenshot-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drag-move-line"></i> ri-drag-move-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drag-move-fill"></i> ri-drag-move-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drag-move-2-line"></i> ri-drag-move-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drag-move-2-fill"></i> ri-drag-move-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-focus-line"></i> ri-focus-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-focus-fill"></i> ri-focus-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-focus-2-line"></i> ri-focus-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-focus-2-fill"></i> ri-focus-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-focus-3-line"></i> ri-focus-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-focus-3-fill"></i> ri-focus-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-paint-line"></i> ri-paint-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-paint-fill"></i> ri-paint-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-palette-line"></i> ri-palette-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-palette-fill"></i> ri-palette-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pantone-line"></i> ri-pantone-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pantone-fill"></i> ri-pantone-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shape-line"></i> ri-shape-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shape-fill"></i> ri-shape-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shape-2-line"></i> ri-shape-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shape-2-fill"></i> ri-shape-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-magic-line"></i> ri-magic-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-magic-fill"></i> ri-magic-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-anticlockwise-line"></i> ri-anticlockwise-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-anticlockwise-fill"></i> ri-anticlockwise-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-anticlockwise-2-line"></i> ri-anticlockwise-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-anticlockwise-2-fill"></i> ri-anticlockwise-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-clockwise-line"></i> ri-clockwise-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-clockwise-fill"></i> ri-clockwise-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-clockwise-2-line"></i> ri-clockwise-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-clockwise-2-fill"></i> ri-clockwise-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hammer-line"></i> ri-hammer-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hammer-fill"></i> ri-hammer-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tools-line"></i> ri-tools-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tools-fill"></i> ri-tools-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drag-drop-line"></i> ri-drag-drop-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drag-drop-fill"></i> ri-drag-drop-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-table-line"></i> ri-table-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-table-fill"></i> ri-table-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-table-alt-line"></i> ri-table-alt-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-table-alt-fill"></i> ri-table-alt-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-line"></i> ri-layout-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-fill"></i> ri-layout-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-2-line"></i> ri-layout-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-2-fill"></i> ri-layout-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-3-line"></i> ri-layout-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-3-fill"></i> ri-layout-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-4-line"></i> ri-layout-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-4-fill"></i> ri-layout-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-5-line"></i> ri-layout-5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-5-fill"></i> ri-layout-5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-6-line"></i> ri-layout-6-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-6-fill"></i> ri-layout-6-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-column-line"></i> ri-layout-column-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-column-fill"></i> ri-layout-column-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-row-line"></i> ri-layout-row-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-row-fill"></i> ri-layout-row-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-top-line"></i> ri-layout-top-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-top-fill"></i> ri-layout-top-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-right-line"></i> ri-layout-right-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-right-fill"></i> ri-layout-right-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-bottom-line"></i> ri-layout-bottom-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-bottom-fill"></i> ri-layout-bottom-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-left-line"></i> ri-layout-left-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-left-fill"></i> ri-layout-left-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-top-2-line"></i> ri-layout-top-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-top-2-fill"></i> ri-layout-top-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-right-2-line"></i> ri-layout-right-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-right-2-fill"></i> ri-layout-right-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-bottom-2-line"></i> ri-layout-bottom-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-bottom-2-fill"></i> ri-layout-bottom-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-left-2-line"></i> ri-layout-left-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-left-2-fill"></i> ri-layout-left-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-grid-line"></i> ri-layout-grid-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-grid-fill"></i> ri-layout-grid-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-masonry-line"></i> ri-layout-masonry-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-layout-masonry-fill"></i> ri-layout-masonry-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-grid-line"></i> ri-grid-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-grid-fill"></i> ri-grid-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Development </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bug-line"></i> ri-bug-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bug-fill"></i> ri-bug-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bug-2-line"></i> ri-bug-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bug-2-fill"></i> ri-bug-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-code-line"></i> ri-code-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-code-fill"></i> ri-code-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-code-s-line"></i> ri-code-s-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-code-s-fill"></i> ri-code-s-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-code-s-slash-line"></i> ri-code-s-slash-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-code-s-slash-fill"></i> ri-code-s-slash-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-code-box-line"></i> ri-code-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-code-box-fill"></i> ri-code-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-terminal-box-line"></i> ri-terminal-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-terminal-box-fill"></i> ri-terminal-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-terminal-line"></i> ri-terminal-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-terminal-fill"></i> ri-terminal-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-terminal-window-line"></i> ri-terminal-window-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-terminal-window-fill"></i> ri-terminal-window-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-parentheses-line"></i> ri-parentheses-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-parentheses-fill"></i> ri-parentheses-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-brackets-line"></i> ri-brackets-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-brackets-fill"></i> ri-brackets-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-braces-line"></i> ri-braces-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-braces-fill"></i> ri-braces-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-command-line"></i> ri-command-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-command-fill"></i> ri-command-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cursor-line"></i> ri-cursor-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cursor-fill"></i> ri-cursor-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-commit-line"></i> ri-git-commit-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-commit-fill"></i> ri-git-commit-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-pull-request-line"></i> ri-git-pull-request-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-pull-request-fill"></i> ri-git-pull-request-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-merge-line"></i> ri-git-merge-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-merge-fill"></i> ri-git-merge-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-branch-line"></i> ri-git-branch-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-branch-fill"></i> ri-git-branch-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-repository-line"></i> ri-git-repository-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-repository-fill"></i> ri-git-repository-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-repository-commits-line"></i> ri-git-repository-commits-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-repository-commits-fill"></i> ri-git-repository-commits-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-repository-private-line"></i> ri-git-repository-private-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-git-repository-private-fill"></i> ri-git-repository-private-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-html5-line"></i> ri-html5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-html5-fill"></i> ri-html5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-css3-line"></i> ri-css3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-css3-fill"></i> ri-css3-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Device </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tv-line"></i> ri-tv-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tv-fill"></i> ri-tv-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tv-2-line"></i> ri-tv-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tv-2-fill"></i> ri-tv-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-computer-line"></i> ri-computer-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-computer-fill"></i> ri-computer-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mac-line"></i> ri-mac-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mac-fill"></i> ri-mac-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-macbook-line"></i> ri-macbook-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-macbook-fill"></i> ri-macbook-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cellphone-line"></i> ri-cellphone-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cellphone-fill"></i> ri-cellphone-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-smartphone-line"></i> ri-smartphone-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-smartphone-fill"></i> ri-smartphone-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tablet-line"></i> ri-tablet-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tablet-fill"></i> ri-tablet-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-device-line"></i> ri-device-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-device-fill"></i> ri-device-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-phone-line"></i> ri-phone-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-phone-fill"></i> ri-phone-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-database-line"></i> ri-database-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-database-fill"></i> ri-database-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-database-2-line"></i> ri-database-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-database-2-fill"></i> ri-database-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-server-line"></i> ri-server-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-server-fill"></i> ri-server-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hard-drive-line"></i> ri-hard-drive-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hard-drive-fill"></i> ri-hard-drive-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hard-drive-2-line"></i> ri-hard-drive-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hard-drive-2-fill"></i> ri-hard-drive-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-install-line"></i> ri-install-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-install-fill"></i> ri-install-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-uninstall-line"></i> ri-uninstall-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-uninstall-fill"></i> ri-uninstall-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-save-line"></i> ri-save-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-save-fill"></i> ri-save-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-save-2-line"></i> ri-save-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-save-2-fill"></i> ri-save-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-save-3-line"></i> ri-save-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-save-3-fill"></i> ri-save-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sd-card-line"></i> ri-sd-card-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sd-card-fill"></i> ri-sd-card-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sd-card-mini-line"></i> ri-sd-card-mini-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sd-card-mini-fill"></i> ri-sd-card-mini-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sim-card-line"></i> ri-sim-card-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sim-card-fill"></i> ri-sim-card-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sim-card-2-line"></i> ri-sim-card-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sim-card-2-fill"></i> ri-sim-card-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dual-sim-1-line"></i> ri-dual-sim-1-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dual-sim-1-fill"></i> ri-dual-sim-1-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dual-sim-2-line"></i> ri-dual-sim-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dual-sim-2-fill"></i> ri-dual-sim-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-u-disk-line"></i> ri-u-disk-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-u-disk-fill"></i> ri-u-disk-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-line"></i> ri-battery-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-fill"></i> ri-battery-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-charge-line"></i> ri-battery-charge-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-charge-fill"></i> ri-battery-charge-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-low-line"></i> ri-battery-low-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-low-fill"></i> ri-battery-low-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-2-line"></i> ri-battery-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-2-fill"></i> ri-battery-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-2-charge-line"></i> ri-battery-2-charge-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-2-charge-fill"></i> ri-battery-2-charge-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-saver-line"></i> ri-battery-saver-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-saver-fill"></i> ri-battery-saver-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-share-line"></i> ri-battery-share-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-battery-share-fill"></i> ri-battery-share-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cast-line"></i> ri-cast-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cast-fill"></i> ri-cast-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-airplay-line"></i> ri-airplay-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-airplay-fill"></i> ri-airplay-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cpu-line"></i> ri-cpu-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cpu-fill"></i> ri-cpu-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gradienter-line"></i> ri-gradienter-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gradienter-fill"></i> ri-gradienter-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-keyboard-line"></i> ri-keyboard-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-keyboard-fill"></i> ri-keyboard-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-keyboard-box-line"></i> ri-keyboard-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-keyboard-box-fill"></i> ri-keyboard-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mouse-line"></i> ri-mouse-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mouse-fill"></i> ri-mouse-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sensor-line"></i> ri-sensor-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sensor-fill"></i> ri-sensor-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-router-line"></i> ri-router-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-router-fill"></i> ri-router-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-radar-line"></i> ri-radar-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-radar-fill"></i> ri-radar-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gamepad-line"></i> ri-gamepad-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gamepad-fill"></i> ri-gamepad-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-remote-control-line"></i> ri-remote-control-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-remote-control-fill"></i> ri-remote-control-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-remote-control-2-line"></i> ri-remote-control-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-remote-control-2-fill"></i> ri-remote-control-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-device-recover-line"></i> ri-device-recover-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-device-recover-fill"></i> ri-device-recover-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hotspot-line"></i> ri-hotspot-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hotspot-fill"></i> ri-hotspot-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-phone-find-line"></i> ri-phone-find-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-phone-find-fill"></i> ri-phone-find-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-phone-lock-line"></i> ri-phone-lock-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-phone-lock-fill"></i> ri-phone-lock-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rotate-lock-line"></i> ri-rotate-lock-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rotate-lock-fill"></i> ri-rotate-lock-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-restart-line"></i> ri-restart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-restart-fill"></i> ri-restart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shut-down-line"></i> ri-shut-down-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shut-down-fill"></i> ri-shut-down-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fingerprint-line"></i> ri-fingerprint-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fingerprint-fill"></i> ri-fingerprint-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fingerprint-2-line"></i> ri-fingerprint-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fingerprint-2-fill"></i> ri-fingerprint-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-barcode-line"></i> ri-barcode-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-barcode-fill"></i> ri-barcode-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-barcode-box-line"></i> ri-barcode-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-barcode-box-fill"></i> ri-barcode-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-qr-code-line"></i> ri-qr-code-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-qr-code-fill"></i> ri-qr-code-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-qr-scan-line"></i> ri-qr-scan-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-qr-scan-fill"></i> ri-qr-scan-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-qr-scan-2-line"></i> ri-qr-scan-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-qr-scan-2-fill"></i> ri-qr-scan-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scan-line"></i> ri-scan-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scan-fill"></i> ri-scan-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scan-2-line"></i> ri-scan-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scan-2-fill"></i> ri-scan-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rss-line"></i> ri-rss-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rss-fill"></i> ri-rss-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gps-line"></i> ri-gps-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gps-fill"></i> ri-gps-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-base-station-line"></i> ri-base-station-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-base-station-fill"></i> ri-base-station-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bluetooth-line"></i> ri-bluetooth-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bluetooth-fill"></i> ri-bluetooth-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bluetooth-connect-line"></i> ri-bluetooth-connect-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bluetooth-connect-fill"></i> ri-bluetooth-connect-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wifi-line"></i> ri-wifi-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wifi-fill"></i> ri-wifi-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wifi-off-line"></i> ri-wifi-off-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wifi-off-fill"></i> ri-wifi-off-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-line"></i> ri-signal-wifi-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-fill"></i> ri-signal-wifi-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-1-line"></i> ri-signal-wifi-1-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-1-fill"></i> ri-signal-wifi-1-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-2-line"></i> ri-signal-wifi-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-2-fill"></i> ri-signal-wifi-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-3-line"></i> ri-signal-wifi-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-3-fill"></i> ri-signal-wifi-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-error-line"></i> ri-signal-wifi-error-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-error-fill"></i> ri-signal-wifi-error-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-off-line"></i> ri-signal-wifi-off-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-wifi-off-fill"></i> ri-signal-wifi-off-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wireless-charging-line"></i> ri-wireless-charging-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wireless-charging-fill"></i> ri-wireless-charging-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Document </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-line"></i> ri-file-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-fill"></i> ri-file-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-2-line"></i> ri-file-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-2-fill"></i> ri-file-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-3-line"></i> ri-file-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-3-fill"></i> ri-file-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-4-line"></i> ri-file-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-4-fill"></i> ri-file-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sticky-note-line"></i> ri-sticky-note-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sticky-note-fill"></i> ri-sticky-note-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sticky-note-2-line"></i> ri-sticky-note-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sticky-note-2-fill"></i> ri-sticky-note-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-edit-line"></i> ri-file-edit-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-edit-fill"></i> ri-file-edit-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-paper-line"></i> ri-file-paper-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-paper-fill"></i> ri-file-paper-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-paper-2-line"></i> ri-file-paper-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-paper-2-fill"></i> ri-file-paper-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-text-line"></i> ri-file-text-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-text-fill"></i> ri-file-text-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-list-line"></i> ri-file-list-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-list-fill"></i> ri-file-list-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-list-2-line"></i> ri-file-list-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-list-2-fill"></i> ri-file-list-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-list-3-line"></i> ri-file-list-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-list-3-fill"></i> ri-file-list-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bill-line"></i> ri-bill-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bill-fill"></i> ri-bill-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-copy-line"></i> ri-file-copy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-copy-fill"></i> ri-file-copy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-copy-2-line"></i> ri-file-copy-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-copy-2-fill"></i> ri-file-copy-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-clipboard-line"></i> ri-clipboard-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-clipboard-fill"></i> ri-clipboard-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-survey-line"></i> ri-survey-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-survey-fill"></i> ri-survey-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-article-line"></i> ri-article-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-article-fill"></i> ri-article-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-newspaper-line"></i> ri-newspaper-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-newspaper-fill"></i> ri-newspaper-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-zip-line"></i> ri-file-zip-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-zip-fill"></i> ri-file-zip-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-mark-line"></i> ri-file-mark-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-mark-fill"></i> ri-file-mark-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-task-line"></i> ri-task-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-task-fill"></i> ri-task-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-todo-line"></i> ri-todo-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-todo-fill"></i> ri-todo-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-line"></i> ri-book-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-fill"></i> ri-book-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-mark-line"></i> ri-book-mark-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-mark-fill"></i> ri-book-mark-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-2-line"></i> ri-book-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-2-fill"></i> ri-book-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-3-line"></i> ri-book-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-3-fill"></i> ri-book-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-open-line"></i> ri-book-open-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-open-fill"></i> ri-book-open-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-read-line"></i> ri-book-read-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-book-read-fill"></i> ri-book-read-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contacts-book-line"></i> ri-contacts-book-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contacts-book-fill"></i> ri-contacts-book-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contacts-book-2-line"></i> ri-contacts-book-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contacts-book-2-fill"></i> ri-contacts-book-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contacts-book-upload-line"></i> ri-contacts-book-upload-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contacts-book-upload-fill"></i> ri-contacts-book-upload-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-booklet-line"></i> ri-booklet-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-booklet-fill"></i> ri-booklet-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-code-line"></i> ri-file-code-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-code-fill"></i> ri-file-code-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-pdf-line"></i> ri-file-pdf-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-pdf-fill"></i> ri-file-pdf-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-word-line"></i> ri-file-word-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-word-fill"></i> ri-file-word-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-ppt-line"></i> ri-file-ppt-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-ppt-fill"></i> ri-file-ppt-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-excel-line"></i> ri-file-excel-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-excel-fill"></i> ri-file-excel-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-word-2-line"></i> ri-file-word-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-word-2-fill"></i> ri-file-word-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-ppt-2-line"></i> ri-file-ppt-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-ppt-2-fill"></i> ri-file-ppt-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-excel-2-line"></i> ri-file-excel-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-excel-2-fill"></i> ri-file-excel-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-hwp-line"></i> ri-file-hwp-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-hwp-fill"></i> ri-file-hwp-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-keynote-line"></i> ri-keynote-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-keynote-fill"></i> ri-keynote-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-numbers-line"></i> ri-numbers-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-numbers-fill"></i> ri-numbers-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pages-line"></i> ri-pages-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pages-fill"></i> ri-pages-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-search-line"></i> ri-file-search-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-search-fill"></i> ri-file-search-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-add-line"></i> ri-file-add-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-add-fill"></i> ri-file-add-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-reduce-line"></i> ri-file-reduce-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-reduce-fill"></i> ri-file-reduce-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-settings-line"></i> ri-file-settings-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-settings-fill"></i> ri-file-settings-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-upload-line"></i> ri-file-upload-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-upload-fill"></i> ri-file-upload-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-transfer-line"></i> ri-file-transfer-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-transfer-fill"></i> ri-file-transfer-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-download-line"></i> ri-file-download-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-download-fill"></i> ri-file-download-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-lock-line"></i> ri-file-lock-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-lock-fill"></i> ri-file-lock-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-chart-line"></i> ri-file-chart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-chart-fill"></i> ri-file-chart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-chart-2-line"></i> ri-file-chart-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-chart-2-fill"></i> ri-file-chart-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-music-line"></i> ri-file-music-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-music-fill"></i> ri-file-music-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-gif-line"></i> ri-file-gif-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-gif-fill"></i> ri-file-gif-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-forbid-line"></i> ri-file-forbid-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-forbid-fill"></i> ri-file-forbid-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-info-line"></i> ri-file-info-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-info-fill"></i> ri-file-info-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-warning-line"></i> ri-file-warning-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-warning-fill"></i> ri-file-warning-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-unknow-line"></i> ri-file-unknow-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-unknow-fill"></i> ri-file-unknow-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-user-line"></i> ri-file-user-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-user-fill"></i> ri-file-user-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-shield-line"></i> ri-file-shield-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-shield-fill"></i> ri-file-shield-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-shield-2-line"></i> ri-file-shield-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-shield-2-fill"></i> ri-file-shield-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-damage-line"></i> ri-file-damage-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-damage-fill"></i> ri-file-damage-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-history-line"></i> ri-file-history-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-history-fill"></i> ri-file-history-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-shred-line"></i> ri-file-shred-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-shred-fill"></i> ri-file-shred-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-cloud-line"></i> ri-file-cloud-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-file-cloud-fill"></i> ri-file-cloud-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-line"></i> ri-folder-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-fill"></i> ri-folder-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-2-line"></i> ri-folder-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-2-fill"></i> ri-folder-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-3-line"></i> ri-folder-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-3-fill"></i> ri-folder-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-4-line"></i> ri-folder-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-4-fill"></i> ri-folder-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-5-line"></i> ri-folder-5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-5-fill"></i> ri-folder-5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folders-line"></i> ri-folders-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folders-fill"></i> ri-folders-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-add-line"></i> ri-folder-add-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-add-fill"></i> ri-folder-add-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-reduce-line"></i> ri-folder-reduce-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-reduce-fill"></i> ri-folder-reduce-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-settings-line"></i> ri-folder-settings-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-settings-fill"></i> ri-folder-settings-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-upload-line"></i> ri-folder-upload-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-upload-fill"></i> ri-folder-upload-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-transfer-line"></i> ri-folder-transfer-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-transfer-fill"></i> ri-folder-transfer-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-download-line"></i> ri-folder-download-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-download-fill"></i> ri-folder-download-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-lock-line"></i> ri-folder-lock-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-lock-fill"></i> ri-folder-lock-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-chart-line"></i> ri-folder-chart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-chart-fill"></i> ri-folder-chart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-chart-2-line"></i> ri-folder-chart-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-chart-2-fill"></i> ri-folder-chart-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-music-line"></i> ri-folder-music-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-music-fill"></i> ri-folder-music-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-forbid-line"></i> ri-folder-forbid-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-forbid-fill"></i> ri-folder-forbid-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-info-line"></i> ri-folder-info-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-info-fill"></i> ri-folder-info-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-warning-line"></i> ri-folder-warning-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-warning-fill"></i> ri-folder-warning-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-unknow-line"></i> ri-folder-unknow-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-unknow-fill"></i> ri-folder-unknow-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-user-line"></i> ri-folder-user-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-user-fill"></i> ri-folder-user-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-shield-line"></i> ri-folder-shield-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-shield-fill"></i> ri-folder-shield-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-shield-2-line"></i> ri-folder-shield-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-shield-2-fill"></i> ri-folder-shield-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-shared-line"></i> ri-folder-shared-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-shared-fill"></i> ri-folder-shared-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-received-line"></i> ri-folder-received-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-received-fill"></i> ri-folder-received-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-open-line"></i> ri-folder-open-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-open-fill"></i> ri-folder-open-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-keyhole-line"></i> ri-folder-keyhole-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-keyhole-fill"></i> ri-folder-keyhole-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-zip-line"></i> ri-folder-zip-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-zip-fill"></i> ri-folder-zip-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-history-line"></i> ri-folder-history-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-folder-history-fill"></i> ri-folder-history-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-markdown-line"></i> ri-markdown-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-markdown-fill"></i> ri-markdown-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Editor </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-bold"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bold"></i> ri-bold</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-italic"></i> ri-italic</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-heading"></i> ri-heading</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-text"></i> ri-text</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-font-color"></i> ri-font-color</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-font-size"></i> ri-font-size</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-font-size-2"></i> ri-font-size-2</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-underline"></i> ri-underline</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emphasis"></i> ri-emphasis</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emphasis-cn"></i> ri-emphasis-cn</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-strikethrough"></i> ri-strikethrough</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-strikethrough-2"></i> ri-strikethrough-2</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-format-clear"></i> ri-format-clear</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-align-left"></i> ri-align-left</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-align-center"></i> ri-align-center</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-align-right"></i> ri-align-right</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-align-justify"></i> ri-align-justify</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-align-top"></i> ri-align-top</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-align-vertically"></i> ri-align-vertically</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-align-bottom"></i> ri-align-bottom</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-list-check"></i> ri-list-check</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-list-check-2"></i> ri-list-check-2</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-list-ordered"></i> ri-list-ordered</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-list-unordered"></i> ri-list-unordered</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-indent-decrease"></i> ri-indent-decrease</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-indent-increase"></i> ri-indent-increase</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-line-height"></i> ri-line-height</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-text-spacing"></i> ri-text-spacing</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-text-wrap"></i> ri-text-wrap</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-attachment-2"></i> ri-attachment-2</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-link"></i> ri-link</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-link-unlink"></i> ri-link-unlink</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-link-m"></i> ri-link-m</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-link-unlink-m"></i> ri-link-unlink-m</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-separator"></i> ri-separator</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-space"></i> ri-space</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-page-separator"></i> ri-page-separator</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-code-view"></i> ri-code-view</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-double-quotes-l"></i> ri-double-quotes-l</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-double-quotes-r"></i> ri-double-quotes-r</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-single-quotes-l"></i> ri-single-quotes-l</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-single-quotes-r"></i> ri-single-quotes-r</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-table-2"></i> ri-table-2</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-subscript"></i> ri-subscript</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-subscript-2"></i> ri-subscript-2</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-superscript"></i> ri-superscript</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-superscript-2"></i> ri-superscript-2</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-paragraph"></i> ri-paragraph</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-text-direction-l"></i> ri-text-direction-l</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-text-direction-r"></i> ri-text-direction-r</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-functions"></i> ri-functions</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-omega"></i> ri-omega</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hashtag"></i> ri-hashtag</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-asterisk"></i> ri-asterisk</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-translate"></i> ri-translate</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-translate-2"></i> ri-translate-2</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-a-b"></i> ri-a-b</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-english-input"></i> ri-english-input</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pinyin-input"></i> ri-pinyin-input</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wubi-input"></i> ri-wubi-input</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-input-cursor-move"></i> ri-input-cursor-move</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-number-1"></i> ri-number-1</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-number-2"></i> ri-number-2</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-number-3"></i> ri-number-3</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-number-4"></i> ri-number-4</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-number-5"></i> ri-number-5</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-number-6"></i> ri-number-6</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-number-7"></i> ri-number-7</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-number-8"></i> ri-number-8</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-number-9"></i> ri-number-9</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-number-0"></i> ri-number-0</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sort-asc"></i> ri-sort-asc</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sort-desc"></i> ri-sort-desc</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bring-forward"></i> ri-bring-forward</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-send-backward"></i> ri-send-backward</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bring-to-front"></i> ri-bring-to-front</span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-send-to-back"></i> ri-send-to-back</span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Finance </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wallet-line"></i> ri-wallet-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wallet-fill"></i> ri-wallet-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wallet-2-line"></i> ri-wallet-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wallet-2-fill"></i> ri-wallet-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wallet-3-line"></i> ri-wallet-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wallet-3-fill"></i> ri-wallet-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bank-card-line"></i> ri-bank-card-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bank-card-fill"></i> ri-bank-card-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bank-card-2-line"></i> ri-bank-card-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bank-card-2-fill"></i> ri-bank-card-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-secure-payment-line"></i> ri-secure-payment-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-secure-payment-fill"></i> ri-secure-payment-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-refund-line"></i> ri-refund-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-refund-fill"></i> ri-refund-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-refund-2-line"></i> ri-refund-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-refund-2-fill"></i> ri-refund-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-safe-line"></i> ri-safe-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-safe-fill"></i> ri-safe-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-safe-2-line"></i> ri-safe-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-safe-2-fill"></i> ri-safe-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-price-tag-line"></i> ri-price-tag-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-price-tag-fill"></i> ri-price-tag-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-price-tag-2-line"></i> ri-price-tag-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-price-tag-2-fill"></i> ri-price-tag-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-price-tag-3-line"></i> ri-price-tag-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-price-tag-3-fill"></i> ri-price-tag-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ticket-line"></i> ri-ticket-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ticket-fill"></i> ri-ticket-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ticket-2-line"></i> ri-ticket-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ticket-2-fill"></i> ri-ticket-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coupon-line"></i> ri-coupon-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coupon-fill"></i> ri-coupon-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coupon-2-line"></i> ri-coupon-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coupon-2-fill"></i> ri-coupon-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coupon-3-line"></i> ri-coupon-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coupon-3-fill"></i> ri-coupon-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coupon-4-line"></i> ri-coupon-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coupon-4-fill"></i> ri-coupon-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coupon-5-line"></i> ri-coupon-5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coupon-5-fill"></i> ri-coupon-5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-bag-line"></i> ri-shopping-bag-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-bag-fill"></i> ri-shopping-bag-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-bag-2-line"></i> ri-shopping-bag-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-bag-2-fill"></i> ri-shopping-bag-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-bag-3-line"></i> ri-shopping-bag-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-bag-3-fill"></i> ri-shopping-bag-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-basket-line"></i> ri-shopping-basket-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-basket-fill"></i> ri-shopping-basket-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-basket-2-line"></i> ri-shopping-basket-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-basket-2-fill"></i> ri-shopping-basket-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-cart-line"></i> ri-shopping-cart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-cart-fill"></i> ri-shopping-cart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-cart-2-line"></i> ri-shopping-cart-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shopping-cart-2-fill"></i> ri-shopping-cart-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vip-line"></i> ri-vip-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vip-fill"></i> ri-vip-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vip-crown-line"></i> ri-vip-crown-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vip-crown-fill"></i> ri-vip-crown-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vip-crown-2-line"></i> ri-vip-crown-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vip-crown-2-fill"></i> ri-vip-crown-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vip-diamond-line"></i> ri-vip-diamond-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vip-diamond-fill"></i> ri-vip-diamond-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-trophy-line"></i> ri-trophy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-trophy-fill"></i> ri-trophy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-exchange-line"></i> ri-exchange-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-exchange-fill"></i> ri-exchange-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-exchange-box-line"></i> ri-exchange-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-exchange-box-fill"></i> ri-exchange-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-swap-line"></i> ri-swap-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-swap-fill"></i> ri-swap-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-swap-box-line"></i> ri-swap-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-swap-box-fill"></i> ri-swap-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-exchange-dollar-line"></i> ri-exchange-dollar-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-exchange-dollar-fill"></i> ri-exchange-dollar-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-exchange-cny-line"></i> ri-exchange-cny-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-exchange-cny-fill"></i> ri-exchange-cny-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-exchange-funds-line"></i> ri-exchange-funds-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-exchange-funds-fill"></i> ri-exchange-funds-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-increase-decrease-line"></i> ri-increase-decrease-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-increase-decrease-fill"></i> ri-increase-decrease-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-percent-line"></i> ri-percent-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-percent-fill"></i> ri-percent-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-copper-coin-line"></i> ri-copper-coin-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-copper-coin-fill"></i> ri-copper-coin-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-copper-diamond-line"></i> ri-copper-diamond-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-copper-diamond-fill"></i> ri-copper-diamond-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-cny-box-line"></i> ri-money-cny-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-cny-box-fill"></i> ri-money-cny-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-cny-circle-line"></i> ri-money-cny-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-cny-circle-fill"></i> ri-money-cny-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-dollar-box-line"></i> ri-money-dollar-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-dollar-box-fill"></i> ri-money-dollar-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-dollar-circle-line"></i> ri-money-dollar-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-dollar-circle-fill"></i> ri-money-dollar-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-euro-box-line"></i> ri-money-euro-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-euro-box-fill"></i> ri-money-euro-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-euro-circle-line"></i> ri-money-euro-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-euro-circle-fill"></i> ri-money-euro-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-pound-box-line"></i> ri-money-pound-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-pound-box-fill"></i> ri-money-pound-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-pound-circle-line"></i> ri-money-pound-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-money-pound-circle-fill"></i> ri-money-pound-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bit-coin-line"></i> ri-bit-coin-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bit-coin-fill"></i> ri-bit-coin-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coin-line"></i> ri-coin-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coin-fill"></i> ri-coin-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coins-line"></i> ri-coins-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coins-fill"></i> ri-coins-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-currency-line"></i> ri-currency-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-currency-fill"></i> ri-currency-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-funds-line"></i> ri-funds-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-funds-fill"></i> ri-funds-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-funds-box-line"></i> ri-funds-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-funds-box-fill"></i> ri-funds-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-red-packet-line"></i> ri-red-packet-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-red-packet-fill"></i> ri-red-packet-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-water-flash-line"></i> ri-water-flash-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-water-flash-fill"></i> ri-water-flash-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stock-line"></i> ri-stock-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stock-fill"></i> ri-stock-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-auction-line"></i> ri-auction-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-auction-fill"></i> ri-auction-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gift-line"></i> ri-gift-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gift-fill"></i> ri-gift-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gift-2-line"></i> ri-gift-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gift-2-fill"></i> ri-gift-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hand-coin-line"></i> ri-hand-coin-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hand-coin-fill"></i> ri-hand-coin-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hand-heart-line"></i> ri-hand-heart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hand-heart-fill"></i> ri-hand-heart-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Logos </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-alipay-line"></i> ri-alipay-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-alipay-fill"></i> ri-alipay-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-amazon-line"></i> ri-amazon-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-amazon-fill"></i> ri-amazon-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-android-line"></i> ri-android-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-android-fill"></i> ri-android-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-angularjs-line"></i> ri-angularjs-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-angularjs-fill"></i> ri-angularjs-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-app-store-line"></i> ri-app-store-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-app-store-fill"></i> ri-app-store-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-apple-line"></i> ri-apple-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-apple-fill"></i> ri-apple-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-baidu-line"></i> ri-baidu-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-baidu-fill"></i> ri-baidu-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-behance-line"></i> ri-behance-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-behance-fill"></i> ri-behance-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bilibili-line"></i> ri-bilibili-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bilibili-fill"></i> ri-bilibili-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-centos-line"></i> ri-centos-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-centos-fill"></i> ri-centos-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chrome-line"></i> ri-chrome-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-chrome-fill"></i> ri-chrome-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-codepen-line"></i> ri-codepen-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-codepen-fill"></i> ri-codepen-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coreos-line"></i> ri-coreos-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-coreos-fill"></i> ri-coreos-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dingding-line"></i> ri-dingding-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dingding-fill"></i> ri-dingding-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-discord-line"></i> ri-discord-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-discord-fill"></i> ri-discord-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-disqus-line"></i> ri-disqus-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-disqus-fill"></i> ri-disqus-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-douban-line"></i> ri-douban-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-douban-fill"></i> ri-douban-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dribbble-line"></i> ri-dribbble-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dribbble-fill"></i> ri-dribbble-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drive-line"></i> ri-drive-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drive-fill"></i> ri-drive-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dropbox-line"></i> ri-dropbox-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dropbox-fill"></i> ri-dropbox-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-edge-line"></i> ri-edge-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-edge-fill"></i> ri-edge-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-evernote-line"></i> ri-evernote-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-evernote-fill"></i> ri-evernote-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-facebook-line"></i> ri-facebook-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-facebook-fill"></i> ri-facebook-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-facebook-circle-line"></i> ri-facebook-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-facebook-circle-fill"></i> ri-facebook-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-facebook-box-line"></i> ri-facebook-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-facebook-box-fill"></i> ri-facebook-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-firefox-line"></i> ri-firefox-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-firefox-fill"></i> ri-firefox-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flutter-line"></i> ri-flutter-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flutter-fill"></i> ri-flutter-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gatsby-line"></i> ri-gatsby-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gatsby-fill"></i> ri-gatsby-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-github-line"></i> ri-github-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-github-fill"></i> ri-github-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gitlab-line"></i> ri-gitlab-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gitlab-fill"></i> ri-gitlab-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-google-line"></i> ri-google-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-google-fill"></i> ri-google-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-google-play-line"></i> ri-google-play-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-google-play-fill"></i> ri-google-play-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-honor-of-kings-line"></i> ri-honor-of-kings-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-honor-of-kings-fill"></i> ri-honor-of-kings-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ie-line"></i> ri-ie-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ie-fill"></i> ri-ie-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-instagram-line"></i> ri-instagram-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-instagram-fill"></i> ri-instagram-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-invision-line"></i> ri-invision-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-invision-fill"></i> ri-invision-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-kakao-talk-line"></i> ri-kakao-talk-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-kakao-talk-fill"></i> ri-kakao-talk-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-line-line"></i> ri-line-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-line-fill"></i> ri-line-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-linkedin-line"></i> ri-linkedin-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-linkedin-fill"></i> ri-linkedin-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-linkedin-box-line"></i> ri-linkedin-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-linkedin-box-fill"></i> ri-linkedin-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mastercard-line"></i> ri-mastercard-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mastercard-fill"></i> ri-mastercard-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mastodon-line"></i> ri-mastodon-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mastodon-fill"></i> ri-mastodon-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-medium-line"></i> ri-medium-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-medium-fill"></i> ri-medium-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-messenger-line"></i> ri-messenger-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-messenger-fill"></i> ri-messenger-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mini-program-line"></i> ri-mini-program-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mini-program-fill"></i> ri-mini-program-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-netease-cloud-music-line"></i> ri-netease-cloud-music-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-netease-cloud-music-fill"></i> ri-netease-cloud-music-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-netflix-line"></i> ri-netflix-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-netflix-fill"></i> ri-netflix-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-npmjs-line"></i> ri-npmjs-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-npmjs-fill"></i> ri-npmjs-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-open-source-line"></i> ri-open-source-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-open-source-fill"></i> ri-open-source-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-opera-line"></i> ri-opera-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-opera-fill"></i> ri-opera-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-patreon-line"></i> ri-patreon-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-patreon-fill"></i> ri-patreon-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-paypal-line"></i> ri-paypal-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-paypal-fill"></i> ri-paypal-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pinterest-line"></i> ri-pinterest-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pinterest-fill"></i> ri-pinterest-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pixelfed-line"></i> ri-pixelfed-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pixelfed-fill"></i> ri-pixelfed-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-playstation-line"></i> ri-playstation-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-playstation-fill"></i> ri-playstation-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-product-hunt-line"></i> ri-product-hunt-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-product-hunt-fill"></i> ri-product-hunt-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-qq-line"></i> ri-qq-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-qq-fill"></i> ri-qq-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-reactjs-line"></i> ri-reactjs-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-reactjs-fill"></i> ri-reactjs-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-reddit-line"></i> ri-reddit-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-reddit-fill"></i> ri-reddit-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-remixicon-line"></i> ri-remixicon-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-remixicon-fill"></i> ri-remixicon-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-safari-line"></i> ri-safari-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-safari-fill"></i> ri-safari-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skype-line"></i> ri-skype-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skype-fill"></i> ri-skype-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slack-line"></i> ri-slack-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-slack-fill"></i> ri-slack-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-snapchat-line"></i> ri-snapchat-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-snapchat-fill"></i> ri-snapchat-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-soundcloud-line"></i> ri-soundcloud-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-soundcloud-fill"></i> ri-soundcloud-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spectrum-line"></i> ri-spectrum-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spectrum-fill"></i> ri-spectrum-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spotify-line"></i> ri-spotify-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spotify-fill"></i> ri-spotify-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stack-overflow-line"></i> ri-stack-overflow-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stack-overflow-fill"></i> ri-stack-overflow-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stackshare-line"></i> ri-stackshare-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stackshare-fill"></i> ri-stackshare-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-steam-line"></i> ri-steam-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-steam-fill"></i> ri-steam-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-switch-line"></i> ri-switch-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-switch-fill"></i> ri-switch-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-taobao-line"></i> ri-taobao-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-taobao-fill"></i> ri-taobao-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-telegram-line"></i> ri-telegram-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-telegram-fill"></i> ri-telegram-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-trello-line"></i> ri-trello-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-trello-fill"></i> ri-trello-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tumblr-line"></i> ri-tumblr-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tumblr-fill"></i> ri-tumblr-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-twitch-line"></i> ri-twitch-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-twitch-fill"></i> ri-twitch-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-twitter-line"></i> ri-twitter-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-twitter-fill"></i> ri-twitter-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ubuntu-line"></i> ri-ubuntu-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ubuntu-fill"></i> ri-ubuntu-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-unsplash-line"></i> ri-unsplash-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-unsplash-fill"></i> ri-unsplash-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-visa-line"></i> ri-visa-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-visa-fill"></i> ri-visa-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vuejs-line"></i> ri-vuejs-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vuejs-fill"></i> ri-vuejs-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wechat-line"></i> ri-wechat-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wechat-fill"></i> ri-wechat-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wechat-2-line"></i> ri-wechat-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wechat-2-fill"></i> ri-wechat-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wechat-pay-line"></i> ri-wechat-pay-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wechat-pay-fill"></i> ri-wechat-pay-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-weibo-line"></i> ri-weibo-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-weibo-fill"></i> ri-weibo-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-whatsapp-line"></i> ri-whatsapp-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-whatsapp-fill"></i> ri-whatsapp-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-windows-line"></i> ri-windows-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-windows-fill"></i> ri-windows-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-xbox-line"></i> ri-xbox-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-xbox-fill"></i> ri-xbox-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-xing-line"></i> ri-xing-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-xing-fill"></i> ri-xing-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-youtube-line"></i> ri-youtube-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-youtube-fill"></i> ri-youtube-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-zcool-line"></i> ri-zcool-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-zcool-fill"></i> ri-zcool-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-zhihu-line"></i> ri-zhihu-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-zhihu-fill"></i> ri-zhihu-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Map </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-line"></i> ri-map-pin-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-fill"></i> ri-map-pin-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-2-line"></i> ri-map-pin-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-2-fill"></i> ri-map-pin-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-3-line"></i> ri-map-pin-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-3-fill"></i> ri-map-pin-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-4-line"></i> ri-map-pin-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-4-fill"></i> ri-map-pin-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-5-line"></i> ri-map-pin-5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-5-fill"></i> ri-map-pin-5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-add-line"></i> ri-map-pin-add-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-add-fill"></i> ri-map-pin-add-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-range-line"></i> ri-map-pin-range-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-range-fill"></i> ri-map-pin-range-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-time-line"></i> ri-map-pin-time-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-time-fill"></i> ri-map-pin-time-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-user-line"></i> ri-map-pin-user-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-pin-user-fill"></i> ri-map-pin-user-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pin-distance-line"></i> ri-pin-distance-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pin-distance-fill"></i> ri-pin-distance-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pushpin-line"></i> ri-pushpin-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pushpin-fill"></i> ri-pushpin-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pushpin-2-line"></i> ri-pushpin-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pushpin-2-fill"></i> ri-pushpin-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compass-line"></i> ri-compass-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compass-fill"></i> ri-compass-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compass-2-line"></i> ri-compass-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compass-2-fill"></i> ri-compass-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compass-3-line"></i> ri-compass-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compass-3-fill"></i> ri-compass-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compass-4-line"></i> ri-compass-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compass-4-fill"></i> ri-compass-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compass-discover-line"></i> ri-compass-discover-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-compass-discover-fill"></i> ri-compass-discover-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-anchor-line"></i> ri-anchor-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-anchor-fill"></i> ri-anchor-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-china-railway-line"></i> ri-china-railway-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-china-railway-fill"></i> ri-china-railway-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-space-ship-line"></i> ri-space-ship-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-space-ship-fill"></i> ri-space-ship-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rocket-line"></i> ri-rocket-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rocket-fill"></i> ri-rocket-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rocket-2-line"></i> ri-rocket-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rocket-2-fill"></i> ri-rocket-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-line"></i> ri-map-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-fill"></i> ri-map-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-2-line"></i> ri-map-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-map-2-fill"></i> ri-map-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-treasure-map-line"></i> ri-treasure-map-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-treasure-map-fill"></i> ri-treasure-map-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-road-map-line"></i> ri-road-map-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-road-map-fill"></i> ri-road-map-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-earth-line"></i> ri-earth-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-earth-fill"></i> ri-earth-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-globe-line"></i> ri-globe-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-globe-fill"></i> ri-globe-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-parking-line"></i> ri-parking-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-parking-fill"></i> ri-parking-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-parking-box-line"></i> ri-parking-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-parking-box-fill"></i> ri-parking-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-route-line"></i> ri-route-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-route-fill"></i> ri-route-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-guide-line"></i> ri-guide-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-guide-fill"></i> ri-guide-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gas-station-line"></i> ri-gas-station-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gas-station-fill"></i> ri-gas-station-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-charging-pile-line"></i> ri-charging-pile-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-charging-pile-fill"></i> ri-charging-pile-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-charging-pile-2-line"></i> ri-charging-pile-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-charging-pile-2-fill"></i> ri-charging-pile-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-car-line"></i> ri-car-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-car-fill"></i> ri-car-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-car-washing-line"></i> ri-car-washing-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-car-washing-fill"></i> ri-car-washing-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-roadster-line"></i> ri-roadster-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-roadster-fill"></i> ri-roadster-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-taxi-line"></i> ri-taxi-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-taxi-fill"></i> ri-taxi-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-taxi-wifi-line"></i> ri-taxi-wifi-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-taxi-wifi-fill"></i> ri-taxi-wifi-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-police-car-line"></i> ri-police-car-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-police-car-fill"></i> ri-police-car-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bus-line"></i> ri-bus-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bus-fill"></i> ri-bus-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bus-2-line"></i> ri-bus-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bus-2-fill"></i> ri-bus-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bus-wifi-line"></i> ri-bus-wifi-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bus-wifi-fill"></i> ri-bus-wifi-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-truck-line"></i> ri-truck-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-truck-fill"></i> ri-truck-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-train-line"></i> ri-train-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-train-fill"></i> ri-train-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-train-wifi-line"></i> ri-train-wifi-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-train-wifi-fill"></i> ri-train-wifi-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-subway-line"></i> ri-subway-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-subway-fill"></i> ri-subway-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-subway-wifi-line"></i> ri-subway-wifi-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-subway-wifi-fill"></i> ri-subway-wifi-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flight-takeoff-line"></i> ri-flight-takeoff-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flight-takeoff-fill"></i> ri-flight-takeoff-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flight-land-line"></i> ri-flight-land-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flight-land-fill"></i> ri-flight-land-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-plane-line"></i> ri-plane-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-plane-fill"></i> ri-plane-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sailboat-line"></i> ri-sailboat-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sailboat-fill"></i> ri-sailboat-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ship-line"></i> ri-ship-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ship-fill"></i> ri-ship-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ship-2-line"></i> ri-ship-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ship-2-fill"></i> ri-ship-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bike-line"></i> ri-bike-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bike-fill"></i> ri-bike-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-e-bike-line"></i> ri-e-bike-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-e-bike-fill"></i> ri-e-bike-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-e-bike-2-line"></i> ri-e-bike-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-e-bike-2-fill"></i> ri-e-bike-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-takeaway-line"></i> ri-takeaway-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-takeaway-fill"></i> ri-takeaway-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-motorbike-line"></i> ri-motorbike-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-motorbike-fill"></i> ri-motorbike-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-caravan-line"></i> ri-caravan-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-caravan-fill"></i> ri-caravan-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-walk-line"></i> ri-walk-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-walk-fill"></i> ri-walk-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-run-line"></i> ri-run-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-run-fill"></i> ri-run-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-riding-line"></i> ri-riding-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-riding-fill"></i> ri-riding-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-barricade-line"></i> ri-barricade-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-barricade-fill"></i> ri-barricade-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-footprint-line"></i> ri-footprint-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-footprint-fill"></i> ri-footprint-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-traffic-light-line"></i> ri-traffic-light-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-traffic-light-fill"></i> ri-traffic-light-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-tower-line"></i> ri-signal-tower-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-signal-tower-fill"></i> ri-signal-tower-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-restaurant-line"></i> ri-restaurant-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-restaurant-fill"></i> ri-restaurant-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-restaurant-2-line"></i> ri-restaurant-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-restaurant-2-fill"></i> ri-restaurant-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cup-line"></i> ri-cup-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cup-fill"></i> ri-cup-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-goblet-line"></i> ri-goblet-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-goblet-fill"></i> ri-goblet-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hotel-bed-line"></i> ri-hotel-bed-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hotel-bed-fill"></i> ri-hotel-bed-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-navigation-line"></i> ri-navigation-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-navigation-fill"></i> ri-navigation-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-oil-line"></i> ri-oil-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-oil-fill"></i> ri-oil-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-direction-line"></i> ri-direction-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-direction-fill"></i> ri-direction-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-steering-line"></i> ri-steering-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-steering-fill"></i> ri-steering-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-steering-2-line"></i> ri-steering-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-steering-2-fill"></i> ri-steering-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lifebuoy-line"></i> ri-lifebuoy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lifebuoy-fill"></i> ri-lifebuoy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-passport-line"></i> ri-passport-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-passport-fill"></i> ri-passport-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-suitcase-line"></i> ri-suitcase-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-suitcase-fill"></i> ri-suitcase-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-suitcase-2-line"></i> ri-suitcase-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-suitcase-2-fill"></i> ri-suitcase-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-suitcase-3-line"></i> ri-suitcase-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-suitcase-3-fill"></i> ri-suitcase-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-luggage-deposit-line"></i> ri-luggage-deposit-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-luggage-deposit-fill"></i> ri-luggage-deposit-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-luggage-cart-line"></i> ri-luggage-cart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-luggage-cart-fill"></i> ri-luggage-cart-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Media </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-image-line"></i> ri-image-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-image-fill"></i> ri-image-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-image-2-line"></i> ri-image-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-image-2-fill"></i> ri-image-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-image-add-line"></i> ri-image-add-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-image-add-fill"></i> ri-image-add-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-landscape-line"></i> ri-landscape-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-landscape-fill"></i> ri-landscape-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gallery-line"></i> ri-gallery-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gallery-fill"></i> ri-gallery-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gallery-upload-line"></i> ri-gallery-upload-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-gallery-upload-fill"></i> ri-gallery-upload-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-video-line"></i> ri-video-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-video-fill"></i> ri-video-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-movie-line"></i> ri-movie-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-movie-fill"></i> ri-movie-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-movie-2-line"></i> ri-movie-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-movie-2-fill"></i> ri-movie-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-film-line"></i> ri-film-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-film-fill"></i> ri-film-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-clapperboard-line"></i> ri-clapperboard-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-clapperboard-fill"></i> ri-clapperboard-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vidicon-line"></i> ri-vidicon-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vidicon-fill"></i> ri-vidicon-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vidicon-2-line"></i> ri-vidicon-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-vidicon-2-fill"></i> ri-vidicon-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-live-line"></i> ri-live-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-live-fill"></i> ri-live-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-video-add-line"></i> ri-video-add-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-video-add-fill"></i> ri-video-add-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-video-upload-line"></i> ri-video-upload-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-video-upload-fill"></i> ri-video-upload-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-video-download-line"></i> ri-video-download-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-video-download-fill"></i> ri-video-download-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dv-line"></i> ri-dv-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dv-fill"></i> ri-dv-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-line"></i> ri-camera-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-fill"></i> ri-camera-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-off-line"></i> ri-camera-off-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-off-fill"></i> ri-camera-off-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-2-line"></i> ri-camera-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-2-fill"></i> ri-camera-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-3-line"></i> ri-camera-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-3-fill"></i> ri-camera-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-lens-line"></i> ri-camera-lens-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-lens-fill"></i> ri-camera-lens-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-switch-line"></i> ri-camera-switch-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-camera-switch-fill"></i> ri-camera-switch-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-polaroid-line"></i> ri-polaroid-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-polaroid-fill"></i> ri-polaroid-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-polaroid-2-line"></i> ri-polaroid-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-polaroid-2-fill"></i> ri-polaroid-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-phone-camera-line"></i> ri-phone-camera-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-phone-camera-fill"></i> ri-phone-camera-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-webcam-line"></i> ri-webcam-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-webcam-fill"></i> ri-webcam-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mv-line"></i> ri-mv-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mv-fill"></i> ri-mv-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-music-line"></i> ri-music-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-music-fill"></i> ri-music-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-music-2-line"></i> ri-music-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-music-2-fill"></i> ri-music-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-disc-line"></i> ri-disc-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-disc-fill"></i> ri-disc-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-album-line"></i> ri-album-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-album-fill"></i> ri-album-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dvd-line"></i> ri-dvd-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dvd-fill"></i> ri-dvd-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-headphone-line"></i> ri-headphone-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-headphone-fill"></i> ri-headphone-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-radio-line"></i> ri-radio-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-radio-fill"></i> ri-radio-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-radio-2-line"></i> ri-radio-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-radio-2-fill"></i> ri-radio-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tape-line"></i> ri-tape-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tape-fill"></i> ri-tape-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mic-line"></i> ri-mic-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mic-fill"></i> ri-mic-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mic-2-line"></i> ri-mic-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mic-2-fill"></i> ri-mic-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mic-off-line"></i> ri-mic-off-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mic-off-fill"></i> ri-mic-off-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-volume-down-line"></i> ri-volume-down-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-volume-down-fill"></i> ri-volume-down-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-volume-mute-line"></i> ri-volume-mute-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-volume-mute-fill"></i> ri-volume-mute-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-volume-up-line"></i> ri-volume-up-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-volume-up-fill"></i> ri-volume-up-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-volume-vibrate-line"></i> ri-volume-vibrate-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-volume-vibrate-fill"></i> ri-volume-vibrate-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-volume-off-vibrate-line"></i> ri-volume-off-vibrate-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-volume-off-vibrate-fill"></i> ri-volume-off-vibrate-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-speaker-line"></i> ri-speaker-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-speaker-fill"></i> ri-speaker-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-speaker-2-line"></i> ri-speaker-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-speaker-2-fill"></i> ri-speaker-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-speaker-3-line"></i> ri-speaker-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-speaker-3-fill"></i> ri-speaker-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-surround-sound-line"></i> ri-surround-sound-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-surround-sound-fill"></i> ri-surround-sound-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-broadcast-line"></i> ri-broadcast-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-broadcast-fill"></i> ri-broadcast-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-line"></i> ri-notification-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-fill"></i> ri-notification-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-2-line"></i> ri-notification-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-2-fill"></i> ri-notification-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-3-line"></i> ri-notification-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-3-fill"></i> ri-notification-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-4-line"></i> ri-notification-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-4-fill"></i> ri-notification-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-off-line"></i> ri-notification-off-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-off-fill"></i> ri-notification-off-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-play-circle-line"></i> ri-play-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-play-circle-fill"></i> ri-play-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pause-circle-line"></i> ri-pause-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pause-circle-fill"></i> ri-pause-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-record-circle-line"></i> ri-record-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-record-circle-fill"></i> ri-record-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stop-circle-line"></i> ri-stop-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stop-circle-fill"></i> ri-stop-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eject-line"></i> ri-eject-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eject-fill"></i> ri-eject-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-play-line"></i> ri-play-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-play-fill"></i> ri-play-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pause-line"></i> ri-pause-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pause-fill"></i> ri-pause-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stop-line"></i> ri-stop-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stop-fill"></i> ri-stop-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rewind-line"></i> ri-rewind-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rewind-fill"></i> ri-rewind-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-speed-line"></i> ri-speed-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-speed-fill"></i> ri-speed-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skip-back-line"></i> ri-skip-back-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skip-back-fill"></i> ri-skip-back-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skip-forward-line"></i> ri-skip-forward-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skip-forward-fill"></i> ri-skip-forward-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-play-mini-line"></i> ri-play-mini-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-play-mini-fill"></i> ri-play-mini-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pause-mini-line"></i> ri-pause-mini-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-pause-mini-fill"></i> ri-pause-mini-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stop-mini-line"></i> ri-stop-mini-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-stop-mini-fill"></i> ri-stop-mini-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rewind-mini-line"></i> ri-rewind-mini-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rewind-mini-fill"></i> ri-rewind-mini-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-speed-mini-line"></i> ri-speed-mini-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-speed-mini-fill"></i> ri-speed-mini-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skip-back-mini-line"></i> ri-skip-back-mini-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skip-back-mini-fill"></i> ri-skip-back-mini-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skip-forward-mini-line"></i> ri-skip-forward-mini-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skip-forward-mini-fill"></i> ri-skip-forward-mini-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-repeat-line"></i> ri-repeat-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-repeat-fill"></i> ri-repeat-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-repeat-2-line"></i> ri-repeat-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-repeat-2-fill"></i> ri-repeat-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-repeat-one-line"></i> ri-repeat-one-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-repeat-one-fill"></i> ri-repeat-one-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-order-play-line"></i> ri-order-play-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-order-play-fill"></i> ri-order-play-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shuffle-line"></i> ri-shuffle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shuffle-fill"></i> ri-shuffle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-play-list-line"></i> ri-play-list-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-play-list-fill"></i> ri-play-list-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-play-list-add-line"></i> ri-play-list-add-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-play-list-add-fill"></i> ri-play-list-add-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fullscreen-line"></i> ri-fullscreen-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fullscreen-fill"></i> ri-fullscreen-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fullscreen-exit-line"></i> ri-fullscreen-exit-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fullscreen-exit-fill"></i> ri-fullscreen-exit-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-equalizer-line"></i> ri-equalizer-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-equalizer-fill"></i> ri-equalizer-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sound-module-line"></i> ri-sound-module-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sound-module-fill"></i> ri-sound-module-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rhythm-line"></i> ri-rhythm-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rhythm-fill"></i> ri-rhythm-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-voiceprint-line"></i> ri-voiceprint-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-voiceprint-fill"></i> ri-voiceprint-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hq-line"></i> ri-hq-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hq-fill"></i> ri-hq-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hd-line"></i> ri-hd-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hd-fill"></i> ri-hd-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-4k-line"></i> ri-4k-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-4k-fill"></i> ri-4k-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-aspect-ratio-line"></i> ri-aspect-ratio-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-aspect-ratio-fill"></i> ri-aspect-ratio-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-picture-in-picture-line"></i> ri-picture-in-picture-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-picture-in-picture-fill"></i> ri-picture-in-picture-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-picture-in-picture-2-line"></i> ri-picture-in-picture-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-picture-in-picture-2-fill"></i> ri-picture-in-picture-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-picture-in-picture-exit-line"></i> ri-picture-in-picture-exit-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-picture-in-picture-exit-fill"></i> ri-picture-in-picture-exit-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">System </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-apps-line"></i> ri-apps-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-apps-fill"></i> ri-apps-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-apps-2-line"></i> ri-apps-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-apps-2-fill"></i> ri-apps-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-function-line"></i> ri-function-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-function-fill"></i> ri-function-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dashboard-line"></i> ri-dashboard-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-dashboard-fill"></i> ri-dashboard-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-line"></i> ri-menu-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-fill"></i> ri-menu-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-2-line"></i> ri-menu-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-2-fill"></i> ri-menu-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-3-line"></i> ri-menu-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-3-fill"></i> ri-menu-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-4-line"></i> ri-menu-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-4-fill"></i> ri-menu-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-5-line"></i> ri-menu-5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-5-fill"></i> ri-menu-5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-add-line"></i> ri-menu-add-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-menu-add-fill"></i> ri-menu-add-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-more-line"></i> ri-more-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-more-fill"></i> ri-more-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-more-2-line"></i> ri-more-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-more-2-fill"></i> ri-more-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-heart-line"></i> ri-heart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-heart-fill"></i> ri-heart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-heart-2-line"></i> ri-heart-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-heart-2-fill"></i> ri-heart-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-heart-add-line"></i> ri-heart-add-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-heart-add-fill"></i> ri-heart-add-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-star-line"></i> ri-star-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-star-fill"></i> ri-star-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-star-s-line"></i> ri-star-s-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-star-s-fill"></i> ri-star-s-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-star-half-line"></i> ri-star-half-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-star-half-fill"></i> ri-star-half-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-star-half-s-line"></i> ri-star-half-s-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-star-half-s-fill"></i> ri-star-half-s-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-line"></i> ri-settings-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-fill"></i> ri-settings-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-2-line"></i> ri-settings-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-2-fill"></i> ri-settings-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-3-line"></i> ri-settings-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-3-fill"></i> ri-settings-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-4-line"></i> ri-settings-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-4-fill"></i> ri-settings-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-5-line"></i> ri-settings-5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-5-fill"></i> ri-settings-5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-6-line"></i> ri-settings-6-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-settings-6-fill"></i> ri-settings-6-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-list-settings-line"></i> ri-list-settings-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-list-settings-fill"></i> ri-list-settings-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-forbid-line"></i> ri-forbid-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-forbid-fill"></i> ri-forbid-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-forbid-2-line"></i> ri-forbid-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-forbid-2-fill"></i> ri-forbid-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-information-line"></i> ri-information-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-information-fill"></i> ri-information-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-error-warning-line"></i> ri-error-warning-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-error-warning-fill"></i> ri-error-warning-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-question-line"></i> ri-question-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-question-fill"></i> ri-question-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-alert-line"></i> ri-alert-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-alert-fill"></i> ri-alert-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spam-line"></i> ri-spam-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spam-fill"></i> ri-spam-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spam-2-line"></i> ri-spam-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spam-2-fill"></i> ri-spam-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spam-3-line"></i> ri-spam-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spam-3-fill"></i> ri-spam-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-blank-line"></i> ri-checkbox-blank-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-blank-fill"></i> ri-checkbox-blank-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-line"></i> ri-checkbox-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-fill"></i> ri-checkbox-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-indeterminate-line"></i> ri-checkbox-indeterminate-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-indeterminate-fill"></i> ri-checkbox-indeterminate-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-add-box-line"></i> ri-add-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-add-box-fill"></i> ri-add-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-blank-circle-line"></i> ri-checkbox-blank-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-blank-circle-fill"></i> ri-checkbox-blank-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-circle-line"></i> ri-checkbox-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-circle-fill"></i> ri-checkbox-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-indeterminate-circle-line"></i> ri-indeterminate-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-indeterminate-circle-fill"></i> ri-indeterminate-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-add-circle-line"></i> ri-add-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-add-circle-fill"></i> ri-add-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-close-circle-line"></i> ri-close-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-close-circle-fill"></i> ri-close-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-radio-button-line"></i> ri-radio-button-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-radio-button-fill"></i> ri-radio-button-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-multiple-blank-line"></i> ri-checkbox-multiple-blank-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-multiple-blank-fill"></i> ri-checkbox-multiple-blank-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-multiple-line"></i> ri-checkbox-multiple-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-checkbox-multiple-fill"></i> ri-checkbox-multiple-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-check-line"></i> ri-check-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-check-fill"></i> ri-check-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-check-double-line"></i> ri-check-double-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-check-double-fill"></i> ri-check-double-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-close-line"></i> ri-close-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-close-fill"></i> ri-close-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-add-line"></i> ri-add-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-add-fill"></i> ri-add-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-subtract-line"></i> ri-subtract-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-subtract-fill"></i> ri-subtract-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-divide-line"></i> ri-divide-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-divide-fill"></i> ri-divide-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-up-line"></i> ri-arrow-left-up-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-up-fill"></i> ri-arrow-left-up-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-up-line"></i> ri-arrow-up-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-up-fill"></i> ri-arrow-up-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-right-up-line"></i> ri-arrow-right-up-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-right-up-fill"></i> ri-arrow-right-up-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-right-line"></i> ri-arrow-right-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-right-fill"></i> ri-arrow-right-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-right-down-line"></i> ri-arrow-right-down-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-right-down-fill"></i> ri-arrow-right-down-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-down-line"></i> ri-arrow-down-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-down-fill"></i> ri-arrow-down-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-down-line"></i> ri-arrow-left-down-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-down-fill"></i> ri-arrow-left-down-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-line"></i> ri-arrow-left-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-fill"></i> ri-arrow-left-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-up-circle-line"></i> ri-arrow-up-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-up-circle-fill"></i> ri-arrow-up-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-right-circle-line"></i> ri-arrow-right-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-right-circle-fill"></i> ri-arrow-right-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-down-circle-line"></i> ri-arrow-down-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-down-circle-fill"></i> ri-arrow-down-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-circle-line"></i> ri-arrow-left-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-circle-fill"></i> ri-arrow-left-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-up-s-line"></i> ri-arrow-up-s-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-up-s-fill"></i> ri-arrow-up-s-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-down-s-line"></i> ri-arrow-down-s-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-down-s-fill"></i> ri-arrow-down-s-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-right-s-line"></i> ri-arrow-right-s-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-right-s-fill"></i> ri-arrow-right-s-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-s-line"></i> ri-arrow-left-s-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-s-fill"></i> ri-arrow-left-s-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-drop-up-line"></i> ri-arrow-drop-up-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-drop-up-fill"></i> ri-arrow-drop-up-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-drop-right-line"></i> ri-arrow-drop-right-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-drop-right-fill"></i> ri-arrow-drop-right-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-drop-down-line"></i> ri-arrow-drop-down-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-drop-down-fill"></i> ri-arrow-drop-down-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-drop-left-line"></i> ri-arrow-drop-left-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-drop-left-fill"></i> ri-arrow-drop-left-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-right-line"></i> ri-arrow-left-right-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-left-right-fill"></i> ri-arrow-left-right-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-up-down-line"></i> ri-arrow-up-down-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-up-down-fill"></i> ri-arrow-up-down-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-go-back-line"></i> ri-arrow-go-back-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-go-back-fill"></i> ri-arrow-go-back-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-go-forward-line"></i> ri-arrow-go-forward-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-arrow-go-forward-fill"></i> ri-arrow-go-forward-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-download-line"></i> ri-download-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-download-fill"></i> ri-download-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-upload-line"></i> ri-upload-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-upload-fill"></i> ri-upload-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-download-2-line"></i> ri-download-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-download-2-fill"></i> ri-download-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-upload-2-line"></i> ri-upload-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-upload-2-fill"></i> ri-upload-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-download-cloud-line"></i> ri-download-cloud-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-download-cloud-fill"></i> ri-download-cloud-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-download-cloud-2-line"></i> ri-download-cloud-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-download-cloud-2-fill"></i> ri-download-cloud-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-upload-cloud-line"></i> ri-upload-cloud-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-upload-cloud-fill"></i> ri-upload-cloud-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-upload-cloud-2-line"></i> ri-upload-cloud-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-upload-cloud-2-fill"></i> ri-upload-cloud-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-login-box-line"></i> ri-login-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-login-box-fill"></i> ri-login-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-logout-box-line"></i> ri-logout-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-logout-box-fill"></i> ri-logout-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-logout-box-r-line"></i> ri-logout-box-r-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-logout-box-r-fill"></i> ri-logout-box-r-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-login-circle-line"></i> ri-login-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-login-circle-fill"></i> ri-login-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-logout-circle-line"></i> ri-logout-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-logout-circle-fill"></i> ri-logout-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-logout-circle-r-line"></i> ri-logout-circle-r-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-logout-circle-r-fill"></i> ri-logout-circle-r-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-refresh-line"></i> ri-refresh-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-refresh-fill"></i> ri-refresh-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-line"></i> ri-shield-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-fill"></i> ri-shield-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-cross-line"></i> ri-shield-cross-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-cross-fill"></i> ri-shield-cross-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-flash-line"></i> ri-shield-flash-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-flash-fill"></i> ri-shield-flash-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-star-line"></i> ri-shield-star-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-star-fill"></i> ri-shield-star-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-user-line"></i> ri-shield-user-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-user-fill"></i> ri-shield-user-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-keyhole-line"></i> ri-shield-keyhole-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shield-keyhole-fill"></i> ri-shield-keyhole-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-back-line"></i> ri-delete-back-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-back-fill"></i> ri-delete-back-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-back-2-line"></i> ri-delete-back-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-back-2-fill"></i> ri-delete-back-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-line"></i> ri-delete-bin-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-fill"></i> ri-delete-bin-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-2-line"></i> ri-delete-bin-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-2-fill"></i> ri-delete-bin-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-3-line"></i> ri-delete-bin-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-3-fill"></i> ri-delete-bin-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-4-line"></i> ri-delete-bin-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-4-fill"></i> ri-delete-bin-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-5-line"></i> ri-delete-bin-5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-5-fill"></i> ri-delete-bin-5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-6-line"></i> ri-delete-bin-6-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-6-fill"></i> ri-delete-bin-6-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-7-line"></i> ri-delete-bin-7-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-delete-bin-7-fill"></i> ri-delete-bin-7-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lock-line"></i> ri-lock-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lock-fill"></i> ri-lock-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lock-2-line"></i> ri-lock-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lock-2-fill"></i> ri-lock-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lock-password-line"></i> ri-lock-password-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lock-password-fill"></i> ri-lock-password-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lock-unlock-line"></i> ri-lock-unlock-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lock-unlock-fill"></i> ri-lock-unlock-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eye-line"></i> ri-eye-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eye-fill"></i> ri-eye-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eye-off-line"></i> ri-eye-off-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eye-off-fill"></i> ri-eye-off-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eye-2-line"></i> ri-eye-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eye-2-fill"></i> ri-eye-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eye-close-line"></i> ri-eye-close-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-eye-close-fill"></i> ri-eye-close-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-search-line"></i> ri-search-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-search-fill"></i> ri-search-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-search-2-line"></i> ri-search-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-search-2-fill"></i> ri-search-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-search-eye-line"></i> ri-search-eye-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-search-eye-fill"></i> ri-search-eye-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-zoom-in-line"></i> ri-zoom-in-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-zoom-in-fill"></i> ri-zoom-in-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-zoom-out-line"></i> ri-zoom-out-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-zoom-out-fill"></i> ri-zoom-out-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-find-replace-line"></i> ri-find-replace-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-find-replace-fill"></i> ri-find-replace-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-line"></i> ri-share-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-fill"></i> ri-share-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-box-line"></i> ri-share-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-box-fill"></i> ri-share-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-circle-line"></i> ri-share-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-circle-fill"></i> ri-share-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-forward-line"></i> ri-share-forward-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-forward-fill"></i> ri-share-forward-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-forward-2-line"></i> ri-share-forward-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-forward-2-fill"></i> ri-share-forward-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-forward-box-line"></i> ri-share-forward-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-share-forward-box-fill"></i> ri-share-forward-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-side-bar-line"></i> ri-side-bar-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-side-bar-fill"></i> ri-side-bar-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-time-line"></i> ri-time-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-time-fill"></i> ri-time-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-timer-line"></i> ri-timer-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-timer-fill"></i> ri-timer-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-timer-2-line"></i> ri-timer-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-timer-2-fill"></i> ri-timer-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-timer-flash-line"></i> ri-timer-flash-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-timer-flash-fill"></i> ri-timer-flash-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-alarm-line"></i> ri-alarm-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-alarm-fill"></i> ri-alarm-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-history-line"></i> ri-history-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-history-fill"></i> ri-history-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-thumb-down-line"></i> ri-thumb-down-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-thumb-down-fill"></i> ri-thumb-down-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-thumb-up-line"></i> ri-thumb-up-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-thumb-up-fill"></i> ri-thumb-up-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-alarm-warning-line"></i> ri-alarm-warning-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-alarm-warning-fill"></i> ri-alarm-warning-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-badge-line"></i> ri-notification-badge-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-notification-badge-fill"></i> ri-notification-badge-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-toggle-line"></i> ri-toggle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-toggle-fill"></i> ri-toggle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-filter-line"></i> ri-filter-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-filter-fill"></i> ri-filter-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-filter-2-line"></i> ri-filter-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-filter-2-fill"></i> ri-filter-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-filter-3-line"></i> ri-filter-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-filter-3-fill"></i> ri-filter-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-loader-line"></i> ri-loader-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-loader-fill"></i> ri-loader-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-loader-2-line"></i> ri-loader-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-loader-2-fill"></i> ri-loader-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-loader-3-line"></i> ri-loader-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-loader-3-fill"></i> ri-loader-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-loader-4-line"></i> ri-loader-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-loader-4-fill"></i> ri-loader-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-loader-5-line"></i> ri-loader-5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-loader-5-fill"></i> ri-loader-5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-external-link-line"></i> ri-external-link-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-external-link-fill"></i> ri-external-link-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">User&amp;Faces </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-line"></i> ri-user-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-fill"></i> ri-user-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-2-line"></i> ri-user-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-2-fill"></i> ri-user-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-3-line"></i> ri-user-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-3-fill"></i> ri-user-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-4-line"></i> ri-user-4-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-4-fill"></i> ri-user-4-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-5-line"></i> ri-user-5-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-5-fill"></i> ri-user-5-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-6-line"></i> ri-user-6-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-6-fill"></i> ri-user-6-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-smile-line"></i> ri-user-smile-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-smile-fill"></i> ri-user-smile-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-account-box-line"></i> ri-account-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-account-box-fill"></i> ri-account-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-account-circle-line"></i> ri-account-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-account-circle-fill"></i> ri-account-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-account-pin-box-line"></i> ri-account-pin-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-account-pin-box-fill"></i> ri-account-pin-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-account-pin-circle-line"></i> ri-account-pin-circle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-account-pin-circle-fill"></i> ri-account-pin-circle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-add-line"></i> ri-user-add-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-add-fill"></i> ri-user-add-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-follow-line"></i> ri-user-follow-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-follow-fill"></i> ri-user-follow-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-unfollow-line"></i> ri-user-unfollow-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-unfollow-fill"></i> ri-user-unfollow-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-shared-line"></i> ri-user-shared-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-shared-fill"></i> ri-user-shared-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-shared-2-line"></i> ri-user-shared-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-shared-2-fill"></i> ri-user-shared-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-received-line"></i> ri-user-received-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-received-fill"></i> ri-user-received-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-received-2-line"></i> ri-user-received-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-received-2-fill"></i> ri-user-received-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-location-line"></i> ri-user-location-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-location-fill"></i> ri-user-location-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-search-line"></i> ri-user-search-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-search-fill"></i> ri-user-search-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-settings-line"></i> ri-user-settings-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-settings-fill"></i> ri-user-settings-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-star-line"></i> ri-user-star-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-star-fill"></i> ri-user-star-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-heart-line"></i> ri-user-heart-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-heart-fill"></i> ri-user-heart-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-admin-line"></i> ri-admin-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-admin-fill"></i> ri-admin-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contacts-line"></i> ri-contacts-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-contacts-fill"></i> ri-contacts-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-group-line"></i> ri-group-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-group-fill"></i> ri-group-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-group-2-line"></i> ri-group-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-group-2-fill"></i> ri-group-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-team-line"></i> ri-team-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-team-fill"></i> ri-team-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-voice-line"></i> ri-user-voice-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-user-voice-fill"></i> ri-user-voice-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-line"></i> ri-emotion-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-fill"></i> ri-emotion-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-2-line"></i> ri-emotion-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-2-fill"></i> ri-emotion-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-happy-line"></i> ri-emotion-happy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-happy-fill"></i> ri-emotion-happy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-normal-line"></i> ri-emotion-normal-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-normal-fill"></i> ri-emotion-normal-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-unhappy-line"></i> ri-emotion-unhappy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-unhappy-fill"></i> ri-emotion-unhappy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-laugh-line"></i> ri-emotion-laugh-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-laugh-fill"></i> ri-emotion-laugh-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-sad-line"></i> ri-emotion-sad-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-emotion-sad-fill"></i> ri-emotion-sad-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skull-line"></i> ri-skull-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skull-fill"></i> ri-skull-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skull-2-line"></i> ri-skull-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-skull-2-fill"></i> ri-skull-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-men-line"></i> ri-men-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-men-fill"></i> ri-men-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-women-line"></i> ri-women-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-women-fill"></i> ri-women-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-travesti-line"></i> ri-travesti-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-travesti-fill"></i> ri-travesti-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-genderless-line"></i> ri-genderless-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-genderless-fill"></i> ri-genderless-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-open-arm-line"></i> ri-open-arm-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-open-arm-fill"></i> ri-open-arm-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-body-scan-line"></i> ri-body-scan-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-body-scan-fill"></i> ri-body-scan-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-parent-line"></i> ri-parent-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-parent-fill"></i> ri-parent-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-robot-line"></i> ri-robot-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-robot-fill"></i> ri-robot-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-aliens-line"></i> ri-aliens-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-aliens-fill"></i> ri-aliens-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bear-smile-line"></i> ri-bear-smile-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bear-smile-fill"></i> ri-bear-smile-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mickey-line"></i> ri-mickey-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mickey-fill"></i> ri-mickey-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-criminal-line"></i> ri-criminal-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-criminal-fill"></i> ri-criminal-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ghost-line"></i> ri-ghost-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ghost-fill"></i> ri-ghost-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ghost-2-line"></i> ri-ghost-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ghost-2-fill"></i> ri-ghost-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ghost-smile-line"></i> ri-ghost-smile-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ghost-smile-fill"></i> ri-ghost-smile-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-star-smile-line"></i> ri-star-smile-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-star-smile-fill"></i> ri-star-smile-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spy-line"></i> ri-spy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-spy-fill"></i> ri-spy-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Weather </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sun-line"></i> ri-sun-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sun-fill"></i> ri-sun-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-moon-line"></i> ri-moon-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-moon-fill"></i> ri-moon-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flashlight-line"></i> ri-flashlight-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flashlight-fill"></i> ri-flashlight-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cloudy-line"></i> ri-cloudy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cloudy-fill"></i> ri-cloudy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cloudy-2-line"></i> ri-cloudy-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cloudy-2-fill"></i> ri-cloudy-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mist-line"></i> ri-mist-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-mist-fill"></i> ri-mist-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-foggy-line"></i> ri-foggy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-foggy-fill"></i> ri-foggy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cloud-windy-line"></i> ri-cloud-windy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cloud-windy-fill"></i> ri-cloud-windy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-windy-line"></i> ri-windy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-windy-fill"></i> ri-windy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rainy-line"></i> ri-rainy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rainy-fill"></i> ri-rainy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drizzle-line"></i> ri-drizzle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-drizzle-fill"></i> ri-drizzle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-showers-line"></i> ri-showers-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-showers-fill"></i> ri-showers-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-heavy-showers-line"></i> ri-heavy-showers-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-heavy-showers-fill"></i> ri-heavy-showers-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-thunderstorms-line"></i> ri-thunderstorms-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-thunderstorms-fill"></i> ri-thunderstorms-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hail-line"></i> ri-hail-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hail-fill"></i> ri-hail-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-snowy-line"></i> ri-snowy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-snowy-fill"></i> ri-snowy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sun-cloudy-line"></i> ri-sun-cloudy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sun-cloudy-fill"></i> ri-sun-cloudy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-moon-cloudy-line"></i> ri-moon-cloudy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-moon-cloudy-fill"></i> ri-moon-cloudy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tornado-line"></i> ri-tornado-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-tornado-fill"></i> ri-tornado-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-typhoon-line"></i> ri-typhoon-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-typhoon-fill"></i> ri-typhoon-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-haze-line"></i> ri-haze-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-haze-fill"></i> ri-haze-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-haze-2-line"></i> ri-haze-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-haze-2-fill"></i> ri-haze-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sun-foggy-line"></i> ri-sun-foggy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sun-foggy-fill"></i> ri-sun-foggy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-moon-foggy-line"></i> ri-moon-foggy-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-moon-foggy-fill"></i> ri-moon-foggy-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-moon-clear-line"></i> ri-moon-clear-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-moon-clear-fill"></i> ri-moon-clear-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-temp-hot-line"></i> ri-temp-hot-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-temp-hot-fill"></i> ri-temp-hot-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-temp-cold-line"></i> ri-temp-cold-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-temp-cold-fill"></i> ri-temp-cold-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-celsius-line"></i> ri-celsius-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-celsius-fill"></i> ri-celsius-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fahrenheit-line"></i> ri-fahrenheit-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fahrenheit-fill"></i> ri-fahrenheit-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fire-line"></i> ri-fire-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fire-fill"></i> ri-fire-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-blaze-line"></i> ri-blaze-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-blaze-fill"></i> ri-blaze-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-earthquake-line"></i> ri-earthquake-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-earthquake-fill"></i> ri-earthquake-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flood-line"></i> ri-flood-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flood-fill"></i> ri-flood-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-meteor-line"></i> ri-meteor-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-meteor-fill"></i> ri-meteor-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rainbow-line"></i> ri-rainbow-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-rainbow-fill"></i> ri-rainbow-fill </span>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Others </h4>
								<!-- <p class="card-title-desc mb-2">Use <code>&lt;i class="ri-home-line"&gt;&lt;/i&gt;</code> or <code>&lt;i class="ri-home-fill"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 2.4.1</span>.</p> -->
								<div class="row icon-demo-content">
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-basketball-line"></i> ri-basketball-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-basketball-fill"></i> ri-basketball-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bell-line"></i> ri-bell-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-bell-fill"></i> ri-bell-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-billiards-line"></i> ri-billiards-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-billiards-fill"></i> ri-billiards-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-boxing-line"></i> ri-boxing-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-boxing-fill"></i> ri-boxing-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cake-line"></i> ri-cake-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cake-fill"></i> ri-cake-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cake-2-line"></i> ri-cake-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cake-2-fill"></i> ri-cake-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cake-3-line"></i> ri-cake-3-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-cake-3-fill"></i> ri-cake-3-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-door-lock-line"></i> ri-door-lock-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-door-lock-fill"></i> ri-door-lock-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-door-lock-box-line"></i> ri-door-lock-box-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-door-lock-box-fill"></i> ri-door-lock-box-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flask-line"></i> ri-flask-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-flask-fill"></i> ri-flask-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-football-line"></i> ri-football-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-football-fill"></i> ri-football-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-game-line"></i> ri-game-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-game-fill"></i> ri-game-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-handbag-line"></i> ri-handbag-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-handbag-fill"></i> ri-handbag-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hearts-line"></i> ri-hearts-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-hearts-fill"></i> ri-hearts-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-key-line"></i> ri-key-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-key-fill"></i> ri-key-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-key-2-line"></i> ri-key-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-key-2-fill"></i> ri-key-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-knife-line"></i> ri-knife-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-knife-fill"></i> ri-knife-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-knife-blood-line"></i> ri-knife-blood-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-knife-blood-fill"></i> ri-knife-blood-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lightbulb-line"></i> ri-lightbulb-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lightbulb-fill"></i> ri-lightbulb-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lightbulb-flash-line"></i> ri-lightbulb-flash-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-lightbulb-flash-fill"></i> ri-lightbulb-flash-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-outlet-line"></i> ri-outlet-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-outlet-fill"></i> ri-outlet-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-outlet-2-line"></i> ri-outlet-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-outlet-2-fill"></i> ri-outlet-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ping-pong-line"></i> ri-ping-pong-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-ping-pong-fill"></i> ri-ping-pong-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-plug-line"></i> ri-plug-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-plug-fill"></i> ri-plug-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-plug-2-line"></i> ri-plug-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-plug-2-fill"></i> ri-plug-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-reserved-line"></i> ri-reserved-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-reserved-fill"></i> ri-reserved-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shirt-line"></i> ri-shirt-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-shirt-fill"></i> ri-shirt-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sword-line"></i> ri-sword-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-sword-fill"></i> ri-sword-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-t-shirt-line"></i> ri-t-shirt-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-t-shirt-fill"></i> ri-t-shirt-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-t-shirt-2-line"></i> ri-t-shirt-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-t-shirt-2-fill"></i> ri-t-shirt-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-t-shirt-air-line"></i> ri-t-shirt-air-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-t-shirt-air-fill"></i> ri-t-shirt-air-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-umbrella-line"></i> ri-umbrella-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-umbrella-fill"></i> ri-umbrella-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-character-recognition-line"></i> ri-character-recognition-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-character-recognition-fill"></i> ri-character-recognition-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-voice-recognition-line"></i> ri-voice-recognition-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-voice-recognition-fill"></i> ri-voice-recognition-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-leaf-line"></i> ri-leaf-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-leaf-fill"></i> ri-leaf-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-plant-line"></i> ri-plant-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-plant-fill"></i> ri-plant-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-recycle-line"></i> ri-recycle-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-recycle-fill"></i> ri-recycle-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scales-line"></i> ri-scales-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scales-fill"></i> ri-scales-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scales-2-line"></i> ri-scales-2-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-scales-2-fill"></i> ri-scales-2-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fridge-line"></i> ri-fridge-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-fridge-fill"></i> ri-fridge-fill </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wheelchair-line"></i> ri-wheelchair-line </span>
									<span class="p-1 btn btn-primary btn-sm rounded-pill col-xl-3 col-lg-4 col-sm-6 text-white select_icon" style="border: 2px solid white"> <i class="text-white ri-wheelchair-fill"></i> ri-wheelchair-fill </span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="dropdown-divider"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger font-weight-bold" data-bs-toggle="modal" data-bs-target="" id="tutupIcon">Batal</button>
					<!-- <button type="button" class="btn btn-primary font-weight-bold" id="submit">Simpan</button> -->
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>