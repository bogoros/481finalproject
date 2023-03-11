<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$event = $_POST["event"];
	$date = $_POST["date"];
	$location = $_POST["location"];

	$data = "$name,$email,$phone,$event,$date,$location\n";
	$file = "bookings.txt";
	$fp = fopen($file, "a");
	fwrite($fp, $data);
	fclose($fp);

	echo "Thank you for your booking request!";
}
?>

