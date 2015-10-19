<?php
// define variables and set to empty values
$fname = $lname = $email = $comment = "";
$niclvl = $vglvl = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $fname = test_input($_POST["fname"]);
   $lname = test_input($_POST["lname"]);
   $email = test_input($_POST["email"]);
   $comment = test_input($_POST["comment"]);
   $niclvl = $_POST["niclvl"];
   $vglvl = $_POST["vglvl"];
}


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function echoData($fname, $lname, $email, $comment, $niclvl, $vglvl) {
	if ($_POST != NULL) {
		echo "<h2>Results</h2>";
		echo "<p>" . $fname . " " . $lname . "</p>";
		echo "<p>" . $email . "</p>";
		echo "<p>" . $comment . "</p>";
		echo "<p>Nicotine Level: <b>" . $niclvl . "</b></p>";
		echo "<p>Vegetable-Glycerin Level: <b>" . $vglvl . "%</b></p>";
	}
}
function mailDaemon($fname, $lname, $comment) {
		$to = "essencewebdesign@gmail.com"; // this is your Email address
		$subject = "Form submission";
		$subject2 = "Copy of your form submission";
		$message = $fname . " " . $lname . " wrote the following:" . "\n\n" . $comment;
		$message2 = "Here is a copy of your message " . $fname . "\n\n" . $comment;

		$headers = "From:" . $from;
		$headers2 = "From:" . $to;
		mail($to,$subject,$message,$headers);
		mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
		echo "<p>Mail Sent. Thank you " . $fname . ", we will contact you shortly.</p>";
		// You can also use header('Location: thank_you.php'); to redirect to another page.
}
function printPOST() {
	if(isset($_POST)) {
		echo "<pre>";
		echo print_r($_POST);
		echo "</pre>";
	}
}
?>