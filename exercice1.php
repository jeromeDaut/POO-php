<?php
    include('./commun/head.php');
    include('./commun/header.php');
?>
    <h1>Concept de la POO</h1>
<?php 
// objets
class Personnage{
    public $nom;
    public $img;
    public $age;
    public $sexe;
    public $force;
    public $agilite;

    function __construct($nom,$img,$age,$sexe,$force,$agilite){
        $this->nom = $nom;
        $this->img = $img;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
    }

    public function afficherMesInfos(){
        echo "<b>Nom : </b>" . $this->nom ."<br/>";
        echo "<b>Age : </b>" . $this->age ."<br/>";
        echo "<b>Sexe</b> :";
        if($this->sexe){
            echo "Homme <br/>";
        } else {
            echo "Femme <br/>";
        }
        echo "<b>Force : </b>" . $this->force ."<br/>";
        echo "<b>Agilite : </b>" . $this->agilite ."<br/>";
    }

    public function afficherMesInformationsTemplate(){
        echo "<div class='gauche'>";
            echo "<img src = './asset/images/".$this->img."' alt = '".$this->img."' />";
        echo "</div>";
        echo "<div class='gauche'>";
        $this->afficherMesInfos();
        echo "</div>";
        echo "<div class='clearB'></div>";
    }
}

   
?>

<h2> Personnage : </h2>

<?php 
$p1 = new Personnage("Luke","playerRobert.png",27,true,5,4);
$p1->afficherMesInformationsTemplate();
echo "<br/>-------------------------------<br/>";
$p2 = new Personnage("Katy","playerKaty.png",25,false,3,6);
$p2->afficherMesInformationsTemplate();
echo "<br/>-------------------------------<br/>";
$p3 = new Personnage("Marc","playerYves.png",33,true,7,2);
$p3->afficherMesInformationsTemplate();
?>


<?php
    include('./commun/footer.php');
?>