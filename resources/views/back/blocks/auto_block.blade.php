@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование страницы "Готовые решения"'?>
    <div class="select-content">
        <ul class="list">
            <li class="item"><a href="#content" class="select-item active">Информация</a></li>
        </ul>
    </div>
    <div class="content-wrap">
        <div class="field-wrap ">
            <label class="field-title"> Заголовок Готовых решений </label>
            <input type="text" data-field-type="string" data-field-name="auto_title" data-block="auto_block"
                   class="input-field block_field" value="{{$auto_block->auto_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Описание Готовых решений </label>
            <input type="text" data-field-type="string" data-field-name="auto_description" data-block="auto_block"
                   class="input-field block_field" value="{{$auto_block->auto_description_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Заголовок Готовых решений IIKO </label>
            <input type="text" data-field-type="string" data-field-name="iiko_title" data-block="auto_block"
                   class="input-field block_field" value="{{$auto_block->iiko_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Описание Готовых решений IIKO </label>
            <input type="text" data-field-type="string" data-field-name="iiko_description" data-block="auto_block"
                   class="input-field block_field" value="{{$auto_block->iiko_description_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Изображение Готовых решений </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="auto_background" data-field-type="image"
                               data-block="auto_block" value="{{$auto_block->auto_background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="auto_background" data-field-type="image"
                               data-block="auto_block" value="{{$auto_block->auto_background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="auto_background" data-field-type="image"
                               data-block="auto_block" value="{{$auto_block->auto_background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="auto_background" data-field-type="image"
                               data-block="auto_block" value="{{$auto_block->auto_background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="auto_background"
                               data-field-type="image" data-block="auto_block"
                               value="{{$auto_block->auto_background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="auto_background" data-field-type="image"
                               data-block="auto_block" value="{{$auto_block->auto_background_image->icon_link}}">
                    </div>

                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$auto_block->auto_background_image->preview_link}}" class="preview"
                                 data-field-name="auto_background" data-block="auto_block">
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="auto_background" data-field-type="image" data-block="auto_block">
                        </label>
                    </div>

                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text input-field"
                               value="{{$auto_block->auto_background_image->alt}}" data-field-name="auto_background"
                               data-block="auto_block">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Изображение Готовых Решений IIKO </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="iiko_background" data-field-type="image"
                               data-block="auto_block" value="{{$auto_block->iiko_background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="iiko_background" data-field-type="image"
                               data-block="auto_block" value="{{$auto_block->iiko_background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="iiko_background" data-field-type="image"
                               data-block="auto_block" value="{{$auto_block->iiko_background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="iiko_background" data-field-type="image"
                               data-block="auto_block" value="{{$auto_block->iiko_background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="iiko_background"
                               data-field-type="image" data-block="auto_block"
                               value="{{$auto_block->iiko_background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="iiko_background" data-field-type="image"
                               data-block="auto_block" value="{{$auto_block->iiko_background_image->icon_link}}">
                    </div>

                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$auto_block->iiko_background_image->preview_link}}" class="preview"
                                 data-field-name="iiko_background" data-block="auto_block">
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="iiko_background" data-field-type="image" data-block="auto_block">
                        </label>
                    </div>

                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text input-field"
                               value="{{$auto_block->iiko_background_image->alt}}" data-field-name="iiko_background"
                               data-block="auto_block">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <div class="row-title">
                <div class="col-1-5">Название</div>
                <div class="col-1-5">Дата изменения</div>
                <div class="col-1-5">Позиция</div>
                <div class="col-1-5"></div>
                <div class="col-1-5"></div>
            </div>
            <ul class="group-block group_container page-group" data-block="auto_block" data-group="auto" data-owner-id="0">
                @foreach($auto_block->auto_group as $item_auto )
                    @include('back.blocks.groupitems.auto_block.auto')
                @endforeach
            </ul>
            <div class="col-1-2">
                <button class="any_create button blue" data-block="auto_block" data-group="auto"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <div class="col-1-2 disabled"></div>
        </div>
    </div>
    <div class="seo-wrap"></div>


    <div class="field-wrap buttons disabled">
        <button class="btn btn-primary pull-right any_save" data-block="auto_block" data-entity="block" data-descr="">
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