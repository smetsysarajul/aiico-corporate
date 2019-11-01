<?php 
  $page='contact us';
  $pageTitle ='Contact Us | AIICO Insurance Plc.';
 ?>
<?php include 'php-component/header.php' ?>
<main>
<section class="page-intro page-intro--alt" style="background-image: url(../images/press/news.png)">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Events and News</li>
            </ol>
          </nav>
          <h3 class="page-title">Contact Us</h3>
          <p class="page-desc">Fill the form or visit any of our centers</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
    
      <div class="row">
        <div class="col">
          <div class="form-section">
            <h4 class="form-section__name">We'll love to hear from you....</h4>
            <!-- <p class="form-section__text">
              The goal of every tourist website is to turn potential leads into guests by guiding. The goal of every
              tourist website is to turn potential leads into guests by guiding.
            </p> -->
            <form id="contactForm" class="general-form">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class="form-label" for="name"> <span class="star">*</span>Name </label>
                    <input type="text" class="form-control text-box" id="name" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label class="form-label" for="emailAddress"> <span class="star">*</span>Email Address </label>
                    <input type="text" class="form-control text-box" id="emailAddress" />
                  </div>
                </div>
              </div>
              <!-- <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label class="form-label" for="subject"> <span class="star">*</span>Subject </label>
                    <input type="text" class="form-control text-box" id="subject" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label class="form-label" for="solveThis"> <span class="star">*</span>Solve This </label>
                    <input type="text" class="form-control text-box" id="solveThis" />
                  </div>
                </div>
              </div> -->
              <div class="form-group">
                <label class="form-label" for="message"> <span class="star">*</span>Message </label>
                <textarea class="form-control text-area" id="message" rows="4"></textarea>
              </div>
              <div class="btn-section">
                <button type="submit" class="btn btn-primary submit-btn">
                  Submit Form
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section section__primary-contact">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-5">
          <div class="section__primary-contact__info">
            <div class="info">
              <div class="info__icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="info__details">
                <h5 class="info__label">HEAD office ADDRESS</h5>
                <p class="info__value">Plot PC 12, Churchgate Street, Victoria Island, Lagos.</p>
              </div>
            </div>
            <div class="info">
              <div class="info__icon">
                <i class="fas fa-phone"></i>
              </div>
              <div class="info__details">
                <h5 class="info__label">TELEPHONE</h5>
                <p class="info__value">0700 AIIContact (0700 2442 6682 28)</p>
                <p class="info__value">+01 279 2930</p>
              </div>
            </div>
            <div class="info">
              <div class="info__icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="info__details">
                <h5 class="info__label">EMAIL</h5>
                <p class="info__value">aiicontact@aiicoplc.com</p>
              </div>
            </div>
            <div class="info">
              <div class="info__icon">
                <i class="fas fa-thumbs-up"></i>
              </div>
              <div class="info__details">
                <h5 class="info__label">FOLLOW US ON SOCIAL MEDIA</h5>
                <div class="social-links">
                  <a href="#" target="_blank" class="link">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" target="_blank" class="link">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#" target="_blank" class="link">
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a href="#" target="_blank" class="link">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section__locations">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="location">
            <div class="location__icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="location__details">
              <h5 class="location__name">Festac</h5>
              <p class="location__address">Festac Access Rd, Amuwo Odofin Estate, Lagos.</p>
              <a href="#" class="location__phone">+234 700 24426 68228</a>
              <a href="#" class="location__link">View maps &raquo;</a>
            </div>
          </div>
          <div class="location">
            <div class="location__icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="location__details">
              <h5 class="location__name">Ikeja</h5>
              <p class="location__address">Oba Akran Ave, Oba Akran, Ikeja.</p>
              <a href="#" class="location__phone">+234 700 24426 68228</a>
              <a href="#" class="location__link">View maps &raquo;</a>
            </div>
          </div>
          <div class="location">
            <div class="location__icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="location__details">
              <h5 class="location__name">Isolo</h5>
              <p class="location__address">
                2nd floor, 203-205 Oshodi Apapa Expressway, Iyana-Isolo, Mushin, Lagos
              </p>
              <a href="#" class="location__phone">+234 700 24426 68228</a>
              <a href="#" class="location__link">View maps &raquo;</a>
            </div>
          </div>
          <div class="location">
            <div class="location__icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="location__details">
              <h5 class="location__name">Ilupeju</h5>
              <p class="location__address">28/32 Ilupeju Industrial Ave, Ilupeju, Lagos</p>
              <a href="#" class="location__phone">+234 700 24426 68228</a>
              <a href="#" class="location__link">View maps &raquo;</a>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <figure class="image-wrapper ">
            <img class="image " src="../images/map.png" alt="ask ella" />
          </figure>
        </div>
      </div>

      
    </div>
  </section>
</main>
<?php include 'php-component/footer.php' ?>
