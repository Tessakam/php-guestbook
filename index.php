<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//compile other files
require 'index.html';
require 'PostLoader.php';
require 'Post.php';
require 'posts.json';

//creates variables
$postLoader = new PostLoader();
$post = new Post($title, $firstName, $lastName, $content);
$postLoader->addPost($post);

//save the post after submit
//make sure script can handle website defacement
if (isset($_POST['submit'])) {
    $title = htmlspecialchars
    $firstName = htmlspecialchars
    $lastName = htmlspecialchars
    $content = htmlspecialchars
}

session_start(); // put the session behind the require

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION['blackjack']);
}
//whatIsHappening();
?>
