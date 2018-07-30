<li class="group" data-group-id="{{$item_product_features->id_field}}">
    <div class="title-block">
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="field-title"> Название характеристики </label>
            <input type="text" data-field-type="string" data-field-name="feat_name" data-block="catalog_block"
                   data-group="product_features" class="input-field group_field"
                   value="{{$item_product_features->feat_name_field}}"
                   data-item-id="{{$item_product_features->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Значение характеристики </label>
            <input type="text" data-field-type="string" data-field-name="feat_value" data-block="catalog_block"
                   data-group="product_features" class="input-field group_field"
                   value="{{$item_product_features->feat_value_field}}"
                   data-item-id="{{$item_product_features->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons_block">
            <div class="col-1-2">
                <button type="button" class="any_delete button dark" data-block="catalog_block"
                        data-group="product_features" data-entity="groupitem"
                        data-item-id="{{$item_product_features->id_field}}" data-descr="Эл. первой группы">Удалить
                </button>
            </div>
            <div class="col-1-2 disabled">
                <button type="button" class="any_save" data-block="catalog_block" data-group="product_features"
                        data-entity="groupitem" data-item-id="{{$item_product_features->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </div>
</li>