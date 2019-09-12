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
              <img src="../images/carousel/image1.png" class="carousel-image" alt="image1" />
              <div class="carousel-item__mask">
                <div class="carousel-item__container">
                  <div class="carousel-item__details">
                    <h1 class="carousel-item__heading">Living life with confidence even in uncertainty</h1>
                    <p class="carousel-item__sub-heading">
                      When your responsibility is creating and protecting wealth for a diverse clientele like ours is,
                      you can never stop looking.
                    </p>
                    <a href="#" class="carousel-item__btn">Find out more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../images/carousel/image2.png" class="carousel-image" alt="image2" />
              <div class="carousel-item__mask">
                <div class="carousel-item__container">
                  <div class="carousel-item__details">
                    <h1 class="carousel-item__heading">At AIICO, Our business is looking up</h1>
                    <p class="carousel-item__sub-heading">
                      Welcome to a new world of Insurance. It will no longer be complex, time consuming or impersonal.
                      We are changing our customer.
                    </p>
                    <a href="#" class="carousel-item__btn">Find out more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../images/carousel/image3.png" class="carousel-image" alt="image3" />
              <div class="carousel-item__mask">
                <div class="carousel-item__container">
                  <div class="carousel-item__details">
                    <h1 class="carousel-item__heading">MoneyWise – 100% cash back term life insurance</h1>
                    <p class="carousel-item__sub-heading">
                      Welcome to a new world of Insurance. It will no longer be complex, time consuming or impersonal.
                      We are changing our customer.
                    </p>
                    <a href="#" class="carousel-item__btn">apply now</a>
                    <a href="#" class="carousel-item__btn carousel-item__btn--secondary">learn more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../images/carousel/image4.png" class="carousel-image" alt="image4" />
              <div class="carousel-item__mask">
                <div class="carousel-item__container">
                  <div class="carousel-item__details">
                    <h1 class="carousel-item__heading">Travel Insurance - $1000 cover anywhere in the world</h1>
                    <p class="carousel-item__sub-heading">
                      You can’t tell what will happen on the road. Get Insured Now. Call us today on 01 279 2930, 0700
                      AIIContact (0700 2442 6682 28) or visit our website www.aiicoplc.com to learn more.
                    </p>
                    <a href="#" class="carousel-item__btn">Find out more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section__about">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 section section__about1">
              <div>
                <img class="icon" src="../images/trophy.svg" alt="" />
                <h3 class="section__heading">The Number 1 leading life insurer.</h3>
                <p class="section__sub-heading">
                  Your home, car, property and holidays are all important to you. Make sure they are protected with
                  AIICO Insurance. Whether you want to look after your own health, the health of your family or the
                  health of your employees, we have a plan for you.
                </p>
                <a href="https://smetsysarajul.github.io/aiico-corporate/about.html" class="btn btn--secondary"
                  >Find out more &raquo;</a
                >
              </div>
            </div>
            <div class="col-lg-6 section section__about2">
              <div class="text-white">
                <img class="icon" src="../images/insurance.svg" alt="" />
                <h3 class="section__heading text-white">Giving You Peace Of Mind By Keeping Our Promises.</h3>
                <p class="section__sub-heading">
                  We have been providing stability and reliability to our clients since 1960 to help them live their
                  lives with confidence, to give them peace of mind, and enable them to realize their dreams for their
                  loved ones and their legacy.
                </p>
                <a href="https://smetsysarajul.github.io/aiico-corporate/services.html" class="btn btn--secondary-white"
                  >See our Plans &raquo;</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section__products">
        <div class="container">
          <div class="section__intro">
            <h3 class="section__heading">Need a cover as an individual or corporate body?</h3>
            <p class="section__sub-heading">
              Our products are made specially for you. Get access to fully customised portfolios and a range of
              solutions developed by our experts. We offer a wide range of products and services which are tailored
              towards our customers' needs.
            </p>
          </div>

          <div class="tabs product-tabs">
            <ul class="nav justify-content-center mb-5" id="myTab" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link nav-link-home active d-flex align-items-center justify-content-center"
                  id="individual-tab"
                  data-toggle="tab"
                  href="#individual"
                  role="tab"
                  aria-controls="individual"
                  aria-selected="true"
                  ><i class="fas fa-male pr-3"></i> Individual plans</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link nav-link-home d-flex align-items-center justify-content-center"
                  id="business-tab"
                  data-toggle="tab"
                  href="#business"
                  role="tab"
                  aria-controls="business"
                  aria-selected="false"
                  ><i class="fas fa-users-cog pr-3"></i> Business plans</a
                >
              </li>
            </ul>

            <div class="tab-content tabs__inner" id="myTabContent">
              <div class="tab-pane fade show active" id="individual" role="tabpanel" aria-labelledby="individual-tab">
                <div class="row">
                  <div class="col-md-4 col-lg-3 mb-5">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/insurance.png')"></div>
                      <div class="card__content">
                        <a class="card__title" href="https://smetsysarajul.github.io/aiico-corporate/services.html"
                          >Auto Insurance Plans</a
                        >
                        <p class="card__text">Accidents happen that’s why we have seatbelts, airbags, bumpers...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-5">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/accident.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Personal Accident</p>
                        <p class="card__text">A burden shared is one half solved. Don’t take on the financial ...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-5">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/travel.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Travel Insurance</p>
                        <p class="card__text">Don’t let worries interrupt your vacation or travel experience. ....</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-5">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/life.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Life Insurance Plan</p>
                        <p class="card__text">Life happens and there is no reason why you shouldn’t have life...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-5">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/endowment.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Endowment Plans</p>
                        <p class="card__text">Leaving a legacy is what many work daily to achieve and .....</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-5">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/savings.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Savings Plans</p>
                        <p class="card__text">Let your money do more than just earn you interest. With ...</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-3 mb-5">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/annuity.png')"></div>
                      <div class="card__content">
                        <p class="card__title">Annuity Plans</p>
                        <p class="card__text">
                          Don’t let the future creep up on, start planning for your retirement tod..
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/marine.jpg')"></div>
                      <div class="card__content">
                        <p class="card__title">Group Life Plans</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored....</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/marine.jpg')"></div>
                      <div class="card__content">
                        <p class="card__title">Employer's Liability</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored....</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/manufacturing.jpg')"></div>
                      <div class="card__content">
                        <p class="card__title">Manufacturing Industry</p>
                        <p class="card__text">We offer a wide range of products and services which are tailored....</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-3">
                    <div class="card">
                      <div class="card__image" style="background-image: url('../images/products/agric.jpg')"></div>
                      <div class="card__content">
                        <p class="card__title">Agriculture Industry </p>
                        <p class="card__text">We offer a wide range of products and services which are tailored....</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section__why">
        <div class="container-fluid p-0">
          <div class="why__row">
            <div class="col-lg-6 why__col">
              <div class="why__content">
                <figure class="image-wrapper ">
                  <img class="image " src="../images/group-image.png" />
                </figure>
              </div>
            </div>
            <div class="col-lg-6 why__col">
              <div class="why__content">
                <h3 class="heading heading--secondary">Why AIICO Insurance?</h3>
                <p class="paragraph">
                  We are synonymous with innovation, building excellence, superior financial performance and creating
                  role models for society. We offer a wide range of products and services which are tailored towards our
                  customers' needs.
                </p>
                <ul class="big-list mb-3">
                  <li class="big-list__item">
                    Tier one industry player with over 50 years of heritage in prompt claims payment
                  </li>
                  <li class="big-list__item">
                    Products tailored for Nigerian customers with great coverage
                  </li>
                  <li class="big-list__item">
                    Our products not only save you money but some are even tax deductible
                  </li>
                </ul>

                <div>
                  <a href="#" class="btn btn--link mt-5">Find more about AIICO &raquo;</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section__covered">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-5">
              <div>
                <a class="btn mb-2 pl-1">AIICO is all that and more... </a>
              </div>
              <h3 class="heading heading--secondary">We’ve got you covered!</h3>
              <div class="paragraph">
                Whether you want to insure your livelihood, seek financial security, protect yourself and loved ones,
                you are in the right place. Enjoy superior yield on your savings plus a free life insurance cover.
              </div>
              <ul class="check-list">
                <li class="check-list__item">Report a claim</li>
                <li class="check-list__item">Get quote or buy online</li>
                <li class="check-list__item">Family, individual or business plans</li>
                <li class="check-list__item">E-business platform for easy purchase</li>
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

          <a href="#" class="btn btn--link mt-5">Find more about AIICO &raquo;</a>
        </div>
      </section>

      <section class="section section__numbers">
        <div class="container">
          <div class="text-center mb-4">
            <h3 class="section__heading mb-2">Our Numbers speak, AIICO is making Impact!</h3>
            <p>
              Our milestone achievements as at 2017, shows you why we would continue to be the Insurance Industry
              leader.
            </p>
          </div>

          <div class="numbers__carousel pt-5 mb-5">
            <div class="slick__item">
              <div class="number-item">
                <img src="../images/numbers.svg" class="pb-5" width="54" alt="" />
                <h3 class="heading heading--secondary">
                  <small>&#8358;</small><span class="large">21</span><small>billion</small>
                </h3>
                <p class="small text-uppercase">
                  Gross Premium Income of N21.4 Billion in 2017 at a CAGR of 6.3% over the last 5 years.
                </p>
              </div>
            </div>

            <div class="slick__item">
              <div class="number-item">
                <img src="../images/numbers.svg" class="pb-5" width="54" alt="" />
                <h3 class="heading heading--secondary">
                  <small>&#8358;</small><span class="large">23</span><small>billion</small>
                </h3>
                <p class="small text-uppercase">
                  Claims paid of N23.2 Billion in 2017
                </p>
              </div>
            </div>

            <div class="slick__item">
              <div class="number-item">
                <img src="../images/numbers.svg" class="pb-5" width="54" alt="" />
                <h3 class="heading heading--secondary">
                  <small>&#8358;</small><span class="large">92</span><small>billion</small>
                </h3>
                <p class="small text-uppercase">
                  Total Assets of N92.4 Billion in 2017
                </p>
              </div>
            </div>

            <div class="slick__item">
              <div class="number-item">
                <img src="../images/numbers.svg" class="pb-5" width="54" alt="" />
                <h3 class="heading heading--secondary">
                  <small>&#8358;</small><span class="large">23</span><small>billion</small>
                </h3>
                <p class="small text-uppercase">
                  Gross Premium Income of N21.4 Billion in 2017 at a CAGR of 6.3% over the last 5 years.
                </p>
              </div>
            </div>

            <div class="slick__item">
              <div class="number-item">
                <img src="../images/numbers.svg" class="pb-5" width="54" alt="" />
                <h3 class="heading heading--secondary">
                  <small>&#8358;</small><span class="large">10</span><small>billion</small>
                </h3>
                <p class="small text-uppercase">
                  Gross Premium Income of N21.4 Billion in 2017 at a CAGR of 6.3% over the last 5 years.
                </p>
              </div>
            </div>
          </div>

          <div class="text-center">
            <a
              href="https://smetsysarajul.github.io/aiico-corporate/financial-info.html"
              class="btn btn--secondary-white white mt-4 ml-4"
              >View all financial reports &raquo;</a
            >
          </div>
        </div>
      </section>

      <section class="section section__clients">
        <div class="container">
          <div class="section__intro">
            <h3 class="section__heading">Trusted by leading brands</h3>
            <p class="section__sub-heading">
              We are change agents trusted by our customers ranging from individual to renowned players of the industry
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
            <h3 class="section__heading">From Our News Desk</h3>
            <p class="section__sub-heading">
              Read through our latest stories and company statements, watch videos and explore news coverage about us
              and our subsidiaries and stay up to date by signing up to receive email alerts.
            </p>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-5">
              <div class="news">
                <figure class="news__cover-wrapper ">
                  <img class="news__cover" src="../images/press/aiico-student.jpg" />
                </figure>
                <div class="news__body">
                  <span class="news__date">February 20, 2019</span>
                  <a href="single-news.html" class="news__headline">AIICO empowers students with work tools</a>
                  <p class="paragraph news__excerpt">
                    As part of efforts to ignite passion for science and technology innovation in Nigerian youths, AIICO
                    Insurance Plc. has donated thousands of mathematical sets and calculators to pupils and students in
                    over thirty Primary and Secondary schools across 6 states of the Federation...
                  </p>
                  <a href="single-news.html" class="news__cta">
                    Read more &raquo;
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5">
              <div class="news">
                <figure class="news__cover-wrapper ">
                  <img class="news__cover" src="../images/press/payment-channels.jpg" />
                </figure>
                <div class="news__body">
                  <span class="news__date">September 5, 2018</span>
                  <a href="single-news.html" class="news__headline">
                    AIICO's payment channel
                  </a>
                  <p class="paragraph news__excerpt">
                    For confirmation of payments (cash & cheques) made directly to AIICO's bank accounts, cashiers
                    confirm the payment and updates customer's policy(ies), receipt is sent via email to the
                    customer/agent...
                  </p>
                  <a href="single-news.html" class="news__cta">
                    Read more &raquo;
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5">
              <div class="news">
                <figure class="news__cover-wrapper ">
                  <img class="news__cover" src="../images/press/aiico-wema-partnership.jpg" />
                </figure>
                <div class="news__body">
                  <span class="news__date">September 10, 2018</span>
                  <a href="single-news.html" class="news__headline">
                    AIICO in strategic partnership with WEMA bank
                  </a>
                  <p class="paragraph news__excerpt">
                    AIICO Insurance Plc., a leading Insurance Company in Nigeria has concluded arrangements with Wema
                    Bank to increase access to retail insurance products leveraging on the bank’s robust and efficient
                    retail distribution network...
                  </p>
                  <a href="news.html" class="news__cta">
                    Read more &raquo;
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center">
            <a href="#" class="btn btn--link mt-4">GO TO NEWS SECTION &raquo;</a>
          </div>
        </div>
      </section>
    </main>

<?php include 'php-component/footer.php' ?>
