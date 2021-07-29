<?php

include 'connexion.php';


if(empty($_POST) == false) //if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //inserer le nouveau post
    if(empty(trim($_POST['title'])) == false) //strlen(trim($_POST['title'])) > 0
    {
        $query = $bdd->prepare(
            'INSERT INTO post(Title,Contents,CreationTimestamp, Author_Id, Category_Id)
            VALUES(?,?,NOW(),?,?)'
        );
    
        $query->execute(
            [
                trim($_POST['title']),
                $_POST['content'],
                $_POST['author'],
                $_POST['category']
            ]
        );
    }
    
    //redirgier vers la page gestion d'articles
    header('location:admin_posts_index.php');
    exit();
}

$query = $bdd->prepare('SELECT * FROM author');
$query->execute([]);
$auteurs = $query->fetchAll();

$query = $bdd->prepare('SELECT * FROM category');
$query->execute([]);
$categories = $query->fetchAll();


$template = 'admin_post_add.phtml';
include 'layout.phtml';