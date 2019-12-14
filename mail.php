<?php
    $to = 'teensocketng@gmail.com';
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email= $_POST["email"];
    $subject= $_POST["subject"];
    $text= $_POST["message"];
   
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'  '.$subject.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
         <tr><td>Phone: '.$number.'</td></tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
       echo 'Your message has been sent.';
    }else{
        echo 'failed';
    }

?>
