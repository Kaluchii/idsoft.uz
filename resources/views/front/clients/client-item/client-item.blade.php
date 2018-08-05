@include('front.clients.client-item.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content client " itemscope="" itemtype="http://schema.org/Service">
        <div class="bread-crumb">
            <span class="crumb-item"><a href="/clients">Клиенты</a></span>
            <span class="crumb-separate">→</span>
            @foreach($filter->institution_group as $item)
                @if($item->id_field == $client->institution_type_field)
                    <span class="crumb-item"><a
                                href="/clients/all/{{$client->institution_type_field}}">{{$item->seo_keywords_field}}</a></span>
                @endif
            @endforeach
        </div>
        <h1 class="block-title">{{$client->page_name_field}}</h1>
        <?php $placeholder = explode("/", $client->background_image->primary_link)[0]; ?>
        @if($client->background_image->primary_link != '' && $placeholder != 'placeholders')
            <div class="title-image">
                <img src="/images/{{$client->background_image->primary_link}}" alt="{{$client->background_image->alt}}">
            </div>
        @endif
        <div class="main-content-grid">
            <div class="col-1-2">
                <div class="text-block">{!! $client->content_field !!}</div>
                @if ($client->rec_text_field != '')
                    <div class="recall">
                        <h2 class="recall-title">Отзыв клиента</h2>
                        <p class="recall-text">{!! $client->rec_text_field !!}</p>
                        <div class="who-responded">
                            <div class="col-1-2">
                                <img src="/images/{{$client->rec_foto_image->primary_link}}"
                                     alt="{{$client->rec_foto_image->alt}}">
                            </div>
                            <div class="col-1-2">
                                <p class="name">{{$client->rec_fio_field}}</p>
                                <p class="position">{{$client->rec_position_field}}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-1-2">
                <div class="client-logo">
                    <img src="/images/{{$client->logo_image->primary_link}}" alt="{{$client->logo_image->alt}}">
                </div>
                <div class="other-places">
                    <p class="menu-title">Другие заведения</p>
                    <ul class="places-list">
                        <?php $c = 0; ?>
                        @foreach($all as $item)
                            @if (($item->page_name_field != $client->page_name_field) && ($c <= 15))
                                <li class="item"><a href="/clients/{{$item->slug_field}}">{{$item->page_name_field}}</a>
                                </li>
                            @endif
                            <?php $c++ ?>
                        @endforeach
                        @foreach($filter->institution_group as $item)
                            @if($item->id_field == $client->institution_type_field)
                                <li class="item"><a href="/clients/all/{{$item->id_field}}"
                                                    class="bold">Все {{$all->count()}} {{$item->page_title_field}}</a>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div>
                <?php $placeholder = explode("/", $client->letter_image->primary_link)[0]; ?>
                @if($client->letter_image->primary_link != '' && $placeholder != 'placeholders')
                    <div class="recommend-letter">
                        <a href="/images/{{$client->letter_image->primary_link}}">
                            <div class="image-wrap frame">
                                <img src="/images/{{$client->letter_image->frame_crop->link}}"
                                     alt="{{$client->letter_image->alt}}">
                            </div>
                            <p><span>Рекомендательное письмо {{$client->page_name_field}}</span></p>
                        </a>
                    </div>
                @endif
            </div>
        </div>
        <div class="block-separator">
            <div class="separator dashed"></div>
        </div>
        <div class="equipment-block">
            <div class="block-title">
                <h2 class="sub-title">Комплектация</h2>
                <div class="products-list">

                    @foreach($product as $item_prod)
                        @foreach($client->client_related_group as $rel)
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
                                                    сум @if($item_prod->product_sale_field != 0)<span class="sale">{{ number_format($item_prod->product_sale_field,0,'',' ') }}
                                                        сум</span>@endif</p>
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