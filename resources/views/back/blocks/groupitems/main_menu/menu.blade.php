<li class="group" data-group-id="{{$item_menu->id_field}}"><div class="title-block">
</div>
<div class="block ">
<div class="field-wrap ">
<label class="field-title"> Пункт меню </label>
<input type="text" data-field-type="string" data-field-name="menu_text" data-block="main_menu" data-group="menu" class="input-field group_field" value="{{$item_menu->menu_text_field}}" data-item-id="{{$item_menu->id_field}}" placeholder="Строка">
</div>
<div class="field-wrap ">
<label class="field-title"> Текст над заголовком </label>
<input type="text" data-field-type="string" data-field-name="small_text" data-block="main_menu" data-group="menu" class="input-field group_field" value="{{$item_menu->small_text_field}}" data-item-id="{{$item_menu->id_field}}" placeholder="Строка">
</div>
<div class="field-wrap buttons_block">
<div class="col-1-2"><button type="button" class="any_delete button dark disabled" data-block="main_menu" data-group="menu" data-entity="groupitem" data-item-id="{{$item_menu->id_field}}" data-descr="Эл. первой группы">Удалить</button>
</div><div class="col-1-2 disabled"><button type="button" class="any_save" data-block="main_menu" data-group="menu" data-entity="groupitem" data-item-id="{{$item_menu->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
</div></div>
</div>
</li>