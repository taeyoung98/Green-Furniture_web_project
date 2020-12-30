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
table, th, td{
    outline: 1px solid black;
    margin: 2em;
    padding: 1em;
}
table td{
    padding: 0 4rem 0 1em;
}
#signUp{
  
}
#title{
    padding: 1em 1em 0 1em;
    font-size: 30px;
}  
.button{
    padding: 0 12rem;
}
#text{
    padding: 10px;
    font-size: 20px;
}  
section{
  height: 700px;
}
#form{
    text-align: center;
    font-family: 'Nanum Myeongjo', serif;

}
table{
    margin-left: auto;
    margin-right: auto;
}

</style>
</head>
<body>

<div class="frame" id="header">
    <?php include '../header.inc.php'; ?>
    <?php include '../nav.inc.php'; ?>

        <section id="section">
        <main id="main" class="pt-4">
            
            <div id="form">
                <div id="title">회원가입</div>
                <hr>
                <form  id="signUp" action="signUp.pro.php" method="post">
                    <table>
                        <tr>
                            <th><label for="id" class="form-control"> *아이디 </label></th>
                            <td><input type="text" name="id" id="text" class="form-control" placeholder="아이디 입력" required autofocus><br></td>
                            <!-- <td><input id="text" type="text" name="id" placehorder="아이디 입력"></td> -->
                        </tr>
                        <tr>
                            <th><label for="pw" class="form-control"> *비밀번호</label></th>
                            <td><input type="text" name="pw" id="text" class="form-control" placeholder="비밀번호 입력" required ="required"><br></td>
                            <!-- <td><input id="text" type="text" name="pw"></td> -->
                        </tr>
                        <tr>
                            <th><label for="pwc" class="form-control"> *비밀번호 확인</label></th>
                            <td><input type="text" name="pwc" id="text" class="form-control" placeholder="비밀번호 확인" required ="required"><br></td>
                            <!-- <td><input id="text" type="text" name="pwc"></td> -->
                        </tr>
                        <tr>
                            <th><label for="name" class="form-control"> *이름</label></th>
                            <td><input type="text" name="name" id="text" class="form-control" placeholder="이름 입력" required ="required"><br></td>
                            <!-- <td><input id="text" type="text" name="name"></td> -->
                        </tr>
                    </table>                
                    <div class="button">
                        <button type="submit" class="btn btn-secondary">가입하기</button>
                    </div>
                </form>
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