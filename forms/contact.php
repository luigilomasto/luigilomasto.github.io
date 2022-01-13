<?php
  $receiving_email_address = 'luigilomasto@gmail.com';
  $result = mail($receiving_email_address, $_POST['subject'], $_POST['message'],  "FROM: $_POST[email]");
?>
