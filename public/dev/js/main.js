/**
 * Created by Косаностра on 26.08.2016.
 */
$(document).ready(function () {


    //=============================================================
    //===== Главная страница. Слайдер
    //=============================================================
    $('.slider-list').bxSlider({
        nextText: '<div class="right-slide"></div>',
        prevText: '<div class="left-slide"></div>',
        auto: true,
        speed: 1500,
        pause: 5000,
        responsive: true
    });
    //=============================================================
    //=========  Плагин "Увеличительно стекло". Страница товара
    //=============================================================

    $('.zoom').elevateZoom({
        gallery: 'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: 'active',
        imageCrossfade: true,
        borderColour: '#cccccc',
        borderSize: 1
    });
    //=============================================================
    //======  Главное меню на мобильных
    //=============================================================

    $('.mobile-button').on('click', function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('.wrap.popup').fadeOut();
        } else {
            $(this).addClass('active');
            $('.wrap.popup').fadeIn();
        }
    });

    //=============================================================
    //======  Слайдер Rosta
    //=============================================================

    $('.js_rosta_slick').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 700
    });

    //=============================================================
    //======  Скролл к элементу
    //=============================================================

    $('.js_scroll_to').on('click', function (e) {
        e.preventDefault();
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top-50
        }, 1000);
    });

    //===============================================================
    //======= Обработчики для подсветки текущего пунтка меню ========
    //===============================================================
    var items = document.location.pathname;
    var category = items.split('/')[1];
    var category2 = items.split('/')[2];

    // Подсветка текущего пункта меню для общего меню ( шапка и футер )
    $('.all-site-menu').each(function () {
        if ($(this).attr('href') == '/' + category) {
            console.log($(this).attr('href') + '  ' + category);
            $(this).closest('li').addClass('active');
        } else if ($(this).attr('href') == '/inf/' + category2) {
            $(this).closest('li').addClass('active');
        } else if ($(this).attr('href').split('/')[1] == category &&
            $(this).attr('href').split('/')[1] == 'automatic') {
            $(this).closest('li').addClass('active');
        }
    });
    //==================================================================
    // Подсветка меню в правой колонке. Готовые решения. Инф Страницы
    $('.menu-item .link').each(function () {
        if ($(this).attr('href') == items) {
            $(this).closest('.menu-item').addClass('active');
        }
    });
    //==================================================================
    // Подсветка меню во всплывающих меню ( шапка, автоматизации IIKO )
    $('.item-popup a').each(function () {
        if ($(this).attr('href').split('/')[1] + $(this).attr('href').split('/')[2] == category + category2) {
            $(this).closest('.item-popup').addClass('active');
        }
    });
    //==================================================================
    // Подсветка фильтров на странице "Наши клиенты"
    $('.type-menu .client-filter').each(function () {
        $href = $(this).attr('href').split('/');
        if ($href[3] == items.split('/')[3]) {
            $(this).closest('li').addClass('active');
            $(this).attr('href', '/' + $href[1] + '/' + $href[2] + '/all')
        }
    });
    $('.city-menu .client-filter').each(function () {
        $href = $(this).attr('href').split('/');
        if ($href[2] == items.split('/')[2]) {
            $(this).closest('li').addClass('active');
        } else if (items.split('/')[2] == 'all' || items.split('/')[2] == undefined) {
            $('a.no_bold').closest('li').addClass('active');
        }
    });
    //==================================================================


    //==================================================================
    //==== Всплывающие формы
    //==================================================================
    //==== Форма "Написать нам"
    $('.ask-me').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });


    //==== Форма "Заказать"
    $('#buy').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
                $('.popup-input[data-field-name=phone]').mask('+7(000)000-00-00');
            },

        },
        midClick: true
    }).on('click', function () {
        $('.popup-input[data-field-name="product"]').val($('.block-title').text()); // Добавление имени товара в заявку
    });


    //==== Форма "Заказать" Rosta
    $('.js_buy_rosta').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
                $('.popup-input[data-field-name=phone]').mask('+7(000)000-00-00');
            },

        },
        midClick: true
    }).on('click', function () {
        $('.popup-input[data-field-name="product"]').val($(this).closest('.r-bundle').find('.r-bundle__name').text()); // Добавление имени товара в заявку
    });


    //=====Форма "Стать партнером"
    $('#partner').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });


    //=====Форма "Написать в поддержку"
    $('#support').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });


    //=====Форма "Написать в бухгалтерию"
    $('#account').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });


    //==== Форма "Рекомендательное письмо"
    $('.recommend-letter a').magnificPopup({
        type: 'image'
    });
    //==================================================================
    //==== Свернуть\развернуть "Характеристики"  В карточке товара
    //==================================================================
    $('.open-close-button a').on('click', function (e) {
        if ($(this).hasClass('open')) {
            $(this).text('Свернуть').addClass('close').removeClass('open');
        } else {
            $(this).text('Развернуть').addClass('open').removeClass('close');
        }
        $('.parameters-block').slideToggle();
        e.preventDefault();
    });

    //==== Удалить "Листалку" слайдера если всего 1 набор елементов
    if ($('.bx-pager-link').length <= 1) {
        $('.bx-pager-item').css('display', 'none');
    }

    $(window).on('load resize', function () {
        if (category == 'automatic') {
            if ($(window).width() > 900) {
                var topImg = $('.main-content-block .text-block img').offset().top;
                var topFeat = $('.main-content-block  .capability').offset().top;
                var difference = topImg - topFeat;
                if (difference > 0) {
                    $('.main-content-block  .capability').css('margin-top', difference + 'px');
                }
            }
        }
        if (category == 'clients') {
            if ($(window).width() <= '768') {
                $('.client-logo').appendTo($('.client>.block-title'));
            } else if ($(window).width() >= '768') {
                $('.client-logo').prependTo($('.main-content-grid>.col-1-2:last-child'));
            }
        }
    });


    //==================================================================
    //==== Отслеживание событий для менеджера
    //==================================================================

    $('.js_location').on('click', function () {
        dataLayer.push({'event': 'gtm_click_Find_Us'});
    });

    $('.js_ask_me').on('click', function () {
        dataLayer.push({'event': 'gtm_click_Send_Letter'});
    });

    $('.js_buy_popup').on('click', function () {
        dataLayer.push({'event': 'gtm_click_Order'});
    });
});