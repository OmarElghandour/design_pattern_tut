<?php 


require_once __DIR__ . '/Interfaces/IFileReader.php';

use Interface\IFileReader;

class FileReaderAdapter implements IFileReader  {
    private IFileReader $fileReader;

    public function __construct(IFileReader $fileReader) {
        $this->fileReader = $fileReader;
    }


    public function readFile() : string{ 
        echo 'reader ____________________';
       return $this->fileReader->readFile();
    }
}
