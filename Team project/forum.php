<?php
	require_once('config.php');

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name

//change
	$sql="SELECT * FROM $tbl_name,members where members.member_id=topic.member_id ORDER BY id DESC";
	// ORDER BY id DESC is order result by descending
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>PC games</title>
      <meta charset="utf-8">
      <Link rel="stylesheet" href="Styles/pcgame.css">
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
            <!--Login-->
					<form action="http://webdevfoundations.net/scripts/formdemo.asp" onsubmit="return formValidate()" class="modal-content">
						<div class="container">
						
						<div id="nameerror">
							<label><b>User Name</b></label>
							<input type="text" placeholder="ENTER YOUR USERID" name="unname" class="inputColor" id="textUser">
						<div id="nameposition">
						</div>
						</div>	
						
						<div id ="passerror">
							<label><b>Password</b></label>
							<input type="password" placeholder="ENTER YOUR PASSWORD" name="pw" class="inputColor" id="password">
						<div id = "passposition">
                        </div>						
						</div>
				<!--Login-->		
							<button class="loginbutton2" type="submit">Login</button>
							<button class="cancelbutton" type="button" onclick="document.getElementById('id01').style.display='none'">CANCEL</button>
						</div>
					</form>
         </div>
         <div id="id02" class="modal">
           <!--Logup-->
					<form action="http://webdevfoundations.net/scripts/formdemo.asp" onsubmit="return formValidateup()" class="modal-content">
						<div class="container">
						<div id ="nameerrorup">
							<label><b>User Name</b></label>
							<input onblur="InvalidName()" type="text" placeholder="ENTER YOUR USERID" name="newname" id="textUserup">
						<div id="namepositionup"></div>
						</div>	
						<div id="passerrorup">
							<label><b>Password</b></label>
							<input onblur="InvalidPw()" type="password" placeholder="ENTER YOUR PASSWORD" name="newpassword" id="passwordup">
						<div id="passpositionup"></div>
						</div>
				<!--Logup-->		
						<div id="gender">
                            <b>Gender</b>
                            <input type="radio" name="gender" value="male" id="male" checked="checked"><label for="male">Male</label>
                            <input type="radio" name="gender" value="female" id="female"><label for="female">Female</label>
                            <input type="radio" name="gender" value="other" id="other"><label for="other">Other</label>
                       </div>
							<button class="loginbutton2" type="submit">REGISTER</button>
							<button class="cancelbutton" type="button" onclick="document.getElementById('id02').style.display='none'">CANCEL</button>
						</div>
					</form>
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
	   
         <a href="index.html" class="button1"><span>HOME</span></a>
         <div class="dropdown">
            <button class="dropbtn"><span>CATEGORY</span></button>
            <div class="dropdown-content">
               <ul>
                  <li><a href="pcindex.html">PC GAME</a>
                  <li><a href="mobile.html">Mobile Game</a>
                  <li><a href="console.html">Console Game</a>
               </ul>
            </div>
         </div>
         <a href="contact1.html" class="button1"><span>CONTACT</span></a>
         <a href="sitemap.html" class="button1"><span>SITE MAP</span></a>
         <a class="button1" href="table.html"><span>RELEASE DATE</span></a>
		 <a class="button1" href="#"><span>FORUM</span></a>
         <div id="nav_sign">
            <button class="button" onclick="document.getElementById('id01').style.display='block'">SIGN IN</button>&nbsp;<button class="button" 
               onclick="document.getElementById('id02').style.display='block'">SIGN UP</button>
         </div>
      </nav>
<!--------------------------------->
<main>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<!--change-->
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
<td width="7%" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
</tr>

 
<?php
while($rows=mysqli_fetch_array($result)){ // Start looping table row
?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
<!--change-->
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['firstname']." ".$rows['lastname']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="add_topic_form.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
</main>
<footer>
         <p>COPYRIGHT&copy; X-GLOBAL LTD DESIGNED BY RYAN|WEI|KEN<a href="https://www.facebook.com"><img src="images/fb.png" alt="fb"></a><a href="https://www.instagram.com/?hl=en"><img src="images/ig.png" alt="ig"></a><a href="https://twitter.com/?lang=en"><img src="images/twitter.png" alt="twitter"></a></p>
      </footer>
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
	<img class="scroll-to-top-link" src="images/upbutton.png" alt="scroll up button">