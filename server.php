<?php
    include 'data.php';
    header('Content-Type: application/json');//commando che serve per trasformare la visualizzazione del file piu chiaro (json)
    echo json_encode($albums);
 ?>
