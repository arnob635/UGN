<?php


include("connection.php");

//include("signup.php"); //because this script will run after sign up, what about updating previous user?

//session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
   //echo $_SESSION['id'];
 $id = $_SESSION['id'];

$aboutInfo =$_POST['about'];
$contact = $_POST['contact'];

$check = "SELECT * FROM bandinfo WHERE id = '$id'";


$result = mysqli_query($conn,$check);

$num = mysqli_num_rows($result);


//checks if bandinfo already exists or not // remove echos later
if($num==1){
	echo "Band already exists";
}

else if($aboutInfo=="" || $contact==""){
    alert("Band info and contact must be filled out");
    return false;
  }


else{
	$reg = "INSERT INTO bandinfo(id,info,contact) VALUES ('$id','$aboutInfo','$contact')";
	if(mysqli_query($conn,$reg)){
		echo "New record created succesfully";
		echo "Welcome to UGN";
    echo '<script>

  location.replace("http://localhost/UGN/index.html")

</script>';

	}
	else {
	  echo "Error: " .$sql."<br>".mysqli_error($conn);
	}
}

?>
