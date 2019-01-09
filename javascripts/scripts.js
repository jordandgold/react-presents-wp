$( document ).ready(function(){
    $('.upcoming-events').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false
                }
            }
        ]
    });
    $('.news_item').hover(function(){
        $('.news_share',this).fadeIn();
    },function(){
        $('.news_share',this).fadeOut();
    });
    $('.event').hover(function(){
        $('.caption',this).animate({bottom: 0}, 200);
    },function(){
        $('.caption',this).animate({bottom: -38}, 200);
    });
    var container = document.querySelector('#news_grid');
    var msnry = new Masonry( container, {
        itemSelector: '.news_item',
        columnWidth : '.news_item'
    });
    var slider4 = new skewSlider('#slider4', {
        height: 300,
        imgAlign: 'xMidYMid slice',
        slidePercent: 85,
        visibleSiblings: 1,
        navigationArrows: true,
        siblingsNavigation: true,
        slideMargin: 0,
        animationTime: 800,
        navigationDots: false,
        slideShow: 4000,
        maxWidth: 1300,
        breakpoints: {
            sizeone: {
                maxWidth: 1200,
                height: 270
            },
            sizetwo: {
                maxWidth: 1150,
                height: 260
            },
            sizethree: {
                maxWidth: 1100,
                height: 250
            },
            sizefour: {
                maxWidth: 1050,
                height: 240
            },
            sizefive: {
                maxWidth: 1000,
                height: 230
            },
            sizesix: {
                maxWidth: 950,
                height: 220
            },
            sizeseven: {
                maxWidth: 900,
                height: 210
            },
            sizeeight: {
                maxWidth: 850,
                height: 220,
                visibleSiblings: 0,
                slidePercent: 100
            },
            sizenine: {
                maxWidth: 800,
                height: 210,
                visibleSiblings: 0,
                slidePercent: 100
            },
            sizeten: {
                maxWidth: 750,
                height: 200,
                visibleSiblings: 0,
                slidePercent: 100
            },
            sizeeleven: {
                maxWidth: 700,
                height: 0,
                visibleSiblings: 0,
                slidePercent: 100
            }
        }

    });
});
if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
    skrollr.init({
        forceHeight: false
    });
}
$('#nav-wrapper').height($("#nav").height());
$('#nav').affix({
    offset: $('#nav').position()
});
Shadowbox.init();