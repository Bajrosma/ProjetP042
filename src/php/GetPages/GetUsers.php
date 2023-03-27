<?php

function GetUsers(){
require_once("src/php/ConnectPage/connectDataBase.php");

$query = "SELECT * FROM t_user";

$mysqli->query($query);

var_dump($mysqli);

$table = formatData($mysqli);

return $table;

}

// permet de crée un tableau associatif
function formatData($req){

    return $req->fetchAll(PDO::FETCH_ASSOC);
}