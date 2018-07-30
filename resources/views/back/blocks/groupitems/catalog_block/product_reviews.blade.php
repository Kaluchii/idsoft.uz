<li class="group" data-group-id="{{$item_product_reviews->id_field}}">
    <div class="title-block">
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="field-title"> Имя </label>
            <input type="text" data-field-type="string" data-field-name="person_name" data-block="catalog_block"
                   data-group="product_reviews" class="input-field group_field"
                   value="{{$item_product_reviews->person_name_field}}"
                   data-item-id="{{$item_product_reviews->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Должность </label>
            <input type="text" data-field-type="string" data-field-name="person_position" data-block="catalog_block"
                   data-group="product_reviews" class="input-field group_field"
                   value="{{$item_product_reviews->person_position_field}}"
                   data-item-id="{{$item_product_reviews->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Текст отзыва </label>
            <textarea data-field-type="text"
                      data-field-name="review_text"
                      data-block="catalog_block"
                      data-group="product_reviews"
                      class="input group_field"
                      data-item-id="{{$item_product_reviews->id_field}}"
                      placeholder="Текст">{{$item_product_reviews->review_text_field}}</textarea>
        </div>
        <div class="field-wrap buttons_block">
            <div class="col-1-2">
                <button type="button" class="any_delete button dark" data-block="catalog_block"
                        data-group="product_reviews" data-entity="groupitem"
                        data-item-id="{{$item_product_reviews->id_field}}" data-descr="Эл. первой группы">Удалить
                </button>
            </div>
            <div class="col-1-2 disabled">
                <button type="button" class="any_save" data-block="catalog_block" data-group="product_reviews"
                        data-entity="groupitem" data-item-id="{{$item_product_reviews->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </div>
</li>