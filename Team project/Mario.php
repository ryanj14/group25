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
      <title>Super Mario Run Didn't Meet Expectations</title>
      <meta charset="utf-8">
      <Link rel="stylesheet" href="Styles/detailinfo.css">
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
   <script src="Styles/contact.js">
		</script>
      <header>
         <div id="id01" class="modal">
            
         </div>
         <div id="id02" class="modal">
          
         </div>
         <div id="error1" class="modal">
            <form action="http://webdevfoundations.net/scripts/formdemo.asp" method="post" class="modal-content">
               <div >
                  <h2 class="centering">Invalid User name!</h2>
                  <button class="cancelbutton" type="button" onclick="back('error1')">OK!</button>
               </div>
            </form>
         </div>
         <div id="error2" class="modal">
            <form action="http://webdevfoundations.net/scripts/formdemo.asp" method="post" class="modal-content">
               <div >
                  <h2 class="centering">Invalid PassWord!</h2>
                  <button class="cancelbutton" type="button" onclick="back('error2')">OK!</button>
               </div>
            </form>
         </div>
      </header>
      <nav>
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
      <main>
	  <div class="details2">
		  <h2>Super Mario Run Didn't Meet Nintendo's Expectation</h2>
		  <p>By Ken Wu | March 24, 2017</p>
	  </div>
         <div class="video">
            <iframe src="https://www.youtube.com/embed/E39ychZKnDI" allowfullscreen></iframe>
            <p class="videoname">Super Mario Run released for the Android earlier this week</p>
         </div>
         <div class="details">
            <p>With the recent release of Super Mario Run for the Android Nintendo has stated that Mario didn't draw in the profits they've hoped. Nintendo said that they've had a large amount of downloads of the game but only a mere 4% of people actually decided to purchase the full game.
			The "pay-once-and-play-model" did not work for them but will not deter them from moving away from the mobile market. The reason being is their game "Fire Emblem Heroes"; Fire Emblem uses the freemium model and is working well for them.
            </p>
			<p>Source: <a href="http://asia.nikkei.com/Business/Companies/Nintendo-chases-more-than-profit-with-Super-Mario-Run">Nikkei</a>
			</p>
         </div>
         <p class="back"><a href="index.php">&larr;BACK</a></p>
      </main>
      <footer>
         <p>COPYRIGHT&copy; X-GLOBAL LTD DESIGNED BY RYAN|WEI|KEN<a href="https://www.facebook.com"><img src="images/fb.png" alt="fb"></a><a href="https://www.instagram.com/?hl=en"><img src="images/ig.png" alt="ig"></a><a href="https://twitter.com/?lang=en"><img src="images/twitter.png" alt="twitter"></a></p>
      </footer>
	  <img class="scroll-to-top-link" src="images/upbutton.png" alt="scroll up button">
	  <script>
		 function $(id){
         var element = document.getElementById(id);
         if(id == null){
         alert("ERROR");
         }return element;
         }
         
         function testName(id){
         var txt = /^[A-Za-z0-9]{4,10}$/i;
         var name = $(id).value;
         var result = txt.test(name);
         return result;}
         
         function InvalidName(){
         if(!testName("textUserup"))
         $("error1").style.display="block";
         if(!testName("textUserup"))
         clearField('textUserup');}
         
         function InvalidPw(){
         if(!testName("passw"))
         $("error2").style.display="block";
         if(!testName("passw"))
         clearField('passw');}
         
         function back(id){
         $(id).style.display = "none";}
         
         function clearField(input) {
         $(input).value = "";
         };
	</script>
   </body>
</html>