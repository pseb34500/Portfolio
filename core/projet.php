<?php
require_once('database.php');

$r = $bdd->query('SELECT * FROM projet');
while ($d = $r->fetch()) {
    $q[] = array(
       'nom'=>$d['Nom'],
       'image'=>$d['Image'],
       'Description'=>$d['Description'],
       'Client'=>$d['Client'],
       'URL'=>$d['URL'],
   );
}
json_encode($q);
