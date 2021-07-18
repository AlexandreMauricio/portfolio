<?php
    $from = $_POST["email"];
    $name = $_POST["name"];
    $to      = 'alexandre.s.mauricio2000@gmail.com';
    $subject = $_POST["tema"];
    $message = $_POST["mensagem"];
    $headers = 'From: {$from} called {$name}'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>