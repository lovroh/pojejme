<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="">

<head>
<meta charset="utf-8">
<title>Pojej.me</title>
<meta name="description" content="">
<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
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
<link rel="stylesheet" href="styles/pregledUrejanjeUporabnika.css">
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
		<!-- content panel -->
		<div class="main-panel">
			<!-- top header -->
			<div class="header navbar">
				<div class="brand visible-xs">
					<!-- toggle offscreen menu -->
					<div class="toggle-offscreen">
						<a href="javascript:;" class="hamburger-icon visible-xs"
							data-toggle="offscreen" data-move="ltr"> <span></span> <span></span>
							<span></span>
						</a>
					</div>
					<!-- /toggle offscreen menu -->
					<!-- logo -->
					<a class="brand-logo"> <span>REACTOR</span>
					</a>
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
						class="form-control search-input"
						placeholder="npr. sushi, Mehiška, ribe..">
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

					<li><a href="javascript:;" class="ripple"
						data-toggle="dropdown"> <i class="icon-basket"></i>
					</a>
						<ul class="dropdown-menu notifications">
							<li class="notifications-header">
								<p class="text-muted small">You have 3 new messages</p>
							</li>
							<li>
								<ul class="notifications-list">
									<li><a href="javascript:;">
											<div class="notification-icon">
												<div class="circle-icon bg-success text-white">
													<i class="icon-bulb"></i>
												</div>
											</div> <span class="notification-message"><b>Sean</b>
												launched a new application</span> <span class="time">2s</span>
									</a></li>
									<li><a href="javascript:;">
											<div class="notification-icon">
												<div class="circle-icon bg-danger text-white">
													<i class="icon-cursor"></i>
												</div>
											</div> <span class="notification-message"><b>Removed
													calendar</b> from app list</span> <span class="time">4h</span>
									</a></li>
									<li><a href="javascript:;">
											<div class="notification-icon">
												<div class="circle-icon bg-primary text-white">
													<i class="icon-basket"></i>
												</div>
											</div> <span class="notification-message"><b>Denise</b>
												bought <b>Urban Admin Kit</b></span> <span class="time">2d</span>
									</a></li>
									<li><a href="javascript:;">
											<div class="notification-icon">
												<div class="circle-icon bg-info text-white">
													<i class="icon-bubble"></i>
												</div>
											</div> <span class="notification-message"><b>Vincent
													commented</b> on an item</span> <span class="time">2s</span>
									</a></li>
									<li><a href="javascript:;"> <span
											class="notification-icon"> <img src="images/face3.jpg"
												class="avatar img-circle" alt="">
										</span> <span class="notification-message"><b>Jack Hunt</b>
												has <b>joined</b> mailing list</span> <span class="time">9d</span>
									</a></li>
								</ul>
							</li>
						</ul></li>
					<li><a href="javascript:;" class="ripple"
						data-toggle="dropdown"> <img src="images/avatar.jpg"
							class="header-avatar img-circle" alt="user" title="user"> <span>Nikola
								Vočanec</span> <span class="caret"></span>
					</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Nastavitve</a></li>
							<li><a href="javascript:;">Zgodovina nakupov</a></li>

							<li role="separator" class="divider"></li>
							<li><a href="extras-signin.html">Logout</a></li>
						</ul></li>
				</ul>
			</div>
			<!-- /top header -->
			<!-- main area -->
			<div class="main-content">
				<div class="card-block">
					<div id="DataTables_Table_0_wrapper"
						class="dataTables_wrapper form-inline no-footer">

						<div ng-if="currentContact" class="ng-scope">
							<div class="contact-header m-b">
								<div class="contact-toolbar visible-xs m-b">
									<a href="#" data-ng-click="app.isContactOpen = false"><span
										class="icon-close visible-xs m-r m-l"></span></a>
								</div>
								<div class="p-a">
									<!-- ngIf: currentContact -->
									<div class="pull-left p-r ng-scope" ng-if="currentContact">
										<img data-ng-src="images/face4.jpg"
											class="avatar avatar-lg img-circle" src="images/face4.jpg">
									</div>
									<!-- end ngIf: currentContact -->
									<div class="overflow-hidden">
										<h1 class="ng-binding">
											<b class="ng-binding">Nikola</b> Vocanec
										</h1>
									</div>
								</div>
								<!-- podatkiki o userju -->

								<!-- podatki o userju -->

							</div>
						</div>

					</div>
				</div>

				<!-- FORMA ZAUREJANJE UPORABNIKA -->
				<?php

			

				include 'connection.php';

				
				$ime = '';
				$priimek = '';
				$opis = '';
				$email = '';
				$telefonska = '';
				$ulica = '';
				$kraj = '';
				$postnast = '';

				$query = $conn->query("SELECT * FROM uporabnik");

				while ($results = mysqli_fetch_array($query)){

					if($results['username'] == $_SESSION['username']){

						$ime = $results['ime'];
						$priimek = $results['priimek'];
						$opis = $results['opis'];
						$email = $results['email'];
						$telefonska = $results['telefonska'];
						$ulica = $results['ulica'];
						$kraj = $results['kraj'];
						$postnast = $results['postnast'];
					}
				}

		
				
				?>
				<form class="form-horizontal ng-pristine ng-valid" role="form" action="edituser.php" method="POST">
					
					<div class="form-group">
						<label class="col-sm-2 control-label"><b>Osnovni podatki</b></label>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Ime</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="ime" value="<?php echo htmlspecialchars($ime);?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Priimek</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="priimek" value="<?php echo htmlspecialchars($priimek);?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Opis</label>
						<div class="col-sm-3">
							<textarea class="form-control" rows="3" name="opis" value="<?php echo htmlspecialchars($opis);?>"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label"><b>Kontaktni podatki</b></label>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="email" value="<?php echo htmlspecialchars($email);?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Telefonska št.</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="telefonska" value="<?php echo htmlspecialchars($telefonska);?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label"><b>Naslov</b></label>
					</div>
					<div class="form-group">	
						<label class="col-sm-2 control-label">Ulica</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="ulica" value="<?php echo htmlspecialchars($ulica);?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Kraj</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="kraj" value="<?php echo htmlspecialchars($kraj);?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Poštna št</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="postnast" value="<?php echo htmlspecialchars($postnast);?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label"></label>
						<button type="button" class="btn btn-primary">Shrani!</button>
					</div>
				</form>
				<!-- /FORMA ZAUREJANJE UPORABNIKA -->
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
	<script src="//www.googleadservices.com/pagead/conversion.js"></script>
</body>

</html>