<?php
 
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="ingenieriap";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

 
 $respuesta=$_POST['respuesta'];
 

 

 $sql="INSERT INTO preguntas VALUES(
                  '$respuesta')";
 
 $ejecutar=mysqli_query($con,$sql);
 
 if(!$ejecutar){
  echo"";
 }else{
  echo" Su respuesta ha sido enviada  <br><a href='index.html'>Volver al inicio </a>";
 }
?>