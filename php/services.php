<?php 
  $page ="services"; 
  $pageTitle='Services | AIICO Insurance Plc.'
?>
<?php include 'php-component/header.php' ?>
<link rel="stylesheet" href="css/service.css">
<main class="services">
  <section class="page-intro">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="mx-auto" style="max-width: 450px">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Individual Plans</a></li>
                <li class="breadcrumb-item active" aria-current="page">Auto Insurance Plan</li>
              </ol>
            </nav>
            <h3 class="page-title1 pl-1">Auto-Insurance Plan</h3>
          </div>
        </div>
        <div class="col-md-6 text-left text-md-right service-image">
          <img src="../images/auto-insurance.jpg" width="95%" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container-fluid p-0">
      <div class="tabs services-tab">
        <ul class="nav nav-fill bg-white" id="servicesTab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link product active"
              id="product-tab"
              data-toggle="tab"
              href="#product"
              role="tab"
              aria-controls="product"
              aria-selected="true"
              >The Product</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link benefit"
              id="benefit-tab"
              data-toggle="tab"
              href="#benefit"
              role="tab"
              aria-controls="benefit"
              aria-selected="false"
            >
              The Benefit
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link premium"
              id="premium-tab"
              data-toggle="tab"
              href="#premium"
              role="tab"
              aria-controls="premium"
              aria-selected="false"
            >
              Premium
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link others"
              id="info-tab"
              data-toggle="tab"
              href="#info"
              role="tab"
              aria-controls="info"
              aria-selected="false"
            >
              Other Info
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link quote" href="#">
              Get Quote
            </a>
          </li>
        </ul>

        <div class="container">
          <div class="tab-content tabs__inner" id="myTabContent">
            <div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="product-tab">
              <div class="row">
                <div class="col-md-6 d-flex align-items-center my-4">
                  <div class="stat-figure">12k+</div>
                  <div class="stat-desc text-uppercase">regular income till death guaranteed</div>
                </div>
                <div class="col-md-6 d-flex align-items-center my-4">
                  <div class="stat-figure">&#36;30B</div>
                  <div class="stat-desc text-uppercase px-3">regular income till death guaranteed</div>
                </div>
                <div class="col-md-6 d-flex align-items-center my-4">
                  <div class="stat-figure">12k+</div>
                  <div class="stat-desc text-uppercase">regular income till death guaranteed</div>
                </div>
                <div class="col-md-6 d-flex align-items-center my-4">
                  <div class="stat-figure">&#36;30B</div>
                  <div class="stat-desc text-uppercase px-3">regular income till death guaranteed</div>
                </div>
              </div>

              <div class="row why__row py-5">
                <div class="col-md-6 why__col">
                  <div class="why__content">
                    <h3 class="heading heading--secondary text-dark">Nothing to worry about</h3>

                    <p class="paragraph">
                      OneFi is on a mission to democratise access to finance by leveraging data and technology. Our
                      lending process is fully online via the Carbon Mobile App.
                    </p>

                    <ul class="big-list mb-3">
                      <li class="big-list__item">
                        <span class="text-dark">Top five non-life insurance companies</span>
                        <p class="paragraph text-secondary">
                          We offer a wide range of products and services which are tailored towards our customers'
                          needs.We offer a wide range of products and services which are tailored.
                        </p>
                      </li>
                      <li class="big-list__item">
                        <span class="text-dark">Only brand you need to trust</span>
                        <p class="paragraph text-secondary">
                          We offer a wide range of products and services which are tailored towards our customers'
                          needs.We offer a wide range of products and services which are tailored.
                        </p>
                      </li>
                      <li class="big-list__item">
                        <span class="text-dark">Only brand you need to trust</span>
                        <p class="paragraph text-secondary">
                          We offer a wide range of products and services which are tailored towards our customers'
                          needs.We offer a wide range of products and services which are tailored.
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="filler"></div>

                <div class="col-md-5 why__col p-0">
                  <div class="why__content h-100">
                    <img class="services__image" src="../images/services/service.png" />
                    <div class="services__overlay">
                      <div class="services__image-icon"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="benefit" role="tabpanel" aria-labelledby="benefit-tab">
              <div class="row why__row align-items-center py-5">
                <div class="col-md-5 why__col p-0">
                  <div class="why__content">
                    <figure>
                      <img width="100%" src="../images/product-img.jpg" />
                    </figure>
                  </div>
                </div>

                <div class="col-md-7 why__col">
                  <div class="why__content px-5">
                    <h3 class="heading heading--secondary text-dark">What you stand to gain...</h3>

                    <ul class="big-list mb-3">
                      <li class="big-list__item">
                        <span class="text-dark">Maturity</span>
                        <p class="paragraph text-secondary">
                          Total amount accumulated in the policy holder’s investment account.
                        </p>
                      </li>
                      <li class="big-list__item">
                        <span class="text-dark">Interest</span>
                        <p class="paragraph text-secondary">
                          Interested credited to the policyholder is an average savings rate of 3% per annum and per
                          annum to a maximum of 5% per annum for policies that are on the books for more than a
                          year.
                        </p>
                      </li>
                      <li class="big-list__item">
                        <span class="text-dark">Death Benefits</span>
                        <p class="paragraph text-secondary">
                          Guarantee chosen sum assured plus Total amount in an investment account
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
              <div class="row why__row align-items-center py-5">
                <div class="col-md-5 why__col p-0">
                  <div class="why__content">
                    <figure>
                      <img width="100%" src="../images/product-img.jpg" />
                    </figure>
                  </div>
                </div>

                <div class="col-md-7 why__col">
                  <div class="why__content px-5">
                    <h3 class="heading heading--services">Would you like to purchase this plan?</h3>

                    <p class="paragraph">
                      Interested credited to the policyholder is an average savings rate of 3% per annum and per
                      annum to a maximum of 5% per annum for policies that are on the books for more than a
                      year.Interested credited to the policyholder is an average savings rate of 3% per annum and
                      per annum to a maximum of 5% per annum for policies that are on the books for more than a
                      year.Interested credited to the policyholder is an average savings rate of 3% per annum and
                      per annum to a maximum of 5% per annum for policies that are on the books for more than a
                      year.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
              <div class="row why__row align-items-center py-5">
                <div class="col-md-5 why__col p-0">
                  <div class="why__content">
                    <figure>
                      <img width="100%" src="../images/product-img.jpg" />
                    </figure>
                  </div>
                </div>

                <div class="col-md-7 why__col">
                  <div class="why__content px-5">
                    <h3 class="heading heading--secondary text-dark">What you stand to gain...</h3>

                    <ul class="big-list mb-3">
                      <li class="big-list__item">
                        <span class="text-dark">Maturity</span>
                        <p class="paragraph text-secondary">
                          Total amount accumulated in the policy holder’s investment account.
                        </p>
                      </li>
                      <li class="big-list__item">
                        <span class="text-dark">Interest</span>
                        <p class="paragraph text-secondary">
                          Interested credited to the policyholder is an average savings rate of 3% per annum and per
                          annum to a maximum of 5% per annum for policies that are on the books for more than a
                          year.
                        </p>
                      </li>
                      <li class="big-list__item">
                        <span class="text-dark">Death Benefits</span>
                        <p class="paragraph text-secondary">
                          Guarantee chosen sum assured plus Total amount in an investment account
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section__services-cta">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3 class="heading heading--services">Would you like to purchase this plan?</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <p class="paragraph">
            The customer is our top priority, and we are committed to providing exemplary service at all times.
          </p>
          <button class="btn btn--primary">GET QUOTE</button>
        </div>

        <div class="col-md-6">
          <ul class="cta__list">
            <li class="cta__item">Check out the Benefits of this plan</li>
            <li class="cta__item">Preimum attached to this plan</li>
            <li class="cta__item">See who can apply...</li>
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
          <a href="#" class="btn btn--link ">Why AIICO &raquo;</a>
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
</main>
<?php include 'php-component/footer.php' ?>