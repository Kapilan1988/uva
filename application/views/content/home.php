<section class="section-slider">

    <h1 class="tp-caption sfb fadeout slider-caption slider-caption-sub-1">Slider</h1>
    <div id="slider-revolution">
        <ul>
            <li data-transition="fade">
                <img src="<?= base_url() ?>resources/images/slider/img-4.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100" data-speed="700" data-start="1500" data-easing="easeOutBack">
                 <img src="<?= base_url() ?>resources/images/slider/hom1-slide1.png" alt="icons">
                </div>

                <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
                 WELCOME TO
                </div>

                <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">THE UVA HEART</div>

            </li>

            <li data-transition="fade">
                <img src="<?= base_url() ?>resources/images/slider/img-4.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                <div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300" data-easing="easeOutBack">
                  <img src="<?php base_url() ?>resources/images/icon-slider-1.png" alt="">
                </div>

                <div class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                   EACH HOTEL IS
                </div>

                <div class="tp-caption sfb fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="2000">
                    UNIQUE 70%
                </div>

                <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200">JUST LIKE YOU</div>

                <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="395" data-easing="easeOutBack" data-speed="700" data-start="2400"><img src="images/icon-slider-2.png" alt=""></div>
            </li>

        </ul>
    </div>

</section>
<!-- END / BANNER SLIDER -->

<!-- CHECK AVAILABILITY -->
<section class="section-check-availability">
    <div class="container">
        <div class="check-availability">
            <div class="row">
                <div class="col-lg-3">
                    <h2>CHECK AVAILABILITY</h2>
                </div>
                <div class="col-lg-9">
                    <form id="ajax-form-search-room" action="search_step_2.php" method="post">
                        <div class="availability-form">
                            <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                            <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date">

                            <select class="awe-select" name="adults">
                                <option>Adults</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>

                            <div class="vailability-submit">
                                <button class="awe-btn awe-btn-13">FIND THE BEST RATE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / CHECK AVAILABILITY -->

<!-- ACCOMD ODATIONS -->
<section class="section-accomd awe-parallax bg-14">
    <div class="container">
        <div class="accomd-modations">
            <div class="row">
                <div class="col-md-12">
                    <div class="accomd-modations-header">
                        <h2 class="heading">ROOMS & RATES</h2>
                        <img src="<?php echo site_url() ?>resources/images/icon-accmod.png" alt="icon">
                        <p>Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="accomd-modations-content owl-single">

                        <div class="row">

                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Luxury Room</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/days
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Family Room</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/days
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Couple Room</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/days
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Standard</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/day
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Standard</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/day
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->


                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Standard</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/day
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->


                        </div>

                        <div class="row">

                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Luxury Room</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/days
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Family Room</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/days
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Couple Room</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/days
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Standard</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/day
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Standard</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/day
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="col-xs-4">
                                <div class="accomd-modations-room">
                                    <div class="img">
                                        <a href="#"><img src="<?php base_url() ?>resources/images/room/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <h2><a href="#">Standard</a></h2>
                                        <p class="price">
                                            <span class="amout">$320</span>/day
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- END / ACCOMD ODATIONS -->

<!-- ABOUT -->
<section class="section-home-about bg-white">
    <div class="container">
        <div class="home-about">
            <div class="row">
                <div class="col-md-6">
                    <div class="img">
                        <a href="#"><img src="<?php base_url() ?>resources/images/home/about/img-1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <h2 class="heading">ABOUT US</h2>
                        <span class="box-border"></span>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                        <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / ABOUT -->

