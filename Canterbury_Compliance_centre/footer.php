<!-- contact_location  -->


<!--/ contact_location  -->


<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
      <?php

    $sql = "SELECT * FROM owner ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    ?>
          <div class="contact_location">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-6">
                          <div class="location_left">

                              <ul>
                                  <li><a href="https://www.facebook.com/Canterbury-Compliance-Centre-AA-Compliance-250721059143779/"> <i class="fa fa-facebook"></i> </a></li>
                                  <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                  <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                  <li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-xl-3 col-md-3">
                          <div class="single_location">
                              <h3> <img src="img/icon/address.svg" alt=""> Location</h3>
                              <p><?php echo $row["address1"] ; ?><br>
                                <?php echo $row["address2"] ; ?><br>
                                <?php echo $row["address3"] ; ?></p>

                          </div>
                      </div>
                      <div class="col-xl-3 col-md-3">
                          <div class="single_location">
                              <h3> <img src="img/icon/support.svg" alt=""> Contact Information</h3>
                              <p><?php echo $row["mobileNo"] ; ?><br>
                                <?php echo $row["emailId"] ; ?></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

    </div>
  <?php  }
  }  ?>
</footer>

<!--/ footer end  -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="serch_form">
        <input type="text" placeholder="search" >
        <button type="submit">search</button>
    </div>
  </div>
</div>
</div>


<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<!-- <script src="js/gijgo.min.js"></script> -->
<script src="js/slick.min.js"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>
<script src="js/sweetalert2@8.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/nav_top_bottom.js"></script>
<script src="js/main.js"></script>

</body>

</html>
