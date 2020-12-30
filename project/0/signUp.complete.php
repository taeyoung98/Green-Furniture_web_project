<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/bootstrap-4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome-free-5.1.0-web/css/all.css">
    <link rel="shortcut icon" href="logo.png">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo" rel="stylesheet">
    <link href="../index.css" rel="stylesheet">
    <link href="../index3.css" rel="stylesheet">
    <title>그린가구</title>
    <style>
    section{
        height: 50%;
    }
    #text{
        outline: 1px solid gray;
        font-size: 80px;
        text-align: center;
        margin: 60px 60px;
    } 
    #button{
        text-align: center;
    }  
    a:link{
        color: black;
        text-decoration:none;
    }
    a:visited{
        color:black;
        text-decoration:none;
    }
    a:hover{
        color:black;
        text-decoration:none;
    }
  
  
</style>
</head>
<body>

<div class="frame" id="header">
    <?php include '../header.inc.php'; ?>
    <?php include '../nav.inc.php'; ?>
        <section id="section">
        <main id="main" class="pt-4">
            
            <div id="text">가입 완료
                <br>       
            </div>
            <div id="button">
            <a class="btn btn-secondary" href="login.php">로그인창으로 이동</a>
            <a class="btn btn-secondary" href="../index.php">시작페이지로 이동</a>
            </div>
        </main>
        </section><!-- /section -->
    <?php include '../footer.inc.php' ?>
</div>

<a href="#logo"><div class="floating"></div></a>

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/bootstrap-4.1.1/js/bootstrap.min.js"></script>
<script src="../index.js"></script>
</body>
</html>