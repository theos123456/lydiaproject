<?php
$to      = 'byagutangaza@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: gisayvan53@gmail.com' . "\r\n" .
    'Reply-To: gisayvan53@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 