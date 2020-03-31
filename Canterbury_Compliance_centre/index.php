<?php include "header.php" ?>

<div class="header1 responsive">
  <div class="overlay"></div>
  <div class="video">
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="img/header.mp4" type="video/mp4">
  </video>

  </div>
  </div>

<a id="button"></a>
    <div class="transportaion_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/airplane.png" alt="">
                        </div>
                        <h3>SPECIALISE</h3>
                        <p>WE SPECIALISE IN EUROPEAN AND JAPANESE VEHICLES.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/live.png" alt="">
                        </div>
                        <h3>100% UNDERCOVER</h3>
                        <p>All cars are stored safely, ensuring the cars are all day safe from the rain and sunlight.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/world.png" alt="">
                        </div>
                        <h3>FAST TURNAROUND</h3>
                        <p>Processing more then 30 vehicles complied with every days.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h3>
                            Services We Offer
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php

              $query = "SELECT * FROM tblservices ORDER BY s_id DESC";
              $result = mysqli_query($connect, $query);
?>
                <div class="col-xl-12">
                    <div class="service_active owl-carousel">
                      <?php
                      while($row = mysqli_fetch_array($result))
                      {
                        ?>
                        <div class="single_service">
                        <?php  echo '
                            <div class="thumb">
                                <img src="data:image/jpeg;base64,'.base64_encode($row['s_img'] ).'" alt="">
                            </div>
                            ';?>
                            <div class="service_info">
                                <h3><a href="service_details.php"><?php echo $row["name"] ; ?></a></h3>

                            </div>
                        </div>
                        <?php
                        }  ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- chose_area  -->
    <div class="chose_area ">
        <div class="container">
            <div class="features_main_wrap">
                <div class="row  align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="about_image">
                            <img src="img/about/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="features_info">
                            <h3>Why Choose Us?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.
                            </p>
                            <ul>
                                <li> Apartments frequently or motionless. </li>
                                <li> Duis aute irure dolor in reprehenderit in voluptate. </li>
                                <li> Voluptatem quia voluptas sit aspernatur.</li>
                            </ul>

                            <div class="about_btn">
                                <a class="boxed-btn3-line" href="about.php">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ chose_area  -->
    <div class="counter_area">
        <div class="container">
            <div class="offcan_bg">
                <div class="row">
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">10</span> <span>+</span> </h3>
                            <p>Countries Covered</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">3</span> <span>+</span> </h3>
                            <p>Business Success</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">1000</span><span>+</span></h3>
                            <p>Happy Client</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">1000</span><span>+</span></h3>
                            <p>Business Done</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- testimonial_area  -->

    <div class="testimonial_area" id="testmonial">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                      <?php

                      $query = "SELECT * FROM tbltestimonial where approved=1 ORDER BY id DESC";
                      $result = mysqli_query($connect, $query);
                      while($row = mysqli_fetch_array($result))
                      {
        ?>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p><?php echo $row["testimonials"] ; ?></p>
                                <div class="testmonial_author">
                                  <div class="thumb">
                                  </div>
                                    <h3><?php echo $row["fullname"] ; ?></h3>

                                </div>
                            </div>
                        </div>
                        <?php
                        }  ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- Estimate_area start  -->
    <div class="Estimate_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="Estimate_info">
                        <h3>Feedback Form</h3>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-8 col-md-7">
                    <div class="form">
                        <form action="#">
                          <div class="form-group">
                        <div id="message" class="alert alert-danger mt-1 d-none align-middle text-center"></div>
                    </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <input type="text" id="fullname" name="fullname" placeholder="Your name">
                                        <div id="fullname_warning_message" class="text-danger mt-1 d-none"></div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <textarea id="comment" name="comment" placeholder="Message"></textarea>
                                        <div id="comment_warning_message" class="text-danger mt-1 d-none"></div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="input_field">
                                        <button class="boxed-btn3-line feedbackquery" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Estimate_area end  -->
<?php include "footer.php" ?>
