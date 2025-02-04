<?php 
  class Point {
    private $x;
    private $y;
    public function __construct($x,$y) {
      $this->x = $x;
      $this->y = $y;
    }
    public function afficherLesPoints() {
      echo 'coordonées : (' .$this->x .' , ' .$this->y .')';
    }
    public function afficherX() {
      return $this->x;
    }
    public function afficherY() {
      return $this->y;
    }
    public function changerX($nouveauX) {
      $this->x = $nouveauX;
      return $this->x;
    }
    public function changerY($nouveauY) {
      $this->y = $nouveauY;
      return $this->y;
    }
  }

  $points = new Point(5,7);
  $points->afficherLesPoints();
  echo '<br>';
  echo $points->afficherX();
  echo '<br>';
  echo $points->afficherY();
  echo '<br>';
  echo $points->changerX(2);
  echo '<br>';
  echo $points->changerY(3);



?>