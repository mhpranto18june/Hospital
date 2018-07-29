<?php
include_once("config.php");
$pname =$_POST['pname'];
$p_age = $_POST['p_age'];
$pdeases =$_POST['pdeases'];
$pphone =$_POST['pphone'];



if(isset ($_POST['submit']))
{
    $sql = "INSERT INTO patient(pname , p_age,pdeases,pphone)VALUES ('$pname', '$p_age','$pdeases' ,'$pphone')";    
    if(mysqli_query($con, $sql))
    {
        echo "success";
    }
    else
    {
        echo "error";
    }
}