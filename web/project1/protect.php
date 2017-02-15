<?php
$pass = $_POST['password'];

if($pass == "admin")
{
    include("portal.html");
}
else
{
	header('Location:employeeportal.html');
}
?>