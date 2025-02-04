<?php 
  class Animal {
    private $age;
    private $prenom;
    public function __construct() {
      $this->age = 0;
      $this->prenom = "";
    }
    public function afficherAge() {
      return "L'age de l'animal " .$this->age;
    }
    public function vieillir() {
      $this->age++;
      return "L'age de l'animal ".$this->age ."ans";
    }
    public function nommer($nom) {
      return "L'animal se nomme " .$nom;
    }
  }
  $animal = new Animal();
  echo $animal->afficherAge();
  echo '<br>';
  echo $animal->vieillir();
  echo '<br>';
  echo $animal->nommer('Luna');




?>