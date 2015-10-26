<?php
$conn= mysqli_connect("localhost", "CIT", "CPT283", "php") or die ("Failed to connect");

function createUser($user, $pass, $fname, $lname) {
	$sql = "INSERT INTO EWD_USER (EWD_USERNAME, EWD_PASSWORD, EWD_FIRST_NAME, EWD_LAST_NAME) VALUES ($user, $pass, $fname, $lname)";

if (mysqli_query($conn, $sql)) {
    echo "User successfully created!";
} else {
    echo "Error creating user: " . mysqli_error($conn);
}
closeConnect($conn);
?>
