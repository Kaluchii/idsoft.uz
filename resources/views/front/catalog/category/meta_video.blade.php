@section('meta')
    @if($seo->page_title_field == '')
        <title>{{$seo->category_name_field}} заказать в Алматы, Казахстане - IDSOFT</title>
    @else
        <title>{{$seo->page_title_field}}</title>
    @endif

    @if($seo->seo_description_field == '')
        <meta name="description" content="Компания IDSOFT предлагает заказать {{$seo->category_name_field}} недорого. Лучшая цена, отзывы. ☎ +7 (727) 220-2000">
    @else
        <meta name="description" content="{{$seo->seo_description_field}}">
    @endif

    @if($seo->seo_keywords_field == '')
        <meta name="keywords" content="{{$seo->category_name_field}}, {{$seo->category_name_field}} купить, заказать {{$seo->category_name_field}}">
    @else
        <meta name="keywords" content="{{$seo->seo_keywords_field}}">
    @endif
    @include('front.seotext',['seo_text' => $seo->seo_text_field])
@endsection