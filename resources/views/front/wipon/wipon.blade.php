@extends('front.layout')
@include('front.wipon.meta')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content automatic " itemscope="" itemtype="http://schema.org/Service">
        <h1 class="page-title">{{$wipon->page_name_field}}</h1>
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/images/{{$wipon->background_image->primary_link}}" alt="{{$wipon->background_image->alt}}">
            </div>
        </div>
        <div class="main-content-block">
            <div class="col-1-2">
                <div class="text-block no-img-shadow">
                    {!! $wipon->content_field !!}
                </div>
            </div>
            <div class="col-1-2">
                @if($wipon->vozm_field != '')
                    <div class="capability">
                        {!! $wipon->vozm_field !!}
                    </div>
                @endif
            </div>
        </div>
        <div class="second-content">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $wipon->system_features_field !!}
                </div>
            </div>
            <div class="col-1-2">
                <div class="advantages-block">
                    @foreach($wipon->wipon_adv_group as $item)
                        <div class="block-item">
                            <div class="img-wrap">
                                <img src="/images/{{$item->card_image->primary_link}}" alt="{{$item->card_image->alt}}">
                            </div>
                            <div class="text-wrap">{{$item->card_text_field}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="block-separator">
            <div class="separator dotted"></div>
        </div>
        <div class="equipment-block">
            <div class="block-title">
                <h2 class="sub-title">Комплектация</h2>
                <div class="products-list">
                    @foreach($prod as $item_prod)
                        @foreach($wipon->wipon_related_group as $rel)

                            @if($item_prod->id_field == $rel->product_field)
                                <div class="product-item">
                                    <a href="{{$item_prod->title_field}}">
                                        <div class="img-wrap">
                                            <img src="/images/{{$item_prod->product_base_photo_image->catalog_crop->link}}"
                                                 alt="{{$item_prod->product_base_photo_image->alt}}">
                                        </div>
                                        <div class="text-wrap">
                                            <p>{{$rel->about_item_field}}</p>
                                            <p class="wrap">
                                                <span>{{$item_prod->product_name_field}}</span>
                                            </p>
                                            @if($item_prod->product_cost_field != '0' && $item_prod->product_cost_field != '')
                                            <p class="cost">{{ number_format($item_prod->product_cost_field,0,'',' ') }}
                                                тг @if($item_prod->product_sale_field != 0)<span class="sale">{{ number_format($item_prod->product_sale_field,0,'',' ') }}
                                                    тг</span>@endif</p>
                                             @endif
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
        <div class="warranty">
            {!! $wipon->warranty_field !!}
        </div>
        @if($wipon->auto_cost_field != '0' && $wipon->auto_cost_field != '')
            <div class="cost-block">
                <h2 class="cost">
                    @if($wipon->auto_sale_field > 0)
                        <span class="sale">{{ number_format($wipon->auto_sale_field,0,'',' ') }} тг</span>
                    @endif
                    от {{ number_format($wipon->auto_cost_field,0,'',' ') }} тенге
                </h2>
            </div>
        @endif
        <div class="credit">
            {!! $wipon->pre_cost_text_field !!}
        </div>
        <div class="button-wrap">
            <div class="button buy-it js_buy_popup" id="buy" href="#order">Оформить заказ</div>
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
