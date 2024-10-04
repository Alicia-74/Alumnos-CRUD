<?php

include("connection.php");
$con = connection();

$id=$_POST["idAlumnos"];
$name = $_POST['nombreAlumnos'];
$edad = $_POST['edad'];


$sql="UPDATE alumnos SET nombreAlumnos='$name', edad='$edad' WHERE idAlumnos='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{

}

?>