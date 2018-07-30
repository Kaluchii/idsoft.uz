@section('meta')
    <title>{{$static->page_title_field}}</title>
    <meta name="description" content="{{$static->seo_description_field}}">
    <meta name="keywords" content="{{$static->seo_keywords_field}}">
    @include('front.seotext',['seo_text' => $static->seo_text_field])
@endsection