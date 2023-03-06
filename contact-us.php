<?php require('partials/header.php');?>

<!-- RD Google Map-->
<section class="section section-fluid">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109549.61820400582!2d36.12044772370446!3d49.96613385638457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a06828ec7d35%3A0x95c4b058f8571a4!2z0LLRg9C70LjRhtGPINCS0L7Qu9C-0LTQuNC80LjRgNGB0YzQutCwLCA1OCwg0KXQsNGA0LrRltCyLCDQpdCw0YDQutGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgNjEwMDA!5e0!3m2!1sru!2sua!4v1678104965531!5m2!1sru!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<!-- Contact information-->
<section class="section section-sm section-first bg-default">
  <div class="container">
    <div class="row row-30 justify-content-center">
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a href="tel:#">+38-096-299-84-26</a></p>
            <p class="box-contacts-link"><a href="tel:#">+38-068-427-31-97</a></p>
          </div>
        </article>
      </div>
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-up104"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a href="#">57496, Харківська область, місто Харків, пл. Володимирська, 58</a></p>
          </div>
        </article>
      </div>
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a href="mailto:#">mail@demolink.org</a></p>
            <p class="box-contacts-link"><a href="mailto:#">info@demolink.org</a></p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form-->
<section class="section section-sm section-last bg-default text-left">
  <div class="container">
    <article class="title-classic">
      <div class="title-classic-title">
        <h3>Зв'яжіться з нами</h3>
      </div>
      <div class="title-classic-text">
        <p>Якщо у вас виникли запитання, просто заповніть контактну форму, і ми відповімо вам найближчим часом.</p>
      </div>
    </article>
    <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
      <div class="row row-14 gutters-14">
        <div class="col-md-4">
          <div class="form-wrap">
            <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
            <label class="form-label" for="contact-your-name-2">Ваше ім'я.</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-wrap">
            <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
            <label class="form-label" for="contact-email-2">E-mail</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-wrap">
            <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
            <label class="form-label" for="contact-phone-2">Телефон</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-wrap">
            <label class="form-label" for="contact-message-2">Повідомлення</label>
            <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
          </div>
        </div>
      </div>
      <button class="button button-primary button-pipaluk" type="submit">Надіслати повідомлення</button>
    </form>
  </div>
</section>

<?php require('partials/footer.php'); ?>