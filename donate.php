<?php	require("include/config.php");
        $pageTitle = "Donate";
        $section = "donate"; 
        $subsection = "";
        require($docRoot."/include/header.php"); ?>
<h1 class="first-of-type">Donate</h1>

<div style="text-align: center"><img src="img/donate/docnccabinsunset.jpg" class="border center" /></div>

<p>The DOCNC community and cabin are incredible assets for all Dartmouth alumni/ae and their friends and families. The cabin is a truly magical place, a piece of New Hampshire transplanted to California. It has served as the entry point to Dartmouth on the West Coast for countless new students and graduates, and it provides a way of reconnecting with the Dartmouth community for more "mature" alumni/ae.</p> 

<p>Although the club has nurtured the cabin through decades of Sierra storms, it is now in need of significant repairs. We're raising funds to replace the foundation and a few key structural beams. Our goal is to raise $150,000.</p>

<p>We have a close relationship with the College, but we do not receive any funding from them. We run the club and manage the cabin based solely on membership dues and rental fees. Our budget has historically been small, as our needs have been few aside from property taxes and liability insurance.</p>

<p>Our last capital campaign was in 1985. That campaign allowed the DOCNC to clear land and create a beach on Lake Mary and to re-gravel our parking lot.</p> 

<p>Our current goal of $150,000 will cover:</p>
<ul>
    <li>A new foundation built to local building codes: earthquake ready, rot-proof, waterproof, etc.</li>
    <li>Replacement of two main structural beams that have rotted and been damaged by bugs</li>
    <li>Safety updates to the stone fireplace</li>
    <li>New industrial kitchen stove</li>
    <li>New kitchen flooring</li>
</ul>

<p>Our hope is to complete all work by summer 2009.</p>

<p>Can we count on you for a gift?</p>

<? echo $payPalCode; ?>

<p>To pay by check, please send payment to the following address and note your year of graduation:<br /> 
DOCNC <br/>
c/o Brendan Nagle <br/>
1010 16th street, Apt 269 <br/>
San Francisco, California 94107</p>

<p>If you can help us fundraise, please contact us at <? echo mailLink('information@docnc.net'); ?></p>

<?php    require($docRoot."/include/footer.php"); ?>