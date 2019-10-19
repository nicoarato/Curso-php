var url = 'http://localhost/master-php/clon-instagram-laravel/public';

window.addEventListener("load", function(){
   
   $('.btn-like').css('cursor','pointer');
   $('.btn-dislike').css('cursor','pointer');
   
   //boton de like
   function like(){
    $('.btn-like').unbind('click').click(function(){
        console.log('like');
        $(this).addClass('btn-dislike').removeClass('btn-like');
        $(this).attr('src',url+'/img/heart-rojo.png');
        
        $.ajax({
            url: url+'/like/'+$(this).data('id'),
            type: 'GET',
            success: function(response){
                if(response.like){
                    console.log('Has dado like.');
                }else{
                    console.log('Error de like.');
                }
            }
        });
        dislike();
    });
   
   }
   like();
   
   //boton de dislike
   function dislike(){
    $('.btn-dislike').unbind('click').click(function(){
        console.log('dislike');
        $(this).addClass('btn-like').removeClass('btn-dislike');
        $(this).attr('src',url+'/img/heart-gris.png');
        
        $.ajax({
            url: url+'/dislike/'+$(this).data('id'),
            type: 'GET',
            success: function(response){
                if(response.like){
                    console.log('Has dado dislike.');
                }else{
                    console.log('Error de dislike.');
                }
            }
        });
        
        like();
    });
    
   }
   dislike();
   
   //BUSCADOR
   $('#buscador').submit(function(){
      console.log($('#buscador #search').val());
       $(this).attr('action', url+'/gente/'+$('#buscador #search').val());

   });
   
   
   
   
});