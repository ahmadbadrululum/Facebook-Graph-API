<?php

require_once 'init.php';


    // oauth facebook
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'publish_actions']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/facebook/fb-callback.php', $permissions);

// die(var_dump($loginUrl));

// echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
header('location:' . $loginUrl);

