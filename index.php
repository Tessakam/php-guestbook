<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//compile other files
require 'PostLoader.php';
require 'Post.php';
require 'posts.json';

//creates variables
$postLoader = new PostLoader();

//save the post after submit
//make sure script can handle website defacement
if (isset($_POST['submit'])) {
    $title = htmlspecialchars(trim($_POST['title']));
    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $lastName = htmlspecialchars(trim($_POST['lastName']));
    $content = htmlspecialchars(trim($_POST['content']));

$post = new Post($title, $firstName, $lastName, $content); //make sure the variaables are IN the submit, otherwise undefined!
$postLoader->addPost($post);
$postLoader->save();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My guestbook</title>
</head>
<body>

<div class="field">
    <h1>Welcome to my guestbook!</h1>
    <p>Feel free to leave a message in my guestbook, I'm happy to read your comments.</p>
</div>

<form name="guestbook" method="post">
    <div class="field">
        <input type="text" class="form-control" name="title" placeholder="Title: your subject *" required> <br><br>
        <input type="text" class="form-control" name="firstName" placeholder="First name *" required>
        <input type="text" class="form-control" name="lastName" placeholder="Last name *" required><br>
    </div>

    <div class="message">
        <br><textarea class="form-control" name="message" placeholder="Your message *" required maxlength="2000" style="width: 500px"></textarea>
    </div>

    <div class="action">
        <div>
            <br>
            <button type="submit" name="submit">SUBMIT</button>
        </div>
    </div>

    <div>
        <h1>Recent posts!</h1>
        <?php echo $postLoader;
        ?>
    </div>

</form>

</body>
</html>

<?php
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
whatIsHappening();
?>
