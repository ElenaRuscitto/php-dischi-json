<?php 


// prendo il file 'dischi.json' e lo salvo come stringa in una variabile
$json_dischi = file_get_contents('dischi.json');
var_dump($json_dischi);


// ricodifico la stringa trasformadola in elemento PHP
$list = json_decode($json_dischi);
var_dump($list);


/*

logica php

*/ 


// trasformo il file PHP come se fosse un file JSON
header('content-type: application/json');


?>