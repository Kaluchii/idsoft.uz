@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование информации о готовом решении — "'.$item_auto->page_name_field.'"'?>
    <li class="group" data-group-id="{{$item_auto->id_field}}">
        <div class="select-content">
            <ul class="list">
                <li class="item"><a href="#content" class="select-item active">Информация</a></li>
                <li class="item"><a href="#seo" class="select-item">Настройки SEO</a></li>
            </ul>
        </div>
        <div class="content-wrap">
            <div class="field-wrap ">
                <label class="field-title"> IIKO </label>
                <div class="checkbox"><label class="click-wrap"><input type="checkbox"
                                                                       class="checkbox-widget input group_field"
                                                                       data-field-type="bool"
                                                                       data-item-id="{{$item_auto->id_field}}"
                                                                       data-field-name="is_iiko"
                                                                       data-block="auto_block"
                                                                       value="{{$item_auto->is_iiko_field}}"
                            @if ($item_auto->is_iiko_field)
                                checked
                            @endif ><label
                                for="checkbox-widget" class="checkbox-label">Вкл</label></label>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Название </label>
                <input type="text" data-field-type="string" data-field-name="page_name" data-block="auto_block"
                       data-group="auto" class="input-field group_field" value="{{$item_auto->page_name_field}}"
                       data-item-id="{{$item_auto->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Вид ссылки в адресной строке </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="auto_block"
                       data-group="auto" class="input-field group_pre_field" value="{{$item_auto->slug_field}}"
                       data-item-id="{{$item_auto->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Титульное изображение </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text"
                                                 value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="background" data-group="auto"
                                   data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->background_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="background"
                                   data-group="auto" data-field-type="image"
                                   data-item-id="{{$item_auto->id_field}}" data-block="auto_block"
                                   value="{{$item_auto->background_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="background"
                                   data-group="auto" data-field-type="image"
                                   data-item-id="{{$item_auto->id_field}}" data-block="auto_block"
                                   value="{{$item_auto->background_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="background"
                                   data-group="auto" data-field-type="image"
                                   data-item-id="{{$item_auto->id_field}}" data-block="auto_block"
                                   value="{{$item_auto->background_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="background"
                                   data-group="auto" data-field-type="image"
                                   data-item-id="{{$item_auto->id_field}}" data-block="auto_block"
                                   value="{{$item_auto->background_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="background"
                                   data-group="auto" data-field-type="image"
                                   data-item-id="{{$item_auto->id_field}}" data-block="auto_block"
                                   value="{{$item_auto->background_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <label class="file-input">
                                <img src="/images/{{$item_auto->background_image->preview_link}}"
                                     class="preview" data-field-name="background" data-block="auto_block"
                                     data-group="auto" data-item-id="{{$item_auto->id_field}}">
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="background" data-field-type="image"
                                       data-block="auto_block" data-group="auto"
                                       data-item-id="{{$item_auto->id_field}}" data-entity="groupitem"> </label>
                        </div>
                        <div class="action-block">
                            <label class="alt-title">Альтернативный текст (если изображение не удалось
                                загрузить)</label>
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_auto->background_image->alt}}"
                                   data-item-id="{{$item_auto->id_field}}" data-field-name="background"
                                   data-block="auto_block">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="field-title">Категория автоматизируемых заведений</label>
                <select data-field-type="numb"
                        data-field-name="institution_id"
                        data-block="auto_block"
                        data-group="auto"
                        data-item-id="{{$item_auto->id_field}}"
                        class="input-field group_field">
                    @foreach($institution as $i_item)
                        <option value="{{$i_item->id_field}}" @if($item_auto->institution_id_field == $i_item->id_field) selected @endif>{{$i_item->seo_keywords_field}}</option>
                    @endforeach
                </select>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Описание </label>
                                <textarea data-field-type="text" data-field-name="content" data-block="auto_block"
                                          data-group="auto" class="input group_field"
                                          data-item-id="{{$item_auto->id_field}}"
                                          placeholder="Текст">{{$item_auto->content_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Результаты внедрения </label>
                                <textarea data-field-type="text" data-field-name="system_features"
                                          data-block="auto_block" data-group="auto" class="input group_field"
                                          data-item-id="{{$item_auto->id_field}}"
                                          placeholder="Текст">{{$item_auto->system_features_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Возможности системы </label>
                                <textarea data-field-type="text" data-field-name="vozm" data-block="auto_block"
                                          data-group="auto" class="input group_field"
                                          data-item-id="{{$item_auto->id_field}}"
                                          placeholder="Текст">{{$item_auto->vozm_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Рассрочка </label>
                                <textarea data-field-type="text" data-field-name="pre_cost_text" data-block="auto_block"
                                          data-group="auto" class="input group_field"
                                          data-item-id="{{$item_auto->id_field}}"
                                          placeholder="Текст">{{$item_auto->pre_cost_text_field}}</textarea>
            </div>

            <div class="field-wrap ">
                <label class="field-title"> Гарантия </label>
                                <textarea data-field-type="text" data-field-name="warranty" data-block="auto_block"
                                          data-group="auto" class="input group_field"
                                          data-item-id="{{$item_auto->id_field}}"
                                          placeholder="Текст">{{$item_auto->warranty_field}}</textarea>
            </div>

            {{--<div class="field-wrap ">--}}
                {{--<label class="field-title"> Заголовок </label>--}}
                                {{--<textarea data-field-type="text" data-field-name="rassr" data-block="auto_block"--}}
                                          {{--data-group="auto" class="input group_field"--}}
                                          {{--data-item-id="{{$item_auto->id_field}}"--}}
                                          {{--placeholder="Текст">{{$item_auto->rassr_field}}</textarea>--}}
            {{--</div>--}}


            {{--<div class="field-wrap ">--}}
                {{--<label class="field-title"> Заголовок </label>--}}
                {{--<div class="image-load">--}}
                    {{--<div class="drag-n-drop">--}}
                        {{--<div class="drag"><input type="text"--}}
                                                 {{--value="Отпустите клавишу мыши, чтобы загрузить файл"></div>--}}
                        {{--<div class="img-hide-block">--}}
                            {{--<input type="hidden" class="prefix" data-field-name="card_background"--}}
                                   {{--data-group="auto" data-field-type="image"--}}
                                   {{--data-item-id="{{$item_auto->id_field}}" data-block="auto_block"--}}
                                   {{--value="{{$item_auto->card_background_image->prefix}}">--}}
                            {{--<input type="hidden" class="original_link" data-field-name="card_background"--}}
                                   {{--data-group="auto" data-field-type="image"--}}
                                   {{--data-item-id="{{$item_auto->id_field}}" data-block="auto_block"--}}
                                   {{--value="{{$item_auto->card_background_image->original_link}}">--}}
                            {{--<input type="hidden" class="preview_link" data-field-name="card_background"--}}
                                   {{--data-group="auto" data-field-type="image"--}}
                                   {{--data-item-id="{{$item_auto->id_field}}" data-block="auto_block"--}}
                                   {{--value="{{$item_auto->card_background_image->preview_link}}">--}}
                            {{--<input type="hidden" class="primary_link" data-field-name="card_background"--}}
                                   {{--data-group="auto" data-field-type="image"--}}
                                   {{--data-item-id="{{$item_auto->id_field}}" data-block="auto_block"--}}
                                   {{--value="{{$item_auto->card_background_image->primary_link}}">--}}
                            {{--<input type="hidden" class="secondary_link" data-field-name="card_background"--}}
                                   {{--data-group="auto" data-field-type="image"--}}
                                   {{--data-item-id="{{$item_auto->id_field}}" data-block="auto_block"--}}
                                   {{--value="{{$item_auto->card_background_image->secondary_link}}">--}}
                            {{--<input type="hidden" class="icon_link" data-field-name="card_background"--}}
                                   {{--data-group="auto" data-field-type="image"--}}
                                   {{--data-item-id="{{$item_auto->id_field}}" data-block="auto_block"--}}
                                   {{--value="{{$item_auto->card_background_image->icon_link}}">--}}
                        {{--</div>--}}
                        {{--<div class="preview-block">--}}
                            {{--<label class="file-input">--}}
                                {{--<img src="/images/{{$item_auto->card_background_image->preview_link}}"--}}
                                     {{--class="preview" data-field-name="card_background" data-block="auto_block"--}}
                                     {{--data-group="auto" data-item-id="{{$item_auto->id_field}}">--}}
                                {{--<input type="file" accept="image/*" class="input_file group_field"--}}
                                       {{--data-field-name="card_background" data-field-type="image"--}}
                                       {{--data-block="auto_block" data-group="auto"--}}
                                       {{--data-item-id="{{$item_auto->id_field}}" data-entity="groupitem"> </label>--}}
                        {{--</div>--}}
                        {{--<div class="action-block">--}}
                            {{--<label class="alt-title">Альтернативный текст (если изображение не удалось--}}
                                {{--загрузить)</label>--}}
                            {{--<input type="text" placeholder="alt текст" class="alt-text"--}}
                                   {{--value="{{$item_auto->card_background_image->alt}}"--}}
                                   {{--data-item-id="{{$item_auto->id_field}}" data-field-name="card_background"--}}
                                   {{--data-block="auto_block">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="field-wrap ">
                <label class="field-title">Валюта</label>
                <select data-field-type="numb"
                        data-field-name="course_id"
                        data-block="auto_block"
                        data-group="auto"
                        data-item-id="{{$item_auto->id_field}}"
                        class="input-field group_field">
                    @foreach($cor as $c_item)
                        <option value="{{$c_item->id_field}}" @if($item_auto->course_id_field == $c_item->id_field) selected @endif>{{$c_item->course_name_field}}</option>
                    @endforeach
                </select>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Цена без скидки </label>
                <input type="number" data-field-type="numb" data-field-name="auto_sale"
                       data-block="auto_block" data-group="auto"
                       data-item-id="{{$item_auto->id_field}}" class="input-field group_field"
                       value="{{$item_auto->auto_sale_field}}" placeholder="Целое число">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Цена с учетом скидки </label>
                <input type="number" data-field-type="numb" data-field-name="auto_cost"
                       data-block="auto_block" data-group="auto"
                       data-item-id="{{$item_auto->id_field}}" class="input-field group_field"
                       value="{{$item_auto->auto_cost_field}}" placeholder="Целое число">
            </div>
            <div class="field-wrap group-wrap">
                <div class="group-title-row"><label class="group-title">Преимущества</label>
                    <button class="any_create button blue" data-block="auto_block" data-group="auto_adv"
                            data-descr="Эл. первой группы" data-owner-id="{{$item_auto->id_field}}">Добавить элемент
                    </button>
                </div>
                <ul class="group-block group_container" data-block="auto_block" data-group="auto_adv"
                    data-owner-id="{{$item_auto->id_field}}">
                    @foreach($item_auto->auto_adv_group as $item_auto_adv )
                        @include('back.blocks.groupitems.auto_block.auto_adv')
                    @endforeach
                </ul>
            </div>
            <div class="field-wrap group-wrap">
                <div class="group-title-row"><label class="group-title">Комплектация</label>
                    <button class="any_create button blue" data-block="auto_block" data-group="auto_related"
                            data-descr="Эл. первой группы" data-owner-id="{{$item_auto->id_field}}">Добавить элемент
                    </button>
                </div>
                <ul class="group-block group_container" data-block="auto_block" data-group="auto_related"
                    data-owner-id="{{$item_auto->id_field}}">
                    @foreach($item_auto->auto_related_group as $item_auto_related )
                        @include('back.blocks.groupitems.auto_block.auto_related')
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="seo-wrap">
            <div class="field-wrap ">
                <label class="field-title"> СЕО: Тайтл страницы </label>
                <input type="text" data-field-type="string" data-field-name="page_title" data-block="auto_block"
                       data-group="auto" class="input-field group_field" value="{{$item_auto->page_title_field}}"
                       data-item-id="{{$item_auto->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> СЕО: Ключевые слова </label>
                <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="auto_block"
                       data-group="auto" class="input-field group_field" value="{{$item_auto->seo_keywords_field}}"
                       data-item-id="{{$item_auto->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> СЕО: Описание </label>
                <textarea type="text" data-field-type="string" data-field-name="seo_description" data-block="auto_block"
                       data-group="auto" class="input-field group_field no-trumbowyg"
                       data-item-id="{{$item_auto->id_field}}" placeholder="Строка">{{$item_auto->seo_description_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> СЕО-Текст (под футером) </label>
                <textarea type="text" data-field-type="text" data-field-name="seo_text" data-block="auto_block"
                          data-group="auto" class="input-field group_field" data-item-id="{{$item_auto->id_field}}"
                          placeholder="Строка">{{$item_auto->seo_text_field}}</textarea>
            </div>
        </div>

        <div class="disabled">
            <div class="field-wrap buttons disabled">
                <button type="button" class="any_save" data-block="auto_block" data-group="auto"
                        data-entity="groupitem" data-item-id="{{$item_auto->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
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

    </li>@endsection