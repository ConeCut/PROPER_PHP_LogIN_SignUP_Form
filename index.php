<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/reset.css" type="text/css">
</head>
<body>

<header>
    <h3><?php output_username(); ?></h3>
</header>

<main>
    <?php if (!isset($_SESSION["user_id"])): ?>
        <section class="login-section">
            <h3>Login</h3>
            <form action="includes/login.inc.php" method="post" class="login-form">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button>Login</button>
            </form>
        </section>
    <?php endif; ?>

    <?php if (isset($_SESSION["user_id"])): ?>
        <section class="comments-section">
            <h3>Comments</h3>
            <form action="includes/comments.inc.php" method="post" class="comments-form">
                <button>Go comment something!</button>
            </form>
        </section>
    <?php endif; ?>

    <?php check_login_errors(); ?>

    <section class="signup-section">
        <form action="includes/signup.inc.php" method="post" class="signup-form">
            <?php signup_inputs(); ?>
            <button>Signup</button>
        </form>
    </section>

    <?php check_signup_errors(); ?>
</main>

<footer>
    <h3>Logout</h3>
    <form action="includes/logout.inc.php" method="post" class="logout-form">
        <button>Logout</button>
    </form>
</footer>

</body>
</html>
