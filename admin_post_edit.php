<?php

include 'connexion.php';

$query = $bdd->prepare('SELECT *
FROM post where Id = ?
');

$query->execute([$_GET['id']]);

$value = $query->fetch();

////////////////////// requette 2  category ///////////////////

$rep = $bdd->prepare('SELECT Id, Name
FROM category
');

$rep->execute();

$categories = $rep->fetchAll();


///////////////////// requette 3 author ////////////////


$reponse = $bdd->prepare('SELECT Id, LastName, FirstName
FROM author
');

$reponse->execute();

$auteurs = $reponse->fetchAll();




$template = 'admin_post_edit.phtml';
include 'layout.phtml';


