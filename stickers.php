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

$query = "INSERT INTO stickers (src, x, y, room) VALUES (:src, :x, :y, :room)";

$src = $_POST['src'];
$x = $_POST['x'];
$y = $_POST['y'];
$room = $_POST['room'];

$stmt = $db->prepare($query);

$stmt->bindParam(":src", $src, PDO::PARAM_STR);
$stmt->bindParam(":x", $x, PDO::PARAM_STR);
$stmt->bindParam(":y", $y, PDO::PARAM_STR);
$stmt->bindParam(":room", $room, PDO::PARAM_STR);

$stmt->execute();

echo "connected";
?>
