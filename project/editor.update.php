<?php
$seq = isset($_GET['seq']) ? $_GET['seq'] : exit;
$category = $_POST['category'];
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

if($category == "A/S접수"){
    $sql = "SELECT * FROM a_s WHERE seq = $seq";
}
else if($category == "주문문의"){
    $sql = "SELECT * FROM order_inquiry WHERE seq = $seq";
}
else if($category == "고객상담"){
    $sql = "SELECT * FROM customer_consultation WHERE seq = $seq";
}
else if($category == "공지사항"){
    $sql = "SELECT * FROM notice WHERE seq = $seq";
}
else if($category == "고객후기"){
    $sql = "SELECT * FROM customer_reviews WHERE seq = $seq";
}

$result = $conn->query($sql);

$title = '';
$question = '';
$category = '';

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()){
        $title = $row['title'];
        $question = $row['question'];
        $category = $row['category'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/bootstrap-4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome-free-5.1.0-web/css/all.css">
    <link rel="shortcut icon" href="logo.png">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link href="index2.css" rel="stylesheet">
    <link href="index3.css" rel="stylesheet">
    <title>그린가구</title>
</head>
<body>
<div class="frame" id="header">
    <?php include 'header.inc.php'; ?>
    <?php include 'nav.inc.php'; ?>
    <section id="section">
        <div class="left border-right">
            <aside id="aside">
                <div style="height: 40px;"></div>
                <div id="picNav"></div>
                <nav id="sideNav" class="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/project/1/ideology.php" id="navCompany">‧ 회사소개</a>
                            <div class="dropdown-menu" id="dropCompany">
                                <a class="dropdown-item" href="/project/1/ideology.php">‧ 경영이념</a>
                                <a class="dropdown-item" href="/project/1/vision.php">‧ 경영비젼</a>
                                <a class="dropdown-item" href="/project/1/history.php">‧ 연혁</a>
                                <a class="dropdown-item" href="/project/1/plan.php">‧ 사업계획</a>
                                <a class="dropdown-item" href="/project/1/strategy.php">‧ 그린만의 전략</a>
                                <a class="dropdown-item" href="/project/1/news.php">‧ 그린소식</a>
                            </div> 
                        </li><!-- /회사소개 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/project/2/operation.php" id="navInvest">‧ 투자정보</a>
                            <div class="dropdown-menu" id="dropInvest">
                                <a class="dropdown-item" href="/project/2/operation.php">‧ 경영정보</a>
                                <a class="dropdown-item" href="/project/2/finance.php">‧ 재무정보</a>
                            </div>
                        </li><!-- /투자정보 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/project/3/furniture.php" id="navOrder">‧ 가구주문</a>
                            <div class="dropdown-menu" id="dropOrder">
                                <a class="dropdown-item" href="/project/3/furniture.php">‧ 그린의 가구</a>
                                <a class="dropdown-item" href="/project/3/making.php">‧ 제작과정</a>
                                <a class="dropdown-item" href="/project/3/delivery.php">‧ 배송과정</a>
                                <a class="dropdown-item" href="/project/3/order.php">‧ 주문문의</a>
                                <a class="dropdown-item" href="/project/3/question.php">‧ 고객상담</a>
                                <a class="dropdown-item" href="/project/3/afterService.php">‧ A/S 접수</a>
                                <a class="dropdown-item" href="/project/3/serviceCenter.php">‧ 서비스센터</a>
                            </div>
                        </li><!-- /가구주문 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/project/4/notice.php" id="navCommunity">‧ 커뮤니티</a>
                            <div class="dropdown-menu" href="/project/4/notice.php" id="dropCommunity">
                                <a class="dropdown-item" >‧ 공지사항</a>
                                <a class="dropdown-item" href="/project/4/review.php">‧ 고객후기</a>
                                <a class="dropdown-item" href="/project/4/payment.php">‧ 개인결제창</a>
                                <a class="dropdown-item" href="/project/4/map.php">‧ 찾아오시는 길</a>
                            </div>
                        </li><!-- /커뮤니티 -->
                    </ul>
                </nav>
                <div id="familySite">
                    <div>~&nbsp;&nbsp;family site&nbsp;&nbsp;~</div>
                    <div><a href="">‧ 그린몰</a></div>
                    <div><a href="">‧ 그린서비스센터</a></div>
                </div>
            </aside>
        </div>

        <div class="right">
            <main id="main" class="pt-4">
            <div class="container">
            <form action="editor.pro.php" method="post">
                <input type="hidden" name="mode" value="update">
                <input type="hidden" name="seq" value="<?php echo $seq ?>">

                <div><h2>글 수정</h2></div>
                <hr>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">제목</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" placeholder="글제목 입력" required="required" value="<?php echo $title ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">카테고리</label>
                    <div class="col-sm-10">
                        <select name="category" class="form-control">
                            <option value="공지사항" <?php if($category == '공지사항'){echo 'selected';}?>>공지사항</option>
                            <option value="고객후기" <?php if($category == '고객후기'){echo 'selected';}?>>고객후기</option>
                            <option value="주문문의" <?php if($category == '주문문의'){echo 'selected';}?>>주문문의</option>
                            <option value="고객상담" <?php if($category == '고객상담'){echo 'selected';}?>>고객상담</option>
                            <option value="A/S접수" <?php if($category == 'A/S접수'){echo 'selected';}?>>A/S접수</option>                  
                        </select>
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">내용</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="question" id="editor" placeholder="문의글 입력" required="required"><?php echo $question ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-danger btn-lg btn-block">문의글수정</button>
                    </div>
                </div>
            </form>
            </div>
            </main>
        </div>
    </section><!-- /section -->
    <div style="padding-top: 1000px;"></div>
    <?php include 'footer.inc.php'; ?>
</div>

<a href="#logo"><div class="floating"></div></a>

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/bootstrap-4.1.1/js/bootstrap.min.js"></script>
<script src="/assets/ckeditor/ckeditor.js"></script>
<script src="index.js"></script>
<script src="index2.js"></script>

<script>
CKEDITOR.replace('editor');
</script>
</body>
</html>