@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование информации о сотруднике — '.$item_staff->name_field?>
    <div class="content-wrap">
        <div class="block ">
            <div class="field-wrap ">
                <label class="field-title"> Имя </label>
                <input type="text" data-field-type="string" data-field-name="name" data-block="about_page"
                       data-group="staff" class="input-field group_field" value="{{$item_staff->name_field}}"
                       data-item-id="{{$item_staff->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Должность </label>
                <input type="text" data-field-type="string" data-field-name="position" data-block="about_page"
                       data-group="staff" class="input-field group_field" value="{{$item_staff->position_field}}"
                       data-item-id="{{$item_staff->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> О сотруднике </label>
                <textarea data-field-type="text" data-field-name="description" data-block="about_page"
                          data-group="staff" class="input group_field" data-item-id="{{$item_staff->id_field}}"
                          placeholder="Текст">{{$item_staff->description_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Фото сотрудника </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="foto" data-group="staff"
                                   data-field-type="image" data-item-id="{{$item_staff->id_field}}"
                                   data-block="about_page" value="{{$item_staff->foto_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="foto" data-group="staff"
                                   data-field-type="image" data-item-id="{{$item_staff->id_field}}"
                                   data-block="about_page" value="{{$item_staff->foto_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="foto" data-group="staff"
                                   data-field-type="image" data-item-id="{{$item_staff->id_field}}"
                                   data-block="about_page" value="{{$item_staff->foto_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="foto" data-group="staff"
                                   data-field-type="image" data-item-id="{{$item_staff->id_field}}"
                                   data-block="about_page" value="{{$item_staff->foto_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="foto" data-group="staff"
                                   data-field-type="image" data-item-id="{{$item_staff->id_field}}"
                                   data-block="about_page" value="{{$item_staff->foto_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="foto" data-group="staff"
                                   data-field-type="image" data-item-id="{{$item_staff->id_field}}"
                                   data-block="about_page" value="{{$item_staff->foto_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <label class="file-input">
                                <img src="/images/{{$item_staff->foto_image->preview_link}}" class="preview"
                                     data-field-name="foto" data-block="about_page" data-group="staff"
                                     data-item-id="{{$item_staff->id_field}}">
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="foto" data-field-type="image" data-block="about_page"
                                       data-group="staff" data-item-id="{{$item_staff->id_field}}"
                                       data-entity="groupitem"> </label>
                        </div>
                        <div class="action-block">
                            <label class="alt-title">Альтернативный текст (если изображение не удалось
                                загрузить)</label>
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_staff->foto_image->alt}}" data-item-id="{{$item_staff->id_field}}"
                                   data-field-name="foto" data-block="about_page">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap buttons disabled">
                <button type="button" class="any_save" data-block="about_page" data-group="staff"
                        data-entity="groupitem" data-item-id="{{$item_staff->id_field}}" data-descr="Эл. первой группы">
                    Сохранить
                </button>
            </div>
        </div>
    </div>

    <div class="save-panel">
        <div class="status-panel ">
        </div>
        <div class="tool-panel">
            <div class="column">
                <div class="show">
                    <div class="wrap-checkbox disabled">
                        <label class="show-it-label"><input type="checkbox"
                                                            class="show-it-checkbox ">Показать на сайте</label>
                    </div>
                </div>
                <button class="button dark show-it disabled">Посмотреть</button>
            </div>
            <div class="column">
                <div class="buttons-block">
                    <button class="button glass cancel disabled">Отменить изменения</button>
                    <button class="button blue save global-save">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
@endsection