<footer>
    <div class="footer pt-5">
      <div class="content-footer container text-light">
        <div class="row">
          <div class="col-12 col-lg-4 about-footer">
            <div class="brand-footer">
              <h2>
                <img src="{{ asset('assets/image/brand-1.png')}}" alt="" />
                His<span>CARE</span>
              </h2>
              <p class="text-footer">HisCARE merupakan sebuah website informasi mengenai dunia kesehatan. Didesain dengan ditujukan agar semua kalangan dapat mudah menemukan infomasi kesehatan dengan mudah.</p>
            </div>
            <div class="sosmed-footer">
              <a href=""><img src="{{ asset('assets/image/icon/icon-ig.svg')}}" alt="" /></a>
              <a href=""><img src="{{ asset('assets/image/icon/icon-linkedin.svg')}}" alt="" /></a>
            </div>
          </div>
          <div class="col-12 col-lg-8 main-footer">
            <div class="row">
              <div class="col-6 col-md-3">
                <p class="perusahaan">Extra Pages</p>
                <ul>
                  <li><a href="#">Doctor</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Term & Condition</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <p>Our Links</p>
                <ul>
                  <li><a href="#"> Work with us</a></li>
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Hopital</a></li>
                </ul>
              </div>
              <div class="col-12 col-md-6">
                <p>Our Location</p>
                <ul>
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0091771893913!2d107.64422471472034!3d-6.8895032950216475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e79f6f5ee041%3A0xf935f61f05570358!2sSMKN%205%20Kota%20Bandung!5e0!3m2!1sid!2sid!4v1662335462393!5m2!1sid!2sid"
                    width="100%"
                    height="246px;"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright pt-5 pb-4">
          <p>Copyright <img src="{{ asset('assets/image/icon/copyright.svg')}}" /> HisCARE 2022 All Right Reserved</p>
        </div>
      </div>
    </div>
  </footer>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    ></script>
    <script src="/assets/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <!-- JQUERY -->
    <script>
        $(".owl-specialist").owlCarousel({
        navigation: true,
        loop: true,
        margin: 10,
        responsive: {
            0: {
            items: 1,
            },
            480: {
            items: 2,
            },
            1000: {
            items: 4,
            },
        },
        });
        $(".owl-customer").owlCarousel({
        navigation: true,
        loop: true,
        margin: 0,
        responsive: {
            0: {
            items: 1,
            },
        480: {
            items: 1,
            },
            1000: {
            items: 2,
            },
        },
        });
    </script>
  </body>
  </html>
  