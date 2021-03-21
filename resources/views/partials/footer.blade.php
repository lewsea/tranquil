<footer class="page-footer">
  <div class="container">
      <div class="row">
          <div class="col-md-3">
                <h4 class="card-title" >Tranquil <div class="bookmark"></div> </h4>
                <div class="footer-nav">
                    <p class="card-desc card-text">
                    What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class="footer-social-link">
                        <a href="#"><span class="iconify" data-inline="false" data-icon="feather:facebook"></span></a>
                        <a href="#"><span class="iconify" data-inline="false" data-icon="fe:instagram"></span></a>
                        <a href="#"><span class="iconify" data-inline="false" data-icon="ant-design:twitter-outlined"></span></a>
                        <a href="#"><span class="iconify" data-inline="false" data-icon="ant-design:youtube-outlined"></span></a>
                        <a href="#"><span class="iconify" data-inline="false" 
                        data-icon="mdi:spotify"></span></a>
                    </div>
                </div>
          </div>
          <div class="col-md-3">
              <h4>About Us</h4>
              {{ wp_nav_menu (array ('menu' => '4','menu_class' => 'p-0 m-0 list-unstyled footer-nav')) }}
          </div>
          <div class="col-md-3">
              <h4>Help</h4>
              {{ wp_nav_menu (array ('menu' => '3','menu_class' => 'p-0 m-0 list-unstyled footer-nav')) }}
          </div>
          <div class="col-md-3">
              <h4>Newsletter</h4>
              <div class="footer-nav">
                <p>Be In Touch With Us</p>
                {!! do_shortcode('[contact-form-7 id="48" title="Newsletter Form"]') !!}
                <span>By subscribing to our newsletter you agree to receive email from us. </span>
              </div>
          </div>
      </div>
      <div class="footer-copy">
        <p>Copyright Shit</p>
        <p>Created by shite</p>
      </div>
  </div>
</footer>
