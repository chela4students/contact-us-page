<html><head><title>Submission Check</title></head></html>
<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='chela4students@gmail.com'; 
		$subject='Form Submission';
		$message="Name :".$name."\n"."Wrote the following :"."\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			echo "<a href='https://www.chela4students.com'>GO BACK TO CHELA4STUDENTS.COM</a>";
		
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
