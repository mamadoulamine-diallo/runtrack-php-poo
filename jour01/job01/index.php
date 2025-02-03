<?php 
  class Operation {
    private $nombre1;
    private $nombre2;
    public function __construct() {
      $this->nombre1=1;
      $this->nombre2=2;
    }
    public function afficherNombre1() {
      echo $this->nombre1;
    }
    public function afficherNombre2() {
      echo $this->nombre2;
    }
  }

  $operations = new Operation();
  $operations-> afficherNombre1();
  echo "<br>";
  $operations-> afficherNombre2();
  
?>