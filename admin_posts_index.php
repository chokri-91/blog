<?php

include 'connexion.php';

$rep = $bdd->prepare('SELECT post.Id, Title , DATE_FORMAT(CreationTimestamp, "%d-%m-%Y") AS `date`,
FirstName, LastName, Name
FROM post INNER JOIN category ON post.Category_Id = category.Id
INNER JOIN author ON  post.author_Id = author.Id
order by `date`
');

$rep->execute([]);

$articles=$rep->fetchAll();

//print_r($articles);

$template = 'admin_posts_index.phtml';
include 'layout.phtml';