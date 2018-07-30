@extends('front.layout')
@include('front.accounting.meta')
@include('front.popups.accounting')
@section('content')
    <?php $shadow = true; ?>
    {{----}}
    <section class="content accounting " itemscope="" itemtype="http://schema.org/Service">
        <h1 class="page-title">Бухгалтерия для предпринимателей и малого бизнеса</h1>
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/images/{{$account->background_image->primary_link}}" alt="">
            </div>
        </div>
        <div class="main-content-block">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $account->content_field !!}
                </div>
            </div>
            <div class="col-1-2">
                <div class="stage">
                    <p><span class="year">54</span>
                        <span class="year-small">года</span> суммарный опыт <br>в бухгалетрии сотрудников <br>IDSOFT
                        Бухгалтерия</p>
                </div>
            </div>
        </div>
        <div class="employs-block">
            <h2 class="block-title">Руководство</h2>
            <div class="employs">
                @foreach($account->employs_group as $e_item)
                    <div class="employ-item">
                        <div class="img-wrap">
                            <img src="/images/{{$e_item->photo_image->primary_link}}"
                                 alt="{{$e_item->photo_image->alt}}">
                        </div>
                        <div class="name-wrap">
                            <p class="name">{{$e_item->emp_name_field}}</p>
                            <p class="profession">{{$e_item->emp_prof_field}}</p>
                        </div>
                        <div class="about-wrap text-block">
                            {!! $e_item->emp_about_field !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="big-image">
            <img src="/images/{{$account->work_process_image->primary_link}}"
                 alt="{{$account->work_process_image->alt}}">
            <span class="image-name">Рабочий процесс</span>
        </div>
        <div class="advantages-title">
            <h2 class="block-title">Ощутимые преимущества</h2>
        </div>
        <div class="second-content">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $account->advantages_field !!}
                </div>
            </div>
            <div class="col-1-2">
                <div class="advantages-block">
                    @foreach($account->acc_adv_group as $item)
                        <div class="block-item">
                            <div class="img-wrap">
                                <img src="/images/{{$item->card_image->primary_link}}" alt="{{$item->card_image->alt}}">
                            </div>
                            <div class="text-wrap">
                                {!! $item->card_text_field !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="tarifs">
            <h2 class="block-title">Выгодные тарифы</h2>
            <div class="tarif-block">
                <div class="tarif-item" style="text-align: center">
                    <h4 class="tarif-name">для ИП</h4>
                    <p class="price">от 20 000 тг</p>
                </div>
                <div class="tarif-item" style="text-align: center">
                    <h4 class="tarif-name">для ТОО</h4>
                    <p class="price">от 40 000 тг</p>
                </div>

                {{--@foreach($account->tarif_category_group as $cat)
                    <div class="tarif-item">
                        <h4 class="tarif-name">{{$cat->tarif_name_field}}</h4>
                        <ul class="tarifs">
                            @foreach($cat->tarif_group as $tarif)
                                <li class="item">
                                    <p><a href="/accounting/{{$tarif->slug_field}}">{{$tarif->page_name_field}}</a> <span class="cost">от {{ number_format($tarif->tarif_cost_field,0,'',' ') }} тг</span></p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach--}}
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
            <h2 class="sub-title">Написать в бухгалтерию</h2>
            <div class="calculate partner">
                <button class="button" href="#accounting" id="account">Отправить заявку</button>
            </div>
        </div>
    </section>
@endsection