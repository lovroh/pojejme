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
					<a class="brand-logo"> <span>POJEJ.ME</span>
					</a>
					<!-- /logo -->
				</div>
				<ul class="nav navbar-nav hidden-xs">

					<form action="pregledRestavracij.php" method="POST">
						<ul class="nav navbar-nav hidden-xs">

							<li class="searchbox"><a href="javascript:;"
													 data-toggle="search"> <i
										class="search-close-icon icon-close hide"></i> <i
										class="search-open-icon icon-pointer"></i>
								</a></li>
							<li class="searchbox"><a href="javascript:;"
													 data-toggle="search"> <i class="search-close-icon  hide"></i>
									<i class="search-open-icon "><p>naslov, kraj...</p></i>
								</a></li>
							<li class="navbar-form search-form hide"><input type="search" name="search"
																			class="form-control search-input" placeholder="naslov, mesto..">
							</li>

							<li class="navbar-form search-form hide">
								<input type="submit" name="isci" value="Išči" class="btn btn-primary btn" />
							</li>

						</ul>

					</form>
				</ul>

				<ul class="nav navbar-nav navbar-right hidden-xs">
					<li>
						<?php
						if (isset($_SESSION['loggedin_uporabnik']) && $_SESSION['loggedin_uporabnik'] == true) { ?>
							<a href="javascript:;" class="ripple"
							   data-toggle="dropdown"> <img src="images/avatar.jpg"
															class="header-avatar img-circle" alt="user" title="user">
								<span><?php echo $_SESSION['ime']; ?> </span>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="urejanjeUporabnika.php">Nastavitve</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="odjava.php">Odjava</a>
								</li>
							</ul>
							<?php
						}else { ?>
							<a href="uporabnik-prijava.html">Prijava</a>
							<?php
						}
						?></li>
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
											<b class="ng-binding"><?php echo $_SESSION['ime']; ?></b> <?php echo $_SESSION['priimek']; ?>
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
				$email = '';
				$telefonska = '';
				$ulica = '';
				$kraj = '';
				$postnast = '';

				$query = $con->query("SELECT * FROM uporabnik");

				while ($results = mysqli_fetch_array($query)){

					if($results['username'] == $_SESSION['username']){

						$ime = $results['ime'];
						$priimek = $results['priimek'];
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
						<input type="submit" name="submit" value="Spremeni" class="btn btn-primary btn" />
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