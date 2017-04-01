<?php require 'vendor/autoload.php';
$m = new MongoDB\Client("mongodb://localhost:27017"); 
$db = $m -> users; 
$collection = $db->tweets_sandy;
$stringtext = $_POST["searches"];
$collection -> createIndex(array('text' => 1));
$query = array('text' => array('$regex' => $stringtext));
//$query = array('summary' => $stringtext);
$cursor = $collection -> find($query);
if ($cursor) {
foreach ($cursor as $doc) {
	var_dump($doc);
	echo "<br/>";
	echo "<br/>";
}
}
else {
	echo "No matching tweet found";
}
?>

