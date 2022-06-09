<?php


class Emailmanager {


    public function sendMail($email){

        $to = $email->to;
        $message = $email->getMessage(); 
        $subject ='mail from contact form';
        $from = 'From:' . $email->getEmail();
        ini_set();
        mail($to, $subject,$message, $from);
    
    }
}