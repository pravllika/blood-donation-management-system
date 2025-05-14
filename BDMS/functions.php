<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db_connect.php';

try {
    // Assuming $conn is a PDO instance:
    $stmt = $conn->query("SELECT GetDonorCount() AS result");

    if ($stmt) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Result: " . $row['result'];
    } else {
        echo "Query failed.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
