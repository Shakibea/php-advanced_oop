<?php

interface BaseStorage{
    
    function setFileName($fn);
    function writeData($data);
    // function appendData($data);
    function setMode($mode);
}

class Storage implements BaseStorage{

    private $fn;
    private $data;
    private $mode;
    private $string;

    function __construct($fn, $mode=null)
    {
        $this->setFileName($fn);
        $this->setMode($mode);
    }

    function setFileName($fn)
    {
        $this->fn = $fn;
    }

    function writeData($data)
    {
        file_put_contents($this->fn, $this->data, $this->mode);
    }

    function setMode($mode)
    {
        $this->mode = $mode;
    }

    function upperCase(){
        $this->string = strtoupper($this->data);
        return $this;
    }

    // function appendData($data)
    // {
    //     file_put_contents($this->fn, $data, FILE_APPEND);
    // }

}

// class StorageManager{

//     function getMessage($fn, $data){
//         $st = new Storage($fn);
//         $st->writeData($data);
//     }
// }

class StorageManager{

    function getMessage(BaseStorage $getFile, $data){

        $getFile->writeData($data);
    }
}


// $st = new Storage("tmp\\test.txt");
$st = new Storage("tmp\\test2.txt");
$st->upperCase()
->setMode(FILE_APPEND);

$obj = new StorageManager();
$obj->getMessage($st, "Hello Programming World!!");