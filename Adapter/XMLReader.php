<?php

use Interface\IFileReader;

require_once __DIR__ . '/Interfaces/IFileReader.php';

class XMLReader implements IFileReader {
    public function readFile() : string
    {
        return 'read file from xml reader';
    }
}