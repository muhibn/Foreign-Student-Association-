<?php 
   
   $Username=$_POST['Username'];
   $pass=$_POST['pass'];
   
 
   $con=mysqli_connect('localhost','root');
   mysqli_select_db($con,'FSA');
   $q="select * from userpersonal  where uname='$Username'&& SPASSWORD='$pass' ";
   $result=mysqli_query($con,$q);
   $num=mysqli_num_rows($result);
   
   if($num>=1){
       $row=mysqli_fetch_array($result);
       session_start();
       $_SESSION['SUID']=$row['SUID'];
       $_SESSION['Username']=$row['UNAME'];
      header("Location:../../\Profile\Profile.php");
       exit;
     }else{

       header("Location:login input.html");
       exit;
     }

    mysqli_close($con);

 ?>