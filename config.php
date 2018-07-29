<?php
$server ="localhost";
$dbuser ="root";
$dbname ="hospital1";
$dbpassword ="";

$con = mysqli_connect($server , $dbuser , $dbpassword, $dbname);

if($con)
{
    echo "success";
}
else
{
    echo "eroor";
}
    