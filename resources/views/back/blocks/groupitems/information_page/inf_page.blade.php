<li class="row-item" data-sorter="{{$item_inf_page->sorter_field}}" data-id="{{$item_inf_page->id_field}}">
    <div class="column-item"><a
                href="/adm/edit/informatic/{{$item_inf_page->id_field}}">@if ($item_inf_page->page_name_field != '') {{$item_inf_page->page_name_field}} @else Новая страница @endif</a></div>
    <div class="column-item"></div>
    <div class="column-item"><p>{{$item_inf_page->sorter_field}}</p></div>
    <div class="column-item"></div>
    <div class="column-item">
        <button type="button" class="any_delete button dark disabled" data-block="information_page" data-group="inf_page"
                data-entity="groupitem" data-item-id="{{$item_inf_page->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
</li>
