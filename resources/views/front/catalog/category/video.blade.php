@include('front.catalog.category.meta_video')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content catalog video " itemscope="" itemtype="http://schema.org/Service">
        <h1 class="block-title">{{$seo->category_name_field}}</h1>
        <div class="advantages advantages-top">
            @if($seo->category_name_field == 'Стеллажи и витрины')
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/img/s3.PNG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Отправьте заявку</p>
                        <div class="advantages-text">
                            Замерщик приедет на объект, проконсультирует и проведет замер
                        </div>
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/img/s2.PNG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Утверждение проекта</p>
                        <div class="advantages-text">
                            Дизайнер предоставит на рассмотрение эскизы и чертежи.
                        </div>
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/img/s1.PNG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Монтаж</p>
                        <div class="advantages-text">
                            Когда будет готова, мы установим ее в подготовенном помещении.
                        </div>
                    </div>
                </div>
            @else
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/img/v1.PNG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Отправьте заявку</p>
                        <div class="advantages-text">
                            Специалист приедет на объект, проконсультирует и предложит решение.
                        </div>
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/img/v2.PNG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Коммерческое предложение</p>
                        <div class="advantages-text">
                            Мы подготовим смету, рекомендации и сроки реализации проекта.
                        </div>
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src=/img/v3.PNG alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Монтаж</p>
                        <div class="advantages-text">
                            Установка, подключение и настройка конфигурации занимает от 3 до 4 дней.
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="category-block video">
            @foreach($category_1 as $item)
                <div class="category-item">
                    @if($seo->category_name_field == 'Стеллажи и витрины')
                        <a href="/showcase/{{$item->slug_field}}">
                            @else
                                <a href="/video/{{$item->slug_field}}">
                                    @endif

                                    <div class="image-wrap">
                                        <img src="/images/{{$item->card_background_image->secondary_link}}"
                                             alt="{{$item->card_background_image->alt}}" class="static">
                                        <img src="/images/{{$item->card_hover_image->secondary_link}}"
                                             alt="{{$item->card_hover_image->alt}}" class="hover">
                                    </div>
                                    <p class="wrap"><span>{{$item->category_name_field}}</span></p>
                                </a>
                </div>
            @endforeach
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