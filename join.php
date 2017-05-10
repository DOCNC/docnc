<?php	require("include/config.php");
        $pageTitle = "Join";
        $section = "join"; 
        $subsection = "";
        require($docRoot."/include/header.php"); ?>
<h1 class="first-of-type">Join</h1>

<div style="text-align: center"><img src="img/join/docncjump.jpg" class="border center" /></div>

<p>We invite all alumni and alumnae of Dartmouth College or any of its graduate programs and any current student to join the DOCNC, use the cabin and participate in our club activities. We're also always grateful for help from those with useful expertise, whether that be in fundraising, firewood stacking, or home repairs.</p> 

<p>The only requirement is the annual DOCNC membership fee, which is $40/year for alumni/ae who graduated in the last 10 years and $50/year for those who graduated over 10 years ago. The DOCNC's membership year does not match the calendar year but rather runs from October (near the beginning of ski season!) through the following September.</p>

<p>Only DOCNC members can reserve the cabin. Members also receive periodic DOCNC emails/newsletters, advance notice of club events and occasional discounts and insider tracks on out-o-doors stuff!</p>

<a href="img/join/docncgame.jpg" rel="lightbox"><img src="img/join/docncgame-s.jpg" class="right border" /></a>

<p>Please send any questions you might have to <? echo mailLink('information@docnc.net'); ?></p>

<p>You can send your membership fees by PayPal or by mail:</p>

<? echo $payPalCode; ?>

<p>To pay by check, please send payment to the following address and note your year of graduation:<br /> 
DOCNC <br/>
c/o Brendan Nagle <br/>
1010 16th street, Apt 269 <br/>
San Francisco, California 94107</p>

<?php    require($docRoot."/include/footer.php"); ?>