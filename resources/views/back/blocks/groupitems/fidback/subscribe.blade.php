<li class="group" data-group-id="{{$item_subscribe->id_field}}"><div class="title-block">
</div>
<div class="block ">
<div class="field-wrap ">
<label class="field-title"> Заголовок </label>
<input type="text" data-field-type="string" data-field-name="mail" data-block="fidback" data-group="subscribe" class="input-field group_field" value="{{$item_subscribe->mail_field}}" data-item-id="{{$item_subscribe->id_field}}" placeholder="Строка">
</div>
<div class="field-wrap ">
<label class="field-title"> Заголовок </label>
<div class="checkbox"><label class="click-wrap"><input type="checkbox" class="checkbox-widget input group_field" data-field-type="bool" data-item-id="{{$item_subscribe->id_field}}" data-field-name="mailed" data-block="fidback"  value="{{$item_subscribe->mailed_field}}"><label for="checkbox-widget" class="checkbox-label">Вкл</label></label></div>
</div>
<div class="field-wrap buttons_block">
<div class="col-1-2"><button type="button" class="any_delete button dark" data-block="fidback" data-group="subscribe" data-entity="groupitem" data-item-id="{{$item_subscribe->id_field}}" data-descr="Эл. первой группы">Удалить</button>
</div><div class="col-1-2 disabled"><button type="button" class="any_save" data-block="fidback" data-group="subscribe" data-entity="groupitem" data-item-id="{{$item_subscribe->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
</div></div>
</div>
</li>