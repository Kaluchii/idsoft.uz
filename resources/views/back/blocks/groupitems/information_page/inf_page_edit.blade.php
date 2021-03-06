@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование информационной страницы — "'.$item_inf_page->page_name_field.'"'?>
    <li class="group" data-group-id="{{$item_inf_page->id_field}}">
        <div class="select-content">
            <ul class="list">
                <li class="item"><a href="#content" class="select-item active">Информация</a></li>
                <li class="item"><a href="#seo" class="select-item">Настройки SEO</a></li>
            </ul>
        </div>
        <div class="content-wrap">
            <div class="field-wrap ">
                <label class="field-title"> Название страницы </label>
                <input type="text" data-field-type="string" data-field-name="page_name" data-block="information_page"
                       data-group="inf_page" class="input-field group_field" value="{{$item_inf_page->page_name_field}}"
                       data-item-id="{{$item_inf_page->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Вид ссылки в адресной строке </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="information_page"
                       data-group="inf_page" class="input-field group_pre_field" value="{{$item_inf_page->slug_field}}"
                       data-item-id="{{$item_inf_page->id_field}}" placeholder="Строка"
                       @if($item_inf_page->slug_field == 'about')
                       readonly
                       @elseif($item_inf_page->slug_field == 'support')
                       readonly
                       @elseif($item_inf_page->slug_field == 'drivers-and-docs')
                       readonly
                       @elseif($item_inf_page->slug_field == 'partners')
                       readonly
                        @endif
                >
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Титульное изображение </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="background" data-group="inf_page"
                                   data-field-type="image" data-item-id="{{$item_inf_page->id_field}}"
                                   data-block="information_page" value="{{$item_inf_page->background_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="background"
                                   data-group="inf_page" data-field-type="image"
                                   data-item-id="{{$item_inf_page->id_field}}" data-block="information_page"
                                   value="{{$item_inf_page->background_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="background" data-group="inf_page"
                                   data-field-type="image" data-item-id="{{$item_inf_page->id_field}}"
                                   data-block="information_page"
                                   value="{{$item_inf_page->background_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="background" data-group="inf_page"
                                   data-field-type="image" data-item-id="{{$item_inf_page->id_field}}"
                                   data-block="information_page"
                                   value="{{$item_inf_page->background_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="background"
                                   data-group="inf_page" data-field-type="image"
                                   data-item-id="{{$item_inf_page->id_field}}" data-block="information_page"
                                   value="{{$item_inf_page->background_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="background" data-group="inf_page"
                                   data-field-type="image" data-item-id="{{$item_inf_page->id_field}}"
                                   data-block="information_page"
                                   value="{{$item_inf_page->background_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <label class="file-input">
                                <img src="/images/{{$item_inf_page->background_image->preview_link}}" class="preview"
                                     data-field-name="background" data-block="information_page" data-group="inf_page"
                                     data-item-id="{{$item_inf_page->id_field}}">
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="background" data-field-type="image"
                                       data-block="information_page" data-group="inf_page"
                                       data-item-id="{{$item_inf_page->id_field}}" data-entity="groupitem"> </label>
                        </div>
                        <div class="action-block">
                            <label class="alt-title">Альтернативный текст (если изображение не удалось
                                загрузить)</label>
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_inf_page->background_image->alt}}"
                                   data-item-id="{{$item_inf_page->id_field}}" data-field-name="background"
                                   data-block="information_page">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Основной текст </label>
                <textarea data-field-type="text" data-field-name="content" data-block="information_page"
                          data-group="inf_page" class="input group_field" data-item-id="{{$item_inf_page->id_field}}"
                          placeholder="Текст">{{$item_inf_page->content_field}}</textarea>
            </div>

        </div>
        <div class="seo-wrap">
            <div class="field-wrap ">
                <label class="field-title"> СЕО: Тайтл страницы </label>
                <input type="text" data-field-type="string" data-field-name="page_title" data-block="information_page"
                       data-group="inf_page" class="input-field group_field"
                       value="{{$item_inf_page->page_title_field}}" data-item-id="{{$item_inf_page->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> СЕО: Ключевые слова </label>
                <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="information_page"
                       data-group="inf_page" class="input-field group_field"
                       value="{{$item_inf_page->seo_keywords_field}}" data-item-id="{{$item_inf_page->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> СЕО: Описание </label>
                <textarea type="text" data-field-type="string" data-field-name="seo_description"
                       data-block="information_page" data-group="inf_page" class="input-field group_field no-trumbowyg" data-item-id="{{$item_inf_page->id_field}}"
                       placeholder="Строка">{{$item_inf_page->seo_description_field}}</textarea>
            </div>
        </div>

        <div class="field-wrap buttons disabled">
            <button type="button" class="any_save" data-block="information_page" data-group="inf_page"
                    data-entity="groupitem" data-item-id="{{$item_inf_page->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
        <div class="save-panel">
            <div class="status-panel ">

            </div>
            <div class="tool-panel">
                <div class="column">
                    <div class="show">
                        <div class="wrap-checkbox disabled">
                            <label class="show-it-label"><input type="checkbox" class="show-it-checkbox ">Показать на сайте</label>
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
    </li>
@endsection