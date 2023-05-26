<?php 

require __DIR__ . '/Factories/PluginFactory.php';

$factory = new PluginFactory();
$plugin = $factory->createPlugin('text');
echo $plugin->perforemAction();

