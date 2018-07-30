@include('front.accounting.tarifs.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content automatic tarif " itemscope="" itemtype="http://schema.org/Service">
        <h1 class="block-title">{{$tarif->page_name_field}}</h1>
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/images/{{$tarif->background_image->primary_link}}" alt="{{$tarif->background_image->alt}}">
            </div>
        </div>
        <div class="main-content-block">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $tarif->content_field !!}
                </div>
            </div>
            <div class="col-1-2">
                @foreach($all_tarif as $item_t)
                    <div class="right-menu-block">
                        <p class="menu-title">{{$item_t->tarif_name_field}}</p>
                        <ul class="right-menu">
                            @foreach($item_t->tarif_group as $item)
                                <li class="menu-item">
                                    <div class="orange-wrap"><a href="/accounting/{{$item->slug_field}}"
                                                                class="link">{{$item->page_name_field}}</a></div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
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
        <div class="free-project white-popup" id="calculation">
            <h2 class="sub-title">Бесплатный расчет проекта</h2>
            <p class="sub-title-text">Оставьте заявку и менеджер свяжется с вами по указанному номеру и рассчитает
                заказ.</p>
            <div class="calculate">
                <input type="text" class="input phone popup-input" data-mask="+7(000)000-00-00"
                       placeholder="Номер телефона" data-field-name="phone" data-field-type="string">
                <button class="calculated-button send-form">Рассчитать</button>
            </div>
        </div>

    </section>
@endsection