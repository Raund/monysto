<?php
/**
 * Template Name: Pizza
 */
?>
<!DOCTYPE html>
<html>
<head>
	<META HTTP-EQUIV="Content-language" CONTENT="ua-ua">
    <base href="/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    
    <title>Пiцерiя Монiсто</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=1200">
    
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/reset.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style2.css" rel="stylesheet" type="text/css" media="screen,print"/>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/animation.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.3.1/moment.min.js"></script>
    <script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/looper.css" rel="stylesheet">
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/looper.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/video.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/c.js"></script>
</head>
<body>
<div class="all_ok off">
    <div class="message">Дякуємо!</div>
    <div class="mes_comm">Наші менеджери зв'яжуться з вами найближчим часом<br>для підтвердження замовлення.</div>
</div>
<div class="ov"></div>
<div class="ov2"></div>

<div class="top">
    <div class="intop">
        <div class="top_logo"></div>
        <div class="nav">
            <ul>
                <li id="toabout">про нас</li>
                <li id="tocrew">команда</li>
                <li id="tomenu">меню</li>
                <li id="toreserve">замовлення столу</li>
                <li id="tocontacts">контакти</li>
                <li><a href="<?=get_permalink(6);?>"><?=get_the_title(6);?></a></li>
				<li><a href="<?=get_permalink(14);?>"><?=get_the_title(14);?></a></li>
            </ul>
        </div>
        <div class="langs_sw">
            <?php qtranxf_generateLanguageSelectCode(["type" => "text"]); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>

<section class="first_pizza">
    <div class="overfirst">
        <div class="ml"></div>
        <div class="swiper-pagination swiper-pagination-white superpages"></div>
    </div>

    <div class="startdown">
        <div class="mama bouncexdown"></div>
    </div>

</section>

<section class="first_text">
    <div class="first_text_inner">
        <div class="big_header_b">пiцерiя</div>
        <div class="about_text_b">
            Пориньте в атмосферу справжньої Італії в піцерії Monysto. Наша дружня команда<br> з радістю прийме вас у
            нашому затишному закладі і смачно нагодує автентичною італійською кухнею. З особливою увагою ми оточимо вас
            турботою і створимо<br> приємну атмосферу у вашій компанії. З нетерпінням чекаємо вас<br> в найнезвичайнішій
            піцерії на Буковелі.
        </div>
        <div class="orn"></div>
    </div>
</section>


<section class="food_pics">


    <div class="next_cont_hotel_next">
        <div class="next_link"><a data-looper="next" class="superlink" href="#controlLooperX"></a></div>
        <div class="for_link"></div>
        <div class="papa bouncex"></div>
    </div>

    <div class="next_cont_hotel_prev">
        <div class="next_link"><a data-looper="prev" class="superlink" href="#controlLooperX"></a></div>
        <div class="for_link"></div>
        <div class="papa2 bouncex2"></div>
    </div>


    <div id="controlLooperX" data-looper="go" class="looper xfade">
        <div class="looper-inner">

            <div class="item">
                <div class="one_room_pic p_1"></div>
            </div>
            <div class="item">
                <div class="one_room_pic p_2"></div>
            </div>
            <div class="item">
                <div class="one_room_pic p_3"></div>
            </div>
            <div class="item">
                <div class="one_room_pic p_11"></div>
            </div>


        </div>

    </div>
</section>


<section class="pluses">
    <div class="pluses_marker"
         style="position: absolute; background: red; width: 5px; height: 5px; margin-top: -50%;z-index: 6;visibility: hidden; "></div>
    <div class="pluses_inner">
        <div class="one_plus first_plus" id="pl1x">
            <div class="plus_icon_pizza icon_1p"></div>
            <div class="plus_text">
                <div class="text_h">Дров'яна піч
                </div>
                Дубові дрова надають стравам особливий аромат з димком.
            </div>
        </div>
        <div class="one_plus" id="pl2x">
            <div class="plus_icon_pizza icon_2p"></div>
            <div class="plus_text">
                <div class="text_h">Старовинні рецепти</div>
                Готуємо за старовинними неаполітанськими рецептами.
            </div>
        </div>
        <div class="one_plus" id="pl3x">
            <div class="plus_icon_pizza icon_3p"></div>
            <div class="plus_text">
                <div class="text_h">Еко продукти
                </div>
                Екологічно чисті продукти у всіх стравах нашої кухні.
            </div>
        </div>
        <div class="clear"></div>
    </div>
</section>


