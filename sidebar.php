<div id="sidebar">

    <aside class="social-media">
        <ul>
            <li id="facebook"><a id="facebook" target="_blank" href="http://www.facebook.com/ContentLEAD" rel="nofollow"></a></li>
            <li id="twitter"><a target="_blank" href="https://twitter.com/#!/contentlead" rel="nofollow"></a></li>
            <li id="google-plus"><a target="_blank" href="https://plus.google.com/101669842922792171283/" rel="nofollow"></a></li>
            <li id="linkedin"><a target="_blank" href="http://www.linkedin.com/company/contentlead" rel="nofollow"></a></li>
            <li id="pinterest"><a target="_blank" href="http://pinterest.com/ContentLEAD/" rel="nofollow"></a></li>
            <li id="rss"><a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>feed/" rel="nofollow"></a></li>
        </ul>
    </aside>

    <!-- Contact Us Button
    <a id="contact-button" href="#"><i class="icon-phone"></i> Contact Us</a> -->

    <!-- Begin Contact Us Form-->
    <aside id="cf7-contact-us" class="widget">
        <h2 class="widget-title">Contact Us</h2>
        <p>Any questions. We are glad to answer them. Just send us a quick message!</p><br>
        <?php echo do_shortcode( '[contact-form-7 id="610" title="Contact Us"]' ); ?>
    </aside> <!--End Contact Us Form -->

    <!-- Begin MailChimp Signup Form-->
    <aside id="mc-sign-up" class="widget">
        <h2 class="widget-title">Newsletter</h2>
        <p>Receive insider news on content marketing by signing up for our newsletter!</p><br>
        <?php echo do_shortcode( '[contact-form-7 id="614" title="MailChimp Sign Up Form"]' ); ?>
    </aside> <!--End MailChimp Signup Form -->

    <!-- Begin Facebook Like Box -->
    <aside id="fb-like-box" class="widget">
        <h2 class="widget-title">Facebook</h2>
            <div class="fb-like-box-wrapper">
                <!-- Get client iframe from facebook and set width to 295px -->
                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FContentLEAD&amp;width=295&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23FFF&amp;stream=false&amp;header=false&amp;appId=182104188561393" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:295px; height:258px;" allowTransparency="true"></iframe>
            </div>
    </aside> <!--End Facebook Like Box -->

    <!-- Tweet! Javascript -->
    <aside id="twitter" class="widget">
        <h2 class="widget-title">Twitter</h2>
            <div class="tweet"></div>
    </aside>

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : ?>
	
	<?php endif; ?>

</div>