@include('front.rosta.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content" itemscope="" itemtype="http://schema.org/Service">
        <div class="bread-crumb">
            <span class="crumb-item"><a href="/soft">Программное обеспечение</a></span>
        </div>

        <div class="rosta">
            <div class="rosta__automatization r-automatization">
                <div class="r-automatization__container">
                    <h1 class="r-automatization__title">Автоматизация бизнеса</h1>
                    <p class="r-automatization__text">Rosta — программный комлекс для автоматизации бизнес-процессов: торговля, склад и логистика.</p>
                    <div class="r-automatization__img-wrap">
                        <img src="/img/rosta_illustration.png" alt="" class="r-automatization__img">
                    </div>
                    <p class="r-automatization__text">Продукт доступен в нескольких ценовых вариантах, что позволяет пользоваться им как маленьким кафе, так и большим торговым центрам.</p>
                    <div class="r-automatization__btn-wrap">
                        <a href="#rosta-plans" class="r-automatization__btn js_scroll_to"><span class="r-automatization__btn-text">Выбрать план</span></a>
                    </div>
                </div>
            </div>
            <div class="rosta__advantages r-advantages">
                <div class="r-advantages__container">
                    <ul class="r-advantages__list">
                        <li class="r-advantages__item">
                            <img src="/img/rosta_advantage_1.png" alt="" class="r-advantages__item-img">
                            <p class="r-advantages__item-title">Работает без интернета</p>
                            <p class="r-advantages__item-text">Программа не нуждается в постоянном подключении к интернету. Все ваши данные и операции хранятся локально.</p>
                        </li>
                        <li class="r-advantages__item">
                            <img src="/img/rosta_advantage_2.png" alt="" class="r-advantages__item-img">
                            <p class="r-advantages__item-title">Приватность данных</p>
                            <p class="r-advantages__item-text">Все данные хранятся в зашифрованном виде на множестве серверов и не могут быть собранны единоразово.</p>
                        </li>
                        <li class="r-advantages__item">
                            <img src="/img/rosta_advantage_3.png" alt="" class="r-advantages__item-img">
                            <p class="r-advantages__item-title">Быстрее аналогов</p>
                            <p class="r-advantages__item-text">Благодаря оптимизации системы, программный комплекс роста работает в&nbsp;несколько раз быстрее аналогов.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="rosta__products r-products">
                <div class="r-products__container">
                    <p class="r-products__title">Продукты роста</p>
                    <div class="r-products__item r-product">
                        <div class="r-product__text-block">
                            <img src="/img/rosta_tradepoint.png" alt="Rosta Tradepoint" class="r-product__text-img">
                            <p class="r-product__text"><b>Rosta Tradepoint</b> — предельно простая система для ведения продаж.  Интуитивно-понятный интерфейс
                                не требует специального обучения, а настройка программы для ваших нужд занимает не более получаса.
                            </p>
                            <p class="r-product__text">С помощью Tradepoint можно проводить инвентаризацию товаров и принимать поступления, распечатывать штрих-коды и этикетки.</p>
                        </div>
                        <div class="r-product__images">
                            <div class="r-product__slider js_rosta_slick">
                                <img src="/img/rosta_slide_2.jpg" alt="" class="r-product__slide">
                                <img src="/img/rosta_slide_2.jpg" alt="" class="r-product__slide">
                                <img src="/img/rosta_slide_1.jpg" alt="" class="r-product__slide">
                                <img src="/img/rosta_slide_2.jpg" alt="" class="r-product__slide">
                                <img src="/img/rosta_slide_1.jpg" alt="" class="r-product__slide">
                            </div>
                        </div>
                    </div>
                    <div class="r-products__item r-product">
                        <div class="r-product__images">
                            <div class="r-product__slider r-product__slider--brown js_rosta_slick">
                                <img src="/img/rosta_slide_1.jpg" alt="" class="r-product__slide">
                                <img src="/img/rosta_slide_2.jpg" alt="" class="r-product__slide">
                                <img src="/img/rosta_slide_1.jpg" alt="" class="r-product__slide">
                                <img src="/img/rosta_slide_1.jpg" alt="" class="r-product__slide">
                            </div>
                        </div>
                        <div class="r-product__text-block">
                            <img src="/img/rosta_backoffice.png" alt="Rosta Tradepoint" class="r-product__text-img">
                            <p class="r-product__text"><b>Rosta Back Office</b> — интуитивно-понятная программа для администрирования бизнеса. Программа помогает в оптимизации и ускорению работы управляющего персонала предприятий.</p>
                            <p class="r-product__text">Ежедневные процессы занимают минимальное кол-во времени, делая ваши бизнес-процессы по-настоящему реактивными.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rosta__prices r-prices">
                <p class="r-prices__title" id="rosta-plans">Цена роста</p>
                <div class="r-prices__container">
                    <div class="r-prices__bundle r-bundle">
                        <div class="r-bundle__name">Minimum</div>
                        <div class="r-bundle__price">10 000 <span class="r-bundle__tenge tenge">h</span></div>
                        <ul class="r-bundle__list">
                            <li class="r-bundle__list-item">ПО «Rosta Cloud»</li>
                            <li class="r-bundle__list-item">Бесплатный перенос данных</li>
                            <li class="r-bundle__list-item">Резервное копирование</li>
                        </ul>
                        <div class="r-bundle__btn-wrap">
                            <a href="#order" class="r-bundle__btn js_buy_rosta"><span class="r-bundle__btn-text">Купить</span></a>
                        </div>
                    </div>
                    <div class="r-prices__bundle r-bundle">
                        <div class="r-bundle__name">Business</div>
                        <div class="r-bundle__price r-bundle__price--green">329 999 <span class="r-bundle__tenge tenge">h</span></div>
                        <ul class="r-bundle__list">
                            <li class="r-bundle__list-item">ПО «Rosta Cloud»</li>
                            <li class="r-bundle__list-item">Моноблок IDSOFT ID5000</li>
                            <li class="r-bundle__list-item">Сканер IDSOFT DS2208</li>
                            <li class="r-bundle__list-item">Принтер чеков</li>
                            <li class="r-bundle__list-item">Принтер этикеток</li>
                            <li class="r-bundle__list-item">Денежный ящик</li>
                            <li class="r-bundle__list-item">Бесплатный перенос данных</li>
                            <li class="r-bundle__list-item">Резервное копирование</li>
                        </ul>
                        <div class="r-bundle__btn-wrap">
                            <a href="#order" class="r-bundle__btn r-bundle__btn--green js_buy_rosta"><span class="r-bundle__btn-text">Купить</span></a>
                        </div>
                    </div>
                    <div class="r-prices__bundle r-bundle">
                        <div class="r-bundle__name">Professional</div>
                        <div class="r-bundle__price r-bundle__price--blue">759 999 <span class="r-bundle__tenge tenge">h</span></div>
                        <ul class="r-bundle__list">
                            <li class="r-bundle__list-item">ПО «Rosta Cloud»</li>
                            <li class="r-bundle__list-item">Моноблок <a href="#" target="_blank" class="r-bundle__link">IDSOFT AIONE</a></li>
                            <li class="r-bundle__list-item">Сканер <a href="#" target="_blank" class="r-bundle__link">IDSOFT DS2208</a></li>
                            <li class="r-bundle__list-item">Сканер IDSOFT ID2909</li>
                            <li class="r-bundle__list-item">2 x Принтер чеков</li>
                            <li class="r-bundle__list-item">2 x Принтер этикеток</li>
                            <li class="r-bundle__list-item">ТСД Honeywell EDA50U</li>
                            <li class="r-bundle__list-item">Весы Штрих-М</li>
                            <li class="r-bundle__list-item">Денежный ящик</li>
                            <li class="r-bundle__list-item">Бесплатный перенос данных</li>
                            <li class="r-bundle__list-item">Резервное копирование</li>
                        </ul>
                        <div class="r-bundle__btn-wrap">
                            <a href="#order" class="r-bundle__btn r-bundle__btn--blue js_buy_rosta"><span class="r-bundle__btn-text">Купить</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('front.social_buttons')
        <div class="rating">
            <span class="head-reiting">Оцените нашу страницу</span>
            <div class="raiting-star" data-entity="news" data-id="1177">
                <ul class="star-rating-default" style="width:125px">
                    <li class="current-rating" style="width:{{$rating['percent']}}%;">{{$rating['middle']}}</li>
                    <li class="star">
                        <a class="star-link" data-raiting="1" title="1/5" style="width:20%;z-index:6"
                           rel="nofollow">1</a>
                    </li>
                    <li class="star">
                        <a class="star-link" data-raiting="2" title="2/5" style="width:40%;z-index:5"
                           rel="nofollow">2</a>
                    </li>
                    <li class="star">
                        <a class="star-link" data-raiting="3" title="3/5" style="width:60%;z-index:4"
                           rel="nofollow">3</a>
                    </li>
                    <li class="star">
                        <a class="star-link" data-raiting="4" title="4/5" style="width:80%;z-index:3"
                           rel="nofollow">4</a>
                    </li>
                    <li class="star">
                        <a class="star-link" data-raiting="5" title="5/5" style="width:100%;z-index:2"
                           rel="nofollow">5</a>
                    </li>
                </ul>
            </div>
            <span class="totalvotes" itemprop="aggregateRating" itemscope="itemscope"
                  itemtype="http://schema.org/AggregateRating">
                    <meta itemprop="ratingValue" content="{{$rating['middle']}}">Текущий рейтинг — {{$rating['middle']}}
                <meta itemprop="bestRating" content="5">
                    <meta itemprop="ratingCount" content="{{$rating['count']}}"> ({{$rating['count']}} человек)
                    </span>
        </div>
    </section>
@endsection
