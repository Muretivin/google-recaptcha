<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $secretKey = "your_secret_key";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
    $response = file_get_contents($url);
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        echo "Please complete the CAPTCHA.";
    } else {
        echo "CAPTCHA completed successfully. You are verified as a human!";
    }
} else {
    echo "Invalid request method.";
}
?>
