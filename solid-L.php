<?php

//Liskov Substutition Principle 


abstract class Bird{
    abstract function eat();
    abstract function sleep();
}

abstract class FlyingBird extends Bird{
    abstract function fly();
}
abstract class WalkingBird extends Bird{
    abstract function walk();
}

//hierarchically inheriant 
    //very usefull
abstract class TalkBird extends FlyingBird{  
    abstract function talk();
}

class BirdManager{
    
    function maintainBird(Bird $b){
        $b->eat();
        $b->sleep();
    }
    function moveFlyingBird(FlyingBird $fb){
        $fb->fly();
    }
    function moveWalkingBird(WalkingBird $wb){
        $wb->walk();
    }
    function canTalkBird(TalkBird $tb){
        $tb->talk();
    }

    //creating method for class 
            //optional, I use for check that
    function __call($name, $arg){
        if('runningBird' == $name){
            if($arg){
                echo "Bird running at {$arg[0]}\n";
            }else{
                echo "Bird running\n";
            }
        }
    }

}

class Eagle extends FlyingBird{

    function eat(){
        
    }
    function sleep(){
        
    }
    function fly(){
        
    }
}
class Parrot extends TalkBird{
    
    private $name;
    function __construct($name="")
    {
      $this->name = $name;  
    }
    function eat(){
        echo "eating {$this->name}\n";
    }
    function sleep(){
        echo "sleeping {$this->name}\n";
    }
    function fly(){
        echo "flying {$this->name}\n";
    }
    function talk(){
        echo "talking {$this->name}\n";
    }
}

class Penguin extends WalkingBird{

    function eat(){
        
    }
    function sleep(){
        
    }
    function fly(){
        
    }
    function walk(){

    }
}

// $parrot = new Parrot();  ////without param....
$parrot = new Parrot('Parrot'); 

$bm = new BirdManager();
$bm->maintainBird($parrot);
$bm->moveFlyingBird($parrot);
$bm->canTalkBird($parrot);

//from magic function
$bm->runningBird('100kmph'); 


