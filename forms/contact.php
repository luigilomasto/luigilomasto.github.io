<?php
  $receiving_email_address = 'luigilomasto@gmail.com';
  $headers = 'From:' .  $_POST['email'] . "\r\n" .
    'Reply-To: carlomagno@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  $result = mail($receiving_email_address, $_POST['subject'], $_POST['message'],  $headers);
?>
