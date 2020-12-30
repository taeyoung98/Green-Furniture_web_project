$('#sideNav li > a.nav-link').hover(function() {
    $(this).parent().find('div').show('fast');
    $(this).parent().find('div').hover(function() {
        $(this).show();
    }, function() {
        $(this).hide();
    });
}, function() {
    $(this).parent().find('div').hide();
});

$('#sideNav li > a.nav-link').click(function() {
    $(this).parent().siblings().find('a.nav-link').removeClass('weight1');
    $(this).addClass('weight1');

    $(this).parent().find('div > a').removeClass('weight2');
    $(this).parent().find('div > a:eq(0)').addClass('weight2');
});
$('#sideNav > ul a.dropdown-item').click(function() {
    $(this).parent().parent().siblings().find('a.nav-link').removeClass('weight1');
    $(this).parent().parent().find('a.nav-link').addClass('weight1');

    $(this).parent().parent().siblings().find('div > a').removeClass('weight2');
    $(this).addClass('weight2');
});