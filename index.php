<?php

require_once ('./model/user.php');
require_once ('./model/tweet.php');

$user1 = new User ('Guido van Rossum', 'guido@yahoo.com', 'GuivanRos', '4everthebest');
$user2 = new User ('Rasmus Lerdorf', 'lerras@yahoo.com', 'RasmusL', 'r18a1s19');
$user3 = new User ('Brendan Eich', 'brendeich@gmail.com', 'Breneich', 'bren777');

$usersData[] = $user1;
$usersData[] = $user2;
$usersData[] = $user3;


$tweet1 = new Tweet('HE: You are ";" to my code // SHE: I code in Python', $user1->getId());
$tweet2 = new Tweet('"I have a PHP joke,” said the programmer. “But it doesn’t work on this server."', $user2->getId());
$tweet3 = new Tweet('How do you comfort a JavaScript bug? You console it', $user3->getId());

$tweetData[] = $tweet1;
$tweetData[] = $tweet2;
$tweetData[] = $tweet3;

$tweet1->addLike($user2->getId());
$tweet1->addLike($user3->getId());
$tweet1->addLike($user1->getId());
$tweet3->addLike($user3->getId());
$tweet2->addLike($user2->getId());
$tweet2->addLike($user1->getId());


foreach ($tweetData as $tweet) {
    $userAlias = $tweet->getUserId()->getAlias();
    $tweetContent = $tweet->getTweetContent();
    $likesComments = $tweet->getLikesComments();

    echo "@{$userAlias} said:  <strong> {$tweetContent} </strong><br>{$likesComments}<br><br>";
}






