<?php
include_once("config.php");
$sname =$_POST['sname'];

$spostion =$_POST['spostion'];
$sphone =$_POST['sphone'];



if(isset ($_POST['submit']))
{
    $sql = "INSERT INTO stuff1(sname , spostion,sphone)VALUES ('$sname', '$spostion' ,'$sphone')";    
    if(mysqli_query($con, $sql))
    {
      echo"success";
    }
    else
    {
        echo "error";
    }
}