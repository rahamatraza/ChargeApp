<?php

$connect=  mysql_connect("localhost","root","");
$select=  mysql_select_db("customer_payment", $connect);

if(!$connect)
{
    echo 'connection has been failed';
}
$deleted=$_GET['pay_no'];
$query="delete from payment where id=$deleted";
$result=  mysql_query($query);
if($result)
{
    header('location:index.php?success=Payment Info has Been Deleted');  
}
?>