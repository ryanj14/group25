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
      <title>Alex Hutchinson Leaves Ubisoft</title>
      <meta charset="utf-8">
      <Link rel="stylesheet" href="Styles/detailinfo.css">
	   <script src="Styles/error.js"></script>
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
      <header>
         <div id="id01" class="modal">
		 <script src="Styles/contact.js">
		</script>
		
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
		  <h2>Alex Hutchinson has left Ubisoft</h2>
		  <p>Ryan Joseph | April 7, 2017</p>
	  </div>
	  <div class="details2">
		<img src="images/AlexanderHutchinson.jpg" alt="Alex Hutchinson">
		<p class="videoname">Alex Hutchinson known for his work in ACIII & Far Cry 4</p>
	  </div>
         <div class="details">
            <p>Alex Hutchinson has left Ubisoft after seven years with the company to create his own studio. Alex was known for his projects usch as Assassin's Creed III and Far Cry 4. The former project director announced his departure on Twitter this week. Alex said to stay tuned for his next project with his new studio.
            </p>
			<p>Source: <a href="https://twitter.com/BangBangClick/status/850439681758068738">Twitter</a></p>
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