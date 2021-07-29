<?php

include 'connexion.php';

if(!key_exists('id', $_GET) || !ctype_digit($_GET['id'])){
    header('location: accueil.php');
    exit();
}

$rep = $bdd->prepare('SELECT *,DATE_FORMAT(CreationTimestamp, "%W,%e, %M, %Y") AS date  FROM post
INNER JOIN category ON post.Category_Id = category.Id
INNER JOIN author ON  post.author_Id = author.Id
WHERE post.Id = ?
');

$rep->execute([$_GET['id']]);

$article=$rep->fetch();

////////////// deuxièùe requette //////////////////

$comm = $bdd->prepare('SELECT * FROM comment WHERE Post_Id = ?');

$comm->execute([$_GET['id']]);

$commentaires=$comm->fetchAll();

//var_dump($commentaires);


////////////////////////////////////////////////////////

$template = 'show-post-details.phtml';

include 'layout.phtml';