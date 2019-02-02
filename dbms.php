<?php
   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   $param1 = $_POST['user_id'];
   $param2 = $_POST['user_name'];
   $param3 = 10;
   $param4 = 0;
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   
   $sql = "SELECT user_name, user_score, user_attempt FROM USER where user_ID ="."'$param1'" ;
   mysql_select_db('PWP3');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
       $sql2 = "INSERT INTO USER ".
               "(user_id, user_name, user_attempt, user_score) "."VALUES ".
               "('$param1',$param2','$param3','$param4')";
               mysql_select_db('PWP3');
            $retval = mysql_query( $sql2, $conn );
   }#if user is not there in DB then insert
   
	$row = mysql_fetch_assoc($retval)
      echo "{$row['user_id']}~".
         "{$row['user_name']}~".
         "{$row['user_attempt']}~".
         "{$row['user_score']}~";
    #'~'will help split the string in android
   mysql_close($conn);
?>