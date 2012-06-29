#  ContentLEAD Integration WordPress Theme

## Summary:

Stripped down WordPress theme based on HTML5 Reset Theme (http://html5reset.org/) to replicate design of non-WordPress based web sites.

## Special Features:

- 2 style sheets: style.css is completely stripped for usage with client's style sheets. simple.css (imported by style.css) adds some basic styling to the theme.
- Pagination for archives and categories instead of "Next Posts" and "Previous Posts"
- Sprite sheet for social media icons
- CSS3 transition for simple social media icon "bump up" effect
- Icon Font Implementation (http://fortawesome.github.com/Font-Awesome/, only for contact button so far)
- Hardcoded Facebook Like box 
- Hardcoded Tweets with Tweet! Javascript (http://tweet.seaofclouds.com/)
                                                                        
## Customization:
- Like Box (change iframe in sidebar.php on line 31 and set to appropiate width; standard = 295px)
- Twitter (change username in footer.php on line 21)
- Nr. of posts in latest news (index.php line 9 $latest_news_show)
- Nr. of posts per category on index page (index.php line 36 $category_post_show)

## Images:
- use "Regenerate Thumbnails" plugin (http://wordpress.org/extend/plugins/regenerate-thumbnails/) to resize thumnails to custom sizes if needed 

## Recommended Plugins:
- Brafton API
- Social by MailChimp (http://mailchimp.com/social-plugin-for-wordpress/) enables commeting with Twitter and/or Facebook Login
- W3 Total Cache (http://wordpress.org/extend/plugins/w3-total-cache/)
- WordPress SEO by Yoast (http://yoast.com/wordpress/seo/) takes care of XML sitemap, meta tags, open graph meta tags, etc.
- WordPress Popular Posts
- Yet Another Related Posts Plugin


## To Be Done:
- Use icon font for email input field
- Replace hardcoded Mailchimp sign up form with AJAX WordPress plugin (http://wordpress.org/extend/plugins/newsletter-sign-up/)
- Implement full AJAX contact form for sidebar (plugin vs. coded?!?)
- Add Admin section for theme on backend of WordPress
- Latest News slider
- Design/Implement different selectable layouts for index.php
- IE6/7/8 Update Reminder
- Styled ContentLEAD Login page