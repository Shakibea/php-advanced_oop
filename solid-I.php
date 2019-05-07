<?php
                                    //Interface Segregation

// //monolitic interface
//     //bad function signature
// interface Vehicle{
//     function getPrice();
//     function getMilage();
//     function hasTwoTire();
//     function hasFourTire();
//     function hasSixTire();
// } 

interface Vehicle{
    function getPrice();
    function getMilage();
    function getName();
} 

interface TwoWheeleres{
    function hasTwoTire();
    //write down about two wheeleres here
}

interface FourWheeleres{
    function hasFourTire();
    //write down about four wheeleres here
}

interface SixWheeleres{
    function hasSixTire();
    //write down about Six wheeleres here
}


class MotorCycle implements Vehicle, TwoWheeleres{
    function getPrice(){

    }
    function getMilage(){

    }
    function getName(){

    }
    function hasTwoTire(){

    }
}

class PrivateCar implements Vehicle, FourWheeleres{
    function getPrice(){
        
    }
    function getMilage(){

    }
    function getName(){

    }
    function hasFourTire(){

    }
}

class Truck implements Vehicle, SixWheeleres{
    function getPrice(){
        
    }
    function getMilage(){

    }
    function getName(){

    }
    function hasSixTire(){

    }
}