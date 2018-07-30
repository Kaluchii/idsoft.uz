(function( $ ) {
    $(function(){

        'use strict';

        var Adminka = document.adminkaInterpro;
        Adminka.init({});



        var anyDelete = function anyDelete(){

            var block_name    = $(this).data('block');
            var group_name    = $(this).data('group');

            var messagecontainer = $('.status-panel');

            messagecontainer.removeClass('success');
            messagecontainer.removeClass('alert');
            messagecontainer.text('');

            $(this).adminka(
                'deletecontent',
                {
                    type: 'delete',
                    url: '/adm/delete/groupitem/'+$(this).data('item-id')
                },
                {
                    done_callback: function(data){
                        if (data.status === 'OK') {

                            var deleted;
                            var del_string = '';

                            if (data.deleted !== undefined && data.deleted instanceof Array){
                                data.deleted.forEach(function(id, index) {
                                    if( $('.group[data-group-id='+id+']').length > 0 ){
                                        $('.group[data-group-id='+id+']').remove();
                                    }else{
                                        $('.row-item[data-id='+id+']').remove();
                                    }
                                });
                            }

                            messagecontainer.addClass('success');
                            messagecontainer.text('Элемент удален.');
                        }else{
                            messagecontainer.addClass('alert');
                            messagecontainer.text('Ошиба при удаление элемента.');
                        }
                    },
                    fail_callback: function(data){
                    },
                    always_callback: function(data){
                        //Убрать индикатор загрузки, если появится
                    }
                }
            );
        };


        $.fn.gidelete = function (button_selector){

            this.on('click', button_selector, function(){
                anyDelete.call(this);
            });

            return this.first();
        };



        $(document).gidelete('.any_delete');

    });

})(jQuery);