<?php
                        //Dependency Inversion Principle

// //bad singture of writting oop
//     //hard dependency through one class pass another class
// class Authenticator{
//     function authenticate($username, $password, $external=false, $externalService=false){
//         if($external==true && 'Google' == $externalService){
//             $bb = new BitBucketAuthentical();
//             $bb->authenticate();
//         }elseif($external==true && 'Google' == $externalService){
//             $gh = new GithubAuthentical();
//             $gh->authenticate();
//         }else{
//             $la = new LocalAuthentical();
//             $la->authenticate();
//         }
//     }
// }

interface AuthServiceProviderInterface{
    function authenticate();
}

class GithubAuthentical implements AuthServiceProviderInterface{
    function authenticate(){
        echo "Github Authentical";
    }
}
class BitBucketAuthentical implements AuthServiceProviderInterface{
    function authenticate(){
        echo "BitBucket Authentical";
    }
}

class Authenticator{

    private $serviceProvider;
    function __construct(AuthServiceProviderInterface $asp){
        $this->serviceProvider = $asp;
    }
    function maintainAuthenticate(){
        $this->serviceProvider->authenticate();
    }
}

$github = new GithubAuthentical();
$bitbucket = new BitBucketAuthentical();

$auth = new Authenticator($github);
$auth2 = new Authenticator($bitbucket);
$auth->maintainAuthenticate();
$auth2->maintainAuthenticate();
