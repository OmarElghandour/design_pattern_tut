<?php 

require_once "Plugin.php";

$plugin = new Plugin();
$plugin->setName('testPlugin')
        ->setType('image processing');

$plugin2 = $plugin->clone();
$plugin2->setName('name test 2');
