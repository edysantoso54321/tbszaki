<?php
	include('conn.php');
	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$query=mysqli_query($conn,"insert into user values('$name','$email','$password')");
		session_start();
		$_SESSION['user']=$_POST['name'];
		header('Location: ../');
	}else{
		header('Location: ../');
	}
