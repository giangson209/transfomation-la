$(document).ready(function() {

    // $('.btn-menu-mobile a').click(function(){
    //     $('.mm-mobile, .bg-modal-main, body').addClass('active');
    // })

    //
    // $('.back-top').click(function(){
    //     $('html, body').animate({
    //         scrollTop: 0
    //     }, 1000, 'swing');
    // });

    var swiperFeedback = new Swiper('.swiper-feedback', {
        spaceBetween: 30,
        slidesPerView: 3,
        loop: true,
        pagination: {
            el: '.pagination-feedback',
        },
        // breakpoints: {
        //     768: {
        //         spaceBetween: 24,
        //         loop: false,
        //     },
        //     1024: {
        //         spaceBetween: 48,
        //         loop: false,
        //     },
        //     1600: {
        //         spaceBetween: 48,
        //         loop: false,
        //     },
        // },
    });

    if($('.block-faq').length > 0){
        $('.block-faq .answer').hide();
        $('.block-faq .item-faq:first-child').addClass('active').find('.answer').show();
        $('.block-faq .head-faq').click(function(){
            $(this).parent().toggleClass('active');
            $(this).parent().find('.answer').slideToggle();
            $(this).parent().siblings().removeClass('active').find('.answer').slideUp();
        });
    }
});
