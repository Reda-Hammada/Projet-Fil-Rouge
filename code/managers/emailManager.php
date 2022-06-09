<?php


class Emailmanager {


    public function sendMail($email){

        $to = $email->to;
        $message = $email->getFullName(); 
        $message .= $email->getEmail();
        $message .= $email->getMessage();
        mail($to, $subject,$message, $from);
    
    }
}