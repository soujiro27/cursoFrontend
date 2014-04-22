<?php
include("mysql.class.php");
$db = new MySQL();
$db->open();

$autor=$_POST['nombre'];
$editorial=$_POST['email'];
$query = "insert into curso(nombre,email) values('$autor','$editorial');";

$consulta = $db->consulta($query);
// if($row = $db->fetch_array($consulta))
//     do {
//      $libros['datos'.$row['id']]=array("autor"=>$row['autor'],
//      	"libro"=>$row['libro'],
//      	"editorial"=>$row['editorial'],
//      	"anio"=>$row['ano'],
//      	"nacionalidad"=>$row['nacionalidad']);
//     } while ($row = $db->fetch_array($consulta)); 
//    $db->close();
//    echo json_encode($libros); 
?>