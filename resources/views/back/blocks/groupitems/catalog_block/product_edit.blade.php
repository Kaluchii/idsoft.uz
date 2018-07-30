@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование информации о товаре — "'.$item_product->product_name_field.'"'?>
    <div class="select-content">
        <ul class="list">
            <li class="item"><a href="#content" class="select-item active">Информация</a></li>
            <li class="item"><a href="#seo" class="select-item">Настройки SEO</a></li>
        </ul>
    </div>
    <div class="content-wrap">
        <div class="field-wrap ">
            <label class="field-title"> Название </label>
            <input type="text" data-field-type="string" data-field-name="product_name"
                   data-block="catalog_block" data-group="product"
                   class="input-field group_field" value="{{$item_product->product_name_field}}"
                   data-item-id="{{$item_product->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Вид ссылки в адресной строке </label>
            <input type="text" data-field-type="string" data-field-name="slug"
                   data-block="catalog_block" data-group="product"
                   class="input-field group_pre_field" value="{{$item_product->slug_field}}"
                   data-item-id="{{$item_product->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title">
                Изображение </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag">
                        <input type="text"
                               value="Отпустите клавишу мыши, чтобы загрузить файл">
                    </div>
                    <div class="img-hide-block">
                        <input type="hidden"
                               class="prefix"
                               data-field-name="product_base_photo"
                               data-group="product"
                               data-field-type="image"
                               data-item-id="{{$item_product->id_field}}"
                               data-block="catalog_block"
                               value="{{$item_product->product_base_photo_image->prefix}}">
                        <input type="hidden"
                               class="original_link"
                               data-field-name="product_base_photo"
                               data-group="product"
                               data-field-type="image"
                               data-item-id="{{$item_product->id_field}}"
                               data-block="catalog_block"
                               value="{{$item_product->product_base_photo_image->original_link}}">
                        <input type="hidden"
                               class="preview_link"
                               data-field-name="product_base_photo"
                               data-group="product"
                               data-field-type="image"
                               data-item-id="{{$item_product->id_field}}"
                               data-block="catalog_block"
                               value="{{$item_product->product_base_photo_image->preview_link}}">
                        <input type="hidden"
                               class="primary_link"
                               data-field-name="product_base_photo"
                               data-group="product"
                               data-field-type="image"
                               data-item-id="{{$item_product->id_field}}"
                               data-block="catalog_block"
                               value="{{$item_product->product_base_photo_image->primary_link}}">
                        <input type="hidden"
                               class="secondary_link"
                               data-field-name="product_base_photo"
                               data-group="product"
                               data-field-type="image"
                               data-item-id="{{$item_product->id_field}}"
                               data-block="catalog_block"
                               value="{{$item_product->product_base_photo_image->secondary_link}}">
                        <input type="hidden"
                               class="icon_link"
                               data-field-name="product_base_photo"
                               data-group="product"
                               data-field-type="image"
                               data-item-id="{{$item_product->id_field}}"
                               data-block="catalog_block"
                               value="{{$item_product->product_base_photo_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$item_product->product_base_photo_image->preview_link}}"
                                 class="preview"
                                 data-field-name="product_base_photo"
                                 data-block="catalog_block"
                                 data-group="product"
                                 data-item-id="{{$item_product->id_field}}">
                            <input type="file"
                                   accept="image/*"
                                   class="input_file group_field"
                                   data-field-name="product_base_photo"
                                   data-field-type="image"
                                   data-block="catalog_block"
                                   data-group="product"
                                   data-item-id="{{$item_product->id_field}}"
                                   data-entity="groupitem">
                        </label>
                    </div>
                    <div class="action-block">
                        <label class="alt-title">Альтернативный
                            текст
                            (если
                            изображение
                            не
                            удалось
                            загрузить)</label>
                        <input type="text"
                               placeholder="alt текст"
                               class="alt-text"
                               value="{{$item_product->product_base_photo_image->alt}}"
                               data-item-id="{{$item_product->id_field}}"
                               data-field-name="product_base_photo"
                               data-block="catalog_block">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Краткое описание </label>
            <input type="text" data-field-type="string" data-field-name="small_description"
                   data-block="catalog_block" data-group="product"
                   class="input-field group_field"
                   value="{{$item_product->small_description_field}}"
                   data-item-id="{{$item_product->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title">Валюта</label>
            <select type="number" data-field-type="numb"
                    data-field-name="course_id" data-block="catalog_block"
                    data-group="product"
                    data-item-id="{{$item_product->id_field}}"
                    class="input-field group_field">
                @foreach($cor as $c_item)
                    <option value="{{$c_item->id_field}}" @if($item_product->course_id_field == $c_item->id_field) selected @endif>{{$c_item->course_name_field}}</option>
                @endforeach
            </select>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Цена без скидки ( При наличии скидки введите сюда цену без скидки )</label>
            <input type="number" data-field-type="numb"
                   data-field-name="product_sale" data-block="catalog_block"
                   data-group="product"
                   data-item-id="{{$item_product->id_field}}"
                   class="input-field group_field"
                   value="{{$item_product->product_sale_field}}"
                   placeholder="Целое число">
        </div>
        <div class="field-wrap ">
            <label class="field-title">Текущая цена</label>
            <input type="number" data-field-type="numb"
                   data-field-name="product_cost" data-block="catalog_block"
                   data-group="product"
                   data-item-id="{{$item_product->id_field}}"
                   class="input-field group_field"
                   value="{{$item_product->product_cost_field}}"
                   placeholder="Целое число">
        </div>
        <div class="field-wrap ">
            <label class="field-title">
                Описание </label>
                                                                            <textarea data-field-type="text"
                                                                                      data-field-name="product_description"
                                                                                      data-block="catalog_block"
                                                                                      data-group="product"
                                                                                      class="input group_field"
                                                                                      data-item-id="{{$item_product->id_field}}"
                                                                                      placeholder="Текст">{{$item_product->product_description_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title">
                Производитель </label>
                                                                            <textarea data-field-type="text"
                                                                                      data-field-name="builder"
                                                                                      data-block="catalog_block"
                                                                                      data-group="product"
                                                                                      class="input group_field"
                                                                                      data-item-id="{{$item_product->id_field}}"
                                                                                      placeholder="Текст">{{$item_product->builder_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title">
                Для чего применяется </label>
                                                                            <textarea data-field-type="text"
                                                                                      data-field-name="why_apply"
                                                                                      data-block="catalog_block"
                                                                                      data-group="product"
                                                                                      class="input group_field"
                                                                                      data-item-id="{{$item_product->id_field}}"
                                                                                      placeholder="Текст">{{$item_product->why_apply_field}}</textarea>
        </div>

        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Дополнительные изображения</label>
                <button class="any_create button blue" data-block="catalog_block" data-group="product_image"
                        data-descr="Эл. первой группы" data-owner-id="{{$item_product->id_field}}">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="catalog_block" data-group="product_image"
                data-owner-id="{{$item_product->id_field}}">
                @foreach($item_product->product_image_group as $item_product_image )
                    @include('back.blocks.groupitems.catalog_block.product_image')
                @endforeach
            </ul>
        </div>

        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Используется в автоматизации</label>
                <button class="any_create button blue" data-block="catalog_block" data-group="product_auto"
                        data-descr="Эл. первой группы" data-owner-id="{{$item_product->id_field}}">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="catalog_block" data-group="product_auto"
                data-owner-id="{{$item_product->id_field}}">
                @foreach($item_product->product_auto_group as $item_product_auto )
                    @include('back.blocks.groupitems.catalog_block.product_auto')
                @endforeach
            </ul>
        </div>

        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Используемое ПО</label>
                <button class="any_create button blue" data-block="catalog_block" data-group="soft_related"
                        data-descr="Эл. первой группы" data-owner-id="{{$item_product->id_field}}">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="catalog_block" data-group="soft_related"
                data-owner-id="{{$item_product->id_field}}">
                @foreach($item_product->soft_related_group as $item_soft_related )
                    @include('back.blocks.groupitems.catalog_block.soft_related')
                @endforeach
            </ul>
        </div>
        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Отзывы</label>
                <button class="any_create button blue" data-block="catalog_block" data-group="product_reviews"
                        data-descr="Эл. первой группы" data-owner-id="{{$item_product->id_field}}">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="catalog_block" data-group="product_reviews"
                data-owner-id="{{$item_product->id_field}}">
                @foreach($item_product->product_reviews_group as $item_product_reviews )
                    @include('back.blocks.groupitems.catalog_block.product_reviews')
                @endforeach
            </ul>
        </div>
        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Сопутствующие товары</label>
                <button class="any_create button blue" data-block="catalog_block" data-group="product_related"
                        data-descr="Эл. первой группы" data-owner-id="{{$item_product->id_field}}">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="catalog_block" data-group="product_related"
                data-owner-id="{{$item_product->id_field}}">
                @foreach($item_product->product_related_group as $item_product_related )
                    @include('back.blocks.groupitems.catalog_block.product_related')
                @endforeach
            </ul>
        </div>
        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Характеристики</label>
                <button class="any_create button blue" data-block="catalog_block" data-group="product_features"
                        data-descr="Эл. первой группы" data-owner-id="{{$item_product->id_field}}">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="catalog_block" data-group="product_features"
                data-owner-id="{{$item_product->id_field}}">
                @foreach($item_product->product_features_group as $item_product_features )
                    @include('back.blocks.groupitems.catalog_block.product_features')
                @endforeach
            </ul>
        </div>
    </div>
    <div class="seo-wrap">
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Тайтл страницы </label>
            <input type="text" data-field-type="string" data-field-name="page_title"
                   data-block="catalog_block" data-group="product"
                   class="input-field group_field" value="{{$item_product->page_title_field}}"
                   data-item-id="{{$item_product->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Ключевые слова </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords"
                   data-block="catalog_block" data-group="product"
                   class="input-field group_field" value="{{$item_product->seo_keywords_field}}"
                   data-item-id="{{$item_product->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Описание </label>
            <textarea type="text" data-field-type="string" data-field-name="seo_description"
                   data-block="catalog_block" data-group="product"
                   class="input-field group_field no-trumbowyg"
                   data-item-id="{{$item_product->id_field}}" placeholder="Строка">{{$item_product->seo_description_field}}</textarea>
        </div>
    </div>
    <div class="disabled">
        <div class="field-wrap buttons disabled">
            <button type="button" class="any_save" data-block="catalog_block" data-group="product"
                    data-entity="groupitem" data-item-id="{{$item_product->id_field}}"
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
                    <div class="wrap-checkbox">
                        <label class="show-it-label"><input type="checkbox" class="show-it-checkbox group_pre_field"
                                                            data-field-type="bool" data-field-name="show"
                                                            data-block="catalog_block" data-group="product"
                                                            @if($item_product->show_field) checked @endif
                                                            data-item-id="{{$item_product->id_field}}"
                            >Показать на
                            сайте</label>
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