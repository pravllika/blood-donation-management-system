<?php
require 'db_connect.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phoneNumber'] ?? '';
    $address = $_POST['address'] ?? '';
    $age = $_POST['age'] ?? '';
    $bloodType = $_POST['bloodType'] ?? '';

    try {
        $stmt = $conn->prepare("INSERT INTO Donor (Name, email, phoneNumber, Address, Age, BloodType)
                               VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $address, $age, $bloodType]);
        echo "<p>Donor added successfully!</p>";
    } catch (PDOException $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}
?>

<h2>Add Donor</h2>
<form method="post">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email"><br>
    Phone Number: <input type="text" name="phoneNumber"><br>
    Address: <input type="text" name="address"><br>
    Age: <input type="number" name="age"><br>
    Blood Type: <input type="text" name="bloodType"><br>
    <input type="submit" value="Add Donor">
</form>
