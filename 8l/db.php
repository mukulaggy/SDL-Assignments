<?php
$conn=new mysqli("localhost","root","","complaint_db",3307);
if($conn->connect_error){
    die("connedtion failed:".$conn->connect_error);
}
?>