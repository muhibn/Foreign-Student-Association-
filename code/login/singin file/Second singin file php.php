
<?php 
   $COURSE=$_POST['COURSE'];
   $COLLEGE=$_POST['COLLEGE'];
   $USNIVERSITY=$_POST['USNIVERSITY'];
   $DATABIRTH=$_POST['DATABIRTH'];
   session_start();
   $suids=$_SESSION['SUID'];
   
 
  
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'FSA');
   $q="INSERT INTO  usercourse(COURSE,COLLEGE,USNIVERSITY,DATABIRTH,AUID,SUID) values('$COURSE','$COLLEGE','$USNIVERSITY','$DATABIRTH',1,$suids)";
   $status=mysqli_query($con,$q);
   mysqli_close($con);
  
 ?>
<!DOCUMENT HTML>
<html>
<head>
  <title>Insertion From </title>
 
</head>
<body>
  <h1>Registeration From </h1> 
  <p><?php 
       if($status==1){
		   echo "Your Registeration successful";
        
      header("Location:../../\Profile\Profile.php");
       exit;
	   }else{
		   echo  "Your Registeration is  failed";
        
     }
	   ?>
	 </p>
   <p></p>
	  Next <a href="../../Profile\Profile.html"> goto Profile</a>&nbsp &nbsp
</body>
</html>