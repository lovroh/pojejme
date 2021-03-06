<?php
include 'connection.php';

session_start();
?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Košarica</title>
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
              <input class="to-labelauty" type="checkbox" data-labelauty="Študentski boni" checked/>
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
              <input type="checkbox" id="r1">
              <label for="r1">Italijanska</label>
            </div>
          </li>
          <li>
            <div class="cs-checkbox m-b">
              <input type="checkbox" id="r2">
              <label for="r2">Morska</label>
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
              <label for="r5">Kitajska</label>
            </div>
          </li>
          <li>
            <div class="cs-checkbox m-b">
              <input type="checkbox" id="r6">
              <label for="r6">Grill</label>
            </div>
          </li>
          <li>
            <div class="cs-checkbox m-b">
              <input type="checkbox" id="r7">
              <label for="r7">Japonska</label>
            </div>
          </li>
          <li>
            <div class="cs-checkbox m-b">
              <input type="checkbox" id="r8">
              <label for="r8">Drugo</label>
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
        <div class="page-title">
          <div class="title">Košarica</div>
          <div class="sub-title">Nakupovalna košarica</div>
        </div>
        <div class="card bg-white m-b">
          <div class="card-header">Košarica</div>
          <div class="card-block p-a-0">
            <div class="table-responsive">
              <table class="table cart m-b-0">
                <thead>
                  <tr>
                    <th></th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <span class="icon-trash"></span>
                    </td>
                    <td class="text-capitalize">baseball</td>
                    <td>
                      <a class="math-actions minus disabled">&nbsp;</a>
                      <span class="cart-quantity">1</span>
                      <a class="math-actions">&nbsp;</a>
                    </td>
                    <td>$27.00</td>
                    <td>$27.00</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="icon-trash"></span>
                    </td>
                    <td class="text-capitalize">crenweck</td>
                    <td>
                      <a class="math-actions minus disabled">&nbsp;</a>
                      <span class="cart-quantity">1</span>
                      <a class="math-actions">&nbsp;</a>
                    </td>
                    <td>$22.00</td>
                    <td>$22.00</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="icon-trash"></span>
                    </td>
                    <td class="text-capitalize">baseball</td>
                    <td>
                      <a class="math-actions minus disabled">&nbsp;</a>
                      <span class="cart-quantity">1</span>
                      <a class="math-actions">&nbsp;</a>
                    </td>
                    <td>$7.00</td>
                    <td>$7.00</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="icon-trash"></span>
                    </td>
                    <td class="text-capitalize">baseball</td>
                    <td>
                      <a class="math-actions minus disabled">&nbsp;</a>
                      <span class="cart-quantity">1</span>
                      <a class="math-actions">&nbsp;</a>
                    </td>
                    <td>$48.00</td>
                    <td>$48.00</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="icon-trash"></span>
                    </td>
                    <td class="text-capitalize">shirt</td>
                    <td>
                      <a class="math-actions minus disabled">&nbsp;</a>
                      <span class="cart-quantity">1</span>
                      <a class="math-actions">&nbsp;</a>
                    </td>
                    <td>$86.00</td>
                    <td>$86.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="invoice-totals">
          <div class="invoice-totals-row">
            <strong class="invoice-totals-title">Tax (7.5%)</strong>
            <span class="invoice-totals-value">$14.25</span>
          </div>
          <div class="invoice-totals-row">
            <strong class="invoice-totals-title">Shipping</strong>
            <span class="invoice-totals-value">$2.99</span>
          </div>
          <div class="invoice-totals-row">
            <strong class="invoice-totals-title">Total</strong>
            <span class="invoice-totals-value">$207.24</span>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <a href="javascript:;" class="btn btn-primary pull-right">Potrdi naročilo</a>
            <a href="javascript:;" class="btn btn-default" ui-sref="app.commerce.products">Nazaj</a>
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
            <input type="checkbox" id="r9">
            <label for="r9">Italijanska</label>
          </div>
          <div class="cs-checkbox m-b">
            <input type="checkbox" id="r10">
            <label for="r10">Morska</label>
          </div>
          <div class="cs-checkbox m-b">
            <input type="checkbox" id="r11">
            <label for="r11">Fast food</label>
          </div>
          <div class="cs-checkbox m-b">
            <input type="checkbox" id="r12">
            <label for="r12">Mehiška</label>
          </div>
          <div class="cs-checkbox m-b">
            <input type="checkbox" id="r13">
            <label for="r13">Kitajska</label>
          </div>
          <div class="cs-checkbox m-b">
            <input type="checkbox" id="r14">
            <label for="r14">Grill</label>
          </div>
          <div class="cs-checkbox m-b">
            <input type="checkbox" id="r15">
            <label for="r15">Japonska</label>
          </div>
          <div class="cs-checkbox m-b">
            <input type="checkbox" id="r16">
            <label for="r16">Drugo</label>
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