<?php
include 'connexion.php';

$query = $bdd->prepare('SELECT Author.Id, FirstName,LastName,COUNT(Author_Id) AS Total FROM Post 
  RIGHT JOIN Author ON Author.Id = Post.Author_Id
  GROUP BY Author_Id
  ORDER BY Author.Id'
);

$query->execute();
$authors = $query->fetchAll();

$title = 'Gestion des auteurs';
$template = 'admin_authors_index.phtml';
include 'layout.phtml';
