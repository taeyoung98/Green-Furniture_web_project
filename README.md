# Green Furniture Web Site
[![Everything Is AWESOME](https://user-images.githubusercontent.com/48309721/72776892-0f9d2680-3c57-11ea-9d8b-c193ce8e68c8.JPG)](https://www.youtube.com/watch?v=1nL0_OowGOk "클릭하여 YouTube로 이동")

# 목차

## 1. 개발 환경 구축
* 1.1 Wampserver 설치
* 1.2 데이터 베이스 생성

## 2. 웹 페이지 기능
* 2.1 로그인 회원가입 기능
    - (1)회원가입
    - (2)로그인
* 2.2 검색 기능
* 2.3 게시판 기능
    - (1)게시글 작성
    - (2)작성된 게시글 수정
* 2.4 카카오 다음지도 API

<hr>

# 1. 개발 환경 구축
## 1.1 Wampserver 설치
WampServer는 Apache2, PHP, MySQL 및 MariaDB를 사용하여 동적 웹 응용 프로그램을 만들 수 있는 Windows의 웹 개발 플랫폼이다.
<br>
WampServer는 웹 애플리케이션을 직관적으로 개발하기 위해 필요한 모든 것을 자동으로 설치한다.
<br>
 

<a href="http://www.wampserver.com/en/download-wampserver-64bits/" target="_blank">http://www.wampserver.com/en/download-wampserver-64bits/</a>
에 접속하여 버전에 맞는 WampServer를 다운로드 한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71797583-36256400-3092-11ea-9e4f-2f6124252544.JPG" width="600"></img>
___
다운로드된 설치파일을 실행하면 설치 과정이 자동으로 진행된다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798067-00817a80-3094-11ea-9a37-1e5a26cea158.JPG" width="300"></img>

인터넷 익스플로러가 아닌 다른 웹브라우저를 WampServer에서 사용하는 디폴트 웹브라우저로 지정하려면 "예" 를 선택한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798069-011a1100-3094-11ea-8c89-47c1cde50b0b.JPG" width="300"></img>

노트패드가 아닌 다른 편집기를 WampServer에서 사용하는 디폴트 웹브라우저로 지정하려면 "예" 를 선택한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798070-011a1100-3094-11ea-8edb-c8d6dc530d63.JPG" width="300"></img>

Windows 보안 경고 창에서 아파치 웹서버에 접근할 수 있게 허용할 네트워크를 묻는데 보통 사용하는 곳이 공공장소라면 두번째 항목, 집 같은 곳에서 사용한다면 첫번째 항목을 선택한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798071-011a1100-3094-11ea-9955-83bfd0080baa.JPG" width="450"></img>

바탕화면에 생긴 단축 아이콘이나 시작 메뉴에서 Wampserver64를 검색하여 실행한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798072-01b2a780-3094-11ea-9081-32113e93867c.JPG" width="100"></img>

오른쪽 아래 시계옆에 Wampserver 상태를 트레이 아이콘으로 표시해준다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798432-5e629200-3095-11ea-8866-d9450fc32922.JPG" width="300"></img>

붉은색은 Wampserver가 제공하는 모든 서비스가 중단된 상태이다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798078-09724c00-3094-11ea-84d2-a47b80a130e4.JPG" width="70"></img>

주황색일 경우 일부 서비스만 실행되고 있는 상태이다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798079-0a0ae280-3094-11ea-9815-96a6f4ad8874.JPG" width="70"></img>

초록색은 모든 서비스가 문제 없이 동작 중인 상태이다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71798080-0a0ae280-3094-11ea-98ab-a5b00ac2cb5e.JPG" width="70"></img>

설치된 wamp64의 www경로에 assets폴더와 project폴더를 넣어준다. 주소창에 localhost/project 경로를 검색하면 project폴더에있는 index.php파일이 실행된다. assets에는 layout 관련 폴더들이 들어있는데, 이 폴더들은 project폴더 안의 php 파일에서 불러온다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71799939-05e1c380-309a-11ea-8f5c-ef1490aae89c.JPG" width="700"></img>


## 1.2 데이터 베이스 생성
Wampserver설치시 함께 설치된 DB에 phpmyadmin 으로 접근하기 위해서는 id와 password를 알아야 한다.
초기 등록되어있는 아이디는 'root'이고 password는 공백이다.
root 사용자의 암호를 지정하기 위해서 WampServer 트레이 아이콘 위에서 마우스 왼쪽 버튼을 클릭하면 보이는 메뉴에서 MariaDB > MariaDB console을 선택한다.

<img src="https://user-images.githubusercontent.com/48309721/71802748-0ed69300-30a2-11ea-9837-a88c8d120bbe.JPG" width="300"></img><br>
로그인할 사용자 이름이 root 로 되어있는데, 변경하지 않고 OK버튼을 클릭해준다.

초기에는 암호가 지정되어 있지 않기 때문에 Enter password:에서 엔터만 입력하면 로그인이 된다.

암호를 지정하기 위해 다음 명령어를 실행시킨다.
```
SET PASSWORD FOR root@localhost = PASSWORD('your_root_password');
```
주소창에 localhost/phpmyadmin을 검색하면 나오는 다음 창에서 아이디 root와 설정해준 비밀번호를 입력하여 DB에 접속한다.
<img src="https://user-images.githubusercontent.com/48309721/71802945-ba7fe300-30a2-11ea-8575-278c55720ad4.JPG" width="500"></img><br>
<img src="https://user-images.githubusercontent.com/48309721/71803021-f6b34380-30a2-11ea-9dbe-e22ed2f5edb3.JPG" width=""></img><br>
<img src="https://user-images.githubusercontent.com/48309721/71803185-67f2f680-30a3-11ea-8da5-1ec69b2228b1.JPG" width="500"></img><br>
데이터베이스메뉴에있는 새 데이터베이스 만들기를 이용하여 'project'라는 이름의 데이터베이스를 생성해준다.
* 로그인 회원가입 관련 table생성<br>
<img src="https://user-images.githubusercontent.com/48309721/71803519-53fbc480-30a4-11ea-8da2-c12fc1a1f81e.JPG" width="300"></img><br>
생성된 project DB에 새 테이블 만들기를 이용하여 'user_info" 테이블을 생성해 준다. 
<img src="https://user-images.githubusercontent.com/48309721/71948019-01401b00-3212-11ea-9032-db6fdb36be53.JPG" width=""></img><br>
실행을 누르면 나오는 창에서 다음과 같이 입력해주고 저장을 누르면 테이블이 생성된다.
<img src="https://user-images.githubusercontent.com/48309721/71803609-97563300-30a4-11ea-8fac-ccc90b26c07c.JPG" height="100"></img><br>

* 게시판 관련 table생성<br>
홈페이지에 필요한 게시판은 그린의 가구, 주문문의, 고객상담, A/S접수, 공지사항, 고객후기, 전체글 이렇게 7개 이다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71807491-c7a2cf00-30ae-11ea-8d04-ba711b0c8be4.JPG" ></img><br>
위의 그림은 all_question 테이블 생성과정이다 위의 그림과 같은 칼럼내용으로 all_question, a_s, customer_reviews, notice, order_inquiry, user_info 테이블을 생성해준다.
<br>
그린의 가구 게시판의 경우 이미지가 들어가야 함으로 아래와 같은 칼럼내용으로 gallery 테이블을 생성해준다.
<img src="https://user-images.githubusercontent.com/48309721/71947792-4b74cc80-3211-11ea-9d5a-ecc6cfad03f8.JPG" ></img><br>
___
<img src="https://user-images.githubusercontent.com/48309721/71952863-a1eb0680-3223-11ea-9547-abfbd8479c05.png" ></img>
결과적으로 그림과 같이 project DB에 8개의 테이블이 생성되었다.
<hr>

# 2.웹 페이지 기능

# 2.1 로그인 회원가입 기능
데이터베이스 project에 있는 테이블 중 회원 정보 저장 테이블인 user_info 테이블을 사용한다.
<br>
<img src="https://user-images.githubusercontent.com/48309721/71952806-62bcb580-3223-11ea-9bcc-df3076e32514.png" width="400"></img><br>

<img src="https://user-images.githubusercontent.com/48309721/72709381-36505400-3ba8-11ea-8ad6-1d213a609c1d.JPG" width=""></img><br>
상단부의 로그인, 회원가입 버튼을 이용하여 로그인을 하거나 회원가입을 할 수 있다.<br>
<hr>
<img src="https://user-images.githubusercontent.com/48309721/72709241-d8237100-3ba7-11ea-8539-6ff374692551.JPG" width=""></img>
로그인 전<br>
<img src="https://user-images.githubusercontent.com/48309721/72709237-d8237100-3ba7-11ea-9e96-fe40764f145a.JPG" width=""></img>
로그인 후<br>
<hr>

<C:\wamp64\www\project\header.inc.php>
```html
    <form class="form-inline" action="" method="GET">
        <?php
        if(isset($_SESSION['id'])){
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
    </form>
```
<br><br>
## (1) 회원가입
회원가입 버튼을 누르면 회원가입 창으로 이동한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/71950035-2be1a200-3219-11ea-955f-b1e48f73825f.JPG" width="400"></img><br>

<C:\wamp64\www\project\0\signUp.php>
```html
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
```
텍스트박스의 required 속성을 "required"로 설정해주어 모든 값을 입력하도록 한다. 입력된 값들은 POST형식으로 "signUp.pro.php"파일로 보낸다.
<hr>
<img src="https://user-images.githubusercontent.com/48309721/71950037-2c7a3880-3219-11ea-9603-cf0f31229548.JPG" width="320"></img><br>
<img src="https://user-images.githubusercontent.com/48309721/71950036-2be1a200-3219-11ea-9885-173e199fe344.JPG" width="320"></img><br>
<hr>

<C:\wamp64\www\project\0\signUp.pro.php>
```php
if($pw!=$pwc)
{
    echo"<script>alert(\"비밀번호와 비밀번호 확인이 다릅니다.\");
            history.back();
        </script>";
    exit();
}
```

받아온 $pw값과 $pwc값이 다르면 비밀번호와 비밀번호 확인이 다르다는 알림창이 뜬다.

```php
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
```
select 문을 이용하여 user_info테이블에 있는 id속성중 입력된 id인 $id와 일치하는 값이 있으면 가져온다.
가져온 값의 개수를 변수$count에 저장한다. $count의 개수가 0개 이상이면 이미 사용중인 아이디가 있다는 알림창이 뜬다.

<img src="https://user-images.githubusercontent.com/48309721/71950038-2c7a3880-3219-11ea-87ad-7e30e58c8b3c.JPG" width="450"></img><br>
가입이 완료되면 DB의 user_info테이블에 입력된 정보들을 저장하고 가입 완료 창으로 이동한다.<br>

<C:\wamp64\www\project\0\signUp.complete.php>
```html
<section id="section">
<main id="main" class="pl-5 pt-4 pr-5 border-left">
    <div id="text">가입 완료
        <br>       
    </div>
    <div id="button">
    <a class="btn btn-secondary" href="login.php">로그인창으로 이동</a>
    <a class="btn btn-secondary" href="../index.php">시작페이지로 이동</a>
    </div>
</main>
</section><!-- /section -->
```
<br><br>
## (2) 로그인
<img src="https://user-images.githubusercontent.com/48309721/71950039-2c7a3880-3219-11ea-8dfc-78b909d4aae2.JPG" width="450"></img><br>
로그인 버튼을 누르면 로그인 창으로 이동한다.<br>
<C:\wamp64\www\project\0\login.php>
```html
    <form class="form-signin" action="login.pro.php" method="post">     
        <label for="userid" class="sr-only">아이디</label>
        <input type="text" name="id" id="userid" class="form-control" placeholder="사용자 아이디" required autofocus><br>
        <label for="passwd" class="sr-only">비밀번호</label>
        <input type="password" name="pw" id="passwd" class="form-control" placeholder="사용자 비밀번호" required="required"><br>
        <button class="btn btn-secondary" type="submit">로그인</button>
    </form>
```

<br>

<C:\wamp64\www\project\0\login.pro.php>
```php
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
```
입력된 id와 pw값이 DB에 있는 값과 일치하면 session에 id와 그에 일치하는 name값을 session에 저장한다.

<br>

<C:\wamp64\www\project\0\logout.php>
```php
<?php
    session_start();

    unset($_SESSION['id']);
    unset($_SESSION['name']);

    header('Location: ../index.php');
?>
```
로그인된 상태에서 로그아웃 버튼을 누르면 session에 저장된 id값과 name값이 제거된다.

# 2.2 검색 기능
<img src="https://user-images.githubusercontent.com/48309721/72709522-862f1b00-3ba8-11ea-887e-305521ecf99c.JPG" width=""></img><br>
상단부의 텍스트박스와 버튼을 이용하여 웹페이지에 작성되어있는 전체 글 중에서 검색어가 포함된 제목의 글을 찾을 수 있다.
"글" 이라는 검색어를 텍스트박스에 입력하고 검색을 누르면 다음과 같이 결과를 보여주는 창이 뜬다.
<br>
<img src="https://user-images.githubusercontent.com/48309721/72704462-3ea29200-3b9c-11ea-93e5-042d11a1b3e5.JPG" width="600"></img>
<img src="https://user-images.githubusercontent.com/48309721/72704411-1b77e280-3b9c-11ea-913f-3682d07095c3.JPG" width="600"></img>

<C:\wamp64\www\project\header.inc.php>
```html
    <form class="form-inline" action="editor.search.php" method="post">
        <img id="magnifyingGlass" src="/project/magnifying_glass.png">
        <label for="search" class="sr-only">검색</label>
        <input type="text" name="search" id="search" class="form-control mr-sm-0" placeholder="search" required="required"><br>
        <button class="btn btn-outline-secondary" type="submit">검색</button>
    </form>
```
검색 버튼을 누르면 입력된 텍스트 값을 editor.search.php로 POST 형식으로 보낸다. 이때 텍스트값의 required 속성을 "required"로 설정해 주어서 텍스트박스에 값이 입력되어야만 검색 버튼을 누를 수 있게 해준다.

<br>

<C:\wamp64\www\project\editor.search.php>


```php
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "project";
$search=$_POST['search'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM all_question WHERE title LIKE '%$search%' ORDER BY seq DESC ";
$result = $conn->query($sql);
?>
```
header.inc.php에서 받은값을 변수 $search에 저장한다.

SELECT 문을 사용하여 project DB의 all_question테이블에서 title속성의 값에 $search 가 포함된 행의 모든 속성값을 가져와 seq 속성값의 내림차순으로 $result에 저장한다.

<br>

<C:\wamp64\www\project\editor.search.inc.php>
```html
        <table class="table table-bordered table-striped">
            <colgroup>
                <col width="10%">
                <col width="15%">
                <col width="*">
                <col width="15%">
                <col width="15%">
            </colgroup>
            <thead>
                <tr>
                    <th>번호</th>
                    <th>카테고리</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>등록일</th>    
                </tr>
            </thead> 
            <tbody>
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo <<< BBS
                    <tr id="text">
                        <td>{$row['seq']}</td>
                        <td>{$row['category']}</td>
                        <td>{$row['title']}</td>
                        <td>{$row['userid']}</td>
                        <td>{$row['reg_date']}</td>
                    </tr>
BBS;
                }
            } else {
                echo <<< NOBBS
                    <tr>
                        <td colspan="6">검색 결과가 없습니다.</td>
                    <tr>
NOBBS;
            }
            $conn->close();
        ?>
            </tbody>
        </table>
```
$result에 저장된 값을 테이블형식으로 입력해준다.

# 2.3 게시판 기능
데이터베이스 project에 있는 테이블들을 사용한다.
* all_question --> 전체글 목록 저장 테이블
* a_s --> A/S문의글 목록 저장 테이블
* customer_consultation --> 고객상담글 목록 저장 테이블
* customer_reviews --> 고객후기글 목록 저장 테이블
* gallery --> 가구 사진을 저장하는 테이블
* notice --> 공지글 저장 테이블
* order_inquiry --> 주문문의글 저장 테이블

<img src="https://user-images.githubusercontent.com/48309721/71952808-66503c80-3223-11ea-86b7-7e38aabad809.png" width=""></img>

아래의 내용은 주문문의 게시판을 예시로 기능을 설명 한다.

<hr>
<img src="https://user-images.githubusercontent.com/48309721/72706169-afe44400-3ba0-11ea-994f-bf4457d1e375.JPG" width=""></img>

<C:\wamp64\www\project\3\editor.order_inquiry.php>

```php
<?php
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

$sql = "SELECT * FROM order_inquiry ORDER BY seq DESC ";
$result = $conn->query($sql);
?>
```
DB의 order_inquiry테이블의 sep값 기준 내림차순으로 데이터를 가져온다.

<C:\wamp64\www\project\3\editor.order_inquiry.php>
```php
<table class="table table-bordered table-striped">
    <colgroup>
        <col width="12%">
        <col width="15%">
        <col width="*">
        <col width="20%">
        <col width="20%">
    </colgroup>
    <thead>
        <tr>
            <th>번호</th>
            <th>카테고리</th>
            <th>제목</th>
            <th>작성자</th>
            <th>등록일</th>    
        </tr>
    </thead> 
    <tbody>
<?php
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo <<< BBS
            <tr id="text">
                <td>{$row['seq']}</td>
                <td>{$row['category']}</td>
                <td>{$row['title']}</td>
                <td>{$row['userid']}</td>
                <td>{$row['reg_date']}</td>
            </tr>
BBS;
        }
    } else {
        echo <<< NOBBS
        작성된 글이 없습니다.
NOBBS;
    }
    $conn->close();
?>
    </tbody>
</table>
```
내림차순으로 가져온 데이터를 차례로 테이블에 넣어 표 형식으로 나타낸다.
<hr>

```javascript
<script src="/assets/js/jquery-3.3.1.min.js"></script>
```
```javascript
<script>  
    $(document).on('click', '.table td', function(){
        var seq = $(this).parent().find(':eq(0)').text();
        //console.log(seq);
        $.get('text_form.order_inquiry.php',{
            seq: seq
        }).done(function(data){
            if($.trim(data)){
                //$('#pocket').html(data);
                location.href = 'text_form.order_inquiry.php?seq='+ seq; 
               // $('#exampleModal').modal('show');    
            }
        });
    }); 
</script>
```
<img src="https://user-images.githubusercontent.com/48309721/72712208-ec6a6c80-3bad-11ea-9b85-8564acd3f49c.JPG" width=""></img>
javascript의 click이벤트를 이용해 목록에 있는 글을 클릭하면 seq값과 일치하는 글을 보여주는 페이지로 이동한다.

<hr>

## (1) 게시글 작성

<img src="https://user-images.githubusercontent.com/48309721/72704851-30a14100-3b9d-11ea-9ebf-f069f8480415.JPG" width=""></img>
<br>
<C:\wamp64\www\project\3\editor.order_inquiry.php>
```php
<form id="cate" action="../editor.php" method="post">
    <input type="hidden" name="category" id="category" value="주문문의"><br>

    <?php
    if(isset($_SESSION['id'])){
        //로그인 후
        echo '<h2><button type="submit" class="btn btn-secondary">글작성</button></h2>';
    }
    else{
        //로그인 전
        echo '<h2><a href="/project/0/login.php"class="btn btn-secondary"><div id="button">글작성</div></a></h2>';
    }
    ?>
</form>
```
글작성 버튼을 눌렀을때 로그인 된 상태라면 글 작성 페이지로 이동하고, 로그인이 되있지 않다면 로그인 페이지로 이동한다.
<hr>
<img src="https://user-images.githubusercontent.com/48309721/72704848-30a14100-3b9d-11ea-8329-eb29058f419d.JPG" width=""></img>

<C:\wamp64\www\project\editor.php>
```php
<?php
    $category=$_POST['category'];
?>
```
```php
<main id="main" class="pt-4">
    <form action="editor.pro.php" method="post">
        <input type="hidden" name="mode" value="insert">
        <?php
            echo '<input type="hidden" name="id" value="'.$_SESSION['id'].'">'
        ?>
    
        <div><h2>글 작성</h2></div>
        <hr>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">제목</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" placeholder="글제목 입력" required="required">
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
                <textarea class="form-control" name="question" id="editor" placeholder="문의글 입력" required="required"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-secondary">글 작성하기</button>
            </div>
        </div>
    </form>
</main>
```
카테고리는 받아온 값으로 자동으로 선택되고 제목과 내용을 입력한 후 글 작성하기 버튼을 누르면 mode, title, category, question 값들을 editor.pro.php 로 보낸다.

<C:\wamp64\www\project\editor.pro.php>
```php
$mode = $_POST['mode'];
$seq = isset($_POST['seq']) ? $_POST['seq'] : 0;
$userid = isset($_POST['id']) ? $_POST['id'] : ''; // $_REQUEST['userid']
$title = $_POST['title'];
$category = $_POST['category'];
$question = $_POST['question'];
```
받은 값들을 변수에 저장한다.
```php
if($mode == 'insert'){

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

} 
```
mode가 insert일 경우 insert문을 이용하여 category에 따른 DB테이블에 userid, title, question 값들을 넣어준다.

```php
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
```
값들이 정상적으로 삽입되면, category 값에 따라 목록을 보여주는 창으로 이동한다.
<hr>
<br>
<img src="https://user-images.githubusercontent.com/48309721/72704850-30a14100-3b9d-11ea-8880-25454e6dcfd4.JPG" width=""></img>
<br>
정상적으로 글이 작성된 것을 볼 수 있다.
<hr>

## (2) 작성된 게시글 수정
<img src="https://user-images.githubusercontent.com/48309721/72705168-11ef7a00-3b9e-11ea-8b96-5b6c5c5a6976.JPG" width="400"></img>
<img src="https://user-images.githubusercontent.com/48309721/72705165-10be4d00-3b9e-11ea-8c7e-13f691a6bf7a.JPG" width="400"></img>
<br>
로그인한 아이디와 작성자가 일치하면 수정 버튼이 생긴다. 수정 버튼을 누르면 글을 수정할 수 있는 창으로 이동한다.

<C:\wamp64\www\project\3\text_form.order_inquiry.php>
```php
<form id="cate" action = "../editor.update.php?seq=<?php echo $seq ?>" method="post">    
<button id="index" type="button" class="btn btn-secondary">목록으로</button>
    <?php
        if(isset($_SESSION['id'])){
            if($_SESSION['id']==$userid){
                //아이디와 작성자 일치
                echo '<input type="hidden" name="category" id="category" value="주문문의">
                <button type="submit" class="btn btn-secondary">수정</button>';
            }
        }
        else{
            //로그인 전
            echo '';
        }
    ?>
</form>
```

<hr>

<img src="https://user-images.githubusercontent.com/48309721/72705248-55e27f00-3b9e-11ea-9f4d-0b70c378bf91.JPG" width="500"></img>
<br>

<C:\wamp64\www\project\editor.update.php>

```php
$seq = isset($_GET['seq']) ? $_GET['seq'] : exit;
$category = $_POST['category'];
```
선택한 글의 seq값과 category값을 받아온다.
```php
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
```
category에 맞는 DB table에서 seq값이 일치하는 행의 데이터를 가져온다.
```php
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
```
가져온 값을 변수에 저장한다.
```php
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
```
변수에 저장한 값을 출력하여 보여준다.
<hr><br>

<img src="https://user-images.githubusercontent.com/48309721/72705314-7f9ba600-3b9e-11ea-9747-6fa8402daf1a.JPG" width="500"></img>
<br>
글의 내용을 수정 한 후 문의글수정 버튼을 누르면 mode, title, category, question 값들을 editor.pro.php 로 보낸다.

<C:\wamp64\www\project\editor.pro.php>
```php
else if($mode == 'update'){

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
```
mode가 update일 경우 update문을 이용하여 category에 따른 DB테이블에 userid, title, question 값들을 수정해준다.

```php
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
```
값들이 정상적으로 삽입되면, category 값에 따라 목록을 보여주는 창으로 이동한다.

<hr>

<img src="https://user-images.githubusercontent.com/48309721/72705336-904c1c00-3b9e-11ea-8779-d97e43bcbdfa.JPG" width="500"></img>
<br>
게시글이 수정된 것을 볼 수 있다.


<hr>

# 2.4 카카오 다음지도 API  
카카오 개발자 페이지
<a href="https://developers.kakao.com/" target="_blank">https://developers.kakao.com/</a> 에 접속해 우측 상단 로그인을 눌러 로그인을 한다.

<img src="https://user-images.githubusercontent.com/48309721/72715777-71f11b00-3bb4-11ea-9b27-68778eadb665.JPG" width="600"></img>
<img src="https://user-images.githubusercontent.com/48309721/72715779-71f11b00-3bb4-11ea-9be4-fc6f7f810713.JPG" width="600"></img>
<br> '내 애플리케이션 -> 앱 만들기' 를 클릭한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/72715781-71f11b00-3bb4-11ea-808c-f1e798f9b614.JPG" width="600"></img>
<br>이름을 입력한 후 '앱 만들기' 버튼을 클릭한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/72715782-7289b180-3bb4-11ea-9d49-4692e008a688.JPG" width="400"></img>
<br>팝업창이 뜨면 '계속 진행' 버튼을 클릭한다.<br> 완료되면 아래와 같이 API키가 발급된다.<br>
<img src="https://user-images.githubusercontent.com/48309721/72715784-7289b180-3bb4-11ea-8546-8e096912217b.JPG" width="600"></img>
<br>키가 생성되먄 좌측 메뉴의 '설정->일반' 에 들어간다.<br>
<img src="https://user-images.githubusercontent.com/48309721/72716171-21c68880-3bb5-11ea-9145-68927abbb964.JPG" width="600"></img>
<br>일반 페이지가 나오면 '플랫폼 추가' 버튼을 클릭한다.<br>
<img src="https://user-images.githubusercontent.com/48309721/72715786-7289b180-3bb4-11ea-9c48-1a1dd28769a2.JPG" width="400"></img>
<br>팝업이 표출되면, 해당 지도가 표출되어야 하는 사이트의 주소를 입력하고 '추가' 버튼을 클릭한다.
플랫폼을 추가 하지 않으면 지도가 나타나지 않는다.<br>
<img src="https://user-images.githubusercontent.com/48309721/72715787-73224800-3bb4-11ea-84dd-b593aba5fa51.JPG" width="600"></img>

<C:\wamp64\www\project\4\map.php>
```javascript
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey='발급받은 JavaScript key'"></script>
```
위의 부분에 발급받은 key 중 JavaScript key를 넣어준다.
```javascript
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapCenter = new daum.maps.LatLng(37.049634, 127.201022), // 지도의 중심 좌표
    mapOption = {
        center: mapCenter, // 지도의 중심 좌표
        level: 3 // 지도의 확대 레벨
    };

// 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
var map = new daum.maps.Map(mapContainer, mapOption);

// 지도에 올릴 마커를 생성합니다.
var mMarker = new daum.maps.Marker({
    position: mapCenter, // 지도의 중심좌표에 올립니다.
    map: map // 생성하면서 지도에 올립니다.
});

// 지도에 올릴 장소명 인포윈도우 입니다.
var mLabel = new daum.maps.InfoWindow({
    position: daum.maps.LatLng(37.049784, 127.203195), // 지도의 중심좌표에 올립니다.
    content: '그린가구' // 인포윈도우 내부에 들어갈 컨텐츠 입니다.
});

var infowindow = new daum.maps.InfoWindow({
    map: map,
    position: new daum.maps.LatLng(37.049759,127.203223),
    content: '명당1리 (34097)'
});

var infowindow = new daum.maps.InfoWindow({
    map: map,
    position: new daum.maps.LatLng(37.049646,127.203493),
    content: '명당1리 (34098)'
});
mLabel.open(map, mMarker); // 지도에 올리면서, 두번째 인자로 들어간 마커 위에 올라가도록 설정합니다.

</script>
```
<img src="https://user-images.githubusercontent.com/48309721/72717352-3277fe00-3bb7-11ea-8d63-43fa53b3a034.JPG" width="700"></img>
