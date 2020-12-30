<?php

$seq = isset($_GET['seq']) ? $_GET['seq'] : die();

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

$sql_before = "SELECT * FROM customer_reviews WHERE seq = $seq-1";
$result_before = $conn->query($sql_before);

$sql = "SELECT * FROM customer_reviews WHERE seq = $seq";
$result = $conn->query($sql);

$sql_next = "SELECT * FROM customer_reviews WHERE seq = $seq+1";
$result_next = $conn->query($sql_next);

$title = '';
$question = '';
$userid = '';
$reg_date = '';

if ($result_before->num_rows > 0) {
    // output data of each row
    if($row_before = $result_before->fetch_assoc()) {
        $title_before = $row_before['title']; 
    }
} else {
    $title_before ="";
}

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
        $title = $row['title']; 
        $question = $row['question'];
        $userid = $row['userid'];
        $reg_date = $row['reg_date'];
    }
} else {
    echo "0 results";
}

if ($result_next->num_rows > 0) {
    // output data of each row
    if($row_next = $result_next->fetch_assoc()) {
        $title_next = $row_next['title']; 
    }
} else {
    $title_next ="";
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
    <link href="../index.css" rel="stylesheet">
    <link href="../index2.css" rel="stylesheet">
    <link href="../index3.css" rel="stylesheet">
    <title>그린가구</title>
    <style>
table{
    width: 650px;
}
table, th, td{
    border: 1px solid black;
}
table .memo{
    padding: 4rem 2rem;
}
table .title{
    width: 5em;
}
#menubar{
    background-color: red;
}
#table_navi{
    width: 100%;
}
#table_navi .navi_num{
    width: 5em;
}
#table_navi .navi_title:hover{
    color : gary;
    cursor: pointer;
}
#title{
    font-size: 30px;
} 
section{
    height: 120%;
} 
.main{
    margin: 2em auto;
    width: 65%;
}
#main{
    overflow: auto;
}
</style>

</head>
<body>
<div class="frame" id="header">
    <?php include '../header.inc.php'; ?>
    <?php include '../nav.inc.php'; ?>
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
                                <a class="dropdown-item" href="/project/3/production_process.php">‧ 제작과정</a>
                                <a class="dropdown-item" href="/project/3/delivery.php">‧ 배송과정</a>
                                <a class="dropdown-item" href="/project/3/editor.order_inquiry.php">‧ 주문문의</a>
                                <a class="dropdown-item" href="/project/3/editor.customer_consultation.php">‧ 고객상담</a>
                                <a class="dropdown-item" href="/project/3/editor.a_s.php">‧ A/S 접수</a>
                                <a class="dropdown-item" href="/project/3/serviceCenter.php">‧ 서비스센터</a>
                            </div>
                        </li><!-- /가구주문 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/project/4/notice.php" id="navCommunity">‧ 커뮤니티</a>
                            <div class="dropdown-menu" href="/project/4/editor.notice.php" id="dropCommunity">
                                <a class="dropdown-item" href="/project/4/editor.notice.php">‧ 공지사항</a>
                                <a class="dropdown-item" href="/project/4/editor.customer_reviews.php">‧ 고객후기</a>
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
                <div id="title">고객후기</div>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <th class="title">제목</th>
                            <th colspan="5"><?php echo $title ?></th>
                        </tr>
                    </thead>
                    <tbody id="main_table">
                        <tr>
                        <th class="title">작성자</th>
                        <td><?php echo $userid ?></td>
                        <th class="title">등록일</th>
                        <td><?php echo $reg_date ?></td>
                        <th class="title">No.</th>
                        <td><?php echo $seq ?></td>
                        </tr>
                    
                        <tr>
                        <td colspan="6" class="memo"><?php echo $question ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table id="table_navi">
                    <tbody>
                        <tr>
                            <td class="navi_num">다음글</td>
                            <td id="navi_next" class="navi_title"><?php echo $title_next ?></td>
                        </tr>
                        <tr>
                            <td class="navi_num">이전글</td>
                            <td id="navi_before" class="navi_title"><?php echo $title_before ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                
                <form id="cate" action = "../editor.update.php?seq=<?php echo $seq ?>" method="post">         
        
                <button id="index" type="button" class="btn btn-secondary">목록으로</button>
                    <?php
                        if(isset($_SESSION['id'])){
                            if($_SESSION['id']==$userid){
                                //로그인 후
                                echo '<input type="hidden" name="category" id="category" value="고객후기">
                                <button type="submit" class="btn btn-secondary">수정</button>';
                            }
                        }
                        else{
                            //로그인 전
                            echo '';
                        }
                    ?>
                </form>              
            </main>
        </div>
    </section><!-- /section -->
    <div style="padding-top: 1000px;"></div>
    <?php include '../footer.inc.php'; ?>
</div>

<a href="#logo"><div class="floating"></div></a>

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/bootstrap-4.1.1/js/bootstrap.min.js"></script>
<script src="../index.js"></script>
<script src="../index2.js"></script>
<script>
    $(document).ready(function() {
        $('#basicNav #navCommunity').addClass('clicked');
        $('#sideNav #dropCommunity').show();
        $('#sideNav #dropCommunity > a:nth-child(2)').css({
            'font-weight': 'bold',
            color: 'salmon'
        });
    });
    $('#sideNav #navCommunity').hover(function() {
        $('#sideNav #dropCommunity').show();        
    }, function() {
        $('#sideNav #dropCommunity').show();
    });
</script>
<script>
    var seq = $('#main_table').find('td:eq(2)').text();
    seq = parseInt(seq);

    $(document).on('click', '#table_navi #navi_next', function(){
        if($('#table_navi').find('td:eq(1)').text() != ''){
            location.href = 'text_form.customer_reviews.php?seq='+ (seq+1);
        }
        else{
            alert("마지막 글입니다.");
        }     
    }); 

    $(document).on('click', '#table_navi #navi_before', function(){
        if($('#table_navi').find('td:eq(3)').text() != ''){
            location.href = 'text_form.customer_reviews.php?seq='+ (seq-1);
        }
        else{
            alert("처음 글입니다.");
        }
    }); 

    $(document).on('click', '#index' , function(){
        location.href = 'editor.customer_reviews.php';
    });

    //console.log($('#table_navi').find('td:eq(1)').text());
   
</script>

</body>
</html>