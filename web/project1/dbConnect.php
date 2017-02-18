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
?>