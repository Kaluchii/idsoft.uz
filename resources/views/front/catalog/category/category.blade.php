@include('front.catalog.category.meta')
@extends('front.layout')
@section('content')
    <?php $shadow = true; ?>
    {{----}}
    <section class="content category " itemscope="" itemtype="http://schema.org/Service">
        <h1 class="block-title">{{$products->category_name_field}}</h1>
        <div class="product-list">

            @foreach($sort_list as $item)
                @if($item->show_field == 1)
                <div class="product-item">
                    @if($products->id_field == 55)
                        <a href="{{$products->slug_field}}/{{$item->slug_field}}">
                            @else
                                <a href="{{$products->slug_field}}/{{$item->slug_field}}">
                                    @endif
                                    <div class="img-wrap">
                                        <img src="/images/{{$item->product_base_photo_image->catalog_crop->link}}"
                                             alt="{{$item->product_base_photo_image->alt}}">
                                    </div>
                                    <div class="text-wrap">
                                        <p class="wrap"><span>{{$item->product_name_field}}</span></p>
                                        <p class="about-product">{{$item->small_description_field}}</p>
                                        @if($item->product_cost_field != '0' && $item->product_cost_field != '')
                                            <p class="cost">{{ number_format($item->product_cost_field,0,'',' ') }}
                                                сум @if($item->product_sale_field != 0)<span class="sale">{{ number_format($item->product_sale_field,0,'',' ') }}
                                                    сум</span>@endif</p>
                                        @endif
                                    </div>
                                </a>
                </div>
                @endif
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
