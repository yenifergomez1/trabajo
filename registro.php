<?php
 
 include_once ('db.php');
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $correo=$_POST['correo'];
 $Contraseña=$_POST['Contraseña'];
 $Confirmar =$_POST['Confirmar Contraseña'];
  
 echo "los datos son los siguientes:<br>";
 echo "$nombre,$apellido,$correo,$Contraseña,$Confirmar";
 
  $conectar= conn();
  $sql= "INSERT INTO usuarios(nombre,apellido,correo.contraseña,confirmar contraseña)'
  VALUES ('$nombre', '$apellido' ,'$correo' ,'$Contraseña' ,'$Confirmar')";
  $resul = mysqli_query($conectar , $sql)or trigger_error ("Query Failed SQL- Error:".mysql_error($conectar), E_USER_ERROR);

  echo"$sql";

?>