jQuery(document).ready(function ($) {
    $("#clb1").submit(function () {
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "/ok.php",
            data: str,
            success: function () {
                $('').html(result);
            }
        });
        return false;
    });
});

$("#about").click(function () {

    setTimeout(function () {
        $('#video').fadeOut(0);
    }, 750);
    document.getElementById('myVideo').pause();
    $('html, body').animate({
        scrollTop: $(".first_text").offset().top
    }, 700);

});
$("#toroom").click(function () {
    setTimeout(function () {
        $('#video').fadeOut(0);
    }, 750);
    $('html, body').animate({
        scrollTop: $(".newrooms").offset().top
    }, 700);

});

$("#tobook").click(function () {
    setTimeout(function () {
        $('#video').fadeOut(0);
    }, 750);
    $('html, body').animate({
        scrollTop: $("#bookme").offset().top
    }, 700);
});

$("#contacts").click(function () {
    setTimeout(function () {
        $('#video').fadeOut(0);
    }, 750);
    $('html, body').animate({
        scrollTop: $("footer").offset().top
    }, 700);
});

$("#hot_offer").click(function () {
    //$('#video').fadeOut(500);
    setTimeout(function () {
        $('body').addClass('noflow');
        $('.popup').removeClass('off');
        $('.ov2').fadeIn(400);
        $('.popup').addClass('fadeTop');
    }, 100);
});

$(".startdown").click(function () {
    setTimeout(function () {
        $('#video').fadeOut(0);
    }, 750);
    document.getElementById('myVideo').pause();
    $('html, body').animate({
        scrollTop: $(".first_text").offset().top
    }, 450);

});


$(document).ready(function () {
	var video = $('#video');
	
	$(window).scroll(function () {
	    var y = $(this).scrollTop();
	    var z = $('.first_text').offset().top;
	
	    if (y >= z) {
	        video.addClass('off');
	        video.fadeOut(0);
	        document.getElementById('myVideo').pause();
	    }
	    else {
	        video.removeClass('off');
	        video.fadeIn(0);
	        document.getElementById('myVideo').play();
	        }
	    });
});

$(document).ready(function () {
    var rmarker = $('.ttt');

    $(window).scroll(function () {
        var y = $(this).scrollTop();
        var z = $('.ttt').offset().top;

        if (y >= z) {

            setTimeout(function () {
                $('#startrates').addClass('slideUp3');
            }, 0);


        }

    });
});

$(document).ready(function () {
    var rmarker = $('.pluses_marker');

    $(window).scroll(function () {
        var y = $(this).scrollTop();
        var z = $('.pluses_marker').offset().top;

        if (y >= z) {

            setTimeout(function () {
                $('#pl1').addClass('fadeTop');
            }, 200);

            setTimeout(function () {
                $('#pl2').addClass('fadeTop');
            }, 400);

            setTimeout(function () {
                $('#pl3').addClass('fadeTop');
            }, 600);
        }

    });
});

$("#s1").click(function () {
    $(".innew_1").fadeOut(700);
    setTimeout(function () {
        $(".innew_2").fadeIn(700);
    }, 750);
});
$("#s1x").click(function () {
    $(".innew_1").fadeOut(700);
    setTimeout(function () {
        $(".innew_2").fadeIn(700);
    }, 750);
});

$("#s2").click(function () {
    $(".innew_2").fadeOut(700);
    setTimeout(function () {
        $(".innew_1").fadeIn(700);
    }, 750);
});

$("#s2x").click(function () {
    $(".innew_2").fadeOut(700);
    setTimeout(function () {
        $(".innew_1").fadeIn(700);
    }, 750);
});


$(".new_close").click(function () {
    $(".allside").hide("slide", {direction: "left"}, 500);
    setTimeout(function () {
        $(".new_open").show("slide", {direction: "left"}, 200);
    }, 550);
});

$(".new_open").click(function () {
    $(".new_open").hide("slide", {direction: "left"}, 200);
    setTimeout(function () {
        $(".allside").show("slide", {direction: "left"}, 500);
    }, 250);
});

$(".ns_but").click(function () {
    $('html, body').animate({
        scrollTop: $("#bookme").offset().top
    }, 700);
});

$("#ptable, #ptable2").click(function () {
    $('body').addClass('noflow');
    $('.seasons').fadeIn(0).addClass("slideUp2");
});


$(".close_seasons").click(function () {
    $('body').removeClass('noflow');
    $('.seasons').fadeOut(400);
    setTimeout(function () {
        $('.seasons').removeClass("slideUp2");
    }, 401);
});

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

$(".ov").click(function () {
    $("#datepicker").daterangepicker("clearRange");
    $('.all_ok').addClass('off');
    $('.popup').addClass('off');
    $('#ad,#kd,#fn,#ph').val('');
    $("#room_1").attr('checked', true);
    $("#room_2").attr('checked', false);
    $('.sel').removeClass('sel');
    $(".room_first").addClass('sel');
    $('body').removeClass('noflow');
    $('.ov').fadeOut(400);
});

$(".ov2").click(function () {
	$('.popup').addClass('off');
	$('body').removeClass('noflow');
	$('.ov2').fadeOut(400);
});

$('.room_first').click(function () {
    $('.sel').removeClass('sel');
    $(this).addClass('sel').find('input').prop('checked', true)
});
$('.room_second').click(function () {
    $('.sel').removeClass('sel');
    $(this).addClass('sel').find('input').prop('checked', true)
});

$(window).load(function () {
    $("#datepicker").daterangepicker("open");
});
$(document).ready(function () {

    $("#datepicker").daterangepicker({
        presetRanges: false,
        //applyOnMenuSelect: true,
        mirrorOnCollision: false,
        //verticalOffset:0,
        //autoFitCalendars:false,


        datepickerOptions: {
            minDate: 0,
            maxDate: "+12m +2w",
            numberOfMonths: 2,
            firstDay: 1,
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь']
        }


    });

});

$(document).ready(function () {
    setTimeout(function () {
        $('.ml').addClass("fadeTop");
    }, 50);
});

$(window).scroll(function (e) {
    parallax();
});
function parallax() {
    var scrolled = $(window).scrollTop();
    $('.parallax').css('top', -(scrolled * 0.35) + 'px');
}