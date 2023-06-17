<?php

use Interface\IFileReader;

require_once __DIR__ . '/Interfaces/IFileReader.php';


class JsonReader implements IFileReader {
    public function readFile() : string
    {
        return 'read from json reader';
    }
}