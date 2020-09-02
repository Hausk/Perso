$('.progress-bar').each(function() {
    var valorLarge = $(this).data('progress');
    var valorProgress = $(this).html("<span class='valor-progress'>"+valorLarge+"</span>");
      $(this).animate({
          width: valorLarge
      });
  });

$(document).ready(function(){
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
  });
});
