<?php

include 'conexao.php';

$query_events = "SELECT id, title, professor, start, end FROM events";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();

$eventos = [];
// a classe professor era color antes, eu substitui
while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){
    $id = $row_events['id'];
    $title = $row_events['title'];
    $professor = $row_events['professor'];
    $start = $row_events['start'];
    $end = $row_events['end'];
    
    $eventos[] = [
        'id' => $id, 
        'title' => $title, 
        'professor' => $professor, 
        'start' => $start, 
        'end' => $end, 
        ];
}

echo json_encode($eventos);