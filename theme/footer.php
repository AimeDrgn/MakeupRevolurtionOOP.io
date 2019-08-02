
<!-- footer -->
<footer class="footer-emp-w3ls py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="row footer-top">
            <div class="col-lg-5 footer-grid-wthree">
                <h1 class="footer-title text-white mb-4">Get In Touch</h1>
                <div class="contact-info">
                    <h4 class="text-light text-uppercase mb-2">Location :</h4>
                    <p>24 Belgrave Road <span>London</span></p>
                    <div class="phone mt-4 pt-2">
                        <h4 class="text-light text-uppercase mb-2">Contact :</h4>
                        <p>Phone : +121 098 8907 9987</p>
                        <p>Email :
                            <a href="mailto:info@example.com">makeuprevolution@info.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-wthree mt-lg-0 mt-4">
                <h2 class="footer-title text-white mb-4">Quick Links</h2>
                <ul class="links list-unstyled">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="my-2">
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <a class="scroll" href="#products">Products</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 footer-grid-wthree mt-lg-0 mt-5">
                <div class="footer-title">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/logo.png" class="logo img-fluid" alt="">MakeupRevolution
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/jquery-2.2.3.min.js"></script>
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });

    $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
            $('nav').addClass('shrink');
        } else {
            $('nav').removeClass('shrink');
        }
    });

</script>
<script src="assets/js/carousel.js"></script>
<link rel="stylesheet" href="assets/css/carousel.css" type="text/css" media="all" />
<script src="assets/js/SmoothScroll.min.js"></script>
<script src="assets/js/move-top.js"></script>
<script src="assets/js/easing.js"></script>
<script src="assets/js/makeuprevolution.js"></script>
<script src="assets/js/bootstrap.js"></script>

</html>
