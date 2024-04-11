<?php
$message = ""; 
if(isset($_POST['submit'])){
	$to = "deepak.magare27@gmail.com"; // Your email address
	$name = $_POST['PatientName'];
	$from = $_POST['PatientEmail'];
	$phone = $_POST['inputphonenum'];
    $docname = $_POST['DoctorName'];
    $appodt = $_post['appointmentdt'];
    $symptoms = $_post['symptoms']


	$message = "<!DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
	<table rules='all' border='1' style='border-color: #666;' cellpadding='10'>
    <tr style='background: #eee;'><td colspan='2'><strong>Contact Form Details</strong> </td></tr>
    <tr>
        <td><strong>Name:</strong></td>
        <td>".$_POST['PatientName']."</td>
    </tr>
    <tr>
        <td><strong>Mobile:</strong></td>
        <td>".$_POST['inputphonenum']."</td>
    </tr>
    <tr>
        <td><strong>Email:</strong></td>
        <td>".$_POST['PatientEmail']."</td>
    </tr>
    <tr>
        <td><strong>Doctor Name:</strong></td>
        <td>".$_POST['DoctorName']."</td>
    </tr>
    <tr>
        <td><strong>Symptoms:</strong></td>
        <td>".$_POST['symptoms']."</td>
    </tr>
    <tr>
        <td><strong>Appointment Date:</strong></td>
        <td>".$_POST['appointmentdt']."</td>
    </tr>






    
    
	</table>
	</body>
	</html>";
	
	$subject = "Appointment Form Details";
	
	// Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	$headers .= "From:" . $from . "\r\n";
	
	$result = mail($to,$subject,$message,$headers);
	if ($result) {
		// $message = "Your Message was sent Successfully!";
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	}else{
		// $message = "Sorry! Message was not sent, Try again Later.";
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
	// header('Location: contact.php');
}
?>