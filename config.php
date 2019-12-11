<?php

session_start();
require_once "googleapi/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("634416783604-soj65aq98t23g0glia7nd611sjtdjoiv.apps.googleusercontent.com");
$gClient->setClientSecret("2fd04eIdLmfK5SC9Gfat9Gfg");
$gClient->setApplicationName("Oauth");
$gClient->setRedirectUri("http://localhost/Oauth/g-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

?>