<?php

  require 'program/router/Route.php';
  require 'exception/router/RouterException.php';
  class Router {

      private $url;
      private $routes = [];
      private $namedRoutes = [];

      public function __construct($url){
          $this->url = $url;
      }

      public function get($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'GET');
      }

      public function post($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'POST');
      }
      public function put($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'PUT');
      }
      public function patch($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'PATCH');
      }
      public function delete($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'DELETE');
      }
      public function copy($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'COPY');
      }
      public function head($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'HEAD');
      }
      public function options($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'OPTIONS');
      }
      public function link($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'LINK');
      }
      public function unlink($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'UNLINK');
      }
      public function purge($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'PURGE');
      }
      public function lock($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'LOCK');
      }
      public function unlock($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'UNLOCK');
      }
      public function propfind($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'PROPFIND');
      }
      public function view($path, $callable, $name = null){
          return $this->add($path, $callable, $name, 'VIEW');
      }

      private function add($path, $callable, $name, $method){
          $route = new Route($path, $callable);
          $this->routes[$method][] = $route;
          if(is_string($callable) && $name === null){
              $name = $callable;
          }
          if($name){
              $this->namedRoutes[$name] = $route;
          }
          return $route;
      }

      public function run(){
          if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
              throw new RouterException('REQUEST_METHOD does not exist');
          }
          foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
              if($route->match($this->url)){
                  return $route->call();
              }
          }
          include 'config/configuration_error.php';
          $path = '';
          require_once($path.$error404);

      }

      public function url($name, $params = []){
          if(!isset($this->namedRoutes[$name])){
              throw new RouterException('No route matches this name');
          }
          return $this->namedRoutes[$name]->getUrl($params);
      }

  }


 ?>
