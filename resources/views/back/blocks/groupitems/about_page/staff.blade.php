<li class="row-item" data-sorter="{{$item_staff->sorter_field}}" data-id="{{$item_staff->id_field}}">
    <div class="column-item"><a href="/adm/edit/staff/{{$item_staff->id_field}}">@if ($item_staff->name_field != '') {{$item_staff->name_field}} @else Новый сотрудник @endif</a></div>
    <div class="column-item"></div>
    <div class="column-item"><p>{{$item_staff->sorter_field}}</p></div>
    <div class="column-item"></div>
    <div class="column-item">
        <button type="button" class="any_delete button dark" data-block="about_page" data-group="staff"
                data-entity="groupitem" data-item-id="{{$item_staff->id_field}}" data-descr="Эл. первой группы">Удалить
        </button>
    </div>
</li>
