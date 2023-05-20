<?php
  include("coneccion.php");
    $usu=$_POST['Usuario'];
    $con=$_POST['Contrasena'];
    $resul=mysqli_query($coneccion,"SELECT * FROM usuario WHERE NomUsua='$usu'");
    while($row=$resul->fetch_assoc()) {
      if(password_verify($con,$row['ContraUsua']));{
        session_start();
        $_SESSION['usuario'] = $row;
        if($row['Id_rol'] == 1){
          header('Location: page6.php');
        }
        else if($row['Id_rol'] == 2) {
          header('Location: page7.php');
        }
        else if($row['Id_rol'] == 3){
          header('Location: page5.php');
        }
      }
    }
?>