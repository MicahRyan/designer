<?php
get_header( 'blog' ); ?>

<article class="website-example row wide"> 
    <div class="large-6 columns"> 
        <div class="row"> 
            <div class="small-8 columns"> 
                <img src="http://zurb.com/responsive/system/upload/desktop_screenshots/images/000/000/843/regular/5-door.mini.com.au-wide.jpg?1423529169" alt="Mini Cooper Site Desktop Image"> 
            </div>                                 
            <div class="small-4 columns"> 
                <img src="http://zurb.com/responsive/system/upload/mobile_screenshots/images/000/000/845/regular/5-door.mini.com.au-narrow.jpg?1423529203" alt="Mini Cooper Site Mobile Image"> 
            </div>                                 
        </div>                             
    </div>                         
    <div class="large-6 columns"> 
        <h3><?php _e( 'Mini Cooper', 'micah_ryan_web_design' ); ?></h3> 
        <h6><?php _e( 'built with foundation', 'micah_ryan_web_design' ); ?></h6> 
        <p><?php _e( 'There’s nothing small about the effects on this “Mini” website and its use of scrolling as a fly-around of its eponymous car. The parallax steps aside on mobile for a neat intuitive image layout. The hamburger menu spins into action when', 'micah_ryan_web_design' ); ?> <?php _e( 'clicked revealing a gorgeous dropdown.', 'micah_ryan_web_design' ); ?></p> 
        <a class="button" href="http://5-door.mini.com.au/">
            <?php _e( 'Take a Closer Look »', 'micah_ryan_web_design' ); ?>
        </a>                             
    </div>                         
</article>                                         

<?php get_footer( 'blog' ); ?>