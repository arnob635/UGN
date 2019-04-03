<?php

include("connection.php");

$id = $_POST['Id'];
echo $id;


  // sql delete query
  $query = "DELETE FROM bandauth WHERE Id = '$id'";

  $check = mysql_query($conn,$query);

  if($check){
  	echo "kaj kore";


  

 // location.replace("http://localhost/UGN/admin/bands.php");
}

?>
  
      