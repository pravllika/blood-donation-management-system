<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db_connect.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $orderNum = $_POST['orderNum'];

    try {
        // Call the procedure with the input order number
        $conn->query("CALL GetTotalOrderAmount($orderNum, @total)");
        $stmt = $conn->query("SELECT @total AS total");

        if ($stmt) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            echo "<p><strong>Total Order Amount for Order #$orderNum:</strong> $" . $row['total'] . "</p>";
        } else {
            echo "<p>Error retrieving result.</p>";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!-- HTML Form to input order number -->
<form method="POST" action="">
    <label for="orderNum">Enter Order Number:</label>
    <input type="number" name="orderNum" id="orderNum" required min="10100" max="10425">
    <button type="submit">Get Total Amount</button>
</form>
