<?php

include 'connexion.php';

if(!key_exists('id', $_GET) || !ctype_digit($_GET['id'])){
    header('location:admin_posts_index.php');
    exit();
}

$query = $bdd->prepare('DELETE FROM `post`
WHERE Id = ?
');

$query->execute([$_GET['id']]);

header('location:admin_posts_index.php');
