<?php
include "config.php";
if(isset($_GET['deleteid'])){
    $user_id = $_GET['deleteid'];
    
    $sql = "DELETE FROM users WHERE user_id = $user_id ";
    $result = mysqli_query($conn,$sql);
    if($result){
        header ("location : index.php");
    }
}
?>