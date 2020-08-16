<footer class="footer-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
              <?php

                dynamic_sidebar('footer-1')
                ?>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">

            </div>
            <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                <?php

                  dynamic_sidebar('footer-2')
                ?>
            </div>
<?php
          
              dynamic_sidebar('footer-3')
            ?>
        </div>
    </div>
    </div>
</footer>

<!-- JS here -->
<?php wp_footer();?>
</body>

</html>
