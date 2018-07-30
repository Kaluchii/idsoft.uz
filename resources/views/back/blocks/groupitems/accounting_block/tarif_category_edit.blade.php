@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование категории тарифов — "'.$item_tarif_category->tarif_name_field.'"'?>
    <li class="group" data-group-id="{{$item_tarif_category->id_field}}">
            <div class="content-wrap">
                <div class="field-wrap ">
                    <label class="field-title"> Название категории </label>
                    <input type="text" data-field-type="string" data-field-name="tarif_name" data-block="accounting_block"
                           data-group="tarif_category" class="input-field group_field"
                           value="{{$item_tarif_category->tarif_name_field}}"
                           data-item-id="{{$item_tarif_category->id_field}}" placeholder="Строка">
                </div>
                <div class="field-wrap ">
                    <ul class="group-block group_container page-group" data-block="accounting_block" data-group="tarif"
                        data-owner-id="{{$item_tarif_category->id_field}}">
                        @foreach($item_tarif_category->tarif_group as $item_tarif )
                            @include('back.blocks.groupitems.accounting_block.tarif')
                        @endforeach
                    </ul>
                    <button class="any_create button blue" data-block="accounting_block" data-group="tarif"
                            data-descr="Эл. первой группы" data-owner-id="{{$item_tarif_category->id_field}}">Добавить
                        элемент
                    </button>
                    <div class="field-wrap buttons disabled">
                        <button type="button" class="any_save" data-block="accounting_block" data-group="tarif_category"
                                data-entity="groupitem" data-item-id="{{$item_tarif_category->id_field}}"
                                data-descr="Эл. первой группы"> Сохранить
                        </button>
                    </div>
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