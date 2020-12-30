<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/bootstrap-4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome-free-5.1.0-web/css/all.css">
    <link rel="shortcut icon" href="logo.png">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <title>그린가구</title>
    <style>
        #main > div:nth-child(2) {
            background: black url('tree.png') no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Nanum Myeongjo', serif;
        }
        .carousel-item > img {
            height: 10rem;
            margin: 0 auto;
        }
        #menu2_2 {
            background: url('why.jpg') no-repeat center center;
            background-size: cover;
            width: 10rem;
            text-align: center;
            font-family: 'Nanum Myeongjo', serif;
        }
        #menu2_2 > a {
            color: black;
            text-decoration-line: none;
        }
        #top{
            position: relative;
            left: 92%;
            top: 20px;
        }
        .footer{
            padding-top: 500px;
        }
        #sns{
            position: relative;
            left: 100px;
            top: 20px;
        }
        table{
            table-layout: fixed;
        }
        td{
            overflow:hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>

<div class="frame" id="header">
    <?php include 'header.inc.php'; ?>     
    <?php include 'nav.inc.php'; ?>
        <div id="main" class="content">
            <div>
                <div id="mainPic"></div>
                <div id="mainBar"></div>
            </div>
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark mt-4">
                <div class="col-md-7 px-0">
                    <h1 class="display-4">그린가구에 오신 것을 환영합니다.</h1>
                    <p class="lead my-3">Green Furniture strives to be a beloved company that enriches the quality of its customers' lives. We produce the best quality with steady technology development and...</p>
                    <p class="lead mb-0"><a href="/project/1/ideology.php" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>
            <hr><br>
            <div id="menu1" class="row mb-5">
                <div id="menu1_1" class="col-6">new items
                    <div id="carouselExampleControls" class="carousel slide pt-3" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block" src="sofa.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" src="bed.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" src="desk.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" src="closet.png" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div id="menu1_2" class="col-6">공지
                <div id="include2"></div>
                </div>
            </div>
            <br>
            <div id="menu2" class="row">
                <div id="menu2_1" class="col-6">new posts
                    <div id="include"></div>
                    <div id="plus"><a href="editor.all_question.php"><i class="fas fa-plus"></i></a></div>
                </div>
                <div id="menu2_2" class="col-6">
                    <a href="/project/1/strategy.php"><h4 class="pt-1">왜 그린일까?</h4></a>
                </div>
            </div>
        </div>
    <?php include 'footer.inc.php' ?>
    
</div>

<a href="#header"><div class="floating"></div></a>

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/bootstrap-4.1.1/js/bootstrap.min.js"></script>
<script src="index.js"></script>
<script>
    $(document).ready(function(){
        $("#include").load("editor.home.php")
    });
</script>
<script>
 $(document).ready(function(){
        $("#include2").load("editor.home_notice.php")
    });
</script>
</body>
</html>