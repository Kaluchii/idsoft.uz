@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование списка клиентов фирмы'?>
    <div class="select-content">
        <ul class="list">
            <li class="item"><a href="#content" class="select-item active">Информация</a></li>
            <li class="item"><a href="#seo" class="select-item">Настройки SEO</a></li>
        </ul>
    </div>
    <div class="content-wrap">
        <div class="field-wrap ">
            <div class="row-title">
                <div class="col-1-5">Название</div>
                <div class="col-1-5">Дата изменения</div>
                <div class="col-1-5">Позиция</div>
                <div class="col-1-5"></div>
                <div class="col-1-5"></div>
            </div>
            <ul class="group-block group_container page-group" data-block="clients_block" data-group="client"
                data-owner-id="0">
                @foreach($clients_block->client_group as $item_client )
                    @include('back.blocks.groupitems.clients_block.client')
                @endforeach
            </ul>
            <div class="col-1-2">
                <button class="any_create button blue" data-block="clients_block" data-group="client"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <div class="col-1-2 disabled"></div>
        </div>
        <div class="field-wrap buttons disabled">
            <button class="btn btn-primary pull-right any_save" data-block="clients_block" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
    <div class="seo-wrap">
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Тайтл страницы </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="clients_block"
                   class="input-field block_field" value="{{$clients_block->page_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Ключевые слова </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="clients_block"
                   class="input-field block_field" value="{{$clients_block->seo_keywords_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Описание </label>
            <textarea type="text" data-field-type="string" data-field-name="seo_description" data-block="clients_block"
                   class="input-field block_field no-trumbowyg" placeholder="Строка">{{$clients_block->seo_description_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО-Текст (под футером) </label>
            <textarea type="text" data-field-type="text" data-field-name="seo_text" data-block="clients_block"
                      class="input-field block_field" placeholder="Строка">{{$clients_block->seo_text_field}}</textarea>
        </div>
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