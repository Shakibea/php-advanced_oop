<?php

// class MediaPlayer{

//     private  $file;
//     private $fileType;

//     function player($file, $fileType){
//         if('mp4' == $fileType){
//             //Display Video Player;
//         }elseif('mp3' == $fileType){
//             //Display Audio Player;
//         }elseif('jpg' == $fileType){    //modified
//             //Display Audio Player;
//         }else{
//             //Display text file;
//         }
//     }
// }



interface MediaInterface{
    function display();
}


class ImproveMediaPlayer{
     
    function mediaPlayer(MediaInterface $media){
        $media->display();
    }
}

class MediaInfo implements MediaInterface{
    
    function display()
    {
        echo "Hello Info";
    }
}

class VideoPlayer implements MediaInterface{
    function display()
        {
            echo "Hello Video Player";
        }
}


class AudioPlayer implements MediaInterface{
    function display()
        {
            echo "Hello Audio Player";
        }
}

$info = new MediaInfo();
$audio = new AudioPlayer();
$video = new VideoPlayer();

$obj = new ImproveMediaPlayer();
$obj->mediaPlayer($info);
$obj->mediaPlayer($audio);