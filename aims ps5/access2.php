<?php

$pdo=new PDO('mysql:host=localhost;dbname=test_aims','root','');
$reponse=$pdo->query('SELECT * FROM ps5');
while($donnees = $reponse->fetch())
{
    echo '<p>' . $donnees['lieux d_achat'] . ' - ' . $donnees['Nom du produit'] . ' - ' . $donnees['Référence du produit']
     . ' - ' . $donnees['Catégorie'] . ' - ' . $donnees['Date d_achat'] . ' - ' . $donnees['Date de fin de garantie']
     . ' - ' . $donnees['Prix'] . ' - ' . $donnees['conseils d_entretiens du produit'] . ' - ' . $donnees['Photo du tiket d_achat']
     . ' - ' . $donnees['Manuel d_utilisation'] . '</p>';

}


?> 

