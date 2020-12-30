<?php
    session_start();
    $id=$_POST['id'];
    $pw=$_POST['pw'];

    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "project";

    // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM user_info WHERE id = '$id' AND pw = '$pw'" ;
    $result = $conn->query($sql);
	
    if ($result->num_rows > 0) {
        if($row = $result->fetch_assoc()) {
           //로그인 성공!
           $_SESSION['id'] = $row['id'];
           $_SESSION['name'] = $row['name'];

           echo "로그인 성공";
           Header("Location:../index.php");
        }
    } else {
        echo "로그인 실패";
        Header("Location:login.php");
    }
    $conn->close();

?>