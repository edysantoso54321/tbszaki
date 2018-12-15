<?php
	include('conn.php');
	if (isset($_POST['email']) && isset($_POST['password'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$query=mysqli_query($conn,"select * from user where email='$email' and password='$password'");
		while ($data=mysqli_fetch_array($query)) {
			$nama=$data['nama'];
		}
		session_start();
		$_SESSION['user']=$nama;
		#echo $nama;
		header('Location: ../');
	}else{
		header('Location: ../');
	}
