@section('meta')
    <title>{{$seo->page_title_field}}</title>
    <meta name="description" content="{{$seo->seo_description_field}}">
    <meta name="keywords" content="{{$seo->seo_keywords_field}}">
    @include('front.seotext',['seo_text' => $seo->seo_text_field])
@endsection