@section('meta')
    @if($product->page_title_field == '')
        <title>{{$product->product_name_field}} купить в Алматы, Казахстане с доставкой - IDSOFT</title>
    @else
        <title>{{$product->page_title_field}}</title>
    @endif

    @if($product->seo_description_field == '')
        <meta name="description" content="Интернет магазин торгового оборудования IDSOFT предлагает заказать {{$product->product_name_field}} недорого. Лучшая цена, доставка, отзывы. ☎ +7 (727) 220-2000">
    @else
        <meta name="description" content="{{$product->seo_description_field}}">
    @endif

    @if($product->seo_keywords_field == '')
        <meta name="keywords" content="{{$product->product_name_field}}, {{$product->product_name_field}} купить, заказать {{$product->product_name_field}}">
    @else
        <meta name="keywords" content="{{$product->seo_keywords_field}}">
    @endif
@endsection