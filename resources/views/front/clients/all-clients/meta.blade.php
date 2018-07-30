@section('meta')
    <title>{{$seo_c->page_title_field}}</title>
    <meta name="description" content="{{$seo_c->seo_description_field}}">
    <meta name="keywords" content="{{$seo_c->seo_keywords_field}}">
    @include('front.seotext',['seo_text' => $seo_c->seo_text_field])
@endsection