@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование информации о клиенте — "'.$item_client->page_name_field.'"'?>
    <li class="group" data-group-id="{{$item_client->id_field}}">
        <div class="select-content">
            <ul class="list">
                <li class="item"><a href="#content" class="select-item active">Информация</a></li>
                <li class="item"><a href="#seo" class="select-item">Настройки SEO</a></li>
            </ul>
        </div>
        <div class="content-wrap">
            <div class="field-wrap ">
                <label class="field-title"> Название </label>
                <input type="text" data-field-type="string" data-field-name="page_name" data-block="clients_block"
                       data-group="client" class="input-field group_field" value="{{$item_client->page_name_field}}"
                       data-item-id="{{$item_client->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Вид ссылки в адресной строке </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="clients_block"
                       data-group="client" class="input-field group_pre_field" value="{{$item_client->slug_field}}"
                       data-item-id="{{$item_client->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Титульное изображение </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->background_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->background_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->background_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->background_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block"
                                   value="{{$item_client->background_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->background_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <label class="file-input">
                                <img src="/images/{{$item_client->background_image->preview_link}}" class="preview"
                                     data-field-name="background" data-block="clients_block" data-group="client"
                                     data-item-id="{{$item_client->id_field}}">
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="background" data-field-type="image" data-block="clients_block"
                                       data-group="client" data-item-id="{{$item_client->id_field}}"
                                       data-entity="groupitem"> </label>
                        </div>
                        <div class="action-block">
                            <label class="alt-title">Альтернативный текст (если изображение не удалось
                                загрузить)</label>
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_client->background_image->alt}}"
                                   data-item-id="{{$item_client->id_field}}" data-field-name="background"
                                   data-block="clients_block">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Логотип (отображается на странице клиента и в списке всех клиентов) </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="logo" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->logo_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="logo" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->logo_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="logo" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->logo_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="logo" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->logo_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="logo" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block"
                                   value="{{$item_client->logo_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="logo" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->logo_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <label class="file-input">
                                <img src="/images/{{$item_client->logo_image->preview_link}}" class="preview"
                                     data-field-name="logo" data-block="clients_block" data-group="client"
                                     data-item-id="{{$item_client->id_field}}">
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="logo" data-field-type="image" data-block="clients_block"
                                       data-group="client" data-item-id="{{$item_client->id_field}}"
                                       data-entity="groupitem"> </label>
                        </div>
                        <div class="action-block">
                            <label class="alt-title">Альтернативный текст (если изображение не удалось
                                загрузить)</label>
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_client->logo_image->alt}}"
                                   data-item-id="{{$item_client->id_field}}" data-field-name="logo"
                                   data-block="clients_block">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Краткое описание </label>
                <input type="text" data-field-type="string" data-field-name="small_descr" data-block="clients_block"
                       data-group="client" class="input-field group_field"
                       value="{{$item_client->small_descr_field}}" data-item-id="{{$item_client->id_field}}"
                       placeholder="Строка">
            </div>

            <div class="field-wrap ">
                <label class="field-title"> Рекомендательное письмо </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="letter" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->letter_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="letter" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->letter_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="letter" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->letter_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="letter" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->letter_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="letter" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->letter_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="letter" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->letter_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <label class="file-input">
                                <img src="/images/{{$item_client->letter_image->preview_link}}" class="preview"
                                     data-field-name="letter" data-block="clients_block" data-group="client"
                                     data-item-id="{{$item_client->id_field}}">
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="letter" data-field-type="image" data-block="clients_block"
                                       data-group="client" data-item-id="{{$item_client->id_field}}"
                                       data-entity="groupitem"> </label>
                        </div>
                        <div class="action-block">
                            <label class="alt-title">Альтернативный текст (если изображение не удалось
                                загрузить)</label>
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_client->letter_image->alt}}" data-item-id="{{$item_client->id_field}}"
                                   data-field-name="letter" data-block="clients_block">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Город </label>
                <select data-field-type="numb" data-field-name="city_name" data-block="clients_block"
                        data-group="client" data-item-id="{{$item_client->id_field}}" class="input-field group_field">
                    @foreach($city_name as $item_city)
                        @if($item_client->city_name_field == $item_city->id_field)
                            <option selected value="{{$item_city->id_field}}">{{$item_city->city_name_field}}</option>
                        @else
                            <option value="{{$item_city->id_field}}">{{$item_city->city_name_field}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Тип заведения </label>
                <select  type="number" data-field-type="numb" data-field-name="institution_type"
                         data-block="clients_block" data-group="client" data-item-id="{{$item_client->id_field}}"
                         class="input-field group_field">
                    @foreach($inst as $inst_item)
                        @if($item_client->institution_type_field == $inst_item->id_field)
                            <option selected value="{{$inst_item->id_field}}">{{$inst_item->page_name_field}}</option>
                        @else
                            <option value="{{$inst_item->id_field}}">{{$inst_item->page_name_field}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Описание заведения </label>
                        <textarea data-field-type="text" data-field-name="content" data-block="clients_block"
                                  data-group="client" class="input group_field"
                                  data-item-id="{{$item_client->id_field}}"
                                  placeholder="Текст">{{$item_client->content_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Имя оставившего отзыв клиента </label>
                <input type="text" data-field-type="string" data-field-name="rec_fio" data-block="clients_block"
                       data-group="client" class="input-field group_field"
                       value="{{$item_client->rec_fio_field}}" data-item-id="{{$item_client->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Занимаемая должность </label>
                <input type="text" data-field-type="string" data-field-name="rec_position" data-block="clients_block"
                       data-group="client" class="input-field group_field"
                       value="{{$item_client->rec_position_field}}" data-item-id="{{$item_client->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Фото </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="rec_foto" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->rec_foto_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="rec_foto" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->rec_foto_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="rec_foto" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->rec_foto_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="rec_foto" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->rec_foto_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="rec_foto" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->rec_foto_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="rec_foto" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->rec_foto_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <label class="file-input">
                                <img src="/images/{{$item_client->rec_foto_image->preview_link}}" class="preview"
                                     data-field-name="rec_foto" data-block="clients_block" data-group="client"
                                     data-item-id="{{$item_client->id_field}}">
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="rec_foto" data-field-type="image" data-block="clients_block"
                                       data-group="client" data-item-id="{{$item_client->id_field}}"
                                       data-entity="groupitem"> </label>
                        </div>
                        <div class="action-block">
                            <label class="alt-title">Альтернативный текст (если изображение не удалось
                                загрузить)</label>
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_client->letter_image->alt}}" data-item-id="{{$item_client->id_field}}"
                                   data-field-name="letter" data-block="clients_block">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="field-title"> Текст отзыва </label>
                <textarea data-field-type="text" data-field-name="rec_text" data-block="clients_block"
                          data-group="client" class="input group_field no-trumbowyg"
                          data-item-id="{{$item_client->id_field}}"
                          placeholder="Текст">{{$item_client->rec_text_field}}</textarea>
            </div>
            <div class="field-wrap group-wrap">
                <div class="group-title-row"><label class="group-title">Комплектация</label>
                    <button class="any_create button blue" data-block="clients_block" data-group="client_related"
                            data-descr="Эл. первой группы" data-owner-id="{{$item_client->id_field}}">Добавить элемент
                    </button>
                </div>
                <ul class="group-block group_container" data-block="clients_block" data-group="client_related"
                    data-owner-id="{{$item_client->id_field}}">
                    @foreach($item_client->client_related_group as $item_client_related )
                        @include('back.blocks.groupitems.clients_block.client_related')
                    @endforeach
                </ul>

            </div>
        </div>
        <div class="seo-wrap">
            <div class="field-wrap ">
                <label class="field-title"> СЕО: Тайтл страницы </label>
                <input type="text" data-field-type="string" data-field-name="page_title" data-block="clients_block"
                       data-group="client" class="input-field group_field"
                       value="{{$item_client->page_title_field}}" data-item-id="{{$item_client->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> СЕО: Ключевые слова </label>
                <input type="text" data-field-type="string" data-field-name="seo_keywords"
                       data-block="clients_block" data-group="client" class="input-field group_field"
                       value="{{$item_client->seo_keywords_field}}" data-item-id="{{$item_client->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="field-title"> СЕО: Описание </label>
                <textarea type="text" data-field-type="string" data-field-name="seo_description"
                       data-block="clients_block" data-group="client" class="input-field group_field no-trumbowyg" data-item-id="{{$item_client->id_field}}"
                       placeholder="Строка">{{$item_client->seo_description_field}}</textarea>
            </div>
        </div>
        <div class="disabled">
            <button type="button" class="any_save" data-block="clients_block" data-group="client"
                    data-entity="groupitem" data-item-id="{{$item_client->id_field}}" data-descr="Эл. первой группы">
                Сохранить
            </button>
        </div>
        <div class="save-panel">
            <div class="status-panel ">

            </div>
            <div class="tool-panel">
                <div class="column">
                    <div class="show">
                        <div class="wrap-checkbox disabled">
                            <label class="show-it-label"><input type="checkbox" class="show-it-checkbox ">Показать на
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
    </li>@endsection