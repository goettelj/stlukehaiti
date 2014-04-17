$(document).ready(function(){
  
  $('li.page_item').each(function(){
      if ($(this).find('a').eq(0).text() == "The Team"){
          
          $(this).attr('id', 'teamMenuHeader').find('a').attr('href', '#');
          
          $(this).append($('#teamMenu'));
          
          $('.main-menu').dropit();
  
      }
  });
  
  
});