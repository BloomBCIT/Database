<?php
$host = "localhost";    //host connection
$dbname = "bloomQuiz";  //database name
$dbusername = "root";   //username
$dbpassword = "root";   //password

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", "$dbusername", "$dbpassword");
} catch (PDOException $e){
    echo $e->getMessage();
    exit;
}

$query = "INSERT INTO test (name) VALUES (:name)";
$stmt = $db->prepare($query);

$name = $_POST['name'];  //value inserted into
$stmt->bindParam(":name", $name, PDO::PARAM_STR);   //binding params

$stmt->execute();

//$stmt->close();
//$db->close();
echo "connected";
?>