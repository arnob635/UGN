<?php


include("connection.php");

//include("signup.php"); //because this script will run after sign up, what about updating previous user?

//session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
   //echo $_SESSION['id'];
 $id = $_SESSION['id'];

$aboutInfo =$_POST['about'];
$contact = $_POST['contact'];
$fb = $_POST['facebook'];
$insta = $_POST['instagram'];
$yotube = $_POST['youtube'];

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
  $social = "INSERT INTO socialmedia(id,fb,ign,youtube) VALUES ('$id','$fb', '$insta','$youtube')";
	if(mysqli_query($conn,$reg) && mysqli_query($conn,$social) ){
		echo "New record created succesfully";
		echo "Welcome to UGN";


    echo '<script>

  location.replace("http://localhost/UGN/poca/bandprofile.php")

</script>';

	}
	else {
	  echo "Error: " .$sql."<br>".mysqli_error($conn);
	}
}

?>
