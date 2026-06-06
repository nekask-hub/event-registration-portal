<?php

$conn = new mysqli(
"localhost",
"root",
"root",
"techfest"
);

$name = $_POST['name'];
$regno = $_POST['regno'];
$department = $_POST['department'];
$year = $_POST['year'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$event = $_POST['event'];

$sql = "INSERT INTO registrations
(name,regno,department,year,email,phone,event)
VALUES
('$name','$regno','$department','$year','$email','$phone','$event')";

$conn->query($sql);

header("Location: success.html");

?>