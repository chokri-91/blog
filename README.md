# Le blog

## Présentation
Le blog est un cas d'école du développement web. Il va vous donnez l'occasion de développer 
un "vrai" site de A à Z "from scratch" ! C'est vous qui choisissez le thème de votre blog, faites-vous plaisir ! :-)

## Objectifs pédagogiques

- Concevoir une base de données en fonction d'un cahier des charges
- Créer une base de données avec phpmyadmin
- Développer une application CRUD en PHP/SQL / Créer une interface d'administration
- Faire des requêtes SQL d'action : modification, suppression, création
- Approfondir vos compétences SQL (autres types de jointures, placeholders nommés, fonctions SQL, etc)
- Créer un système de template pour ne pas répéter de code HTML sur plusieurs pages
- Mettre en pratique Bootstrap pour développer une interface rapidement
- Se protéger des failles de sécurité courantes (failles XSS, injections SQL)

## Arborescence
Le blog sera constitué d'une ***partie publique*** et d'une ***partie administration***. Celle-ci ne sera pour le moment pas sécurisée, 
mais patience ! Vous apprendrez à gérer une connexion utilisateur dans un prochain module !

Le blog sera constitué des pages suivantes :

**Partie publique**
- Page d'accueil
- Page de détails d'un article
- Ajout de commentaire

**Partie administration**
- Page de gestion des articles
- Page d'ajout d'article
- Page de modification d'un article
- Suppression d'un article

## Données
Nous allons gérer :

- des articles
- des catégories
- des auteurs
- des commentaires

### Article

- Titre de l'article
- Auteur de l'article
- Catégorie de l'article
- Date de création de l'article
- Texte de l'article

### Auteur

- Nom de l'auteur
- Prénom de l'auteur

### Catégorie

- Label de la catégorie

### Commentaires

- Date et heure du commentaire
- Pseudo de l'auteur du commentaire
- Texte du commentaire
- Article associé

## Indications

- Un lien "Administration" situé dans l'en-tête de page permet d'accéder à la page de gestion des articles
- Un fil d'Ariane permet de se repéré dans l'arborescence du site

### Accueil

- Les 10 derniers articles sont présentés dans l'ordre antéchronologique, c'est-à-dire le plus récent en premier. Ce sont donc les 10 articles les plus récents qui sont affichés.
- Le titre de l'article ainsi qu'un lien "Lire la suite" sont cliquables et permettent d'aller sur la page détaillée de l'article.
- Seul le début du texte des articles est affiché, on prendra par exemple les 150 premiers caractères du texte de l'article.

### Page Article (détails)

- La page Article présente toutes les informations d'un article, notamment le texte entier de l'article.
- Un formulaire permet d'ajouter un commentaire. On remplira 2 champs : pseudo et texte du commentaire. Une fois le commentaire envoyé, celui-ci apparaît
directement au dessus dans la liste des commentaires associés à l'article. Le nombre de commentaires est affiché 
au dessus de la liste des commentaires. 

### Gestion des articles

- Un bouton "Ajouter un article" amène vers le formulaire de création d'article
- La liste des articles est affichée sous forme de tableau. Des pictogrammes permettent d'accéder à la page de modification d'un article
et de supprimer un article. 
- Le clic sur le nom d'un article amène vers la page détaillée de l'article

### Page de création d'article

- Elle présente un formulaire permettant de remplir toutes les informations relatives à l'article : titre, texte, auteur, catégorie associée. 
- Au clic sur le bouton "Enregistrer" on retourne automatiquement vers la page de gestion des articles, ou bien 
vers la pag détaillée de l'article (au choix)

### Page de modification d'un article

- Elle fonctionne comme la page de création d'article à la différence que le formulaire est pré-rempli avec les données de l'article

