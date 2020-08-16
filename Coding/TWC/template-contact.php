<?php
/* Template Name: Contact us */
get_header();
?>
<div class="bradcam_area breadcam_bg_3">
  <div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="bradcam_text">
                <h3>Contact With Us</h3>
                <h5 style="color: aliceblue;">We love questions and feedback – and we're always happy to help!
                  Here are some ways to connect with us.
                  </h5>

            </div>
        </div>
    </div>
  </div>
</div>

<section class="contact-section section_padding">
  <div class="container">
    <div class="d-none d-sm-block mb-5 pb-4">
      <div id="map" style="height: 480px;"></div>
      <script>
        function initMap() {
          var uluru = {lat: -25.363, lng: 131.044};
          var grayStyles = [
            {
              featureType: "all",
              stylers: [
                { saturation: -90 },
                { lightness: 50 }
              ]
            },
            {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
          ];
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -31.197, lng: 150.744},
            zoom: 9,
            styles: grayStyles,
            scrollwheel:  false
          });
        }

      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

    </div>


    <div class="row">
      <div class="col-12">
        <h2 class="contact-title">Send Us a Message</h2>

        <h6>Send us a message and we'll respond as soon as we can.</h6>
      </div>
      <div class="col-lg-8">
        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
          <div class="row">
            <div class="col-12">
              <div class="form-group">

                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <button type="submit" class="button button-contactForm btn_4 boxed-btn">Send Message</button>
          </div>
        </form>
      </div>
      <div class="col-lg-4">
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-home"></i></span>
          <div class="media-body">
            <h3>6 Soi Sukhumvit 21, Khwaeng
              Khlong Toei Nuea, Khet Watthana,
              Krung Thep Maha Nakhon 10110</h3>
            <p> Krung Thep Maha Nakhon 10110</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-tablet"></i></span>
          <div class="media-body">
            <h3>+1-617-555-0108</h3>
            <p>Mon to Fri 9am to 6pm</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3>info@thaiwahclub.com
          </h3>
            <p>Send us your query anytime!</p>
          </div>
        </div>


      </div>
    </div>
  </div>

</section>
<?php get_footer();?>
