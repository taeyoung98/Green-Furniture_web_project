<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$pwc=$_POST['pwc'];
$name=$_POST['name'];

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

// if($id==NULL || $pw==NULL || $name==NULL || $pwc==NULL)
// {
//     echo"<script>alert(\"빈 칸을 모두 채워주세요.\");
//             history.back();
//         </script>";
//     exit();       
// }
if($pw!=$pwc)
{
    echo"<script>alert(\"비밀번호와 비밀번호 확인이 다릅니다.\");
            history.back();
        </script>";
    exit();
}

$select_query = "SELECT id FROM user_info WHERE id='$id' ";
$result_set = mysqli_query($conn, $select_query)or die(mysqli_error($conn));
$count = mysqli_num_rows($result_set);
echo $count;

if($count > 0){
    echo"<script>alert(\"이미 사용중인 아이디 입니다.\");
            history.back();
        </script>";
    exit();    
}

$sql = "INSERT INTO user_info (id, pw, name)
VALUES ('$id', '$pw', '$name')";

if ($conn->query($sql) === TRUE) {
    Header("Location: signUp.complete.php");
} else {
    echo"<script>alert(\"가입 실패.\");</script>";
}

$conn->close();

?>