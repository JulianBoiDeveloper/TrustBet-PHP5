<?php

require_once 'program/router/Router.php';

$router = new Router($_GET['url']);

// Page
$router->get('/', function(){
  header('Location: homeConnect');
});

// Accueil / Connexion
$router->get('/homeConnect', function(){
  $title = "Accueil connecté | Le pari sportif, autrement";
  include 'page/public/template/header_connect.php';
  include 'page/public/body/body_accueil.php';
  include 'page/public/template/footer.php';
});
// Accueil / Deconnexion
$router->get('/homeDisconnect', function(){
  $title = "Accueil déconnecté  | Le pari sportif, autrement";
  include 'page/public/template/header_disconnect.php';
  include 'page/public/body/body_accueil.php';
  include 'page/public/template/footer.php';
});
// Dashboard
$router->get('/dashboard', function(){
  $title = "Dashboard | Trust Bet Community";
  include 'page/public/template/header_disconnect.php';
  include 'page/public/body/body_dashboard.php';
  include 'page/public/template/footer.php';
});
// Profil
$router->get('/profil', function(){
  $name = "Julian Boi";
  $title = "Profil ".$name." | Trust Bet Community";
  include 'page/public/template/header_disconnect.php';
  include 'page/public/body/body_profil.php';
  include 'page/public/template/footer.php';
});
$router->get('/test_userpanel', function(){
    include 'page/public/user-panel/user_panel.php';
});
$router->get('/test_match', function(){
    include 'page/public/match/template.php';
});
$router->get('/test_status_v1', function(){
});
$router->get('/test_status_v2', function(){
  include 'page/public/maintenance/server.php';
});




$router->run();
