<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Human Verification with reCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <form action="verify_recaptcha.php" method="post">
        <div class="g-recaptcha" data-sitekey="your_site_key"></div>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
