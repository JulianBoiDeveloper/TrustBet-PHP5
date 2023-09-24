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



    <!-- body begin -->
    <div id="navbar" style="height:65px; background-color:#f81b64;">
        <div style="width:1200px; margin:0 auto; height:65px;">
          <div class="container">
            <div class="row">
              <div class="col">
                <a class="logo" href="index.html">
                    <img src="ressources/img/logo_tbc.png" alt="" width="90%" style="margin-top:7px;">
                </a>
              </div>
              <div class="col-6">
                <input type="button" value="Menu 1" style="background:none; color:white; border:0px; font-weight:bold; margin-top:18px; cursor:pointer;"/>
                <input type="button" value="Menu 1" style="background:none; color:white; border:0px; font-weight:bold; margin-top:18px; cursor:pointer;"/>
                <input type="button" value="Menu 1" style="background:none; color:white; border:0px; font-weight:bold; margin-top:18px; cursor:pointer;"/>
                <input type="button" value="Menu 1" style="background:none; color:white; border:0px; font-weight:bold; margin-top:18px; cursor:pointer;"/>
              </div>
              <div class="col">

                <div style="background:none; color:white; border:0px; font-weight:bold; margin-top:10px; cursor:pointer; float:right;" />
                    Panier  <i class="fas fa-shopping-cart"></i><br> <span style="float:right;">300€</span>
                </div>
                <div style="background:none; color:white; border:0px; font-weight:bold; margin-top:12px; margin-right:10px; cursor:pointer; float:right; font-size:12px;" />
                    Argent XXXXX : &ensp;<span style="float:right;">80€</span>
                    <br>
                    Argent XXXXX : &ensp;<span style="float:right;">150€</span>
                </div>
              </div>
            </div>
          </div>
          <div>
        </div>
      </div>
    </div>
    <!-- Evenements à venir -->
    <div style="background-color:#EFEFEF; padding-bottom: 15px" >
      <div style="width:1200px; margin: 0 auto; padding-top:15px">
        <h5 style="margin-left:10px">Événements à venir :</h5>
          <i class="fas fa-chevron-left" style="position:absolute; left:300px; top:280px; cursor:pointer;"></i><i class="fas fa-chevron-right" style="position:absolute; right:300px; top:280px; cursor:pointer;"></i>
          <div class="container">
            <div class="row">
            <div class="col-sm" style="background-color:white; margin:5px;-webkit-box-shadow: 0px 0px 11px -6px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 11px -6px rgba(0,0,0,0.75);box-shadow: 0px 0px 11px -6px rgba(0,0,0,0.75);">
                <div style="padding:5px;background:#f81b64; width:150px; color:white; height:35px; text-align:center; float:left;">
                  <span style="font-size:10px;">Aujourd'hui 16:00</span>
                </div>
                <div style="padding:5px;background:#2a2a2a; width:150px; color:white; height:35px; text-align:center; float:right;">
                  <span style="font-size:10px;">67 pronos</span>
                </div>
                <div style="width:100%; height:85px; text-align:center; clear:both; margin-top:65px; font-weight:bold;">
                    Crystal palace VS Leicester
                </div>
                <div>
                  <img src="https://www.bettingexpert.com//assets/images/sport-fields/be-football-field.png" alt="">
                </div>

            </div>
            <div class="col-sm" style="background-color:white; margin:5px;-webkit-box-shadow: 0px 0px 11px -6px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 11px -6px rgba(0,0,0,0.75);box-shadow: 0px 0px 11px -6px rgba(0,0,0,0.75);">
                <div style="padding:5px;background:#f81b64; width:150px; color:white; height:35px; text-align:center; float:left;">
                  <span style="font-size:10px;">Aujourd'hui 18:00</span>
                </div>
                <div style="padding:5px;background:#2a2a2a; width:150px; color:white; height:35px; text-align:center; float:right;">
                  <span style="font-size:10px;">45 pronos</span>
                </div>
                <div style="width:100%; height:85px; text-align:center; clear:both; margin-top:65px; font-weight:bold;">
                    Chelsea VS Aston Villa
                </div>
                <div>
                  <img src="https://www.bettingexpert.com//assets/images/sport-fields/be-football-field.png" alt="">
                </div>

            </div>
            <div class="col-sm" style="background-color:white;margin:5px;-webkit-box-shadow: 0px 0px 11px -6px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 11px -6px rgba(0,0,0,0.75);box-shadow: 0px 0px 11px -6px rgba(0,0,0,0.75);">
                <div style="padding:5px;background:#f81b64; width:150px; color:white; height:35px; text-align:center; float:left;">
                  <span style="font-size:10px;">Aujourd'hui 21:00</span>
                </div>
                <div style="padding:5px;background:#2a2a2a; width:150px; color:white; height:35px; text-align:center; float:right;">
                  <span style="font-size:10px;">37 pronos</span>
                </div>
                <div style="width:100%; height:85px; text-align:center; clear:both; margin-top:65px; font-weight:bold;">
                    Everton VS Manchester City
                </div>
                <div>
                  <img src="https://www.bettingexpert.com//assets/images/sport-fields/be-football-field.png" alt="">
                </div>
            </div>
          </div>
          </div>
      </div>
    </div>

    <!-- Meilleurs pronostiqueurs -->
    <div style="background-color:#EFEFEF;">
      <div style=" background-color:#EFEFEF; width:1200px; margin: 0 auto; padding-top:15px;">
        <h5 style="margin-left:10px">Meilleurs pronostiqueurs :</h5>
      </div>
      <div class="container">
        <div class="row" style="height:400px;">
          <div class="col-sm border_cadre" style="color:white;background-color:#38003d; margin:10px;">
              <div style="width:100%;height:125px;  display: table-cell; vertical-align:bottom;">
                <img src="ressources/img/football.png" width="160px" height="65px;" style="padding-left:95px;">
              </div>
              <div style="text-align:center;">
                  <span style="font-size:12px;">Meilleur Pronostiqueur</span>
                  <br>
                  <span style="font-size:20px;font-weight:bold;">FOOTBALL</span>
                  <br>
                  <img src="ressources/img/portrait.jpg" class="rounded-circle" width="75px" height="75px">
                  <br>
                  <span style="font-size:12px;font-weight:bold;">David Copenague</span>
                  <div class="rating">
                  	<div class="stars">
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  	</div>
                  </div>
              </div>
          </div>
          <div class="col-sm border_cadre" style="color:white;background-color:#cd2844; margin:10px;">
            <div style="width:100%;height:125px;  display: table-cell; vertical-align:bottom;">
              <img src="ressources/img/basketball.png" width="160px" height="65px;" style="padding-left:95px;">
            </div>
            <div style="text-align:center;">
                <span style="font-size:12px;">Meilleur Pronostiqueur</span>
                <br>
                <span style="font-size:20px;font-weight:bold;">BASKETBALL</span>
                <br>
                <img src="ressources/img/portrait.jpg" class="rounded-circle" width="75px" height="75px">
                <br>
                <span style="font-size:12px;font-weight:bold;">David Copenague</span>
                <div class="rating">
                  <div class="stars">
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                  </div>
                </div>
            </div>

          </div>
          <div class="col-sm border_cadre" style="color:white;background-color:#00703d; margin:10px;">
            <div style="width:100%;height:125px;  display: table-cell; vertical-align:bottom;">
              <img src="ressources/img/tennis.png" width="160px" height="65px;" style="padding-left:95px;">
            </div>
            <div style="text-align:center;">
                <span style="font-size:12px;">Meilleur Pronostiqueur</span>
                <br>
                <span style="font-size:20px;font-weight:bold;">TENNIS</span>
                <br>
                <img src="ressources/img/portrait.jpg" class="rounded-circle" width="75px" height="75px">
                <br>
                <span style="font-size:12px;font-weight:bold;">David Copenague</span>
                <div class="rating">
                  <div class="stars">
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                  </div>
                </div>
            </div>

          </div>
          <div class="col-sm border_cadre" style="color:white;background-color:#1a242e; margin:10px;">
            <div style="width:100%;height:125px;  display: table-cell; vertical-align:bottom;">
              <img src="ressources/img/all-sports-2017.png" width="160px" height="65px;" style="padding-left:95px;">
            </div>
            <div style="text-align:center;">
                <span style="font-size:12px;">Meilleur Pronostiqueur</span>
                <br>
                <span style="font-size:20px;font-weight:bold;">TOUS LES SPORTS 2020</span>
                <br>
                <img src="ressources/img/portrait.jpg" class="rounded-circle" width="75px" height="75px">
                <br>
                <span style="font-size:12px;font-weight:bold;">David Copenague</span>
                <div class="rating">
                  <div class="stars">
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                    <i class="fa fa-star gold"></i>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row" style="height:45px;">
          <div class="col-sm" style="height:45px; background-color:white;margin:10px;margin-top:-10px; ">
            <input type="button" value="Suivre" style="background:none; color:black; border:1px solid black; font-weight:bold; cursor:pointer; text-align:center; position:relative; left:90px;top:7px;"/>
          </div>
          <div class="col-sm" style="height:45px; background-color:white;margin:10px;margin-top:-10px;">
            <input type="button" value="Poster un pronostic" style="background:none; color:black; border:1px solid black; font-weight:bold; cursor:pointer; text-align:center; position:relative; left:40px;top:7px;"/>

          </div>
          <div class="col-sm" style="height:45px; background-color:white;margin:10px;margin-top:-10px;">
            <input type="button" value="Ajouter au panier" style="background:none; color:black; border:1px solid black; font-weight:bold; cursor:pointer; text-align:center; position:relative; left:50px;top:7px;"/>

          </div>
          <div class="col-sm" style="height:45px; background-color:white;margin:10px;margin-top:-10px;">
            <input type="button" value="Pronostics validé" style="background:none; color:black; border:1px solid black; font-weight:bold; cursor:pointer; text-align:center; position:relative; left:50px;top:7px;"/>

          </div>
        </div>
      </div>
    </div>

    <!-- Derniers pronostics postés -->
    <div style="background-color:#EFEFEF;">
      <div style="width:1200px; margin: 0 auto; padding-top:15px;padding-bottom: 15px">
        <h5 style="margin-left:10px">Derniers pronostics postés :</h5>
      </div>
    </div>
    <div style="background-color:#EFEFEF;">
      <div style="width:1200px; margin: 0 auto; padding-top:15px;padding-bottom: 15px; display: flex; flex-wrap: nowrap;">
        <div style="width:750px; min-height:800px; padding-right:10px;">
          <!-- Dernier pronostics -->
          <div style="width:100%; height:150px; background:white; margin-bottom:7.5px; display: flex; flex-wrap: nowrap;">
            <div style="width:20%; height:100%;">
                <div style="text-align:center; padding-top: 25px;">
                  <img src="ressources/img/portrait.jpg" class="rounded-circle" width="75px" height="75px">
                  <br>
                  <div class="stars">
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  </div>
                </div>
            </div>
            <div style="width:80%; height:100%;">
                <div style="text-align:left; padding-top: 25px;">
                  <img src="ressources/img/basketball.png" width="10px" height="10px" style="filter:invert(50%);" >
                  <span style="font-size:12px;filter:invert(50%);">
                    BARCELONA-EIBAR
                  </span>
                  <br>
                  <img src="ressources/img/flags/spainFlag.jpg" width="25px" height="20px"> Over 1.5 buts en 1ère période
                  <br>
                  <span style="font-size:12px;filter:invert(50%);">
                    <span style="font-weight:bold;">David Copenague</span>
                  </span>
                  <br>
                  <span style="font-size:8px;filter:invert(80%);">
                    <span style="font-weight:bold;">Il y a 1 minutes</span>
                  </span>
                </div>
            </div>
            <div style="width:20%; height:100%; padding-top:25px; padding-left:15px;">
                <button type="button" class="btn btn-light" style="width:75px; height:75px; font-weight:bold; font-size:20px;">2.20</button>
                <br>
                <img src="ressources/img/logo_tbc.png" alt="" style="margin-top:7px; width:75px; height:15px;">
            </div>
          </div>
          <!--end dernier pronostics -->
          <!-- Dernier pronostics -->
          <div style="width:100%; height:150px; background:white; margin-bottom:7.5px; display: flex; flex-wrap: nowrap;">
            <div style="width:20%; height:100%;">
                <div style="text-align:center; padding-top: 25px;">
                  <img src="ressources/img/portrait.jpg" class="rounded-circle" width="75px" height="75px">
                  <br>
                  <div class="stars">
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  </div>
                </div>
            </div>
            <div style="width:80%; height:100%;">
                <div style="text-align:left; padding-top: 25px;">
                  <img src="ressources/img/basketball.png" width="10px" height="10px" style="filter:invert(50%);" >
                  <span style="font-size:12px;filter:invert(50%);">
                    BARCELONA-EIBAR
                  </span>
                  <br>
                  <img src="ressources/img/flags/spainFlag.jpg" width="25px" height="20px"> Over 1.5 buts en 1ère période
                  <br>
                  <span style="font-size:12px;filter:invert(50%);">
                    <span style="font-weight:bold;">David Copenague</span>
                  </span>
                  <br>
                  <span style="font-size:8px;filter:invert(80%);">
                    <span style="font-weight:bold;">Il y a 1 minutes</span>
                  </span>
                </div>
            </div>
            <div style="width:20%; height:100%; padding-top:25px; padding-left:15px;">
                <button type="button" class="btn btn-light" style="width:75px; height:75px; font-weight:bold; font-size:20px;">2.20</button>
                <br>
                <img src="ressources/img/logo_tbc.png" alt="" style="margin-top:7px; width:75px; height:15px;">
            </div>
          </div>
          <!--end dernier pronostics -->
          <!-- Dernier pronostics -->
          <div style="width:100%; height:150px; background:white; margin-bottom:7.5px; display: flex; flex-wrap: nowrap;">
            <div style="width:20%; height:100%;">
                <div style="text-align:center; padding-top: 25px;">
                  <img src="ressources/img/portrait.jpg" class="rounded-circle" width="75px" height="75px">
                  <br>
                  <div class="stars">
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  </div>
                </div>
            </div>
            <div style="width:80%; height:100%;">
                <div style="text-align:left; padding-top: 25px;">
                  <img src="ressources/img/basketball.png" width="10px" height="10px" style="filter:invert(50%);" >
                  <span style="font-size:12px;filter:invert(50%);">
                    BARCELONA-EIBAR
                  </span>
                  <br>
                  <img src="ressources/img/flags/spainFlag.jpg" width="25px" height="20px"> Over 1.5 buts en 1ère période
                  <br>
                  <span style="font-size:12px;filter:invert(50%);">
                    <span style="font-weight:bold;">David Copenague</span>
                  </span>
                  <br>
                  <span style="font-size:8px;filter:invert(80%);">
                    <span style="font-weight:bold;">Il y a 1 minutes</span>
                  </span>
                </div>
            </div>
            <div style="width:20%; height:100%; padding-top:25px; padding-left:15px;">
                <button type="button" class="btn btn-light" style="width:75px; height:75px; font-weight:bold; font-size:20px;">2.20</button>
                <br>
                <img src="ressources/img/logo_tbc.png" alt="" style="margin-top:7px; width:75px; height:15px;">
            </div>
          </div>
          <!--end dernier pronostics -->
          <!-- Dernier pronostics -->
          <div style="width:100%; height:150px; background:white; margin-bottom:7.5px; display: flex; flex-wrap: nowrap;">
            <div style="width:20%; height:100%;">
                <div style="text-align:center; padding-top: 25px;">
                  <img src="ressources/img/portrait.jpg" class="rounded-circle" width="75px" height="75px">
                  <br>
                  <div class="stars">
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  </div>
                </div>
            </div>
            <div style="width:80%; height:100%;">
                <div style="text-align:left; padding-top: 25px;">
                  <img src="ressources/img/basketball.png" width="10px" height="10px" style="filter:invert(50%);" >
                  <span style="font-size:12px;filter:invert(50%);">
                    BARCELONA-EIBAR
                  </span>
                  <br>
                  <img src="ressources/img/flags/spainFlag.jpg" width="25px" height="20px"> Over 1.5 buts en 1ère période
                  <br>
                  <span style="font-size:12px;filter:invert(50%);">
                    <span style="font-weight:bold;">David Copenague</span>
                  </span>
                  <br>
                  <span style="font-size:8px;filter:invert(80%);">
                    <span style="font-weight:bold;">Il y a 1 minutes</span>
                  </span>
                </div>
            </div>
            <div style="width:20%; height:100%; padding-top:25px; padding-left:15px;">
                <button type="button" class="btn btn-light" style="width:75px; height:75px; font-weight:bold; font-size:20px;">2.20</button>
                <br>
                <img src="ressources/img/logo_tbc.png" alt="" style="margin-top:7px; width:75px; height:15px;">
            </div>
          </div>
          <!--end dernier pronostics -->
          <!-- Dernier pronostics -->
          <div style="width:100%; height:150px; background:white; margin-bottom:7.5px; display: flex; flex-wrap: nowrap;">
            <div style="width:20%; height:100%;">
                <div style="text-align:center;">
                  <img src="ressources/img/portrait.jpg" class="rounded-circle" width="75px" height="75px">
                  <div class="stars">
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  		<i class="fa fa-star gold"></i>
                  </div>
                </div>
            </div>
            <div style="width:80%; height:100%;">
                <div style="text-align:left; padding-top: 25px;">
                  <img src="ressources/img/basketball.png" width="10px" height="10px" style="filter:invert(50%);" >
                  <span style="font-size:12px;filter:invert(50%);">
                    BARCELONA-EIBAR
                  </span>
                  <br>
                  <img src="ressources/img/flags/spainFlag.jpg" width="25px" height="20px"> Over 1.5 buts en 1ère période
                  <br>
                  <span style="font-size:12px;filter:invert(50%);">
                    <span style="font-weight:bold;">David Copenague</span>
                  </span>
                  <br>
                  <span style="font-size:8px;filter:invert(80%);">
                    <span style="font-weight:bold;">Il y a 1 minutes</span>
                  </span>
                </div>
            </div>
            <div style="width:20%; height:100%; padding-top:25px; padding-left:15px;">
                <button type="button" class="btn btn-light" style="width:75px; height:75px; font-weight:bold; font-size:20px;">2.20</button>
                <br>
                <img src="ressources/img/logo_tbc.png" alt="" style="margin-top:7px; width:75px; height:15px;">
            </div>
          </div>
          <!--end dernier pronostics -->
          <div style="width:100%; height:45px; margin-bottom:7.5px;">
              <center style="cursor:pointer;">Tous les pronos</center>
          </div>
          <div style="width:100%; height:450px; background:white; margin-bottom:7.5px;">
            <button type="button" class="btn btn-success">Direct</button>  <span style="font-weight:bold;">ÉVÉNEMENTS</span>
            <br>
            <!-- Direct -->
            <div style="width:100%; height :75px; float:left;">
              <div style=" width:100%;">
                <div class="loader loader-2" style="float:left;">
                </div>
                <div style="float:left; padding-top:35px; padding-right:35px;">
                  <span>Aswan FC</span>
                  <br>
                  <span>Ismaily SC</span>
                </div>
                <div style="float:right; padding-top:35px; padding-right:35px;">
                  <span>0</span>
                  <br>
                  <span>0</span>
                </div>
              </div>
            </div>
            <!-- End direct -->
            <!-- Direct -->
            <div style="width:100%; height :75px; float:left;">
              <div style=" width:100%;">
                <div class="loader loader-2" style="float:left;">
                </div>
                <div style="float:left; padding-top:35px; padding-right:35px;">
                  <span>Shandong Heroes</span>
                  <br>
                  <span>Liaoning Flying Leopards</span>
                </div>
                <div style="float:right; padding-top:35px; padding-right:35px;">
                  <span>100</span>
                  <br>
                  <span>108</span>
                </div>
              </div>
            </div>
            <!-- End direct -->
            <!-- Direct -->
            <div style="width:100%; height :75px; float:left;">
              <div style=" width:100%;">
                <div class="loader loader-2" style="float:left;">
                </div>
                <div style="float:left; padding-top:35px; padding-right:35px;">
                  <span>Zhejiang Golden Bulls</span>
                  <br>
                  <span>Qingdao Eagles</span>
                </div>
                <div style="float:right; padding-top:35px; padding-right:35px;">
                  <span>113</span>
                  <br>
                  <span>104</span>
                </div>
              </div>
            </div>
            <!-- End direct -->
            <!-- Direct -->
            <div style="width:100%; height :75px; float:left;">
              <div style=" width:100%;">
                <div class="loader loader-2" style="float:left;">
                </div>
                <div style="float:left; padding-top:35px; padding-right:35px;">
                  <span>Zhejiang Golden Bulls</span>
                  <br>
                  <span>Qingdao Eagles</span>
                </div>
                <div style="float:right; padding-top:35px; padding-right:35px;">
                  <span>113</span>
                  <br>
                  <span>104</span>
                </div>
              </div>
            </div>
            <!-- End direct -->
            <!-- Direct -->
            <div style="width:100%; height :75px; float:left;">
              <div style=" width:100%;">
                <div class="loader loader-2" style="float:left;">
                </div>
                <div style="float:left; padding-top:35px; padding-right:35px;">
                  <span>Zhejiang Golden Bulls</span>
                  <br>
                  <span>Qingdao Eagles</span>
                </div>
                <div style="float:right; padding-top:35px; padding-right:35px;">
                  <span>113</span>
                  <br>
                  <span>104</span>
                </div>
              </div>
            </div>
            <!-- End direct -->
          </div>
        </div>
        <div style="width:440px; height:800px;">
            <div style="width:100%; height:395px; background:white; ">
              <div style="width:100%; height:30%; padding:15px;">
                <img src="ressources/img/worldContest/TOTY.png" width="120px" height="75px" style="float:left">
                <div style="float:left">
                  World Tipster Championship
                  <br>
                  <span style="font-weight:bold; font-size:12px;filter:invert(50%);">Classement actuel 1.juil. - 1.juil</span>
                </div>
              </div>
              <div class="container" style="height:20%;">
                <div class="row">
                  <div class="col-sm-1">
                    <span style="font-size:12px;filter:invert(50%);">
                      <span style="font-weight:bold;">1</span>
                    </span>
                  </div>
                  <div class="col-sm-4">
                    <div style="text-align:center;">
                        <img src="ressources/img/portrait.jpg" class="rounded-circle" width="45px" height="45px">
                        <br>
                        <span style="font-size:10px;font-weight:bold; color:rgb(248, 27, 100);">David Copenague</span>
                        <div class="rating">
                          <div class="stars" >
                              <i class="fa fa-star gold star-min" ></i>
                              <i class="fa fa-star gold star-min"></i>
                              <i class="fa fa-star gold star-min"></i>
                              <i class="fa fa-star gold star-min"></i>
                              <i class="fa fa-star gold star-min"></i>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                    +9,080.2
                    <br>
                    Profit
                  </div>
                  <div class="col-sm-1">
                  </div>
                  <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                    16116
                    Pronostics
                  </div>
                  <div class="col-sm-4">
                      <button type="button" class="btn btn-info" style="font-size:15px; margin-top:15px; margin-left:45px;">Suivre</button>
                  </div>
                </div>
              </div>
              <div class="trait_dessus"></div>
              <div class="container" style="height:20%;">
                <div class="row">
                  <div class="col-sm-1">
                    <span style="font-size:12px;filter:invert(50%);">
                      <span style="font-weight:bold;">2</span>
                    </span>
                  </div>
                  <div class="col-sm-4">
                    <div style="text-align:center;">
                        <img src="ressources/img/portrait.jpg" class="rounded-circle" width="45px" height="45px">
                        <br>
                        <span style="font-size:10px;font-weight:bold; color:rgb(248, 27, 100);">David Copenague</span>
                        <div class="rating">
                          <div class="stars" >
                              <i class="fa fa-star gold star-min" ></i>
                              <i class="fa fa-star gold star-min"></i>
                              <i class="fa fa-star gold star-min"></i>
                              <i class="fa fa-star gold star-min"></i>
                              <i class="fa fa-star gold star-min"></i>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                    +9,080.2
                    <br>
                    Profit
                  </div>
                  <div class="col-sm-1">
                  </div>
                  <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                    16116
                    Pronostics
                  </div>
                  <div class="col-sm-4">
                      <button type="button" class="btn btn-info" style="font-size:15px; margin-top:15px; margin-left:45px;">Suivre</button>
                  </div>
                </div>
              </div>
              <div class="trait_dessus"></div>
              <div class="container" style="height:20%;">
                <div class="row">
                  <div class="col-sm-1">
                    <span style="font-size:12px;filter:invert(50%);">
                      <span style="font-weight:bold;">3</span>
                    </span>
                  </div>
                  <div class="col-sm-4">
                    <div style="text-align:center;">
                        <img src="ressources/img/portrait.jpg" class="rounded-circle" width="45px" height="45px">
                        <br>
                        <span style="font-size:10px;font-weight:bold; color:rgb(248, 27, 100);">David Copenague</span>
                        <div class="rating">
                          <div class="stars" >
                              <i class="fa fa-star gold star-min" ></i>
                              <i class="fa fa-star gold star-min"></i>
                              <i class="fa fa-star gold star-min"></i>
                              <i class="fa fa-star gold star-min"></i>
                              <i class="fa fa-star gold star-min"></i>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                    +9,080.2
                    <br>
                    Profit
                  </div>
                  <div class="col-sm-1">
                  </div>
                  <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                    16116
                    Pronostics
                  </div>
                  <div class="col-sm-4">
                      <button type="button" class="btn btn-info" style="font-size:15px; margin-top:15px; margin-left:45px;">Suivre</button>
                  </div>
                </div>
              </div>
              <div style="width:100%; height:2.5%">
                  <center style="cursor:pointer">Voir classement complet</center>
              </div>
            </div>
            <!-- Barre -->
            <div style="width:100%; height:10px;"></div>
            <!-- End Barre -->
            <div style="width:440px; height:800px;">
                <div style="width:100%; height:395px; background:white; ">
                  <div style="width:100%; height:30%; padding:15px;">
                    <img src="ressources/img/worldContest/TOTM.png" width="100px" height="75px" style="float:left">
                    <div style="float:left">
                      Compétition de pronostiqueurs
                      <br>
                      <span style="font-weight:bold; font-size:12px;filter:invert(50%);">Classement actuel 1.juil. - 1.juil</span>
                    </div>
                  </div>
                  <div class="container" style="height:20%;">
                    <div class="row">
                      <div class="col-sm-1">
                        <span style="font-size:12px;filter:invert(50%);">
                          <span style="font-weight:bold;">1</span>
                        </span>
                      </div>
                      <div class="col-sm-4">
                        <div style="text-align:center;">
                            <img src="ressources/img/portrait.jpg" class="rounded-circle" width="45px" height="45px">
                            <br>
                            <span style="font-size:10px;font-weight:bold; color:rgb(248, 27, 100);">David Copenague</span>
                            <div class="rating">
                              <div class="stars" >
                                  <i class="fa fa-star gold star-min" ></i>
                                  <i class="fa fa-star gold star-min"></i>
                                  <i class="fa fa-star gold star-min"></i>
                                  <i class="fa fa-star gold star-min"></i>
                                  <i class="fa fa-star gold star-min"></i>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                        +9,080.2
                        <br>
                        Profit
                      </div>
                      <div class="col-sm-1">
                      </div>
                      <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                        16116
                        Pronostics
                      </div>
                      <div class="col-sm-4">
                          <button type="button" class="btn btn-info" style="font-size:15px; margin-top:15px; margin-left:45px;">Suivre</button>
                      </div>
                    </div>
                  </div>
                  <div class="trait_dessus"></div>
                  <div class="container" style="height:20%;">
                    <div class="row">
                      <div class="col-sm-1">
                        <span style="font-size:12px;filter:invert(50%);">
                          <span style="font-weight:bold;">2</span>
                        </span>
                      </div>
                      <div class="col-sm-4">
                        <div style="text-align:center;">
                            <img src="ressources/img/portrait.jpg" class="rounded-circle" width="45px" height="45px">
                            <br>
                            <span style="font-size:10px;font-weight:bold; color:rgb(248, 27, 100);">David Copenague</span>
                            <div class="rating">
                              <div class="stars" >
                                  <i class="fa fa-star gold star-min" ></i>
                                  <i class="fa fa-star gold star-min"></i>
                                  <i class="fa fa-star gold star-min"></i>
                                  <i class="fa fa-star gold star-min"></i>
                                  <i class="fa fa-star gold star-min"></i>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                        +9,080.2
                        <br>
                        Profit
                      </div>
                      <div class="col-sm-1">
                      </div>
                      <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                        16116
                        Pronostics
                      </div>
                      <div class="col-sm-4">
                          <button type="button" class="btn btn-info" style="font-size:15px; margin-top:15px; margin-left:45px;">Suivre</button>
                      </div>
                    </div>
                  </div>
                  <div class="trait_dessus"></div>
                  <div class="container" style="height:20%;">
                    <div class="row">
                      <div class="col-sm-1">
                        <span style="font-size:12px;filter:invert(50%);">
                          <span style="font-weight:bold;">3</span>
                        </span>
                      </div>
                      <div class="col-sm-4">
                        <div style="text-align:center;">
                            <img src="ressources/img/portrait.jpg" class="rounded-circle" width="45px" height="45px">
                            <br>
                            <span style="font-size:10px;font-weight:bold; color:rgb(248, 27, 100);">David Copenague</span>
                            <div class="rating">
                              <div class="stars" >
                                  <i class="fa fa-star gold star-min" ></i>
                                  <i class="fa fa-star gold star-min"></i>
                                  <i class="fa fa-star gold star-min"></i>
                                  <i class="fa fa-star gold star-min"></i>
                                  <i class="fa fa-star gold star-min"></i>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                        +9,080.2
                        <br>
                        Profit
                      </div>
                      <div class="col-sm-1">
                      </div>
                      <div class="col-sm-1" style="font-size:10px; font-weight:bold; color:rgb(248, 27, 100); padding-top:15px;">
                        16116
                        Pronostics
                      </div>
                      <div class="col-sm-4">
                          <button type="button" class="btn btn-info" style="font-size:15px; margin-top:15px; margin-left:45px;">Suivre</button>
                      </div>
                    </div>
                  </div>
                  <div style="width:100%; height:2.5%">
                      <center style="cursor:pointer">Voir classement complet</center>
                  </div>
                </div>
        </div>
      </div>
    </div>
    <!-- body end -->
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
