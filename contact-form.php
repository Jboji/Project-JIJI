<?php


if(isset($_POST['submit']))
{
	$Email = $_POST['Email'];
	$Name = $_POST['Name'];
	$Subject = $_POST['Subject'];
	$Message = $_POST['Message'];

	$MailTo = "Jumbojiart@gmail.com";
	$Headers = "From: ".$Email ;
	$Txt = "You Have Received an email from" .$Name.".\n\n".$Message;

	mail($MailTo,$Subject,$Txt,$Headers);
	header("Location: index.html?mailsent")
}
?>