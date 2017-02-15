<?php
$dsn = "pgsql:"
    . "host=ec2-54-243-197-180.compute-1.amazonaws.com;"
    . "dbname=d1icv6q84sdjv7;"
    . "user=wbsbfhpjjylesi;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=b698b588b5f9694c530f2918df16484b387affdc25c371646b0f4ab7304d6a75";

$db = new PDO($dsn);
?>


<!--<?php
try
{
  $user = 'wbsbfhpjjylesi';
  $password = 'b698b588b5f9694c530f2918df16484b387affdc25c371646b0f4ab7304d6a75';
  $db = new PDO('pgsql:host=ec2-54-243-197-180.compute-1.amazonaws.com;dbname=d1icv6q84sdjv7', $user, $password);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>

<?php
function get_db() {
	$db = NULL;
	try {
		$dbUrl = getenv('DATABASE_URL');
        if (!isset($dbUrl) || empty($dbUrl)) {
            $dbUrl = "postgres://ubuntu:cs313@127.0.0.1:8080/ovw";
	    }
		$dbopts = parse_url($dbUrl);
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');
		// Create the PDO connection
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	}
	catch (PDOException $ex) {
		die();
	}
	return $db;
}
?>-->