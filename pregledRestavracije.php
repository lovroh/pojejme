
<!doctype html>
<html class="no-js" lang="">

	<head>
		<meta charset="utf-8">
		<title>Reactor - Bootstrap Admin Template</title>
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
					<!-- za za telefone -->
					<ul class="nav hidden-md hidden-lg">
						<!-- iskanje -->
						<li>
							<a href="javascript:;"> <h5><i class="icon-magnifier"></i><span data-toggle="modal" data-target=".bs-modal-sm1">Iskanje</span></h5> </a>
						</li>
						<!-- /iskanje -->
						<!-- filter -->
						<li>
							<a href="javascript:;"> <h5><i class="icon-book-open"></i><span data-toggle="modal" data-target=".bs-modal-sm2">Filter</span></h5> </a>
						</li>
						<!-- /filter -->
						<!-- kosarica -->
						<li>
							<a href="commerce-cart.html"> <h5><i class="icon-basket"></i><span>Košarica</span></h5> </a>
						</li>
						<!-- /kosarica -->
						<!-- uporabnik -->
						<li>
							<a href="javascript:;"> <h5><i class="icon-user"></i><span>Uporabnik</span></h5> </a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;"> <span>Nastavitve</span> </a>
								</li>
								<li>
									<a href="javascript:;"> <span>Zgodovina nakupov<span> </a>
								</li>
								<li>
									<a href="extras-signin.html"> <span>Odjava<span> </a>
								</li>
							</ul>
						</li>
						<!-- /uporabnik -->
					</ul>
					<!-- /za telefone -->
					<!-- za velike zaslone -->
					<ul class="nav hidden-xs">
						<div class="card-block">
							<!-- studentski boni da ali ne -->
							<li>
								<div>
									<input class="to-labelauty" type="checkbox" data-labelauty="Študentski boni" checked/>
								</div>
							</li>
							<br />
							<!-- /studentski boni da ali ne -->
							<!-- hrana -->
							<li>
								<h4>Vrsta kuhinje</h4>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r1">
									<label for="r1">Picerija</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r2">
									<label for="r2">Špagetarija</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r3">
									<label for="r3">Fast food</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r4">
									<label for="r4">Mehiška</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r5">
									<label for="r5">Jedi na žlico</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r6">
									<label for="r6">Pijača</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r7">
									<label for="r7">Morske jedi</label>
								</div>
							</li>
							<!-- /hrana -->
							<!-- cena -->
							<li>
								<h4>Cena</h4>
							</li>
							<br />
							<li>
								<div class="slider slider-primary" data-values="[75,300]" data-range="true" data-min="0" data-max="500"></div>
							</li>
							<!-- /cena -->
							<!-- ocena -->
							<li>
								<h4>Ocena</h4>
							</li>
							<li>
								<font size="5">
									<center>
										<input type="number" name="your_awesome_parameter" id="some_id" class="rating" data-max="5" data-min="1" data-icon-lib="fa mr5" data-active-icon="fa-star text-warning" data-inactive-icon="fa-star-o" data-clearable-icon="fa-trash-o" data-clearable=" " />
									</center> </font>
							</li>
							<!-- /ocena -->
						</div>
					</ul>
					<!-- za velike zaslone -->
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
				<!-- main area -->
				<div class="main-content">
					<a class="cart-summary" href="commerce-cart.html" style="cursor:pointer">
					<div class="row-equal">
						<div class="column text-right p-r">
							<i class="icon-basket fa-2x"></i>
						</div>
						<div class="column">
							5 izdelkov
							<br>
							30,24 €
						</div>
					</div> </a>
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
						<div class="row">
							<div class="card-block p-a-0">
								<div class="box-tab justified m-b-0 ">
									<ul class="wizard-tabs">
										<li class="active">
											<a href="#meniji" data-toggle="tab">Meniji</a>
										</li>
										<li>
											<a href="#komentarji" data-toggle="tab">Komentarji</a>
										</li>
										<li>
											<a href="#obvestila" data-toggle="tab">Obvestila</a>
										</li>
										<li>
											<a href="#vec" data-toggle="tab">Več o restavraciji</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active in" id="meniji">
											<div class="page-title">
												<div class="title">
													Meniji
												</div>
												<div class="sub-title">
													asdasdasdsadasdas
												</div>
											</div>
											<a class="cart-summary" href="commerce-cart.html" style="cursor:pointer">
												
											<div class="row-equal">
												<div class="column text-right p-r">
													<i class="icon-basket fa-2x"></i>
												</div>
												<div class="column">
													5 izdelkov
													<br>
													27,24 €
												</div>
											</div> </a>

											<?php

											include 'connection.php';

											$query = $query->conn("SELECT * FROM meni");

											while($meni = mysqli_fetch_array($query)){

												echo '<div class="tile-container">
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
																	</div>
																</div>
																<div class="product-actions">
																	<div>
																		<div class="cart-button">
																			<span>
																				<select name="quantity" id="quantity">
																					<option label="1" value="number:1" selected="selected">1</option>
																					<option label="2" value="number:2">2</option>
																					<option label="3" value="number:3">3</option>
																					<option label="4" value="number:4">4</option>
																					<option label="5" value="number:5">5</option>
																				</select> </span>
																			<a class="btn btn-sm btn-primary text-uppercase"> <span>Dodaj v košarico</span> </a>
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
										<div class="tab-pane" id="komentarji">
											<div class="page-title">
												<div class="title">
													Komentarji
												</div>
												<div class="sub-title">
													asdasdasdsadasdas
												</div>
											</div>
											<div class="card bg-white no-border">
												<div class="card-block">
													<div class="profile-timeline-header">
														<a href="#" class="profile-timeline-user"> <img src="images/avatar.jpg" alt="" class="img-rounded"> </a>
														<div class="profile-timeline-user-details">
															<a href="#" class="bold">Sean Carpenter</a>
															<br>
															<em class="text-success small">Submitted a new post</em>
														</div>
													</div>
													<div class="profile-timeline-content">
														<p>
															Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
														</p>
														<div class="profile-timeline-controls">
															<a class="pull-right" href="javascript:;"> <i class="icon-share"></i> </a>
															<a class="m-r" href="javascript:;"> <i class="icon-heart"></i>&nbsp;Like </a>
															<a href="javascript:;"> <i class="icon-bubble"></i>&nbsp;Comment </a>
														</div>
													</div>
												</div>
											</div>
											<div class="card bg-white no-border">
												<div class="card-block">
													<div class="profile-timeline-header">
														<a href="#" class="profile-timeline-user"> <img src="images/avatar.jpg" alt="" class="img-rounded"> </a>
														<div class="profile-timeline-user-details">
															<a href="#" class="bold">Sean Carpenter</a>
															<br>
															<em class="text-info small">created an album collection</em>
														</div>
													</div>
													<div class="profile-timeline-content">
														<p>
															Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
														</p>

														<div class="profile-timeline-controls">
															<a class="pull-right" href="javascript:;"> <i class="icon-share"></i> </a>
															<a class="m-r" href="javascript:;"> <i class="icon-heart"></i>&nbsp;Like </a>
															<a href="javascript:;"> <i class="icon-bubble"></i>&nbsp;Comment </a>
														</div>
														<div class="post-comments">
															<div class="media">
																<a class="pull-left" href="javascript:;"> <img class="media-object avatar img-rounded" src="images/face3.jpg" alt=""> </a>
																<div class="comment">
																	<div class="comment-author">
																		<a href="javascript:;"> Jane Doe
																		<time datetime="2015-09-01" class="time">
																			September 1st, 2015
																		</time> </a>
																	</div>
																	<p>
																		Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.
																	</p>
																	<hr>
																</div>
																<div class="media">
																	<a class="pull-left" href="javascript:;"> <img class="media-object avatar img-rounded" src="images/avatar.jpg" alt=""> </a>
																	<div class="comment">
																		<div class="comment-author">
																			<a href="javascript:;"> Jane Doe
																			<time datetime="2015-09-02" class="time">
																				September 2nd, 2015
																			</time> </a>
																		</div>
																		<p>
																			Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card bg-white no-border">
												<div class="card-block">
													<div class="text-center">
														<h3 class="m-t">Komentiraj tudi ti</h3>
														<p>
															Izrazi svoje mnenje o restavraciji in jedeh
														</p>
													</div>
													<div class="text-center">
														<textarea class="form-control m-b" id="message" rows="5" placeholder="Vnesite komentar ..."></textarea>
													</div>
													<div class="text-center">
														<div class="card-block demo-button">
															<div class="tool-button">
																<button class="btn btn-default btn-lg">
																	Oddaj
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="obvestila">
											<div class="page-title">
												<div class="title">
													Obvestila
												</div>
												<div class="sub-title">
													asdasdasdsadasdas
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="card bg-white no-border">
														<div class="card-block">
															<h6>7.2.2016</h6>
															<h4>Zaprtje restavracije</h4>
															<span>Z 7.2.2016 naša restavracija zapira svoja vrata. Zaradi nepravilnosti pri spletnem naročanju smo propadli. Hvala za zaupanje.</span>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="card bg-white no-border">
														<div class="card-block">
															<h6>20.1.2016</h6>
															<h4>Obvestilo o začetku delovanja</h4>
															<span>Ponosno sporočamo, da z 1.2.2016 začne delovati spletno naročanje v naši restavraciji</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="vec">
											<div class="page-title">
												<div class="title">
													O restavraciji
												</div>
												<div class="sub-title">
													asdasdasdsadasdas
												</div>
											</div>
											<div class="col-md-6">
												<div class="card bg-white no-border">
													<div class="card-block">
														<div class="world-map page-height-xs">
															<div id="google-container"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="card bg-white no-border">
														<div class="card-block">
															<h4>O nas</h4>
															<span>Smo restavracija ki že 30 let balbalbalblab balbalbal balbalb abalbal balba l neki takga!</span>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="card bg-white no-border">
														<div class="card-block">
															<h4>Delovni čas</h4>
															<span>Med tednom: 08:00 - 20:00</span></br>
															<span>Sobota: 10:00 - 20:00</span></br>
															<span>Nedelja: Zaprto</span>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="card bg-white no-border">
														<div class="card-block">
															<h4>Kontaktni podatki</h4>
															<span>Telefon: 031 123 456</span></br>
															<span>Email: restavracija1@gmail.com</span>
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
		<!-- iskanje modal mobile -->
		<div class="modal bs-modal-sm1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							×
						</button>
						<h4 class="modal-title">Iskanje</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<span class="input m-b-md">
								<input class="input__field" type="text" id="input-1">
								<label class="input__label" for="input-1"> <span class="input__label-content">Lokacija</span> </label> </span>
							<span class="input m-b-md">
								<input class="input__field" type="text" id="input-2">
								<label class="input__label" for="input-2"> <span class="input__label-content">Restavracija</span> </label> </span>
						</div>
					</div>
					<div class="modal-footer no-border">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Zapri
						</button>
						<button type="button" class="btn btn-primary">
							Išči
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /iskanje modal mobile-->
		<!-- filter modal mobile -->
		<div class="modal bs-modal-sm2" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							×
						</button>
						<h4 class="modal-title">Filter</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<!-- studentski boni da ali ne -->
							<input class="to-labelauty" type="checkbox" data-labelauty="Študentski boni" checked/>
							<br />
							<!-- /studentski boni da ali ne -->
							<!-- hrana -->
							<h4>Vrsta kuhinje</h4>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r11">
								<label for="r11">Picerija</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r12">
								<label for="r12">Špagetarija</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r13">
								<label for="r13">Fast food</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r14">
								<label for="r14">Mehiška</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r15">
								<label for="r15">Jedi na žlico</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r16">
								<label for="r16">Pijača</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r17">
								<label for="r17">Morske jedi</label>
							</div>
							<!-- /hrana -->
							<!-- cena -->
							<h4>Cena</h4>
							<br />
							<div class="slider slider-primary" data-values="[75,300]" data-range="true" data-min="0" data-max="500"></div>
							<!-- /cena -->
							<!-- ocena -->
							<h4>Ocena</h4>
							<font size="5">
								<center>
									<input type="number" name="your_awesome_parameter" id="some_id" class="rating" data-max="5" data-min="1" data-icon-lib="fa mr5" data-active-icon="fa-star text-warning" data-inactive-icon="fa-star-o" data-clearable-icon="fa-trash-o" data-clearable=" " />
								</center> </font>
							<!-- /ocena -->
						</div>
					</div>
					<div class="modal-footer no-border">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Zapri
						</button>
						<button type="button" class="btn btn-primary">
							Išči
						</button>
					</div>

				</div>
			</div>
		</div>
		<!-- /filter modal mobile-->
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
		<script src="vendor/imagesloaded/imagesloaded.pkgd.js"></script>
		<script src="vendor/isotope/dist/isotope.pkgd.js"></script>
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
		<script src="scripts/apps/products.js"></script>
		<script type="text/javascript">
			$('.slider').each(function() {
				var data = $(this).data();
				$(this).slider(data);
			});
		</script>
		<!-- end initialize page scripts -->
	</body>

</html>