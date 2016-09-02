  <?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cook It Dot Com</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body><div id="wrap">
<div id="header"></div>
<div id="nav">
            <ul id='menu'>
             <li><a href="../usersloggedin/starters.php" >Starters</a></li>
            <li><a href="../usersloggedin/mains.php" >Mains</a></li>
            <li><a href="../usersloggedin/vegeterian.php" >Vegeterian</a></li>
            <li><a href="../usersloggedin/desserts.php">Desserts</a></li>
            </ul>

            <ul id="rightmenu">
           <li> <a href="logout.php">Logout</a></li>

            </ul>


</div>


<div id="content">
  <div id="info" align="justify"><FONT COLOR="white">
   My Account - 
<?php
session_start();
require_once 'auth.php';
if (isset($_SESSION['user_name'])){
echo "Welcome ".$_SESSION['user_name'];
}
?>
<hr />
<br /> Upload Your Recipes<br /><br />

<a href="admin.php">Upload Starter</a>


<br /><br />Edit/Delete Your Recipes<br/><br/>

<a href="admin.php">Starter</a>



</div></div>
<div id="footer"><div id="footerinfo" align="center">Copyright Cook It Dot Com 2011 - Designed By Jahedul Hussain - </a></div></div>
</div>
</body>
</html>