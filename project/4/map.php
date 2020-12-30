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
#map{
    width : 80%;
    height : 400px;
    margin : 0 auto;
}
#shop_info{
    text-align: center;
    margin-top: 2em;
    margin-bottom: 2em;
}
#busStop{
    margin-left: 120px;
    margin-top: 30px;  
}
span{
    margin-left: 100px;
}
   
</style>
</head>
<body>

<div class="frame" id="header">
    <?php include '../header.inc.php'; ?>
    <?php include '../nav.inc.php'; ?>
    <?php include 'map.inc.php'; ?>
    <div style="padding-top: 1000px;"</div>
    <?php include '../footer.inc.php'; ?>
</div>

<a href="#logo"><div class="floating"></div></a>

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/bootstrap-4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=cec0b7ac7a97afee6916efc4da2c4bd0"></script>
<script src="../index.js"></script>
<script src="../index2.js"></script>
<script>
    $(document).ready(function() {
        $('#basicNav #navCommunity').addClass('clicked');
        $('#sideNav #dropCommunity').show();
        $('#sideNav #dropCommunity > a:nth-child(4)').css({
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
</body>
</html>