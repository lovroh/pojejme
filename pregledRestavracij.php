<?php
include 'connection.php';

session_start();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>Pregled restavracij</title>
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

        $('.slider').each(function() {
           var data = $(this).data();
           $(this).slider(data);
        }   );
         
        function reset() {
            $('tr').each(function() {
                if (!$(this).is(":visible")) {
                    $(this).show();
                }
            });
        }
       
        function filter1() {
            $('tr td:nth-child(5)').each(function() {
                if ($(this).children().html()=="Ne") {
                    $(this).parent().hide();
                }
            });
        }
        
        function filter2() {
            if ($('#r1').is(":checked")){
                $('tr td:nth-child(3)').each(function() {
                    if ($(this).html()!="Italijanska") {
                        $(this).parent().hide();
                    }
                });
            }
            
            if ($('#r2').is(":checked")){
                $('tr td:nth-child(3)').each(function() {
                    if ($(this).html()!="Morska") {
                        $(this).parent().hide();
                    }
                });
            }
            
            if ($('#r3').is(":checked")){
                $('tr td:nth-child(3)').each(function() {
                    if ($(this).html()!="Fast food") {
                        $(this).parent().hide();
                    }
                });
            }
            
            if ($('#r4').is(":checked")){
                $('tr td:nth-child(3)').each(function() {
                    if ($(this).html()!="Mehiška") {
                        $(this).parent().hide();
                    }
                });
            }
              
            if ($('#r5').is(":checked")){
                $('tr td:nth-child(3)').each(function() {
                    if ($(this).html()!="Kitajska") {
                        $(this).parent().hide();
                    }
                });
            }
            
            if ($('#r6').is(":checked")){
                $('tr td:nth-child(3)').each(function() {
                    if ($(this).html()!="Grill") {
                        $(this).parent().hide();
                    }
                });
            }
            
            if ($('#r7').is(":checked")){
                $('tr td:nth-child(3)').each(function() {
                    if ($(this).html()!="Japonska") {
                        $(this).parent().hide();
                    }
                });
            }
            
            if ($('#r8').is(":checked")){
                $('tr td:nth-child(3)').each(function() {
                    if ($(this).html()!="Drugo") {
                        $(this).parent().hide();
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
        
        var test2;
        
        function filterCheck() {
            if(test2 == null)
                test2 = true;;
            
            if (test2) {
                filter2();
                test2 = false;
            } else {
                reset();
                test2 = true;
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
                            <a href="edituser.php"> <span>Nastavitve</span> </a>
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
                        <h4>Vrsta restavracije</h4>
                    </li>
                    <li>
                        <div class="cs-checkbox m-b">
                            <input type="checkbox" id="r1" onclick="filterCheck()">
                            <label for="r1">Italijanska</label>
                        </div>
                    </li>
                    <li>
                        <div class="cs-checkbox m-b">
                            <input type="checkbox" id="r2" onclick="filterCheck()">
                            <label for="r2">Morska</label>
                        </div>
                    </li>
                    <li>
                        <div class="cs-checkbox m-b">
                            <input type="checkbox" id="r3" onclick="filterCheck()">
                            <label for="r3">Fast food</label>
                        </div>
                    </li>
                    <li>
                        <div class="cs-checkbox m-b">
                            <input type="checkbox" id="r4" onclick="filterCheck()">
                            <label for="r4">Mehiška</label>
                        </div>
                    </li>
                    <li>
                        <div class="cs-checkbox m-b">
                            <input type="checkbox" id="r5" onclick="filterCheck()">
                            <label for="r5">Kitajska</label>
                        </div>
                    </li>
                    <li>
                        <div class="cs-checkbox m-b">
                            <input type="checkbox" id="r6" onclick="filterCheck()">
                            <label for="r6">Grill</label>
                        </div>
                    </li>
                    <li>
                        <div class="cs-checkbox m-b">
                            <input type="checkbox" id="r7" onclick="filterCheck()">
                            <label for="r7">Japonska</label>
                        </div>
                    </li>
                    <li>
                        <div class="cs-checkbox m-b">
                            <input type="checkbox" id="r8" onclick="filterCheck()">
                            <label for="r8">Drugo</label>
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
                <?php
                    if (isset($_SESSION['loggedin_uporabnik']) && $_SESSION['loggedin_uporabnik'] == true) { ?>
                        <a href="javascript:;" class="ripple"  data-toggle="dropdown"> <img src="images/avatar.jpg" class="header-avatar img-circle" alt="user" title="user">
                        <span>
                        <?php echo $_SESSION['ime'];?>
                        </span> <span class="caret"></span> </a>
                        <ul class="dropdown - menu">
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
                        ?>
                </li>
                <!-- /uporabnik-->
            </ul>
        </div>
        <!-- /top header -->
        <!-- main area -->
        <div class="main-content">
            <div class="page-title">
                <div class="title">Najdene restavracije</div>
                <div class="sub-title">Restavracije, ki ustrezajo vašim zahtevam</div>
            </div>
            <div class="card bg-white m-b">
                <div class="card-block p-a-0">
                    <div class="table-responsive">
                        <table class="table m-b-0">
                            <thead>
                            <tr>
                                <th class="col-md-2">Logotip</th>
                                <th class="col-md-3">Naziv</th>
                                <th class="col-md-3">Vrsta</th>
                                <th class="col-md-3">Opis</th>
                                <th class="col-md-2">Boni</th>
                                <th class="col-md-2"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php                                       
                                include 'connection.php';
                                        
                                 if (isset($_POST['isci'])) {
                                            
                                    $search = $_POST['search'];
                                            
                                    if ($search!="") {
                                                
                                        $query = "SELECT * FROM restavracija WHERE kraj LIKE ".$search." OR ime LIKE ".$search." AND vrsta LIKE ".$search; 
                                        $result = mysqli_query($con, $query);
                                                                                    
                                        while ($row = mysqli_fetch_array($result)) {
                                            $img = $row[1];
                                            echo "<tr role='row' class='restavracija'>
                                                  <td><img src='data:image/jpeg;base64,".base64_encode($img)."'style=width:50px;height:50px/></td>
                                                  <td>$row[2]</td>
                                                  <td>$row[3]</td>
                                                  <td>Kraj: $row[8]<br/> Naslov: $row[9]<br/> Telefonska: $row[5]</td>
                                                  <td><h3 class='m-a-0 text-success'>$row[7]</h3></td>
                                                  </tr>";
                                        }   
                                    } else {
                                                
                                        $query = "SELECT * FROM restavracija";
                                        $result = mysqli_query($con, $query);
                                                                                    
                                        while ($row = mysqli_fetch_array($result)) {
                                            $img = $row[1];
                                            echo "<tr role='row' class='restavracija'>
                                                  <td><img src='data:image/jpeg;base64,".base64_encode($img)."'style=width:50px;height:50px/></td>
                                                  <td>$row[2]</td>
                                                  <td>$row[3]</td> 
                                                  <td>Kraj: $row[8]<br/> Naslov: $row[9]<br/> Telefonska: $row[5]</td>
                                                  <td><h3 class='m-a-0 text-success'>$row[7]</h3></td>
                                                  </tr>";
                                        }
                                     }
                                  } else if (!isset($_POST['submit'])) {
                                            
                                    $query = "SELECT * FROM restavracija";
                                    $result = mysqli_query($con, $query);
                                                                                
                                    while ($row = mysqli_fetch_array($result)) {
                                        $img = $row[1];
                                        echo "<tr role='row' class='restavracija'>
                                              <td><img src='data:image/jpeg;base64,".base64_encode($img)."'style=width:50px;height:50px/></td>
                                              <td>$row[2]</td>
                                              <td>$row[3]</td>
                                              <td>Kraj: $row[8]<br/> Naslov: $row[9]<br/> Telefonska: $row[5]</td>
                                              <td><h3 class='m-a-0 text-success'>$row[7]</h3></td>
                                              </tr>";
                                    }
                                  } else {
                                                 
                                    $filter1 = $_POST['filter1'];
                                    $filter2 = $_POST['filter2'];
                                            
                                    if (isset($_POST['filter1']) && isset($_POST['filter2']) && $_POST['filter1']!="" && $_POST['filter2']!="") {
                                        $query = "SELECT * FROM restavracija WHERE kraj LIKE ".$filter1." OR ime LIKE ".$filter1." AND vrsta LIKE ".$filter2; 
                                    } else if (isset($_POST['filter1'])) {
                                        $query = "SELECT * FROM restavracija WHERE kraj LIKE ".$filter1." OR ime LIKE ".$filter1; 
                                    } else if (isset($_POST['filter2'])) {
                                        $query = "SELECT * FROM restavracija WHERE vrsta LIKE ".$filter2; 
                                    }
                                            
                                    $result = mysqli_query($con, $query);
                                                                                
                                    while ($row = mysqli_fetch_array($result)) {
                                        $img = $row[1];
                                        echo "<tr role='row' class='restavracija'>
                                              <td><img src='data:image/jpeg;base64,".base64_encode($img)."'style=width:50px;height:50px/></td>
                                              <td>$row[2]</td>
                                              <td>$row[3]</td> 
                                              <td>Kraj: $row[8]<br/> Naslov: $row[9]<br/> Telefonska: $row[5]</td>
                                              <td><h3 class='m-a-0 text-success'>$row[7]</h3></td>
                                              </tr>";
                                     }
                                   }
                                         
                                $con -> close();
                            ?>
                            </tbody>
                        </table>
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
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title">Iskanje</h4>
            </div>
            <div class="modal-body">
            <form action="pregledRestavracij.php" method="POST">
                <div class="form-group">
                        
    							<span class="input m-b-md">
    								<input class="input__field" type="text" id="input-1" name="filter1">
    								<label class="input__label" for="input-1"> <span class="input__label-content">Lokacija</span> </label> </span>
                        <span class="input m-b-md">
    								<input class="input__field" type="text" id="input-2" name="filter2">
    								<label class="input__label" for="input-2"> <span class="input__label-content">Restavracija</span> </label> </span>
    				    
                </div>
                <div class="modal-footer no-border">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Zapri
                    </button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Išči"/>              
                </div>
            </form>
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
                    <input onclick="filterBoni()" class="to-labelauty" type="checkbox" data-labelauty="Študentski boni" checked/>
                    <br />
                    <!-- /studentski boni da ali ne -->
                    <!-- hrana -->
                    <h4>Vrsta kuhinje</h4>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r9" onclick="filterCheck()">
                        <label for="r9">Italijanska</label>
                    </div>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r10" onclick="filterCheck()">
                        <label for="r10">Morska</label>
                    </div>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r11" onclick="filterCheck()">
                        <label for="r11">Fast food</label>
                    </div>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r12" onclick="filterCheck()">
                        <label for="r12">Mehiška</label>
                    </div>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r13" onclick="filterCheck()">
                        <label for="r13">Kitajska</label>
                    </div>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r14" onclick="filterCheck()">
                        <label for="r14">Grill</label>
                    </div>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r15" onclick="filterCheck()">
                        <label for="r15">Japonska</label>
                    </div>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r16" onclick="filterCheck()">
                        <label for="r16">Drugo</label>
                    </div>
                    <!-- /hrana -->
                    <!-- cena -->
                    <h4>Cena</h4>
                    <br />
                    <div class="slider slider-primary" data-values="[75,300]" data-range="true" data-min="0" data-max="500"></div>
                    <!-- /cena -->
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
<!-- end page scripts -->
<!-- initialize page scripts -->
<script src="scripts/helpers/sameheight.js"></script>
<script src="scripts/ui/dashboard.js"></script>
<script src="scripts/helpers/bootstrap-datatables.js"></script>
<script src="scripts/helpers/bootstrap-datatables.js"></script>
<script src="scripts/tables/table-edit.js"></script>
<script src="scripts/ui/alert.js"></script>
<script src="scripts/forms/plugins.js"></script>
<!-- end initialize page scripts -->
</body>

</html>