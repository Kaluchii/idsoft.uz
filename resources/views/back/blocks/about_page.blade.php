@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование страницы "О компании"'?>
    <div class="select-content">
        <ul class="list">
            <li class="item"><a href="#content" class="select-item active">Информация</a></li>
            <li class="item"><a href="#seo" class="select-item">Настройки SEO</a></li>
        </ul>
    </div>
    <div class="content-wrap">
        <div class="field-wrap ">
            <label class="field-title"> Название страницы </label>
            <input type="text" data-field-type="string" data-field-name="page_name" data-block="about_page"
                   class="input-field block_field" value="{{$about_page->page_name_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Титульное изображение </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="background" data-field-type="image"
                               data-block="about_page" value="{{$about_page->background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="background" data-field-type="image"
                               data-block="about_page" value="{{$about_page->background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="background" data-field-type="image"
                               data-block="about_page" value="{{$about_page->background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="background" data-field-type="image"
                               data-block="about_page" value="{{$about_page->background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="background" data-field-type="image"
                               data-block="about_page" value="{{$about_page->background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="background" data-field-type="image"
                               data-block="about_page" value="{{$about_page->background_image->icon_link}}">
                    </div>

                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$about_page->background_image->preview_link}}" class="preview"
                                 data-field-name="background" data-block="about_page">
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="background" data-field-type="image" data-block="about_page">
                        </label>
                    </div>

                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text input-field"
                               value="{{$about_page->background_image->alt}}" data-field-name="background"
                               data-block="about_page">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Вводный текст </label>
            <textarea data-field-type="text" data-field-name="description" data-block="about_page"
                      class="input block_field"
                      placeholder="Текст">{{$about_page->description_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Текст "Свяжитесь с нами" </label>
            <input type="text" data-field-type="string" data-field-name="consult" data-block="about_page"
                   class="input-field block_field" value="{{$about_page->consult_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Время работы </label>
            <input type="text" data-field-type="string" data-field-name="works_time" data-block="about_page"
                   class="input-field block_field" value="{{$about_page->works_time_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <div class="row-title">
                <div class="col-1-5">Название</div>
                <div class="col-1-5">Дата изменения</div>
                <div class="col-1-5">Позиция</div>
                <div class="col-1-5"></div>
                <div class="col-1-5"></div>
            </div>
            <ul class="group-block group_container page-group" data-block="about_page" data-group="staff"
                data-owner-id="0">
                @foreach($about_page->staff_group as $item_staff )
                    @include('back.blocks.groupitems.about_page.staff')
                @endforeach
            </ul>
            <div class="col-1-2">
                <button class="any_create button blue" data-block="about_page" data-group="staff"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <div class="col-1-2 disabled"></div>
        </div>
        <div class="field-wrap buttons disabled">
            <button class="btn btn-primary pull-right any_save" data-block="about_page" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>

    <div class="seo-wrap">
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Тайтл страницы </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="about_page"
                   class="input-field block_field" value="{{$about_page->page_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Ключевые слова </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="about_page"
                   class="input-field block_field" value="{{$about_page->seo_keywords_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Описание </label>
            <textarea type="text" data-field-type="string" data-field-name="seo_description" data-block="about_page"
                      class="input-field block_field no-trumbowyg"
                      placeholder="Строка">{{$about_page->seo_description_field}}</textarea>
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