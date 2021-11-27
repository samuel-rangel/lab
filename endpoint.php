<?php
include('connection.php');

$data=$_POST['data'];

insertData($data);

header('Location: index.php');
?>
