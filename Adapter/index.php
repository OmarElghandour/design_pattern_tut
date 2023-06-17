<?php

require_once 'JsonReader.php';
require_once 'XMLReader.php';
require_once 'FileReaderAdapter.php';

$xmlReader = new XMLReader();
$jsonReader = new JsonReader();

$adapter = new FileReaderAdapter($jsonReader);
echo $adapter->readFile() .PHP_EOL;

$adapter = new FileReaderAdapter($xmlReader);

echo $adapter->readFile().PHP_EOL;

