<?php include("head.php");?>
<br><br><br><br>

<div class="row" id="contact">

        <div class="col-md-3">
          <address>
              <strong>Yana Tomillo Foundation Inc</strong>
              <br>
              <i class="fa fa-map-pin fa-fw text-primary"></i> Sunshine House, Sunville. SUN12
              <br>
              <i class="fa fa-phone fa-fw text-primary"></i> 019223 8092344
              <br>
              <i class="fa fa-envelope-o fa-fw text-primary"></i> info@yanainc.com
              <br>
            </address>
        </div>

        <div class="col-md-6">
          <h4 class="text-uppercase" style="color: ghostwhite;">
              Contact Us
            </h4>
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

        <div class="col-md-3">
          <h4 class="text-uppercase">
              Follow Us On:
            </h4>
          <!--social media icons-->
          <div class="social-media social-media-stacked">
            <!--@todo: replace with company social media details-->
            <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
            <a href="#"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
            <a href="#"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a>
            <a href="#"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
          </div>
        </div>

      </div>
      <br><br><br><br>

<?php include("footer.php");?>