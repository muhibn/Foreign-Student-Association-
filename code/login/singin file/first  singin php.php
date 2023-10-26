<?php 
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $gender=$_POST['gender'];
   $email=$_POST['email'];
   $Username=$_POST['Username'];
   $pass=$_POST['pass'];
   $repass=$_POST['repass'];
   $auids=1;
 
   if($pass==$repass)
   {
     $con=mysqli_connect('localhost','root');
     mysqli_select_db($con,'FSA');
     $q="INSERT INTO  userpersonal(SNAME,LNAME,GENDER,EMAIL,UNAME,SPASSWORD,AUID) values('$firstname','$lastname','$gender','$email','$Username','$pass',$auids)";
     $status=mysqli_query($con,$q);
     $q="select SUID,UNAME from userpersonal  where EMAIL='$email' && uname='$Username'&& SPASSWORD='$pass' ";
     $result=mysqli_query($con,$q);
     $num=mysqli_num_rows($result);
     mysqli_close($con);
     
     
   }
   else{
	   echo  "wrong pasword";
   }
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
       $row=mysqli_fetch_array($result);
       session_start();
       $_SESSION['SUID']=$row['SUID'];
       $_SESSION['Username']=$row['UNAME'];
       
       echo $_SESSION['SUID'];
       header("Location:Second singin file.html");
       exit;
     }else{
       header("Location:first singin file.html");
       exit;
     }
	   ?>
	 </p>
	  Next <a href="Second singin file.html">click (Done) here</a>
</body>
</html>