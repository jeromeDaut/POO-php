<?php
    require_once('./classes/personnage.class.php'); #requis
    include('./commun/head.php');
    include('./commun/header.php');
?>
    <h1>Concept de la POO</h1>


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