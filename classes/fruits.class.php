<?php
class Fruits{

    public static $allFruits=[];

    public $img;
    public $nom;
    public $poids;
    public $prix;

    const POIDS_MIN=130;
    const POIDS_MED=140;
    const POIDS_MAX=150;

    const PRIX_MIN=5;
    const PRIX_MED=10;
    const PRIX_MAX=15;


    function __construct($img,$nom,$poids,$prix){
        $this-> img  =$img;
        $this-> nom  =$nom;
        $this-> poids=$poids;
        $this-> prix =$prix;
        self::$allFruits[]=$this;
    }
        
    public function displayInfo(){
        echo "<img src='./asset/images/".$this->img."' alt='".$this->img."' />";
        echo "<p>Nom : ".$this->nom."</p>";
        echo "<p>Poids : ".$this->poids."</p>";
        echo "<p>Prix : ".$this->prix."</p>";
    }
    public static function getListeFruits() {
        return self::$allFruits;
    }
}
?>