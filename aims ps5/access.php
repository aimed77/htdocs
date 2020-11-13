<?php

$emailform=$_POST['courrier'];
$mdpform=$_POST['mdp'];

$pdo=new PDO('mysql:host=localhost;dbname=test_aims','root','');
$query=$pdo->query('SELECT * FROM leban');

$resultat=$query->fetch(PDO::FETCH_ASSOC);

$emaildb = $resultat['courrier'];
$mdpdb = $resultat['mdp'];

if($emailform === $emaildb && $mdpform === $mdpdb){
    header('location:index.php');
}else{
    header('location:login.html');
}

?> 

<!-- access pour passer a la page suivante grace au localhost aimed/leban -->
<!-- si sa passe il va  dans le access2 avec le phpmyadmin test_aims/ps5 -->
<!-- sinon il reste ou il est -->