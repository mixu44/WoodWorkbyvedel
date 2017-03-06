<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

    <div id="mySidenav" class="sidenav" style="z-index: 11">
        <div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="?page=home">Forside</a>
            <a href="?page=products">Produkter</a>
            <a href="?page=aboutus">Hvem&nbsp;er&nbsp;vi</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>

    </div>
    <div id="mySidenavMenu" class="sidenav-navbar" style="z-index: 10">
        <div class="container" style="padding-left: 0">
            <div class="col-md-6" style="padding-left: 0">
                <span class="center-block" onclick="openNav()">&#9776; MENU</span>
            </div>
            <div class="col-md-6 hidden-xs">
                <img class="" src="http://placehold.it/300x70">
            </div>
        </div>
    </div>
<div>
    <?php include_once('pages.php') ?>
</div>

    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> KONTAKT: </h3>
                        <ul>
                            <p>Clara Vedel</p>
                            <p>+45 60717017</p>
                            <p>kontakt@woodworks.dk</p>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> INFORMATION:</h3>
                        <ul>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Lorem Ipsum </h3>
                        <ul>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Lorem Ipsum </h3>
                        <ul>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                            <li> <a href="#"> Lorem Ipsum </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                        <h3> FØLG OS PÅ:</h3>
                        <ul class="social">
                            <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                        </ul>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.footer-->

        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> WOODWORKS © 2017.  </p>
            </div>
        </div>
        <!--/.footer-bottom-->
    </footer>

</body>

<script rel="script" src="js/bootstrap.min.js"></script>
<script rel="script" src="js/jquery-3.1.1.js"></script>
<script rel="script" src="js/myjs.js"></script>

<script type="text/javascript">
    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $('.sidenav-navbar').addClass('shrink');
        } else {
            $('.sidenav-navbar').removeClass('shrink');
        }
    });
</script>

</html>



