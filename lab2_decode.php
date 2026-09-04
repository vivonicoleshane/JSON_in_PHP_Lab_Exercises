<?php

$jsonData = '{"name":"Nicole Vivo","age":23,"email":"nicole.vivo@example.com"}';

$objectData = json_decode($jsonData);

$arrayData = json_decode($jsonData, true);

echo "Object: " . $objectData->name . "<br>";
echo "Array: " . $arrayData["email"];

?>
