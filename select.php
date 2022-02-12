<?php

$servername = "localhost";
$dbname= "mywebsite";
$username = "";
$passwoed="";


$conn = new mysqli($servername, $username, $passwoed, $dbname);
if($conn->connect_error){
    die("connection failed .$conn->connect_error);
}
$sql = "SELECT id, firstname, lastname, email, date";
$result = $conn->query(sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc() ){
         echo "id is .$row["id"];
}
}

  
?>