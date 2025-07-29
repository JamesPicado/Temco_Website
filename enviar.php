<?php   
    if(!empty($_POST['name']) && !empty($_POST['mail']) &&  !empty($_POST['phone']) && !empty($_POST['message'])){

        $name = $_POST['name'];
        $company = $_POST['company'];
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $html = 'Name: '. $name ."\n";
        $html .= 'Company: '. $company ."\n";
        $html .= 'Mail: '. $mail ."\n";
        $html .= 'Phone: '. $phone ."\n";
        $html .= 'Subject: '. $subject ."\n";
        $html .= 'Message: '. $message ."\n";
        $destinatario = "tomast@temcousa.com";


        $header = "From: $mail" . "\r\n";
        $header .= "X-Mailer: PHP/". phpversion();
        $mail = mail($destinatario, $subject, $html, $header);
        if ($mail){
            echo "<script>alert('Correo Enviado Exitosamente')</script>";
        } else{
            echo "<script>alert('Correo No ha sido Enviado')</script>";
        }


    }
    

?>