<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db_connect.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $donor_id = $_GET['id'];

    // Prepare the DELETE query
    $query = "DELETE FROM Donor WHERE Donorid = :donor_id";
    $stmt = $conn->prepare($query);
    
    // Bind the donor_id and execute the query
    $stmt->bindParam(':donor_id', $donor_id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        echo "Donor deleted successfully!";
    } else {
        echo "Error deleting donor.";
    }
} else {
    echo "No donor ID provided.";
}

echo "<br><a href='index.php'>Go back to donor list</a>";
?>
