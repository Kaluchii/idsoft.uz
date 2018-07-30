@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование страницы "Wipon"'?>
    <div class="select-content">
        <ul class="list">
            <li class="item"><a href="#content" class="select-item active">Информация</a></li>
            <li class="item"><a href="#seo" class="select-item">Настройки SEO</a></li>
        </ul>
    </div>
    <div class="content-wrap">
        <div class="field-wrap ">
            <label class="field-title"> Заголовок </label>
            <input type="text" data-field-type="string" data-field-name="auto_title" data-block="wipon"
                   class="input-field block_field" value="{{$wipon->auto_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Описание </label>
            <input type="text" data-field-type="string" data-field-name="auto_description" data-block="wipon"
                   class="input-field block_field" value="{{$wipon->auto_description_field}}" placeholder="Строка">
        </div>

        <div class="field-wrap ">
            <label class="field-title"> Название </label>
            <input type="text" data-field-type="string" data-field-name="page_name" data-block="wipon"
                   class="input-field block_field" value="{{$wipon->page_name_field}}"
                   placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Титульное изображение </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text"
                                             value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="background"
                               data-field-type="image"
                               data-block="wipon" value="{{$wipon->background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="background"
                               data-field-type="image"
                               data-block="wipon"
                               value="{{$wipon->background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="background"
                               data-field-type="image"
                               data-block="wipon"
                               value="{{$wipon->background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="background"
                               data-field-type="image"
                               data-block="wipon"
                               value="{{$wipon->background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="background"
                               data-field-type="image"
                               data-block="wipon"
                               value="{{$wipon->background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="background"
                               data-field-type="image"
                               data-block="wipon"
                               value="{{$wipon->background_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$wipon->background_image->preview_link}}"
                                 class="preview" data-field-name="background" data-block="wipon"
                                >
                            <input type="file" accept="image/*" class="input_file block_field"
                                   data-field-name="background" data-field-type="image"
                                   data-block="wipon"
                                   data-entity="block"> </label>
                    </div>
                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось
                            загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$wipon->background_image->alt}}"
                               data-field-name="background"
                               data-block="wipon">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Изображение на главной странице </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="main_background" data-field-type="image"
                               data-block="wipon" value="{{$wipon->main_background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="main_background" data-field-type="image"
                               data-block="wipon" value="{{$wipon->main_background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="main_background" data-field-type="image"
                               data-block="wipon" value="{{$wipon->main_background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="main_background" data-field-type="image"
                               data-block="wipon" value="{{$wipon->main_background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="main_background"
                               data-field-type="image" data-block="wipon"
                               value="{{$wipon->main_background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="main_background" data-field-type="image"
                               data-block="wipon" value="{{$wipon->main_background_image->icon_link}}">
                    </div>

                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$wipon->main_background_image->preview_link}}" class="preview"
                                 data-field-name="main_background" data-block="wipon">
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="main_background" data-field-type="image" data-block="wipon">
                        </label>
                    </div>

                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text input-field"
                               value="{{$wipon->main_background_image->alt}}" data-field-name="main_background"
                               data-block="wipon">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Описание </label>
            <textarea data-field-type="text" data-field-name="content" data-block="wipon"
                      class="input block_field"
                     
                      placeholder="Текст">{{$wipon->content_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Результаты внедрения </label>
            <textarea data-field-type="text" data-field-name="system_features"
                      data-block="wipon" class="input block_field"
                     
                      placeholder="Текст">{{$wipon->system_features_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Возможности системы </label>
            <textarea data-field-type="text" data-field-name="vozm" data-block="wipon"
                      class="input block_field"
                     
                      placeholder="Текст">{{$wipon->vozm_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Рассрочка </label>
            <textarea data-field-type="text" data-field-name="pre_cost_text" data-block="wipon"
                      class="input block_field"
                     
                      placeholder="Текст">{{$wipon->pre_cost_text_field}}</textarea>
        </div>

        <div class="field-wrap ">
            <label class="field-title"> Гарантия </label>
            <textarea data-field-type="text" data-field-name="warranty" data-block="wipon"
                      class="input block_field"
                     
                      placeholder="Текст">{{$wipon->warranty_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title">Валюта</label>
            <select data-field-type="numb"
                    data-field-name="course_id"
                    data-block="wipon"
                   
                    class="input-field block_field">
                @foreach($cor as $c_item)
                    <option value="{{$c_item->id_field}}" @if($wipon->course_id_field == $c_item->id_field) selected @endif>{{$c_item->course_name_field}}</option>
                @endforeach
            </select>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Цена без скидки </label>
            <input type="number" data-field-type="numb" data-field-name="auto_sale"
                   data-block="wipon"
                   class="input-field block_field"
                   value="{{$wipon->auto_sale_field}}" placeholder="Целое число">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Цена с учетом скидки </label>
            <input type="number" data-field-type="numb" data-field-name="auto_cost"
                   data-block="wipon"
                   class="input-field block_field"
                   value="{{$wipon->auto_cost_field}}" placeholder="Целое число">
        </div>

        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Преимущества</label>
                <button class="any_create button blue" data-block="wipon" data-group="wipon_adv"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="wipon" data-group="wipon_adv"
                data-owner-id="0">
                @foreach($wipon->wipon_adv_group as $item_wipon_adv )
                    @include('back.blocks.groupitems.wipon.wipon_adv')
                @endforeach
            </ul>
        </div>
        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Комплектация</label>
                <button class="any_create button blue" data-block="wipon" data-group="wipon_related"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="wipon" data-group="wipon_related"
                data-owner-id="0">
                @foreach($wipon->wipon_related_group as $item_wipon_related )
                    @include('back.blocks.groupitems.wipon.wipon_related')
                @endforeach
            </ul>
        </div>
    </div>
    <div class="seo-wrap">
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Тайтл страницы </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="wipon"
                   class="input-field block_field" value="{{$wipon->page_title_field}}"
                   placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Ключевые слова </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="wipon"
                   class="input-field block_field" value="{{$wipon->seo_keywords_field}}"
                   placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Описание </label>
            <textarea type="text" data-field-type="string" data-field-name="seo_description" data-block="wipon"
                      class="input-field block_field no-trumbowyg"
                      placeholder="Строка">{{$wipon->seo_description_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО-Текст (под футером) </label>
            <textarea type="text" data-field-type="text" data-field-name="seo_text" data-block="wipon"
                      class="input-field block_field"
                      placeholder="Строка">{{$wipon->seo_text_field}}</textarea>
        </div>
    </div>


    <div class="field-wrap buttons disabled">
        <button class="btn btn-primary pull-right any_save" data-block="wipon" data-entity="block" data-descr="">
            <span class="save_button">Сохранить</span>
        </button>
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