<?php
    require_once('./classes/personnage.class.php'); #requis
    include('./commun/head.php');
    include('./commun/header.php');
?>
    <h1>Concept de la POO</h1>


<h2> Personnage : </h2>

<?php 

// personnage::HOMME personnage::FEMME appelle les constantes de classe se trouvant dans l'objet personnage
// permet de donner un nom à une valeur
$p1 = new Personnage("Luke","playerRobert.png",personnage::HOMME,true,personnage::FORCE_MAX,personnage::AGILITE_MIN);
$p2 = new Personnage("Katy","playerKaty.png",25,personnage::FEMME,personnage::FORCE_MIN,personnage::AGILITE_MAX);
$p3 = new Personnage("Marc","playerYves.png",33,personnage::HOMME,personnage::FORCE_MED,personnage::AGILITE_MED);
$persos = Personnage::getListePersonnage();
foreach ($persos as $perso ) {
    $perso->afficherMesInformationsTemplate();
    echo "<br/>-------------------------------<br/>";
}
?>


<?php
    include('./commun/footer.php');
?>