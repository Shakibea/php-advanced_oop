<?php



//basic oop style
class Mailer{
    function mailBody($to, $from, $subject, $message, $attachment){

    }
    function connectMTA($mtaType, $username, $password){

    }
    function prepare($to, $from, $subject, $message){

    }
    function sendMail(){

    }
}



//advanced oop style... solid principle... single responsibility principle
class BetterMailer{

    function __construct(MailerGatewayInterface $mg, MailerBodyInterface $mb, AttachmentInterface $atm)
    {
        $this->mg = $mg;
        $this->mb = $mb;
        $this->atm = $atm;
    }

    function sendMail($to, $from, $subject, $message, $file){

        $mailBody = $this->mb->prepare($to, $from, $subject, $message);
        $this->atm->addAttachment($file);
        // $this->mg->connect($type, $username, $password)->send();
        $this->mg->connect();
        $this->mg->send($mailBody);
    }

}