<!doctype html> 
<html class="no-js" <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />                            
        <script>
    // load a file
    loadCSS("css/style.min.css");
    loadCSS("css/animate.min.css");
    loadCSS("http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css");
  </script>         
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body class="wow fadeIn <?php echo implode(' ', get_body_class()); ?>" id="body"> 
        <div class="off-canvas-wrap" data-offcanvas> 
            <div class="inner-wrap"> 
                <nav class="header"></nav>                 
                <a id="top" class="right-off-canvas-toggle fixed" href="#"> 
                    <div class="menu"> 
                        <div class="top-bar"></div>                         
                        <div class="middle-bar"></div>                         
                        <div class="bottom-bar"></div>                         
                    </div>                     
                </a>                 
            </nav>             
            <!-- Off Canvas Menu -->             
            <aside class="right-off-canvas-menu"> 
                <!-- whatever you want goes here -->                 
                <ul class="side-nav main"> 
                    <li> 
                        <a href="index.html">
                            <?php _e( 'landing', 'micah_ryan_web_design' ); ?>
                        </a>                         
                    </li>                     
                    <li> 
                        <a class="is-active" href="faster.html">
                            <?php _e( 'faster', 'micah_ryan_web_design' ); ?>
                        </a>                         
                    </li>                     
                    <li> 
                        <a href="smarter.html">
                            <?php _e( 'Smarter', 'micah_ryan_web_design' ); ?>
                        </a>                         
                    </li>                     
                    <li> 
                        <a href="easier.html">
                            <?php _e( 'Easier', 'micah_ryan_web_design' ); ?>
                        </a>                         
                    </li>                     
                </ul>                 
                <ul class="side-nav secondary"> 
                    <li> 
                        <a href="about.html">
                            <?php _e( 'about', 'micah_ryan_web_design' ); ?>
                        </a>                         
                    </li>                     
                    <li> 
                        <a href="portfolio.html">
                            <?php _e( 'Portfolio', 'micah_ryan_web_design' ); ?>
                        </a>                         
                    </li>                     
                    <li> 
                        <a href="instagram.html">
                            <?php _e( 'Instagram', 'micah_ryan_web_design' ); ?>
                        </a>                         
                    </li>                     
                    <li> 
                        <a href="contact.html">
                            <?php _e( 'Contact', 'micah_ryan_web_design' ); ?>
                        </a>                         
                    </li>                     
                </ul>                 
            </aside>
            <section class="page-background"> 
                <a href="index.html"> 
                    <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mr-logo-long.png" alt="logo" /> 
                </a>
                <div id="portfolio" class="path-container wow fadeInDown">