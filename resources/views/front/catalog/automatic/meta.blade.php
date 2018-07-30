@section('meta')
    <title>{{$auto->page_title_field}}</title>
    <meta name="description" content="{{$auto->seo_description_field}}">
    <meta name="keywords" content="{{$auto->seo_keywords_field}}">
    @include('front.seotext',['seo_text' => $auto->seo_text_field])
@endsection