<?php 
// objets
class Personnage{
    private $nom;
    private $img;
    private $age;
    private $sexe;
    private $force;
    private $agilite;

    // Constante de classe: permet de donner un nom à une valeur et à être réutiliser dans le code
    const HOMME=true;
    const FEMME=false;

    const FORCE_MAX= 6;
    const FORCE_MED= 5;
    const FORCE_MIN= 4;

    const AGILITE_MAX= 6;
    const AGILITE_MED= 5;
    const AGILITE_MIN= 4;

    function __construct($nom,$img,$age,$sexe,$force,$agilite){
        $this->nom = $nom;
        $this->img = $img;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
    }
//  GETTER permet de recupérer les données privé
function getNom(){return $this->nom;}
function getImg(){return $this->img;}
function getAge(){return $this->age;}
function getSexe(){return $this->sexe;}
function getForce(){return $this->force;}
function getAgilite(){return $this->agilite;}

//  SETTTER permet de modifier les données privé
    function setName($nom){$this->nom=$nom;}
    function setImg($img){$this->img=$img;}
    function setAge($age){$this->age=$age;}
    // force agilite et sexe non modifiable
    // function setSexe($sexe){$this->nom=$sexe;}
    // function setForce($force){$this->nom=$force;}
    // function setAgilite($agilite){$this->nom=$agilite;}

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