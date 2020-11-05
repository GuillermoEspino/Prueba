<?php
 
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="ingenieriap";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 
 $Nombre=$_POST['Nombre'];
 $Apellido=$_POST['Apellido'];
 $Correo_Electronico=$_POST['Correo_Electronico'];
 $id_usuario=$_POST['id_usuario'];

 $sql="INSERT INTO usuario VALUES('$Nombre',
           '$Apellido',
           '$Correo_Electronico',
           '$id_usuario')";
 
 $ejecutar=mysqli_query($con,$sql);
 
 if(!$ejecutar){
  echo"Ocurrio un Error";
 }else{
  echo" Sus datos se han guardado correctamente <br><a href='login.html'>Volver para iniciar sesion </a>";
 }
?>