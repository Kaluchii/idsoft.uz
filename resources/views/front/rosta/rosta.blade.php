@include('front.rosta.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content" itemscope="" itemtype="http://schema.org/Service">
        <div class="bread-crumb">
            <span class="crumb-item"><a href="/{{$grand->slug_field}}">{{$grand->category_name_field}}</a></span>
            <span class="crumb-separate">→</span>
            <span class="crumb-item"><a href="/{{$grand->slug_field}}/{{$parent->slug_field}}">{{$parent->category_name_field}}</a></span>
        </div>

        <div class="rosta">
            <div class="rosta__automatization">
                <h1 class="rosta__auto-title">Автоматизация бизнеса</h1>
                <p class="rosta__auto-text">Rosta — программный комлекс для автоматизации бизнес-процессов: торговля, склад и логистика.</p>
                <div class="rosta__auto-img-wrap">
                    <img src="#" alt="" class="rosta__auto-img">
                </div>
                <p class="rosta__auto-text">Продукт доступен в нескольких ценовых вариантах, что позволяет пользоваться им как маленьким кафе, так и большим торговым центрам.</p>
                <div class="rosta__btn-wrap">
                    <a href="#" class="rosta__btn">Выбрать план</a>
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
