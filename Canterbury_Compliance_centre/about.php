<?php include "header.php" ?>
<div class="bradcam_area" style="background-image: url('img/banner/servicebannerabout.png')">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>About Us</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container">
  <?php
$sql = "SELECT * FROM tblaboutus ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

?>

    <div class="row">
        <div class="col-xl-12">
            <div class="bradcam_text text-center">
                <br><h1>Welcome to Canterbury Compliance Centre</h1>

                <br>
                <br>
                <p><?php echo $row["about"]; ?></p>
            </div>
        </div>
    </div>
</div>
<?php  }
}  ?>

<a id="button"></a>
<?php include "footer.php" ?>
