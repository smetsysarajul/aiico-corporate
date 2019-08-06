<?php 
  $page='album';
  $pageTitle ='Xmas party in 2019 | AIICO Insurance Plc.';
 ?>
<?php include 'php-component/header.php' ?>

    <main>
      <section class="page-intro page-intro--locations">
        <div class="container">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">About us</a></li>
                  <li class="breadcrumb-item"><a href="#">Media</a></li>
                  <li class="breadcrumb-item"><a href="image-gallery.php">Image Gallery</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Xmas party in 2019</li>
                </ol>
              </nav>
              <h3 class="page-title">Xmas party in 2019</h3>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="heading heading--secondary">Xmas party in 2019</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-lg-4 mb-5">
              <img
                src="../images/album.png"
                alt="album"
                class="image__item"
                data-toggle="modal"
                data-target="#pictureModal"
              />
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
              <img
                src="../images/album.png"
                alt="album"
                class="image__item"
                data-toggle="modal"
                data-target="#pictureModal"
              />
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
              <img
                src="../images/album.png"
                alt="album"
                class="image__item"
                data-toggle="modal"
                data-target="#pictureModal"
              />
            </div>

            <div class="col-md-6 col-lg-4 mb-5">
              <img
                src="../images/album.png"
                alt="album"
                class="image__item"
                data-toggle="modal"
                data-target="#pictureModal"
              />
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
              <img
                src="../images/album.png"
                alt="album"
                class="image__item"
                data-toggle="modal"
                data-target="#pictureModal"
              />
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
              <img
                src="../images/album.png"
                alt="album"
                class="image__item"
                data-toggle="modal"
                data-target="#pictureModal"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- Modal -->
      <div
        class="modal fade video__modal"
        id="pictureModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="pictureModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <img src="../images/album.png" alt="album" class="image__item image__item--big" />
            </div>
          </div>
        </div>
      </div>
    </main>

<?php include 'php-component/footer.php' ?>