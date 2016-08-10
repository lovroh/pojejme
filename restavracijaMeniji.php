<?php
include 'connection.php';
session_start();

$query = "SELECT * FROM meni";

$result = mysqli_query($con, $query);;
?>
<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<title>Meniji</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
		<!-- page stylesheets -->
		<link rel="stylesheet" href="vendor/chosen_v1.4.0/chosen.min.css">
		<link rel="stylesheet" href="vendor/jquery.tagsinput/src/jquery.tagsinput.css">
		<link rel="stylesheet" href="vendor/checkbo/src/0.1.4/css/checkBo.min.css">
		<link rel="stylesheet" href="vendor/intl-tel-input/build/css/intlTelInput.css">
		<link rel="stylesheet" href="vendor/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css">
		<link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="vendor/clockpicker/dist/bootstrap-clockpicker.min.css">
		<link rel="stylesheet" href="vendor/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
		<link rel="stylesheet" href="vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
		<link rel="stylesheet" href="vendor/jquery-labelauty/source/jquery-labelauty.css">
		<link rel="stylesheet" href="vendor/multiselect/css/multi-select.css">
		<link rel="stylesheet" href="vendor/ui-select/dist/select.css">
		<link rel="stylesheet" href="vendor/select2/dist/css/select2.css">
		<link rel="stylesheet" href="vendor/selectize/dist/css/selectize.css">
		<link rel="stylesheet" href="vendor/datatables/media/css/jquery.dataTables.css">
		<!-- end page stylesheets -->
		<!-- build:css({.tmp,app}) styles/app.min.css -->
		<link rel="stylesheet" href="styles/webfont.css">
		<link rel="stylesheet" href="styles/climacons-font.css">
		<link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css">
		<link rel="stylesheet" href="styles/font-awesome.css">
		<link rel="stylesheet" href="styles/card.css">
		<link rel="stylesheet" href="styles/sli.css">
		<link rel="stylesheet" href="styles/animate.css">
		<link rel="stylesheet" href="styles/app.css">
		<link rel="stylesheet" href="styles/app.skins.css">
		<!-- endbuild -->
	</head>

	<body class="page-loading">
		<!-- page loading spinner -->
		<div class="pageload">
			<div class="pageload-inner">
				<div class="sk-rotating-plane"></div>
			</div>
		</div>
		<!-- /page loading spinner -->
		<div class="app layout-fixed-header">
			<!-- sidebar panel -->
			<div class="sidebar-panel offscreen-left">
				<div class="brand">
					<!-- toggle offscreen menu -->
					<div class="toggle-offscreen">
						<a href="javascript:;" class="visible-xs hamburger-icon" data-toggle="offscreen" data-move="ltr"> <span></span> <span></span> <span></span> </a>
					</div>
					<!-- /toggle offscreen menu -->
					<!-- logo -->
					<a class="brand-logo"> <span>POJEJ.ME</span> </a>
					<!-- /logo -->
				</div>
				<!-- main navigation -->
				<nav role="navigation">
					<!-- za vse zaslone -->
					<ul class="nav">
						<!-- domov -->
						<li>
							<a href="restavracijaDomov.php"> <i class="icon-home"></i><span>Domov</span></a>
						</li>
						<!-- /domov -->
						<!-- narocila -->
						<li>
							<a href="restavracijaNarocila.php"> <i class="icon-list"></i><span>Naročila</span></a>
						</li>
						<!-- /narocila -->
						<!-- meniji -->
						<li>
							<a href="restavracijaMeniji.php"> <i class="icon-book-open"></i><span>Meniji</span></a>
						</li>
						<!-- /meniji -->
						<!-- urejanje -->
						<li>
							<a href="restavracijaUrejanje.php"> <i class="icon-wrench"></i><span>Urejanje</span></a>
						</li>
						<!-- /urejanje -->
					</ul>
					<!-- za vse zaslone -->
				</nav>
				<!-- /main navigation -->
			</div>
			<!-- /sidebar panel -->
			<!-- content panel -->
			<div class="main-panel">
				<!-- top header -->
				<div class="header navbar">
					<div class="brand visible-xs">
						<!-- toggle offscreen menu -->
						<div class="toggle-offscreen">
							<a href="javascript:;" class="hamburger-icon visible-xs" data-toggle="offscreen" data-move="ltr"> <span></span> <span></span> <span></span> </a>
						</div>
						<!-- /toggle offscreen menu -->
						<!-- logo -->
						<a class="brand-logo"> <span>POJEJ.ME</span> </a>
						<!-- /logo -->
					</div>
					<!-- forma za iskanje -->
					<form action="" method="post">
						<ul class="nav navbar-nav hidden-xs">
	
							
									
						</ul>
					</form>
					<!-- /forma za iskanje -->
					<ul class="nav navbar-nav navbar-right hidden-xs">
						<!-- uporabnik-->
						<li>
							<a href="javascript:;" class="ripple"
							   data-toggle="dropdown"> <img src="images/avatar.jpg"
															class="header-avatar img-circle" alt="user" title="user"> <span>Nikola
								Vočanec</span> <span class="caret"></span> </a>
							<ul class="dropdown-menu">
								<li>
									<a href="javascript:;">Nastavitve</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="odjava.php">Odjava</a>
								</li>
							</ul>
						</li>
						<!-- /uporabnik-->
					</ul>
				</div>
				<!-- /top header -->
				<div class="main-content">
					<div class="m-t-n m-b">
						<div class="card m-b-0 bg-primary-dark p-a-md no-border m-b m-x-n-g">
							<div class="card-img-overlay p-a-0 " style="background: url(http://lorempixel.com/1920/600?8) no-repeat; background-size: cover;"></div>
							<div class="card-block" style="height: 200px"></div>
						</div>
						<div class="row profile-header text-white">
							<div class="col col-xs-3">
								<img class="profile-avatar" src="images/avatar.jpg" alt="" />
							</div>
							<div class="col p-b-lg col-xs-9">
								<div class="profile-user">
									<h4 class="m-t-0 m-b-0">Restavracija 1</h4>
									<small class="">Picerija in špagetarija</small>
								</div>
							</div>
						</div>
					</div>
					<div class="">
						<div class="page-title">
							<div class="title">
								Meniji
							</div>
							<div class="sub-title">
								Dodajanje, spreminjanje in odstranjevanje menijev
							</div>
						</div>
						<div class="row">
							<div class="card-block p-a-0">
					
										<div class="text-center">
											<div class="card bg-white no-border">
												<div class="card-block demo-button">
													<span><h4>Želite dodati novo jed?</h4></span>
													<div class="tool-button">
														<button class="btn btn-info" data-toggle="modal" data-target=".bs-modal-sm">
															Dodaj
														</button>
													</div>
												</div>
											</div>
										</div>
										
											<?php
