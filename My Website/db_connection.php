<?php>
	  function OpenCon()
	  {
	  $dbhost = "localhost";
	  $dbuser = "root";
	  $dbpass = "@1163Goodman";
	  $db = "photos";
	  
	  
	  $conn = new mysqli($dbhost, $dbuser, $db) or die ("Connect failed: %s\n". $conn -> error);
	  
	  return $conn;
	  }
	  
	  function CloseCon($conn){
	  		   $conn -> close();
	  }
?>