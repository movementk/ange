$(function($){
    // jumbo slider
    $(document).ready(function(){
        $('.jumbo > .jumbo-slider').bxSlider({
            controls: false
        });
    });
    // 로그인 스크롤 관련
    $(window).load(function(){
       $("#content-scroll").mCustomScrollbar();
    });
}(jQuery));