<?php

include 'connexion.php';

//var_dump($_POST); var_dump($_GET); die ;

$query = $bdd->prepare('UPDATE post
SET Category_Id = ?,
Author_Id = ?,
CreationTimestamp = NOW(),
Title = ?,
Contents = ?

WHERE Id = ?
');

$query-> execute([
    $_POST['category'],
     $_POST['author'],
      $_POST['title'],
      $_POST['content'],
       $_GET['id']
    ]);

header('location:admin_posts_index.php'); exit();

//var_dump($query);

//var_dump($_POST);

