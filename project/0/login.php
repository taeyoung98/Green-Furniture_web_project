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
    .form-signin{
    margin : 10% 30%;
    }   
    section{
    height: 500px;
}
</style>
</head>
<body>

<div class="frame" id="header">
    <?php include '../header.inc.php'; ?>
    <?php include '../nav.inc.php'; ?>
        <section id="section">
            <main id="main" class="pt-4">    
                <form class="form-signin" action="login.pro.php" method="post">     
                    <label for="userid" class="sr-only">아이디</label>
                    <input type="text" name="id" id="userid" class="form-control" placeholder="사용자 아이디" required autofocus><br>
                    <label for="passwd" class="sr-only">비밀번호</label>
                    <input type="password" name="pw" id="passwd" class="form-control" placeholder="사용자 비밀번호" required="required"><br>
                    <button class="btn btn-secondary" type="submit">로그인</button>
                </form>
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