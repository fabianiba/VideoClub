<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '469702847278-9rm05qutp9er8i0de8m8cmgai86uo0pt.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'wTveM1gJ0eLpAwCjGQpRIa43'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost:80/smar/index.php';  //return url (url to script)
$homeUrl = 'http://localhost:80/smar/';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login to codexworld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>