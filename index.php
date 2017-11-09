<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/freelancer.css" rel="stylesheet">
    <title>Portfolio</title>
<?php require_once ('core/projet.php');?>
</head>

<body id="page-top" class="index">


    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Sébastien PELLETIER</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Mon Histoire</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#mcv" >Compétences</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio" >Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#cont">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" id="imgp" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/19225765_244429602721090_1454927662903086621_n.jpg?oh=0c49d40013f5e529355b022b0699f0f4&oe=5AA0D9F9" style="width:270px" "height:20px" alt="">
                    <div class="intro-text">
                        <h1 class="name">Sébastien PELLETIER</h1>
                        <span class="skills">Developpeur Logiciel</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Mon Histoire</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Je m'appelle Pelletier Sébastien, je suis passioné d'informatique depuis que j'ai reçu mon premier ordinnateur à l'age de 8 ans et j'ai toujours ue l'envie de travailler dans ce domaine.
                       J'ai effectué mes études au lycée Jean Moulin de Béziers où j'ai commencé par faire un BEP eletronique puis un BAC PRO MRIM (Mirco Informatique Réseau installation et Maintenance).</p>
                </div>
                <div class="col-lg-4">
                    <p>Apres cela j'ai travaillé un an entant qu'administrateur reseau au Lycée Henri IV de Béziers, c'est à ce moment là que j'ai commencé a m'interréssé au devellopement WEB.
                    un Proffeseur de classe preparatoire est venu me demandé de faire un site internet pour sa classe.</p>
                    <p>C'est en moins de 6 mois en ayant aucune connaissance dans ce domaine que j'ai réuissi le defi de creer mon premier site.</p>
                    <p>En decembre 2016, j'ai ue la chance d'integrer une formation de développeur Logiciel creer par l'école regional du numerique BEWEB</p>
                </div>
            </div>
        </div>
    </section>
<!-- Portfolio Grid Section -->
<section class="mcv" id="mcv">
    <div class="container" tabindex="2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Compétences</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
              <p>HTML :
                <i class="fa fa-star fa-1g" aria-hidden="true"></i>
                <i class="fa fa-star fa-1g" aria-hidden="true"></i>
                <i class="fa fa-star fa-1g" aria-hidden="true"></i>
                <i class="fa fa-star fa-1g" aria-hidden="true"></i>
                <i class="fa fa-star fa-1g" aria-hidden="true"></i>
              </p>

              <p>CSS :

                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </p>

              <p>PHP :
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
              </p>

            </div>
            <div class="col-lg-4">
              <p>Javascript :
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i></p>
              <p>Jquery :
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i></p>
              <p>SQL :
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i></p>
            </div>
        </div>
    </div>
</section>

<section id="portfolio">
    <div class="container">
      <h2 style="text-align:center;">Portfolio</h2>
    <div class="boxInline">

    <?php

    for ($n=0; $n <count($q) ; $n++) {
      echo '<div class ="boxContent">';
      echo '<a href = "'.$q[$n]['URL'].'"><h3 style="text-align:center">'.$q[$n]['nom'] .'</h3></a>';
      echo '<hr class="star-primary">';
      echo '<img src="img/portfolio/'. $q[$n]['image'] .'" class="img-responsive img-centered" alt="">';
      echo '<p style="font-size:15px; text-align:center;">'.$q[$n]['Description'].'</p>';
      echo'<p style="font-size:15px; text-align:center;"><strong>Client: </strong>' .$q[$n]['Client'].'</p>';
      echo "</div>";

        }
    ?>

  </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="text-center" id="cont">

        <div class="footer-above">
            <div class="container" tabindex="4">

                <div class="row">

                    <div class="footer-col col-md-4">
                        <h3>Adresse</h3>
                        <p>12 rue de l'hirondelle
                            <br>34500 BEZIERS</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100014621561133" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/SbastienPELLET1?lang=fr" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/s%C3%A9bastien-pelletier-6332b7135/" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li> <a href="" class="btn-social btn-outline"><span class="sr-only">Github</span><i class="fa fa-fw fa-github"></i></a>

                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Email</h3>
                        <a href="mailto:s.pelletier34500@gmail;com" style="color:#fff;">s.pelletier34500@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Portfolio 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>






    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script> -->

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
<a href="#" class="scrollToTop"></a>
<script type="text/javascript">
$(document).ready(function(){

//Check to see if the window is top if not then display button
$(window).scroll(function(){
  if ($(this).scrollTop() > 100) {
    $('.scrollToTop').fadeIn();
  } else {
    $('.scrollToTop').fadeOut();
  }
});

//Click event to scroll to top
$('.scrollToTop').click(function(){
  $('html, body').animate({scrollTop : 0},800);
  return false;
});

});
</script>
</body>

</html>
