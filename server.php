<?php

/* Prendiamo la lista di task dal file json */
$todo_list = file_get_contents("todo-list.json");

/* Decodifichiamo il file json */
$list = json_decode($todo_list, true);

/* Controlliamo se addtask è stato passato */
if(isset($_POST["addtask"])){
    $todoItem = $_POST["addtask"];
    /* creiamo l'oggetto che andra poi aggiunto a list */
    $task = [
        "todo" => $todoItem
    ];
    $list[] = $task;
    /* Aggiungiamo list all'interno del file json */
    file_put_contents("todo-list.json", json_encode($list));
}
header("Content-type: application/json");

echo json_encode($list);
?>