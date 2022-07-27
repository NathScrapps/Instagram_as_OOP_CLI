<?php
require 'vendor/autoload.php';
use Nathscrapps\Phppoo\modelos\ImagePost;
use Nathscrapps\Phppoo\modelos\VideoPost;
use Nathscrapps\Phppoo\modelos\User;

// create users
$natanael = new User("Natanael Corona", "NathScrapps", "jc4782071@gmail.com", "password1");
$angel = new User("Angel Javier", "Javi", "jav12@gmail.com", "123456789");
$brandon = new User("Brandon Guadalupe", "BrandKraneo", "kraneoMasta@gmail.com", "wertyuiop121");
$andres = new User("Andres Cajero", "TonyMontana", "skajero@gmail.com", "qw32kl0998");

// create posts
$natanaelPost = new ImagePost("De vacaciones en la miseria", "miseria.jpeg");
$angelPost = new ImagePost("De vacaciones en la playa", "IMG001.jpeg");
$brandonPost = new VideoPost("Aprendiendo combate", "VID001002.mov");
$andresPost = new VideoPost("En la fiesta con misamigos", "VID011032.mov");

/*     published posts      */ 
$natanael->publish($natanaelPost);
$angel->publish($angelPost);
$brandon->publish($brandonPost);
$andres->publish($andresPost);

/*       add likes        */ 
$natanaelPost->addLike($angel);
$natanaelPost->addLike($brandon);
$natanaelPost->addLike($andres);

$angelPost->addLike($natanael);
$angelPost->addLike($angel);
$angelPost->addLike($brandon);
$angelPost->addLike($andres);

$brandonPost->addLike($natanael);
$brandonPost->addLike($andres);

$andresPost->addLike($natanael);
$andresPost->addLike($brandon);

/*       add followers        */ 
$natanael->addFollower($angel);
$natanael->addFollower($brandon);
$natanael->addFollower($andres);

$angel->addFollower($natanael);
$angel->addFollower($brandon);
$angel->addFollower($andres);

$brandon->addFollower($natanael);
$brandon->addFollower($andres);

$andres->addFollower($natanael);
$andres->addFollower($brandon);

/*       show profiles        */ 
print_r(User::showProfile($natanael));
print_r(User::showProfile($angel));
print_r(User::showProfile($brandon));
print_r(User::showProfile($andres));

/*  show posts info*/
print_r($natanaelPost->toString());
print_r($angelPost->toString());
print_r($brandonPost->toString());
print_r($andresPost->toString());


?>