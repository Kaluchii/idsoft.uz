<li class="row-item" data-sorter="{{$item_product->sorter_field}}" data-id="{{$item_product->id_field}}">
    <div class="column-item"><a href="/adm/edit/catalog/product/{{$item_product->id_field}}">@if ($item_product->product_name_field != '') {{$item_product->product_name_field}} @else Новый товар @endif</a>
    </div>
    <div class="column-item"></div>
    <div class="column-item">
        <input type="number" data-field-type="string" data-field-name="sorter"
               data-block="catalog_block" data-group="product"
               class="input-field group_pre_field" value="{{$item_product->sorter_field}}"
               data-item-id="{{$item_product->id_field}}" placeholder="Строка">
        <div class="disabled">
            <div class="field-wrap buttons disabled">
                <button type="button" class="any_save" data-block="catalog_block" data-group="product"
                        data-entity="groupitem" data-item-id="{{$item_product->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </div>
    <div class="column-item"></div>
    <div class="column-item">
        <button type="button" class="any_delete button dark" data-block="catalog_block" data-group="product"
                data-entity="groupitem" data-item-id="{{$item_product->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
</li>
