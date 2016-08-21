<?php
include 'connection.php';
session_start();

$id = $_SESSION['id_restavracija'];
$query2 = "SELECT slika FROM restavracija WHERE id_restavracija = '$id'";
$result2 = mysqli_query($con, $query2);

$slika = mysqli_fetch_array($result2);
?>
<!doctype html>
<html class="no-js" lang="">

	<head>
		<meta charset="utf-8">
		<title>Naročila</title>
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
							   data-toggle="dropdown"> <img src="data:image/jpeg;base64,'.base64_encode( $slika['slika'] ).'" class="header-avatar img-circle" alt="user" title="user">
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
				<!-- main content -->
				<div class="main-content">
					<div class="m-t-n m-b">
						<div class="card m-b-0 bg-primary-dark p-a-md no-border m-b m-x-n-g">
							<div class="card-img-overlay p-a-0 " style="background-color: rgba(175, 188, 255, 1); background-size: cover;"></div>
							<div class="card-block" style="height: 200px"></div>
						</div>
						<div class="row profile-header text-white">
							<div class="col col-xs-3">
								<?php echo '<img class="profile-avatar" src="data:image/jpeg;base64,'.base64_encode( $slika['slika'] ).'" alt="" style="max-height: 252px; max-width: 252px"/>'; ?>
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
								Naročila
							</div>
							<div class="sub-title">
								Pregled novih naročil in tistih v pripravi
							</div>
						</div>
						<div class="row">
							<div class="card-block p-a-0">
								<div class="box-tab justified m-b-0 ">
									<ul class="wizard-tabs">
										<li class="active">
											<a href="#novo" data-toggle="tab">Novo</a>
										</li>
										<li>
											<a href="#priprava" data-toggle="tab">V pripravi</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active in" id="novo">
											<div class="timeline">
												<div class="timeline-card">
													<div class="timeline-icon bg-danger text-white">
														<i class="icon-bell"></i>
													</div>
													<section class="timeline-content">
														<div class="timeline-heading">
															<div class="grid">
																<div class="row">
																	<div class="col-md-6">
																		Oddaja naročila : 18:01
																	</div>
																	<div class="col-md-6">
																		Priimek: Kos
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		Naslov: Mariborska 99
																	</div>
																	<div class="col-md-6">
																		Telefon: 0123456789
																	</div>
																</div>
															</div>
														</div>
														<div class="table-responsive">
															<table class="table cart m-b-0">
																<thead>
																	<tr>
																		<th>Hrana</th>
																		<th>Količina</th>
																		<th>Cena</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$27.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">crenweck</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$22.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$7.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$48.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">shirt</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$86.00</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="invoice-totals">
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Znesek</strong>
																<span class="invoice-totals-value">$14.25</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Dostava</strong>
																<span class="invoice-totals-value">$2.99</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Skupaj</strong>
																<span class="invoice-totals-value">$207.24</span>
															</div>
														</div>
														<div class="row">
															<div class="col-xs-12">
																<a href="javascript:;" class="btn btn-primary pull-right">Račun</a>
																<a href="javascript:;" class="btn btn-info">V pripravi</a>
															</div>
														</div>
													</section>
												</div>
												<div class="timeline-card">
													<div class="timeline-icon bg-danger text-white">
														<i class="icon-bell"></i>
													</div>
													<section class="timeline-content">
														<div class="timeline-heading">
															<div class="grid">
																<div class="row">
																	<div class="col-md-6">
																		Oddaja naročila : 18:01
																	</div>
																	<div class="col-md-6">
																		Priimek: Kos
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		Naslov: Mariborska 99
																	</div>
																	<div class="col-md-6">
																		Telefon: 0123456789
																	</div>
																</div>
															</div>
														</div>
														<div class="table-responsive">
															<table class="table cart m-b-0">
																<thead>
																	<tr>
																		<th>Hrana</th>
																		<th>Količina</th>
																		<th>Cena</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$27.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">crenweck</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$22.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$7.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$48.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">shirt</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$86.00</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="invoice-totals">
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Znesek</strong>
																<span class="invoice-totals-value">$14.25</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Dostava</strong>
																<span class="invoice-totals-value">$2.99</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Skupaj</strong>
																<span class="invoice-totals-value">$207.24</span>
															</div>
														</div>
														<div class="row">
															<div class="col-xs-12">
																<a href="javascript:;" class="btn btn-primary pull-right">Račun</a>
																<a href="javascript:;" class="btn btn-info">V pripravi</a>
															</div>
														</div>
													</section>
												</div>
												<div class="timeline-card">
													<div class="timeline-icon bg-danger text-white">
														<i class="icon-bell"></i>
													</div>
													<section class="timeline-content">
														<div class="timeline-heading">
															<div class="grid">
																<div class="row">
																	<div class="col-md-6">
																		Oddaja naročila : 18:01
																	</div>
																	<div class="col-md-6">
																		Priimek: Kos
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		Naslov: Mariborska 99
																	</div>
																	<div class="col-md-6">
																		Telefon: 0123456789
																	</div>
																</div>
															</div>
														</div>
														<div class="table-responsive">
															<table class="table cart m-b-0">
																<thead>
																	<tr>
																		<th>Hrana</th>
																		<th>Količina</th>
																		<th>Cena</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$27.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">crenweck</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$22.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$7.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$48.00</td>
																	</tr>
																	<tr>
																		<td class="text-capitalize">shirt</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$86.00</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="invoice-totals">
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Znesek</strong>
																<span class="invoice-totals-value">$14.25</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Dostava</strong>
																<span class="invoice-totals-value">$2.99</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Skupaj</strong>
																<span class="invoice-totals-value">$207.24</span>
															</div>
														</div>
														<div class="row">
															<div class="col-xs-12">
																<a href="javascript:;" class="btn btn-primary pull-right">Račun</a>
																<a href="javascript:;" class="btn btn-info">V pripravi</a>
															</div>
														</div>
													</section>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="priprava">
											<div class="timeline">
												<div class="timeline-card">
													<div class="timeline-icon bg-danger text-white">
														<i class="icon-bell"></i>
													</div>
													<section class="timeline-content">
														<div class="timeline-heading">
															<div class="grid">
																<div class="row">
																	<div class="col-md-6">
																		Oddaja naročila : 18:01
																	</div>
																	<div class="col-md-6">
																		Priimek: Kos
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		Naslov: Mariborska 99
																	</div>
																	<div class="col-md-6">
																		Telefon: 0123456789
																	</div>
																</div>
															</div>
														</div>
														<div class="table-responsive">
															<table class="table cart m-b-0">
																<thead>
																	<tr>
																		<th></th>
																		<th>Hrana</th>
																		<th>Količina</th>
																		<th>Cena</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$27.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">crenweck</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$22.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$7.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$48.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">shirt</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$86.00</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="invoice-totals">
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Znesek</strong>
																<span class="invoice-totals-value">$14.25</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Dostava</strong>
																<span class="invoice-totals-value">$2.99</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Skupaj</strong>
																<span class="invoice-totals-value">$207.24</span>
															</div>
														</div>
														<div class="row">
															<div class="col-xs-12">
																<a href="javascript:;" class="btn btn-primary pull-right">Račun</a>
																<a href="javascript:;" class="btn btn-info">Odposlano</a>
															</div>
														</div>
													</section>
												</div>
												<div class="timeline-card">
													<div class="timeline-icon bg-danger text-white">
														<i class="icon-bell"></i>
													</div>
													<section class="timeline-content">
														<div class="timeline-heading">
															<div class="grid">
																<div class="row">
																	<div class="col-md-6">
																		Oddaja naročila : 18:01
																	</div>
																	<div class="col-md-6">
																		Priimek: Kos
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		Naslov: Mariborska 99
																	</div>
																	<div class="col-md-6">
																		Telefon: 0123456789
																	</div>
																</div>
															</div>
														</div>
														<div class="table-responsive">
															<table class="table cart m-b-0">
																<thead>
																	<tr>
																		<th></th>
																		<th>Hrana</th>
																		<th>Količina</th>
																		<th>Cena</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$27.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">crenweck</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$22.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$7.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$48.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">shirt</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$86.00</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="invoice-totals">
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Znesek</strong>
																<span class="invoice-totals-value">$14.25</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Dostava</strong>
																<span class="invoice-totals-value">$2.99</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Skupaj</strong>
																<span class="invoice-totals-value">$207.24</span>
															</div>
														</div>
														<div class="row">
															<div class="col-xs-12">
																<a href="javascript:;" class="btn btn-primary pull-right">Račun</a>
																<a href="javascript:;" class="btn btn-info">Odposlano</a>
															</div>
														</div>
													</section>
												</div>
												<div class="timeline-card">
													<div class="timeline-icon bg-danger text-white">
														<i class="icon-bell"></i>
													</div>
													<section class="timeline-content">
														<div class="timeline-heading">
															<div class="grid">
																<div class="row">
																	<div class="col-md-6">
																		Oddaja naročila : 18:01
																	</div>
																	<div class="col-md-6">
																		Priimek: Kos
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		Naslov: Mariborska 99
																	</div>
																	<div class="col-md-6">
																		Telefon: 0123456789
																	</div>
																</div>
															</div>
														</div>
														<div class="table-responsive">
															<table class="table cart m-b-0">
																<thead>
																	<tr>
																		<th></th>
																		<th>Hrana</th>
																		<th>Količina</th>
																		<th>Cena</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$27.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">crenweck</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$22.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$7.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">baseball</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$48.00</td>
																	</tr>
																	<tr>
																		<td><span class="icon-trash"></span></td>
																		<td class="text-capitalize">shirt</td>
																		<td><span class="cart-quantity">1</span></td>
																		<td>$86.00</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="invoice-totals">
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Znesek</strong>
																<span class="invoice-totals-value">$14.25</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Dostava</strong>
																<span class="invoice-totals-value">$2.99</span>
															</div>
															<div class="invoice-totals-row">
																<strong class="invoice-totals-title">Skupaj</strong>
																<span class="invoice-totals-value">$207.24</span>
															</div>
														</div>
														<div class="row">
															<div class="col-xs-12">
																<a href="javascript:;" class="btn btn-primary pull-right">Račun</a>
																<a href="javascript:;" class="btn btn-info">Odposlano</a>
															</div>
														</div>
													</section>
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
									<a href="landingPage/index.php"> <i class="fa fa-angle-left"> </i><span> Nazaj</span></a>
								</li>
							</ul>
						</nav>
					</footer>
					<!-- /bottom footer -->
				</div>
				<!-- /ponudba modal -->
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