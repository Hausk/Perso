$(document).ready(function () {
	function hex_initial_animation() {
		$(".hex-wrap,.hover-notify").velocity("transition.expandIn", { stagger: 150 });
		$(".hex-wrap").velocity("callout.pulse");
		$(".hoverblock").velocity("fadeOut", { delay: 5000, duration: 0 });
		}
	hex_initial_animation();

var hoverdetect = setInterval(function(){ hovernotify() }, 5000);
function hovernotify() {
    $(".hover-notify").velocity("callout.tada");
}
function myStopFunction() {
$(".hover-notify").velocity('stop', true).velocity("fadeOut");
    clearInterval(hoverdetect);
}

		$(".hex-init").mouseenter(function () {
			
            $('.hexactive').velocity('stop', true).velocity('reverse').removeClass('hexactive');
			myStopFunction();

			var title_color =  $(this).parent().attr("data-color");
			var title_name = $(this).parent().attr("data-title");
			var desc_name = $(this).parent().attr("data-content");

				function hex_description() {
                    $('.code-description').velocity('stop', true).velocity("transition.slideRightBigIn");
					$('.' + desc_name).siblings().removeClass('desc-active');
						setTimeout(function() {
							$('.' + desc_name).addClass('desc-active');
							$('.code-descriptopn > div, .desc-active').children().velocity('stop', true).velocity("transition.slideRightBigIn", { stagger: 300 });
							$('.code-title, .desc-active span').velocity({color: title_color}, { queue: false });
							$('.code-title').text(title_name)
						}, 0);
			    }
			    hex_description();
        
				$(this).parent().addClass('hexactive');
                $('.hexactive').velocity({scale:"1.1"}, { duration: 200 });

		}).click(function () {
            var title_color =  $(this).parent().attr("data-color");
			var title_name = $(this).parent().attr("data-title");
			var details_name = $(this).parent().attr("data-explain");

                function details_description() {
                $('.next-description').velocity('stop', true).velocity("transition.slideRightBigIn");
                $('.' + details_name).siblings().removeClass('details-active');
                    setTimeout(function() {
                        $('.' + details_name).addClass('details-active');
                        $('.next-descriptopn > div, .details-active').children().velocity('stop', true).velocity("transition.slideRightBigIn", { stagger: 300 });
                        $('.next-title, .details-active span').velocity({color: title_color}, { queue: false });
                        $('.next-title').text(title_name)
                    }, 0);
            }
            details_description();
            $('.hexactive').velocity('stop', true).velocity('reverse').removeClass('hexactive');
            $(this).parent().addClass('hexactive');
            $('.display-content').css({display:"block"});
            $('.display-content').velocity({opacity:"1"}, { duration: 200});
        })
});