<?php
    include 'conexion.php';
   $conectar=mysql_connect('localhost','root','');

   if(!$conectar){
       echo "error";
   }
   else {
       $base=mysql_select_db('prueba');
       if(!$base){
           echo "error";
       }
   }
   $nombre=$_POST['nombre'];
   $email=$_POST['email'];
   $telefono=$_POST['telefono'];
   $asunto=$_POST['asunto'];
   $mensaje=$_POST['mensaje'];

   $sql="INSERT INTO tabla (nombre,email,telefono,asunto,mensaje)VALUES('$nombre'
                                                                        '$email' 
                                                                        '$telefono'
                                                                        '$asunto'
                                                                        '$mensaje')";

    $ejecutar=mysql_query($sql);

    if(!$ejecutar){
        echo "error2";
    }
    else{
        echo "guardado<br><a href='index.html'>Volver</a>";

    }
?>