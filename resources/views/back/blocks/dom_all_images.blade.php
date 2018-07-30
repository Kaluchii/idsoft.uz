@extends('back.layout')
@section('content')
<div class="field-wrap group-wrap">
<div class="group-title-row"><label class="group-title">images_set</label>  <button class="any_create button blue" data-block="dom_all_images" data-group="images_set"  data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент</button>
</div><ul class="group-block group_container" data-block="dom_all_images" data-group="images_set" data-owner-id="0">
@foreach($dom_all_images->images_set_group as $item_images_set )
@include('back.blocks.groupitems.dom_all_images.images_set')
@endforeach
</ul>
</div>
<div class="field-wrap buttons">
<button class="btn btn-primary pull-right any_save" data-block="dom_all_images" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
</div>
@endsection