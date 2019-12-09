<?php

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$sel=$_POST['sel'];

	$to='erankursaini4696@gmail.com';
	$subject='some details';
	$message="Name: ".$name."\n"."select: "."\n".$sel;
	$headers="From: ".$email;

	if (mail($to,$subject,$sel,$headers)) {
		echo "<h1>Sent Successfully! Thank You"." ".$name.",We will conatact you shortly!<h1>";
	}
	else
	{
		echo "Somthing went wrong";
	}
}


?>