<?php include "header.php" ?>
<div class="bradcam_area" style="background-image: url('img/banner/servicebannerabout.png')">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Gallery</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<a id="button"></a>
<div class="container gallery-container">
    <div class="tz-gallery">
      <?php
                $query = "SELECT * FROM tblgallery ORDER BY id DESC";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result))
                {
                     echo '

                  <div class="gallery">
                             <a class="lightbox" src="#">
                                  <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="250" width="800" class="img-thumnail" />
                             </a>
                         </div>

                     ';
                }
                ?>




</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<?php include "footer.php" ?>
