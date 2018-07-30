<li class="group" data-group-id="{{$item_institution->id_field}}">
    <div class="title-block">
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="field-title"> Название в ед. числе </label>
            <input type="text" data-field-type="string" data-field-name="page_name" data-block="clients_filter"
                   data-group="institution" class="input-field group_field"
                   value="{{$item_institution->page_name_field}}" data-item-id="{{$item_institution->id_field}}"
                   placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Название во множ. числе </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="clients_filter"
                   data-group="institution" class="input-field group_field"
                   value="{{$item_institution->page_title_field}}" data-item-id="{{$item_institution->id_field}}"
                   placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Название во множ. числе </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="clients_filter"
                   data-group="institution" class="input-field group_field"
                   value="{{$item_institution->seo_keywords_field}}" data-item-id="{{$item_institution->id_field}}"
                   placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Количество клиентов данного типа </label>
            <input type="number" data-field-type="numb" data-field-name="institution_count" data-block="clients_filter"
                   data-group="institution" class="input-field group_field"
                   value="{{$item_institution->institution_count_field}}" data-item-id="{{$item_institution->id_field}}"
                   placeholder="Число">
        </div>
        <div class="field-wrap buttons_block">
            <div class="col-1-2">
                <button type="button" class="any_delete button dark" data-block="clients_filter"
                        data-group="institution" data-entity="groupitem" data-item-id="{{$item_institution->id_field}}"
                        data-descr="Эл. первой группы">Удалить
                </button>
            </div>
            <div class="col-1-2 disabled">
                <button type="button" class="any_save" data-block="clients_filter" data-group="institution"
                        data-entity="groupitem" data-item-id="{{$item_institution->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </div>
</li>