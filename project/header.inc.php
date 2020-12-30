<?php
    session_start();   
?>
<div class="header">
    <div class="container">
        <div id="top">
        <form class="form-inline" action="/project/editor.search.php" method="post">
            <?php
            if(isset($_SESSION['name'])){
                //로그인 후
                echo '<div>'.$_SESSION['name'].' 님</div><button id="loginButton" type="button" class="btn btn-outline-secondary"><a href="/project/0/logout.php">로그아웃</a></button>';
                echo '<button type="button" class="btn btn-outline-secondary"><a href="/0/join.html"></a></button>';
            }
            else{
                //로그인 전
                echo '<button id="loginButton" type="button" class="btn btn-outline-secondary"><a href="/project/0/login.php">로그인</a></button>';
                echo '<button type="button" class="btn btn-outline-secondary"><a href="/project/0/signUp.php">회원가입</a></button>';
            }
            ?>
            <img id="magnifyingGlass" src="/project/magnifying_glass.png">
            <label for="search" class="sr-only">검색</label>
            <input type="text" name="search" id="search" class="form-control mr-sm-0" placeholder="search" required="required"><br>
            <button class="btn btn-outline-secondary" type="submit">검색</button>
        </form>
        </div>
        <div id="logo">
            <a href="/project/index.php">그린가구</a>
        </div>
    </div>
</div><!-- /header -->   