<?php require 'vendor/autoload.php';
$m = new MongoDB\Client("mongodb://localhost:27017"); 
$db = $m -> users; 
$collection = $db->Amazon_Automotive;
$stringtext = $_POST["searches"];
$collection -> createIndex(array('summary' => 1));
$query = array('summary' => array('$regex' => $stringtext));
//$query = array('summary' => $stringtext);
$cursor = $collection -> find($query);
foreach ($cursor as $doc) {
	var_dump($doc);
	echo "<br/>";
	echo "<br/>";
}
?>

