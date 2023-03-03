<?php require('partials/header.php');?>


      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Про нас</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Головна</a></li>
              <li class="active">Про нас</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/breadcrumbs-bg.jpeg);"></div>
        </div>
      </section>
      <!-- Why choose us-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="images/about-1-519x564.jpeg" alt="" width="519" height="564"/>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
              <h1 class="text-spacing-25 font-weight-normal title-opacity-9">Чому саме ми</h1>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Досвід</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Навички</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Місія</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <p>Наша компанія вже понад 10 років допомагає клієнтам підібрати найкращі тури Україною. Ми пропонуємо широкий асортимент турів, які задовольнять бажання навіть найвитонченішого мандрівника.</p>
                    <!-- Linear progress bar-->
                    <article class="progress-linear progress-secondary">
                      <div class="progress-header">
                        <p>Тури</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" data-gradient=""><span class="progress-value">79</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                    <!-- Linear progress bar-->
                    <article class="progress-linear progress-orange">
                      <div class="progress-header">
                        <p>Екскурсії</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" data-gradient=""><span class="progress-value">72</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                    <!-- Linear progress bar-->
                    <article class="progress-linear">
                      <div class="progress-header">
                        <p>Бронювання готелів</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear" data-gradient=""><span class="progress-value">88</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                    <div class="row row-40 justify-content-center text-center inset-top-10">
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.87" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Тури</p>
                      </div>
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.74" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Екскурсії</p>
                      </div>
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.99" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Бронювання готелів</p>
                      </div>
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Зв'яжіться з нами</a><a class="button button-black-outline button-width-xl-230" href="#">Читати далі</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-3">
                    <p>Наша місія полягає в тому, щоб забезпечити найкращий досвід планування подорожей, ставши універсальним магазином для всіх туристичних послуг, доступних в індустрії.</p>
                    <div class="text-center text-sm-left offset-top-30 tab-height">
                       <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li>Величезний вибір</li>
                        <li>Кращі ціни</li>
                        <li>Підтримка 24/7</li>
                        <li>Допомога в підготовці візи</li>
                        <li>Бронювання готелів</li>
                        <li>Допомога в оформленні туристичної страховки</li>
                      </ul> 
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Зв'яжіться з нами</a><a class="button button-black-outline button-md" href="#">Читати далі</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest Projects
      <section class="section section-sm section-fluid bg-default">
        <div class="container">
          <h3>Напрямки</h3>
        </div>
        
        <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
          <div class="owl-item">
            
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-11-420x308.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-11-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-11-420x308.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">France</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-12-420x308.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-12-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-12-420x308.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Italy</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-13-420x308.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-13-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-13-420x308.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Egypt</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-14-420x308.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-14-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-14-420x308.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Dubai</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-15-420x308.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-15-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-15-420x308.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Spain</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
          <div class="owl-item">
            
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="images/gallery-image-16-420x308.jpg" alt="" width="420" height="308"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-16-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-16-420x308.jpg" alt="" width="420" height="308"/></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Africa</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
              </h5>
            </div>
          </div>
        </div>
      </section>-->

      <!-- What people Say-->
      <section class="section section-sm section-last bg-default">
        <div class="container">
          <h3>Що люди кажуть?</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-16-100x100.jpeg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                  <p class="q">Рекомендую це агенство, відпочивала багато разів через них, завжди все було ідеально. Окреме спасибі Аліні! Вона завжди займалася підбором туру для нас! Дуже уважний і приємний менеджер.👍 Рекомендую всім друзям і знайомим, всі завжди дуже задоволені відпочинком.</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Ірина Мельник</a></h5>
                <p class="quote-lisa-status">Постійний клієнт</p>
              </div>
            </article>
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-17-100x100.jpeg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                  <p class="q">Величезне спасибі агентству, а особливо Аліночці Дем'яненко, за дуже якісну організацію наших подорожей!!! Ми вже 8 років отримуємо величезне задоволення від наших поїздок, завдяки цій милій і кваліфікованій дівчині !!! Спасибі величезне за чудовий відпочинок!!! Ви професіонал своєї справи !!!</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Андрій Никифоров</a></h5>
                <p class="quote-lisa-status">Постійний клієнт</p>
              </div>
            </article>
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-18-100x100.jpeg" alt="" width="100" height="100"/></a>
                <div class="quote-lisa-text">
                  <p class="q">Все чудово, готель із кожним разом стає все кращим і кращим. Заселення пройшло швидко і без проблем. На подив, дорога була легкою. Нам усе сподобалося. Спасибі Вам за прекрасну організацію нашого відпочинку! Обов'язково ще буду звертатися до Валентини.</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Анна Фоменко</a></h5>
                <p class="quote-lisa-status">Постійний клієнт</p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!--Counters-->
      <!-- Counter Classic-->
      <section class="section section-fluid bg-default">
        <div class="parallax-container" data-parallax-img="images/bg-counter-2.jpeg">
          <div class="parallax-content section-xl context-dark bg-overlay-26">
            <div class="container">
              <div class="row row-50 justify-content-center border-classic">
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">24</span>
                    </div>
                    <h5 class="counter-classic-title">Нагороди</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">194</span>
                    </div>
                    <h5 class="counter-classic-title">Тури</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">2</span><span class="symbol">k</span>
                    </div>
                    <h5 class="counter-classic-title">Мандрівники</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">25</span>
                    </div>
                    <h5 class="counter-classic-title">Члени команди</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php require('partials/footer.php'); ?>