<?php get_header();
/* Template Name: FAQ */
?>
<div class="bradcam_area breadcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>FAQs
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
          <?php
          $faq_args=array(
            'post_type' => 'faq',
            'posts_per_page'=>1
          );
          $faq_posts=new WP_Query($faq_args);
          while($faq_posts -> have_posts()){
            $faq_posts->the_post();
          ?>
          <div class="col-lg-8 posts-list">
              <div class="single-post">

                  <div class="blog_details">
                      <h2><?php the_title()?>

                      </h2>
                      <ul class="blog-info-link mt-3 mb-4">
                          <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                          <li><a href="<?php comments_link()?>"><i class="fa fa-comments"></i> <?php echo get_comments_number()?> Comments</a></li>
                      </ul>

                        <?php the_content()?>
                          <div class="quote-wrapper">
                              <div class="quotes">
                                <?php the_excerpt()?>
                              </div>
                          </div>
                          <div class="feature-img">
                            <?php the_post_thumbnail()?>
                          </div>

                  </div>
              </div>

        <?php }?>
        <?php wp_reset_postdata()?>




            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">

                    <aside class="single_sidebar_widget post_category_widget">

                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>FAQ 1
                                    </p>

                                </a>
                            </li>
                            <li>
                                <a href="page10faq2.html" class="d-flex">
                                    <p>FAQ 2 </p>

                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>FAQ 3
                                    </p>

                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>FAQ 4 </p>

                                </a>
                            </li>


                        </ul>
                    </aside>


                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>
