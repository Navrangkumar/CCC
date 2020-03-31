<?php include "header.php" ?>
    <!-- bradcam_area  -->
    <div class="bradcam_area" style="background-image: url('img/banner/servicebanner.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Our Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <a id="button"></a>
    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
              <?php

              $query = "SELECT * FROM tblservices ORDER BY s_id DESC";
              $result = mysqli_query($connect, $query);
              while($row = mysqli_fetch_array($result))
              {
?>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                          <?php  echo '

                            <img src="data:image/jpeg;base64,'.base64_encode($row['s_img'] ).'" alt="">
                        </div>
                        ';?>
                        </div>
                        <div class="service_info">
                            <h3><a href="service_details.php?id=<?php echo $row["s_id"] ; ?>"><?php echo $row["name"] ; ?></a></h3>
                        </div>
                    </div>
                    <?php
                    }  ?>

                </div>

            </div>
        </div>
    </div>
    <!--/ service_area  -->


    <!-- /counter_area  -->

    <!-- Estimate_area start  -->

    <!-- Estimate_area end  -->
  <?php include "get_free_eastimate.php" ?>
  <?php include "footer.php" ?>
