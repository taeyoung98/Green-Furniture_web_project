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
</head>
<body>

<div class="frame" id="header">
    <?php include '../header.inc.php'; ?>
    <?php include '../nav.inc.php'; ?>
    <?php include 'ideology_section.inc.php'; ?>
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
        $('#basicNav #navCompany').addClass('clicked');
        $('#sideNav #dropCompany').show();
        $('#sideNav #dropCompany > a:first-child').css({
            'font-weight': 'bold',
            color: 'salmon'
        });
    });
    $('#sideNav #navCompany').hover(function() {
        $('#sideNav #dropCompany').show();        
    }, function() {
        $('#sideNav #dropCompany').show();
    });
</script>
</body>
</html>