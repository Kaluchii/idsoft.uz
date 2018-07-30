<li class="group" data-group-id="{{$item_acc_adv->id_field}}">
    <div class="title-block">
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="field-title"> Иконка </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="card" data-group="acc_adv"
                               data-field-type="image" data-item-id="{{$item_acc_adv->id_field}}"
                               data-block="accounting_block" value="{{$item_acc_adv->card_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="card" data-group="acc_adv"
                               data-field-type="image" data-item-id="{{$item_acc_adv->id_field}}"
                               data-block="accounting_block" value="{{$item_acc_adv->card_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="card" data-group="acc_adv"
                               data-field-type="image" data-item-id="{{$item_acc_adv->id_field}}"
                               data-block="accounting_block" value="{{$item_acc_adv->card_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="card" data-group="acc_adv"
                               data-field-type="image" data-item-id="{{$item_acc_adv->id_field}}"
                               data-block="accounting_block" value="{{$item_acc_adv->card_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="card" data-group="acc_adv"
                               data-field-type="image" data-item-id="{{$item_acc_adv->id_field}}"
                               data-block="accounting_block" value="{{$item_acc_adv->card_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="card" data-group="acc_adv"
                               data-field-type="image" data-item-id="{{$item_acc_adv->id_field}}"
                               data-block="accounting_block" value="{{$item_acc_adv->card_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$item_acc_adv->card_image->preview_link}}" class="preview"
                                 data-field-name="card" data-block="accounting_block" data-group="acc_adv"
                                 data-item-id="{{$item_acc_adv->id_field}}">
                            <input type="file" accept="image/*" class="input_file group_field" data-field-name="card"
                                   data-field-type="image" data-block="accounting_block" data-group="acc_adv"
                                   data-item-id="{{$item_acc_adv->id_field}}" data-entity="groupitem"> </label>
                    </div>
                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_acc_adv->card_image->alt}}" data-item-id="{{$item_acc_adv->id_field}}"
                               data-field-name="card" data-block="accounting_block">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Описание </label>
            <textarea data-field-type="text" data-field-name="card_text" data-block="accounting_block"
                      data-group="acc_adv" class="input group_field" data-item-id="{{$item_acc_adv->id_field}}"
                      placeholder="Текст">{{$item_acc_adv->card_text_field}}</textarea>
        </div>
        <div class="field-wrap buttons_block">
            <div class="col-1-2">
                <button type="button" class="any_delete button dark disabled" data-block="accounting_block" data-group="acc_adv"
                        data-entity="groupitem" data-item-id="{{$item_acc_adv->id_field}}"
                        data-descr="Эл. первой группы">Удалить
                </button>
            </div>
            <div class="col-1-2 disabled">
                <button type="button" class="any_save" data-block="accounting_block" data-group="acc_adv"
                        data-entity="groupitem" data-item-id="{{$item_acc_adv->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </div>
</li>