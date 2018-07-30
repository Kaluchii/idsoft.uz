@section('meta')
    @if($products->page_title_field == '')
        <title>{{$products->category_name_field}} заказать в Алматы, Казахстане - IDSOFT</title>
    @else
        <title>{{$products->page_title_field}}</title>
    @endif

    @if($products->seo_description_field == '')
        <meta name="description" content="Компания IDSOFT предлагает заказать {{$products->category_name_field}} недорого. Лучшая цена, отзывы. ☎ +7 (727) 220-2000">
    @else
        <meta name="description" content="{{$products->seo_description_field}}">
    @endif

    @if($products->seo_keywords_field == '')
        <meta name="keywords" content="{{$products->category_name_field}}, {{$products->category_name_field}} купить, заказать {{$products->category_name_field}}">
    @else
        <meta name="keywords" content="{{$products->seo_keywords_field}}">
    @endif
    @include('front.seotext',['seo_text' => $products->seo_text_field])
@endsection