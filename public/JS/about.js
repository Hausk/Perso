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

const progress_bars = document.querySelectorAll('.progress');

progress_bars.forEach(bar => {
    const { size } = bar.dataset;
    bar.style.width = `${size}%`;
});

// humburger //
$(document).ready(function(){
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
  });
});

// scrollbar
var position = 0;
var ticking = false;

function scrolldownNav() {
  if(window.scrollY > 620) {
    $('#navigation').css({background: 'rgba(0,0,0,0.7)',
                          margin : 'inherit',
                          padding : '15px 0'});
  }
  else {
    $('#navigation').css({background: '#000',
                          margin : '0',
                          padding : '15px 0'});
  }
}

// event sur scroll

function scrolldownScrolled() {
  if(window.scrollY > 20) {
    $('.scroll-down').css({opacity: '0',
                            visibility: 'hidden'});
    $('#navigation').css({background: 'rgba(0,0,0,0.7)',
                          margin : 'inherit',
                          padding : '15px 0'});
  }
  else {
    $('.scroll-down').css({opacity: '1',
                            visibility: 'visible'});
    $('#navigation').css({background: 'none',
                          margin : '0',
                          padding : '15px 0'});
  }
}

window.addEventListener('scroll', function(e) {
  position = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function() {
      scrolldownNav(position);
      scrolldownScrolled(position);
      ticking = false;
    });
  }

  ticking = true;
});

var scene = document.getElementById('scene');