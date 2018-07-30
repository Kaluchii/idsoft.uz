@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование страницы "Каталог"'?>
    <div class="field-wrap ">
        <label class="field-title"> СЕО: Ключевые слова </label>
        <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="catalog_block"
               class="input-field block_field" value="{{$catalog_block->seo_keywords_field}}" placeholder="Строка">
    </div>
    <div class="field-wrap ">
        <label class="field-title"> СЕО: Описание </label>
        <input type="text" data-field-type="string" data-field-name="seo_description" data-block="catalog_block"
               class="input-field block_field no-trumbowyg" value="{{$catalog_block->seo_description_field}}" placeholder="Строка">
    </div>
    <div class="field-wrap ">
        <div class="row-title">
            <div class="col-1-5">Название</div>
            <div class="col-1-5">Дата изменения</div>
            <div class="col-1-5">Позиция</div>
            <div class="col-1-5"></div>
            <div class="col-1-5"></div>
        </div>
        <ul class="group-block group_container page-group" data-block="catalog_block" data-group="category_1"
            data-owner-id="0">
            @foreach($catalog_block->category_1_group as $item_category_1 )
                @include('back.blocks.groupitems.catalog_block.category_1')
            @endforeach
        </ul>
        <div class="col-1-2">
            <button class="any_create button blue" data-block="catalog_block" data-group="category_1"
                    data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
            </button>
        </div>
        <div class="col-1-2 disabled"></div>
    </div>
    <div class="field-wrap buttons">
        <button class="btn btn-primary pull-right any_save" data-block="catalog_block" data-entity="block"
                data-descr="">
            <span class="save_button">Сохранить</span>
        </button>
    </div>
    </div>
@endsection