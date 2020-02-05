<?php 
/* 
 * Template Name: Homepage
 * Template Post Type: page
 */
get_header();
?>
<section class="homepage">
  <div class="boxed">
    <div class="intro">
      <img class="logo" src="http://video.demo/wp-content/themes/wordpress-theme-starter-master/img/logos/color-webcrumbs-main.svg">
      <div class="intro-headers">
        <h1>Pave your digital footprint with WebCrumbs.</h1>  
        <h2>Coming soon</h2>
      </div>
    </div>
    <div class="icon-box">
      <img class="icon-size" style="fill: #ebbc4e"; src="http://video.demo/wp-content/themes/wordpress-theme-starter-master/img/icons/icon_instagram_yellow.svg">
      <img class="icon-size" style="fill: #ebbc4e"; src="http://video.demo/wp-content/themes/wordpress-theme-starter-master/img/icons/icon_twitter_yellow.svg">
      <img class="icon-size" style="fill: #ebbc4e"; src="http://video.demo/wp-content/themes/wordpress-theme-starter-master/img/icons/icon_facebook_yellow.svg">
    </div>
  </div>
  <div id="big-video">
      <div class="mov-overlay"></div>
      <div class="mov" 
        data-src="http://video.demo/wp-content/themes/wordpress-theme-starter-master/img/video/webcrumbs-placeholder.png" 
        data-video="http://video.demo/wp-content/themes/wordpress-theme-starter-master/img/video/webcrumbs-take-1.mp4"
        data-placeholder="http://video.demo/wp-content/themes/wordpress-theme-starter-master/img/video/webcrumbs-placeholder.png">
      </div>
    </div>
  </div>
</section>

<?php get_footer();
?>