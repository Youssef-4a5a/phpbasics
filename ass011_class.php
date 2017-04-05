<?php
class fileHandler{
    var $fileName;
    var $fileContent;
    
    function __construct(){
        $this->fileName = $fileName;
        $this->fileContent = $fileContent;
    }
    
    function create($fileName, $fileContent){
        $file = $fileName . ".txt";
        $file = fopen($file, "w");
        fputs($file, $fileContent);
    }
    
    function update($fileName, $fileContent){
        $file = $fileName . ".txt";
        $file = fopen($file, "a");
        fputs($file, $fileContent);
    }
    
    function read($fileArray){
        $file = $fileName . ".txt";
        $explode(" ", $file);
        foreach($fileArray as $file){
            echo "1";
        }
    }
    
    function delete($fileName){
        $file = $fileName . ".txt";
        $file = unlink($file);
        
        if($file !== TRUE){
            echo "No such file exists.";
        }
    }
    
    function multifiles($fileArray){
        $this->create($fileName, $fileContent);
        
        $file = $fileName . ".txt";
        $explode(" ", $file);
        foreach($fileArray as $file){
            echo "1";
        }
    }
}
?>