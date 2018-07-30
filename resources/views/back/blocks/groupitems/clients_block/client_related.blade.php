<li class="group" data-group-id="{{$item_client_related->id_field}}">
    <div class="title-block">
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="field-title"> Название позиции в комплектации </label>
            <input type="text" data-field-name="about_item" data-block="clients_block" data-group="client_related"
                   class="input-field group_field" value="{{$item_client_related->about_item_field}}"
                   data-item-id="{{$item_client_related->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Позиция в каталоге </label>
            <select data-field-type="numb" data-field-name="product" data-block="clients_block"
                    data-group="client_related" data-item-id="{{$item_client_related->id_field}}"
                    class="input-field group_field">
                @foreach($related as $r_item)
                    @if($r_item->id_field != $item_client_related->id_field)
                        @if($r_item->id_field == $item_client_related->product_field)
                            <option selected value="{{$r_item->id_field}}">{{$r_item->product_name_field}} </option>
                        @else
                            <option value="{{$r_item->id_field}}">{{$r_item->product_name_field}} </option>
                        @endif
                    @endif
                @endforeach
            </select>
        </div>
        <div class="col-1-2">
            <button type="button" class="any_delete button dark" data-block="clients_block" data-group="client_related"
                    data-entity="groupitem" data-item-id="{{$item_client_related->id_field}}" data-descr="Эл. первой группы">
                Удалить
            </button>
        </div>
        <div class="col-1-2 disabled">
            <button type="button" class="any_save" data-block="clients_block" data-group="client_related"
                    data-entity="groupitem" data-item-id="{{$item_client_related->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>

    </div>
</li>