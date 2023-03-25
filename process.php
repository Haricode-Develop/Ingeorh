<?php
if (isset($_POST['btn-send'])) {
	$UserName = $_POST['UName'];
	$Email = $_POST['Email'];
	$Subject = $_POST['Subject'];
	$Msg = $_POST['msg'];

	$headers = "FROM:".$Email;
	if (empty($UserName) || empty($Email) || empty($Subject) || empty($Msg)) {
		header('location:INGEO?error');
	}
	else{


		$to = "ingeomatica502@gmail.com";

		if (mail($to,$Subject,$Msg,$headers)) {
								echo '<script>alert("El correo se envío correctamente")</script>';

			header("location:ingeo");
		}
		else{
			header("location:ingeo");
		}
	}
}
else{
	header("location:ingeo");
}