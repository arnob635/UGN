<?php

include("connection.php");

$sql = "UPDATE counter SET visits = visits + 1 WHERE id = 1";
    $conn->query($sql);

    $sql = "SELECT visits FROM counter WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
        }
    } else {
        echo " no results";
    }
    
    $conn->close();
?>
