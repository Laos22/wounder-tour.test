<?php require('partials/header.php');?>

<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom context-dark bg-overlay-60">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">Тури</h2>
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.html">Головна</a></li>
        <li class="active">Тури</li>
      </ul>
    </div>
    <div class="box-position" style="background-image: url(images/breadcrumbs-bg.jpg);"></div>
  </div>
</section>
<!-- Base typography-->
<section class="section section-sm section-first bg-default text-left">
  <div class="container">
    <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">
      <!-- <div class="col-xl-3 d-none d-xl-block">
        <div class="offset-left-xl-45">
          <h4>H4 Heading</h4>
          <h5>H5 Heading</h5>
          <h6>H6 Heading</h6>
        </div>
      </div> -->
      <div class="col-xl-12">
        <ul class="list-xl box-typography">
          <div class="container">
            <h3 class="oh-desktop text-center"><span class="d-inline-block wow slideInDown">Всі тури</span></h3>
            <div class="row row-sm row-40 row-md-50">
              <?PHP
                  $sql = "SELECT * FROM tours";
                  $result = mysqli_query($conn, $sql);
                  while ($tour = $result->fetch_assoc()) {
                      
              ?>


              <div class="col-sm-6 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-left"><a class="product-big-figure" href="#"><img src="upload/<?php echo $tour['image']; ?>" alt="" width="600" height="366"/></a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                        <h5 class="product-big-title"><a href="#"><?php echo $tour['title']; ?></a></h5>
                        <div class="group-sm group-middle justify-content-start">
                          <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#"><?php echo $tour['stars']; ?> customer reviews</a>
                        </div>
                        <p class="product-big-text"><?php echo $tour['descrip']; ?></p><a class="button button-black-outline button-ujarak" href="#">Замовити</a>
                        <div class="product-big-price-wrap"><span class="product-big-price"><?php echo $tour['price']; ?> грн</span></div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <?php } ?>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </div>
</section>



<?php require('partials/footer.php'); ?>