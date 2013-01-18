<?php
// ***** PHP Init *****
error_reporting(E_ALL & ~E_NOTICE);
if (isset($_COOKIE["cockeyed"])) $beer = 1;
if (isset($_SERVER['QUERY_STRING'])) {
   $aArrSrc = explode("&", $_SERVER['QUERY_STRING']);
   foreach ($aArrSrc as $pair) {
     $qryArr = explode("=", $pair);
     ${$qryArr[0]} = $qryArr[1];
   }
   if ($cookieset == 1){
        $expire=time()+60*60*24*30;
        setcookie("cockeyed", "true", $expire);
        $beer = 1;
   } elseif ($cookieset == 2){
       setcookie("cockeyed", "", time()-3600);
       $beer = 0;
   }
}
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
"http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Kinetic Brewing - BWF2103 - Cockeyed Cooper</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0;
maximum-scale=3.0; user-scalable=yes" />
<meta name="HandheldFriendly" content="True" />
<link rel="apple-touch-icon" href="icons/kbc_icon.png" />
<link rel="stylesheet" type="text/css" href="css/mobilesetup.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body onload="setTimeout(function() { window.scrollTo(0, 1) },
100);"><div id="header"><a href="main.php"><img
src="images/subheader.gif" /></a></div>
<?php echo $msg; ?>
<div class="beerbox">
    <a href="http://www.crookedlinebeers.com/CockEyedCooper.html#love">
        <p>
        <span class="rightarrows"><img src="images/right-arrows.png"></span>
        <span class="beername">Cockeyed Cooper</span>
        <span class="beerstyle">Bourbon Barrel Barleywine</span>
        <span class="brewery">Uinta Brewing Company</span>
        <span class="from">Salt Lake City, UT</span>
        </p>
    </a>
    <div class="beerstats">
        <span class="beerstat">11.1% abv</span>
        <span class="beerstat">65 ibu</span>
        <span class="beerstat">47 srm</span>
    </div>
    <div class="beerdesc">
    <div class="tasted"><a href="?cookieset=<?php
        if ($beer != 1){
            echo "1";
        } else {
            echo "2";
        }?>"><img src="images/<?php if ($beer != 1) echo "empty";
?>check.png" /></a></div>
        <p>Launch into the exquisite flavors of Bourbon with splashes
of vanilla. Watch for dark currents of dark chocolate and dried fruit.
Generous amounts of hops and malts make for a smooth journey from
start to finish. Decadent desserts and aged cheeses make superb
companions.
        </p>
        <div class="halfcentered">SHARE THIS</div>
        <div class="halfcentered">RATE THIS</div>
        <div class="halfcentered">
            <a href="#twitterModal"><img src="images/twitter.png" /></a>
            <a href="#untappdModal"><img src="images/untappd.gif" /></a>
        </div>
        <div class="halfcentered">
            <a href="http://www.ratebeer.com/beer/uinta-crooked-line-cockeyed-cooper/123704/"><img
src="images/ratebeer.gif" /></a>
            <a href="http://beeradvocate.com/beer/profile/1416/58868"><img
src="images/ba.gif" /></a>
        </div>
    </div>
</div>
<div id="twitterModal" class="modalDialog">
    <div>
        <h2>Twitter</h2>
        <a href="https://twitter.com/intent/tweet?button_hashtag=kbcbwf2013&text=Tasting%20%40UintaBrewing%20Cockeyed%20Cooper%20at%20%40KineticBrewing%20Barleywine%20Fest">Website</a>
        <a href="twitter://post?message=Tasting%20%40UintaBrewing%20Cockeyed%20Cooper%20at%20%40KineticBrewing%20Barleywine%20Fest%20%23kbcbwf2013">App</a>
        <a href="#close" title="Cancel" class="close">Cancel</a>
    </div>
</div>
<div id="untappdModal" class="modalDialog">
    <div>
        <h2>Untappd</h2>
        <a href="http://m.untappd.com?bid=10620">Website</a>
        <a href="untappd://?beer=10620">App</a>
        <a href="#close" title="Cancel" class="close">Cancel</a>
    </div>
</div>
<?php include('footer.php'); ?>
</body></html>