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

    public function modifierAge(int $val) {
      $this->age = $val;
    }
  }

  $personne = new Personne();
 


  class Eleve extends Personne {
    public function allerEnCours() {
      echo "je vais en cours";
    }

    public function afficherAge() {
      echo "j'ai ".$this->age ." ans";
    }
    
  }

  $eleve = new Eleve();
  $eleve->bonjour();
  echo "<br>";
  $eleve->allerEnCours();
  echo "<br>";
  $eleve->modifierAge(15);
  $eleve->afficherAge();
  echo "<br>";


  class Professeur extends Personne {
    private $matiereEnseignee;

    public function __construct() {
      $this->matiereEnseignee = "philo";
    }

    public function enseigner() {
      echo "Le cours va commencer";
    }
  }

  $professeur = New Professeur();
  $professeur->modifierAge(40);
  $professeur->afficherAge();
  echo "<br>";
  $professeur->bonjour();
  echo "<br>";
  $professeur->enseigner();

?>