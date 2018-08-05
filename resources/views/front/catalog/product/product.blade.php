@include('front.catalog.product.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content product " itemscope="" itemtype="http://schema.org/Service">
        <div class="bread-crumb">
            <span class="crumb-item"><a href="/{{$grand->slug_field}}">{{$grand->category_name_field}}</a></span>
                <span class="crumb-separate">→</span>
                <span class="crumb-item"><a href="/{{$grand->slug_field}}/{{$parent->slug_field}}">{{$parent->category_name_field}}</a></span>
        </div>
        <h1 class="block-title">{{$product->product_name_field}}</h1>

        <div class="product-grid">
            <div class="col-1-2">
                <div class="preview-block">
                    <div class="big-picture">
                        <img src="/images/{{$product->product_base_photo_image->title_crop->link}}"
                             class="zoom"
                             data-zoom-image="/images/{{$product->product_base_photo_image->zoom_crop->link}}" alt="{{$product->product_base_photo_image->alt}}">
                    </div>

                    <div class="pictures-row" id="gallery_01">
                        @if($product->product_image_group->count() > 0)
                        <a href="#" data-image="/images/{{$product->product_base_photo_image->title_crop->link}}"
                           data-zoom-image="/images/{{$product->product_base_photo_image->zoom_crop->link}}">
                            <img id="img_01" src="/images/{{$product->product_base_photo_image->preview_crop->link}}" alt="{{$product->product_base_photo_image->alt}}"/>
                        </a>
                        @foreach($product->product_image_group as $item)
                            <a href="#" data-image="/images/{{$item->product_image->title_crop->link}}"
                               data-zoom-image="/images/{{$item->product_image->zoom_crop->link}}">
                                <img id="img_01" src="/images/{{$item->product_image->preview_crop->link}}" alt="{{$item->product_image->alt}}"/>
                            </a>
                        @endforeach
                        @endif

                    </div>
                </div>
                @if( $product->soft_related_group->count() > 0  || $product->product_auto_group->count() > 0)
                <div class="automatic-block">
                    <ul class="automatic-list">
                        @if($product->soft_related_group->count() > 0 )
                        <li class="item-link"><p class="automatic-title">Программное обеспечение</p></li>
                        @foreach($soft as $item)
                            @foreach($product->soft_related_group as $soft_item)
                                @if($item->id_field == $soft_item->soft_field )
                                    <li class="item-link"><a href="/soft/programmnoe-obespechenie/{{$item->slug_field}}" class="link">{{$item->product_name_field}}</a></li>
                                @endif
                            @endforeach
                        @endforeach
                        @endif
                    </ul>
                    <ul class="automatic-list">
                        @if($product->product_auto_group->count() > 0 )
                        <li class="item-link"><p class="automatic-title">Применяется в автоматизации</p></li>
                        @foreach($auto as $item)
                            @foreach($product->product_auto_group as $auto_item)
                                @if($item->id_field == $auto_item->auto_field )
                                    <li class="item-link"><a href="/automatic/{{$item->slug_field}}" class="link">{{$item->page_name_field}}</a></li>
                                @endif
                            @endforeach
                        @endforeach
                        @endif
                    </ul>
                </div>
                @endif
            </div>
            <div class="col-1-2">
                <div class="buy-button-block">
                    <div class="row-1-2">
                        <div class="col-1-2">
                            @if($product->product_sale_field != 0)
                                <p class="sale">{{ number_format($product->product_sale_field,0,'',' ') }} сум</p>
                            @endif
                            @if($product->product_cost_field != '0' && $product->product_cost_field != '')
                                <p class="cost">{{ number_format($product->product_cost_field,0,'',' ') }} сум</p>
                            @else
                                <p class="mes">Цену уточняйте</p>
                            @endif
                        </div>
                        <div class="col-1-2">
                            <p class="text">При заказе свыше 5 позиций действуют скидки.</p>
                        </div>
                    </div>
                    <div class="row-1-2">
                        <div class="col-1-2">
                            <button class="button buy-it js_buy_popup" id="buy" href="#order">Заказать</button>
                        </div>
                        <div class="col-1-2">
                            <p class="text">Возможна рассрочка и аренда оборудования.</p>
                        </div>
                    </div>
                </div>
                <div class="product-description-block text-block">
                    @if($product->product_description_field != '')
                        <h4>Описание</h4>
                        {!! $product->product_description_field !!}
                        <br>
                    @endif
                    @if($product->builder_field != '')
                        <h4>Производитель</h4>
                        {!! $product->builder_field !!}
                            <br>
                    @endif
                    @if($product->why_apply_field != '')
                        <h4>Для чего применяется</h4>
                        {!! $product->why_apply_field !!}
                            <br>
                    @endif
                </div>
                @if($product->product_reviews_group->count() > 0 )
                    <div class="reviews">
                        <h4 class="reviews__title">Отзывы</h4>
                        @foreach($product->product_reviews_group as $review)
                            <ul class="reviews__list">
                                <li class="reviews__item">
                                    <div class="reviews__text text-block">{!! $review->review_text_field !!}</div>
                                    <p class="reviews__person-name">{{ $review->person_name_field }}</p>
                                    <p class="reviews__person-position">{{ $review->person_position_field }}</p>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        @if ($product->product_features_group->count() > 0 )
        <div class="block-separator">
            <div class="separator"></div>
        </div>
        <div class="technical-parameters">
            <div class="title-block">
                <h2 class="sub-title">Технические характеристики</h2>
                <span class="open-close-button"><a href="#" class="close">Свернуть</a></span>
            </div>
            <div class="parameters-block">
                @foreach($product->product_features_group as $item)
                    <div class="param-row">
                        <div class="col-30">
                            <p>{{$item->feat_name_field}}</p>
                        </div>
                        <div class="col-70">
                            <p>{{$item->feat_value_field}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
        @if($product->product_related_group->count() > 0 )
        <div class="block-separator">
            <div class="separator black"></div>
        </div>
        <div class="product-related">
            <div class="title-block">
                <h2 class="sub-title">Сопутствующие товары</h2>
            </div>
            <div class="products-list">
                @foreach($prod as $item_prod)
                    @foreach($product->product_related_group as $rel)
                        @if($item_prod->id_field == $rel->related_field)
                            <div class="product-item">
                                <a href="{{$item_prod->title_field}}">
                                    <div class="img-wrap">
                                        <img src="/images/{{$item_prod->product_base_photo_image->catalog_crop->link}}" alt="{{$item_prod->product_base_photo_image->alt}}">
                                    </div>
                                    <div class="text-wrap">
                                        <p class="wrap">
                                            <span>{{$item_prod->product_name_field}}</span>
                                        </p>
                                        @if($item_prod->product_cost_field != '0' && $item_prod->product_cost_field != '')
                                            <p class="cost">{{ number_format($item_prod->product_cost_field,0,'',' ') }} сум  @if($item_prod->product_sale_field != 0)<span class="sale">{{ number_format($item_prod->product_sale_field,0,'',' ') }} сум</span>@endif</p>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endforeach


            </div>
        </div>
        @endif
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
