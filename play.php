<head>
  <title>Pong!</title> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
  <link href="pong.css" media="screen, print" rel="stylesheet" type="text/css" /> 
</head>

<?php
/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */

/* Load required lib files. */
session_start();
require_once('playerOne/twitteroauth/twitteroauth.php');
require_once('playerOne/config.php');

/* If access tokens are not available redirect to connect page. */
if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./playerOne/clearsessions.php');
}
/* Get user access tokens out of the session. */
$access_token = $_SESSION['access_token'];

/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

/* If method is set change API call made. Test is called by default. */
$content = $connection->get('account/verify_credentials');

/* Include HTML to display on the page */
//include('signin.inc');

/* Include HTML to display on the page */
include('game.php');

/* Include HTML to display on the page 
include('html.inc'); */