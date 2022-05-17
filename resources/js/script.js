$('.more-info_btn').on('click' , function(){
    let appId = $(this).data('id');
 
     $.ajax({
         url: '/application/show',      
         type: 'GET',     
         data: {'application_id':appId},           
         success: function(data){   
             $('.applications').append(data.html);
         },
         beforeSend: function()
         {	 
             
         },
         error: function(request) {
             let statusCode = request.status;
             alert(`Ошибочка :(  код помилки:${statusCode}`)
         }
      })
      .done(function(){
         $('.content-container').css('opacity' , 1);
      })
  
 })
 
 $('body').on('click','.close-modal',function(){ 
     $(this).parent().remove();
 });
 