@if($i == 1)
    @foreach($m_popup[$i-1] as $item_p)
        @if($item_p->show_field == 1)
            <li class="item-popup">
                <a href="/catalog/{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
            </li>
        @endif
    @endforeach
@elseif($i == 6)
    @foreach($m_popup[$i-1] as $item_p)
        @if($item_p->show_field == 1)
            <li class="item-popup">
                <a href="/video/{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
            </li>
        @endif
    @endforeach
@endif