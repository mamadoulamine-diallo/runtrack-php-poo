<?php 
class Rectangle {
    protected $longueur;
    protected $largeur;

    public function __construct($longueur = 5, $largeur = 5) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function __get($att) {
        if (property_exists($this, $att)) {
            return $this->$att;
        }
        return null;
    }

    public function __set($att, $val) {
        if (property_exists($this, $att)) {
            $this->$att = $val;
        }
    }

    public function perimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }

    public function surface() {
        return $this->longueur * $this->largeur;
    }
}

// Test Rectangle
$rectangle = new Rectangle();
echo "Périmètre : " . $rectangle->perimetre() . "<br>";
echo "Surface : " . $rectangle->surface() . "<br>";

$rectangle->longueur = 10;
$rectangle->largeur = 10;

echo "Périmètre après modification : " . $rectangle->perimetre() . "<br>";
echo "Surface après modification : " . $rectangle->surface() . "<br>";

echo "<h3>Parallélépipède</h3>";

class Parallelepipede extends Rectangle {
    private $hauteur;

    public function __construct($longueur = 5, $largeur = 5, $hauteur = 5) {
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }

    public function volume() {
        return $this->longueur * $this->largeur * $this->hauteur;
    }
}

// Test Parallelepipede
$parallelepipede = new Parallelepipede();
echo "Volume : " . $parallelepipede->volume();
?>
