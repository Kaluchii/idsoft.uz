@section('meta')
    <title>{{$tarif->page_title_field}}</title>
    <meta name="description" content="{{$tarif->seo_description_field}}">
    <meta name="keywords" content="{{$tarif->seo_keywords_field}}">
    @include('front.seotext',['seo_text' => $tarif->seo_text_field])
@endsection