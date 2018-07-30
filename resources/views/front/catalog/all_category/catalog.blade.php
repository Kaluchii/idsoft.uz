@include('front.catalog.all_category.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content catalog " itemscope="" itemtype="http://schema.org/Service">
        <h1 class="block-title">Оборудование для автоматизации</h1>

        <div class="advantages advantages-top">
            <?php $i = 0 ?>
            @foreach($static->adventages_group as $adv_item)
                <?php $i++ ?>
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/img/c{{$i}}.PNG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">{{$adv_item->adv_title_field}}</p>
                        <div class="advantages-text">
                            {!!$adv_item->adv_text_field!!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="category-block">
            @foreach($category_1 as $item)
                <div class="category-item">
                    <a href="/catalog/{{$item->slug_field}}">
                        <div class="image-wrap">
                            <img src="/images/{{$item->card_background_image->primary_link}}"
                                 alt="{{$item->card_background_image->alt}}" class="static">
                            <img src="/images/{{$item->card_hover_image->primary_link}}"
                                 alt="{{$item->card_hover_image->alt}}" class="hover">
                        </div>
                        <p class="wrap"><span>{{$item->category_name_field}}</span></p>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="price-list">
            <h2 class="sub-title">Прайс-лист на почту</h2>
            <div class="row">
                <input type="text" class="input mail" placeholder="Эл. почта">
                <button class="button give-price">Получить</button>
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