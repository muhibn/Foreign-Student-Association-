
<?php 
   $section=$_POST['section'];
   $photo=$_FILES['photo']['name'];
   $texts=$_POST['texts'];
   session_start();
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'FSA');
   if(isset($_SESSION['SUID'])){
     $suids=$_SESSION['SUID'];
     $q="INSERT INTO  post(IMAGE,TEXT,SECTION,SUID,AUID) values('$photo','$texts','$section',$suids,1)";
   }else if(isset($_SESSION['COMUID'])){
     $suids=$_SESSION['COMUID'];
     $q="INSERT INTO  post(IMAGE,TEXT,SECTION,SUID,AUID) values('$photo','$texts','$section',$suids,1)";
   }
   $status=mysqli_query($con,$q);
   if($status==1){
    move_uploaded_file($_FILES['photo']['tmp_name'],"image/".$_FILES['photo']['name']);
   }   
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
       header("Location:../\Profile\Profile.php");
       exit;
     

	   }else{
		header("Location:input post.html");
       exit;
 
     }
	   ?>
	 </p>
</body>
</html>