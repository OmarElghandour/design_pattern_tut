<?php 

require_once 'Plugin.php';

interface PluginFactoryInterface {
    public function createPlugin(string $pluginName) : Plugin;
}

