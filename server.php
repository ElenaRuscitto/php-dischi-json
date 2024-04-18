<?php 


// prendo il file 'dischi.json' e lo salvo come stringa in una variabile
$json_dischi = file_get_contents('dischi.json');
// var_dump($json_dischi);


// ricodifico la stringa trasformadola in elemento PHP
$disk = json_decode($json_dischi, true);
// var_dump($list);


if(isset($_POST['newDiskTitle'])) {
    $new_disk = [
      'title' => $_POST['newDiskTitle'],
      'author' => $_POST['newDiskAuthor'],
      'year' => $_POST['newDiskYear'],
      'poster' => $_POST['newDiskPoster'],
      'genre' => $_POST['newDiskGenre'],
    ];
    $disk[] = $new_disk;
    file_put_contents('dischi.json', json_encode($disk));
}


// trasformo il file PHP come se fosse un file JSON
header('Content-Type: application/json');

// stampo
echo json_encode($disk);



?>

