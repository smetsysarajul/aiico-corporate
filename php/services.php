<?php 
include 'service_data.php';
$pageKey = @$_GET['p'];
$pageContent = $serviceData[$pageKey];
if (!$pageContent) {
  # show the 404 page here
}
  $page ="services"; 
  $pageTitle=@$pageContent['page_title'];
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
                <li class="breadcrumb-item"><a href="<?php echo @$pageContent['parent']['link'] ?>"><?php echo @$pageContent['parent']['title'] ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $pageContent['page_name'] ?></li>
              </ol>
            </nav>
            <h3 class="page-title1 pl-1"><?php echo $pageContent['top_page']['title'] ?></h3>
          </div>
        </div>
        <div class="col-md-6 text-left text-md-right service-image">
          <img src="../images/<?php echo $pageContent['top_page']['image'] ?>" width="95%" alt="" />
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
                <?php echo $pageContent['product'] ?>
            </div>

            <div class="tab-pane fade" id="benefit" role="tabpanel" aria-labelledby="benefit-tab">
              <?php echo $pageContent['benefit'] ?>
            </div>

            <div class="tab-pane fade" id="premium" role="tabpanel" aria-labelledby="premium-tab">
              <?php echo $pageContent['premium'] ?>
            </div>

            <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                <?php echo $pageContent['other'] ?>
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