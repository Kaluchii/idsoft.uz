@section('meta')
    <title>{{$account->page_title_field}}</title>
    <meta name="description" content="{{$account->seo_description_field}}">
    <meta name="keywords" content="{{$account->seo_keywords_field}}">
    @include('front.seotext',['seo_text' => $account->seo_text_field])
@endsection