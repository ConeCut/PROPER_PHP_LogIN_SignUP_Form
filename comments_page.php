<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <title>Welcome!</title>
</head>
<body>

<h3>

    <?php

    output_username();

    ?>

</h3>

<?php

if (isset($_SESSION["user_id"])){ ?>

    <h3>Comment here</h3>
    <form action="includes/comments.inc.php" method="post">
        <input type="text" placeholder="Enter your comment here...">
        <button>Send comment</button>
    </form>

<?php } ?>

<?php

if (!isset($_SESSION["user_id"])){ ?>

<h3>Login before you comment!</h3>
<form action="includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button>Login</button>
</form>

<?php } ?>

<?php
check_login_errors();
?>

</body>
</html>
