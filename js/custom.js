/*
** Open Main Menu
 */
$(function(){
    $('.header_boorger').on('click', function(){
        $('.header_menu').addClass('header_menu__open');
        $('.header_menu_close').addClass('header_menu_close__visible');
    });
    $('.header_menu_close').on('click', function(){
        $(this).removeClass('header_menu_close__visible');
        $('.header_menu').removeClass('header_menu__open');
    });
});

$(function(){
    var header = $(".header");
    var scrollClass = 'header_scroll';
    var noScrollClass = '';
    if( header.hasClass('header__light') ) {
        var noScrollClass = 'header__light';
    }
    // $(window).on('scroll', function(){
    $(window).scroll(function(){
        // if ($('html, body').scrollTop() >= 65) {
        if ($(window).scrollTop() >= 65) {
            header.addClass(scrollClass).removeClass(noScrollClass);
        } else {
            header.removeClass(scrollClass).addClass(noScrollClass);
        }
    });
});

/*
** Page FAQ opening menu items
 */
$(function (){
    if(!$('.faq_menu-item').length) return;

    var $menu = $('.faq_menu-item');
    var $title = $('#faqTitle');
    var $text = $('#faqText');
    $menu.on('click', function(){
        var $this = $(this);
        var $id = $this.data('id');
        $menu.removeClass('faq_menu-item__selected');
        $this.addClass('faq_menu-item__selected');
        if( window.screen.width >= 992 ) {
            $title.hide().html( faqs[$id].title ).fadeIn();
            $text.hide().html( faqs[$id].text ).fadeIn();
        }
    });
    // Click on the first item
    $menu.eq(0).trigger('click');
});

/*
**  Privacy Policy Page Opened Tabs
 */
$(function(){
    if( !$('.tcs-and-privacy-policy_tab').length ) return;
    var tabs = $('.tcs-and-privacy-policy_tab');
    var rows = $('.tcs-and-privacy-policy_row');
    tabs.on('click', function(){
        rows.hide();
        tabs.removeClass('tcs-and-privacy-policy_tab__selected');
        var $this = $(this);
        $this.addClass('tcs-and-privacy-policy_tab__selected')
        var tabName = $this.data('tab');
        $('[ data-tab = ' + tabName + ']').fadeIn().css('display', 'flex');
    });
    tabs.eq(0).trigger('click');
});
// При клике на ссылку в 3 вкладке id прописан в админке в визивиге
$('#toTcsAndPrivacyPolicyTab').on('click', function(e){
    e.preventDefault();
    $('.tcs-and-privacy-policy_tab').eq(0).trigger('click');
});
/*
**  Privacy Policy Page Opened Menu Privacy Policy
 */
$(function(){
    if( !$('.tcs-and-privacy-policy_menu-item').length ) return;

    var menu = $('.tcs-and-privacy-policy_menu-item');
    menu.on('click', function(){
        var $this = $(this);
        menu.each(function(i, el){
            if( $(el).hasClass('tcs-and-privacy-policy_menu-item__selected') ) {
                menu.removeClass('tcs-and-privacy-policy_menu-item__selected');
                var scrollTo = '';
                if( window.screen.width >= 768 ) {
                    scrollTo = ".tcs-and-privacy-policy";
                } else {
                    scrollTo = $this;
                }
                $('html, body').animate({
                    scrollTop: $(scrollTo).offset().top
                }, 500);
            }
        });
        var $this = $(this);
        var part = $this.data('part');
        var item = $this.data('item');
        $this.addClass('tcs-and-privacy-policy_menu-item__selected');
        $('#privacyPolicyTitle').hide().html( privacyPolicy[part]['items'][item].title).fadeIn();
        $('#privacyPolicyContent').hide().html(privacyPolicy[part]['items'][item].content).fadeIn();
    });
    menu.eq(0).trigger('click');
});

/*
** Agree Used Cookie
 */
$(function(){
    var options = {};
    $('#agreeUsedCookie').on('click', function(){
        $(this).parents('.use-cookie').removeClass('use-cookie__visible');
        options.path = '/';
        $.cookie( 'used_cookie', 'agree', options );
    });
    setTimeout(function(){
        $('.use-cookie').addClass('use-cookie__visible');
    }, 500);
});

/*
** Changes h2 on h1 in current block
 */
$(function(){
    $('#workingWithYouFirstSlide')
        .find('h2')
        .eq(0)
        .replaceWith('<h1>' + $('#workingWithYouFirstSlide').find('h2').eq(0).html() +'</h1>');
});

/*
**  Google map init
 */
function initMap() {
    if ($('#map').length === 0) {
        return;
    }
    if(!window.coordinates) {
        console.warn('Не определена Java Script переменная "coordinates" с координатами карты!');
        return;
    }
    var uluru = {
        lat: +window.coordinates.lat,
        lng: +window.coordinates.lng,
    }
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: uluru,
        mapTypeId: 'roadmap'
    });
    var marker = new google.maps.Marker({position: uluru, map: map})
    // Closed Window Map
    $('.map-popup_close').on('click', function(){
        $('.map-popup').fadeOut();
    });
    // Opened Window Map
    $('.map-open').on('click', function(e){
        e.preventDefault();
        $('.map-popup').fadeIn().css('display', 'flex');
    });
}
/* Validation Register Form */
$(function(){
    var inputs = $('#wpcf7-f580-p579-o1').find('.wpcf7-form-control');
    inputs.on('blur', function(){
        if( $(this).val().length ) {
            $(this).siblings('.wpcf7-not-valid-tip').remove();
        }
    });
});