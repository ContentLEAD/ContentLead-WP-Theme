<div id="sidebar">
    <aside class="social-media">
            <div id="facebook">
                <a id="facebook" target="_blank" href="http://www.facebook.com/ContentLEAD" rel="nofollow">
                    <img src="wp-content/themes/contentlead/img/icons/fb.png"></img>
                </a>
            </div>
            <div id="twitter">
                <a target="_blank" href="https://twitter.com/#!/contentlead" rel="nofollow">
                    <img src="wp-content/themes/contentlead/img/icons/twitter.png"></img>
                </a>
            </div>
            <div id="google-plus">
                <a target="_blank" href="https://plus.google.com/101669842922792171283/" rel="nofollow">
                    <img src="wp-content/themes/contentlead/img/icons/gplus.png"></img>
                </a>
            </div>
            <div id="divnkedin">
                <a target="_blank" href="http://www.divnkedin.com/company/contentlead" rel="nofollow">
                    <img src="wp-content/themes/contentlead/img/icons/linkedin.png"></img>
                </a>
            </div>
            <div id="pinterest">
                <a target="_blank" href="http://pinterest.com/ContentLEAD/" rel="nofollow">
                    <img src="wp-content/themes/contentlead/img/icons/pinterest.png"></img>
                </a>
            </div>
            <div id="rss">
                <a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>feed/" rel="nofollow">
                    <img src="wp-content/themes/contentlead/img/icons/rss.png"></img>
                </a>
            </div>
    </aside>

    <!-- Contact Us Button
    <a id="contact-button" href="#"><i class="icon-phone"></i> Contact Us</a> -->

    <!-- Begin Contact Us Form-->
    <!--
    <aside id="cf7-contact-us" class="widget">
        <h2 class="widget-title">Contact Us</h2>
        <p>Any questions. We are glad to answer them. Just send us a quick message!</p><br>
    </aside>
    -->
    <!--End Contact Us Form -->


    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : ?>

	<?php endif; ?>

</div>
