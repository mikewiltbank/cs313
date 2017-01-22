<?php 
	if(isset($_POST['submit'])){
		$name = $_POST['boyname'];
		$email = $_POST['director'];
		$major = $_POST['major'];
		$comments = $_POST['comments'];
		$continents = $_POST['continent'];
	}

if ($name == "Orson") {
	$_SESSION["orson"] = $_SESSION["orson"] + 1;
}
if ($name == "Spencer") {
	$_SESSION["spencer"] = $_SESSION["spencer"] + 1;
}
if ($name == "Clyde") {
	$_SESSION["clyde"] = $_SESSION["clyde"] + 1;

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>
</head>
<body>
		<label>I should name my newborn son:</label>
		<p>Orson =<?php echo $_SESSION["orson"]; ?></p>
</body>
</html>


</body>
</html>