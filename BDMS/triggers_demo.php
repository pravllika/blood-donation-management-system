<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db_connect.php';
$conn->query("INSERT INTO Donor (Name, email, phoneNumber, Address, Age, BloodType) 
              VALUES ('Trigger Tester', 'trigger@example.com', '1234567890', 'Trigger St', 30, 'O+')");
echo "Inserted to test trigger!";
?>
 SELECT * FROM DonorLog;
