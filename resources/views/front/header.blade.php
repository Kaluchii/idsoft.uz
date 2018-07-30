@section('header')
    <header @if($shadow) class="shadow" @else @endif>
        <div class="wrap-row">
        <div class="info-row">
            <div class="col-1-3">
                <div class="wrap">
                    <img src="/img/h_mail.png" alt="">
                </div>
                <ul class="head-list">
                    <li class="item">
                        <a class="ask-me js_ask_me" href="#question">Написать письмо</a>
                    </li>
                    <li class="item">
                        <a href="http://go.2gis.com/nq2ta" class="js_location" target="_blank" rel="nofollow noindex">Как нас найти</a>
                    </li>
                </ul>
            </div>
            <div class="col-1-3">
                <div class="logo-block">
                    <a href="/"><img src="/images/{{$static->logo_image->primary_link}}" alt="{{$static->logo_image->alt}}"
                         class="logo"></a>
                </div>
            </div>
            <div class="col-1-3 reverse">
                <ul class="head-list">
                    <?php $i = 0;?>
                    @foreach($static->phones_group as $item)
                        <?php $i++?>
                        @if($i == 1 or $i == 3)
                            <li class="item">
                                <p>{!! $item->phone_field !!}</p>
                            </li>
                        @else
                            <li class="item">
                                <span class="icon-group">
                                    <i class="wpp"></i>
                                    <i class="tel"></i>
                                    <i class="vib"></i>
                                </span>
                                <p>{!! $item->phone_field !!}</p>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <div class="wrap">
                    <img src="/img/h_call.png" alt="">
                </div>
            </div>
        </div>
        <nav class="main-menu">
            <div class="mobile-menu-wrap">
                <div class="button-wrap">
                    <button class="mobile-button">☰</button>
                </div>
                <div class="wrap popup">
                    <ul class="big-menu">
                        <?php /*$i = 0 */?>
                        <?php $i = 0; $b = 0; ?>
                        @foreach($menu->menu_group as $item)
                            <?php $i++ ?>
                            @if ($i <= 3)
                                <li class="menu-item">
                                    <span class="hovered-text">{{$item->small_text_field}}</span>


                                    {{--<a href="{{$link[$i-1]}}" class="all-site-menu">{{$item->menu_text_field}}</a>--}}
                                    @if($link[$i-1] == '/automatic')
                                        @foreach($m_popup[$i-1] as $item_f)
                                            <?php $b++ ?>
                                            @if($b == 1)
                                                <a href="/automatic/{{$item_f->slug_field}}" class="all-site-menu">{{$item->menu_text_field}}</a>
                                            @endif
                                        @endforeach
                                    @else
                                        <a href="{{$link[$i-1]}}" class="all-site-menu">{{$item->menu_text_field}}</a>
                                    @endif


                                    @if($i == 3)
                                    @else
                                        <div class="popup-form  automatic @if($i == 2) small  @endif">
                                            @if($i == 2)
                                                <div class="col-1-2">
                                                    <h3 class="popup-title">
                                                        <?php $ai = 0;?>
                                                        @foreach($m_popup[$i-1] as $item_p)
                                                            <?php $ai++ ?>
                                                            @if($ai == 1)
                                                                <a href="/automatic/{{$item_p->slug_field}}">{{$item->menu_text_field}}</a>
                                                            @endif
                                                        @endforeach
                                                    </h3>
                                                    <div class="popup-items">
                                                        <ul class="second-row">
                                                            @foreach($m_popup[$i-1] as $item_p)
                                                                @if( !$item_p->is_iiko_field)
                                                                    <li class="item-popup">
                                                                        <a href="/automatic/{{$item_p->slug_field}}">{{$item_p->page_name_field}}</a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-1-2">
                                                    <h3 class="popup-title">Автоматизация IIKO</h3>
                                                    <div class="popup-items">
                                                        <ul class="second-row">
                                                            @foreach($m_popup[$i-1] as $item_p)
                                                                @if( $item_p->is_iiko_field)
                                                                    <li class="item-popup">
                                                                        <a href="/automatic/{{$item_p->slug_field}}">{{$item_p->page_name_field}}</a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @else
                                                        <div class="col-1-1">
                                                            <h3 class="popup-title"><a
                                                                        href="/catalog">{{$item->menu_text_field}}</a>
                                                            </h3>
                                                            <div class="popup-items">
                                                                <ul class="popup-list">
                                                                    @include('front.main_menu')
                                                                </ul>
                                                            </div>
                                                            @endif
                                                        </div>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <ul class="small-menu">
                        <?php $i = 0  ?>
                        @foreach($menu->menu_group as $item)
                            <?php $i++ ?>
                            @if ($i>3)
                                <li class="menu-item">
                                    @if($i == 4)
                                        <a href="/wipon" class="all-site-menu" >Wipon Pro</a>
                                    @elseif($i == 5)
                                        <a href="{{$link[$i-1]}}" class="all-site-menu" >{{$item->menu_text_field}}</a>
                                    @else
                                        <a href="{{$link[$i-1]}}" class="all-site-menu" >{{$item->menu_text_field}}</a>
                                        <div class="popup-form small">
                                            <h3 class="popup-title"><a
                                                        href="{{$link[$i-1]}}">{{$item->menu_text_field}}</a></h3>
                                            <div class="col-1-col">
                                                <div class="popup-items">
                                                    <ul class="popup-list">
                                                        @include('front.main_menu')
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        </div>
        <div class="mobile-menu-bottom">
            <ul class="list">
                <li class="item"><a class="ask-me" href="#question">Написать письмо</a></li>
                <?php $i = 0;?>
                @foreach($static->phones_group as $item)
                    <?php $i++?>
                    @if($i == 2)
                        <li class="item"><a href="tel:<?php echo preg_replace('/<[^>]+>/', '', $item->phone_field) ?>">{!! $item->phone_field !!}</a></li>
                    @endif
                @endforeach

            </ul>
        </div>
    </header>
@endsection