while ($meni = mysqli_fetch_array($result)) {
echo '<div class="tile-container">
<div class="col-md-6">
<div class="tile product-tile">
<div class="card bg-white no-border">
<div class="col-md-6">
<div class="product-image"><img class="card-img-top img-responsive center-block" alt="" src="data:image/jpeg;base64,'.base64_encode( $meni['slika'] ).'"></div>
</div>
<div class="row">
<div class="col-md-6">
<div class="card-block">
<div class="product-meta">
<h5 class="product-title">' . $meni['jed'] . '</h5>
<span class="product-price">' . $meni['cena'] . ' €</span>
<span>' . $meni['sestavine'] . '</span> </br>
<span>' . $meni['info'] . '</span> </br>
<span>Študentski boni: ' . $meni['boni'] . '</span>
</div>
</br></br>
<div class="row">
<div class="pull-right">
<form action="brisiMeni.php" method="post">
<input type="hidden" value="'.$meni['id_meni'].'" name="id_meni">
<input type="submit" button type="button" class="btn btn-danger" name="delete" value="Odstrani">
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>';
}
											?>
										
										
										
									
							</div>
						</div>
					</div>
				</div>
				<!-- /main area -->
			</div>
			<!-- /content panel -->
			<!-- bottom footer -->
			<footer class="content-footer">
				<nav class="footer-right">
					<ul class="nav">
						<li>
							<a href="landingPage/index.php"> <i class="fa fa-angle-left"> </i><span> Nazaj</span></a>
						</li>
					</ul>
				</nav>
			</footer>
			<!-- /bottom footer -->
		</div>
		<!-- dodaj modal -->
		<div class="modal bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							×
						</button>
						<h4 class="modal-title">Dodajanje hrane</h4>
					</div>
					<form action="dodajMeni.php" method="post" enctype="multipart/form-data">
						<div class="modal-body">
							<p>
								Pritegnite pozornost uporabnikov
							</p>
							<div class="row">
								<label class="col-sm-2 control-label">Slika</label>
								<div class="col-sm-10">
									<input type="file" name="slika">
								</div>
							</div>
							</br>
							<div class="row">
								<label class="col-sm-2 control-label">Jed</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="jed">
								</div>
							</div>
							</br>
							<div class="row">
								<label class="col-sm-2 control-label">Vrsta</label>
								<div class="col-sm-10">
									<select data-placeholder="Izberite ..." multiple class="chosen" style="width: 100%;" name="vrsta">
										<option>Pica</option>
										<option>Špageti</option>
										<option>Zrezek</option>
										<option>Juha</option>
										<option>Jed na žlico</option>
										<option>Pijača</option>
										<option>Riba</option>
										<option>Žar</option>
										<option>Drugo</option>
									</select>
								</div>
							</div>
							</br>
							<div class="row">
								<label class="col-sm-2 control-label">Cena</label>
								<div class="col-sm-10">
									<input type="number" step="0.1" class="form-control" name="cena">
								</div>
							</div>
							</br>
							<div class="row">
								<label class="col-sm-2 control-label">Sestavine</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="sestavine">
								</div>
							</div>
							</br>
							<div class="row">
								<label class="col-sm-3 control-label">Študentski boni</label>
								<div class="col-sm-8">
									<select class="form-control" id="boni" name="boni">
										<option value="Ne">Ne</option>
										<option value="Da">Da</option>
									</select>
								</div>
							</div>
							</br>
							<div class="row">
								<label class="col-sm-2 control-label">Dodatne informacije</label>
								<div class="col-sm-10">
									<textarea class="form-control" name="info" rows="3"></textarea>
								</div>
							</div>
						</div>
						<div class="modal-footer no-border">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Zapri
							</button>
							<input type="submit" name="submit" button type="button" class="btn btn-primary" value="Dodaj">
							</center>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /dodaj modal -->
		<!-- build:js({.tmp,app}) scripts/app.min.js -->
		<script src="scripts/helpers/modernizr.js"></script>
		<script src="vendor/jquery/dist/jquery.js"></script>
		<script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
		<script src="vendor/fastclick/lib/fastclick.js"></script>
		<script src="vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
		<script src="scripts/helpers/smartresize.js"></script>
		<script src="scripts/constants.js"></script>
		<script src="scripts/main.js"></script>
		<!-- endbuild -->
		<!-- page scripts -->
		<script src="vendor/flot/jquery.flot.js"></script>
		<script src="vendor/flot/jquery.flot.resize.js"></script>
		<script src="vendor/flot/jquery.flot.categories.js"></script>
		<script src="vendor/flot/jquery.flot.stack.js"></script>
		<script src="vendor/flot/jquery.flot.time.js"></script>
		<script src="vendor/flot/jquery.flot.pie.js"></script>
		<script src="vendor/flot-spline/js/jquery.flot.spline.js"></script>
		<script src="vendor/flot.orderbars/js/jquery.flot.orderBars.js"></script>
		<script src="vendor/datatables/media/js/jquery.dataTables.js"></script>
		<script src="vendor/sweetalert/dist/sweetalert.min.js"></script>
		<script src="vendor/bootstrap-rating-input/build/bootstrap-rating-input.min.js"></script>
		<script src="vendor/chosen_v1.4.0/chosen.jquery.min.js"></script>
		<script src="vendor/jquery.tagsinput/src/jquery.tagsinput.js"></script>
		<script src="vendor/checkbo/src/0.1.4/js/checkBo.min.js"></script>
		<script src="vendor/intl-tel-input//build/js/intlTelInput.min.js"></script>
		<script src="vendor/moment/min/moment.min.js"></script>
		<script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="vendor/clockpicker/dist/jquery-clockpicker.min.js"></script>
		<script src="vendor/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
		<script src="vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/select2/dist/js/select2.js"></script>
		<script src="vendor/selectize/dist/js/standalone/selectize.min.js"></script>
		<script src="vendor/jquery-labelauty/source/jquery-labelauty.js"></script>
		<script src="vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
		<script src="vendor/typeahead.js/dist/typeahead.bundle.js"></script>
		<script src="vendor/multiselect/js/jquery.multi-select.js"></script>
		<script src="vendor/jquery.ui/ui/core.js"></script>
		<script src="vendor/jquery.ui/ui/widget.js"></script>
		<script src="vendor/jquery.ui/ui/mouse.js"></script>
		<script src="vendor/jquery.ui/ui/slider.js"></script>
		<!-- end page scripts -->
		<!-- initialize page scripts -->
		<script src="scripts/helpers/sameheight.js"></script>
		<script src="scripts/ui/dashboard.js"></script>
		<script src="scripts/helpers/bootstrap-datatables.js"></script>
		<script src="scripts/helpers/bootstrap-datatables.js"></script>
		<script src="scripts/tables/table-edit.js"></script>
		<script src="scripts/ui/alert.js"></script>
		<script src="scripts/forms/plugins.js"></script>
		<script type="text/javascript">
			$('.slider').each(function() {
				var data = $(this).data();
				$(this).slider(data);
			});
		</script>
		<!-- end initialize page scripts -->
	</body>

</html>