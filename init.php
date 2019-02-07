<?php 
session_start();
require "sdk-facebook/src/Facebook/autoload.php";


$fb = new Facebook\Facebook([
    'app_id' => '376625249554830',
    'app_secret' => '2a3f0b2e2225087cf3d0b7d98cba0cef',
    'default_graph_version' => 'v2.10',
  ]);