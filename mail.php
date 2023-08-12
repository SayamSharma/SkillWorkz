<?php
    $to =  "Hr@skillworkz.co.uk";//Hr@skillworkz.co.uk
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $from = $_POST['email'];
    $headers = "From:" . $from;
    

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }

if(!empty($_GET['message'])) {
    $message = $_GET['message'];
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

function redirect_to( $location = NULL ) {
    if ($location != NULL) {
        header("Location: $location");
        exit;
    }
}
?>
