@extends('front.layout')
@include('front.index.meta')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = false; ?>
    {{----}}
    <section class="content" itemscope="" itemtype="http://schema.org/Service">
        <div class="automatic">
            <h1 class="block-title">Автоматизация общепита и торговли</h1>

            <div class="automatic-block-list">
                <div class="row">
                    <div class="col-1-2">
                        <div class="wrap">
                            <p class="card-title">{{$auto->auto_title_field}}</p>
                            <p class="card-text">{{$auto->auto_description_field}}</p>
                        </div>
                        <img src="/images/{{$auto->auto_background_image->primary_link}}" class="monitor" alt="{{$auto->auto_background_image->alt}}">
                        <img src="/img/monitor.PNG" class="monitor-l" alt="">
                        <div class="popup-form orange small">
                            <h3 class="popup-title">{{$auto->auto_title_field}}</h3>
                            <div class="popup-items">
                                <ul class="popup-list">
                                    @foreach($acc_m as $item_p)
                                        <li class="item-popup">
                                            <a href="/automatic/{{$item_p->slug_field}}">{{$item_p->page_name_field}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="wrap">
                            <p class="card-title">{{$auto->iiko_title_field}}</p>
                            <p class="card-text">{{$auto->iiko_description_field}}</p>
                        </div>
                        <img src="/images/{{$auto->iiko_background_image->primary_link}}" class="iiko" alt="{{$auto->iiko_background_image->alt}}">
                        <div class="popup-form red">
                            <h3 class="popup-title">{{$auto->iiko_title_field}}</h3>
                            <div class="popup-items">
                                <ul class="popup-list">
                                    @foreach($iiko as $item_p)
                                        <li class="item-popup">
                                            <a href="/automatic/{{$item_p->slug_field}}">{{$item_p->page_name_field}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1-2">
                        <div class="wrap">
                            <p class="card-title">{{$catalog->category_name_field}}</p>
                            <p class="card-text">{{$catalog->category_description_field}}</p>
                        </div>
                        <img src="/images/{{$catalog->card_background_image->primary_link}}" class="hand" alt="{{$catalog->card_background_image->alt}}">
                        <div class="popup-form orange big">
                            <h3 class="popup-title">{{$catalog->category_name_field}}</h3>
                            <div class="popup-items">
                                <ul class="popup-list">
                                    @foreach($m_popup[0] as $item_p)
                                        <li class="item-popup">
                                            <a href="/catalog/{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <a href="/soft">
                            <div class="wrap">
                                <p class="card-title">{{$soft->category_name_field}}</p>
                                <p class="card-text">{{$soft->category_description_field}}</p>
                            </div>
                            <img src="/images/{{$soft->card_background_image->primary_link}}" class="soft" alt="{{$soft->card_background_image->alt}}">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3-3">
                        <a class="rosta-link" href="/rosta">
                            <img src="/img/rosta-logo.png" alt="" class="rosta-logo">
                            <p class="about-rosta">Предельно простая и реактивно быстрая
                                автоматизация торговли, логистики и склада</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients-block">
            <h2 class="sub-title"><a href="/clients">Наши клиенты</a></h2>

            <div class="slider-block">
                <ul class="slider-list">
                    <?php
                    $i = 0;
                    $j = 0;
                    $max = floor( $client->count() / 4 )*4;
                    ?>
                    {{$max}}
                    @foreach($client as $item)
                        <?php $j++;?>
                        @if($j <= $max)
                            @if($i == 0)
                                <li class="slide">
                                    <div class="client-row">
                                        @endif
                                        <div class="client-item">
                                            <a href="/clients/{{$item->slug_field}}">
                                                <div class="image-wrap">
                                                    <img src="/images/{{$item->background_image->small_crop->link}}"
                                                         alt="{{$item->background_image->alt}}">
                                                </div>
                                                <div class="text-wrap">
                                                    <p class="wrap"><span class="client-name">{{$item->page_name_field}}</span></p>
                                                    <p class="about-client">{{$item->small_descr_field}}</p>
                                                    @foreach($filter->city_group as $item_c)
                                                        @if($item_c->id_field == $item->city_name_field)
                                                            <p class="city">{{$item_c->city_name_field}}</p>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </a>
                                        </div>
                                        @if($i == 3)
                                    </div>
                                </li>
                                <?php $i = -1?>
                            @endif
                            <?php $i++ ?>
                        @endif
                    @endforeach
                </ul>
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
                <input type="text" class="input phone popup-input" data-mask="+99800 000-00-00" placeholder="Номер телефона" data-field-name="phone" data-field-type="string">
                <button class="calculated-button button send-form" data-event-name="gtm_submit_Project_Cost">Рассчитать</button>
            </div>
        </div>
    </section>
@endsection