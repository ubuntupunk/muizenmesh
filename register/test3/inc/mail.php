<?php

$subject = 'This is a test email';

$message = <<<MSG
    Hi,
    This is a simple email.
    It's sent from PHP.
MSG;

wordwrap($message, 70, "\r\n");

mail('ubuntupunk@gmail.com', $subject, $message);
