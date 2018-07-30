@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование страницы "Бухгалтерия"'?>
    <div class="select-content">
        <ul class="list">
            <li class="item"><a href="#content" class="select-item active">Информация</a></li>
            <li class="item"><a href="#seo" class="select-item">Настройки SEO</a></li>
        </ul>
    </div>
    <div class="content-wrap">
        <div class="field-wrap ">
            <label class="field-title"> Название страницы </label>
            <input type="text" data-field-type="string" data-field-name="page_name" data-block="accounting_block"
                   class="input-field block_field" value="{{$accounting_block->page_name_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Титульное изображение </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="background" data-field-type="image"
                               data-block="accounting_block" value="{{$accounting_block->background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="background" data-field-type="image"
                               data-block="accounting_block" value="{{$accounting_block->background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="background" data-field-type="image"
                               data-block="accounting_block" value="{{$accounting_block->background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="background" data-field-type="image"
                               data-block="accounting_block" value="{{$accounting_block->background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="background" data-field-type="image"
                               data-block="accounting_block" value="{{$accounting_block->background_image->icon_link}}">
                    </div>

                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$accounting_block->background_image->preview_link}}" class="preview"
                                 data-field-name="background" data-block="accounting_block">
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="background" data-field-type="image" data-block="accounting_block">
                        </label>
                    </div>

                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text input-field"
                               value="{{$accounting_block->background_image->alt}}" data-field-name="background"
                               data-block="accounting_block">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Заголовок ( Для главной страницы ) </label>
            <input type="text" data-field-type="string" data-field-name="card_title" data-block="accounting_block"
                   class="input-field block_field" value="{{$accounting_block->card_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Краткое описание ( Для главной страницы ) </label>
            <input type="text" data-field-type="string" data-field-name="card_description" data-block="accounting_block"
                   class="input-field block_field" value="{{$accounting_block->card_description_field}}"
                   placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Изображение ( Для главной страницы ) </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="card_background" data-field-type="image"
                               data-block="accounting_block" value="{{$accounting_block->card_background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="card_background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->card_background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="card_background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->card_background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="card_background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->card_background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="card_background"
                               data-field-type="image" data-block="accounting_block"
                               value="{{$accounting_block->card_background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="card_background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->card_background_image->icon_link}}">
                    </div>

                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$accounting_block->card_background_image->preview_link}}" class="preview"
                                 data-field-name="card_background" data-block="accounting_block">
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="card_background" data-field-type="image" data-block="accounting_block">
                        </label>
                    </div>

                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text input-field"
                               value="{{$accounting_block->card_background_image->alt}}" data-field-name="card_background"
                               data-block="accounting_block">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Основной текст </label>
        <textarea data-field-type="text" data-field-name="content" data-block="accounting_block"
                  class="input block_field" placeholder="Текст">{{$accounting_block->content_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Основные преимущества </label>
        <textarea data-field-type="text" data-field-name="advantages" data-block="accounting_block"
                  class="input block_field" placeholder="Текст">{{$accounting_block->advantages_field}}</textarea>
        </div>
        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Преимущества</label>
                <button class="any_create button blue disabled" data-block="accounting_block" data-group="acc_adv"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="accounting_block" data-group="acc_adv" data-owner-id="0">
                @foreach($accounting_block->acc_adv_group as $item_acc_adv )
                    @include('back.blocks.groupitems.accounting_block.acc_adv')
                @endforeach
            </ul>
        </div>
        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Сотрудники</label>
                <button class="any_create button blue disabled" data-block="accounting_block" data-group="employs"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="accounting_block" data-group="employs" data-owner-id="0">
                @foreach($accounting_block->employs_group as $item_employs )
                    @include('back.blocks.groupitems.accounting_block.employs')
                @endforeach
            </ul>
        </div>
        <div class="field-wrap ">
            <div class="row-title">
                <div class="col-1-5">Название</div>
                <div class="col-1-5">Дата изменения</div>
                <div class="col-1-5">Позиция</div>
                <div class="col-1-5"></div>
                <div class="col-1-5"></div>
            </div>
            <ul class="group-block group_container page-group" data-block="accounting_block" data-group="tarif_category"
                data-owner-id="0">
                @foreach($accounting_block->tarif_category_group as $item_tarif_category )
                    @include('back.blocks.groupitems.accounting_block.tarif_category')
                @endforeach
            </ul>
            <div class="col-1-2 disabled">
                <button class="any_create button blue" data-block="accounting_block" data-group="tarif_category"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <div class="col-1-2 disabled"></div>
        </div>
        <div class="field-wrap buttons disabled">
            <button class="btn btn-primary pull-right any_save" data-block="accounting_block" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
    <div class="seo-wrap">
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Тайтл страницы </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="accounting_block"
                   class="input-field block_field" value="{{$accounting_block->page_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Ключевые слова </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="accounting_block"
                   class="input-field block_field" value="{{$accounting_block->seo_keywords_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Описание </label>
            <textarea type="text" data-field-type="string" data-field-name="seo_description" data-block="accounting_block"
                   class="input-field block_field no-trumbowyg"
                   placeholder="Строка">{{$accounting_block->seo_description_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО-Текст (под футером) </label>
            <textarea type="text" data-field-type="text" data-field-name="seo_text" data-block="accounting_block"
                      class="input-field block_field"  placeholder="Строка">{{$accounting_block->seo_text_field}}</textarea>
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