<?php include ROOT_PATH . "theme" . DIRECTORY_SEPARATOR . 'header.php' ?>


<!-- page details -->
<div class="breadcrumb-agile">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
</div>
<!-- //page details -->

<!-- contact -->
<section class="wthree-row w3-contact py-5">
    <div class="container py-xl-5 py-lg-3">
        <!-- heading title -->
        <div class="text-center mb-lg-5 mb-4">
            <h3 class="title-wthree mb-2">
                Get In Touch<span class="mt-2 text-uppercase font-weight-bold">Contact Us</span></h3>
        </div>
        <!-- //heading title -->
        <div class="row contact-form py-3">
            <!-- contact map -->
            <div class="col-lg-6 map text-center">
                <img src="/assets/images/girl.jpg" alt="" class="img-fluid" />
            </div>
            <div class="col-lg-6 wthree-form-left mt-lg-0 mt-5">
                <div class="contact-top1">
                    <form action="#" method="get" class="f-color">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="contact-formw3ls form-control" name="name" id="contactusername" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="contact-formw3ls form-control" name="email" id="contactemail" required>
                        </div>
                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea class="contact-formw3ls form-control" rows="5" name="message" id="contactcomment" required></textarea>
                        </div>
                        <button type="submit" class="btn submit contact-submit mt-4">Submit</button>
                    </form>
                </div>
            </div>
            <!-- //contact form -->
        </div>
    </div>
</section>


<?php include ROOT_PATH . "theme" . DIRECTORY_SEPARATOR . 'footer.php' ?>
