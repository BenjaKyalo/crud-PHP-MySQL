<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $addressid = $_GET['id'];

    $sql = "DELETE FROM `addresses` WHERE `id`='$addressid'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>