
<!doctype html>
<html class="no-js" lang="">

	<head>
		<meta charset="utf-8">
		<title>Dodajanje restavracije</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
		<!-- page stylesheets -->
		<link rel="stylesheet" href="vendor/chosen_v1.4.0/chosen.min.css">
		<link rel="stylesheet" href="vendor/checkbo/src/0.1.4/css/checkBo.min.css">
		<link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="vendor/jquery-labelauty/source/jquery-labelauty.css">
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

					<li class="searchbox"><a href="javascript:;"
						data-toggle="search"> <i
							class="search-close-icon icon-close hide"></i> <i
							class="search-open-icon icon-pointer"></i>
					</a></li>
					<li class="searchbox"><a href="javascript:;"
						data-toggle="search"> <i class="search-close-icon  hide"></i>
							<i class="search-open-icon "><p>naslov, mesto..</p></i>
					</a></li>
					<li class="navbar-form search-form hide"><input type="search"
						class="form-control search-input" placeholder="naslov, mesto..">
						<div class="search-predict hide">
							<a href="#">Searching for 'purple rain'</a>
							<div class="heading">
								<span class="title">People</span>
							</div>
							<ul class="predictive-list">
								<li><a class="avatar" href="#"> <img
										src="images/face1.jpg" class="img-circle" alt=""> <span>Tammy
											Carpenter</span>
								</a></li>
								<li><a class="avatar" href="#"> <img
										src="images/face2.jpg" class="img-circle" alt=""> <span>Catherine
											Moreno</span>
								</a></li>
								<li><a class="avatar" href="#"> <img
										src="images/face3.jpg" class="img-circle" alt=""> <span>Diana
											Robertson</span>
								</a></li>
								<li><a class="avatar" href="#"> <img
										src="images/face4.jpg" class="img-circle" alt=""> <span>Emma
											Sullivan</span>
								</a></li>
							</ul>
							<div class="heading">
								<span class="title">Page posts</span>
							</div>
							<ul class="predictive-list">
								<li><a class="avatar" href="#"> <img
										src="images/unsplash/img2.jpeg" class="img-rounded" alt="">
										<span>The latest news for cloud-based developers </span>
								</a></li>
								<li><a class="avatar" href="#"> <img
										src="images/unsplash/img2.jpeg" class="img-rounded" alt="">
										<span>Trending Goods of the Week</span>
								</a></li>
							</ul>
						</div></li>
				</ul>

				<ul class="nav navbar-nav hidden-xs">

					<li class="searchbox"><a href="javascript:;"
						data-toggle="search"> <i
							class="search-close-icon icon-close hide"></i> <i
							class="search-open-icon icon-magnifier"></i>
					</a></li>
					<li class="searchbox"><a href="javascript:;"
						data-toggle="search"> <i class="search-close-icon  hide"></i>
							<i class="search-open-icon "><p>npr. sushi, Mehiška,
									ribe..</p></i>
					</a></li>
					<li class="navbar-form search-form hide"><input type="search"
						class="form-control search-input" placeholder="npr. sushi, Mehiška, ribe..">
						<div class="search-predict hide">
							<a href="#">Searching for 'purple rain'</a>
							<div class="heading">
								<span class="title">People</span>
							</div>
							<ul class="predictive-list">
								<li><a class="avatar" href="#"> <img
										src="images/face1.jpg" class="img-circle" alt=""> <span>Tammy
											Carpenter</span>
								</a></li>
								<li><a class="avatar" href="#"> <img
										src="images/face2.jpg" class="img-circle" alt=""> <span>Catherine
											Moreno</span>
								</a></li>
								<li><a class="avatar" href="#"> <img
										src="images/face3.jpg" class="img-circle" alt=""> <span>Diana
											Robertson</span>
								</a></li>
								<li><a class="avatar" href="#"> <img
										src="images/face4.jpg" class="img-circle" alt=""> <span>Emma
											Sullivan</span>
								</a></li>
							</ul>
							<div class="heading">
								<span class="title">Page posts</span>
							</div>
							<ul class="predictive-list">
								<li><a class="avatar" href="#"> <img
										src="images/unsplash/img2.jpeg" class="img-rounded" alt="">
										<span>The latest news for cloud-based developers </span>
								</a></li>
								<li><a class="avatar" href="#"> <img
										src="images/unsplash/img2.jpeg" class="img-rounded" alt="">
										<span>Trending Goods of the Week</span>
								</a></li>
							</ul>
						</div></li>
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
					<div class="page-title">
						<div class="title">
							Dodajanje restavracije
						</div>
						<div class="sub-title">
							Dodaj svojo restavracijo in začni prejemati naročila preko spleta
						</div>
					</div>
					<form id="wizardForm" class="form-horizontal" role="form" action="dodajRestavracijo.php" method="post">
						<div class="card">
							<div class="card-block p-a-0">
								<div class="box-tab m-b-0" id="rootwizard">
									<ul class="wizard-tabs">
										<li>
											<a href="#tab1" data-toggle="tab">Osnovni podatki</a>
										</li>
										<li>
											<a href="#tab2" data-toggle="tab">Lokacija</a>
										</li>
										<li>
											<a href="#tab3" data-toggle="tab">Delovni čas</a>
										</li>
										<li>
											<a href="#tab5" data-toggle="tab">Dokončanje</a>
										</li>
									</ul>
									<div class="tab-content">
										
										<div class="tab-pane p-x-lg" id="tab1">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="col-sm-3 control-label">Ime restavracije</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" id="ime" name="ime">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Vrsta</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" id="vrsta" name="vrsta">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Email</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" id="emailfield" name="emailfield">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Telefon</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" id="number" name="number">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Geslo</label>
														<div class="col-sm-8">
															<input type="password" class="form-control" id="passwordfield" name="passwordfield">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Potrdi geslo</label>
														<div class="col-sm-8">
															<input type="password" class="form-control" id="cpasswordfield" name="cpasswordfield">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Študentski boni</label>
														<div class="col-sm-8">
															<select class="form-control" id="boni" name="boni">
																<option value="Ne">Ne</option>
																<option value="Da">Da</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<img class="col-sm-4 col-sm-offset-4" alt="" src="http://lorempixel.com/600/500?1" width="150" height="150">
														<div class="col-sm-8 col-sm-offset-3">
															<input type="file">
															<p class="help-block">
																Dodajte logo ali sliko restavracije
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane p-x-lg" id="tab2">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="col-sm-3 control-label">Kraj</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" id="kraj" name="kraj">
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label class="col-sm-3 control-label">Naslov</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" id="naslov" name="naslov">
														</div>
													</div>
												</div>
											</div>
											<div class="container col-sm-12">
												<div class="world-map page-height-xs">
													<div id="google-container"></div>
												</div>
											</div>
										</div>
										<div class="tab-pane p-x-lg" id="tab3">
											<div class="row">
												<div class="col-sm-6">
													<h5>Med tednom</h5>
													<div class="form-group">
														<label class="col-sm-3 control-label">Začetek</label>
														<div class="input-group col-sm-8">
															<input type="text" class="form-control time-picker" id="teden1" name="teden1"/>
															<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Konec</label>
														<div class="input-group col-sm-8">
															<input type="text" class="form-control time-picker" id="teden2" name="teden2"/>
															<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="credit-card hide"></div>
													<h5>Sobota</h5>
													<div class="form-group">
														<label class="col-sm-3 control-label">Začetek</label>
														<div class="input-group col-sm-8">
															<input type="text" class="form-control time-picker" id="sobota1" name="sobota1"/>
															<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Konec</label>
														<div class="input-group col-sm-8">
															<input type="text" class="form-control time-picker" id="sobota2" name="sobota2"/>
															<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
														</div>
													</div>
													<h5>Nedelja</h5>
													<div class="form-group">
														<label class="col-sm-3 control-label">Začetek</label>
														<div class="input-group col-sm-8">
															<input type="text" class="form-control time-picker" id="nedelja1" name="nedelja1"/>
															<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Konec</label>
														<div class="input-group col-sm-8">
															<input type="text" class="form-control time-picker" id="nedelja2" name="nedelja2"/>
															<span class="input-group-addon add-on"> <i class="fa fa-clock-o"></i> </span>
														</div>
													</div>
													<h4>Delovni čas je možno spreminjati tudi kasneje</h4>
												</div>
											</div>
										</div>
										<div class="tab-pane p-x-lg" id="tab5">
											<center><h4>Podatke je možno spreminjati, zato brez skrbi.</br> V primeru vprašanj nam pišite na naš elektronski naslov. </h4></br> </br>
											<input type="submit" name="submit" button type="button" class="btn btn-success btn-lg" value="Dokončaj registracijo"></center>
										</div>
										
										<div class="wizard-pager">
											<div class="pull-right">
												<button type="button" class="btn btn-primary button-next">
													Naprej
												</button>
											</div>
											<div class="pull-left">
												<button type="button" class="btn btn-default button-previous">
													Nazaj
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
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
		<script src="vendor/chosen_v1.4.0/chosen.jquery.min.js"></script>
		<script src="vendor/card/lib/js/jquery.card.js"></script>
		<script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="vendor/checkbo/src/0.1.4/js/checkBo.min.js"></script>
		<script src="vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
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
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="vendor/gmaps/gmaps.js"></script>
		<script src="vendor/bootstrap-rating-input/build/bootstrap-rating-input.min.js"></script>
		<script src="vendor/jquery.ui/ui/core.js"></script>
		<script src="vendor/jquery.ui/ui/widget.js"></script>
		<script src="vendor/jquery.ui/ui/mouse.js"></script>
		<script src="vendor/jquery.ui/ui/slider.js"></script>
		<!-- end page scripts -->
		<!-- initialize page scripts -->
		<script src="scripts/forms/wizard.js"></script>
		<script src="scripts/forms/plugins.js"></script>
		<script src="scripts/maps/gmaps.js"></script>
		  <script type="text/javascript">
    $('.slider').each(function () {
      var data = $(this).data();
      $(this).slider(data);
    });
  </script>
		<!-- end initialize page scripts -->
	</body>

</html>