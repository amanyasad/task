<?php
//Connect to MySQL
$con = mysqli_connect("localhost","root","","shoutit");

//Test Connection
if(mysqli_connect_errno()){
    
    echo 'Failed to connect to MySQL: ' . mysqli_connect_errno();
}































//$dsn = 'mysql : host=localhost; dbname=shoutit';
//try{
//    $db=new PDO($dsn, 'root','') ;
//    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//}
//catch(PDOExcption $e){
//    
//    echo "failed " . $e->getMessage();
//}