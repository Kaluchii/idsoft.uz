@include('front.information.meta')
@include('front.popups.partners')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content inf " itemscope="" itemtype="http://schema.org/Service">
        <h1 class="block-title">{{$inf->page_name_field}}</h1>
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/images/{{$inf->background_image->primary_link}}" alt="{{$inf->background_image->alt}}">
            </div>
        </div>
        <div class="main-content-block">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $inf->content_field !!}
                </div>
            </div>
            <div class="col-1-2">
                <div class="right-menu-block">
                    <ul class="right-menu">
                        <li class="menu-item">
                            <div class="orange-wrap">
                                <a href="/inf/about" class="link">{{$page_name}}</a>
                            </div>
                        </li>
                        @foreach($all as $item)
                            <li class="menu-item">
                                <div class="orange-wrap">
                                    <a href="/inf/{{$item->slug_field}}" class="link">{{$item->page_name_field}}</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
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
        <div class="free-project white-popup">
            <h2 class="sub-title">Стать партнером</h2>
            <div class="calculate partner">
                <button class="button" href="#partners" id="partner">Отправить заявку</button>
            </div>
        </div>
    </section>
@endsection