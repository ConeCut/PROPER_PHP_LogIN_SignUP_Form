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

if (!isset($_SESSION["user_id"])){ ?>

    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
    </form>

<?php } ?>

<?php
if (isset($_SESSION["user_id"])){ ?>

<h3>Comments</h3>
<form action="includes/comments.inc.php" method="post">
    <button>Go comment something!</button>
</form>

<?php } ?>

<?php
check_login_errors();
?>

<form action="includes/signup.inc.php" method="post">
    <?php
    signup_inputs()
    ?>
    <button>Signup</button>
</form>

<?php
check_signup_errors();
?>

<h3>Logout</h3>
<form action="includes/logout.inc.php" method="post" class="logoutForm">
    <button>Logout</button>
</form>

</body>
</html>