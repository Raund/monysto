<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->
	</div><!-- .site-inner -->
</div><!-- .site -->

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

<?php wp_footer(); ?>
</body>
</html>
