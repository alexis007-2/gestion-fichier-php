<?php

$mail = 'paul@gmail.com';
$nom = 'DUPOND';
$prenom = 'Paul';

$chaine = $mail.PHP_EOL.$nom.PHP_EOL.$prenom;
$x =  file_put_contents("file2.txt",$chaine,FILE_APPEND);
echo $x;
