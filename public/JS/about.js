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

var position = 0;
var ticking = false;

function faireQuelqueChose() {
  if(window.scrollY > 620) {
    $('#navigation').css({background: 'rgba(0,0,0,0.7)',
                          margin : 'inherit',
                          padding : '15px 0'})
  } else {
    $('#navigation').css({background: 'none',
                          margin : '15px 0',
                          padding : '0'})
  }
}

window.addEventListener('scroll', function(e) {
  position = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function() {
      faireQuelqueChose(position);
      ticking = false;
    });
  }

  ticking = true;
});

var scene = document.getElementById('scene');
var parallax = new Parallax(scene);
