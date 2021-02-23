<div class="footer-img">
    @include('images.footer-humaaans')
</div>
<footer class="page-footer">
  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <h4>Discover</h4>
              {{ wp_nav_menu (array ('menu' => '4','menu_class' => 'p-0 m-0 list-unstyled footer-nav')) }}
          </div>
          <div class="col-md-3">
              <h4>About Us</h4>
              {{ wp_nav_menu (array ('menu' => '3','menu_class' => 'p-0 m-0 list-unstyled footer-nav')) }}
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
  </div>
</footer>
