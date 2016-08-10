<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="">
 
<head>
<meta charset="utf-8">
<title>Reactor - Bootstrap Admin Template</title>
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
<!-- endbuild -->
<!-- page stylesheets -->
        <link rel="stylesheet" href="vendor/chosen_v1.4.0/chosen.min.css">
        <link rel="stylesheet" href="vendor/checkbo/src/0.1.4/css/checkBo.min.css">
        <link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
        <link rel="stylesheet" href="vendor/jquery-labelauty/source/jquery-labelauty.css">
        <!-- end page stylesheets -->
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
                <!-- toggle small sidebar menu -->
                <a href="javascript:;" class="toggle-apps hidden-xs"
                    data-toggle="quick-launch"> <i class="icon-grid"></i>
                </a>
                <!-- /toggle small sidebar menu -->
                <!-- toggle offscreen menu -->
                <div class="toggle-offscreen">
                    <a href="javascript:;" class="visible-xs hamburger-icon"
                        data-toggle="offscreen" data-move="ltr"> <span></span> <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- /toggle offscreen menu -->
                <!-- logo -->
                <a class="brand-logo"> <span>POJEJ.ME</span>
                </a> <a href="#" class="small-menu-visible brand-logo">R</a>
                <!-- /logo -->
            </div>
 
            <!-- main navigation -->
            <nav role="navigation">
                <div class="card-block">
                    <input class="to-labelauty labelauty btn-block" type="checkbox"
                        checked="" ui-jq="labelauty"
                        ui-options="{class: 'labelauty btn-block'}" id="labelauty-193757"
                        style="display: none;"><label for="labelauty-193757">
                        <span class="icon-tag"></span> <span class="labelauty-checked">Študentski
                            boni!</span>
                    </label> <br>
                    <p>
                        <b>Hrana</b>
                    </p>
                    <br>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r1"> <label for="r1">Dunajc</label>
                    </div>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r2"> <label for="r2">Kitajska</label>
                    </div>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r3"> <label for="r3">Riž</label>
                    </div>
                    <div class="cs-checkbox m-b">
                        <input type="checkbox" id="r4"> <label for="r4">Japonska</label>
                    </div>
 
 
 
                    <p>
                        <b>Cena</b>
                    </p>
                    <br>
                        <div class="slider slider-primary" data-values="[75,300]" data-range="true" data-min="0" data-max="500"></div>
                </div>
 
 
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
                         <input type="submit" name="submit" value="Išči" class="btn btn-primary btn" />
                      </li>
 
                </ul>
                 
                </form>
 
               <ul class="nav navbar-nav navbar-right hidden-xs">
                
                     <?php
                     
                        if (isset($_SESSION['loggedin_uporabnik']) && $_SESSION['loggedin_uporabnik'] == true) {
                            echo "<li class='dropdown'>
                               <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Dobrodošel, ".$_SESSION['ime']." ".$_SESSION['priimek']."</a>
                               <ul class='dropdown-menu'>
                                 <li><a href='../static/app/odjava.php'>Odjava</a></li>
                              </ul>
                            </li>";
                        } else if (isset($_SESSION['loggedin_restavracija']) && $_SESSION['loggedin_restavracija'] == true) {
                            echo "<li class='dropdown'>
                               <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Dobrodošli, ".$_SESSION['ime']."</a>
                               <ul class='dropdown-menu'>
                                 <li><a href='../static/app/odjava.php'>Odjava</a></li>
                              </ul>
                            </li>";
                        }                                     
                    ?> 
               
               </ul>
            </div>
            <!-- /top header -->
            <!-- main area -->
            <div class="main-content">
                <div class="card-block">
                    <div id="DataTables_Table_0_wrapper"
                        class="dataTables_wrapper form-inline no-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>Prikaži <select name="DataTables_Table_0_length"
                                        aria-controls="DataTables_Table_0" class="form-control"><option
                                                value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option></select> ponudnikov.
                                    </label>
                                </div>
                                <div class="toolbar"></div>
                            </div>
 
                        </div>
                        <div class="table-responsive">
                            <table
                                class="table table-no-border table-condensed datatable m-b-0 dataTable no-footer"
                                ui-jq="dataTable" ui-options="dataTableOpt"
                                id="DataTables_Table_0" role="grid"
                                aria-describedby="DataTables_Table_0_info" style="width: 749px;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="width: 94px;">LOGOTIP</th>
                                        <th class="sorting_asc" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            aria-label="Name: activate to sort column descending"
                                            aria-sort="ascending" style="width: 124px;">NAZIV</th>
                                        <th class="sorting" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="width: 184px;">OPIS</th>
                                            <th class="sorting" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="width: 94px;">BONI</th>                                         
 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                         
                                        include 'connection.php';
                                         
                                        if (!isset($_POST['submit']) || $_POST['search'] == "") {
                                            $query = "SELECT * FROM restavracija";
                                            $result = $conn -> query($query);
                                                                                
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<tr role='row' class='odd'>
                                                        <td>Img</td>
                                                        <td>$row[1]</td>
                                                        <td>Vrsta: $row[2]<br/> Kraj: $row[7]<br/> Naslov: $row[8]<br/> Telefonska: $row[4]</td>
                                                        <td><h3 class='m-a-0 text-success'>$row[6]</h3></td>
                                                      </tr>";
                                            }
                                        } else {
                                                 
                                            $search = $_POST['search'];
                                            $query = "SELECT * FROM restavracija WHERE ime LIKE '$search' OR kraj LIKE '$search'";
                                            $result = $conn -> query($query);
                                                                                
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<tr role='row' class='odd'>
                                                        <td>Img</td>
                                                        <td>$row[1]</td>
                                                        <td>Vrsta: $row[2]<br/> Kraj: $row[7]<br/> Naslov: $row[8]<br/> Telefonska: $row[4]</td>
                                                        <td><h3 class='m-a-0 text-success'>$row[6]</h3></td>
                                                      </tr>";
                                            }
                                        }
                                         
                                        $conn -> close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="datatable-bottom">
                            <div class="pull-right">
                                <div class="dataTables_paginate paging_bootstrap"
                                    id="DataTables_Table_0_paginate">
                                    <ul class="pagination m-a-0">
                                        <li class="prev disabled"><a href="#" title="Previous">←</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li class="next disabled"><a href="#" title="Next">→</a></li>
                                    </ul>
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
                    <li><a href="javascript:;">Feedback</a></li>
                    <li><a href="javascript:;" class="scroll-up"> <i
                            class="fa fa-angle-up"></i>
                    </a></li>
                </ul>
            </nav>
            <nav class="footer-left hidden-xs">
                <ul class="nav">
                    <li><a href="javascript:;"><span>About</span> Reactor</a></li>
                    <li><a href="javascript:;">Privacy</a></li>
                    <li><a href="javascript:;">Terms</a></li>
                    <li><a href="javascript:;">Help</a></li>
                </ul>
            </nav>
        </footer>
        <!-- /bottom footer -->
        <!-- chat -->
        <div class="chat-panel">
            <div class="chat-inner">
                <div class="chat-users">
                    <div class="chat-group mb0">
                        <div class="chat-group-header h4">Chat</div>
                    </div>
                    <div class="chat-group">
                        <div class="chat-group-header">Favourites</div>
                        <a href="javascript:;"> <span class="status-online"></span> <span>Catherine
                                Moreno</span>
                        </a> <a href="javascript:;"> <span class="status-online"></span> <span>Denise
                                Peterson</span>
                        </a> <a href="javascript:;"> <span class="status-away"></span> <span>Charles
                                Wilson</span>
                        </a> <a href="javascript:;"> <span class="status-away"></span> <span>Melissa
                                Welch</span>
                        </a> <a href="javascript:;"> <span class="status-no-disturb"></span>
                            <span>Vincent Peterson</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Pamela Wood</span>
                        </a>
                    </div>
                    <div class="chat-group">
                        <div class="chat-group-header">Online Friends</div>
                        <a href="javascript:;"> <span class="status-online"></span> <span>Tammy
                                Carpenter</span>
                        </a> <a href="javascript:;"> <span class="status-away"></span> <span>Emma
                                Sullivan</span>
                        </a> <a href="javascript:;"> <span class="status-no-disturb"></span>
                            <span>Andrea Brewer</span>
                        </a> <a href="javascript:;"> <span class="status-online"></span> <span>Sean
                                Carpenter</span>
                        </a>
                    </div>
                    <div class="chat-group">
                        <div class="chat-group-header">Offline</div>
                        <a href="javascript:;"> <span class="status-offline"></span> <span>Denise
                                Peterson</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Jose Rivera</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Diana Robertson</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>William Fields</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Emily Stanley</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Jack Hunt</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Sharon Rice</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Mary Holland</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Diane Hughes</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Steven Smith</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Emily Henderson</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Wayne Kelly</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Jane Garcia</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Jose Jimenez</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Rachel Burton</span>
                        </a> <a href="javascript:;"> <span class="status-offline"></span>
                            <span>Samantha Ruiz</span>
                        </a>
                    </div>
                </div>
 
            </div>
        </div>
        <!-- /chat -->
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
            $('.slider').each(function() {
                var data = $(this).data();
                $(this).slider(data);
            });
        </script>
</body>
 
</html>