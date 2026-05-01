<?php
include "db.php";

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$tc = $_POST['national_id'];
$birth = $_POST['birth_date'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO patients 
(first_name, last_name, national_id, birth_date, gender, phone, email, address)
VALUES 
('$first', '$last', '$tc', '$birth', '$gender', '$phone', '$email', '$address')";

if ($conn->query($sql)) {
    echo "Patient saved successfully<br>";
    echo "<a href='list_patients.php'>Go to list</a>";
} else {
    echo "Error: " . $conn->error;
}
?>
