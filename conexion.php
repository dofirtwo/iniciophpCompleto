<?php

try{
    $pdo = new PDO("mysql:dbname=pokemon88;host=localhost","root","");
    if(isset($pdo)){
        //echo "Conectado";
    }

} catch(PDOException $e){
    echo("Error al conectar: ".$e->getMessage());
}