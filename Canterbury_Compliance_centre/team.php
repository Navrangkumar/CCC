<?php include "header.php" ?>
<link rel="stylesheet" href="css/ourteam.css">
<div class="bradcam_area" style="background-image: url('img/banner/servicebannerabout.png')">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Our Team</h3>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section class="our-webcoderskull padding-lg">
  <div class="container">

    <ul class="row">
      <?php

      $query = "SELECT * FROM tblteam";
      $result = mysqli_query($connect, $query);
      while($row = mysqli_fetch_array($result))
      {
?>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure>
              <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo'] ).'" class="img-responsive" alt="">  ';?></figure>
            <h3><a href="#"><?php echo $row["fullname"] ; ?></a></h3>
            <p><?php echo $row["designation"] ; ?></p>

          </div>
      </li>
      <?php
      }  ?>

    </ul>
  </div>
</section>

<a id="button"></a>
<?php include "footer.php" ?>
