<?php

$response['success'] = false;
$dsn = "mysql:dbname=googlemap_test;host=localhost;charset=utf8;";
$db = new PDO($dsn, "root", "root");
$stmt = $db->prepare("SELECT * FROM wp_properties");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(!empty($result)) {
	 $response['success'] = true;
	 $response['data'] = $result;
}

echo json_encode($response);

?>