<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    // Manipulating data retrieved from form
    echo "<h2>Form Data:</h2>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    // This data can also be used to insert data in your database assuming there is one
    // All we need is to establish a connection first
    // Although the instruction for this is to only submit to success.php page
}
?>