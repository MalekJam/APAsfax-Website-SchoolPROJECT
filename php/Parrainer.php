<?php 
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$name= $_POST['name'];
		$animal = $_POST['animal'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $message = $_POST['message'];

		
			
		$query = "insert into parrainer (NAME,EMAIL,ANIMAL,AMOUNT,MESSAGE) values ('$name','$email','$animal','$amount','$message')";

		mysqli_query($conn, $query);

		header("Location: ../AIDEZ NOUS/AidezNous.html");
		die;
	}
?>