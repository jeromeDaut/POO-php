<?php
require_once('./classes/fruits.class.php'); #requis
include('./commun/head.php');
include('./commun/header.php');
?>
<h1>Liste de fruits et panier</h1>
<h2>FRUITS :</h2>
<?php
$pommePetite=  new Fruits("apple.png","pomme",Fruits::POIDS_MIN,Fruits::PRIX_MIN);
$pommeMoyenne= new Fruits("apple.png","pomme",Fruits::POIDS_MED,Fruits::PRIX_MED);
$pommeGrosse=  new Fruits("apple.png","pomme",Fruits::POIDS_MAX,Fruits::PRIX_MAX);

$cerisePetite=  new Fruits("cherry.png","cerises",Fruits::POIDS_MIN,Fruits::PRIX_MIN);
$ceriseMoyenne= new Fruits("cherry.png","cerises",Fruits::POIDS_MED,Fruits::PRIX_MED);
$cerisegrosse=  new Fruits("cherry.png","cerises",Fruits::POIDS_MAX,Fruits::PRIX_MAX);

$allFruits = Fruits::getListeFruits();

foreach ($allFruits as $fruit ) {
    $fruit->displayInfo();
    echo "<br/>-------------------------------<br/>";
}
?>
<?php
include('./commun/footer.php');
?>