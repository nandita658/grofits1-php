<!DOCTYPE html>
<html>
<head>
    <title>Login & Registration Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
<div class="cont">
    <form class="form sign-in" action="validation.php" method="post">
        <h2>Sign In</h2>
        <label>
            <span>Username</span>
            <input type="text" name="name" required>
        </label>
        <label>
            <span>Password</span>
            <input type="password" name="password">
        </label>
        <button class="submit submit-primary" type="submit">Sign In</button>
    </form>

    <div class="sub-cont">
        <div class="img">
            <div class="img-text m-up">
                <h2>New here?</h2>
                <p>Sign up and discover new products!</p>
            </div>
            <div class="img-text m-in">
                <h2>One of us?</h2>
                <p>If you already has an account, just sign in. We've missed you!</p>
            </div>
            <div class="img-btn">
                <span class="m-up">Sign Up</span>
                <span class="m-in">Sign In</span>
            </div>
        </div>
        <form class="form sign-up" action="registration.php" method="post">
            <h2>Sign Up</h2>
            <label>
                <span>Username</span>
                <input type="text" name="name">
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password">
            </label>
            <button type="submit" class="submit submit-primary">Sign Up Now</button>
        </form>
    </div>
</div>
<script type="text/javascript" src="query.js"></script>
</body>
</html>