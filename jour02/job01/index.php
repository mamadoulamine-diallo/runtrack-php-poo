<?php 
  class Rectangle {
    private $longueur;
    private $largeur;
    public function __construct() {
      $this->longueur = 10;
      $this->largeur = 5;
    }
    public function __get($att) {
      return $this->$att;
    }
    public function __set($att,$val) {
      $this->$att=$val;
    }
  }
  $rectangles = new Rectangle();
  echo $rectangles->longueur;
  echo '<br>';
  echo $rectangles->largeur;
  echo '<br>';
  echo $rectangles->longueur = 30;
  echo '<br>';
  echo $rectangles->largeur = 20;

?>