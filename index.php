<?php

include 'connexion.php';

$rep = $bdd->prepare('SELECT post.Id, Title , Contents, substring(Contents,0,30) AS Content, DATE_FORMAT(CreationTimestamp, "%W,%e, %M, %Y") AS date,
FirstName, LastName, Name
FROM post INNER JOIN category ON post.Category_Id = category.Id
INNER JOIN author ON  post.author_Id = author.Id
ORDER BY CreationTimestamp
LIMIT 10');

$rep->execute([]);

$articles=$rep->fetchAll();

$template = 'accueil.phtml';

include 'layout.phtml';