## BONUS
### Bonus 1 : confirmation de suppression
Sur la page de gestion des articles, au clic sur le bouton de suppression d'un article, faire apparaître
une fenêtre de confirmation. L'article n'est supprimé que si on confirme sa suppression. SInon il ne se passe rien.
On pourra utiliser un composant de Bootstrap pour créer la fenêtre de confirmation. 

### Bonus 2 : Suprression en AJAX
Pourquoi recharger toute la page de gestion des articles après avoir supprimé un article ? Ajoutez le code JavaScript nécessaire pour gérer la suppression d'un article en AJAX !

### Bonus 3 : validation des formulaires
Valider un formulaire consiste à vérifier que les données que l'on reçoit sont cohérentes. On peut valider 
un formulaire côté client, soit en JavaScript, soit en HTML5, et côté serveur en PHP. Les deux sont utiles. 

L'idée côté serveur est de vérifier en PHP les données reçues du formulaire. On peut vérifier :

- Si les données existent bien (les champs ont-ils été remplis ?)
- Si le type attendu est correct
- Si la taille des champs est correcte 
- Etc

En cas d'erreur, l'idéal serait d'afficher un message personnalisé en dessous du champ qui pose soucis
et de faire apparaître le champ comme "en erreur". 

***Attention***: en cas d'erreur, l'internaute reste sur le formulaire, les messages d'erreur apparaîssent. Il faut 
faire en sorte que les champs du formulaire restent remplis ! Rien de plus agaçant que de devoir tout ré-écrire !

### Bonus 4 : Gestion des auteurs et des catégories

- Ajoutez un CRUD pour gérer les auteurs (ajout, modification, suppression)
- Ajoutez un CRUD pour gérer les catégories (ajout, modification, suppression)

***Attention !*** Peut-on supprimer une catégorie ou un auteur si des articles sont associés ? 

***Remarque*** Ce serait bien d'afficher le nombre d'articles associés à chaque catégorie et à chaque auteur. Essayez de 
ne faire qu'une seule requête à chaque fois (une pour les auteurs, une pour les catégories)

### Bonus 5 : ajouter des images aux articles
Ajoutez un champ de type fichier au formulaire de création et de modification d'un article afin de pouvoir associer une image à chaque article. 
L'image apparaîtra le cas échéant dans le résumé de l'article sur la page d'accueil et sur la page détaillée de l'article.

***Remarques*** :

- Plusieurs vérifications sont nécessaires : le fichier n'est-il pas trop lourd ? Est-ce bien une image ? 
- Comment gérer cette image lors de la modification d'un article ? Comment la supprimer si on le souhaite ?

### Bonus 6 : Gestion des commentaires

- Ajoutez une page des gestion des commentaires dans l'administration 
- Il peut être utile de pouvoir masquer ou supprimer un commentaire

### Bonus 7 : modération des commentaires
Les commentaires apparaîssent immédiatement sur la page d'un article. 2 Systèmes peuvent être envisagés pour les modérer :

- Soit ils apparaîssent toujours immédiatement, mais les internautes ont la possibilité de "signaler" un commentaire. Les commentaires
signalés apparaîssent de manière différente dans l'administration où on peut ensuite les masquer ou les supprimer.
- Soit ils n'apparaîssent pas tout de suite, ils sont d'abord masqués. Ce n'est qu'une fois fois "validés"
dans l'administration qu'ils sont visibles sur le site. 

### Bonus 8 : refactoring
Vous n'en avez pas marre de taper toujours la même chose pour faire des requêtes SQL ? 

Préparer la requête, l'exécuter, récupérer les résultats, préparer une requête, l'exécuter, récupérer un résultat, ...

Ne pourrait-on pas créer des fonctions pour :

- Créer une connexion PDO à la base de donnée
- Exécuter une requête de sélection et récupérer PLUSIEURS résultats 
- Exécuter une requête de sélection et récupérer UN SEUL résultat
- Exécuter une requête d'action

 Par ailleurs n'y aurait-il pas moyen de ranger un peu mieux tous ces fichiers ?
