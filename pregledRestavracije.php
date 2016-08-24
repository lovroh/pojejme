<?php
include 'connection.php';
session_start();

$id = $_POST['id_restavracija'];

$query = "SELECT * FROM meni WHERE fk_id_restavracija = '$id'";
$query2 = "SELECT * FROM restavracija WHERE id_restavracija = '$id'";

$result = mysqli_query($con, $query);
$result2 = mysqli_query($con, $query2);

$restavracija = mysqli_fetch_array($result2);

?>
<!doctype html>
<html class="no-js" lang="">

	<head>
		<meta charset="utf-8">
		<title>Pregled restavracije</title>
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
		<script type="text/javascript">
         
        function reset() {
            $('.boni').each(function() {
                if (!$(this).is(":visible")) {
                    $(this).parent().parent().parent().parent().parent().show();
                }
            });
        }
       
        function filter1() {
            $('.boni').each(function() {
                if ($(this).html()=="Ne") {
                    $(this).parent().parent().parent().parent().parent().hide();
                }
            });
        }
        
        var checked = [];
        
        function filter2() {
            checked = [];
            $(".check").each(function() {
                if ($(this).is(":checked")) {
                    checked.push(true);
                } else {
                    checked.push(false);
                }
            });
        }
        
        function filterCheck() {
            if(checked==null) {
                checked = [];
            }
            filter2();
            
            var test = false;
            for (var i=0; i<checked.length; i++) {
                if (checked[i]==true)
                 test = true;
            }
            
            if (test==true) {
                $('.vrsta').each(function() {
                    $(this).parent().parent().parent().parent().parent().hide();
                });  
            } else {
                $('.vrsta').each(function() {
                    $(this).parent().parent().parent().parent().parent().show();
                });  
            }            

            if (checked[0]==true) {
                $('.vrsta').each(function() {
                    if ($(this).html()=="Pica") {
                        $(this).parent().parent().parent().parent().parent().show();
                    }
                });
            }
            if (checked[1]==true) {
                $('.vrsta').each(function() {
                    if ($(this).html()=="Špageti") {
                        $(this).parent().parent().parent().parent().parent().show();
                    }
                });
            }
            if (checked[2]==true) {
                $('.vrsta').each(function() {
                    if ($(this).html()=="Zrezek") {
                        $(this).parent().parent().parent().parent().parent().show();
                    }
                });
            }
            if (checked[3]==true) {
                $('.vrsta').each(function() {
                    if ($(this).html()=="Juha") {
                        $(this).parent().parent().parent().parent().parent().show();
                    }
                });
            }
            if (checked[4]==true) {
                $('.vrsta').each(function() {
                    if ($(this).html()=="Jed na žlico") {
                        $(this).parent().parent().parent().parent().parent().show();
                    }
                });
            }
            if (checked[5]==true) {
                $('.vrsta').each(function() {
                    if ($(this).html()=="Pijača") {
                        $(this).parent().parent().parent().parent().parent().show();
                    }
                });
            }
            if (checked[6]==true) {
                $('.vrsta').each(function() {
                    if ($(this).html()=="Riba") {
                        $(this).parent().parent().parent().parent().parent().show();
                    }
                });
            }
            if (checked[7]==true) {
                $('.vrsta').each(function() {
                    if ($(this).html()=="Žar") {
                        $(this).parent().parent().parent().parent().parent().show();
                    }
                });
            }
			if (checked[8]==true) {
				$('.vrsta').each(function() {
					if ($(this).html()=="Drugo") {
						$(this).parent().parent().parent().parent().parent().show();
					}
				});
			}
        } 
        
        var test1;
        
        function filterBoni() {
            if(test1 == null)
                test1 = true;;
            
            if (test1) {
                filter1();
                test1 = false;
            } else {
                reset();
                test1 = true;
            } 
        }
            
    </script>
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
                    <a href="kosarica.php"> <h5><i class="icon-basket"></i><span>Košarica</span></h5> </a>
                </li>
                <!-- /kosarica -->
                <!-- uporabnik -->
                <li>
                    <a href="javascript:;"> <h5><i class="icon-user"></i><span>Uporabnik</span></h5> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="urejanjeUporabnika.php"> <span>Nastavitve</span> </a>
                        </li>
                        <li>
                            <a href="odjava.php"> <span>Odjava<span> </a>
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
									<input onclick="filterBoni()" class="to-labelauty" type="checkbox" data-labelauty="Študentski boni" checked/>
								</div>
							</li>
							<br />
							<!-- /studentski boni da ali ne -->
							<!-- hrana -->
							<li>
								<h4>Vrsta hrane</h4>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r1" onclick="filterCheck()" class="check">
									<label for="r1">Pica</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r2" onclick="filterCheck()" class="check">
									<label for="r2">Špageti</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r3" onclick="filterCheck()" class="check">
									<label for="r3">Zrezek</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r4" onclick="filterCheck()" class="check">
									<label for="r4">Juha</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r5" onclick="filterCheck()" class="check">
									<label for="r5">Jed na žlico</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r6" onclick="filterCheck()" class="check">
									<label for="r6">Pijača</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r7" onclick="filterCheck()" class="check">
									<label for="r7">Riba</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r8" onclick="filterCheck()" class="check">
									<label for="r8">Žar</label>
								</div>
							</li>
							<li>
								<div class="cs-checkbox m-b">
									<input type="checkbox" id="r9" onclick="filterCheck()" class="check">
									<label for="r19">Drugo</label>
								</div>
							</li>
							<!-- /hrana -->
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
					<!-- iskanje -->
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
					<!-- /iskanje -->

					<ul class="nav navbar-nav navbar-right hidden-xs">
						<!-- uporabnik-->
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
						<!-- /uporabnik-->
					</ul>
				</div>
				<!-- /top header -->
				<!-- main area -->
				<div class="main-content">
					<a class="cart-summary" href="kosarica.php" style="cursor:pointer">
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
							<div class="card-img-overlay p-a-0 " style="background-color: rgba(175, 188, 255, 1); background-size: cover;"></div>
							<div class="card-block" style="height: 200px"></div>
						</div>
						<div class="row profile-header text-white">
							<div class="col col-xs-3">
								<img class="profile-avatar" src="images/avatar.jpg" alt="" />
							</div>
							<div class="col p-b-lg col-xs-9">
								<div class="profile-user">
									<h4 class="m-t-0 m-b-0"><?php echo $restavracija['ime']; ?></h4>
									<small class=""><?php echo $restavracija['vrsta']; ?></small>
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
													Trenutna ponudba restavracije
												</div>
											</div>
											<div class="row">
												<div class="card-block p-a-0">
													<?php

													while($meni = mysqli_fetch_array($result)){
													echo '
													<div class="tile-container">
														<div class="col-md-6">
															<div class="tile product-tile">
																<div class="card bg-white no-border">
																	<div class="col-md-6">
																		<div class="product-image">
																			<img class="card-img-top img-responsive center-block" alt="" src="data:image/jpeg;base64,'.base64_encode( $meni['slika'] ).'" style="min-height: 200px; min-width: 200px">
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-6">
																			<div class="card-block">
																				<div class="product-meta">
																					<h5 class="product-title">' . $meni['jed'] . '</h5>
																					<span class="product-price">' . $meni['cena'] . ' €</span>
																					<span class="vrsta">' . $meni['vrsta'] . '</span></br>
																					<span>' . $meni['sestavine'] . '</span> </br>
																					<span>' . $meni['info'] . '</span> </br></br>
																					<span>Študentski boni:</span> <span class="boni">' . $meni['boni'] . '</span>
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
															</div>
														</div>
													</div>';
												} ?>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="komentarji">
											<div class="page-title">
												<div class="title">
													Komentarji
												</div>
												<div class="sub-title">
													Delite svoje izkušnje z drugimi
												</div>
											</div>
											<?php
												$sql = "SELECT * FROM user_comment WHERE fk_id_restavracija = '$id' ORDER BY doc DESC";
												$result5 = mysqli_query($con, $sql);


													if ($result5 -> num_rows > 0) {

															while ($row = $result5 -> fetch_assoc()) {
																	echo '<div class="card bg-white no-border">
																				<div class="card-block">
																					<div class="profile-timeline-header">
																						<a href="#" class="profile-timeline-user"> <img src="images/avatar.jpg" alt="" class="img-rounded"> </a>
																						<div class="profile-timeline-user-details">
																							<a href="#" class="bold">'.$row['username'].'</a>
																							<br>
																							<em class="text-success small">'.date('d-m-Y', strtotime($row['doc'])).'</em>
																						</div>
																					</div>
																					<div class="profile-timeline-content">
																						<p>'.$row['comment'].'</p>
																					</div>
																				</div>
																			</div>';
															}

													}else{
															echo 0;
													}
											?>


											<div class="card bg-white no-border">
                                                <form id="sv_comment" action="comment_sv.php" method="get" enctype="multipart/form-data">
    												<div class="card-block">
    													<div class="text-center">
    														<h3 class="m-t">Komentiraj tudi ti</h3>
    														<p>
    															Izrazi svoje mnenje o restavraciji in jedeh
    														</p>
    													</div>
														<?php
														if (isset($_SESSION['loggedin_uporabnik']) && $_SESSION['loggedin_uporabnik'] == true) { ?>
															<span>Vpisani ste kot: </span>
															<b><?php echo $_SESSION['username'];?></b></br></br>
															<?php
														}else{
														echo '
														 <div class="text-center">
    														<input class="form-control m-b" type="text" name="username" placeholder="Ime"  size="100" required="required" />
    													</div>
														';
														}?>
    													<div class="text-center">
    														<textarea class="form-control m-b" name="comment" id="message" rows="5" placeholder="Vnesite komentar ..."></textarea>
																<input type="hidden" value="<?php echo $id;?>" name="id_restavracija">
    													</div>
    													<div class="text-center">
    														<div class="card-block demo-button">
    															<div class="tool-button">
    																<button type="submit" class="btn btn-default btn-lg">
    																	Oddaj
    																</button>
    															</div>
    														</div>
    													</div>
    												</div>
                                                </form>
											</div>
										</div>
										<div class="tab-pane" id="obvestila">
											<div class="page-title">
												<div class="title">
													Obvestila
												</div>
												<div class="sub-title">
													V primeru izrednih dogodkov
												</div>
											</div>
											<div class="row">
												<?php
												$query3 = "SELECT * FROM obvestilo WHERE fk_id_restavracija = '$id'";
												$result3 = mysqli_query($con, $query3);

												while ($obvestilo = mysqli_fetch_array($result3)) {
													echo '
												<div class="col-md-6">
													<div class="card bg-white no-border">
														<div class="card-block">
															<h6>' . $obvestilo['datum'] . '</h6>
															<span>' . $obvestilo['besedilo'] . '</span></br>
															<div class="pull-right"><span>Osebje ' . $restavracija['ime'] . '</span> </div></br>
														</div>
													</div>
												</div>';
												}
												?>
											</div>
										</div>
										<div class="tab-pane" id="vec">
											<div class="page-title">
												<div class="title">
													O restavraciji
												</div>
												<div class="sub-title">
													Več podatkov o restavraciji
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="card bg-white no-border">
														<div class="card-block">
															<h4>Delovni čas</h4>
															<span>Med tednom: <?php echo $restavracija['teden1']; ?> - <?php echo $restavracija['teden2'];?></span></br>
															<span>Sobota: <?php echo $restavracija['sobota1']; ?> - <?php echo $restavracija['sobota2'];?></span></br>
															<span>Nedelja: <?php echo $restavracija['nedelja1']; ?> - <?php echo $restavracija['nedelja2'];?></span>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="card bg-white no-border">
														<div class="card-block">
															<h4>Kontaktni podatki</h4>
															<span>Telefon: <?php echo $restavracija['number']; ?></span></br>
															<span>Email: <?php echo $restavracija['emailfield']; ?></span>
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
							<a href="landingPage/index.php"> <i class="fa fa-angle-left"> </i><span> Nazaj</span></a>
						</li>
					</ul>
				</nav>
			</footer>
			<!-- /bottom footer -->
		</div>
		<!-- iskanje modal mobile -->
		<div class="modal bs-modal-sm1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
			    <Form action="pregledRestavracij.php" method="POST">
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
								<input class="input__field" type="text" id="input-1" name="filter1">
								<label class="input__label" for="input-1"> <span class="input__label-content">Lokacija</span> </label> </span>
							<span class="input m-b-md">
								<input class="input__field" type="text" id="input-2" name="filter2">
								<label class="input__label" for="input-2"> <span class="input__label-content">Restavracija</span> </label> </span>
						</div>
					</div>
					<div class="modal-footer no-border">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Zapri
						</button>
						<input type="submit" name="submit" value="Išči" class="btn btn-primary"/>
					</div>
				</div>
				</form>
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
							<h4>Vrsta hrane</h4>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="1">
								<label for="r1">Pica</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r11">
								<label for="r11">Špageti</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r12">
								<label for="r12">Zrezek</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r4">
								<label for="r4">Juha</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r14">
								<label for="r14">Jed na žlico</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r15">
								<label for="r15">Pijača</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r16">
								<label for="r16">Riba</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r17">
								<label for="r17">Žar</label>
							</div>
							<div class="cs-checkbox m-b">
								<input type="checkbox" id="r18">
								<label for="r18">Drugo</label>
							</div>
							<!-- /hrana -->
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


            $(function(){
                    $('#sv_comment').on('submit', function(a){
                        a.preventDefault();
                        var submiturl = $(this).attr('action');
                        var methods = $(this).attr('method');
                        $.ajax({
                            url: submiturl,
                            type: methods,
                            data: $(this).serialize(),
                            success:function(result){
                                show_comment();
                             },
                            error: function (jXHR, textStatus, errorThrown) {html("")}
                        });
                      });

                      show_comment();
            });

            function show_comment(){
                var submiturl = $('#shoW_com').val();
                $.ajax({
                        url: submiturl,
                        type: 'get',
                        data: $(this).serialize(),
                        success:function(result){
                            if(result != 0){
                                $('#comment_show').html(result);
                                $('#sv_comment [name=username]').val('');
                                $('#sv_comment [name=comment]').val('');
                            }else{
                                //
                            }

                         },
                        error: function (jXHR, textStatus, errorThrown) {html("")}
                    });
            }
		</script>
		<!-- end initialize page scripts -->
	</body>

</html>