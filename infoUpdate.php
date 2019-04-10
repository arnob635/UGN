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
$youtube = $_POST['youtube'];
$vocalist_name = $_POST['vocalist'];
$guitarist_name = $_POST['guitarist'];
$drummer_name = $_POST['drummer'];

$check = "SELECT * FROM bandinfo WHERE id = '$id'";


$result = mysqli_query($conn,$check);

$num = mysqli_num_rows($result);


//checks if bandinfo already exists or not // remove echos later
if($num==1)
	echo "Band found";


if($aboutInfo=="" || $contact==""){
    alert("Band info and contact must be filled out");
    return false;
  }


else{
	$reg = "INSERT INTO bandinfo(id,info,contact) VALUES ('$id','$aboutInfo','$contact')";
  $social = "INSERT INTO socialmedia(id,fb,ign,youtube) VALUES ('$id','$fb', '$insta','$youtube')";
  $vocal_mem = "INSERT INTO members(id,memberName,memberPosition) VALUES ('$id','$vocalist_name','Vocalist')";
  $guitar_mem = "INSERT INTO members(id,memberName,memberPosition) VALUES ('$id','$guitarist_name','Guitarist')";
  $drummer_mem = "INSERT INTO members(id,memberName,memberPosition) VALUES ('$id','$drummer_name','Drummer')";
	if(mysqli_query($conn,$reg) && mysqli_query($conn,$social) && mysqli_query($conn, $vocal_mem) && mysqli_query($conn, $guitar_mem) && mysqli_query($conn, $drummer_mem) ){
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
