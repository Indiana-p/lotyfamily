<?php
$to = "philippe.loty@gmail.com"; 
$subject = "Test mail PHP"; 
$content = "Le corp du message";
$headers = "From: Website <SendingEmail@lotyfamily.com>\r\nReply-To: SendingEmail@lotyfamily.com";

if (mail($to, $subject, $content, $headers))
echo "The email has been sent successfully!";
else
echo "Email did not leave correctly!";
?>
