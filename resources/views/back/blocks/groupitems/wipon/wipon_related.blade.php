<li class="group" data-group-id="{{$item_wipon_related->id_field}}">
    <div class="title-block">
    </div>
        <div class="field-wrap ">
            <label class="field-title"> Название позиции в комплектации </label>
            <input type="text" data-field-type="string" data-field-name="about_item" data-block="wipon"
                   data-group="wipon_related" class="input-field group_field"
                   value="{{$item_wipon_related->about_item_field}}"
                   data-item-id="{{$item_wipon_related->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Позиция в каталоге </label>
            <select type="number" data-field-type="numb" data-field-name="product" data-block="wipon"
                    data-group="wipon_related" data-item-id="{{$item_wipon_related->id_field}}"
                    class="input-field group_field"
                    placeholder="Целое число" >
                @foreach($related as $r_item)
                        @if($r_item->id_field == $item_wipon_related->product_field)
                            <option selected value="{{$r_item->id_field}}">{{$r_item->product_name_field}} </option>
                        @else
                            <option value="{{$r_item->id_field}}">{{$r_item->product_name_field}} </option>
                        @endif
                @endforeach
            </select>
        </div>
        <div class="field-wrap buttons_block">
            <div class="col-1-2">
                <button type="button" class="any_delete button dark" data-block="wipon" data-group="wipon_related"
                        data-entity="groupitem" data-item-id="{{$item_wipon_related->id_field}}"
                        data-descr="Эл. первой группы">Удалить
                </button>
            </div>
            <div class="col-1-2 disabled">
                <button type="button" class="any_save" data-block="wipon" data-group="wipon_related"
                        data-entity="groupitem" data-item-id="{{$item_wipon_related->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>

</li>