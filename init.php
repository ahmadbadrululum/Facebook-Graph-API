<?php 

session_start();
require "sdk-facebook/src/Facebook/autoload.php";
$fb = new Facebook\Facebook([
    'app_id' => '2046951508734990',
    'app_secret' => '1cb7a3521724f3747c6647b38faf342a',
    'default_graph_version' => 'v3.2',
  ]);