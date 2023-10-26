<html>
<head>
<title>FSA</title>

<link rel="stylesheet" type="text/css" href="../general css\general.css" /> 

<link rel="stylesheet" type="text/css" href="../general css\post css.css" /> 
</head>

<style>
.container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
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
<img src="pic\porter-raab-Ucr4Yp-t364-unsplash.jpg"  width="70%" height="50%">
 <div class="centered">College Page</div>
</div>
<br>
 <?php
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'FSA');
   $q="Select PUID,IMAGE,TEXT,PDATA,SECTION,SUID FROM  post where SECTION='College'";
   $result=mysqli_query($con,$q);
   $num=mysqli_num_rows($result);
  
   ?>


  <center>
    <?php
    for($i=1;$i<=$num;$i++)
    {  $row=mysqli_fetch_array($result);
       $ids=$row['SUID'];

      $users="Select UNAME FROM   userpersonal where SUID=$ids   ";
      
      $usernames=mysqli_query($con,$users);
      $n=mysqli_num_rows($usernames);
   

      if($n==1){

      $user_row=mysqli_fetch_array($usernames);
      $username=$user_row['UNAME'];
       }else{
       $users="Select COMUNAME FROM   community where COMUID=$ids   ";
       $usernames=mysqli_query($con,$users);
       $user_row=mysqli_fetch_array($usernames);
       $username=$user_row['COMUNAME'];
    }
   
   ?>
    <div id="posts">
      <label   id="top">
      <img id="Profile_img" src="../Post\image\Dyal s singh.jpg" align="left"  alt="Profile pic" style="width:50px;height:60px;">
      <h2 style="text-align: left;"><?php echo $username ; ?></h2> </label>
      

      <div class="paraghraphs">
      <p><?php echo $row['TEXT'] ; ?></p>
      </div>


    <div class="imges">  
    <img  src="../Post\image\<?php echo $row['IMAGE'] ?>"  width="100%" height="100%">
    </div>

    </div>

      <div class="comments"> 
          <form action="input post php.php" method="post">
              <input hidden name="comment" type = "text" placeholder = "Type your idea" /> 
              <button id="comm"  type="submit">comment</button> <br>   
          </form>
      </div>
      

      
  
  
 
    </br>
 

    <?php  }
  
    mysqli_close($con);
    ?>



</body>
</html>