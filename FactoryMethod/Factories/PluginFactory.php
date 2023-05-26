<?php 

require __DIR__ . '/../Interfaces/PluginFactoryInterface.php';
require __DIR__ . '/../TextPlugin.php';
require __DIR__ . '/../ImagePlguin.php';

class PluginFactory implements PluginFactoryInterface {

    private $pluginsFactories = [
        'text' =>  TextPlugin::class,
        'image' => ImagePlugin::class,
    ];
    
    public function createPlugin(String $pluginName) : Plugin {
        
        if(isset($this->pluginsFactories[$pluginName])) {
            $className = $this->pluginsFactories[$pluginName];
            return new $className();
        }

        throw new Exception('not allowed plugin type');
    }
}