<?php

include("connection.php");

// get the q parameter from URL
$q = $_REQUEST["q"];

$output = '';

$hint = "";

$sql = "SELECT * FROM bandauth WHERE bandName LIKE '%".$q."%'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
if($num>0){


  while($row = mysqli_fetch_array($result)){
    $output = $row["bandName"];
    //echo '<h3><a href="#">'.$output.'</a></h3><p>';
      //.'<input type ="button"></p>';

  }

  echo '<h3><a href="#">'.$output.'</a></h3><p>';

  //echo $output;
  //echo '<h3><a href="#">'.$output.'</a></h3><p>'
  //  .'<input type ="button" value="Buy"></p></br>,';

}
else {
  echo 'Data Not Found';
}

?>
