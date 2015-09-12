<?php

function favicon() {
    echo '<link rel="apple-touch-icon-precomposed" sizes="57x57" href="./wp-content/themes/flat-otcs/assets/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./wp-content/themes/flat-otcs/assets/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./wp-content/themes/flat-otcs/assets/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./wp-content/themes/flat-otcs/assets/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="./wp-content/themes/flat-otcs/assets/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="./wp-content/themes/flat-otcs/assets/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="./wp-content/themes/flat-otcs/assets/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="./wp-content/themes/flat-otcs/assets/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="./wp-content/themes/flat-otcs/assets/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="./wp-content/themes/flat-otcs/assets/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="./wp-content/themes/flat-otcs/assets/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./wp-content/themes/flat-otcs/assets/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="./wp-content/themes/flat-otcs/assets/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="OldTalesChangeStyle"/>
    <meta name="msapplication-TileColor" content="#618B10" />
    <meta name="msapplication-TileImage" content="./wp-content/themes/flat-otcs/assets/img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="./wp-content/themes/flat-otcs/assets/img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="./wp-content/themes/flat-otcs/assets/img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="./wp-content/themes/flat-otcs/assets/img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="./wp-content/themes/flat-otcs/assets/img/favicon/mstile-310x310.png" />
    <meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=http://blog.oldtales.net/?feed=rss2&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=http://blog.oldtales.net/?feed=rss2&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=http://blog.oldtales.net/?feed=rss2&amp;id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=http://blog.oldtales.net/?feed=rss2&amp;id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=http://blog.oldtales.net/?feed=rss2&amp;id=5;cycle=1" />';
}

function video_header() {
    echo '<video id="videoHeader" autoplay loop>
                <source src="./wp-content/themes/flat-otcs/assets/video/blahblahblah.webm" type="video/webm">
                <source src="./wp-content/themes/flat-otcs/assets/video/blahblahblah.mp4" type="video/mp4">
                <source src="./wp-content/themes/flat-otcs/assets/video/blahblahblah.ogg" type="video/ogg">
            </video>';
}

add_action('flat_head_bottom', 'favicon');
add_action('flat_header_top', 'video_header');

?>
