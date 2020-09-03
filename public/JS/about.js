$('.progress-bar').each(function() {
    var valorLarge = $(this).data('progress');
    $(this).html("<p class='valor-progress'>"+valorLarge+"</p>");
    
    $(this).css({
      width: 10,
  });
      $(this).animate({
          width: valorLarge,
      });
  });

$(document).ready(function(){
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
  });
});
