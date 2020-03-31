<?php include "header.php" ?>
    <!-- header-end -->
    <?php
    $id=intval($_GET['id']);
    $query = "SELECT * FROM tblservices where s_id=$id";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
    {
    ?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_area2  bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3><?php echo $row["name"] ; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <!-- service_details_start  -->
    <div class="service_details_area">
        <div class="container">
            <div class="row">
                            <div class="col-xl-12 text-center">

                                    <div class="service_details_info">
                                        <h3 class="text-success"><b><?php echo $row["name"] ; ?></b></h3>

                                    </div>
                                    <?php echo $row["details"] ; ?>



                            </div>
            </div>
        </div>
    </div>
    <?php
    }  ?>
    <!-- service_details_start  -->

    <!-- Estimate_area start  -->
  <?php include "get_free_eastimate.php" ?>
    <!-- Estimate_area end  -->

<?php include "footer.php" ?>
