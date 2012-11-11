<?php




echo '<html><meta http-equiv="refresh" content="3;http://twitter.com/#!/4040404040404"><head><title>%20Return-ing</title>
		<style type="text/css">

		body{
			background-color:#000000;
			color:#00ff00;
			font-family:monospace;
			text-align:center;
			padding:200px;
		}
		.white{
			color:#FFFFFF;

		}
		

		#inner {
			width: 666px;
			height: 350;
			text-align: center;
			margin-left:auto;
			margin-right:auto;
		}

		#credit {
			position: absolute;
			font-size:10px;
			bottom: 0;
			right: 0;
			padding:10px;
			margin:10px;
			background-color:#000;
			-moz-border-radius: 15px;
			border-radius: 15px;
			opacity:0.4;filter:alpha(opacity=40)
		}
		a:link {text-decoration:none; color:#CCC;}
		a:visited {text-decoration:none; color:#CCC;}
		a:hover {text-decoration:none; color:red;}
		
		#credit:hover{opacity:1.0;filter:alpha(opacity=100)}
		</style>
</head><body><div id="outer" style="width:100%"><img src="http://gli.tc/4.gif"><img src="http://gli.tc/0.gif"><img src="http://gli.tc/4.gif"><br>';

$remote_address = getenv("REMOTE_ADDR");
echo "<div id='inner'><marquee scrollamount=10><img src='http://gli.tc/w.gif'> $remote_address.</marquee><br>";
$browser_type = getenv("HTTP_USER_AGENT");
echo "<p style='color:#FFFFFF;'><img src='http://gli.tc/w.gif'> $browser_type.</style>";

$jodi = array('45_', '%20WRONG', '%20SPACE', '%20RETURN', '%20Unsent', '192.168.1.1', '%20Reply', '’›—%20Unread', '%20Flagged•‹’’‹•Ÿ‹', 'Wht s th mnng f lf?_•‹’’‹•Ÿ‹', '&21987;_', '&1245;&12513;&12522;&12459;_', '&12473;&12479;&1254;&12522;&12531;_', 'vlb_', 'fck_', 'fck_', 'ss_', 'mrn mrdgrd glsgrv_', 'st gvn k 4m h_', '– ‰”  Ö ”?_', 'cfqn fdj_', 'jd_', 'hn?_', 'Dnmrc_', 'Dvd_', '„‰‰¿‰”!_', '1111111111111111_', 'bcdfghjklmnpqrstvwxz_');



$countJODI = count($jodi);

$ran = rand(0, $countJODI);

$tweet = "http://gli.tc/h/$remote_address/" . $jodi[$ran] . " $browser_type #404";


// Create our twitter API object
require_once("404/twitteroauth/twitteroauth.php");
$oauth = new TwitterOAuth('put', 'your', 'keys', 'here'); ### obviously replace these w/your own keys 
// Send an API request to verify credentials
$credentials = $oauth->get("account/verify_credentials");
echo "Connected as @" . $credentials->screen_name;
// Post our new "hello world" status
$oauth->post('statuses/update', array('status' => $tweet));

echo'<div id="credit"><a href="http://gli.tc/h">GLI.TC/H</a> 404 EasterEgg by: <a href="http://404.jodi.org/" target="_blank">JODI</a></div></div></body>'

?>