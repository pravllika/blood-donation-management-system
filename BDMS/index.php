<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Home</title></head>
<body>
    <h1>Welcome to Blood Donation App</h1>
    <ul>
        <li><a href="view_donors.php">View Donors</a></li>
        <li><a href="add_donor.php">Add Donor</a></li>
        <li><a href="views.php">Show Views</a></li>
        <li><a href="functions.php">Get Donor Count (Function)</a></li>
        <li><a href="procedures.php">Get Total Order Amount (Procedure)</a></li>
        <li><a href="triggers_demo.php">Trigger Demo (adds a demo donor to the list)</a></li> 
    </ul>
</body>
</html>
