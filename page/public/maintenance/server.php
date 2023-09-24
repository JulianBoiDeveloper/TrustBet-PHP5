<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="icon" type="image/png" href="ressources/media/img/logo.png" />
      <link rel="stylesheet" href="ressources/css/style.css">
      <title>TRUST BET - SPORTS BETTING DIFFERENTLY</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- favicon -->
      <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
      <!-- bootstrap -->
      <link rel="stylesheet" href="ressources/css/bootstrap.min.css">

      <!-- fontawesome icon  -->
      <link rel="stylesheet" href="ressources/css/fontawesome.min.css">
      <!-- flaticon css -->
      <link rel="stylesheet" href="ressources/fonts/flaticon.css">
      <!-- animate.css -->
      <link rel="stylesheet" href="ressources/css/animate.css">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="ressources/css/owl.carousel.min.css">
      <!-- magnific popup -->
      <link rel="stylesheet" href="ressources/css/magnific-popup.css">
      <link rel="stylesheet" href="ressources/css/odometer.min.css">
      <!-- stylesheet -->
      <link rel="stylesheet" href="ressources/css/style.css">
      <!-- responsive -->
      <link rel="stylesheet" href="ressources/css/responsive.css">
      <link rel="stylesheet" href="ressources/css/dashboard-responsive.css">
      <!-- fonts -->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <script type="text/javascript">
        window.onload = function(){ document.querySelector(".preloader").style.display = "none"; }
        window.onscroll = function () {
          if(document.documentElement.scrollTop > 10){
            document.getElementById("navbar").style.position = "fixed";
            document.getElementById("navbar").style.width = "100%";
            document.getElementById("navbar").style.zIndex = "100";
            document.getElementById("navbar").style.top = "0px";
          }else{
              document.getElementById("navbar").style.position = "static";
              document.getElementById("navbar").style.width = "";
              document.getElementById("navbar").style.zIndex = "";
              document.getElementById("navbar").style.top = "";
          }
        }
      </script>
      <style media="screen">
        .border_cadre{
          -moz-box-shadow: inset 0px 0px 0px 15px rgba(75,75,75,0.5);
          -webkit-box-shadow: inset 0px 0px 0px 15px rgba(75,75,75,0.5);
          -o-box-shadow: inset 0px 0px 0px 15px rgba(75,75,75,0.5);
          box-shadow: inset 0px 0px 0px 15px rgba(75,75,75,0.5);
          filter:progid:DXImageTransform.Microsoft.Shadow(color=rgba(101,101,101,0.5);, Direction=NaN, Strength=0);
        }
          /* Par défaut, une étoile est en gris,
     avec un padding et un curseur en forme de main. */
      .fa-star {
      	color: gray;
      	cursor: pointer;
      	padding: 0.0625rem;
      }
      /* Si elle porte en plus la classe '.gold', elle sera en jaune. */
      .fa-star.gold {
      	color: #ffdc0f;
      }

      /* Le parent global '.rating' positionne le groupe des étoiles et le lien en colonne */
      .rating {
      	display: flex;
      	flex-direction: column;
      	align-items: center;
      }

      	/* Le groupe '.stars' positionne les étoiles
      		 les unes à côté des autres sans espacements. */
      	.stars {
      		display: inline-flex;
      		justify-content: center;
      		font-size: 15px;
      	}
        .star-min{
          font-size: 5px !important;
        }
      	/**
      	 * Et là opère la magie du ':hover' !
      	 */

      	/* A l'état :hover sur le parent '.rating',
      		 on force TOUTES les étoiles à passer en jaune. */
      	.stars:hover .fa-star {
      		color: #ffdc0f;
      	}
      	/* Et si la souris survole une étoile en particulier,
      		 on sélectionne toutes les étoiles qui sont APRÈS celle-ci
      		 grâce à l'opérateur '~' et on les force en GRIS */
      	.stars .fa-star:hover ~ .fa-star {
      		color: gray;
      	}
        /* LOADER */

        .loader {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin: 3em;
            display: inline-block;
            position: relative;
            vertical-align: middle;
        }
        .loader,
        .loader:after {
            animation: 1s infinite ease-in-out;
        }
        .loader:after {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .loader-2:before,
        .loader-2:after {
            content: '';
        }

            @keyframes loader2-1 {
                0% { transform: scale(1); opacity: 1; }
                50% { transform: scale(1.3); opacity: 0; }
                100% { transform: scale(1.3); opacity: 0; }
            }

        .loader-2:after {
            background-color: rgb(248, 27, 100);
            animation-name: loader2-2;
        }

            @keyframes loader2-2 {
                0% { transform: scale(1); }
                50% { transform: scale(0.7); }
                100% { transform: scale(1); }
            }
            /* Trait */
            .trait_dessus
            {
              border-top: 1px solid #A1A1A1;
              width : 100%;
            }
            /* Particules */
            .container-particle-main{
                width: 100;
                height: 1000px;
            }
      </style>

  </head>
  <body style="padding-right: 0px;">
    <!-- preloader begin -->
    <div class="preloader">
        <img class="preloader-icon" src="ressources/img/preloader.gif" alt="">
        <span>UN INSTANT SVP...</span>
    </div>
    <!-- header begin -->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6">
                        <div class="left-area">
                            <ul>
                                <li>
                                    <span class="icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="text">
                                        <span id="date">28</span>
                                        <span id="month">December</span>
                                        <span id="year">2020</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="far fa-clock"></i>
                                    </span>
                                    <span class="text clocks">
                                        <span id="hours">11</span>:<span id="minutes">43</span>:<span id="seconds">41</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-sm-6">
                        <div class="right-area">
                          <div  style="height:30px; width:200px; margin-right:15px;">
                            <!-- Barre de recherhe -->
                            <form action="#" method="get">
                              <input type="text" placeholder="Rechercher" style="border-radius: 30px; border: 0px; padding-left:15px; padding-top:5px; padding-bottom:5px;"/>
                            </form>
                          </div>
                            <ul>
                                <li>
                                    <select>
                                        <option>EN</option>
                                        <option>FR</option>
                                        <option>ES</option>
                                    </select>
                                </li>
                                <li>
                                    <a class="link" href="#">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-user-circle fa-w-16 fa-fw fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z" class=""></path></svg>
                                        Bonjour, John Doe
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->





    <div class="container-particle-main">

    </div>




    <!-- footer begin -->
    <div class="footer" id="contact">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-10">
                        <div class="about-widget">
                            <a class="logo" href="index.html">
                                <img src="ressources/img/logo_tbc.png" alt="">
                            </a>
                            <p>TRUST BET GROUP LTD, IMMATRICULÉ AUPRÈS DU REGISTRE DES SOCIÉTÉS BRITANNIQUE SOUS LE NUMÉRO 12187508</p>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="support">
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="ressources/img/email.png" alt="">
                                        </span>
                                        <span class="text">
                                            <span class="title">Assistance mail</span>
                                            <span class="descr">support@trust-bet.com</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="ressources/img/phone.png" alt="">
                                        </span>
                                        <span class="text">
                                            <span class="title">Assistance téléphonique</span>
                                            <span class="descr">(+33) 04 68 11 22 98</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="useful-links">
                            <h3>Liens utiles</h3>
                            <ul>
                                <li>
                                    <a href="#">CGV</a>
                                </li>
                                <li>
                                    <a href="#">CGU</a>
                                </li>
                                <li>
                                    <a href="#">POLITIQUE DE CONFIDENTIALITÉ</a>
                                </li>
                                <li>
                                    <a href="#">GAMBLING LICENCE</a>
                                </li>
                                <li>
                                    <a href="#">DEVENIR APPORTEUR D'AFFAIRE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3">
                        <div class="useful-links">
                            <h3>Connect With Us</h3>
                            <ul>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Blog Details</a>
                                </li>
                                <li>
                                    <a href="#">Service</a>
                                </li>
                                <li>
                                    <a href="#">Contact us</a>
                                </li>
                                <li>
                                    <a href="#">TEAM OVERVIEW</a>
                                </li>
                                <li>
                                    <a href="#">SCHEDULE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="useful-links">
                            <h3>All Sports</h3>
                            <ul>
                                <li>
                                    <a href="#">FOOTBALL</a>
                                </li>
                                <li>
                                    <a href="#">TENNIS</a>
                                </li>
                                <li>
                                    <a href="#">BASKETBALL</a>
                                </li>
                                <li>
                                    <a href="#">ICE HOCKEY</a>
                                </li>
                                <li>
                                    <a href="#">VOLLEYBALL</a>
                                </li>
                                <li>
                                    <a href="#">BADMINTON</a>
                                </li>
                                <li>
                                    <a href="#">BASEBALL</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="payment-method">
                                    <h6 class="payment-method-title">
                                        Payment methods are We accept
                                    </h6>
                                    <div class="all-method">
                                        <div class="single-method">
                                            <img src="ressources/img/brand/brand-1.png" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="ressources/img/brand/brand-2.png" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="ressources/img/brand/brand-3.png" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="ressources/img/brand/brand-4.png" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="ressources/img/brand/brand-5.png" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="ressources/img/brand/brand-6.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->
        <!-- notes  begin-->
        <div class="notes">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                        Jouer comporte des risques : isolement, endettement… Appelez le 09 74 75 13 13 (appel non surtaxé) ». « Jouer comporte des risques : dépendance, isolement… Appelez le 09 74 75 13 13 (appel non surtaxé).                    </div>
                </div>
            </div>
        </div>
        <!--copyright begin  -->
        <div class="copyright-footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-md-6 col-lg-6 d-lg-flex d-lg-flex d-block align-items-center">
                        <p class="copyright-text">
                            <a href="#">TRUST BET GROUP LTD</a> © 2021. ALL RIGHT RESERVED
                        </p>
                    </div>
                    <div class="text-right col-md-6 col-xl-4 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                        <p class="copyright-text">
                            Ce site contient un contenu commercial
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright end -->
  </body>
</html>
