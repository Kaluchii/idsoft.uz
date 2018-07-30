@extends('back.layout')
@section('content')
    <?php $title = 'Список информационных страниц'?>
    <div class="content-wrap">
        <div class="field-wrap ">
            <div class="row-title">
                <div class="col-1-5">Название</div>
                <div class="col-1-5">Дата изменения</div>
                <div class="col-1-5">Позиция</div>
                <div class="col-1-5"></div>
                <div class="col-1-5"></div>
            </div>
            <ul class="group-block group_container page-group" data-block="information_page" data-group="inf_page"
                data-owner-id="0">
                @foreach($information_page->inf_page_group as $item_inf_page )
                    @include('back.blocks.groupitems.information_page.inf_page')
                @endforeach
            </ul>
            <div class="col-1-2">
                <button class="any_create button blue disabled" data-block="information_page" data-group="inf_page"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <div class="col-1-2 disabled"></div>
        </div>
        <div class="field-wrap buttons disabled">
            <button class="btn btn-primary pull-right any_save" data-block="information_page" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection