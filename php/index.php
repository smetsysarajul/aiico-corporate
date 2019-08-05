<?php 
$page ='home';
$pageTitle = "AIICO Insurance Plc.";
 ?>

<?php include 'php-component/header.php' ?>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <main>
      <section class="section section__hero">
        <div id="mainSlider" class="carousel slide main-carousel" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
            <li data-target="#mainSlider" data-slide-to="1"></li>
            <li data-target="#mainSlider" data-slide-to="2"></li>
            <li data-target="#mainSlider" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-info">
                <div class="container">
                  <div class="row">
                    <div class="col-md-5">
                      <h1 class="heading heading--primary">1. Welcome to a new world of Insurance.</h1>
                      <p class="paragraph">
                        When your responsibility is creating and protecting wealth for a diverse clientele like ours is,
                        you can never stop looking for the best and the brightest experience.
                      </p>
                      <div class="carousel-ctas">
                        <a href="#" class="btn btn--primary">Find out more -></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <img src="../images/carousel/image1.png" class="carousel-image" alt="image1" />
            </div>
            <div class="carousel-item">
              <div class="carousel-info">
                <div class="container">
                  <div class="row">
                    <div class="col-md-5">
                      <h1 class="heading heading--primary">
                        2. The 49th Annual General Meeting of AIICO Insurance Plc
                      </h1>

                      <p class="paragraph">
                        Welcome to a new world of Insurance. It will no longer be complex, time consuming or impersonal.
                        We are changing our customer service culture, the treatment of claims and range of products, to
                        protect you, your family & your business.
                      </p>
                      <div class="carousel-ctas">
                        <a href="#" class="btn btn--primary">Find out more -></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <img src="../images/carousel/image2.png" class="carousel-image" alt="image2" />
            </div>
            <div class="carousel-item">
              <div class="carousel-info">
                <div class="container">
                  <div class="row">
                    <div class="col-md-5">
                      <h1 class="heading heading--primary">3. The Nigeria Stock Exchangewishes AIICO well</h1>
                      <p class="paragraph">
                        Welcome to a new world of Insurance. It will no longer be complex, time consuming or impersonal.
                        We are changing our customer service culture, the treatment of claims and range of products, to
                        protect you, your family & your business.
                      </p>
                      <div class="carousel-ctas">
                        <a href="#" class="btn btn--primary">apply now</a>
                        <a href="#" class="btn btn--secondary">learn more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <img src="../images/carousel/image3.png" class="carousel-image" alt="image3" />
            </div>
            <div class="carousel-item">
              <div class="carousel-info">
                <div class="container">
                  <div class="row">
                    <div class="col-md-5">
                      <h1 class="heading heading--primary">4. AIICO IN Strategic Partnership with Wema Bank</h1>
                      <p class="paragraph">
                        Welcome to a new world of Insurance. It will no longer be complex, time consuming or impersonal.
                        We are changing our customer service culture, the treatment of claims and range of products, to
                        protect you, your family & your business.
                      </p>
                      <div class="carousel-ctas">
                        <a href="#" class="btn btn--primary">Find out more -></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <img src="../images/carousel/image4.png" class="carousel-image" alt="image4" />
            </div>
          </div>
        </div>
      </section>

      <section class="section section__about">
        <div class="container">
          <div class="section__intro">
            <h3 class="section__heading">Nigeria’s No 1 , leading life insurer.</h3>
            <p class="section__sub-heading">
              Welcome to a new world of Insurance. It will no longer be complex, time consuming or impersonal. We are
              changing our customer service culture, the treatment of claims and range of products, to protect you, your
              family & your business.
            </p>
            <a href="#" class="btn btn--link">Read more &raquo;</a>
          </div>
        </div>
      </section>

      <section class="section section__products">
        <div class="container">
          <div class="section__intro">
            <h3 class="section__heading">Some of our products</h3>
            <p class="section__sub-heading">
              We offer a wide range of products and services which are tailored towards our customers' needs.We offer a
              wide range of products and services which are tailored.
            </p>
          </div>

          <div class="tabs product-tabs">
            <ul class="nav nav-fill" id="myTab" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  id="individual-tab"
                  data-toggle="tab"
                  href="#individual"
                  role="tab"
                  aria-controls="individual"
                  aria-selected="true"
                  >Individual plans</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="business-tab"
                  data-toggle="tab"
                  href="#business"
                  role="tab"
                  aria-controls="business"
                  aria-selected="false"
                  >Business plans</a
                >
              </li>
            </ul>

            <div class="tab-content tabs__inner" id="myTabContent">
              <div class="tab-pane fade show active" id="individual" role="tabpanel" aria-labelledby="individual-tab">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/insurance.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Auto Insurance Plans</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/accident.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Personal Accident</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/travel.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Travel Insurance</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/life.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Life Insurance Plan</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/endowment.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Endowment Plans</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/savings.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Savings Plans</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/annuity.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Annuity Plans</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored...</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/insurance.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Auto Insurance Plans</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/accident.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Personal Accident</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/travel.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Travel Insurance</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/annuity.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Annuity Plans</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored...</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a href="#" class="btn btn--link">View all plans &raquo;</a>
        </div>
      </section>

      <section class="section section__why">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
              <figure class="image-wrapper ">
                <img class="image " src="../images/group-image.png" />
              </figure>
            </div>
            <div class="col-md-5">
              <h3 class="heading heading--secondary">Why AIICO Insurance?</h3>
              <p class="paragraph">
                We offer a wide range of products and services which are tailored towards our customers' needs.
              </p>
              <ul class="big-list">
                <li class="big-list__item">
                  Full suite of insurance products
                  <p class="paragraph">
                    We offer a wide range of products and services which are tailored towards our customers' needs.
                  </p>
                </li>
                <li class="big-list__item">
                  Top 5 non-life insurance companies
                  <p class="paragraph">
                    We offer a wide range of products and services which are tailored towards our customers' needs.
                  </p>
                </li>
                <li class="big-list__item">
                  Only brand you need to trust
                  <p class="paragraph">
                    We offer a wide range of products and services which are tailored towards our customers' needs.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="section section__covered">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md-5">
              <h3 class="heading heading--secondary">We’ve got you covered!</h3>
              <div class="paragraph">
                We offer a wide range of products and services which are tailored towards our customers' needs.We offer
                a wide range of products and services which are tailored.
              </div>
              <ul class="check-list">
                <li class="check-list__item">Whether you need a place to meet you need a place</li>
                <li class="check-list__item">Whether you need a place to meet</li>
                <li class="check-list__item">Whether you need a place to meet ed a place to meet</li>
                <li class="check-list__item">Whether you need a place to meet</li>
              </ul>
            </div>
            <div class="col-md-7">
              <div class="video__image landscape shadow-lg">
                <div class="video__overlay shadow-lg ">
                  <button class="video__play-btn">
                    <i class="fas fa-play video__play-icon"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section__numbers">
        <div class="container">
          <div class="section__intro">
            <h3 class="section__heading white">Numbers speak</h3>
          </div>

          <div class="numbers__carousel mb-5">
            <div class="slick__item">
              <div class="number-item">
                <h3 class="heading heading--secondary white">N21B</h3>
                <p class="paragraph small">
                  Gross Premium Income of N21.4 Billion in 2017 at a CAGR of 6.3% over the last 5 years.
                </p>
              </div>
            </div>

            <div class="slick__item">
              <div class="number-item">
                <h3 class="heading heading--secondary white">N21B</h3>
                <p class="paragraph small">
                  Gross Premium Income of N21.4 Billion in 2017 at a CAGR of 6.3% over the last 5 years.
                </p>
              </div>
            </div>

            <div class="slick__item">
              <div class="number-item">
                <h3 class="heading heading--secondary white">N21B</h3>
                <p class="paragraph small">
                  Gross Premium Income of N21.4 Billion in 2017 at a CAGR of 6.3% over the last 5 years.
                </p>
              </div>
            </div>

            <div class="slick__item">
              <div class="number-item">
                <h3 class="heading heading--secondary white">N21B</h3>
                <p class="paragraph small">
                  Gross Premium Income of N21.4 Billion in 2017 at a CAGR of 6.3% over the last 5 years.
                </p>
              </div>
            </div>

            <div class="slick__item">
              <div class="number-item">
                <h3 class="heading heading--secondary white">N21B</h3>
                <p class="paragraph small">
                  Gross Premium Income of N21.4 Billion in 2017 at a CAGR of 6.3% over the last 5 years.
                </p>
              </div>
            </div>

            <div class="slick__item">
              <div class="number-item">
                <h3 class="heading heading--secondary white">N21B</h3>
                <p class="paragraph small">
                  Gross Premium Income of N21.4 Billion in 2017 at a CAGR of 6.3% over the last 5 years.
                </p>
              </div>
            </div>
          </div>
        </div>

        <a href="#" class="btn btn--link white mt-4">View financial reports &raquo;</a>
      </section>

      <section class="section section__clients">
        <div class="container">
          <div class="section__intro">
            <h3 class="section__heading">Trusted by leading brands</h3>
            <p class="section__sub-heading">
              Whether you need a place to meet your clients or teammates, a late-night hack spot, or just some heads
              down.
            </p>
          </div>

          <div class="clients__carousel mb-5">
            <div class="slick__item">
              <div class="client-image">
                <img src="../images/clients/7up.png" alt="client" class="img-fluid" />
              </div>
            </div>

            <div class="slick__item">
              <div class="client-image">
                <img src="../images/clients/halliburton.png" alt="client" class="img-fluid" />
              </div>
            </div>

            <div class="slick__item">
              <div class="client-image">
                <img src="../images/clients/esso.png" alt="client" class="img-fluid" />
              </div>
            </div>

            <div class="slick__item">
              <div class="client-image">
                <img src="../images/clients/julius_berger.png" alt="client" class="img-fluid" />
              </div>
            </div>

            <div class="slick__item">
              <div class="client-image">
                <img src="../images/clients/baker_hughes.png" alt="client" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section__news">
        <div class="container">
          <div class="section__intro">
            <h3 class="section__heading">From our news desk</h3>
          </div>
          <div class="row">
            <div class="col-md-4 mb-5">
              <div class="news">
                <figure class="news__cover-wrapper ">
                  <img class="news__cover" src="../images/press/aiico-student.jpg" />
                </figure>
                <div class="news__body">
                  <span class="news__date">February 20, 2019</span>
                  <a href="single-news.php" class="news__headline">AIICO empowers students with work tools</a>
                  <p class="paragraph news__excerpt">
                    As part of efforts to ignite passion for science and technology innovation in Nigerian youths, AIICO
                    Insurance Plc. has donated thousands of mathematical sets and calculators to pupils and students in
                    over thirty Primary and Secondary schools across 6 states of the Federation..
                  </p>
                  <a href="single-news.php" class="news__cta">
                    Read more &raquo;
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-5">
              <div class="news">
                <figure class="news__cover-wrapper ">
                  <img class="news__cover" src="../images/press/payment-channels.jpg" />
                </figure>
                <div class="news__body">
                  <span class="news__date">September 5, 2018</span>
                  <a href="single-news.php" class="news__headline">
                    AIICO's payment channel
                  </a>
                  <p class="paragraph news__excerpt">
                    For confirmation of payments (cash & cheques) made directly to AIICO's bank accounts, cashiers
                    confirm the payment and updates customer's policy(ies), receipt is sent via email to the
                    customer/agent..
                  </p>
                  <a href="single-news.php" class="news__cta">
                    Read more &raquo;
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-5">
              <div class="news">
                <figure class="news__cover-wrapper ">
                  <img class="news__cover" src="../images/press/aiico-wema-partnership.jpg" />
                </figure>
                <div class="news__body">
                  <span class="news__date">September 10, 2018</span>
                  <a href="single-news.php" class="news__headline">
                      AIICO in strategic partnership with WEMA bank
                  </a>
                  <p class="paragraph news__excerpt">
                      AIICO Insurance Plc., a leading Insurance Company in Nigeria has concluded arrangements with Wema
                      Bank to increase access to retail insurance products leveraging on the bank’s robust and efficient
                      retail distribution network..
                  </p>
                  <a href="single-news.php" class="news__cta">
                    Read more &raquo;
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php include 'php-component/footer.php' ?>