<li class="row-item" data-sorter="{{$item_client->sorter_field}}" data-id="{{$item_client->id_field}}">
    <div class="column-item"><a href="/adm/edit/clients/{{$item_client->id_field}}">@if ($item_client->page_name_field != '') {{$item_client->page_name_field}} @else Новый клиент @endif</a>
    </div>
    <div class="column-item"></div>
    <div class="column-item"><p>{{$item_client->sorter_field}}</p></div>
    <div class="column-item"></div>
    <div class="column-item">
        <button type="button" class="any_delete button dark" data-block="clients_block" data-group="client"
                data-entity="groupitem" data-item-id="{{$item_client->id_field}}" data-descr="Эл. первой группы">Удалить
        </button>
    </div>
</li>
