<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="all, index, follow" />
		<meta name="description" content="Dartmouth Outing Club of Northern California" />
		<title>DOCNC - <? echo $pageTitle; ?></title>
		<link rel="SHORTCUT ICON" href="<? echo $webRoot; ?>favicon.ico" /> 
		<link href="<? echo $webRoot; ?>include/styles.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $webRoot; ?>include/lightbox.css" rel="stylesheet" type="text/css" />
		<?  if($section == "about") { ?>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.6.0/build/container/assets/skins/sam/container.css">
        <?  }   ?>
        <script src="<? echo $webRoot; ?>include/script.js" type="text/javascript"></script>
        <script type="text/javascript" src="<? echo $webRoot; ?>include/lightbox_js/prototype.js"></script>
        <script type="text/javascript" src="<? echo $webRoot; ?>include/lightbox_js/scriptaculous.js?load=effects,builder"></script>
        <script type="text/javascript" src="<? echo $webRoot; ?>include/lightbox_js/lightbox.js"></script>
        <?  if($section == "about") { ?>
        <script type="text/javascript" src="http://yui.yahooapis.com/2.6.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>
        <script type="text/javascript" src="http://yui.yahooapis.com/2.6.0/build/container/container-min.js"></script>
        <?  }   ?>
    </head>
	<body class="yui-skin-sam">
	  <div id="bodyWrapper">
		<div id="header"></div>
        <ul id="headerNav">
            <li class="first-of-type">
                <a href="<? echo $webRoot; ?>index.php" class="nav<? if ($section == "home") { ?>On<? } ?>">Home</a>
            </li>
            <li>
                <a href="<? echo $webRoot; ?>about.php" class="nav<? if ($section == "about") { ?>On<? } ?>">About</a>
            </li>
            <li>
                <a href="<? echo $webRoot; ?>cabin.php" class="nav<? if ($section == "cabin") { ?>On<? } ?>">Cabin</a>
            </li>
            <li>
                <a href="<? echo $webRoot; ?>join.php" class="nav<? if ($section == "join") { ?>On<? } ?>">Join</a>
            </li>
            <li>
                <a href="<? echo $webRoot; ?>donate.php" class="nav<? if ($section == "donate") { ?>On<? } ?>">Donate</a>
            </li>
            <li>
                <a href="<? echo $webRoot; ?>events.php" class="nav<? if ($section == "events") { ?>On<? } ?>">Events</a>
            </li>
            <li>
                <a href="<? echo $webRoot; ?>photos.php" class="nav<? if ($section == "photos") { ?>On<? } ?>">Photos</a>
            </li>
        </ul>
		<div id="main">
			<div id="leftNav">
                <div class="button" onclick="location.href='<? echo $webRoot; ?>join.php'">JOIN TODAY!</div>
                <div class="box">
                    <div class="boxTop">Contact Us</div>
                    <div class="boxBottom" align="center"><? echo mailLink('information@docnc.net','Send an email!'); ?></div>
                </div>
                <div class="box">
                	<div class="boxTop">Upcoming Events</div>
                	<div class="boxBottom">
					    
					    <ul class="first-of-type">
                			<li> <a href="http://evite.me/tDD8vHwhZC">Winter Carnival West<br>March 4-5, 2017</a></li>
                			<li>Spring Work Weekend<br>June 17-18, 2017</a></li>
                		</ul>
                		
					</div>
				</div>			
                <div class="box">
                    <div class="boxTop">DOCNC Links</div>
                    <div class="boxBottom">
                    
                                            	<ul class="first-of-type">
                        		<li><a href="http://www.facebook.com/group.php?gid=7049436946&v=wall"><img src="img/site/facebooklogo.png" /></a><a href="http://www.facebook.com/group.php?gid=7049436946&v=wall">Join us on Facebook</a></li>
                        	</ul>
                        	
                        <h4 class="first-of-type">Cabin Use</h4>
                        	<ul class="first-of-type">
                        		<li><a href="downloads/DOCNC_Cabin_Information.pdf"><img src="img/site/PDF_icon.gif" /></a><a href="downloads/DOCNC_Cabin_Information.pdf">Cabin Instructions</a></li>
                        	</ul>
                 
                        	
                        <h4>Weather &amp; Conditions</h4>
                        <ul>
                            <li><a href="http://www.virtualtahoe.com/SkiTahoe/Weather.html">Tahoe Weather</a></li>
                            <li><a href="http://iwin.nws.noaa.gov/iwin/textversion/state/ca.html">California Weather</a></li>
                            <li><a href="http://www.dot.ca.gov/hq/roadinfo">California Road Info</a></li>
                            <li><a href="http://www.fs.usda.gov/main/tahoe/home">Tahoe National Forest</a></li>
                            <li><a href="http://www.tahoeculture.com/outside/ski-culture-at-tahoe/western-skisport-museum-boasts-california-skiing-legends-2/">Western Ski Sport Museum</a></li>
                            <li><a href="http://cdec.water.ca.gov/snow">California Snow</a></li>
                            <li><a href="http://www.sierraavalanchecenter.org/2015-03-29-065604#simple">Sierra Avalanche Center</a></li>
                        </ul>
                            
                        <h4>Area &amp; Activities </h4>
                        <ul>
                            <li><a href="http://www.sugarbowl.com">Sugarbowl Ski Resort</a></li>
                            <li><a href="http://www.donnerskiranch.com">Donner Ski Ranch</a></li>
                            <li><a href="http://www.skisodasprings.com">Soda Springs Ski &amp; Snow Park</a></li>
                            <li><a href="http://www.royalgorge.com">Royal Gorge X-Country</a></li>
                            <li><a href="http://www.babesinthebackcountry.com">Babes in the Backcountry</a></li>
                            <li><a href="https://tahoe.com/things-to-do/summer-activities">Tahoe Summers</a></li>
                            <li><a href="http://www.tahoebike.org">Biking</a></li>
                            <li><a href="http://www.theflumetrail.com">The Flume Trail</a></li>
                            <li><a href="http://www.rockclimbing.com/routes/North_America/United_States/California/Lake_Tahoe/Donner_Summit">Donner Summit Climbing</a></li>
                            <li><a href="http://www.donnersummithistoricalsociety.org/pages/storiespages/petroglyphs.html">Donner Summit Petroglyphs</a></li>
                            <li><a href="http://www.sierrahotsprings.org">Sierra Hot Springs</a></li>
                            <li><a href="http://www.pcta.org">Pacific Crest Trail Association</a></li>
                            <li><a href="http://www.donnersummitareaassociation.org">Donner Summit Area Association</a></li>
                            <li><a href="http://northernsierrapartnership.org/american-river-headwaters/">Northern Sierra Partnership</a></li>
                            <li><a href="http://www.donnersummithistoricalsociety.org">Donner Summit Historical Society</a></li>
                        </ul>
                        
                        <h4>Dartmouth Links</h4>
                        <ul>
                            <li><a href="http://www.dartmouth.edu">Dartmouth College</a></li>
                            <li><a href="http://outdoors.dartmouth.edu/doc/">Dartmouth Outing Club</a></li>
                            <li><a href="http://sanfrancisco.dartmouth.org/s/1353/clubs-classes-start.aspx?gid=203&pgid=61">Dartmouth Club of Greater San Francisco</a></li>
                            <li><a href="http://www.dartmouth.org/clubs/daasv">Dartmouth Alumni Association of Silicon Valley</a></li>
                        </ul>
    				</div>
    			</div>
            </div>			
		    <div id="content">			