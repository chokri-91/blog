<?php

if(empty($_POST)){
    header('location:accueil.php');
    exit();
}


include 'connexion.php';

if( strlen($_POST['comment']) > 0)
{
    $new = $bdd->prepare('INSERT INTO comment(NickName, Contents, CreationTimestamp, Post_Id)
    VALUES(?,?,CURRENT_DATE(),?)');
    $new->execute([$_POST['pseudo'], $_POST['comment'], $_POST['post_id']]);
}

header('location:show-post-details.php?id='.$_POST['post_id']);
exit();