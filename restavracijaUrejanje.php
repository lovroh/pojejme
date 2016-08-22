<?php
include 'connection.php';
session_start();

$id = $_SESSION['id_restavracija'];
$query2 = "SELECT * FROM restavracija WHERE id_restavracija = '$id'";
$result2 = mysqli_query($con, $query2);

$restavracija = mysqli_fetch_array($result2);
?>
<!doctype html>
<html class="no-js" lang="">

	<head>
		<meta charset="utf-8">
		<title>Urejanje</title>
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
						<!-- komentarji -->
						<li>
							<a href="restavracijaKomentarji.php"> <i class="icon-envelope"></i><span>Komentarji</span></a>
						</li>
						<!-- /komentarji -->
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
							<?php echo '
							<a href="javascript:;" class="ripple"
							   data-toggle="dropdown"> <img src="data:image/jpeg;base64,'.base64_encode( $restavracija['slika'] ).'" class="header-avatar img-circle" alt="user" title="user">
								<span>';
							?>
									<?php
									echo $_SESSION['ime'];
									?>
								</span> <span class="caret"></span> </a>
							<ul class="dropdown-menu">
								<li>
									<a href="restavracijaUrejanje.php">Nastavitve</a>
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
				<!-- main area -->
				<div class="main-content">
					<div class="m-t-n m-b">
						<div class="card m-b-0 bg-primary-dark p-a-md no-border m-b m-x-n-g">
							<div class="card-img-overlay p-a-0 " style="background-color: rgba(175, 188, 255, 1); background-size: cover;"></div>
							<div class="card-block" style="height: 200px"></div>
						</div>
						<div class="row profile-header text-white">
							<div class="col col-xs-3">
								<?php echo '<img class="profile-avatar" src="data:image/jpeg;base64,'.base64_encode( $restavracija['slika'] ).'" alt="" style="max-height: 252px; max-width: 252px"/>'; ?>
							</div>
							<div class="col p-b-lg col-xs-9">
								<div class="profile-user">
									<h4 class="m-t-0 m-b-0">
										<?php
										echo $_SESSION['ime'];
										?>
									</h4>
									<small class="">
										<?php
										echo $_SESSION['vrsta'];
										?>
									</small>
								</div>
							</div>
						</div>
					</div>
					<div class="">
						<div class="page-title">
							<div class="title">
								Urejanje profila
							</div>
							<div class="sub-title">
								Možnost spreminjanje podatkov restavracije
							</div>
						</div>
						<div class="row">
							<div class="card-block p-a-0">
								<div class="box-tab justified m-b-0 ">
									<ul class="wizard-tabs">
										<li class="active">
											<a href="#osnovno" data-toggle="tab">Osnovni podatki</a>
										</li>
										<li>
											<a href="#cas" data-toggle="tab">Delovni čas</a>
										</li>
									</ul>
									<form action="urejanjeRestavracije.php" method="post" enctype="multipart/form-data">
										<div class="tab-content">
											<div class="tab-pane active in" id="osnovno">
												<div class="card bg-white no-border">
													<div class="card-block">
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label class="col-sm-3 control-label">Ime restavracije</label>
																	<div class="col-sm-8">
																		<input type="text" class="form-control" id="ime" name="ime" value="<?php echo $restavracija['ime']; ?>">
																	</div>
																</div>
																</br></br>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Vrsta</label>
																	<div class="col-sm-8">
																		<select class="form-control" id="vrsta" name="vrsta" value="<?php echo $restavracija['vrsta']; ?>">
																			<option value="Italijanska">Italijanska</option>
																			<option value="Morska">Morska</option>
																			<option value="Fast food">Fast food</option>
																			<option value="Mehiška">Mehiška</option>
																			<option value="Kitajska">Kitajska</option>
																			<option value="Grill">Grill</option>
																			<option value="Japonska">Japonska</option>
																			<option value="Drugo">Drugo</option>
																		</select>
																	</div>
																</div>
																</br></br>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Telefon</label>
																	<div class="col-sm-8">
																		<input type="text" class="form-control" id="number" name="number" value="<?php echo $restavracija['number']; ?>">
																	</div>
																</div>
																</br></br>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Kraj</label>
																	<div class="col-sm-8">
																		<input type="text" class="form-control" id="kraj" name="kraj" value="<?php echo $restavracija['kraj']; ?>">
																	</div>
																</div>
																</br></br>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Naslov</label>
																	<div class="col-sm-8">
																		<input type="text" class="form-control" id="naslov" name="naslov" value="<?php echo $restavracija['naslov']; ?>">
																	</div>
																</div>
																</br></br>
																<label class="col-sm-3 control-label">Študentski boni</label>
																<div class="col-sm-8">
																	<select class="form-control" id="boni" name="boni" value="<?php echo $restavracija['boni']; ?>">
																		<option value="Ne">Ne</option>
																		<option value="Da">Da</option>
																	</select>
																</div>
															</div>
															<div class="col-sm-6">
																<input type="file" name="slika">
																<p class="help-block">
																	Dodajte logo ali sliko restavracije
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="cas">
												<div class="card bg-white no-border">
													<div class="card-block">
														<div class="row">
															<div class="col-sm-6">
																<h5>Med tednom</h5>
																<label class="col-sm-3 control-label">Začetek</label>
																<div class="input-group col-sm-8">
																	<input type="text" class="form-control time-picker" id="teden1" name="teden1" value="<?php echo $restavracija['teden1']; ?>"/>
																	<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
																</div>
																</br>
																<label class="col-sm-3 control-label">Konec</label>
																<div class="input-group col-sm-8">
																	<input type="text" class="form-control time-picker" id="teden2" name="teden2" value="<?php echo $restavracija['teden2']; ?>"/>
																	<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
																</div>
															</div>
															<div class="col-sm-6">
																<h5>Sobota</h5>
																<label class="col-sm-3 control-label">Začetek</label>
																<div class="input-group col-sm-8">
																	<input type="text" class="form-control time-picker" id="sobota1" name="sobota1" value="<?php echo $restavracija['sobota1']; ?>"/>
																	<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
																</div>
																</br>
																<label class="col-sm-3 control-label">Konec</label>
																<div class="input-group col-sm-8">
																	<input type="text" class="form-control time-picker" id="sobota2" name="sobota2" value="<?php echo $restavracija['sobota2']; ?>"/>
																	<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
																</div>
																<h5>Nedelja</h5>
																<label class="col-sm-3 control-label">Začetek</label>
																<div class="input-group col-sm-8">
																	<input type="text" class="form-control time-picker" id="nedelja1" name="nedelja1" value="<?php echo $restavracija['nedelja1']; ?>"/>
																	<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
																</div>
																</br>
																<label class="col-sm-3 control-label">Konec</label>
																<div class="input-group col-sm-8">
																	<input type="text" class="form-control time-picker" id="nedelja2" name="nedelja2" value="<?php echo $restavracija['nedelja2']; ?>"/>
																	<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="pull-right">
												<input type="submit" name="submit" button type="button" class="btn btn-primary" value="Shrani spremembe" />
											</div>
										</div>
									</form>
								</div>
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
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="vendor/gmaps/gmaps.js"></script>
		<!-- end page scripts -->
		<!-- initialize page scripts -->
		<script src="scripts/helpers/sameheight.js"></script>
		<script src="scripts/ui/dashboard.js"></script>
		<script src="scripts/helpers/bootstrap-datatables.js"></script>
		<script src="scripts/helpers/bootstrap-datatables.js"></script>
		<script src="scripts/tables/table-edit.js"></script>
		<script src="scripts/ui/alert.js"></script>
		<script src="scripts/forms/plugins.js"></script>
		<script src="scripts/maps/gmaps.js"></script>

		<script type="text/javascript">
			$('.slider').each(function() {
				var data = $(this).data();
				$(this).slider(data);
			});
		</script>
		<!-- end initialize page scripts -->
	</body>

</html>