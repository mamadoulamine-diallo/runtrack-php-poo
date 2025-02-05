<?php 
  class Livre {
    private $titre;
    private $auteur;
    private $nombreDePages;
    public function __construct() {
      $this->titre = "Awaken The Giant Within";
      $this->auteur = "Tony Robbins";
      $this->nombreDePages = 700;
    }
    public function __get($att) {
      return $this->$att;
    }
    public function __set($att,$val) {
      if ($att ==="nombreDePages" AND $val < 0) {
        echo "le nombre doit etre un entier positif.<br>";
      } else {
        $this->$att = $val;
      }
      }
    }

  $livres = new Livre();
  echo $livres->titre;
  echo '<br>';
  echo $livres->auteur;
  echo '<br>';
  echo $livres->nombreDePages;
  echo '<br>';
  echo $livres->auteur = "Lamine";
  echo '<br>';
  echo $livres->titre = "PHP";
  echo '<br>';
  $livres->nombreDePages = -5;
  echo $livres->nombreDePages ."<br>";
  



?>