<?php 
  $page='album';
  $pageTitle ='Albums | AIICO Insurance Plc.';
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
                  <li class="breadcrumb-item active" aria-current="page">Albums</li>
                </ol>
              </nav>
              <h3 class="page-title">Albums</h3>
            </div>
          </div>
        </div>
      </section>

      <section class="section section__albums">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-5">
              <a href="./album-single.html" class="image__card">
                <img src="../images/album.png" alt="album" class="image__item" />
                <div class="image__desc">
                  <p class="paragraph mb-0">Xmas party in 2019</p>
                </div>
              </a>
            </div>

            <div class="col-md-6 mb-5">
              <a href="../album-single.html" class="image__card">
                <img src="../images/album.png" alt="album" class="image__item" />
                <div class="image__desc">
                  <p class="paragraph mb-0">Xmas party in 2019</p>
                </div>
              </a>
            </div>

            <div class="col-md-6 mb-5">
              <a href="../album-single.html" class="image__card">
                <img src="../images/album.png" alt="album" class="image__item" />
                <div class="image__desc">
                  <p class="paragraph mb-0">Xmas party in 2019</p>
                </div>
              </a>
            </div>
            
            <div class="col-md-6 mb-5">
              <a href="../album-single.php" class="image__card">
                <img src="../images/album.png" alt="album" class="image__item" />
                <div class="image__desc">
                  <p class="paragraph mb-0">Xmas party in 2019</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php include 'php-component/footer.php' ?>