<div id="sidebar">

    <aside class="social-media">
        <ul>
            <li><a id="facebook" target="_blank" href="http://www.facebook.com/ContentLEAD" rel="nofollow"></a></li>
            <li><a id="twitter" target="_blank" href="https://twitter.com/#!/contentlead" rel="nofollow"></a></li>
            <li><a id="google-plus" target="_blank" href="https://plus.google.com/101669842922792171283/" rel="nofollow"></a></li>
            <li><a id="linkedin" target="_blank" href="http://www.linkedin.com/company/contentlead" rel="nofollow"></a></li>
            <li><a id="pinterest" target="_blank" href="http://pinterest.com/ContentLEAD/" rel="nofollow"></a></li>
            <li><a id="rss" target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>feed/" rel="nofollow"></a></li>
        </ul>
    </aside>

    <!-- Contact Us Button -->
    <a id="contact-button" href="#"><i class="icon-phone"></i> Contact Us</a>

    <!-- Begin MailChimp Signup Form-->
    <aside id="mc-sign-up" class="widget">
        <h3 class="widget-title">Newsletter</h3>
        <?php echo do_shortcode( '[contact-form-7 id="614" title="MailChimp Sign Up Form"]' ); ?>
    </aside> <!--End MailChimp Signup Form -->

    <!-- Begin Facebook Like Box -->
    <aside id="fb-like-box" class="widget">
        <h3 class="widget-title">Facebook</h3>
            <div class="fb-like-box-wrapper">
                <!-- Get client iframe from facebook and set width to 295px -->
                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FContentLEAD&amp;width=295&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23FFF&amp;stream=false&amp;header=false&amp;appId=182104188561393" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:295px; height:258px;" allowTransparency="true"></iframe>
            </div>
    </aside> <!--End Facebook Like Box -->

    <!-- Tweet! Javascript -->
    <aside id="twitter" class="widget">
        <h3 class="widget-title">Twitter</h3>
            <div class="tweet"></div>
    </aside>

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : ?>
	
	<?php endif; ?>

</div>