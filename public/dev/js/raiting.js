$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.star-link').on('click',function(){

        obj = {};
        obj['value'] = $(this).data('raiting');
        obj['entity_name'] = window.location.pathname;


        var deferred = $.ajax(
            {
                type: 'POST',
                url: '/rating/send',
                dataType: 'json',
                data: obj
            }
        );
        deferred.done(function(data){
           if( data.status){
               $('.head-reiting').text('Спасибо!');
               $('.current-rating').css('width', data[0].percent+'%');
               $('.totalvotes').html(' <meta itemprop="ratingValue" content="'+data[0].middle+'">Текущий рейтинг — '+data[0].middle+' <meta itemprop="bestRating" content="5"> <meta itemprop="ratingCount" content="'+data[0].count+'"> ('+data[0].count+' человек)');
           }else{
               $('.head-reiting').text('Вы уже голосовали');
           }
        });

    });


});