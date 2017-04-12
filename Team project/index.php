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
      <title>Home</title>
      <meta charset="utf-8">
      <Link rel="stylesheet" href="Styles/base.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	  <script>
         <!--Beggining of scroll up button-->
            $(function($){
            $(".scroll-to-top-link").click(function(){
            	$('html, body').animate({ scrollTop: 0}, 1000);
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
				echo "Welcome: ".$_SESSION['SESS_FIRST_NAME']."<br/>";
				echo '<a href="logout.php">Logout</a><br/>';
			} else {
				echo '<a href="reglog.php">Login/Register</a><br/>';
				
			}
		?>
         </div>
      </nav>
      <main>
         <div class="news">
            <div class="cyberpunk">
               <div class="overlap">
                  <span class="Enter">
                  <a href="Cyberpunk2077.php">ENTER</a>
                  </span>
               </div>
            </div>
            <p class="center2">April 6, 2017</p>
            <h3 class="center">Cyberpunk Trademark Controversy</h3>
            <p>CD Project Red has issued a statement regarding the controversy over the word "Cyberpunk" trademark.
            </p>
         </div>
         <div class="news">
            <div class="nintendo">
               <div class="overlap">
                  <span class="Enter">
                  <a href="Nintendo.php">ENTER</a>
                  </span>
               </div>
            </div>
            <p class="center2">April 10, 2017</p>
            <h3 class="center">Nintendo Direct 4.12.2017</h3>
            <p>Nintendo has announced the next Nintendo Direct.<br>
         </div>
         <div class="news">
            <div class="alex">
               <div class="overlap">
                  <span class="Enter">
                  <a href="Alex.php">ENTER</a>
                  </span>
               </div>
            </div>
            <p class="center2">April 7, 2017</p>
            <h3 class="center">Alex Hutchinson has left Ubisoft</h3>
            <p>Alex Hutchinson the director for Farcry 4 & Assassin's Creed 3 has left Ubisoft after 7 years with the compnay.<br>
         </div>
         <div class="news">
            <div class="pokemon">
               <div class="overlap">
                  <span class="Enter">
                  <a href="Pokemon.php">ENTER</a>
                  </span>
               </div>
            </div>
            <p class="center2">March 24, 2017</p>
            <p class="center">Pokemon Go's Magikarp Event</p>
            <p>A new event is celebrating water-type pokemon and the company is focusing on magikarp and gyarados.
            </p>
         </div>
		 <div class="news">
            <div class="hearthstone">
               <div class="overlap">
                  <span class="Enter"><a href="Hearthstone.php">ENTER</a></span>
               </div>
            </div>
            <p class="center2">April 1, 2017</p>
            <p class="center">Hearthstone Next Expansion Releases Soon</p>
            <p>Blizzard is going to release it's new expansion for Heartstone on April 6 titled "Hearthstone: Journey to Un'Goro".
            </p>
         </div>
		 <div class="news">
            <div class="arma3">
               <div class="overlap">
                  <span class="Enter"><a href="arma3.php">ENTER</a></span>
               </div>
            </div>
            <p class="center2">Feburary 15, 2017</p>
            <p class="center">ARMA3 : DayZ</p>
            <p>ARMA 3 is a military tactical shooter video game developed and published by Bohemia Interactive.
            </p>
         </div>
		 <div class="news">
            <div class="top10">
               <div class="overlap">
                  <span class="Enter"><a href="top10pc2016.php">ENTER</a></span>
               </div>
            </div>
            <p class="center2">Feburary 15, 2017</p>
            <p class="center">Top 10 PC games of 2016</p>
            <p>Top 10 PC games in 2016.
            </p>
         </div>
		 <div class="news">
            <div class="starve">
               <div class="overlap">
                  <span class="Enter"><a href="dontstarve.php">ENTER</a></span>
               </div>
            </div>
            <p class="center2">Feburary 15, 2017</p>
            <p class="center">Don't Starve Together</p>
            <p>Don't Starve is a 2013 action-adventure video game with survival and roguelike elements,
			developed and published by the Canadian indie company Klei Entertainment.
            </p>
         </div>
		 <div class="news">
            <div class="mario">
               <div class="overlap">
                  <span class="Enter"><a href="Mario.php">ENTER</a></span>
               </div>
            </div>
            <p class="center2">March 24, 2017</p>
            <p class="center">Super Mario Run didn't meet Nintendo's expectations</p>
            <p>Nintendo has said that Super Mario Run didn't meet their expectations despite the large amount of downloads from both iOS and Android.
            </p>
         </div>
         <img class="scroll-to-top-link" src="images/upbutton.png" alt="scroll up button">
      </main>
      <footer>
         COPYRIGHT&copy; X-GLOBAL LTD DESIGNED BY RYAN|WEI|KEN
         <a href="https://www.facebook.com">
         <img src="images/fb.png" alt="fb">
         </a><a href="https://www.instagram.com/?hl=en">
         <img src="images/ig.png" alt="ig">
         </a><a href="https://twitter.com/?lang=en">
         <img src="images/twitter.png" alt="twitter">
         </a>		
      </footer>
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