<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db_connect.php';

// Fetch all donors from the database
$query = "SELECT * FROM Donor";
$stmt = $conn->prepare($query);
$stmt->execute();

echo "<table border='1'>
<tr><th>Donor ID</th><th>Name</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Age</th><th>Blood Type</th><th>Actions</th></tr>";

// Loop through the result and display donors with links to edit and delete
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['Donorid']) . "</td>";
    echo "<td>" . htmlspecialchars($row['Name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td>" . htmlspecialchars($row['phoneNumber']) . "</td>";
    echo "<td>" . htmlspecialchars($row['Address']) . "</td>";
    echo "<td>" . htmlspecialchars($row['Age']) . "</td>";
    echo "<td>" . htmlspecialchars($row['BloodType']) . "</td>";
    echo "<td>
            <a href='edit_donor.php?id=" . $row['Donorid'] . "'>Edit</a> | 
            <a href='delete_donor.php?id=" . $row['Donorid'] . "'>Delete</a>
          </td>";
    echo "</tr>";
}

echo "</table>";
?>