<script>
    $(document).ready(function () {
        var rmarker = $('.pluses_marker');

        $(window).scroll(function () {
            var y = $(this).scrollTop();
            var z = $('.pluses_marker').offset().top;

            if (y >= z) {

                setTimeout(function () {
                    $('#pl1x').addClass('fadeTop');
                }, 300);

                setTimeout(function () {
                    $('#pl2x').addClass('fadeTop');
                }, 400);

                setTimeout(function () {
                    $('#pl3x').addClass('fadeTop');
                }, 600);
            }
        });
    });
</script>

<section class="food_pics">
    <div class="next_cont_hotel_next">
        <div class="next_link"><a data-looper="next" class="superlink" href="#controlLooperY"></a></div>
        <div class="for_link"></div>
        <div class="papa bouncex"></div>
    </div>

    <div class="next_cont_hotel_prev">
        <div class="next_link"><a data-looper="prev" class="superlink" href="#controlLooperY"></a></div>
        <div class="for_link"></div>
        <div class="papa2 bouncex2"></div>
    </div>


    <div id="controlLooperY" data-looper="go" class="looper xfade">
        <div class="looper-inner">

            <div class="item">
                <div class="one_room_pic p_5"></div>
            </div>
            <div class="item">
                <div class="one_room_pic p_6"></div>
            </div>
            <div class="item">
                <div class="one_room_pic p_7"></div>
            </div>
            <div class="item">
                <div class="one_room_pic p_8"></div>
            </div>
            <div class="item">
                <div class="one_room_pic p_9"></div>
            </div>
            <div class="item">
                <div class="one_room_pic p_10"></div>
            </div>

        </div>

    </div>
</section>

<section class="additional">
    <div id="prate_marker"
         style="width: 5px; height: 5px; background: red; position: absolute; z-index: 10; margin-top: -25%; visibility: hidden;"></div>
    <div class="add_inner">
        <div id="pizzarates" style="visibility: hidden;">
            <div class="fsq_sx" style="cursor: pointer;"></div>
            <div class="pizzarate_text">Натиснiть для перегляду відгуків</div>
            <div class="clear"></div>

        </div>
        <script>
            $(document).ready(function () {
                var rmarker = $('#prate_marker');

                $(window).scroll(function () {
                    var y = $(this).scrollTop();
                    var z = $('#prate_marker').offset().top;

                    if (y >= z) {

                        setTimeout(function () {
                            $('#pizzarates').addClass('slideUp3');
                        }, 0);
                    }
                });
            });
        </script>
    </div>
</section>

<section class="chief">
    <div class="chief_inner">
        <div class="topmar"></div>
        <div class="chief_text">
            <div class="chief_header">команда</div>
            Наші кухарі – майстри своєї справи. Ми ретельно відбираємо людей, які потрапляють в нашу згуртовану команду.
            Кожен з них пройшов довгий шлях навчання і роботи в кращих закладах Італії та досконало володіє всіма
            техніками приготування італійських страв. Саме завдяки їх віртуозності ви маєте можливість відчути смак
            Італії.

        </div>
    </div>
</section>