<!-- OUR BEST -->
<section class="section-our-best bg-white">
    <div class="container">

        <div class="our-best">
            <div class="row">

                <div class="col-md-6 col-md-push-6">
                    <div class="img">
                        <img src="<?php base_url() ?>resources/images/home/ourbest/img-1.jpg" alt="">
                    </div>
                </div>

                <div class="col-md-6 col-md-pull-6 ">
                    <div class="text">
                        <h2 class="heading">Our Best</h2>
                        <p>One of Catalina Island's best-loved hotels, Hotel Vista Del Mar is recognized as one of Avalon's leading hotels with gracious island hospitality, thoughtful amenities and distinctive .</p>
                        <ul>
                            <li><img src="<?php base_url() ?>resources/images/home/ourbest/icon-3.png" alt="icon">250 Best Rooms  5 Star</li>
                            <li><img src="<?php base_url() ?>resources/images/home/ourbest/icon-2.png" alt="icon">Wet Bar with Refrigerator</li>
                            <li><img src="<?php base_url() ?>resources/images/home/ourbest/icon-4.png" alt="icon">Double Whirlpool Jacuzzi Tub</li>
                            <li><img src="<?php base_url() ?>resources/images/home/ourbest/icon-5.png" alt="icon">Luxurious High Thread Count </li>
                            <li><img src="<?php base_url() ?>resources/images/home/ourbest/icon-1.png" alt="icon">Breakfast each morning</li>
                            <li><img src="<?php base_url() ?>resources/images/home/ourbest/icon-6.png" alt="icon">Ocean Views to lotus Hotel</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- END / OUR BEST -->

<!-- HOME GUEST BOOK -->
<div class="section-home-guestbook awe-parallax bg-13">
    <div class="container">
        <div class="home-guestbook">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="guestbook-content owl-single">

                        <!-- ITEM -->
                        <div class="guestbook-item">
                            <div class="img">
                                <img src="<?php base_url() ?>resources/images/avatar/img-5.jpg" alt="">
                            </div>

                            <div class="text">
                                <p>This is the only place to stay in Catalina! I have stayed in the cheaper hotels and they were fine, but this is just the icing on the cake! After spending the day bike riding and hiking to come back and enjoy a glass of wine while looking out your ocean view window and then to top it all off...</p>
                                <span><strong>Seelentag</strong></span><br>
                                <span>From Los Angeles, California</span>
                            </div>
                        </div>
                        <!-- ITEM -->

                        <!-- ITEM -->
                        <div class="guestbook-item">
                            <div class="img">
                                <img src="<?php base_url() ?>resources/images/avatar/img-5.jpg" alt="">
                            </div>

                            <div class="text">
                                <p>This is the only place to stay in Catalina! I have stayed in the cheaper hotels and they were fine, but this is just the icing on the cake! After spending the day bike riding and hiking to come back and enjoy a glass of wine while looking out your ocean view window and then to top it all off...</p>
                                <span><strong>Seelentag</strong></span><br>
                                <span>From Los Angeles, California</span>
                            </div>
                        </div>
                        <!-- ITEM -->

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- END / HOME GUEST BOOK -->


<!-- GALLERY -->
<section class="section-gallery bg-white">

    <div class="gallery  no-padding">
        <h2 class="heading text-center">GALLERY</h2>

        <!-- FILTER -->
        <div class="gallery-cat text-center">
            <ul class="list-inline">
                <li class="active"><a href="#" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".ground">HOTEL &amp; GROUND</a></li>
                <li><a href="#" data-filter=".suite">ROOM/SUITE </a></li>
                <li><a href="#" data-filter=".bathroom">BATHROOM</a></li>
                <li><a href="#" data-filter=".dining">DINING</a></li>
            </ul>
        </div>
        <!-- END / FILTER -->

        <!-- GALLERY CONTENT -->
        <div class="gallery-content hover-img">
            <div class="row">
                <div class="gallery-isotope col-6 pd-0">

                    <!-- ITEM SIZE -->
                        <div class="item-size"></div>
                        <!-- END / ITEM SIZE -->
                    <!-- ITEM -->

                    <div class="item-isotope suite dining ">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="item-isotope  ground bathroom suite">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="item-isotope ground bathroom dining">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="item-isotope suite dining">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="item-isotope  ground suite dining">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="item-isotope ground bathroom dining">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="item-isotope ground suite dining">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="item-isotope bathroom suite dining">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="item-isotope bathroom suite dining">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="item-isotope ground bathroom">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="item-isotope ground bathroom suite ">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                    <!-- ITEM -->
                    <div class="item-isotope ground bathroom">
                        <div class="gallery_item">
                            <a  href="<?php base_url() ?>resources/images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                <img src="<?php base_url() ?>resources/images/gallery/img-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- END / ITEM -->

                </div>
            </div>

            <div class="our-gallery text-center">
                <a href="#" class="awe-btn awe-btn-default">BROWSE OUR GALLERY</a>
            </div>

        </div>
        <!-- GALLERY CONTENT -->

    </div>
</section>
<!-- END / GALLERY -->
