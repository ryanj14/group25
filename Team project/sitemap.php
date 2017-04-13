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
      <title>Site Map</title>
      <meta charset="utf-8">
      <script src="Styles/error.js"></script>
      <Link rel="stylesheet" href="Styles/sitemap.css">
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
               <div>
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
         <a class="button1" href="index.php"><span>HOME</span></a>
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
         <a class="button1" href="contact1.php"><span>CONTACT</span></a>
         <a class="button1" href="sitemap.php"><span>SITE MAP</span></a>
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
         <div id="navbar">
            <img id="banner1" src="images/banner.png" alt="gaming banner">
            <h3><a href="index.php">Home</a></h3>
            <h2>Gaming News</h2>
            <ul>
               <li>
                  <h4><a href="pcindex.php">PC</a></h4>
               </li>
               <li>
                  <h4><a href="console.php">Console</a></h4>
               </li>
               <li>
                  <h4><a href="mobile.php">Mobile</a></h4>
               </li>
            </ul>
            <h3><a href="contact1.php">Contacts</a></h3>
            <h3><a href="sitemap.php">Site Map</a></h3>
            <h3><a href="table.php">Release Date</a></h3>
			<h3><a href="#">Forum</a></h3>
            <br class="clearright">
            <br class="clearright">
         </div>
         <div id="force">
         </div>
      </main>
      <footer>
         <p>COPYRIGHT&copy; X-GLOBAL LTD DESIGNED BY RYAN|WEI|KEN<a href="https://www.facebook.com"><img src="images/fb.png" alt="fb"></a><a href="https://www.instagram.com/?hl=en"><img src="images/ig.png" alt="ig"></a><a href="https://twitter.com/?lang=en"><img src="images/twitter.png" alt="twitter"></a></p>
      </footer>
   </body>
</html>