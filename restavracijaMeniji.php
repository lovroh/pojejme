<?php
include 'includes/connection.php';

$query = "SELECT * FROM meni";

$result = mysql_query($query);
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
							<a href="restavracijaDomov.html"> <i class="icon-home"></i><span>Domov</span></a>
						</li>
						<!-- /domov -->
						<!-- narocila -->
						<li>
							<a href="restavracijaNarocila.html"> <i class="icon-list"></i><span>Naročila</span></a>
						</li>
						<!-- /narocila -->
						<!-- meniji -->
						<li>
							<a href="restavracijaMeniji.html"> <i class="icon-book-open"></i><span>Meniji</span></a>
						</li>
						<!-- /meniji -->
						<!-- komentarji -->
						<li>
							<a href="restavracijaKomentarji.html"> <i class="icon-users"></i><span>Komentarji</span></a>
						</li>
						<!-- /komentarji -->
						<!-- urejanje -->
						<li>
							<a href="restavracijaUrejanje.html"> <i class="icon-wrench"></i><span>Urejanje</span></a>
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
					<ul class="nav navbar-nav hidden-xs">

						<li class="searchbox">
							<a href="javascript:;"
							data-toggle="search"> <i
							class="search-close-icon icon-close hide"></i> <i
							class="search-open-icon icon-pointer"></i> </a>
						</li>
						<li class="searchbox">
							<a href="javascript:;"
							data-toggle="search"> <i class="search-close-icon  hide"></i> <i class="search-open-icon ">
							<p>
								naslov, mesto..
							</p></i> </a>
						</li>
						<li class="navbar-form search-form hide">
							<input type="search"
							class="form-control search-input" placeholder="naslov, mesto..">
							<div class="search-predict hide">
								<a href="#">Searching for 'purple rain'</a>
								<div class="heading">
									<span class="title">People</span>
								</div>
								<ul class="predictive-list">
									<li>
										<a class="avatar" href="#"> <img
										src="images/face1.jpg" class="img-circle" alt=""> <span>Tammy
											Carpenter</span> </a>
									</li>
									<li>
										<a class="avatar" href="#"> <img
										src="images/face2.jpg" class="img-circle" alt=""> <span>Catherine
											Moreno</span> </a>
									</li>
									<li>
										<a class="avatar" href="#"> <img
										src="images/face3.jpg" class="img-circle" alt=""> <span>Diana
											Robertson</span> </a>
									</li>
									<li>
										<a class="avatar" href="#"> <img
										src="images/face4.jpg" class="img-circle" alt=""> <span>Emma
											Sullivan</span> </a>
									</li>
								</ul>
								<div class="heading">
									<span class="title">Page posts</span>
								</div>
								<ul class="predictive-list">
									<li>
										<a class="avatar" href="#"> <img
										src="images/unsplash/img2.jpeg" class="img-rounded" alt=""> <span>The latest news for cloud-based developers </span> </a>
									</li>
									<li>
										<a class="avatar" href="#"> <img
										src="images/unsplash/img2.jpeg" class="img-rounded" alt=""> <span>Trending Goods of the Week</span> </a>
									</li>
								</ul>
							</div>
						</li>
					</ul>

					<ul class="nav navbar-nav hidden-xs">

						<li class="searchbox">
							<a href="javascript:;"
							data-toggle="search"> <i
							class="search-close-icon icon-close hide"></i> <i
							class="search-open-icon icon-magnifier"></i> </a>
						</li>
						<li class="searchbox">
							<a href="javascript:;"
							data-toggle="search"> <i class="search-close-icon  hide"></i> <i class="search-open-icon ">
							<p>
								npr. sushi, Mehiška,
								ribe..
							</p></i> </a>
						</li>
						<li class="navbar-form search-form hide">
							<input type="search"
							class="form-control search-input" placeholder="npr. sushi, Mehiška, ribe..">
							<div class="search-predict hide">
								<a href="#">Searching for 'purple rain'</a>
								<div class="heading">
									<span class="title">People</span>
								</div>
								<ul class="predictive-list">
									<li>
										<a class="avatar" href="#"> <img
										src="images/face1.jpg" class="img-circle" alt=""> <span>Tammy
											Carpenter</span> </a>
									</li>
									<li>
										<a class="avatar" href="#"> <img
										src="images/face2.jpg" class="img-circle" alt=""> <span>Catherine
											Moreno</span> </a>
									</li>
									<li>
										<a class="avatar" href="#"> <img
										src="images/face3.jpg" class="img-circle" alt=""> <span>Diana
											Robertson</span> </a>
									</li>
									<li>
										<a class="avatar" href="#"> <img
										src="images/face4.jpg" class="img-circle" alt=""> <span>Emma
											Sullivan</span> </a>
									</li>
								</ul>
								<div class="heading">
									<span class="title">Page posts</span>
								</div>
								<ul class="predictive-list">
									<li>
										<a class="avatar" href="#"> <img
										src="images/unsplash/img2.jpeg" class="img-rounded" alt=""> <span>The latest news for cloud-based developers </span> </a>
									</li>
									<li>
										<a class="avatar" href="#"> <img
										src="images/unsplash/img2.jpeg" class="img-rounded" alt=""> <span>Trending Goods of the Week</span> </a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right hidden-xs">
						<!-- kosarica -->
						<li>
							<a href="javascript:;" class="ripple"
							data-toggle="dropdown"> <i class="icon-basket"></i> </a>
							<ul class="dropdown-menu notifications">
								<li class="notifications-header">
									<p class="text-muted small">
										You have 3 new messages
									</p>
								</li>
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
											</div> <span class="notification-message"><b>Removed
												calendar</b> from app list</span> <span class="time">4h</span> </a>
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
											</div> <span class="notification-message"><b>Vincent
												commented</b> on an item</span> <span class="time">2s</span> </a>
										</li>
										<li>
											<a href="javascript:;"> <span
											class="notification-icon"> <img src="images/face3.jpg"
												class="avatar img-circle" alt=""> </span> <span class="notification-message"><b>Jack Hunt</b> has <b>joined</b> mailing list</span> <span class="time">9d</span> </a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<!-- /kosarica -->
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
								<li>
									<a href="javascript:;">Zgodovina nakupov</a>
								</li>

								<li role="separator" class="divider"></li>
								<li>
									<a href="extras-signin.html">Odjava</a>
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
								Meniji
							</div>
							<div class="sub-title">
								Dodajanje, spreminjanje in odstranjevanje menijev
							</div>
						</div>
						<div class="row">
							<div class="card-block p-a-0">
								<div class="box-tab justified m-b-0 ">
									<ul class="wizard-tabs">
										<li class="active">
											<a href="#vrsta1" data-toggle="tab">Vrsta 1</a>
										</li>
										<li>
											<a href="#vrsta2" data-toggle="tab">Vrsta 2</a>
										</li>
										<li>
											<a href="#vrsta3" data-toggle="tab">Vrsta 3</a>
										</li>
										<li>
											<a href="#vrsta4" data-toggle="tab">Vrsta 4</a>
										</li>
									</ul>
									<div class="tab-content">
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
										<div class="tab-pane active in" id="vrsta1">
											<?php
											while ($meni = mysql_fetch_array($result)) {
												echo "<div class='tile-container'>
<div class='col-md-6'>
<div class='tile product-tile'>
<div class='card bg-white no-border'>
<div class='col-md-6'>
<div class='product-image'>" . "<img class='card-img-top img-responsive center-block' alt='' src='http://lorempixel.com/600/500?1'>" . "</div>
</div>
<div class='row'>
<div class='col-md-6'>
<div class='card-block'>
<div class='product-meta'>
<h5 class='product-title text-capitalize'>" . $meni['jed'] . "</h5>
<span class='product-price'>" . $meni['cena'] . " €</span>
<span>
<div class='rating'>
<i class='icon-star text-primary'></i>
<i class='icon-star text-primary'></i>
<i class='icon-star text-primary'></i>
<i class='icon-star text-primary'></i>
</div> </span>
<span>" . $meni['sestavine'] . "</span> </br>
<span>" . $meni['info'] . "</span> </br>
<span>Študentski boni: " . $meni['boni'] . "</span>
</div>
</br></br>
<div class='row'>
<div class='pull-right' >
<button type='button' class='btn btn-danger'>
Odstrani
</button>
</div>
<div class='pull-left'>
<div class='tool-button'>
<button class='btn btn-primary btn-block' data-toggle='modal' data-target='.bs-modal-sm-3'>
Spremeni
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>";
											}
											?>
										</div>
										<div class="tab-pane" id="vrsta2">
											<div class="tile-container">
												<div class="col-md-6">
													<div class="tile product-tile">
														<div class="card bg-white no-border">
															<div class="col-md-6">
																<div class="product-image">
																	<img class="card-img-top img-responsive center-block" alt="" src="http://lorempixel.com/600/500?1">
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="card-block">
																		<div class="product-meta">
																			<h5 class="product-title text-capitalize">Klasična pica</h5>
																			<span class="product-price">5,50 €</span>
																			<span>
																				<div class="rating">
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																				</div> </span>
																			<span>Šunka, sir, gobe, paradižnikova omaka</span>
																		</div>
																		</br></br>
																		<div class="row">
																			<div class="pull-right" >
																				<button type="button" class="btn btn-danger">
																					Odstrani
																				</button>
																			</div>
																			<div class="pull-left">
																				<div class="tool-button">
																					<button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-modal-sm-3">
																						Spremeni
																					</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tile-container">
												<div class="col-md-6">
													<div class="tile product-tile">
														<div class="card bg-white no-border">
															<div class="col-md-6">
																<div class="product-image">
																	<img class="card-img-top img-responsive center-block" alt="" src="http://lorempixel.com/600/500?1">
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="card-block">
																		<div class="product-meta">
																			<h5 class="product-title text-capitalize">Klasična pica</h5>
																			<span class="product-price">5,50 €</span>
																			<span>
																				<div class="rating">
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																				</div> </span>
																			<span>Šunka, sir, gobe, paradižnikova omaka</span>
																		</div>
																		</br></br>
																		<div class="row">
																			<div class="pull-right" >
																				<button type="button" class="btn btn-danger">
																					Odstrani
																				</button>
																			</div>
																			<div class="pull-left">
																				<div class="tool-button">
																					<button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-modal-sm-3">
																						Spremeni
																					</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="vrsta3">
											<div class="tile-container">
												<div class="col-md-6">
													<div class="tile product-tile">
														<div class="card bg-white no-border">
															<div class="col-md-6">
																<div class="product-image">
																	<img class="card-img-top img-responsive center-block" alt="" src="http://lorempixel.com/600/500?1">
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="card-block">
																		<div class="product-meta">
																			<h5 class="product-title text-capitalize">Klasična pica</h5>
																			<span class="product-price">5,50 €</span>
																			<span>
																				<div class="rating">
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																				</div> </span>
																			<span>Šunka, sir, gobe, paradižnikova omaka</span>
																		</div>
																		</br></br>
																		<div class="row">
																			<div class="pull-right" >
																				<button type="button" class="btn btn-danger">
																					Odstrani
																				</button>
																			</div>
																			<div class="pull-left">
																				<div class="tool-button">
																					<button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-modal-sm-3">
																						Spremeni
																					</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="vrsta4">
											<div class="tile-container">
												<div class="col-md-6">
													<div class="tile product-tile">
														<div class="card bg-white no-border">
															<div class="col-md-6">
																<div class="product-image">
																	<img class="card-img-top img-responsive center-block" alt="" src="http://lorempixel.com/600/500?1">
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="card-block">
																		<div class="product-meta">
																			<h5 class="product-title text-capitalize">Klasična pica</h5>
																			<span class="product-price">5,50 €</span>
																			<span>
																				<div class="rating">
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																				</div> </span>
																			<span>Šunka, sir, gobe, paradižnikova omaka</span>
																		</div>
																		</br></br>
																		<div class="row">
																			<div class="pull-right" >
																				<button type="button" class="btn btn-danger">
																					Odstrani
																				</button>
																			</div>
																			<div class="pull-left">
																				<div class="tool-button">
																					<button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-modal-sm-3">
																						Spremeni
																					</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tile-container">
												<div class="col-md-6">
													<div class="tile product-tile">
														<div class="card bg-white no-border">
															<div class="col-md-6">
																<div class="product-image">
																	<img class="card-img-top img-responsive center-block" alt="" src="http://lorempixel.com/600/500?1">
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="card-block">
																		<div class="product-meta">
																			<h5 class="product-title text-capitalize">Klasična pica</h5>
																			<span class="product-price">5,50 €</span>
																			<span>
																				<div class="rating">
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																					<i class="icon-star text-primary"></i>
																				</div> </span>
																			<span>Šunka, sir, gobe, paradižnikova omaka</span>
																		</div>
																		</br></br>
																		<div class="row">
																			<div class="pull-right" >
																				<button type="button" class="btn btn-danger">
																					Odstrani
																				</button>
																			</div>
																			<div class="pull-left">
																				<div class="tool-button">
																					<button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-modal-sm-3">
																						Spremeni
																					</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
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
							<a href="javascript:;">Feedback</a>
						</li>
						<li>
							<a href="javascript:;" class="scroll-up"> <i class="fa fa-angle-up"></i> </a>
						</li>
					</ul>
				</nav>
				<nav class="footer-left hidden-xs">
					<ul class="nav">
						<li>
							<a href="javascript:;"><span>About</span> Reactor</a>
						</li>
						<li>
							<a href="javascript:;">Privacy</a>
						</li>
						<li>
							<a href="javascript:;">Terms</a>
						</li>
						<li>
							<a href="javascript:;">Help</a>
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
					<form action="dodajMeni.php" method="post">
						<div class="modal-body">
							<p>
								Pritegnite pozornost uporabnikov
							</p>
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
										<option>Pijača</option>
										<option>Riba</option>
										<option>Žar</option>
									</select>
								</div>
							</div>
							</br>
							<div class="row">
								<label class="col-sm-2 control-label">Cena</label>
								<div class="col-sm-10">
									<input type="number" class="form-control" name="cena">
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
		<!-- spremeni modal -->
		<div class="modal bs-modal-sm-3" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							×
						</button>
						<h4 class="modal-title">Spremeni</h4>
					</div>
					<div class="modal-body">
						<p>
							Pritegnite pozornost uporabnikov
						</p>
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="col-sm-2 control-label">Obdobje</label>
								<div class="input-prepend input-group m-b col-sm-10">
									<span class="add-on input-group-addon"><i class="icon-calendar"></i></span>
									<input type="text" name="reservation" class="form-control drp" placeholder="Obdobje veljavnosti" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Jed</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" placeholder="Jed">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Cena</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" placeholder="Cena">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Sestavine</label>
								<div class="col-sm-10">
									<select data-placeholder="Glavne sestavine" multiple class="chosen" style="width: 100%;">
										<option>Paradižnik</option>
										<option>Sir</option>
										<option>Špageti</option>
										<option>Piščanec</option>
										<option>Govedina</option>
										<option>Krompir</option>
										<option>Tuna</option>
										<option>Paprika</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label"></label>
								<div class="btn-group col-sm-10" data-toggle="buttons">
									<label class="btn btn-default">
										<input type="radio" id="q156" name="quality[25]" value="1" />
										Študentski bon </label>
									<label class="btn btn-default active">
										<input type="radio" id="q157" name="quality[25]" value="2" />
										Brez </label>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Opis</label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="3"></textarea>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer no-border">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Zapri
						</button>
						<button type="button" class="btn btn-primary">
							Spremeni
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /spremeni modal -->
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