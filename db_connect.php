<?php 
session_start();
$servername = "localhost";
$username = "UNA";
$password = "112233";
$dbname = "chart";
    
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// 檢查連線
if ($conn->connect_error) {
  	die("連線失敗: " . $conn->connect_error);
}else{
    // echo "連線成功";
}



?>