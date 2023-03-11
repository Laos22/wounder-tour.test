<?php require('partials/header.php');?>

<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom context-dark bg-overlay-60">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">Тури</h2>
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Головна</a></li>
        <li class="active">Тури</li>
      </ul>
    </div>
    <div class="box-position" style="background-image: url(images/img_tours.jpg);"></div>
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
                    <div class="unit-left"><a class="product-big-figure" href="singl.php?tour_id=<?php echo $tour['id']; ?>"><img src="upload/<?php echo $tour['image']; ?>" alt="" width="600" height="366"/></a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                        <h5 class="product-big-title"><a href="singl.php?tour_id=<?php echo $tour['id']; ?>"><?php echo $tour['title']; ?></a></h5>
                        <div class="group-sm group-middle justify-content-start">
                          <div class="product-big-rating">
                            <?php for ($i=0; $i < $tour['stars']; $i++) { ?>
                              <span class="icon material-icons-star"></span>
                            <?php } ?>
                             <!-- 3 customer reviews -->
                            </a>
                        </div>
                        <p class="product-big-text"><?php echo $tour['descrip']; ?></p><a class="button button-black-outline button-ujarak" href="#">Замовити</a>
                        <div class="product-big-price-wrap"><span class="product-big-price"><?php echo $tour['price']; ?> грн</span></div>
                      </div>
                    </div>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" aria-hidden="true"></i></button>

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                            <!-- Форма для ввода данных -->
                            <form enctype="multipart/form-data" method="POST">
                              <div class="mb-3">
                                <label for="title" class="form-label">Назва туру</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $tour['title']?>" required>
                              </div>

                              <div class="mb-3">
                                <label for="stars" class="form-label">Кількість зірок</label>
                                <input type="number" class="form-control" id="stars" name="stars" value="<?php echo $tour['stars']?>" required>
                              </div>

                              <div class="mb-3">
                                <label for="price" class="form-label">Ціна</label>
                                <input type="number" class="form-control" id="price" name="price" value="<?php echo $tour['price']?>" required>
                              </div>

                              <div class="mb-3">
                                <label for="descrip" class="form-label">Опис туру</label>
                                <input name="descrip" id="descrip" type="text" class="form-control" value="<?php echo $tour['descrip']?>" required></input>
                              </div>

                              <div class="mb-3">
                                <!-- <label for="image" class="form-label">Фото</label> -->
                                <img src="/upload/<?php echo $tour['image'] ?>" alt="" width="250px">
                                <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                                <input type="file" class="form-control" id="image" name="image" >
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="hot" name="hot" <?php echo $retVal = ($tour['hot']) ? "checked" : "";?>>
                                <label class="form-check-label" for="hot"> Гарячі тури</label>
                              </div>

                              <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Save</button>
                            </form>
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>

                        </div>
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