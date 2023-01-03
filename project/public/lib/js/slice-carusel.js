
jQuery( () => {

    /* SECTION PUBLICIDAD */
    $('#slick_publicidad').slick({
        slidesToShow: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        arrows: false,
    });
    



})

const start_slick_featured_product = () => {
    /* SECTION VENTAS */
    $('#products_featured').slick({
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 5,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerPadding: '100px',
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    centerPadding: '30px',
                    arrows: true,
                    centerMode: true,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerPadding: '0px',
                    arrows: true,
                    centerMode: true,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    centerPadding: '20px',
                    centerMode: true,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 1,
                }
            }
        ]
    });
}

const start_slick_products_on_sale = () => {
    /* SECTION OFERTAS */
    $('#products_on_sale').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerPadding: '100px',
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    centerPadding: '30px',
                    arrows: true,
                    centerMode: true,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    centerPadding: '40px',
                    centerMode: true,
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 1
                }
            },
        ]
    });
}