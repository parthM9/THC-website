<?php get_header();?>
<div class="slider_area">
   <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
       <div class="container">
           <div class="row align-items-center justify-content-start">
               <div class="col-lg-10 col-md-10">
                   <div class="slider_text">
                       <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                           Add Description
                       </h3>

                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

<div class="service_area">
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-lg-6">
               <div class="section_title text-center mb-70">

                   <h3 class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">Top Categories </h3>
               </div>
           </div>
       </div>
       <div class="row">
         <?php
         $FAQ_args=array(
           'post_type' => 'category',
           'posts_per_page'=>6
         );
         $FAQ_posts=new WP_Query($category_args);
         while($category_posts -> have_posts()){
           $category_posts->the_post();
         ?>
         <div class="col-xl-4 col-md-4">
             <div class="single_service text-center wow fadeInLeft" data-wow-duration="1.2s"
                 data-wow-delay=".4s">
                 <div class="icon">
                     <?php the_post_thumbnail()?>
                 </div>
                 <h3><?php the_title()?></h3>
              <?php the_excerpt()?>
             </div>
         </div>
       <?php }?>
       <?php wp_reset_postdata()?>


       <div class="row">
         <?php
         $category_args=array(
           'post_type' => 'category',
           'posts_per_page'=>6
         );
         $category_posts=new WP_Query($category_args);
         while($category_posts -> have_posts()){
           $category_posts->the_post();
         ?>
         <div class="col-xl-4 col-md-4">
             <div class="single_service text-center wow fadeInLeft" data-wow-duration="1.2s"
                 data-wow-delay=".4s">
                 <div class="icon">
                     <?php the_post_thumbnail()?>
                 </div>
                 <h3><?php the_title()?></h3>
              <?php the_excerpt()?>
             </div>
         </div>
       <?php }?>
       <?php wp_reset_postdata()?>

       </div>
   </div>
</div>
<?php //This next Social section is supposed to be updated via plugin so leaving it for now and not cusomizing it ?>
<section id="about" class="section-padding">
   <div class="container">
       <div class="row">
           <div class="col-12">
               <div class="section-title-header text-center">
                   <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Socials </h1>
                   <p class="wow fadeInDown" data-wow-delay="0.2s">Add Content Here</p>
               </div>
           </div>

       </div>

       <div class="row">
           <div class="col-xs-12 col-md-6 col-lg-4">
               <div class="about-item">
                   <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/slider/s1.jpg" alt="">
                   <div class="about-text">
                       <h3><a href="#">Social post one</a></h3>
                       <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                       <a class="btn btn-common btn-rm" href="#">Read More</a>
                   </div>
               </div>
           </div>
           <div class="col-xs-12 col-md-6 col-lg-4">
               <div class="about-item">
                   <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/slider/s4.jpg" alt="">
                   <div class="about-text">
                       <h3><a href="#">Social post two</a></h3>
                       <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                       <a class="btn btn-common btn-rm" href="#">Read More</a>
                   </div>
               </div>
           </div>
           <div class="col-xs-12 col-md-6 col-lg-4">
               <div class="about-item">
                   <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/slider/s1.jpg" alt="">
                   <div class="about-text">
                       <h3><a href="#">Social post three</a></h3>
                       <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                       <a class="btn btn-common btn-rm" href="#">Read More</a>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>


