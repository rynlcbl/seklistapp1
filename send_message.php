<?php
require('connection.inc.php');
require('functions.inc.php');

$con=mysqli_connect("localhost","root","","seklistapp");
$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$mobile=get_safe_value($con,$_POST['mobile']);
$message=get_safe_value($con,$_POST['message']);
$added_on=date('Y-m-d');

mysqli_query($con,"insert into contact_us(name,email,mobile,message,added_on) values
('$name','$email','$mobile','$message','$added_on')");
echo "Thank you, Your message has been sent!";
?>