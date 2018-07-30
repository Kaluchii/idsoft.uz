@extends('back.layout')
@section('content')
<div class="field-wrap group-wrap">
<div class="group-title-row"><label class="group-title">question</label>  <button class="any_create button blue" data-block="fidback" data-group="question"  data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент</button>
</div><ul class="group-block group_container" data-block="fidback" data-group="question" data-owner-id="0">
@foreach($fidback->question_group as $item_question )
@include('back.blocks.groupitems.fidback.question')
@endforeach
</ul>
</div>
<div class="field-wrap group-wrap">
<div class="group-title-row"><label class="group-title">calculation</label>  <button class="any_create button blue" data-block="fidback" data-group="calculation"  data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент</button>
</div><ul class="group-block group_container" data-block="fidback" data-group="calculation" data-owner-id="0">
@foreach($fidback->calculation_group as $item_calculation )
@include('back.blocks.groupitems.fidback.calculation')
@endforeach
</ul>
</div>
<div class="field-wrap group-wrap">
<div class="group-title-row"><label class="group-title">subscribe</label>  <button class="any_create button blue" data-block="fidback" data-group="subscribe"  data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент</button>
</div><ul class="group-block group_container" data-block="fidback" data-group="subscribe" data-owner-id="0">
@foreach($fidback->subscribe_group as $item_subscribe )
@include('back.blocks.groupitems.fidback.subscribe')
@endforeach
</ul>
</div>
<div class="field-wrap group-wrap">
<div class="group-title-row"><label class="group-title">order</label>  <button class="any_create button blue" data-block="fidback" data-group="order"  data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент</button>
</div><ul class="group-block group_container" data-block="fidback" data-group="order" data-owner-id="0">
@foreach($fidback->order_group as $item_order )
@include('back.blocks.groupitems.fidback.order')
@endforeach
</ul>
</div>
<div class="field-wrap buttons">
<button class="btn btn-primary pull-right any_save" data-block="fidback" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
</div>
@endsection