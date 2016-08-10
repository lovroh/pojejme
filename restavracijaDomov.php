<?php
	session_start();
?>
<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<title>Domov</title>
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
				<!-- main area -->
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
								<div class="profile-stats text-center">
									<div class="row">
										<div class="col-xs-6">
											<h4 class="m-t-0 m-b-0">
											<div class="rating">
												<i class="icon-star text-white"></i>
												<i class="icon-star text-white"></i>
												<i class="icon-star text-white"></i>
												<i class="icon-star text-white"></i>
												<i class="icon-star text-white"></i>
											</div></h4>
											<small>Ocena</small>
										</div>
										<div class="col-xs-6">
											<h4 class="m-t-0 m-b-0">89</h4>
											<small>Komentarji</small>
										</div>
									</div>
								</div>
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
								Domov
							</div>
							<div class="sub-title">
								Splošna stran restavracije
							</div>
						</div>
						<div class="row">
							<div class="card-block p-a-0">
								<div class="row">
									<div class="col-md-8">
										<div class="card bg-white no-border">
											<div class="card-block">
												<div class="text-center">
													<h3 class="m-t">Obvestilo</h3>
													<p>
														Obvestite svoje stranke o novih dogodkih
													</p>
												</div>
												<div class="text-center">
													<textarea class="form-control m-b" id="message" rows="15" placeholder="Vnesite obvestilo ..."></textarea>
												</div>
												<div class="text-center">
													<div class="card-block demo-button">
														<div class="tool-button">
															<button class="btn btn-default btn-lg">
																Dodaj
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card bg-white no-border">
											<div class="card-block">
												<h3 class="m-t">Dogodki</h3>
												<ul class="notifications">
													<li>
														<ul class="notifications-list">
															<li>
																<a href="javascript:;">
																<div class="notification-icon">
																	<div class="circle-icon bg-success text-white">
																		<i class="icon-bulb"></i>
																	</div>
																</div> <span class="notification-message"><b>Sean</b> launched a new application</span> <span class="time">2s</span> </a>
															</li>
															<li>
																<a href="javascript:;">
																<div class="notification-icon">
																	<div class="circle-icon bg-danger text-white">
																		<i class="icon-cursor"></i>
																	</div>
																</div> <span class="notification-message"><b>Removed calendar</b> from app list</span> <span class="time">4h</span> </a>
															</li>
															<li>
																<a href="javascript:;">
																<div class="notification-icon">
																	<div class="circle-icon bg-primary text-white">
																		<i class="icon-basket"></i>
																	</div>
																</div> <span class="notification-message"><b>Denise</b> bought <b>Urban Admin Kit</b></span> <span class="time">2d</span> </a>
															</li>
															<li>
																<a href="javascript:;">
																<div class="notification-icon">
																	<div class="circle-icon bg-info text-white">
																		<i class="icon-bubble"></i>
																	</div>
																</div> <span class="notification-message"><b>Vincent commented</b> on one of your items</span> <span class="time">2s</span> </a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="card card-block no-border bg-primary text-white">
														<h6 class="m-a-0">Uporabniki v okolici</h6>
														<h1 class="m-a-0">785</h1>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="card card-block no-border bg-dark text-white">
														<h6 class="m-a-0">Pregledi prejšnji teden</h6>
														<h1 class="m-a-0">381</h1>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card bg-white no-border">
									<div class="row text-center">
										<div class="col-sm-3 col-xs-6 p-t p-b">
											<h4 class="m-t-0 m-b-0">82,56 €</h4>
											<small class="text-muted bold">Dnevna prodaja</small>
										</div>
										<div class="col-sm-3 col-xs-6 p-t p-b">
											<h4 class="m-t-0 m-b-0">498,00 €</h4>
											<small class="text-muted bold">Tedenska prodaja</small>
										</div>
										<div class="col-sm-3 col-xs-6 p-t p-b">
											<h4 class="m-t-0 m-b-0">2.903 €</h4>
											<small class="text-muted bold">Mesečna prodaja</small>
										</div>
										<div class="col-sm-3 col-xs-6 p-t p-b">
											<h4 class="m-t-0 m-b-0">20.343,49 €</h4>
											<small class="text-muted bold">Letna prodaja</small>
										</div>
									</div>
								</div>
								<div class="m-x-n-g m-t-n-g overflow-hidden">
									<div class="card m-b-0 bg-primary-dark text-white p-a-md no-border">
										<h4 class="m-t-0"><span class="pull-right">82,56 € danes</span><span>Aktivnost</span></h4>
										<div class="chart dashboard-line labels-white" style="height:300px"></div>
									</div>
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