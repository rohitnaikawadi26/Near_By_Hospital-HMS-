<?php
session_start();
if(!isset($_SESSION['email'])){
    echo "<script>window.location.assign('adminlogin.php?msg=Please Login First!!')</script>";
}else{
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
        include("config.php");
        $query = "DELETE FROM `ambulance` WHERE `id`='$id'";
        $result = mysqli_query($conn,$query);
        if($result>0)
        {
            echo "<script>window.location.assign('manage_ambulance.php?msg=Record Deleted')</script>";
        }
        else{
            echo "<script>window.location.assign('manage_ambulance.php?msg=Try Again')</script>";
        }
    }
}
?>