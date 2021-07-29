<?php
include 'connexion.php';

$query = $bdd->prepare('SELECT Category.Id AS Id, `Name`, COUNT(Category_Id) AS Total FROM Category
  LEFT JOIN Post ON Category.Id = Category_Id
  GROUP BY Category.Id'
);

$query->execute();
$categories = $query->fetchAll();

$title = 'Gestion des catégories';
$template = 'admin_categories_index.phtml';
include 'layout.phtml';
