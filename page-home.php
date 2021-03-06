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
      <img class="logo" src="<?php echo get_template_directory_uri();?>/img/logos/color-webcrumbs-main.png">
      <div class="intro-headers">
        <h1>Pave your digital footprint with WebCrumbs.</h1>  
        <h2>Coming soon</h2>
      </div>
    </div>
    <div class="icon-box">
      <a href="https://www.instagram.com/webcrumbs.dev/?hl=en" target="_blank"><img class="icon-size" src="<?php echo get_template_directory_uri();?>/img/icons/icon_instagram_blue.svg"></a>
      <a href="https://twitter.com/WebCrumbsDev" target="_blank"><img class="icon-size" src="<?php echo get_template_directory_uri();?>/img/icons/icon_twitter_blue.svg"></a>
      <a href="https://www.facebook.com/WebCrumbs.dev/" target="_blank"><img class="icon-size" src="<?php echo get_template_directory_uri();?>/img/icons/icon_facebook_blue.svg"></a>
    </div>
  </div>
  <div id="big-video">
      <div class="mov-overlay"></div>
      <div class="mov" 
        data-src="<?php echo get_template_directory_uri();?>/img/video/webcrumbs-placeholder.png" 
        data-video="<?php echo get_template_directory_uri();?>/img/video/webcrumbs-take-1.mp4"
        data-placeholder="<?php echo get_template_directory_uri();?>/img/video/webcrumbs-placeholder.png">
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>
