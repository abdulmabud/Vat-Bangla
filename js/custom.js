// Scrolling 
$(window).on('scroll', function(){
    if($(window).scrollTop()>50){
      $('.navbar').addClass('sticky');
     
      
    }else{
      $('.navbar').removeClass('sticky');
    }
  })

  
  