<section id="faq" class="section-padding">
   <div class="container">
       <div class="row">
           <div class="col-12">
               <div class="section-title-header text-center">
                   <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Frequently Asked Question</h1>
                   <p class="wow fadeInDown" data-wow-delay="0.2s">Add Content Here</p>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
               <div class="accordion">
                   <div class="card">
                       <div class="card-header" id="headingOne">
                           <div class="header-title" data-toggle="collapse" data-target="#questionOne"
                               aria-expanded="true" aria-controls="collapseOne">
                               <i class="lni-pencil"></i> Frequently Asked Question
                           </div>
                       </div>
                       <div id="questionOne" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                           <div class="card-body">
                               Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                               richardson ad squid. 3 wolf
                               moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                               laborum eiusmod.
                           </div>
                       </div>
                   </div>
                   <div class="card">
                       <div class="card-header" id="headingTwo">
                           <div class="header-title" data-toggle="collapse" data-target="#questionTwo"
                               aria-expanded="false" aria-controls="questionTwo">
                               <i class="lni-pencil"></i> Frequently Asked Question
                           </div>
                       </div>
                       <div id="questionTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                           <div class="card-body">
                               Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                               richardson ad squid. 3 wolf
                               moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                               laborum eiusmod.
                           </div>
                       </div>
                   </div>
                   <div class="card">
                       <div class="card-header" id="headingThree">
                           <div class="header-title" data-toggle="collapse" data-target="#questionThree"
                               aria-expanded="false" aria-controls="questionThree">
                               <i class="lni-pencil"></i>Frequently Asked Question
                           </div>
                       </div>
                       <div id="questionThree" class="collapse" aria-labelledby="headingThree"
                           data-parent="#question">
                           <div class="card-body">
                               Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                               richardson ad squid. 3 wolf
                               moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                               laborum eiusmod.
                           </div>
                       </div>
                   </div>
                   <div class="card">
                       <div class="card-header" id="headingThree">
                           <div class="header-title" data-toggle="collapse" data-target="#questionFour"
                               aria-expanded="false" aria-controls="questionFour">
                               <i class="lni-pencil"></i> Frequently Asked Question
                           </div>
                       </div>
                       <div id="questionFour" class="collapse" aria-labelledby="headingThree"
                           data-parent="#question">
                           <div class="card-body">
                               Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                               richardson ad squid. 3 wolf
                               moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                               laborum eiusmod.
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
               <div class="accordion">
                   <div class="card">
                       <div class="card-header" id="headingOne2">
                           <div class="header-title" data-toggle="collapse" data-target="#questionOne2"
                               aria-expanded="true" aria-controls="collapseOne">
                               <i class="lni-pencil"></i> Frequently Asked Question
                           </div>
                       </div>
                       <div id="questionOne2" class="collapse" aria-labelledby="headingOne"
                           data-parent="#question">
                           <div class="card-body">
                               Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                               richardson ad squid. 3 wolf
                               moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                               laborum eiusmod.
                           </div>
                       </div>
                   </div>
                   <div class="card">
                       <div class="card-header" id="headingTwo2">
                           <div class="header-title" data-toggle="collapse" data-target="#questionTwo2"
                               aria-expanded="false" aria-controls="questionTwo">
                               <i class="lni-pencil"></i> Frequently Asked Question
                           </div>
                       </div>
                       <div id="questionTwo2" class="collapse" aria-labelledby="headingTwo"
                           data-parent="#question">
                           <div class="card-body">
                               Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                               richardson ad squid. 3 wolf
                               moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                               laborum eiusmod.
                           </div>
                       </div>
                   </div>
                   <div class="card">
                       <div class="card-header" id="headingThree">
                           <div class="header-title" data-toggle="collapse" data-target="#questionFive"
                               aria-expanded="false" aria-controls="questionFive">
                               <i class="lni-pencil"></i>Frequently Asked Question
                           </div>
                       </div>
                       <div id="questionFive" class="collapse" aria-labelledby="headingThree"
                           data-parent="#question">
                           <div class="card-body">
                               Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                               richardson ad squid. 3 wolf
                               moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                               laborum eiusmod.
                           </div>
                       </div>
                   </div>
                   <div class="card">
                       <div class="card-header" id="headingThree">
                           <div class="header-title" data-toggle="collapse" data-target="#questionSix"
                               aria-expanded="false" aria-controls="questionSix">
                               <i class="lni-pencil"></i> Frequently Asked Question
                           </div>
                       </div>
                       <div id="questionSix" class="collapse" aria-labelledby="headingThree"
                           data-parent="#question">
                           <div class="card-body">
                               Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                               richardson ad squid. 3 wolf
                               moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                               laborum eiusmod.
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>



<?php get_footer();?>
