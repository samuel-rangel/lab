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

function insertData($obj){
    global $conn;
    $query = "insert into test(descripcion) values(?)";
    $statement = $conn->prepare($query);
    $statement->bind_param("s", $obj);
    if($statement->execute()){
      $statement->close();
      return $conn -> insert_id;
    }
    else{
      echo $statement->error;
      $statement->close();
      return 0;
    }
}

function getData(){
    global $conn;
    $query = "SELECT * FROM test";
    if ($resultado = $conn->query($query)) {
        while ($fila = $resultado->fetch_row()) {
            echo '<tr><td>'.$fila[0]."</td>";
            echo '<td>'.$fila[1]."</td></tr>";
        }
    }
}
?>
