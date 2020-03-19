<?php include "header.php" ?>
    <!-- header-end -->
             <!-- bradcam_area  -->
             <div class="bradcam_area" style="background-image: url('img/banner/servicebannerabout.png')">
                 <div class="container">
                     <div class="row">
                         <div class="col-xl-12">
                             <div class="bradcam_text text-center">
                                 <h3>Contact</h3>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
                <!--/ bradcam_area  -->
<a id="button"></a>
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div style="width:100%;height:400px;">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.3612004629504!2d172.5420937152842!3d-43.53651209026418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d31f54312aaa809%3A0x448b7f4d42bb64e9!2sCanterbury%20Compliance%20Centre%20(AA%20Compliance)!5e0!3m2!1sen!2snz!4v1583898390377!5m2!1sen!2snz" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    </div>

                </div>


                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>

                        <form class="form-contact">
                          <div class="form-group">
                              <div id="message" class="alert alert-danger mt-1 d-none align-middle text-center"></div>
                          </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="msg" id="msg" cols="30" rows="9" placeholder="Message"></textarea>
                                         <div id="msg_warning_message" class="text-danger mt-1 d-none"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                      <input type="text" id="fullname" class="form-control" name="fullname" value="" placeholder="Enter Full name">
                                      <div id="fullname_warning_message" class="text-danger mt-1 d-none"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <input type="text" id="email" class="form-control" name="email" value="" placeholder="Enter Email ID">
                                      <div id="email_warning_message" class="text-danger mt-1 d-none"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <input type="text" id="mobileNo" class="form-control only_integers_allowed only_defined_integers_allowed" name="mobileNo" value="" placeholder="Enter Mobile No">
                                      <div id="mobileNo_warning_message" class="text-danger mt-1 d-none"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                      <input type="text" id="subject" class="form-control" name="subject" value="" placeholder="Enter Subject">
                                      <div id="subject_warning_message" class="text-danger mt-1 d-none"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="button" class="btn btn-success contact">Send</button>
                            </div>
                        </form>
                </div>
            </div>
        </section>

    <?php include "footer.php" ?>
