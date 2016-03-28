
                </div>                 
                <!-- Main Content -->                                  
                <!-- Footer -->                 
                <footer class="row"> 
                    <div class="large-12 columns"> 
                        <hr /> 
                        <div class="row"> 
                            <div class="large-6 columns"> 
                                <p><?php _e( '© Copyright Micah Ryan.', 'micah_ryan_web_design' ); ?></p> 
                            </div>                             
                            <div class="large-6 columns"> 
                                <ul class="inline-list right"> 
                                    <li> 
                                        <a href="faster.html">
                                            <?php _e( 'Faster', 'micah_ryan_web_design' ); ?>
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
                                    <li> 
                                        <a href="about.html">
                                            <?php _e( 'About', 'micah_ryan_web_design' ); ?>
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
                            </div>                             
                        </div>                         
                    </div>                     
                </footer>                 
            </section>                          
            <!-- main content goes here -->             
            <!-- close the off-canvas menu -->             
            <a class="exit-off-canvas"></a> 
        </div>                           
        <?php wp_footer(); ?>
    </div>                              
    <!-- Wow JS -->          
    <script>
    new WOW().init();
  </script>     
    <!-- Scroll to Top -->     
    <script>
    if ($('#top').length) {
      var scrollTrigger = 100, // px
        backToTop = function() {
          var scrollTop = $(window).scrollTop();
          if (scrollTop > scrollTrigger) {
            $('#top').addClass('show');
          } else {
            $('#top').removeClass('show');
          }
        };
      backToTop();
      $(window).on('scroll', function() {
        backToTop();
      });
      $('#top').on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({
          scrollTop: 0
        }, 700);
      });
    }
  </script>     
</body>
