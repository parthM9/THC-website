<?php
/* Template Name: Blog */
get_header();
?>
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-10 col-md-10">
                    <div class="slider_text">
                        <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                            Primary Tagline for Your Blog
                        </h3>
                        <h5 style="color: aliceblue;">Supporting statement for the blog's main tagline.

                            </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5 mb-lg-0">
              <div class="blog_left_sidebar">
          <?php
          $blog_args=array(
            'post_type' => 'post',
            'posts_per_page'=>4
          );
          $blog_posts=new WP_Query($blog_args);
          while($blog_posts -> have_posts()){
            $blog_posts->the_post();
          ?>

                  <article class="blog_item">
                      <div class="blog_item_img">
                          <img class="card-img rounded-0"><?php the_post_thumbnail()?></img>
                          <a href="#" class="blog_item_date">
                              <h3><?php the_date()?></h3>

                          </a>
                      </div>

                      <div class="blog_details">
                          <a class="d-inline-block" href="<?php the_permalink()?>">
                              <h2><?php the_title()?></h2>
                          </a>
                          <?php the_excerpt()?>
                          <ul class="blog-info-link">
                              <li><a href="<?php the_permalink()?>"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                              <li><a href="<?php comments_link()?>"><i class="fa fa-comments"></i><?php echo get_comments_number()?> Comments</a></li>
                          </ul>
                      </div>
                  </article>
        <?php }?>
        <?php wp_reset_postdata()?>



                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                  <?php

                    dynamic_sidebar('blog-1')
                    ?>

                    <?php

                      dynamic_sidebar('blog-2')
                      ?>

                      <?php

                        dynamic_sidebar('blog-3')
                        ?>




                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_6.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_7.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_8.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_9.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_10.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </aside>


                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>
