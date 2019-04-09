<?php

include("connection.php");


if(isset($_POST['bulk_delete_submit'])){
	$delete_id = (int)$_POST['checked_id[]'];
    
    foreach($delete_id as $id){
        mysqli_query($conn,"DELETE FROM bandauth WHERE Id='$id'");
    }
    
    $_SESSION['success_msg'] = 'Delete Successful';
   //header("Location:index.php");
}
