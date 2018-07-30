@include('front.information.meta_about')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content about" itemscope="" itemtype="http://schema.org/Service">
        <h1 class="block-title">{{$about->page_name_field}}</h1>
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/images/{{$about->background_image->primary_link}}" alt="{{$about->background_image->alt}}">
            </div>
        </div>
        <div class="main-content-block">
            <div class="descr">
                <div class="col-1-2">
                    <div class="text-block">
                        {!! $about->description_field !!}
                    </div>
                </div>
                <div class="col-1-2">
                    <div class="right-menu-block">
                        <ul class="right-menu">
                            <li class="menu-item">
                                <div class="orange-wrap">
                                    <a href="/inf/about" class="link">{{$about->page_name_field}}</a>
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
            <div class="staff">
                @foreach($about->staff_group as $staff_item)
                    <div class="staff-item">
                        <div class="col-1-2">
                            <div class="image-wrap"><img src="/images/{{$staff_item->foto_image->primary_link}}"
                                                         alt="{{$staff_item->foto_image->alt}}"></div>
                        </div>
                        <div class="col-1-2">
                            <div class="name">{{$staff_item->name_field}}</div>
                            <div class="position">{{$staff_item->position_field}}</div>
                            <div class="text-block">{!! $staff_item->description_field !!}
                            </div>
                        </div>
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
        </div>
        <div class="contact-us">
            <div class="contacts">
                <h3 class="contacts-title">Свяжитесь с нами</h3>
                <div class="consult-text">{{$about->consult_field}}</div>
                <div class="numbers">
                    <?php $i = 0;?>
                    @foreach($static->phones_group as $item)
                        <?php $i++?>
                        @if($i == 1)
                            <div class="number">
                                <div class="telephone">{!! $item->phone_field !!}</div>
                                <div class="under-number">{{$about->works_time_field}}</div>
                            </div>
                        @elseif($i == 2)
                            <div class="number">
                                <div class="telephone">{!! $item->phone_field !!}</div>
                                <div class="under-number">
                                    <div class="icon-group">
                                        <i class="wpp"></i>
                                        <i class="tel"></i>
                                        <i class="vib"></i>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <a class="ask-me" href="#question">Написать письмо</a>
            </div>
            <div class="map-wrap">
                <div id="map">
                    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
                    <script type="text/javascript">
                        var map;

                        DG.then(function () {
                            map = DG.map('map', {
                                center: [43.22908475875056, 76.89035760902406],
                                zoom: 17,
                                fullscreenControl: false,
                            });

                            DG.marker([43.22908475875056, 76.89035760902406]).addTo(map).bindPopup('IDSOFT - Автоматизация торговли в Казахстане');
                        });
                    </script>
                    {{--<a class="dg-widget-link"
                       href="http://2gis.kz/almaty/firm/9429940001659307/center/76.89061760902406,43.22912475875056/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
                        на карте Алматы</a>
                    <div class="dg-widget-link"><a
                                href="http://2gis.kz/almaty/firm/9429940001659307/photos/9429940001659307/center/76.89061760902406,43.22912475875056/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии
                            компании</a></div>
                    <div class="dg-widget-link"><a
                                href="http://2gis.kz/almaty/center/76.890395,43.22905/zoom/17/routeTab/rsType/bus/to/76.890395,43.22905╎Центр автоматизации торговли IDSOFT, ТОО, компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
                            проезд до Центр автоматизации торговли IDSOFT, ТОО, компания</a></div>
                    <script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                    <script charset="utf-8">new DGWidgetLoader({
                            "width": 500,
                            "height": 400,
                            "borderColor": "#a3a3a3",
                            "pos": {"lat": 43.22912475875056, "lon": 76.89061760902406, "zoom": 17},
                            "opt": {"city": "almaty"},
                            "org": [{"id": "9429940001659307"}]
                        });</script>
                    <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript.
                        Включите его в настройках вашего браузера.
                    </noscript>--}}
                </div>
            </div>
        </div>
    </section>
@endsection