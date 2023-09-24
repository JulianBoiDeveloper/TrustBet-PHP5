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
      <!-- Jquery -->
      <script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>
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
        window.onload = function(){

          document.querySelector(".preloader").style.display = "none";
          document.getElementById("page-pronostics").style.display = "block";
          document.getElementById("page-statistics").style.display = "none";
          document.getElementById("page-poster").style.display = "none";

        }

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
        function showMenu(nameMenu,id) {
          var menu = document.getElementById(nameMenu);
          document.getElementById("page-pronostics").style.display = "none";
          document.getElementById("page-statistics").style.display = "none";
          document.getElementById("page-poster").style.display = "none";
          if(nameMenu == "page-pronostics"){
              menu.style.display = "block";
          }
          if(nameMenu == "page-statistics"){
             menu.style.display = "block";
          }
          if(nameMenu == "page-poster"){
            menu.style.display = "block";
          }
          var menu_general = document.getElementsByClassName("menu_active");
          if(id == '1'){
            menu_general[0].classList.add('active-menu');
            menu_general[1].classList.remove('active-menu');
            menu_general[2].classList.remove('active-menu');
          }
          if(id == '2'){
            menu_general[0].classList.remove('active-menu');
            menu_general[1].classList.add('active-menu');
            menu_general[2].classList.remove('active-menu');
          }
          if(id == '3'){
            menu_general[0].classList.remove('active-menu');
            menu_general[1].classList.remove('active-menu');
            menu_general[2].classList.add('active-menu');
          }
        }
        // Menu up down
        $(document).ready(function() {
          $(".set > button.accordion-stats").on("click", function() {
            if ($(this).hasClass("active")) {
              $(this).removeClass("active");
              $(this)
                .siblings(".content")
                .slideUp(200);
              $(".set > button.accordion-stats i")
                .removeClass("fa-sort-up")
                .addClass("fa-sort-down");
            } else {
              $(".set > button.accordion-stats i")
                .removeClass("fa-sort-up")
                .addClass("fa-sort-down");
              $(this)
                .find("i")
                .removeClass("fa-sort-down")
                .addClass("fa-sort-up");
              $(".set > button.accordion-stats").removeClass("active");
              $(this).addClass("active");
              $(".content").slideUp(200);
              $(this)
                .siblings(".content")
                .slideDown(200);
            }
          });
        });
        // Menu up down prono
        $(document).ready(function() {
          $(".set > button.accordion-prono").on("click", function() {
            if ($(this).hasClass("active")) {
              $(this).removeClass("active");
              $(this)
                .siblings(".content")
                .slideUp(200);
              $(".set > button.accordion-prono i")
              .removeClass("fa-minus")
              .addClass("fa-plus");
            } else {
              $(".set > button.accordion-prono i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
              $(this)
                .find("i")
                .removeClass("fa-plus")
                .addClass("fa-minus");
              $(".set > button.accordion-prono").removeClass("active");
              $(this).addClass("active");
              $(".content").slideUp(200);
              $(this)
                .siblings(".content")
                .slideDown(200);
            }
          });
        });


      </script>
      <style media="screen">
        /* Menu up down */

        .set{
          position: relative;
          width: 100%;
          height: auto;
          background-color: #f5f5f5;
        }
        .set > button{
          display: block;
          padding: 10px 15px;
          text-decoration: none;
          color: #555;
          font-weight: 600;
          border-bottom: 1px solid #ddd;
          -webkit-transition:all 0.2s linear;
          -moz-transition:all 0.2s linear;
          transition:all 0.2s linear;
          width:100%;
          text-align:left;
          font-size: 15px;
        }
        .set > button i{
          float: right;
          margin-top: 2px;
        }

        .content{
          background-color: #fff;
          border-bottom: 1px solid #ddd;
          display:none;
        }
        .content p{
          padding: 10px 15px;
          margin: 0;
          color: #333;
        }
        /* Active menu  */
        .active-menu{
          border-bottom: 1px solid rgb(248, 27, 100);
        }
        /* Stars */
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
    <!--End Header -->
    <!-- Content -->
    <div style="width:100%; height:800px; background:#2e292e;">
      <img src="ressources/img/background/background.jpg" alt="" style="position:absolute; width:100%; height: 800px; opacity:0.1;"/>
      <div style="width:1200px; margin:0 auto; height:800px; color:white; overflow:hidden;">

        <div class="container">
          <div class="row">
              <div class="col-sm-4" style="padding-top:200px; font-size:55px;">
                <center>EVERTON</center>
                <br>
                <br>
                <center>
                    <span style="font-size:15px;">18 Pronos</span><br>
                    <button type="button" class="btn btn-light" style="width:75px; height:75px; font-weight:bold; font-size:20px;">2.20</button>
                    <br>
                    <img src="ressources/img/logo_tbc.png" alt="" style="margin-top:7px; width:75px; height:15px;"/>
                </center>

              </div>
              <div class="col-sm-4">
                  <br>
                  <br>
                  <center style="font-size:25px; font-weight: bold;">Pronostics Everton vs West Ham</center>
                  <center><span style="font-size:20px;filter:invert(25%); font-weight:bold;">Première League</span></center>
                  <br>
                  <center>01 JANVIER 2021</center>
                  <br>
                  <center style="font-size:35px; font-weight: bold;">18:00</center>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <center>
                      <span style="font-size:15px;">18 Pronos</span><br><br>
                      <button type="button" class="btn btn-light" style="width:75px; height:75px; font-weight:bold; font-size:20px;">2.20</button>
                      <br>
                      <br>
                      <img src="ressources/img/logo_tbc.png" alt="" style="margin-top:7px; width:75px; height:15px;"/>
                  </center>
              </div>
              <div class="col-sm-4" style="padding-top:200px; font-size:55px;">
                <center>WEST HAM</center>
                <br>
                <br>
                <center>
                    <span style="font-size:15px;">18 Pronos</span><br>
                    <button type="button" class="btn btn-light" style="width:75px; height:75px; font-weight:bold; font-size:20px;">2.20</button>
                    <br>
                    <img src="ressources/img/logo_tbc.png" alt="" style="margin-top:7px; width:75px; height:15px;"/>
                </center>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div style="width:100%; height:65px; background:white; border-bottom:1px solid lightgray;">
        <div class="container">
          <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
              <center>
              <ul style="list-style-type:none;margin:0;padding:0; font-size:20px; padding:25px;">
                 <li style="display: inline; margin-left: 20px;" id="menu_active" class="menu_active active-menu"><a onclick="showMenu('page-pronostics','1')" style="cursor:pointer;" onmouseover="this.style.color='#F81B64'" onmouseout="this.style.color='black'">Pronostics</a></li>
                 <li style="display: inline; margin-left: 20px;" id="menu_active" class="menu_active"><a onclick="showMenu('page-statistics','2')" style="cursor:pointer;" onmouseover="this.style.color='#F81B64'" onmouseout="this.style.color='black'">Stats</a></li>
                 <li style="display: inline; margin-left: 20px;" id="menu_active" class="menu_active"><a onclick="showMenu('page-poster','3')" style="cursor:pointer;" onmouseover="this.style.color='#F81B64'" onmouseout="this.style.color='black'">Poster un prono</a></li>
              </ul>
            </center>
            </div>
            <div class="col-sm-3"></div>
          </div>
        </div>
    </div>
    <!-- Pronostics -->
    <div style="width:100%; background:#EFEFEF;" id="page-pronostics">
        <div style="width:1200px; margin:0 auto;">
            <div class="container">
                <div class="row">
                    <!-- Colonne de gauche -->
                    <div class="col-sm-4" style="width:100%;">
                        <div style="background:white; padding:3%;  margin:3%; float:left;">
                          <span style="font-size:25px;font-weight:bold;" >MEILLEUR PRONOSTIC EVERTON VS WEST HAM</span>
                          <div style="float:left; height:150px;">
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
                          <div style="float:right; height:150px; position:relative;top:15px;left:-35px;">
                              David Copenague
                              <br>
                              <span style="font-size:12px;filter:invert(25%); font-weight:bold;">Pronostiqueurs</span>
                          </div>
                          <div style="float:left; clear:both;">
                            <span style="font-size:15px;font-weight:bold; text-transform: uppercase;" >Everton vainqueur , Draw No Bet</span>
                            <br>
                            <span style="font-size:10px;filter:invert(25%); font-weight:bold;">Placé à: 1.50 - 29 déc. 16:45</span>
                            <br>
                            <br>
                            <span style="font-size:12px;">Ici nous avons a trés interresant match du Premier League ou l'on retrouve l'équipe d'Everton (classée 3éme avec 29 points) oppossée a celle du West Ham (classée 10éme avec 22 points). Everton ont gagné 3 des 4 derniers matchs contre West Ham et je vais proposer la victoire DNB de Everton.
                            <br>
                            <br>
                            <span style="font-size:16px; font-weight:bold;">2.00</span> <img src="ressources/img/logo_tbc.png" alt="" style="margin-left:7px; width:75px; height:15px;"> <button type="button" class="btn btn-info" style="font-size:15px; margin-left:120px;">Parier</button>
                          </div>
                        </div>
                        <div style="background:white; padding:3%;  margin:3%; margin-top:25px; float:left; width:95%;">
                          Meilleurs Pronostiqueurs Premier League
                          <div class="container" style="height:20%;">
                              <div class="row">
                                <div class="col-sm-1">
                                  <span style="font-size:12px;filter:invert(50%);">
                                    <span style="font-weight:bold;">1</span>
                                  </span>
                                </div>
                                <div class="col-sm-8">
                                  <div style="float:left;">
                                      <img src="ressources/img/portrait.jpg" class="rounded-circle" width="45px" height="45px">
                                      <span style="font-size:10px;font-weight:bold; color:rgb(248, 27, 100);">David Copenague</span>
                                      <div class="rating" style="position:relative; top:-15px;">
                                        <div class="stars">
                                            <i class="fa fa-star gold star-min"></i>
                                            <i class="fa fa-star gold star-min"></i>
                                            <i class="fa fa-star gold star-min"></i>
                                            <i class="fa fa-star gold star-min"></i>
                                            <i class="fa fa-star gold star-min"></i>
                                        </div>
                                      </div>
                                  </div>
                                  <div style="float:right; position:relative; top:15px;">
                                      <img src="ressources/img/flags/spainFlag.jpg" width="25px" height="20px">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="container" style="height:20%;">
                                <div class="row">
                                  <div class="col-sm-1">
                                    <span style="font-size:12px;filter:invert(50%);">
                                      <span style="font-weight:bold;">2</span>
                                    </span>
                                  </div>
                                  <div class="col-sm-8">
                                    <div style="float:left;">
                                        <img src="ressources/img/portrait.jpg" class="rounded-circle" width="45px" height="45px">
                                        <span style="font-size:10px;font-weight:bold; color:rgb(248, 27, 100);">David Copenague</span>
                                        <div class="rating" style="position:relative; top:-15px;">
                                          <div class="stars">
                                              <i class="fa fa-star gold star-min"></i>
                                              <i class="fa fa-star gold star-min"></i>
                                              <i class="fa fa-star gold star-min"></i>
                                              <i class="fa fa-star gold star-min"></i>
                                              <i class="fa fa-star gold star-min"></i>
                                          </div>
                                        </div>
                                    </div>
                                    <div style="float:right; position:relative; top:15px;">
                                        <img src="ressources/img/flags/spainFlag.jpg" width="25px" height="20px">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="container" style="height:20%;">
                                  <div class="row">
                                    <div class="col-sm-1">
                                      <span style="font-size:12px;filter:invert(50%);">
                                        <span style="font-weight:bold;">3</span>
                                      </span>
                                    </div>
                                    <div class="col-sm-8">
                                      <div style="float:left;">
                                          <img src="ressources/img/portrait.jpg" class="rounded-circle" width="45px" height="45px">
                                          <span style="font-size:10px;font-weight:bold; color:rgb(248, 27, 100);">David Copenague</span>
                                          <div class="rating" style="position:relative; top:-15px;">
                                            <div class="stars">
                                                <i class="fa fa-star gold star-min"></i>
                                                <i class="fa fa-star gold star-min"></i>
                                                <i class="fa fa-star gold star-min"></i>
                                                <i class="fa fa-star gold star-min"></i>
                                                <i class="fa fa-star gold star-min"></i>
                                            </div>
                                          </div>
                                      </div>
                                      <div style="float:right; position:relative; top:15px;">
                                          <img src="ressources/img/flags/spainFlag.jpg" width="25px" height="20px">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>
                    <!-- Colonne du milieu -->
                    <div class="col-sm-4">
                      <div style="width:98%; padding:1%; padding-top:15px;">
                          <span style="font-size:15px;font-weight:bold; text-transform: uppercase;" >Pronostics</span>
                      </div>
                      <div style="background:white; padding:1%;  margin-bottom: 10px; margin-top:25px; float:left; width:100%;">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-9">
                                  <span style="font-size:12px;filter:invert(50%);">
                                    <span style="font-weight:bold;">Everton-West Ham United </span>
                                  </span>
                                  <br>
                                  <span style="font-size:20px;">
                                    <span style="font-weight:bold;">Everton vainqueur</span>
                                  </span>
                                  <br>
                                  <span style="font-size:10 px;">18 pronos</span>
                                </div>
                                <div class="col-sm-3">
                                  <button type="button" class="btn btn-light" style=" padding: 5px; margin: 5px; width:65px; height:45px; font-weight:bold; font-size:20px;">2.20</button>
                                  <br>
                                  <img src="ressources/img/logo_tbc.png" alt="" style="margin-left:7px; width:75px; height:15px;">
                                </div>
                            </div>

                          </div>
                        </div>
                        <div style="background:white; padding:1%;  margin-bottom: 10px; float:left; width:100%;">
                          <div class="container">
                            <div class="row">
                              <div class="col-sm-9">
                                    <span style="font-size:12px;filter:invert(50%);">
                                      <span style="font-weight:bold;">Everton-West Ham United </span>
                                    </span>
                                    <br>
                                    <span style="font-size:20px;">
                                      <span style="font-weight:bold;">Everton vainqueur</span>
                                    </span>
                                    <br>
                                    <span style="font-size:10 px;">18 pronos</span>
                                  </div>
                                  <div class="col-sm-3">
                                    <button type="button" class="btn btn-light" style=" padding: 5px; margin: 5px; width:65px; height:45px; font-weight:bold; font-size:20px;">2.20</button>
                                    <br>
                                    <img src="ressources/img/logo_tbc.png" alt="" style="margin-left:7px; width:75px; height:15px;">
                                  </div>
                              </div>

                            </div>
                          </div>
                          <div style="background:white; padding:1%;  margin-bottom: 10px; float:left; width:100%;">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm-9">
                                      <span style="font-size:12px;filter:invert(50%);">
                                        <span style="font-weight:bold;">Everton-West Ham United </span>
                                      </span>
                                      <br>
                                      <span style="font-size:20px;">
                                        <span style="font-weight:bold;">Everton vainqueur</span>
                                      </span>
                                      <br>
                                      <span style="font-size:10 px;">18 pronos</span>
                                    </div>
                                    <div class="col-sm-3">
                                      <button type="button" class="btn btn-light" style=" padding: 5px; margin: 5px; width:65px; height:45px; font-weight:bold; font-size:20px;">2.20</button>
                                      <br>
                                      <img src="ressources/img/logo_tbc.png" alt="" style="margin-left:7px; width:75px; height:15px;">
                                    </div>
                                </div>

                              </div>
                            </div>
                            <div style="width:98%; padding:1%; padding-top:15px;">
                                <span style="font-size:15px;font-weight:bold; text-transform: uppercase;" >Les événements à venir</span>
                                <br>
                                <div style="background:white; padding:1%;  margin-bottom: 10px; margin-top:25px; float:left; width:100%;">
                                  <span style="font-size:12px;filter:invert(50%);">
                                    <span style="font-weight:bold; margin-left:5px;">vendredi 1 janvier 2021</span>
                                  </span>
                                <hr>
                                <div class="container" style="height:35px;">
                                  <div class="row">
                                    <div class="col-sm-2">
                                        <center style="font-size:20px; font-weight: bold;">18:00</center>
                                    </div>
                                    <div class="col-sm-6" style="margin:5px; margin-top:-7.5px; margin-left: 15px;">
                                         Everton
                                         <br>
                                         West Ham
                                    </div>
                                    <div class="col-sm-3">
                                        <span style="font-size:10px;">12 pronos</span>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="container" style="height:35px;">
                                  <div class="row">
                                    <div class="col-sm-2">
                                        <center style="font-size:20px; font-weight: bold;">20:00</center>
                                    </div>
                                    <div class="col-sm-6" style="margin:5px; margin-top:-7.5px; margin-left: 15px;">
                                         Everton
                                         <br>
                                         West Ham
                                    </div>
                                    <div class="col-sm-3">
                                        <span style="font-size:10px;">12 pronos</span>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="container" style="height:35px;">
                                  <div class="row">
                                    <div class="col-sm-2">
                                        <center style="font-size:20px; font-weight: bold;">21:00</center>
                                    </div>
                                    <div class="col-sm-6" style="margin:5px; margin-top:-7.5px; margin-left: 15px;">
                                         Everton
                                         <br>
                                         West Ham
                                    </div>
                                    <div class="col-sm-3">
                                        <span style="font-size:10px;">12 pronos</span>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div style="background:white; padding:1%;  margin-bottom: 10px; float:left; width:100%;">
                                  <span style="font-size:12px;filter:invert(50%);">
                                    <span style="font-weight:bold; margin-left:5px;">samedi 2 janvier 2021</span>
                                  </span>
                                <hr>
                                <div class="container" style="height:35px;">
                                  <div class="row">
                                    <div class="col-sm-2">
                                        <center style="font-size:20px; font-weight: bold;">18:00</center>
                                    </div>
                                    <div class="col-sm-6" style="margin:5px; margin-top:-7.5px; margin-left: 15px;">
                                         Everton
                                         <br>
                                         West Ham
                                    </div>
                                    <div class="col-sm-3">
                                        <span style="font-size:10px;">12 pronos</span>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <br>
                                <button type="button" class="btn btn-info" style="font-size:15px; margin-left:120px;">Charger plus</button>
                              </div>
                          </div>
                    </div>
                </div>
                <!-- Colonne de droite -->
                <div class="col-sm-4">
                  <div style="width:98%; padding:1%; padding-top:15px;">
                      <span style="font-size:15px;font-weight:bold; text-transform: uppercase; ">Premier League</span>
                      <div class="container" style="margin-top:5px;  background:white;">
                          <div class="row">
                            <div class="col-sm-1" style="height:25px; margin-top:15px;">
                              <span style="font-size:18px;filter:invert(50%); ">
                                <span style="font-weight:bold; margin:10px; "><i class="fas fa-trophy"></i></span>
                              </span>
                            </div>
                            <div class="col-sm-6" style="height:25px; margin-top:15px;">

                            </div>
                            <span style="font-size:18px;filter:invert(50%); margin-top:15px;">
                              <span style="font-weight:bold;"><i class="far fa-futbol"></i></span>
                            </span>
                            <span style="font-size:18px;filter:invert(50%); margin-top:15px; margin-left:55px;">
                              <span style="font-weight:bold;"><i class="fas fa-award"></i></span>
                            </span>
                          </div>
                          <div class="row">
                            <div class="col-sm-1" style="height:25px; margin-top:15px;">
                              <span style="font-size:18px;filter:invert(50%); ">
                                <span style="font-weight:bold; margin:10px; ">1</span>
                              </span>
                            </div>
                            <div class="col-sm-6" style="height:25px; margin-top:15px;">
                              	Liverpool
                            </div>
                            <span style="font-size:18px;filter:invert(50%); margin-top:15px;">
                              <span style="font-weight:bold;">36</span>
                            </span>
                            <span style="font-size:18px;filter:invert(50%); margin-top:15px; margin-left:45px;">
                              <span style="font-weight:bold;">50</span>
                            </span>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-1" style="height:25px; margin-top:15px;">
                              <span style="font-size:18px;filter:invert(50%); ">
                                <span style="font-weight:bold; margin:10px; ">2</span>
                              </span>
                            </div>
                            <div class="col-sm-6" style="height:25px; margin-top:15px;">
                                Liverpool
                            </div>
                            <span style="font-size:18px;filter:invert(50%); margin-top:15px;">
                              <span style="font-weight:bold;">32</span>
                            </span>
                            <span style="font-size:18px;filter:invert(50%); margin-top:15px; margin-left:45px;">
                              <span style="font-weight:bold;">45</span>
                            </span>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-1" style="height:25px; margin-top:15px;">
                              <span style="font-size:18px;filter:invert(50%); ">
                                <span style="font-weight:bold; margin:10px; ">3</span>
                              </span>
                            </div>
                            <div class="col-sm-6" style="height:25px; margin-top:15px;">
                                Liverpool
                            </div>
                            <span style="font-size:18px;filter:invert(50%); margin-top:15px;">
                              <span style="font-weight:bold;">30</span>
                            </span>
                            <span style="font-size:18px;filter:invert(50%); margin-top:15px; margin-left:45px;">
                              <span style="font-weight:bold;">25</span>
                            </span>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-1" style="height:25px; margin-top:15px;">
                              <span style="font-size:18px;filter:invert(50%); ">
                                <span style="font-weight:bold; margin:10px; ">4</span>
                              </span>
                            </div>
                            <div class="col-sm-6" style="height:25px; margin-top:15px;">
                                Liverpool
                            </div>
                            <span style="font-size:18px;filter:invert(50%); margin-top:15px;">
                              <span style="font-weight:bold;">25</span>
                            </span>
                            <span style="font-size:18px;filter:invert(50%); margin-top:15px; margin-left:45px;">
                              <span style="font-weight:bold;">10</span>
                            </span>
                          </div>
                          <hr>
                        </div>

                        <span style="font-size:15px;font-weight:bold; text-transform: uppercase; ">Derniers résultats de la Premier League</span>
                        <div class="container" style="margin-top:5px;  background:white; padding:15px;">
                          <span style="font-weight:bold; margin-left:5px; filter:invert(50%);">vendredi 1 janvier 2021</span>
                          <hr>
                          <div class="row">
                            <div class="col-sm-6" style="margin:5px; margin-top:-7.5px; margin-left: 15px;">
                                 Everton
                                 <br>
                                 West Ham
                            </div>
                            <div class="col-sm-4" style="margin:5px; margin-top:-7.5px; margin-left: 15px;">
                                <span style="font-size:16px;">15</span>
                                <br>
                                <span style="font-size:16px;">15</span>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-6" style="margin:5px; margin-top:-7.5px; margin-left: 15px;">
                                 Everton
                                 <br>
                                 West Ham
                            </div>
                            <div class="col-sm-4" style="margin:5px; margin-top:-7.5px; margin-left: 15px;">
                                <span style="font-size:16px;">15</span>
                                <br>
                                <span style="font-size:16px;">15</span>
                            </div>
                          </div>
                          <hr>
                          <span style="font-weight:bold; margin-left:5px; filter:invert(50%);">samedi 2 janvier 2021</span>
                          <hr>
                          <div class="row">
                            <div class="col-sm-6" style="margin:5px; margin-top:-7.5px; margin-left: 15px;">
                                 Everton
                                 <br>
                                 West Ham
                            </div>
                            <div class="col-sm-4" style="margin:5px; margin-top:-7.5px; margin-left: 15px;">
                                <span style="font-size:16px;">15</span>
                                <br>
                                <span style="font-size:16px;">15</span>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
  </div>
    <div style="width:100%; background:#EFEFEF;" id="page-statistics">
      <div style="width:1200px; margin:0 auto;">
          <div class="container">
              <div class="row">
                  <!-- Colonne de gauche -->
                  <div class="col-sm-12">
                      <div style="width:98%; padding:1%; background:white; margin:15px;font-size:25px;">
                          <span style="font-weight:600">  Everton vs West Ham Stats </span>
                          <br>
                          <br>
                          <div class="accordion-container">
                            <div class="set">
                              <button class="accordion-stats">
                                Derniers événements contre
                                <i class="fa fa-sort-up"></i>
                              </button>
                              <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                            </div>
                            <div class="set">
                              <button class="accordion-stats">
                                Derniers matches Everton
                                <i class="fa fa-sort-up"></i>
                              </button>
                              <div class="content">
                                <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus. Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
                              </div>
                            </div>
                            <div class="set">
                              <button class="accordion-stats">
                                Derniers matches West Ham
                                <i class="fa fa-sort-up"></i>
                              </button>
                              <div class="content">
                                <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                            </div>
                            <div class="set">
                              <button class="accordion-stats">
                                Forme
                                <i class="fa fa-sort-up"></i>
                              </button>
                              <div class="content">
                                <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
                              </div>
                            </div>
                            <div class="set">
                              <button class="accordion-stats">
                                Classement
                                <i class="fa fa-sort-up"></i>
                              </button>
                              <div class="content">
                                <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
                              </div>
                            </div>
                          <div class="set">
                            <button class="accordion-stats">
                              Plus de / Moins de
                              <i class="fa fa-sort-up"></i>
                            </button>
                            <div class="content">
                              <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
                            </div>
                          </div>
                        <div class="set">
                          <button class="accordion-stats">
                            Handicap
                            <i class="fa fa-sort-up"></i>
                          </button>
                          <div class="content">
                            <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
                          </div>
                        </div>
                        <div class="set">
                          <button class="accordion-stats">
                            Performance Equipes
                            <i class="fa fa-sort-up"></i>
                          </button>
                          <div class="content">
                            <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
                          </div>
                        </div>
                        <div class="set">
                          <button class="accordion-stats">
                              Performance Joueurs
                            <i class="fa fa-sort-up"></i>
                          </button>
                          <div class="content">
                            <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
      </div>
    </div>
    <!-- Stats Menu -->
    <div style="width:100%; background:#EFEFEF;" id="page-poster">
      <div style="width:1200px; margin:0 auto;">
          <div class="container">
              <div class="row">
                  <!-- Colonne de gauche -->
                  <div class="col-sm-8">
                      <div style="width:98%; padding:1%;">
                          <div class="accordion-container">
                            <div class="set">
                              <button class="accordion-prono">
                                Principal
                                <i class="fa fa-plus"></i>
                              </button>
                              <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                            </div>
                            <div class="set">
                              <button class="accordion-prono">
                                Handicap Asiatique
                                <i class="fa fa-plus"></i>
                              </button>
                              <div class="content">
                                <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus. Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
                              </div>
                            </div>
                            <div class="set">
                              <button class="accordion-prono">
                                Buts
                                <i class="fa fa-plus"></i>
                              </button>
                              <div class="content">
                                <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                            </div>
                            <div class="set">
                              <button class="accordion-prono">
                                Mi-temps
                                <i class="fa fa-plus"></i>
                              </button>
                              <div class="content">
                                <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
                              </div>
                            </div>
                      </div>

                      </div>
                  </div>
                    <!-- Colonne de droite -->
                  <div class="col-sm-4">
                    <div style="width:98%; padding:1%;">
                      <div class="accordion-container">
                        <div class="set">
                          <button class="accordion-prono">
                            Handicap Européen
                            <i class="fa fa-plus"></i>
                          </button>
                          <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                          </div>
                        </div>
                        <div class="set">
                          <button class="accordion-prono">
                            Buteurs
                            <i class="fa fa-plus"></i>
                          </button>
                          <div class="content">
                            <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus. Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
                          </div>
                        </div>
                        <div class="set">
                          <button class="accordion-prono">
                            Autres
                            <i class="fa fa-plus"></i>
                          </button>
                          <div class="content">
                            <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                          </div>
                        </div>
                  </div>
                    </div>
                  </div>
              </div>
            </div>
      </div>
    </div>


    <!-- End Content -->
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
