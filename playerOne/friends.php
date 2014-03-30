<!doctype>
<html>
<head>
</head>

<body>
<?php
/**
 * @file
 * 
 */

/* Load required lib files. */
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');


/* If access tokens are not available redirect to connect page. */
if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}

/* Get user access tokens out of the session. */
$access_token = $_SESSION['access_token'];

/* Create a TwitterOauth object with consumer/user tokens. */
$oAuth = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

/* Get User ID */
$content =  $oAuth->get('account/verify_credentials');
$id = $content->id;
$name = $content->screen_name;

//Get Friends + Image METHODS
$friends = $oAuth->get('friends/ids');
$getImages = $oAuth->get('friends');

//Friends ID + Image
$friendOne = ($friends->ids[1]);
$friendOneImage = ($getImages->users[1]->profile_image_url);

$friendTwo = ($friends->ids[2]);
$friendTwoImage = ($getImages->users[2]->profile_image_url);

$friendThree = ($friends->ids[3]);
$friendThreeImage = ($getImages->users[3]->profile_image_url);

$friendFour = ($friends->ids[4]);
$friendFourImage = ($getImages->users[4]->profile_image_url);

$friendFive = ($friends->ids[5]);
$friendFiveImage = ($getImages->users[5]->profile_image_url);

$friendSix = ($friends->ids[6]);
$friendSixImage = ($getImages->users[6]->profile_image_url);

$friendSeven = ($friends->ids[7]);
$friendSevenImage = ($getImages->users[7]->profile_image_url);

$friendEight= ($friends->ids[8]);
$friendEightImage = ($getImages->users[8]->profile_image_url);

$friendNine = ($friends->ids[9]);
$friendNineImage = ($getImages->users[9]->profile_image_url);

?>


</body>
</html>