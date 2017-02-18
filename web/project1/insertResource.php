<?php
// get the data from the POST
$name = $_POST['resourceName'];
$link = $_POST['resourceLink'];
$type = $_POST['resourceType'];
$associations = $_POST['associationNames'];

 //echo "name=$name"."<br>";
 //echo "link=$link"."<br>";
 //echo "type=$type"."<br>";
 //foreach ($associations as $association)
 //{
 	//echo "association=$association";
 	//echo "<br";
 //}

require("dbConnect.php");

if($type == "other")
{
	try
	{
		$query = 'INSERT INTO otherresource(name, link) VALUES(:name, :link)';
		$statement = $db->prepare($query);

		$statement->bindValue(':name', $name);
		$statement->bindValue(':link', $link);
		$statement->execute();

		$otherid = $db->lastInsertId("otherresource_id_seq");

		foreach ($associations as $association)
		{
			$statement = $db->prepare('INSERT INTO resource_association(communityid, otherid, associationid) VALUES(:communityid, :otherid, :associationid)');

		//	$statement->bindValue(':communityid', $communityid);
			$statement->bindValue(':otherid', $otherid);
			$statement->bindValue(':associationid', $associationid);
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
}

if($type == "community")
{
	try
	{
		$query = 'INSERT INTO communityresource(name, link) VALUES(:name, :link)';
		$statement = $db->prepare($query);

		$statement->bindValue(':name', $name);
		$statement->bindValue(':link', $link);
		$statement->execute();

		$otherid = $db->lastInsertId("communityresource_id_seq");

		foreach ($associations as $association)
		{
			$statement = $db->prepare('INSERT INTO resource_association(communityid, otherid, associationid) VALUES(:communityid, :otherid, :associationid)');

			$statement->bindValue(':communityid', $communityid);
		//	$statement->bindValue(':otherid', $otherid);
			$statement->bindValue(':associationid', $associationid);
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
}

?>