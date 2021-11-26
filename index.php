<?php
$server = "20.124.34.65";
$username = "cloud";
$password = "$4muD4t4";
$database = "proy";

// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
     $query = "SELECT * FROM test";
     if ($resultado = $conn->query($query)) {
          while ($fila = $resultado->fetch_row()) {
               echo '<br/> id = '.$fila[0];
               echo '<br/> descripcion = '.$fila[1];
          }
     }
     else{
          echo 'error';
     }
}
?>
