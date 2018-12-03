<?php
  if (isset($_POST['send'])) {
    $to = 'contactmiaske@gmail.com';
    $subject = 'Contact';
  }

  $message .= 'Name: ' . $_POST['name'] . "\r\n\r\n";
  $message .= 'Message: ' . $_POST['comments'];

  $headers = "From: " . $_POST['email'] . "\r\n";
  $headers .= "Content-Type: text/plain; charset=utf-8";

  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  if ($email) {
    $headers .= "\r\nReplay-To: $email";
  }

  $success = mail($to, $subject, $message, $headers, '-fcontactmiaske@gmail.com');
?>

<!DOCTYPE html>
<html>
<body>
  <?php if (isset($success) && $success) { ?>
  <h1>Thank You</h1>
  <p>Your message has been sent.</p>
  <p>You are being redirected back to http://www.miaske.com</p>
  <script src="scripts/jquery-3.2.1.min.js"></script>
  <script>
  setTimeout(function () {
    window.location.replace("http://www.miaske.com");
  }, 1000);
  </script>
<?php } else { ?>
  <h1>Oops!</h1>
  <p>Sorry, there was a problem sending your message.</p>
<?php } ?>
</body>
</html>
