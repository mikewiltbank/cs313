<?php
// get the data from the POST
$name = $_POST['resourceName'];
$link = $_POST['resourceLink'];
$type = $_POST['resourceType'];
$associationIds = $_POST['associationName'];

// echo "name=$name\n";
// echo "link=$link\n";
// echo "type=$type\n";

require("dbConnect.php");
$db = get_db();
try
{
	$query = 'INSERT INTO communityresource(name, link) VALUES(:name, :link)';
	$statement = $db->prepare($query);

	$statement->bindValue(':name', $name);
	$statement->bindValue(':link', $link);
	$statement->execute();

	$resourceId = $db->lastInsertId("communityresource_id_seq");

	foreach ($associationIds as $associationId)
	{
		echo "Communityid: $communityid, Otherid: $otherid, Contactid: $contactid";
		$statement = $db->prepare('INSERT INTO resource_association(communityid, otherid, contactid) VALUES(:communityid, :otherid), :contactid');

		$statement->bindValue(':communityid', $communityid);
		$statement->bindValue(':otherid', $otherid);
		$statement->bindValue(':contactid', $contactid);
		$statement->execute();
	}
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: resources.html");
die(); 
?>