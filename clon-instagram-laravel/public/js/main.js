window.addEventListener("load", function(){
   
   $('.btn-like').css('cursor','pointer');
   $('.btn-dislike').css('cursor','pointer');
   
   //boton de like
   function like(){
    $('.btn-like').unbind('click').click(function(){
        console.log('like');
        $(this).addClass('btn-dislike').removeClass('btn-like');
        $(this).attr('src','img/heart-rojo.png');
        dislike();
    });
    
   }
   like();
   
   //boton de dislike
   function dislike(){
    $('.btn-dislike').unbind('click').click(function(){
        console.log('dislike');
        $(this).addClass('btn-like').removeClass('btn-dislike');
        $(this).attr('src','img/heart-gris.png');
        like();
    });
    
   }
   dislike();
   
});