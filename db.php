<?php
  
   $conn = mysqli_connect("localhost", "root");
   #$param1 = $_POST['id'];
   #$param2 = ;
   $param3 = 10;
   $param4 = 0;
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   
   $sql = "SELECT * FROM user" ;
   $x = mysqli_select_db($conn, 'PWP');
   $retval = mysqli_query($conn,$sql );
   
 
   
	$row = mysqli_fetch_assoc($retval);
      echo "{$row['id']}~".
         "{$row['email']}~".
         "{$row['sub_pd']}~".
         "{$row['score']}~";
    #'~'will help split the string in android
   mysqli_close($conn);
?>
