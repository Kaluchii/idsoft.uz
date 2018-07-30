@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование метрики сайта'?>
    <div class="content-wrap">
        <div class="block ">
            <div class="field-wrap ">
                <label class="field-title"> Метрика </label>
        <textarea data-field-type="text" data-field-name="metrik" data-block="static_site" class="input block_field no-trumbowyg"
                  placeholder="Текст">{{$static_site->metrik_field}}</textarea>
            </div>
        </div>
        <div class="field-wrap buttons disabled">
            <button class="btn btn-primary pull-right any_save" data-block="static_site" data-entity="block"
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