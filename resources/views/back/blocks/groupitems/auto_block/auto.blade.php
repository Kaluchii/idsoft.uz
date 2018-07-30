<li class="row-item" data-sorter="{{$item_auto->sorter_field}}" data-id="{{$item_auto->id_field}}">
    <div class="column-item"><a href="/adm/edit/auto/{{$item_auto->id_field}}">@if ($item_auto->page_name_field != '') {{$item_auto->page_name_field}} @else Новое решение @endif</a></div>
    <div class="column-item"></div>
    <div class="column-item"><p>{{$item_auto->sorter_field}}</p></div>
    <div class="column-item"></div>
    <div class="column-item">
        <button type="button" class="any_delete button dark" data-block="auto_block" data-group="auto"
                data-entity="groupitem" data-item-id="{{$item_auto->id_field}}" data-descr="Эл. первой группы">Удалить
        </button>
    </div>
</li>
