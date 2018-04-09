<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

require_once './Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '194203597973269',
  'app_secret' => '51e2a48c64fb98dfc4bdc68676f84d33',
  'default_graph_version' => 'v2.10',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://askanythingcom.000webhostapp.com/home.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
	
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
