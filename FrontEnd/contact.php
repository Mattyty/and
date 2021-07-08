<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];



    $mailTo = "matttyldesley@live.co.uk";
    $headers = "From: ". $mailFrom;
    $txt = "You have received an email from ". $name.".\n\n".$message;

    mail($mailTo, $contact, $txt, $headers);
    header("Location: index.php?mailsend");
}