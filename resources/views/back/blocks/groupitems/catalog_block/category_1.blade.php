<li class="row-item" data-sorter="{{$item_category_1->sorter_field}}" data-id="{{$item_category_1->id_field}}">
    <div class="column-item"><a
                href="/adm/edit/category_1/{{$item_category_1->id_field}}">@if ($item_category_1->title_field != '') {{$item_category_1->title_field}} @else Новая категория @endif</a></div>
    <div class="column-item"></div>
    <div class="column-item"><p>{{$item_category_1->sorter_field}}</p></div>
    <div class="column-item"></div>
    <div class="column-item">
        <button type="button" class="any_delete button dark" data-block="catalog_block" data-group="category_1"
                data-entity="groupitem" data-item-id="{{$item_category_1->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
</li>
