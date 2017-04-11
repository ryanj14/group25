<?php

	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name

	// get value of id that sent from address bar
	$id=$_GET['id'];
//change----------------------------------------------------------------------------------
	$sql="SELECT * FROM $tbl_name, members WHERE id='$id' and members.member_id=topic.member_id";
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);

	$rows=mysqli_fetch_array($result);
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
	  
	  <!------------------------>
<main>	  
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>By :</strong> <strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>
<?php
$tbl_name2="response"; // Switch to table "response"
//c--------------------------------------------
$sql2="SELECT * FROM $tbl_name2 join members on members.member_id=response.member_id and topic_id='$id'";
$result2=mysqli_query($GLOBALS["___mysqli_ston"], $sql2);

while($rows=mysqli_fetch_array($result2)){
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong>ID</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['id']; ?></td>
</tr>
<tr>
<td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
<td width="5%" bgcolor="#F8F7F1">:</td>
<td width="77%" bgcolor="#F8F7F1"></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Response</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['response']; ?></td>
<td width="77%" bgcolor="F8F7F1"><?php echo $rows['firstname']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>
</main>	

<?php
}
((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>

<BR>
<?php
if(!isLoggedIn()){
echo "Please login to see comments";
exit();
}
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_response.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td valign="top"><strong>Response</strong></td>
<td valign="top">:</td>
<td><textarea name="response" cols="45" rows="3" id="answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>

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