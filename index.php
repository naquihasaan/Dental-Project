<?php include_once 'inc/head.php';?>

    <?php include_once 'inc/header.php';?>
        <script type="text/javascript">
            $(document).ready(function() {
                // Highlight bottom nav links
                var clickEvent = false;
                $("#myCarousel").on("click", ".nav a", function() {
                    clickEvent = true;
                    $(this).parent().siblings().removeClass("active");
                    $(this).parent().addClass("active");
                }).on("slid.bs.carousel", function(e) {
                    if (!clickEvent) {
                        itemIndex = $(e.relatedTarget).index();
                        targetNavItem = $(".nav li[data-slide-to='" + itemIndex + "']");
                        $(".nav li").not(targetNavItem).removeClass("active");
                        targetNavItem.addClass("active");
                    }
                    clickEvent = false;
                });
            });
        </script>
        <section class="tab-carousel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <img src="images/imgd1.jpg" alt="">
                    </div>
                    <div class="item carousel-item">
                        <img src="images/imgd2.jpg" alt="">
                    </div>
                    <div class="item carousel-item">
                        <img src="images/imgd3.jpg" alt="">
                    </div>
                    <div class="item carousel-item">
                        <img src="images/img2.jpg" alt="">
                    </div>
                </div>
                <!-- End Carousel Inner -->
                <ul class="nav nav-pills nav-justified">
                    <li data-target="#myCarousel" data-slide-to="0" class="nav-item active"><a href="#" class="nav-link"><strong>Dental Surgeon & Endodontist</strong>Prof. (Dr.) Subhash Gupta</a></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="nav-item"><a href="#" class="nav-link"><strong>Orthodontist</strong>Dr. Shubham Gupta</a></li>
                    <li data-target="#myCarousel" data-slide-to="2" class="nav-item"><a href="#" class="nav-link"><strong>Beautification</strong>Dr. Himani</a></li>
                    <li data-target="#myCarousel" data-slide-to="3" class="nav-item"><a href="#" class="nav-link"><strong>Conservative Dentist</strong>Dr. Shraddha</a></li>
                </ul>
            </div>
        </section>
        <section class="card-part mb-5 my-5">
            <div class="container">
                <div class="row">

                    <div class="col-md">
                        <div data-aos="fade-right" data-aos-duration="3000">

                            <div class="card mb-3">
                                <img src="images/info_1.jpg" class="card-img-top" alt="images/img1.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">About Us</h5>
                                    <p class="card-text">Dental Care Centre is a professional, friendly, clean and affordable private dental practice offering an extensive range of dental services at the clinic.</p>
                                    <a href="#" class="btn btn-success">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div data-aos="fade-right" data-aos-duration="3000">

                            <div class="card mb-3">
                                <img src="images/info_1.jpg" class="card-img-top" alt="images/img1.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">New Patients</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-success">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">

                        <div data-aos="fade-right" data-aos-duration="3000">
                            <div class="card mb-3">
                                <img src="images/info_1.jpg" class="card-img-top" alt="images/img1.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">Schedule Now</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-success">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of card-detail -->
        <section class="back1">
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-9">
                        <div data-aos="zoom-in" data-aos-duration="3000">
                            <p>Make an appointment with one of our professional Doctors.</b>
                            </p>
                            <p>Morbi arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas</p>

                            <div class="col-md-3"><a class="btn btn-success btn-lg" href="#" role="button">Learn more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of back1 -->
        <section class="services">
            <h1 class="text-center mb-5 font-weight-bold">Our Services</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div data-aos="fade-right" data-aos-duration="3000">
                            <div class="card mb-2">
                                <img src="images/img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Dental Implants</h5>
                                    <p class="card-text">SWe offer a full range of treatments including the highly popular dental implants from our Dental Care Centre health professionals.</p>
                                    <a href="#" class="btn btn-success ">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div data-aos="fade-right" data-aos-duration="3000">
                            <div class="card mb-2">
                                <img src="images/img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Orthodontics Treatments</h5>
                                    <p class="card-text">Orthodontic treatments available at Dental Care Centre are carried out by dental professionals with years of experience in creating a smile full of beautifully straight teeth.</p>
                                    <a href="#" class="btn btn-success">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div data-aos="fade-right" data-aos-duration="3000">
                            <div class="card mb-2">
                                <img src="images/img1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Restorative Dentistry</h5>
                                    <p class="card-text">At Dental Care Centre, We proud to offer the following restorative services:Crowns and bridges,Fillings and bonding,Root canal therapy,Non-surgical and surgical gum treatment</p>
                                    <a href="#" class="btn btn-success">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row my-4">
                        <div class="col-md">
                            <div data-aos="flip-left" data-aos-duration="3000">
                                <div class="card mb-2">
                                    <img src="images/img1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Dentures</h5>
                                        <p class="card-text">Dentures can bring back the smiles you used to enjoy flashing – before you suffered from the problems caused by missing teeth.</p>
                                        <a href="#" class="btn btn-success">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div data-aos="flip-left" data-aos-duration="3000">
                                <div class="card mb-2">
                                    <img src="images/img1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Nightguards & Mouthguards</h5>
                                        <p class="card-text">Taking proper care of your dental health involves good oral care habits, as well as going to the dentist for regular check-ups to ensure that dental problems may be prevented or treated in the best possible manner.</p>
                                        <a href="#" class="btn btn-success">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div data-aos="flip-left" data-aos-duration="3000">
                                <div class="card mb-2">
                                    <img src="images/img1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Tooth Extraction</h5>
                                        <p class="card-text">If your tooth has been damaged by decay or trauma, our dentists will try to restore it with a filling, crown and other treatment options. However, when the damage is too severe to be restored and a root canal treatment.</p>
                                        <a href="#" class="btn btn-success">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success float-right my-3">See More</a>
                </div>
        </section>
        <!-- End of services -->
        

        <?php include_once 'inc/footer.php'; ?>