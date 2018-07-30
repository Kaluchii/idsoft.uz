<li class="group" data-group-id="{{$item_images_set->id_field}}"><div class="title-block">
</div>
<div class="block ">
<div class="field-wrap ">
<label class="field-title"> Заголовок </label>
<div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                <input type="hidden" class="prefix" data-field-name="text_pict" data-group="images_set" data-field-type="image" data-item-id="{{$item_images_set->id_field}}" data-block="dom_all_images" value="{{$item_images_set->text_pict_image->prefix}}">
                <input type="hidden" class="original_link" data-field-name="text_pict" data-group="images_set" data-field-type="image" data-item-id="{{$item_images_set->id_field}}" data-block="dom_all_images" value="{{$item_images_set->text_pict_image->original_link}}">
                <input type="hidden" class="preview_link" data-field-name="text_pict" data-group="images_set" data-field-type="image" data-item-id="{{$item_images_set->id_field}}" data-block="dom_all_images" value="{{$item_images_set->text_pict_image->preview_link}}">
                <input type="hidden" class="primary_link" data-field-name="text_pict" data-group="images_set" data-field-type="image" data-item-id="{{$item_images_set->id_field}}" data-block="dom_all_images" value="{{$item_images_set->text_pict_image->primary_link}}">
                <input type="hidden" class="secondary_link" data-field-name="text_pict" data-group="images_set" data-field-type="image" data-item-id="{{$item_images_set->id_field}}" data-block="dom_all_images" value="{{$item_images_set->text_pict_image->secondary_link}}">
                <input type="hidden" class="icon_link" data-field-name="text_pict" data-group="images_set" data-field-type="image" data-item-id="{{$item_images_set->id_field}}" data-block="dom_all_images" value="{{$item_images_set->text_pict_image->icon_link}}">
            </div>
            <div class="preview-block">
                    <label class="file-input">
                        <img src="/images/{{$item_images_set->text_pict_image->preview_link}}" class="preview" data-field-name="text_pict" data-block="dom_all_images"  data-group="images_set" data-item-id="{{$item_images_set->id_field}}">
                        <input type="file" accept="image/*" class="input_file group_field" data-field-name="text_pict" data-field-type="image" data-block="dom_all_images" data-group="images_set" data-item-id="{{$item_images_set->id_field}}" data-entity="groupitem">                </label>
                    </div>
                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_images_set->text_pict_image->alt}}" data-item-id="{{$item_images_set->id_field}}" data-field-name="text_pict" data-block="dom_all_images">
                    </div>
                </div>
            </div>
</div>
<div class="field-wrap buttons_block">
<div class="col-1-2"><button type="button" class="any_delete button dark" data-block="dom_all_images" data-group="images_set" data-entity="groupitem" data-item-id="{{$item_images_set->id_field}}" data-descr="Эл. первой группы">Удалить</button>
</div><div class="col-1-2 disabled"><button type="button" class="any_save" data-block="dom_all_images" data-group="images_set" data-entity="groupitem" data-item-id="{{$item_images_set->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
</div></div>
</div>
</li>