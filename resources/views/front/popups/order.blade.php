<div class="hide">
    <div class="white-popup mfp-with-anim mfp-hide" id="order">
        <h4 class="popup-title">Оформить заказ</h4>
        <div class="rows-block">
            <div class="row">
                <div class="col-1-2">
                    <label for="" class="row-name">
                        Имя
                    </label>
                    <input type="text" class="popup-input" data-field-name="name" data-field-type="string" placeholder="Имя">
                </div>
            </div>
            <div class="row">
                <div class="col-1-2">
                    <label for="" class="row-name">
                        Телефон
                    </label>
                    <input type="text" class="popup-input"
                           data-mask="+99800 000-00-00"
                           placeholder="+998__ ___-__-__"
                           data-require="true"
                           data-field-name="phone"
                           data-field-type="string">

                </div>
            </div>
            <div class="row">
                <div class="col-1-2">
                    <label for="" class="row-name">
                        Ваша почта
                    </label>
                    <input type="text" class="popup-input" data-field-name="mail" data-field-type="string" placeholder="Эл. почта">
                </div>
            </div>
            <div class="row">
                <div class="col-1-2">
                    <label  class="row-name">
                        Сообщение
                    </label>
                    <textarea type="text" class="popup-input" data-field-name="question" data-field-type="string" placeholder="Комментарий"></textarea>
                </div>
            </div>
            <div class="row" style="display: none">
                <div class="col-1-2">
                    <label  class="row-name">
                        Сообщение
                    </label>
                    <textarea type="text" class="popup-input" data-field-name="product" data-field-type="string" placeholder="Комментарий"></textarea>
                </div>
            </div>
            <div class="row button-row">
                <div class="col-1-2">
                    <p class="status-bar">
                        Не все поля заполнены верно
                    </p>
                </div>
                <div class="col-1-2">
                    <script type="text/javascript">
                        $( '#make-order' ).click(function() {
                            fbq('track', 'Purchase');
                        });
                    </script>
                    <label class="row-name">
                        <button id="make-order" class="send-form" data-event-name="gtm_submit_Order">Отправить</button>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
