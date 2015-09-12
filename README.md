# flat-otcs

**This is horribly coded.**

In case you think I'm being humble about my own skills, let me repeat that: **This is horribly coded.**

What does that mean? A couple of things:

* I have next to no experience in ~~HTML/CSS/~~PHP.
* This is completely non-easily customizable.
* This hasn't been written in a programmatically sound way.
* It's based on a flawed understanding of WordPress and the Flat theme it's based on.
* This code is about as stable as a house of cards in a wind tunnel.

Now that I've made that clear, we can proceed.

### What is flat-otcs?

Flat-otcs is a child theme for the [Flat WordPress theme](http://www.yoarts.com/blog/wordpress/free-flat-design-wordpress-theme.html) by [YoArts](http://www.yoarts.com/).

It features **very** minor edits that allow for the use of a small 300x169 looping webm in the header of the theme along with some other minor stylistic changes to the text of the title/description and to the footer.

### How do I use flat-otcs?

It's a WordPress theme, so naturally you'll need to shove it within `/wp-content/themes/`. It requires its parent theme, [Flat](https://wordpress.org/themes/flat/) to be installed as well.

To change the video file in use, either replace /`flat-otcs/assets/video/blahblahblah.[webm, mp4, ogg]` with your own videos, or change the video (with an id of 'videoHeader') sources within functions.php to reflect the new video file.

All of the related CSS stylings are in `/flat-otcs/style.css`.
