<?php
 
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="ingenieriap";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 
 $Correo_Electronico=$_POST['Correo_Electronico'];
 $id_usuario=$_POST['id_usuario'];

 $sql="INSERT INTO usuario1 VALUES(
           '$Correo_Electronico',
           '$id_usuario')";
 
 $ejecutar=mysqli_query($con,$sql);
 
 if(!$ejecutar){
  echo"Debes registrarte!<br><a href='login.html'>Volver para Registrarse </a>";
 }else{
  echo"  <br><a href='index.html'>Puedes ingresar a la página </a>";
 }
?>