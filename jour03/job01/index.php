<?php 
  class Personne {
    protected $age;
    public function __construct() {
      $this->age = 14;
    }
    public function afficherAge() {
      $age = $this->age;
      echo $age ." ans";
    }
    public function bonjour() {
      echo "Hello";
    }
    public function modifierAge(int$val) {
      return $this->age = $val;
    }
  }

  $personne = new Personne();
  $personne->afficherAge();
  echo '<br>';


  class Eleve extends Personne {
    public function allerEnCours() {
      echo "je vais en cours";
    }
    public function afficherAge() {
      echo "j'ai ".$this->age ." ans";
    }
  }

  $eleve = new Eleve();
  $eleve->afficherAge();



  class Professeur {
    private $matiereEnseignee;
    public function __construct() {
      $this->matiereEnseignee = "philo";
    }
    public function enseigner() {
      echo "Le cours va commencer";
    }
  }



?>