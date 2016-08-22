<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Enostavno naročanje hrane na dom</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">pojej.me</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#kako">Kako naročiti</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#ponudba">Ponudba</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#novo">Novo</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#kontakt">Kontakt</a>
                    </li>
                    <?php
                    
                        session_start();  
                        
                        if (isset($_SESSION['loggedin_uporabnik']) && $_SESSION['loggedin_uporabnik'] == true) {
                            echo "<li class='dropdown'>
                               <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Dobrodošel, ".$_SESSION['ime']." ".$_SESSION['priimek']."</a>
                               <ul class='dropdown-menu'>
                                 <li><a href='../odjava.php'>Odjava</a></li>
                              </ul>
                            </li>";
                        } else if (isset($_SESSION['loggedin_restavracija']) && $_SESSION['loggedin_restavracija'] == true) {
                            echo "<li class='dropdown'>
                               <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Dobrodošli, ".$_SESSION['ime']."</a>
                               <ul class='dropdown-menu'>
                                 <li><a href='../odjava.php'>Odjava</a></li>
                              </ul>
                            </li>";
                        } else {
                            echo "<li class='dropdown'>
                               <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Uporabnik</a>
                               <ul class='dropdown-menu'>
                                 <li><a href='../uporabnik-prijava.html'>Prijava</a></li>
                                 <li><a href='../uporabnik-registracija.html'>Registracija</a></li>
                              </ul>
                            </li>";
                        }
                                     
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Enostavno naročanje hrane na dom</h1>
                <hr>
            <!-- /.row -->
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body ">
                            <form class="form-inline">
                                <h4>Preglej ponudbo restavracij!</h4></br>
                                <div class="row">
                                    <input type="text" class="form-control" placeholder="Naslov, kraj">
                                    <input type="text" class="form-control" placeholder="Restavracija, vrsta hrane">
                                    <button type="submit" class="btn btn-default">Išči</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="kako">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kako naročiti</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-envelope-o wow bounceIn text-primary"></i>
                        <h3>Poišči</h3>
                        <p class="text-muted">Išči na podlagi lokacije in hrane, ki jo želiš</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Izberi</h3>
                        <p class="text-muted">Izbor si lahko olajšaš z ocenami strank</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Naroči</h3>
                        <p class="text-muted">Med meniji poišči želeno hrano in oddaj naročilo</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Pojej</h3>
                        <p class="text-muted">Ocene in povratni komentarji so zaželeni</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="ponudba" class="bg-primary">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Preglej ponudbo restavracij!</h2>
                <a href="../static/app/pregledRestavracij.php" class="btn btn-default btn-xl wow tada">Pregled</a>
            </div>
        </div>
    </section>
    <section id="novo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nedavno dodane restavracije</h2>
                    <hr class="primary">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box">
                <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Restavracija
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box">
                <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Restavracija
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="portfolio-box">
                <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Restavracija
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
             </div>
         </div>
    </section>
    
    <section class="bg-dark" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Za nove restavracije</h2>
                    <hr class="light">
                    <p class="text-faded">Uporaba aplikacije je enostavna, naredite prve korake do elektronskega sprejemanja naročil</p>
                    <a href="../dodajanjeRestavracije.html" class="btn btn-default btn-xl">Registracija</a>
                    <a href="../restavracijaPrijava.html" class="btn btn-default btn-xl">Prijava</a>
                </div>
            </div>
        </div>
    </section>

    <section id="kontakt">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Kontaktirajte nas</h2>
                    <hr class="primary">
                    <p>Če imate kakšne težave, želje ali priporočate kakšno restavracijo ...</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@pojejme.com</a></p>
                </div>
            </div>
        </div>
    </section>

   <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-12">
                        <h3>Najdete nas tudi na</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
