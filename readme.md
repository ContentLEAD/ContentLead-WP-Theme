#  ContentLEAD Integration WordPress Theme

## Summary:

Stripped down WordPress theme based on HTML5 Reset Theme (http://html5reset.org/) to replicate design of non-WordPress based web sites. See the theme live at http://tech.contentlead.com/test-wordpress/. 

## Special Features:

- All areas and images are designed using a simple "Golden Ratio" layout (http://en.wikipedia.org/wiki/Golden_ratio)
- Pagination for archives and categories instead of "Next Posts" and "Previous Posts"
- Sprite sheet for social media icons
- AJAX contact form and newsletter sign-up
- Hardcoded Facebook Like box 
- Hardcoded Tweets with Tweet! Javascript (http://tweet.seaofclouds.com/)
                                                                        
## Customization:
- Contact Form 7 (<a href="https://github.com/ContentLEAD/ContentLead-WP-Theme/wiki/Contact-Form-7">How to</a>)
- MailChimp Sign Up Form (<a href="https://github.com/ContentLEAD/ContentLead-WP-Theme/wiki/MailChimp-Newsletter-Sign-Up-Form">How To</a>)
- Like Box (change iframe in sidebar.php on line 31 and set to appropiate width; standard = 295px)
- Twitter (change username in footer.php on line 21)
- Nr. of posts in latest news (index.php line 9 $latest_news_show)
- Nr. of posts per category on index page (index.php line 36 $category_post_show)

## Recommended Plugins:
- Brafton API
- Social by MailChimp (http://mailchimp.com/social-plugin-for-wordpress/) enables commeting with Twitter and/or Facebook Login
- W3 Total Cache (http://wordpress.org/extend/plugins/w3-total-cache/)
- WordPress SEO by Yoast (http://yoast.com/wordpress/seo/) takes care of XML sitemap, meta tags, open graph meta tags, etc.
- Google Analytics for WordPress by Yoast (http://yoast.com/wordpress/google-analytics/)
- WordPress Popular Posts
- Yet Another Related Posts Plugin

## Images:
- use "Regenerate Thumbnails" plugin (http://wordpress.org/extend/plugins/regenerate-thumbnails/) to resize thumnails to custom sizes if needed 

## To Be Done:
- Date Icon & Ribbon
- Adjust html for post images (figure & caption tags)
- use sharrre javascript instead of AddThis social sharing
- Icons for contact form & newsletter input fields
- Add Admin section for theme on backend of WordPress
- Latest News slider
- Design/Implement different selectable layouts for index.php
- IE6/7/8 Update Reminder
- Styled ContentLEAD Login page