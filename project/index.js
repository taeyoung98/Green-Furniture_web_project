$('#navCompany').hover(function() {
    $(this).text('company');
    $('#dropCompany').show('100');
    $('#dropCompany').hover(function() {
        $('#navCompany').text('company');
        $(this).show();
    }, function() {
        $(this).hide('100');
        $('#navCompany').text('회사소개');
    });
}, function() {
    $('#dropCompany').hide();
    $(this).text('회사소개');

});
$('#navInvest').hover(function() {
    $(this).text('investment');
    $('#dropInvest').show('100');
    $('#dropInvest').hover(function() {
        $('#navInvest').text('investment');
        $(this).show();
    }, function() {
        $(this).hide('100');
        $('#navInvest').text('투자정보');
    });
}, function() {
    $('#dropInvest').hide();
    $(this).text('투자정보');
});
$('#navOrder').hover(function() {
    $(this).text('order made');
    $('#dropOrder').show('100');
    $('#dropOrder').hover(function() {
        $('#navOrder').text('order made');
        $(this).show();
    }, function() {
        $(this).hide('100');
        $('#navOrder').text('가구주문');
    });
}, function() {
    $('#dropOrder').hide();
    $(this).text('가구주문');
});
$('#navCommunity').hover(function() {
    $(this).text('community');
    $('#dropCommunity').show('100');
    $('#dropCommunity').hover(function() {
        $('#navCommunity').text('community');
        $(this).show();
    }, function() {
        $(this).hide('100');
        $('#navCommunity').text('커뮤니티');
    });
}, function() {
    $('#dropCommunity').hide();
    $(this).text('커뮤니티');
});

$('nav#basicNav > ul a.nav-link').click(function() {
    $(this).parent().siblings().find('a.nav-link').removeClass('clicked');
    $(this).addClass('clicked');
});
$('nav#basicNav > ul a.dropdown-item').click(function() {
    $(this).parent().parent().siblings().find('a.nav-link').removeClass('clicked');
    $(this).parent().parent().find('a.nav-link').addClass('clicked');
});