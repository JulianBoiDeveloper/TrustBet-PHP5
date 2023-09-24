<?php
include_once 'config/Provider.php';
require_once 'config/inc/AllModel.php';

abstract class PDOConnect extends PDO{
  public function __construct(){
    parent::__construct(Provider::$dsn, Provider::$login, Provider::$mdp);
    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  protected function cursorToObjectArray($curseur){
    $tab = $curseur->fetchAll(PDO::FETCH_CLASS, substr(get_class($this),0,-7));
    return $tab;
  }

  protected function cursorToObject($curseur){
    $curseur->setFetchMode(PDO::FETCH_CLASS, substr(get_class($this),0,-7));
    return $curseur->fetchAll(PDO::FETCH_CLASS);
  }
  protected function cursorToArrayNonObject($curseur){
    $tab = $curseur->fetchAll(PDO::FETCH_ASSOC);
    return $tab;
  }
}
