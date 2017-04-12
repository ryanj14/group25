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
      <title>Release Date</title>
      <meta charset="utf-8">
      <script src="Styles/error.js"></script>
      <Link rel="stylesheet" href="Styles/indexconsole.css">
	  <script src="Styles/contact.js">
		</script>
   </head>
   <body>
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
         <h2 class="center2"> Upcoming Games</h2>
         <table>
		    <tr>
               <th>Date</th>
               <th>Game</th>
               <th>System</th>
            </tr>
            <tr>
               <td>May 16, 2107</td>
               <td>Injustice 2</td>
               <td>PS4, XBO</td>
            </tr>
			<tr>
				<td>June 2, 2017</td>
				<td>Tekken 7</td>
				<td>Win, PS4, XBO</td>
			</tr>
			<tr>
				<td>June 20, 2017</td>
				<td>Final Fantasy XIV: Stormblood</td>
				<td>Win, PS4, OSX</td>
			</tr>
			<tr>
				<td>August 22, 2017</td>
				<td>Middle-earth: Shadow of War</td>
				<td>Win, PS4, XBO</td>
			</tr>
			<tr>
				<td>September 8, 2017</td>
				<td>Destiny 2</td>
				<td>Win, PS4, XBO</td>
			</tr>
			<tr>
				<td>September 26, 2017</td>
				<td>Danganronpa V3: Killing Harmony</td>
				<td>PS4, Vita</td>
			</tr>
			<tr>
				<td>December 2017</td>
				<td>Shenmue III</td>
				<td>Win, PS4</td>
			</tr>
         </table>
         <h2 class="center2"> Released Games</h2>
         <table>
            <tr>
               <th>Date</th>
               <th>Game</th>
               <th>System</th>
            </tr>
			<tr>
				<td>March 3, 2017</td>
				<td>The Legend of Zelda: Breath of the Wild</td>
				<td>NS, WiiU</td>
			</tr>
            <tr>
               <td>March 7, 2017</td>
               <td>Nier: Automata</td>
               <td>PS4</td>
            </tr>
            <tr>
               <td>March 21, 2017</td>
               <td>Mass Effect: Andromeda</td>
               <td>Win, XBO, PS4</td>
            </tr>
            <tr>
               <td>April 4, 2017</td>
               <td>Persona 5</td>
               <td>PS3, PS4</td>
            </tr>
         </table>
         <div id="force">
         </div>
      </main>
      <footer>
         <p>COPYRIGHT&copy; X-GLOBAL LTD DESIGNED BY RYAN|WEI|KEN<a href="https://www.facebook.com"><img src="images/fb.png" alt="fb"></a><a href="https://www.instagram.com/?hl=en"><img src="images/ig.png" alt="ig"></a><a href="https://twitter.com/?lang=en"><img src="images/twitter.png" alt="twitter"></a></p>
      </footer>
   </body>
</html>