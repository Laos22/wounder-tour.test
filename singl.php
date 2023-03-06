<?php require('partials/header.php');


$sql = "SELECT * FROM tours WHERE id = " . $_GET['tour_id'];
$result = mysqli_query($conn, $sql);
$tour = $result->fetch_assoc();
    

?>

<div class="col-sm-6 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-left"><a class="product-big-figure" href="singl.php?tour_id=<?php echo $tour['id']; ?>"><img src="upload/<?php echo $tour['image']; ?>" alt="" width="600" height="366"/></a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                        <h5 class="product-big-title"><a href="singl.php?tour_id=<?php echo $tour['id']; ?>"><?php echo $tour['title']; ?></a></h5>
                        <div class="group-sm group-middle justify-content-start">
                          <div class="product-big-rating">
                            <?php for ($i=0; $i < $tour['stars']; $i++) { ?>
                              <span class="icon material-icons-star"></span>
                            <?php } ?>
                             3 customer reviews</a>
                        </div>
                        <p class="product-big-text"><?php echo $tour['descrip']; ?></p><a class="button button-black-outline button-ujarak" href="#">Замовити</a>
                        <div class="product-big-price-wrap"><span class="product-big-price"><?php echo $tour['price']; ?> грн</span></div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>



<?php require('partials/footer.php'); ?>