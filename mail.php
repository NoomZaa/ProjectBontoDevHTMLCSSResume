
<?php
$to      = 'noomstudio4@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com'       . "\r\n" .
             'Reply-To: webmaster@example.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>


<?php

    if(isset($_POST["sendmail"])){

        $to = "noomstudio4@gmail.com"; 
        $from = $_POST["email"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $headers = "From: $from";
        $message = $_POST["message"];

        $body = "User Message \n";
        $body .= " \n\n\t Name: ".$name;
        $body .= " \n\n\t Email: ".$email;
        $body .= " \n\n\t Subject: ".$subject;
        $body .= " \n\n\t Message: ".$message;

        $sendmail = mail($to, $subject, $body, $headers);

        if($sendmail){
            echo $to;
            echo "<br><br>".$subject;
            echo "<br><br>".$body;
            echo "<br><br>".$headers;
            echo "<br><br>";
            echo '<label class="success">Sent your <b>e-mail.</b></label>';
        }else{
            echo '<label class="error">Something went wrong! please try again.</label>';
        }

    }

?>