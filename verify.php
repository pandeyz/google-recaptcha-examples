<?php
    $email; $comment; $captcha;

    if(isset($_POST['email']))
        $email=$_POST['email'];
    if(isset($_POST['comment']))
        $comment=$_POST['comment'];
    if(isset($_POST['g-recaptcha-response']))
        $captcha=$_POST['g-recaptcha-response'];

    if(!$captcha){
        echo '<h2>Please check the the captcha form.</h2>';
        exit;
    }

    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=secret_key&response=". urlencode( $captcha ) ."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
    if($response['success'] == false)
    {
        echo '<h2>You are spammer ! Get the @$%K out</h2>';
    }
    else
    {
        echo '<h2>Thanks for posting comment.</h2>';
    }
?>