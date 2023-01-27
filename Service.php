<?php include("header.php"); ?>

<!-- Service Page -->

<!-- Start Services -->
<section class="service">
    <div class="container">
        <div class="row gx-0">
            <div class="col-lg-6 position-relative">
                <h1 class="title">
                    <span>Our Services</span>
                </h1>
                <div class="our-service"></div>
            </div>
            <div class="col-lg-6">
                <ul class="other-service">
                    <?php for ($i = 1; $i <= 10; $i++) {
                        if ($i % 2 == 0) {
                            $src = "assets/images/mobile-design-2.png";
                        } else {
                            $src = "assets/images/mobile-design.png";
                        } ?>
                        <li>
                            <img src=<?php echo $src ?> alt="mobile Design">
                            <h5>Mobile Design</h5>
                            <p class="about">Produced on-site with
                                mobile unit
                            </p>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Services -->

<!-- Start Accredited Since 2010 -->
<section class="accredite">
    <div class="container">
        <div class="row gx-0">
            <div class="col-lg-6 align-self-center">
                <div class="accredited-since">
                    <h2>Accredited Since <span>2010</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="more mt-2">
                        <a href="#">More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="only-image">
                    <img src="assets/images/Featured -Tenders.png" alt="Tender Site">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Accredited Since 2010 -->

<!-- Start Accredited Since 2010 width Design -->
<section class="accredited-design">
    <div class="container">
        <div class="row gx-0">
            <div class="col-12 text-center">
                <h3>Accredited Since 2010</h3>
                <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Accredited Since 2010 width Design -->

<?php include("footer.php"); ?>