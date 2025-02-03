<?php 
  class Personne {
    private $nom;
    private $prenom;
    public function __construct($prenom,$nom) {
      $this->prenom = $prenom;
      $this->nom = $nom;
    }
    public function sePresenter() {
      echo 'je suis ' . $this->prenom . ' ' . $this->nom;
    }
  }

  $personne1 = new Personne("Lamine","Dxallo");
  $personne1->sePresenter();
  echo "<br>";
  $personne1 = new Personne("Marcus","Garvey");
  $personne1->sePresenter();

?>