<?php
include_once("config.php");
$dname =$_POST['dname'];
$dpostion =$_POST['dpostion'];
$dspecailest =$_POST['dspecailest'];
$droom =$_POST['droom'];
$dphone =$_POST['dphone'];
$demail = $_POST['demail'];


if(isset ($_POST['submit']))
{
    $sql = "INSERT INTO doctor2(dname , dpostion,dspecailest,droom,dphone, demail)VALUES ('$dname', '$dpostion', '$dspecailest','$droom','$dphone','$demail ')";    
    if(mysqli_query($con, $sql))
    {
        echo "success";
    }
    else
    {
        echo "error";
    }
}