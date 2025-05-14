<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db_connect.php';

try {
    $stmt = $conn->query("SELECT * FROM DonorBloodType");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "{$row['donorid']} - {$row['name']} - {$row['BloodType']}<br>";
    }
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
?>
