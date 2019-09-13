<?php 
  $page='videos';
  $pageTitle ='Video | AIICO Insurance Plc.';
 ?>
<?php include 'php-component/header.php' ?>

<main>
  <section class="page-intro page-intro--alt"
  style="background-image: linear-gradient(to right bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.42)), url(../images/banner.jpg)">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">About us</a></li>
              <li class="breadcrumb-item"><a href="#">Media</a></li>
              <li class="breadcrumb-item active" aria-current="page">Videos</li>
            </ol>
          </nav>
          <h3 class="page-title">Videos</h3>
        </div>
      </div>
    </div>
  </section>

  <section class="section section__videos">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5" data-toggle="modal" data-target="#videoModal">
          <div class="video__image shadow-lg">
            <div class="video__overlay shadow-lg ">
              <button class="video__play-btn">
                <i class="fas fa-play video__play-icon"></i>
              </button>
            </div>
          </div>
          <p class="paragraph mt-4">The goal of every tourist website is to turn potential</p>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-toggle="modal" data-target="#videoModal">
          <div class="video__image shadow-lg">
            <div class="video__overlay shadow-lg ">
              <button class="video__play-btn">
                <i class="fas fa-play video__play-icon"></i>
              </button>
            </div>
          </div>
          <p class="paragraph mt-4">The goal of every tourist website is to turn potential</p>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-toggle="modal" data-target="#videoModal">
          <div class="video__image shadow-lg">
            <div class="video__overlay shadow-lg ">
              <button class="video__play-btn">
                <i class="fas fa-play video__play-icon"></i>
              </button>
            </div>
          </div>
          <p class="paragraph mt-4">The goal of every tourist website is to turn potential</p>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-toggle="modal" data-target="#videoModal">
          <div class="video__image shadow-lg">
            <div class="video__overlay shadow-lg ">
              <button class="video__play-btn">
                <i class="fas fa-play video__play-icon"></i>
              </button>
            </div>
          </div>
          <p class="paragraph mt-4">The goal of every tourist website is to turn potential</p>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-toggle="modal" data-target="#videoModal">
          <div class="video__image shadow-lg">
            <div class="video__overlay shadow-lg ">
              <button class="video__play-btn">
                <i class="fas fa-play video__play-icon"></i>
              </button>
            </div>
          </div>
          <p class="paragraph mt-4">The goal of every tourist website is to turn potential</p>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-toggle="modal" data-target="#videoModal">
          <div class="video__image shadow-lg">
            <div class="video__overlay shadow-lg ">
              <button class="video__play-btn">
                <i class="fas fa-play video__play-icon"></i>
              </button>
            </div>
          </div>
          <p class="paragraph mt-4">The goal of every tourist website is to turn potential</p>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-toggle="modal" data-target="#videoModal">
          <div class="video__image shadow-lg">
            <div class="video__overlay shadow-lg ">
              <button class="video__play-btn">
                <i class="fas fa-play video__play-icon"></i>
              </button>
            </div>
          </div>
          <p class="paragraph mt-4">The goal of every tourist website is to turn potential</p>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-toggle="modal" data-target="#videoModal">
          <div class="video__image shadow-lg">
            <div class="video__overlay shadow-lg ">
              <button class="video__play-btn">
                <i class="fas fa-play video__play-icon"></i>
              </button>
            </div>
          </div>
          <p class="paragraph mt-4">The goal of every tourist website is to turn potential</p>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-toggle="modal" data-target="#videoModal">
          <div class="video__image shadow-lg">
            <div class="video__overlay shadow-lg ">
              <button class="video__play-btn">
                <i class="fas fa-play video__play-icon"></i>
              </button>
            </div>
          </div>
          <p class="paragraph mt-4">The goal of every tourist website is to turn potential</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div
    class="modal fade video__modal"
    id="videoModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="videoModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <video width="100%" height="300" class="video" controls poster="../images/video.png">
            <source src="movie.mp4" type="video/mp4" />
            <source src="movie.ogg" type="video/ogg" />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include 'php-component/footer.php' ?>