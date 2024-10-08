<?php

include 'connect.php';

if(isset($_POST['Create'])){
$FullNames=$_POST['fNames'];
$Email=$_POST['email'];
$ShortBio=$_POST['bio'];
$Grade=$_POST['grade'];
$Score=$_POST['score1'];
$Score=$_POST['score2'];
$Score=$_POST['score3'];
$Score=$_POST['score4'];
$Experience=$_POST['experience'];
$Skills=$_POST['skils'];
$Projects=$_POST['projects'];
$Contacts=$_POST['contacts'];


$dsn = "mysql:host=localhost;dbname=login";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = PDO($dsn, $FullNames, $Email, $ShortBio, $Grade, $Score, $Score, $Score, $Score, $Experience, $Skills, $Projects, $Contacts);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE, PDO::ERRMODE_EXCEPTION)
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
