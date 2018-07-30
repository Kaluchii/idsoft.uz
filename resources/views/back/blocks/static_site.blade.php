@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование статичных элементов сайта'?>
    <div class="select-content">
        <ul class="list">
            <li class="item"><a href="#content" class="select-item active">Информация</a></li>
            <li class="item"><a href="#seo" class="select-item">Настройки SEO</a></li>
        </ul>
    </div>
    <div class="content-wrap">
        <div class="field-wrap ">
            <label class="field-title"> Заголовок в верхней части сайта </label>
            <input type="text" data-field-type="string" data-field-name="logo_text" data-block="static_site"
                   class="input-field block_field" value="{{$static_site->logo_text_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Логотип </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->icon_link}}">
                    </div>

                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$static_site->logo_image->preview_link}}" class="preview"
                                 data-field-name="logo" data-block="static_site">
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="logo" data-field-type="image" data-block="static_site">
                        </label>
                    </div>

                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text input-field"
                               value="{{$static_site->logo_image->alt}}" data-field-name="logo" data-block="static_site">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Телефоны в шапке</label>
                <button class="any_create button blue" data-block="static_site" data-group="phones"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="static_site" data-group="phones" data-owner-id="0">
                @foreach($static_site->phones_group as $item_phones )
                    @include('back.blocks.groupitems.static_site.phones')
                @endforeach
            </ul>
        </div>
        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Блок преимуществ в футере</label>
                <button class="any_create button blue disabled" data-block="static_site" data-group="adventages"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="static_site" data-group="adventages" data-owner-id="0">
                @foreach($static_site->adventages_group as $item_adventages )
                    @include('back.blocks.groupitems.static_site.adventages')
                @endforeach
            </ul>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Копирайт в футере </label>
            <input type="text" data-field-type="string" data-field-name="copyright" data-block="static_site"
                   class="input-field block_field" value="{{$static_site->copyright_field}}" placeholder="Строка">
        </div>
    </div>
    <div class="seo-wrap">
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Тайтл страницы </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_site"
                   class="input-field block_field" value="{{$static_site->page_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Ключевые слова </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="static_site"
                   class="input-field block_field" value="{{$static_site->seo_keywords_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Описание </label>
            <textarea type="text" data-field-type="string" data-field-name="seo_description" data-block="static_site"
                   class="input-field block_field no-trumbowyg"  placeholder="Строка">{{$static_site->seo_description_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО-Текст (под футером) </label>
            <textarea type="text" data-field-type="text" data-field-name="seo_text" data-block="static_site"
                      class="input-field block_field"  placeholder="Строка">{{$static_site->seo_text_field}}</textarea>
        </div>
    </div>



    <div class="field-wrap buttons disabled">
        <button class="btn btn-primary pull-right any_save" data-block="static_site" data-entity="block" data-descr="">
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
@endsection