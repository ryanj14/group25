<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact</title>
		<meta charset="utf-8">
		<Link rel="stylesheet" href="Styles/contact2.css">
		<script src="Styles/contact.js">
		</script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script>
         <!--Beggining of scroll up button-->
            $(function($){
            $('.scroll-to-top-link').click(function(){
            	$("html, body").animate({ scrollTop: 0}, 1000);
            	return false;
            });
            
            });
         <!--End of scroll button-->
      </script>
	</head>	
	<body>
		<div id = "above">
			<header>
				<div id="id01" class="modal">
				
				</div>
				<div id="id02" class="modal">
				
				</div>
			</header>
			
			<nav>
				<!--need to span words-->
				<a href="index.php" class="button1"><span>HOME</span></a>
				<div class="dropdown">
					<button class="dropbtn"><span>CATEGORY</span></button>
					<div class="dropdown-content">
						<ul>
							<li><a href="pcindex.php">PC GAME</a>
							<li><a href="mobile.php">Mobile Game</a>
							<li><a href="console.php">Console Game</a>
						</ul>
					</div>
				</div>
				<a href="contact1.php" class="button1"><span>CONTACT</span></a>
				<a href="sitemap.php" class="button1"><span>SITE MAP</span></a>
				<a class="button1" href="table.php"><span>RELEASE DATE</span></a>
				<a class="button1" href="forum.php"><span>FORUM</span></a>
				<div id="nav_sign">
				<!--move sign in and up here with a div-->
                <?php
			if (isLoggedIn()){
				echo "Welcome.: ".$_SESSION['SESS_FIRST_NAME']."<br/>";
				echo '<a href="logout.php">Logout</a><br/>';
			} else {
				echo '<a href="reglog.php">Login/Register</a><br/>';
				
			}
		?>
				</div>
			</nav>
		</div>	
		
		<div id="all">
			<main>
				<form method="post" action="http://www.your-host-name.com/formmail.php" name="SampleForm">
    <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
				
				<input type="hidden" name="recipients" value="rjoseph14@my.bcit.ca" />
				
				    <input type="hidden" name="subject" value="Sample FormMail Testing" />
					
					<fieldset id="upperf">
					
						<legend id = "contact_123"><strong>Contact us rightnow !</strong></legend>
						<label for = "userNAME"><strong>Your name here</strong></label><br>
						<input class = "commentinput" type="text" name="username" id = "userNAME" onblur="warnUserName('userNAME')">
						<p id="usernamewarn"></p>
						<br>
						<label for = "userEMAIL"><strong>Your contact email</strong></label><br>
						<input class = "commentinput" type="email" name="useremail" id = "userEMAIL" onblur="warnEmail('userEMAIL')">
						<p id="emailwarn"></p>
						<br>
						<label for = "OPINION"><strong>Your opinions</strong></label><br>
						<textarea class = "commentinput" name="opinion" id = "OPINION" placeholder="Comment here" ></textarea><p>	
		
						<input class = "commentinput" type="submit" id="send">
					</fieldset>
					
					<fieldset>
						<legend id = "contact_legend">Your can also contact directly with our professional developers</legend>
						<div id="left">
							<h2>Ken</h2>
							<p>Email : ken@gmail.com<br>
							Fax:666-666-6666<br>
							Phone: 666-666-6666</p>	 
							<br><br>
							<h2>Ryan</h2>
							<p>Email : Ryan@gmail.com<br>
							Fax:111-111-1111<br>
							Phone: 111-111-1111</p>	
							<br><br>	   
							<h2>Wei</h2>
							<p>Email : wei@gmail.com<br>
							Fax:777-777-7777<br>
							Phone: 777-777-7777</p>
						</div>
						<div id = "right">
							<h2>Address</h2>
							<p>222-1111 Younameit Street,
							<br>Vancouver, BC, Canada. 
							V5H 1A1</p>
							<h2>Operation time</h2>
							<p>Monday - Friday<br>
							9:00AM - 5:00PM<br><br><br>
							Saturday - Sunday<br>
							Close</p>
							<h2>Map</h2>
						<div id="map">
							<script>
									function initMap() {
									var uluru = {lat: 49.251514, lng: -123.00452000000001};
									var map = new google.maps.Map(document.getElementById('map'), {
									zoom: 17,
									center: uluru
									});
									var marker = new google.maps.Marker({
									position: uluru,
									map: map
									});
									}
							</script>
								<script async defer
									src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUHn7pZD4k44SBuJq4j7eC813xvA3DzSU&callback=initMap">
								</script>
							</div>
						</div>	  
					</fieldset>
					<div id = "down">
						<fieldset>
							<legend><strong>About us</strong></legend>
							<h3>About our team </h3>
							<img id="teampic" src="images/geek.jpg" alt="team">
							<p id = "pic_p">The supporter sacks the uneasy photograph. When can the lemon dodge under the notable approval?
							The companion bobs? A funded elitist waves over the operator. Any ghost fasts!<br>
							The mystic fish turns over its vacuum. Does the pronounced floppy understand an ambiguous age? 
							The blast fears? Under the cult decays the tongue.</p>
							<h4>We hope you can help us together to make our website better!</h4>
						</fieldset>
					</div>
				</form>
			</main>
		</div>
		<footer>
			<p>COPYRIGHT&copy; X-GLOBAL LTD DESIGNED BY RYAN|WEI|KEN<a href="https://www.facebook.com"><img src="images/fb.png" alt="fb"></a><a href="https://www.instagram.com/?hl=en"><img src="images/ig.png" alt="ig"></a><a href="https://twitter.com/?lang=en"><img src="images/twitter.png" alt="twitter"></a></p>
		</footer>
		<img class="scroll-to-top-link" src="images/upbutton.png" alt="scroll up button">
	</body>
</html>																					