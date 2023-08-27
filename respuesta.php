<?php

// $nombre = $_POST["txtnombre"];

// $apellido= $_POST["txtapellido"];

// $edad = $_POST["edad"];

// if ($edad >= 18){
//     echo "Hola $nombre $apellido tienes $edad años, Eres mayor edad";
// }else{
//     echo "Usted es menor de edad, no puede ingresar";
// }

// $frutas =[
//     "frutaDulce" => "Mango",
//     "frutaAcida" => "Limon",
//     "frutaNeutra" => "Tomate",
//     "frutasRaras" =>[
//         "Costa" => "Níspero",
//         "Amazonia" => "Arazá",
//         "Huila" => "Chulupa",
//         "Cali" => "Chontaduro"
//     ]
// ];

// // echo $frutas["frutasRaras"]["Huila"]
// // echo $frutas; 
// // var_dump($frutas);
// // print_r($frutas);
//  foreach ($frutas as $key => $value) {
//     if(is_array($value)){
//         foreach ($value as $key => $valor) {
//             echo " Llave: $key y Valor: $valor <br>";
//         }
//     }else{
//         echo " Llave: $key y Valor: $value <br>";
//  }}

//     // $texto= "Mi nombre es Pedro Perez y estudio en el Sena"; 
//     // print_r(explode(" ", $texto));

//     print_r(implode(",",$frutas))

include "conexion.php";
$nombre = $_POST["txtnombre"];
$codigo = $_POST["txtcodigo"];

print_r($_POST);

// $sql = "INSERT INTO prueba(nom_prueba,codigo_prueba) VALUES('$nombre',$codigo)";
// $data = $pdo->prepare($sql);

// $data->execute();

// //consulta

// $sql ="SELECT * FROM prueba";
// $data = $pdo->prepare($sql);
// $data ->execute();
// $info = $data->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($info);
?>