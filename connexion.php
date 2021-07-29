<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog; charset=utf8', 'root');
    $bdd->exec('set lc_time_names="fr_FR"');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

