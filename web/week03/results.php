<?php 
		$name = $_POST['boyname'];
		$director = $_POST['director'];
		$season = $_POST['season'];
		$cake = $_POST['cake'];
/*
if ($name == "Orson") {
	$_SESSION["orson"] = $_SESSION["orson"] + 1;
}
if ($name == "Spencer") {
	$_SESSION["spencer"] = $_SESSION["spencer"] + 1;
}
if ($name == "Clyde") {
	$_SESSION["clyde"] = $_SESSION["clyde"] + 1;

}
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>
</head>
<body>
		<label>I should name my newborn son:</label><br>
		<p><?php echo $name; ?></p><br>
		<label>The best director is:</label><br>
		<p><?php echo $director; ?></p><br>
		<label>Your favorite season was:</label><br>
		<p><?php echo $season; ?></p><br>
		<label>This assignment was easy:</label><br>
		<p><?php echo $cake; ?></p><br>
</body>
</html>