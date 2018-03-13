$(function($){
    // jumbo slider
    $(document).ready(function(){
        $('.jumbo > .jumbo-slider').bxSlider({
            controls: true,
            prevText: '<img src="/assets/images/main/left_btn.png" alt="">',
            nextText: '<img src="/assets/images/main/right_btn.png" alt="">'
        });
    });
    // 로그인 스크롤 관련
    $(window).load(function(){
       $("#content-scroll").mCustomScrollbar();
    });
}(jQuery));