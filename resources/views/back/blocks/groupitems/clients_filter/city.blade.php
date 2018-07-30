<li class="group" data-group-id="{{$item_city->id_field}}">
    <div class="title-block">
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="field-title"> Город </label>
            <input type="text" data-field-type="string" data-field-name="city_name" data-block="clients_filter"
                   data-group="city" class="input-field group_field" value="{{$item_city->city_name_field}}"
                   data-item-id="{{$item_city->id_field}}" placeholder="Строка">

        </div>
        <div class="field-wrap buttons_block">
            <div class="col-1-2">
                <button type="button" class="any_delete button dark" data-block="clients_filter" data-group="c
                       ity" data-entity="groupitem" data-item-id="{{$item_city->id_field}}" data-descr="Эл. первой груп
                    пы">Удалить
                </button>
            </div>
            <div class="col-1-2 disabled">
                <button type="button" class="any_save" data-block="clients_filter" data-group="city"
                        data-entity="groupitem" data-item-id="{{$item_city->id_field}}" data-descr="Эл. первой группы">
                    Сохранить
                </button>
            </div>
        </div>
    </div>
</li>