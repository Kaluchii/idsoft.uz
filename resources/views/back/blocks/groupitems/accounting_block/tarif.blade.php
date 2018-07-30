<li class="row-item" data-sorter="{{$item_tarif->sorter_field}}" data-id="{{$item_tarif->id_field}}">
    <div class="column-item"><a
                href="/adm/edit/accounting/{{$item_tarif->id_field}}/{{$item_tarif->id_field}}">@if ($item_tarif->page_name_field != '') {{$item_tarif->page_name_field}} @else Новый тариф @endif</a>
    </div>
    <div class="column-item"></div>
    <div class="column-item"><p>{{$item_tarif->sorter_field}}</p></div>
    <div class="column-item"></div>
    <div class="column-item">
        <button type="button" class="any_delete button dark" data-block="accounting_block" data-group="tarif"
                data-entity="groupitem" data-item-id="{{$item_tarif->id_field}}" data-descr="Эл. первой группы">Удалить
        </button>
    </div>
</li>