<section class="food_menu">
    <div class="food_menu_hello">
        <div class="big_header_b" style="padding-top: 120px; margin-bottom: 50px;">меню</div>

        <div class="custom-container nonImageContent">
            <div class="mf_p prev" id="fixback"></div>
            <div class="carousel">
                <ul>

                    <li id="mcat-1" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/pizza.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Піца</div>
                    </li>

                    <script>
                        $("#mcat-1").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-1").fadeIn(0);
                                $("#foodlist-1").addClass('slideUp2');
                            }, 700);
                        });
                    </script>

                    <li id="mcat-2" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/pasta.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Паста</div>
                    </li>

                    <script>
                        $("#mcat-2").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-2").fadeIn(0);
                                $("#foodlist-2").addClass('slideUp2');
                            }, 700);
                        });
                    </script>

                    <li id="mcat-3" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/salad.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Салати</div>
                    </li>

                    <script>
                        $("#mcat-3").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-3").fadeIn(0);
                                $("#foodlist-3").addClass('slideUp2');
                            }, 700);
                        });
                    </script>

                    <li id="mcat-4" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/coldsnack.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Холодні закуски</div>
                    </li>

                    <script>
                        $("#mcat-4").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-4").fadeIn(0);
                                $("#foodlist-4").addClass('slideUp2');
                            }, 700);
                        });
                    </script>

                    <li id="mcat-5" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/soup.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Перші страви</div>
                    </li>

                    <script>
                        $("#mcat-5").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-5").fadeIn(0);
                                $("#foodlist-5").addClass('slideUp2');
                            }, 700);
                        });
                    </script>

                    <li id="mcat-6" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/hotdish.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Гарячі страви</div>
                    </li>

                    <script>
                        $("#mcat-6").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-6").fadeIn(0);
                                $("#foodlist-6").addClass('slideUp2');
                            }, 700);
                        });
                    </script>

                    <li id="mcat-7" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/garnish.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Гарніри</div>
                    </li>

                    <script>
                        $("#mcat-7").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-7").fadeIn(0);
                                $("#foodlist-7").addClass('slideUp2');
                            }, 700);
                        });
                    </script>

                    <li id="mcat-8" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/sauces.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Соуси</div>
                    </li>

                    <script>
                        $("#mcat-8").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-8").fadeIn(0);
                                $("#foodlist-8").addClass('slideUp2');
                            }, 700);
                        });
                    </script>

                    <li id="mcat-9" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/dessert.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Десерти</div>
                    </li>

                    <script>
                        $("#mcat-9").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-9").fadeIn(0);
                                $("#foodlist-9").addClass('slideUp2');
                            }, 700);
                        });
                    </script>

                    <li id="mcat-10" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/hot_bever.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Гарячі напої</div>
                    </li>

                    <script>
                        $("#mcat-10").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-10").fadeIn(0);
                                $("#foodlist-10").addClass('slideUp2');
                            }, 700);
                        });
                    </script>

                    <li id="mcat-11" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/forbeer.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">До пива</div>
                    </li>

                    <script>
                        $("#mcat-11").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-11").fadeIn(0);
                                $("#foodlist-11").addClass('slideUp2');
                            }, 700);
                        });
                    </script>


                    <li id="mcat-12" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/beer.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Пиво</div>
                    </li>

                    <script>
                        $("#mcat-12").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-12").fadeIn(0);
                                $("#foodlist-12").addClass('slideUp2');
                            }, 700);
                        });
                    </script>


                    <li id="mcat-13" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/wine.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Винна карта</div>
                    </li>

                    <script>
                        $("#mcat-13").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-13").fadeIn(0);
                                $("#foodlist-13").addClass('slideUp2');
                            }, 700);
                        });
                    </script>


                    <li id="mcat-14" class="cat_sel">
                        <div class="menuicon"
                             style=" background:url( '..<?php echo esc_url(get_template_directory_uri()); ?>/images/cats/bar.jpg' ) center center no-repeat!important; background-size: cover!important;"></div>
                        <div class="menuname">Бар</div>
                    </li>

                    <script>
                        $("#mcat-14").click(function () {
                            $("li[id^='mcat-']").removeClass('cat_sel');
                            $(this).addClass('cat_sel');

                            $('html, body').animate({
                                scrollTop: $(".food_menu").offset().top
                            }, 300);

                            $("div[id^='foodlist-']").removeClass('slideUp2');
                            $("div[id^='foodlist-']").fadeOut(400);

                            setTimeout(function () {
                                $("#foodlist-14").fadeIn(0);
                                $("#foodlist-14").addClass('slideUp2');
                            }, 700);
                        });
                    </script>


                </ul>
            </div>
            <div class="mf_n next" id="fixme"></div>
            <div class="clear"></div>
        </div>

        <script type="text/javascript">
            $(function () {
                $(".nonImageContent .carousel").jCarouselLite({
                    btnNext: ".nonImageContent .next",
                    btnPrev: ".nonImageContent .prev",
                    visible: 5,
                    circular: false
                });
            });
        </script>

        <script>
            $(document).ready(function () {

                $('#foodlist-1').removeClass('off');

                var menufood = $('.food_menu');

                $(window).scroll(function () {
                    var y = $(this).scrollTop();
                    var z = $('.food_menu').offset().top;

                    if (y >= z) {

                        setTimeout(function () {
                            //$('#foodlist-1').addClass('slideUp2');
                        }, 200);
                    }

                });
            });
        </script>
    </div>

    <div class="food_menu_inner">

        <div id="foodlist-1" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Піца</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Маргарита»</div>
                            <div class="food_w">370 г</div>
                            <div class="food_price">105.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела та свіжі томати)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Везувій»</div>
                            <div class="food_w">400 г</div>
                            <div class="food_price">145.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела та шинка)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Саляміно»</div>
                            <div class="food_w">380 г</div>
                            <div class="food_price">113.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела та салямі)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Прошутто ді Парма»</div>
                            <div class="food_w">400 г</div>
                            <div class="food_price">193.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, пармська шинка, рукола та сир пармезан)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Папероні»</div>
                            <div class="food_w">400 г</div>
                            <div class="food_price">128.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, бекон, перець та гострий перець)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Сір Філіпо»</div>
                            <div class="food_w">400 г</div>
                            <div class="food_price">130.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, шинка та оливки)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Гаваї»</div>
                            <div class="food_w">450 г</div>
                            <div class="food_price">144.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(соус томатно-вершковий, сир моцарела, шинка та ананас)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Панчета»</div>
                            <div class="food_w">400 г</div>
                            <div class="food_price">116.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, бекон та печериці)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Шпінаціо»</div>
                            <div class="food_w">480 г</div>
                            <div class="food_price">126.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, бекон, шпинат, яйце та часник)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Кваттро стаджионі»</div>
                            <div class="food_w">460 г</div>
                            <div class="food_price">159.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, салямі, шинка, печериці та свіжі томати)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Вегетаріано»</div>
                            <div class="food_w">480 г</div>
                            <div class="food_price">119.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, свіжі томати, броколі, перець та кукурудза)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Капрічіоза»</div>
                            <div class="food_w">420 г</div>
                            <div class="food_price">124.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, шинка, печериці та маслини)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Мілане»</div>
                            <div class="food_w">420 г</div>
                            <div class="food_price">154.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, свинна корейка, вялені томати та рукола)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Марчела»</div>
                            <div class="food_w">460 г</div>
                            <div class="food_price">158.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, куряча грудинка, печериці, брокколі та сир горгонзола)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Тонно»</div>
                            <div class="food_w">420 г</div>
                            <div class="food_price">156.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, тунець, цибуля та маслини)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Болзано»</div>
                            <div class="food_w">480 г</div>
                            <div class="food_price">119.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, куряча грудинка, вершки та шпинат)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Аль-Капоне»</div>
                            <div class="food_w">460 г</div>
                            <div class="food_price">131.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, куряча грудинка, бекон та свіжі томати)</div>
                    </div>

                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Мексікано»</div>
                            <div class="food_w">470 г</div>
                            <div class="food_price">144.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, салямі, цибуля, яйце та гострий перець)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Кальцоне»</div>
                            <div class="food_w">450 г</div>
                            <div class="food_price">151.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, шинка, печериці, салямі та перець)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Фруті ді маре»</div>
                            <div class="food_w">430 г</div>
                            <div class="food_price">139.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, морепродукти та лимон)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Моністо»</div>
                            <div class="food_w">490 г</div>
                            <div class="food_price">157.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, салямі, помідори чері, рукола)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Кваттро формаджі»</div>
                            <div class="food_w">400 г</div>
                            <div class="food_price">182.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, емменталь, горгонзола, пармезан)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Ріалто»</div>
                            <div class="food_w">470 г</div>
                            <div class="food_price">170.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, тунець, шинка, свіжі томати, цибуля)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Ал салмон»</div>
                            <div class="food_w">430 г</div>
                            <div class="food_price">163.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир моцарела, свіжий лосось, зелень та лимон)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Фокачо»</div>
                            <div class="food_w">200 г</div>
                            <div class="food_price">59.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(орегано, сир памезан, оливкова олія)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Кваттро карне»</div>
                            <div class="food_w">460 г</div>
                            <div class="food_price">169.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(Моцарела, салямі, шинка, бекон, свинна корейка)</div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-2" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Паста</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Тальятелле ді манзо</div>
                            <div class="food_w">350 г</div>
                            <div class="food_price">132.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(макарони тальятелле, яловича вирізка, томати очищені, базилік та сир
                            пармезан)
                        </div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Фарфаллє кон сальмоне</div>
                            <div class="food_w">300 г</div>
                            <div class="food_price">131.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(макарони фарфаллє, лосось та сир пармезан)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Спагетті</div>
                            <div class="food_w">350 г</div>
                            <div class="food_price">103.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(макарони спагетті, курятина, базилік, томати та вершково-сирний соус)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Спагетті кон фрутті ді маре</div>
                            <div class="food_w">350 г</div>
                            <div class="food_price">112.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(макарони спагетті, морепродукти та сир пармезан)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Пенне «Кваттро формаджі»</div>
                            <div class="food_w">300 г</div>
                            <div class="food_price">132.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(вершкова паста з сиром Ементаль, Горгонзола, Пармезан та Камембер)</div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-3" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Салати</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Инсалата кон поло формаджио е фунги</div>
                            <div class="food_w">320 г</div>
                            <div class="food_price">107.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(куряче філе, гриби та сир пармезан на подушці з зелені і свіжих томатів)
                        </div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Інсалата кон фегатто</div>
                            <div class="food_w">250 г</div>
                            <div class="food_price">71.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(ніжна печінка зі стиглими свіжими томатами та духмяними крутонами у
                            часниково-гірчичному соусі)
                        </div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Моністо»</div>
                            <div class="food_w">220 г</div>
                            <div class="food_price">119.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(зелений мікс з помідорами чері та сиром філадельфія у медово-гірчичному
                            соусі)
                        </div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Грецький</div>
                            <div class="food_w">230 г</div>
                            <div class="food_price">84.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(мікс свіжих овочів, маслин та сиру фета)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Італійський</div>
                            <div class="food_w">220 г</div>
                            <div class="food_price">115.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(рукола, пармська шинка, помідори чері, бальзамічний соус, сир пармезан та
                            кедрові горіхи)
                        </div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Інсалата кон сальмоне</div>
                            <div class="food_w">240 г</div>
                            <div class="food_price">133.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(слабосолений лосось на подушці із зелені та помідорами чері під сиром
                            пармезан)
                        </div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Бертолі»</div>
                            <div class="food_w">300 г</div>
                            <div class="food_price">115.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(овочевий мікс на подушці із зелені та гарячими медальйонами з телятини)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Капрезе</div>
                            <div class="food_w">200 г</div>
                            <div class="food_price">106.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(Сир Моцарела, помідори чері, соус песто)</div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-4" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Холодні закуски</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Піато формаджіо</div>
                            <div class="food_w">300 г</div>
                            <div class="food_price">163.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(сир горгонзола, камамбер, пармезан і емменталь з виноградом, горіхами та
                            медом)
                        </div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Піатто тоскано</div>
                            <div class="food_w">200 г</div>
                            <div class="food_price">144.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(прошутто, салямі чорізо та салямі сировялена)</div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-5" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Перші страви</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Бограч</div>
                            <div class="food_w">300 г</div>
                            <div class="food_price">81.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(гуляш з м'яким присмаком диму та пікантним відтінком мадярської паприки)
                        </div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Бульйон з курки</div>
                            <div class="food_w">300 г</div>
                            <div class="food_price">48.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Крема ді фунті</div>
                            <div class="food_w">250 г</div>
                            <div class="food_price">76.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(ніжний крем-суп з білих карпатських грибів)</div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-6" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Гарячі страви</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Стейк із свинної корейки</div>
                            <div class="food_w">100 г</div>
                            <div class="food_price">76.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Філе міньйон</div>
                            <div class="food_w">100 г</div>
                            <div class="food_price">123.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(стейк із яловичої вирізки)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Стейк з курятини</div>
                            <div class="food_w">100 г</div>
                            <div class="food_price">48.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Стейк із лосося</div>
                            <div class="food_w">100 г</div>
                            <div class="food_price">123.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Форель печена</div>
                            <div class="food_w">100 г</div>
                            <div class="food_price">99.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Спідіено ді полло помперо</div>
                            <div class="food_w">300 г</div>
                            <div class="food_price">122.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(шматочки курячого філе обсмажені в беконі з картоплею фрі та сирним соусом)
                        </div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Манзо нел віно россо</div>
                            <div class="food_w">200 г</div>
                            <div class="food_price">151.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(соковитий стейк з яловичини під соусом із червоного вина)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Карне ді маєле е карбонаре</div>
                            <div class="food_w">250 г</div>
                            <div class="food_price">131.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(медальйони з свинної вирізки, овочами гриль та соусом карбонаре)</div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-7" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Гарніри</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Картопля з сиром рокфор</div>
                            <div class="food_w">250 г</div>
                            <div class="food_price">81.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(картопля на вершках з в’яленою цибулею та сиром рокфор)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Картопля фрі</div>
                            <div class="food_w">200 г</div>
                            <div class="food_price">61.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Овочі гриль</div>
                            <div class="food_w">200 г</div>
                            <div class="food_price">90.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(баклажан, цукіні, перець, свіжі томати, печериці та цибуля шалот)</div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Рис на вершковому маслі</div>
                            <div class="food_w">200 г</div>
                            <div class="food_price">48.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-8" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Соуси</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Сирний</div>
                            <div class="food_w">50 г</div>
                            <div class="food_price">20.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Часниково-маковий</div>
                            <div class="food_w">50 г</div>
                            <div class="food_price">17.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Барбекю</div>
                            <div class="food_w">50 г</div>
                            <div class="food_price">17.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Сім видів перцю</div>
                            <div class="food_w">50 г</div>
                            <div class="food_price">17.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-9" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Десерти</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Тірамісу</div>
                            <div class="food_w">150 г</div>
                            <div class="food_price">76.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Чізкейк з ягідним соусом</div>
                            <div class="food_w">150 г</div>
                            <div class="food_price">65.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Яблучний штрудель з морозивом</div>
                            <div class="food_w">200 г</div>
                            <div class="food_price">59.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Морозиво з топінгом в асортименті</div>
                            <div class="food_w">150 г</div>
                            <div class="food_price">32.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Панакота</div>
                            <div class="food_w">150 г</div>
                            <div class="food_price">39.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-10" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Гарячі напої</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Рістретто</div>
                            <div class="food_w">1 чашка</div>
                            <div class="food_price">25.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Амерікано</div>
                            <div class="food_w">1 чашка</div>
                            <div class="food_price">25.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Амерікано з молоком</div>
                            <div class="food_w">1 чашка</div>
                            <div class="food_price">29.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Еспрессо</div>
                            <div class="food_w">1 чашка</div>
                            <div class="food_price">25.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Капучіно</div>
                            <div class="food_w">1 чашка</div>
                            <div class="food_price">35.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Латте</div>
                            <div class="food_w">1 чашка</div>
                            <div class="food_price">40.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Глінтвейн</div>
                            <div class="food_w">200 г</div>
                            <div class="food_price">37.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Чорний чай</div>
                            <div class="food_w">400 г</div>
                            <div class="food_price">25.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Зелений чай</div>
                            <div class="food_w">400 г</div>
                            <div class="food_price">25.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Фруктовий чай</div>
                            <div class="food_w">400 г</div>
                            <div class="food_price">25.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Трав'яний чай</div>
                            <div class="food_w">400 г</div>
                            <div class="food_price">25.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Чай Вітамінний</div>
                            <div class="food_w">300 мл</div>
                            <div class="food_price">33.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr">(обліпиховий, імбирний калиновий)</div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-11" class="off">
            <div class="food_menu_right">

                <div class="food_cat">До пива</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Хрусткі курячі крильця з часниково-маковим соусом</div>
                            <div class="food_w">200 г</div>
                            <div class="food_price">85.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Салямі чорізо</div>
                            <div class="food_w">100 г</div>
                            <div class="food_price">65.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-12" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Пиво</div>

                <div class="inmenu">


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Leffe Brown»</div>
                            <div class="food_w">0.33 л</div>
                            <div class="food_price">41.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Leffe Brown»</div>
                            <div class="food_w">0.5 л</div>
                            <div class="food_price">61.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Leffe Blond»</div>
                            <div class="food_w">0.33 л</div>
                            <div class="food_price">41.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Leffe Blond»</div>
                            <div class="food_w">0.5 л</div>
                            <div class="food_price">61.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Hoegaarden»</div>
                            <div class="food_w">0.33 л</div>
                            <div class="food_price">41.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Hoegaarden»</div>
                            <div class="food_w">0.5 л</div>
                            <div class="food_price">61.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Чернігівське Світле»</div>
                            <div class="food_w">0.33 л</div>
                            <div class="food_price">21.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Чернігівське Світле»</div>
                            <div class="food_w">0.5 л</div>
                            <div class="food_price">31.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Stella Artois»</div>
                            <div class="food_w">0.5 л</div>
                            <div class="food_price">36.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-13" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Винна карта</div>

                <div class="inmenu">


                    <div class="subcat">Шампанське</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Одесса Брют»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">132.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Одесса Золотое»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">152.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Iгристі вина</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Martini Asti»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">630.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Iталійські вина</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Primavera dei Sensi Rosso Italiano»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">235.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Cantina di Negrar Bardolino Chiaretto»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">270.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Французькі вина</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Pierre Chainier Rose d’Anjou»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">217.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Barton & Guestier Reserve Sauvignon Blanc»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">275.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Barton & Guestier Passeport Rose d'Anjou»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">380.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Barton & Guestier Reserve Cabernet Sauvignon»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">340.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Dourthe Grands Terroirs AOC Bordeaux Sauvignon»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">300.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Dourthe Grands Terroirs AOC Bordeaux»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">300.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Чилійські вина</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Undurraga Varrietal Sauvignon Blanc»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">190.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Undurraga Varrietal Carmenere»</div>
                            <div class="food_w">0,75 л</div>
                            <div class="food_price">190.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Іспанські вина</div>


                    <div class="subcat">Грузинські вина</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Ge Alazani Valley white»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">24.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Ge Alazani Valley red»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">24.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Ge Napareuli»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">24.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Ge Saperavi»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">24.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Teliani Valley Мукузани»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">36.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Teliani Valley Киндзмараули»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">46.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Teliani Valley Цинандали»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">24.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>

                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div id="foodlist-14" class="off">
            <div class="food_menu_right">

                <div class="food_cat">Бар</div>

                <div class="inmenu">


                    <div class="subcat">Горілка</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Карпатська вершина»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">31.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Absolut»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">75.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Nemiroff Light»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">35.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Nemiroff Lex»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">68.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Finlandia»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">87.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Коньяк</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Закарпатський 4 зірки»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">57.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Martell VS»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">190.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Hennessy V.S.O.P»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">330.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Hennessy V.S.»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">240.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Remy Martin VSOP»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">285.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Remy Martin VS»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">245.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Арарат</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">78.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Віскі</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Ballantine's»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">148.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Johnnie Walker Red Label»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">137.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Johnnie Walker Black Label»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">272.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Chivas Regal»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">196.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Bells Original»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">73.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Jack Daniels»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">149.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">JAMESON</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">174.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Джин</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Beefeater»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">120.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Ром</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Captain Morgan Black»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">97.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Captain Morgan Spiced Gold»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">92.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Текіла</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Sauza Gold»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">153.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Sauza Blue Silver»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">153.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Вермут</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Martini Bianco»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">65.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Настойка</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Becherovka»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">88.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Jagermaister»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">98.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Лікер</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Vana Tallinn»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">98.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Baileys»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">133.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Sambuсa Classic»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">91.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Бальзам</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Riga Black»</div>
                            <div class="food_w">100 мл</div>
                            <div class="food_price">121.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="subcat">Безалкогольні напої</div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Боржомі»</div>
                            <div class="food_w">0.5 л</div>
                            <div class="food_price">51.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Моршинська» слабогазована</div>
                            <div class="food_w">0.5 л</div>
                            <div class="food_price">31.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Моршинська» негазована</div>
                            <div class="food_w">0.5 л</div>
                            <div class="food_price">31.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Пепсі»</div>
                            <div class="food_w">0.33 л</div>
                            <div class="food_price">19.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Микулинецька»</div>
                            <div class="food_w">0.5 л</div>
                            <div class="food_price">17.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Напій «7UP лайм і м'ята»</div>
                            <div class="food_w">0.5 л</div>
                            <div class="food_price">21.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">«Sandora» в асортименті</div>
                            <div class="food_w">200 мл</div>
                            <div class="food_price">17.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Апельсиновий фреш</div>
                            <div class="food_w">200 мл</div>
                            <div class="food_price">59.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Грейпфрутовий фреш</div>
                            <div class="food_w">200 мл</div>
                            <div class="food_price">63.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Молочний коктейль</div>
                            <div class="food_w">300 мл</div>
                            <div class="food_price">39.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>


                    <div class="one_food">
                        <div class="food_main_info">
                            <div class="food_name">Морс</div>
                            <div class="food_w">200 мл</div>
                            <div class="food_price">17.00 <span style="text-transform: uppercase;">грн</span></div>
                            <div class="clear"></div>
                        </div>

                        <div class="ingr"></div>
                    </div>

                </div>

            </div>
            <div class="clear"></div>
        </div>


    </div>


</section>


<section class="table_reserve">
    <div id="res_table_marker"
         style="width: 5px; height: 5px; position: absolute; margin-top: -70px; visibility: hidden;"></div>
    <div id="res_table_marker2"
         style="width: 5px; height: 5px; position: absolute; margin-top: -25%; visibility: hidden;"></div>

    <div class="trh">замовлення столу</div>

    <div class="pizza_form" style="visibility: hidden;">
        <form id="clb1" class="form_check" method="post" action="">
            <div class="piz_inp"><input type="text" id="fn" name="name" autocomplete="off" class="each rfield"
                                        placeholder="Iм'я"/></div>
            <div class="piz_inp_2"><input type="text" id="ph" name="phone" autocomplete="off"
                                          class="each rfield phonefield" placeholder="Номер телефону"/></div>
            <div class="clear"></div>
            <button class="pizza_ok btnsubmit">замовити</button>
        </form>
    </div>

</section>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/map.js"></script>

<section class="mapsect">
    <div id="map-canvas"></div>
</section>

<footer>
    <div class="footer_inner">
        <div class="all_fbs">
            <div class="footer_block">
                <div class="fbl_head"><?php echo __('[:ru]Рейтинги[:en]Ratings[:ua]рейтинги'); ?></div>
                <div class="fsq"></div>
                <div class="bok"></div>
            </div>

            <div class="footer_block">
                <div class="fbl_head"><?php echo __('[:ru]Адрес[:en]Address[:ua]Адреса'); ?></div>
                <ul>
                    <li class="fbl"><?php echo __('[:ru]Ивано-Франковская обл.,[:en]Ivano-Frankivsk region,[:ua]Iвано-Франкiвська обл.,'); ?></li>
                    <li class="fbl"><?php echo __('[:ru]Яремчанский район[:en]Yaremchans\'\kiy district[:ua]Яремчанський район'); ?>,</li>
                    <li class="fbl"><?php echo __('[:ru]село «Поляница»[:en]«Polyanytsya» villiage,[:ua]село «Поляниця»,'); ?>,</li>
                    <li class="fbl"><?php echo __('[:ru]участок «Вишни» д. 286[:en]«Vyshni» area, 286[:ua]дiлянка «Вишнi» буд. 286'); ?></li>
                </ul>
            </div>


            <div class="footer_block">
                <div class="fbl_head"><?php echo __('[:ru]Отель[:en]Hotel[:ua]Готель'); ?></div>
                <ul>
                    <li>+38 (098) 888-81-08</li>
                    <li>hotel@monysto.com</li>
                    <li><?php echo __('[:ru]Время работы: круглосуточно[:en]Hours: around the clock[:ua]Час роботи: цiлодобово'); ?></li>
                </ul>
            </div>


            <div class="footer_block  fbl">
                <div class="fbl_head"><?php echo __('[:ru]Пиццерия[:en]Pizzeria[:ua]Пiцерiя'); ?></div>
                <ul>
                    <li>+38 (097) 000-27-27</li>
                    <li>pizza@monysto.com</li>
                    <li><?php echo __('[:ru]Время работы:[:en]Hours:[:ua]Час роботи:'); ?> 12:00-00:00</li>
                </ul>
            </div>


            <div id="clear"></div>
        </div>
        <div id="clear"></div>

        <div class="socials">
            <div class="socials_in">
                <ul>
                    <li>
                    	<a href="https://www.facebook.com/monysto.pizza">
                    		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Facebook.png" class="sl">
                    	</a>
                    </li>
                    <li>
                    	<a href="https://ru.foursquare.com/v/monysto-pizza/52c58dc4498e8f9b03e89fe3">
                    		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Foursquare.png" class="sl">
                        </a>
                   </li>
                </ul>
            </div>
        </div>
        <div id="clear"></div>
    </div>
</footer>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/is.mobile.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/formcheck.js"></script>

<div class="popup off" style="background:#fff">
    <div class="hot_head">Тільки у нас</div>
    <div class="hot_text">Береш дві піци і третя в подарунок</div>
</div>

<script>
    $(window).scroll(function (e) {
        parallax();
    });
    function parallax() {
        var scrolled = $(window).scrollTop();
        $('.parallax').css('top', -(scrolled * 0.35) + 'px');
    }
</script><!--PARALLAX-->

<script>
    $("#toabout").click(function () {
        // $('#video').fadeOut(500);
        $('html, body').animate({
            scrollTop: $(".first_text").offset().top
        }, 700);

    });
    $("#tocrew").click(function () {
        // $('#video').fadeOut(500);
        $('html, body').animate({
            scrollTop: $(".chief").offset().top
        }, 1000);

    });

    $("#tomenu").click(function () {
        // $('#video').fadeOut(500);
        $('html, body').animate({
            scrollTop: $(".food_menu").offset().top
        }, 1000);

    });

    $("#toreserve").click(function () {
        //$('#video').fadeOut(500);
        $('html, body').animate({
            scrollTop: $("#res_table_marker").offset().top
        }, 1000);
    });

    $("#tocontacts").click(function () {
        //$('#video').fadeOut(500);
        $('html, body').animate({
            scrollTop: $("footer").offset().top
        }, 1000);
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
</script>

<script>
    $.ajax({
        url: 'rates/fsq_sx.php',
        success: function (data) {
            $('.fsq_sx').html(data);
        }
    });

    $.ajax({
        url: 'rates/bok_s.php',
        success: function (data) {
            $('.bok_s').html(data);
        }
    });
</script> <!---RATINGS START--->

<script>
    $.ajax({
        url: 'rates/fsq.php',
        success: function (data) {
            $('.fsq').html(data);
        }
    });

    $.ajax({
        url: 'rates/bok.php',
        success: function (data) {
            $('.bok').html(data);
        }
    });
</script> <!---RATINGS--->

<script>
    jQuery(document).ready(function ($) {
        $("#clb1").submit(function () {
            var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "/table_res.php",
                data: str,
                success: function () {
                    $('').html(result);
                }
            });
            return false;
        });
    });
</script>

<script>
    $(".startdown").click(function () {
        $('html, body').animate({
            scrollTop: $(".first_text").offset().top
        }, 700);

    });
</script>

<script>
    $(document).ready(function () {
        var rmarker = $('#res_table_marker2');

        $(window).scroll(function () {
            var y = $(this).scrollTop();
            var z = $('#res_table_marker2').offset().top;

            if (y >= z) {

                setTimeout(function () {
                    $('.pizza_form').addClass('slideUp3');
                }, 300);


            }

        });
    });
</script>

<script>
    $(".ov").click(function () {

        $('.all_ok').addClass('off');
        $('.popup').addClass('off');
        $('#fn,#ph').val('');
        $('body').removeClass('noflow');
        $('.ov').fadeOut(400);
    });
</script>

<script>
    $(".ov2").click(function () {
        $('.popup').addClass('off');
        $('body').removeClass('noflow');
        $('.ov2').fadeOut(400);
    });
</script>

</body>
</html>