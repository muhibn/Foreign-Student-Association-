<html>
<head>
<title>FSA</title>

<link rel="stylesheet" type="text/css" href="../general css\general.css" /> 
</head>
<style>
.container {
  position: relative;
  text-align: center;
  color: black;
}
.centered {
  position: absolute;
  top: 50%;
  left: 47%;
  font-size: 50;
  transform: translate(-50%, -50%);
}

</style>
<body>
<div id="header1">
  <p>FSA &nbsp (Foreign student association)</p>

<div  id="header2" align="right" class="topnav">
  <a href="../Home\Home.php">Home</a>&nbsp &nbsp
  <a href="../College\College.php">College</a>&nbsp &nbsp
  <a href="../FRRO\FRRO.php">F.R.R.O</a>&nbsp &nbsp
  <a href="../Community\Community.php">Community</a>&nbsp &nbsp
  <a href="../original Pdf\original Pdf.php">original Pdf</a>&nbsp &nbsp
  <a href="../Chat\Chat.php">Chat</a>&nbsp &nbsp
  <a href="../Login\Login.html">Login</a>&nbsp &nbsp
  <a href="../Profile\Profile.php">Profile</a>&nbsp &nbsp
  <a href="../Search\Search.php">Search</a>&nbsp &nbsp
  <a href="../Form\Form.html">Form</a>&nbsp &nbsp
  <a href="../Help\Help.html">Help</a> &nbsp &nbsp
  <br>
  
</div>
</div>
<div class="container">
<img src="pic\chatting-app-development.jpg"  width="70%" height="50%">
 <div class="centered">Chat Page</div>
</div>

<a href="https://tlk.io/studentschat">click here for live chat!</a>
   <?php  
session_start();
  
  if(isset($_SESSION['Username'])){
    header("location:https://tlk.io/studentschat");

}else
{
  $message = "Please login first";
  echo "<script type='text/javascript'> alert('$message');</script>";
  header("location:../\Login\Login.html");
 
 }
 
   
  ?>

</table>


</body>
</html>