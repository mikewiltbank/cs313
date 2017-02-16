<?php
// get the data from the POST
$name = $_POST['contactName'];
$phone = $_POST['contactPhone'];
$address = $_POST['contactAddress'];
$service = $_POST['service'];

 //echo "name=$name\n";
 //echo "phone=$phone\n";
 //echo "address=$address\n";
 //echo "service=$service\n";

require("dbConnect.php");

try
{
	$query = 'INSERT INTO contactresource(name, phone, address, service) VALUES(:name, :phone, :address, :service)';
	$statement = $db->prepare($query);

	$statement->bindValue(':name', $name);
	$statement->bindValue(':phone', $phone);
	$statement->bindValue(':address', $address);
	$statement->bindValue(':service', $service);
	$statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: resources.php");
die(); 
?>