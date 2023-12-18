<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST["username"];
    $pass=$_POST["password"];

    $host="localhost:3307";
    $dbusername="root";
    $dbpassword="";
    $dbname="autenticacion";

    $conn= new mysqli($host,$dbusername,$dbpassword,$dbname);

    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }

    $query="SELECT * FROM login WHERE username='$username' and password='$pass'";
    $result = $conn->query($query);

    if($result->num_rows==1){
        header("Location:calculadora.php");
        exit();
    }
    else {
        exit();
    }
    $conn->close();
}
?>