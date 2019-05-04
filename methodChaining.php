<?php

class StringUtility{
    
    private $string;
    private $search;
    function __construct($string)
    {
        $this->string = $string;
        return $this;
    }

    function search($string){
        $this->search = $string;
        return $this;
    }

    function replace($string){
        if(!isset($this->search)){
            throw new Exception("No search Found");
        }
        $this->string = str_replace($this->search, $string, $this->string);
        return $this;
    }

    function upperCase(){
       $this->string = strtoupper($this->string);
        return $this;
    }
    function lowerCase(){
        $this->string = strtolower($this->string);
        return $this;
    }

    function print(){
        echo $this->string;
    }

}


$obj = new StringUtility("Hello Programming World");

$obj->search("World")
->replace("Earth")
->search("Hello")
->replace("Hey")
->upperCase()
// ->lowerCase()
->print();


////Old Style...
// $ss = "Hello World";

// $str = str_replace("Hello", "Hey", $ss);

// echo $str;