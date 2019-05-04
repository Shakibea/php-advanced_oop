<?php

interface BaseStudent{
    function displayName();
}

class Student implements BaseStudent{

    private $name;
    function __construct($name)
    {
        $this->name = $name;
    }

    function displayName()
    {
        echo "Welcome to our service ".$this->name;
    }
}

class ImproveStudent implements BaseStudent{

    private $name;
    private $title;
    function __construct($title, $name)
    {
        $this->name = $name;
        $this->title = $title;
    }

    function displayName()
    {
        echo "Welcome to our Company {$this->title}. {$this->name}";
    }
}

// class StudentManager{
    
//     function instruction($name){
//         $st = new Student($name);
//         $st->displayName();
//     } 
// }

class StudentManager{
    
    function introduceStudent(BaseStudent $student){        //using type hinting
        $student->displayName();
    } 
}

// $dt = new DateTime();

$st = new Student("Arthur Morgan");
$ist = new ImproveStudent("Mr","Arthur Morgan");

$sm = new StudentManager();
$sm->introduceStudent($ist);     // or use,,, instruction(new Student("Arthur Morgan"))