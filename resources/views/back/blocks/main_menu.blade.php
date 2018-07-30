@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование главного меню'?>
    <div class="content-wrap">
        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Главное меню</label>
                <button class="any_create button blue disabled" data-block="main_menu" data-group="menu"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="main_menu" data-group="menu" data-owner-id="0">
                @foreach($main_menu->menu_group as $item_menu )
                    @include('back.blocks.groupitems.main_menu.menu')
                @endforeach
            </ul>
        </div>
        <div class="field-wrap buttons disabled">
            <button class="btn btn-primary pull-right any_save" data-block="main_menu" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
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
                        <label class="show-it-label"><input type="checkbox" class="show-it-checkbox">Показать на
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