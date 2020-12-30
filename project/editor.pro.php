<?php  # 문의글 처리 로직
$mode = $_POST['mode'];
$seq = isset($_POST['seq']) ? $_POST['seq'] : 0;
$userid = isset($_POST['id']) ? $_POST['id'] : ''; // $_REQUEST['userid']
$title = $_POST['title'];
$category = $_POST['category'];
$question = $_POST['question'];

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

if($mode == 'insert'){
    
    $sql = "INSERT INTO all_question (userid, title, category, question) VALUES ('$userid', '$title', '$category', '$question')";

}else if($mode == 'update'){
    $sql = "UPDATE all_question SET title='$title', category='$category', question='$question', reg_date=NOW() WHERE seq='$seq'";
}

if ($conn->query($sql) === TRUE) {
    if($category == "공지사항"){
        header('Location: /project/4/editor.notice.php');
    }
    else if($category == "고객후기"){
        header('Location: /project/4/editor.customer_reviews.php');
    }
    else if($category == "주문문의"){
        header('Location: /project/3/editor.order_inquiry.php');
    }
    else if($category == "고객상담"){
        header('Location: /project/3/editor.customer_consultation.php');
    }
    else if($category == "A/S접수"){
        header('Location: /project/3/editor.a_s.php');
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<?php  # 문의글 처리 로직
$mode = $_POST['mode'];
$seq = isset($_POST['seq']) ? $_POST['seq'] : 0;
$userid = isset($_POST['id']) ? $_POST['id'] : ''; // $_REQUEST['userid']
$title = $_POST['title'];
$category = $_POST['category'];
$question = $_POST['question'];

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

if($mode == 'insert'){
    
   // $sql = "INSERT INTO all_question (userid, title, category, question) VALUES ('$userid', '$title', '$category', '$question')";
    if($category=="공지사항"){
        $sql = "INSERT INTO notice (userid, title, category, question) VALUES ('$userid', '$title', '$category', '$question')";
    }
    else if($category=="고객후기"){
        $sql = "INSERT INTO customer_reviews (userid, title, category, question) VALUES ('$userid', '$title', '$category', '$question')";
    }
    else if($category=="주문문의"){
        $sql = "INSERT INTO order_inquiry (userid, title, category, question) VALUES ('$userid', '$title', '$category', '$question')";
    }
    else if($category=="고객상담"){
        $sql = "INSERT INTO customer_consultation (userid, title, category, question) VALUES ('$userid', '$title', '$category', '$question')";
    }
    else if($category=="A/S접수"){
        $sql = "INSERT INTO a_s (userid, title, category, question) VALUES ('$userid', '$title', '$category', '$question')";
    }

} else if($mode == 'update'){

    if($category=="공지사항"){
        $sql = "UPDATE notice SET title='$title', category='$category', question='$question', reg_date=NOW() WHERE seq=$seq";
    }
    else if($category=="고객후기"){
        $sql = "UPDATE customer_reviews SET title='$title', category='$category', question='$question', reg_date=NOW() WHERE seq=$seq";
    }
    else if($category=="주문문의"){
        $sql = "UPDATE order_inquiry SET title='$title', category='$category', question='$question', reg_date=NOW() WHERE seq=$seq";
    }
    else if($category=="고객상담"){
        $sql = "UPDATE customer_consultation SET title='$title', category='$category', question='$question', reg_date=NOW() WHERE seq=$seq";
    }
    else if($category=="A/S접수"){
        $sql = "UPDATE a_s SET title='$title', category='$category', question='$question', reg_date=NOW() WHERE seq=$seq";
    }
}

if ($conn->query($sql) === TRUE) {
    if($category == "공지사항"){
        header('Location: /project/4/editor.notice.php');
    }
    else if($category == "고객후기"){
        header('Location: /project/4/editor.customer_reviews.php');
    }
    else if($category == "주문문의"){
        header('Location: /project/3/editor.order_inquiry.php');
    }
    else if($category == "고객상담"){
        header('Location: /project/3/editor.customer_consultation.php');
    }
    else if($category == "A/S접수"){
        header('Location: /project/3/editor.a_s.php');
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>