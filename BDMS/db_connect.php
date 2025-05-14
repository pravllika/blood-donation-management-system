<?php
$host = 'elvisdb.rowan.edu';          
$db = 'mettuk56';            
$user = 'mettuk56';       
$pass = '17RedPanda!!'; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>