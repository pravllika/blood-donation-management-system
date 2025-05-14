<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db_connect.php';

// Check if the 'id' parameter exists in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $donor_id = $_GET['id'];

    // Prepare the SQL query to select donor information based on donor_id
    $query = "SELECT * FROM Donor WHERE Donorid = :donor_id";
    $stmt = $conn->prepare($query);
    
    // Bind the donor_id parameter and execute the query
    $stmt->bindParam(':donor_id', $donor_id, PDO::PARAM_INT);
    $stmt->execute();
    
    // Fetch the result
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($row) {
        // Display the donor information in the form (you can adjust as needed)
        echo "<form action='edit_donor.php?id=$donor_id' method='post'>";
        echo "Name: <input type='text' name='name' value='" . htmlspecialchars($row['Name']) . "'><br>";
        echo "Email: <input type='text' name='email' value='" . htmlspecialchars($row['email']) . "'><br>";
        echo "Phone Number: <input type='text' name='phoneNumber' value='" . htmlspecialchars($row['phoneNumber']) . "'><br>";
        echo "Address: <input type='text' name='address' value='" . htmlspecialchars($row['Address']) . "'><br>";
        echo "Age: <input type='text' name='age' value='" . htmlspecialchars($row['Age']) . "'><br>";
        echo "Blood Type: <input type='text' name='bloodType' value='" . htmlspecialchars($row['BloodType']) . "'><br>";
        echo "<input type='submit' value='Update Donor'>";
        echo "</form>";
    } else {
        echo "Donor not found.";
    }
} else {
    echo "No donor ID provided.";
}

// Handle the form submission (Update Donor)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $bloodType = $_POST['bloodType'];

    // Prepare the update query
    $update_query = "UPDATE Donor SET Name = :name, email = :email, phoneNumber = :phoneNumber, Address = :address, Age = :age, BloodType = :bloodType WHERE Donorid = :donor_id";
    $update_stmt = $conn->prepare($update_query);

    // Bind parameters and execute
    $update_stmt->bindParam(':name', $name);
    $update_stmt->bindParam(':email', $email);
    $update_stmt->bindParam(':phoneNumber', $phoneNumber);
    $update_stmt->bindParam(':address', $address);
    $update_stmt->bindParam(':age', $age);
    $update_stmt->bindParam(':bloodType', $bloodType);
    $update_stmt->bindParam(':donor_id', $donor_id, PDO::PARAM_INT);

    if ($update_stmt->execute()) {
        echo "Donor information updated successfully!";
    } else {
        echo "Error updating donor information.";
    }
}
?>
