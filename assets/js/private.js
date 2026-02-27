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

// document.addEventListener('DOMContentLoaded', function () {
//     const grid = document.querySelector('.obstacles-grid');
//     if (!grid) return;
//     const items = Array.from(grid.querySelectorAll('.item.item-obstacle'));
//     if (items.length < 3) return;

//     let expandedIndex = 0;
//     items.forEach((el, i) => {
//         el.classList.toggle('is-expanded', i === expandedIndex);
//         el.classList.toggle('is-collapsed', i !== expandedIndex);
//     });

//     items.forEach((el, i) => {
//         el.addEventListener('mouseenter', () => {
//             if (i === expandedIndex) return;
//             if (i !== 1 && i !== 2) return;
//             const prev = items[expandedIndex];
//             prev.classList.remove('is-expanded');
//             prev.classList.add('is-collapsed');
//             el.classList.remove('is-collapsed');
//             el.classList.add('is-expanded');
//             expandedIndex = i;
//         });
//     });
// });
