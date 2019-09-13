<?php 
  $page='board';
  $pageTitle ='Board of Directors | AIICO Insurance Plc.';
 ?>
<?php include 'php-component/header.php' ?>

<main>
    <section class="page-intro page-intro--alt" style="background-image: linear-gradient(to right bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.42)), url(..//images/group-picture-header.png)">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Board of Directors</li>
            </ol>
          </nav>
          <h3 class="page-title">Board of Directors</h3>
          <p class="page-desc">Leadership of AIICO </p>
        </div>
      </div>
    </div>
  </section>
  <section class="section section__about-page">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="person">
            <figure class="person__avatar-wrapper">
              <img class="person__avatar" src="../images/mgt/kundan.png" alt="Kundan Sainani" />
            </figure>
            <div class="person__info">
              <h4 class="person__name">Kundan Sainani</h4>
              <span class="person__designation">Chairman</span>
              <button class="person__profile-btn" id="board-1" data-toggle="modal" data-target="#profileModal">
                view profile
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="person">
            <figure class="person__avatar-wrapper">
              <img class="person__avatar" src="../images/mgt/Babatunde.jpg" alt="Babatunde Fajemirokun" />
            </figure>
            <div class="person__info">
              <h5 class="person__name">Babatunde Fajemirokun</h5>
              <span class="person__designation">Managing Director/ Chief Executive Officer
              </span>
              <button class="person__profile-btn" id="board-2" data-toggle="modal" data-target="#profileModal">
                view profile
              </button>
            </div>

          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="person">
            <figure class="person__avatar-wrapper">
              <img class="person__avatar" src="../images/mgt/Adewale.jpg" alt="Adewale Kadri" />
            </figure>
            <div class="person__info">
              <h4 class="person__name">Adewale Kadri</h4>
              <span class="person__designation">Executive Director, Technical
              </span>
              <button class="person__profile-btn" id="board-3" data-toggle="modal" data-target="#profileModal">
                view profile
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="person">
            <figure class="person__avatar-wrapper">
              <img class="person__avatar" src="../images/mgt/Sola.jpg" alt="Olusola Ajayi" />
            </figure>
            <div class="person__info">
              <h5 class="person__name">Olusola Ajayi</h5>
              <span class="person__designation">Executive Director, Group Retail Business
              </span>
              <button class="person__profile-btn" id="board-4" data-toggle="modal" data-target="#profileModal">
                view profile
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="person">
            <figure class="person__avatar-wrapper">
              <img class="person__avatar" src="../images/mgt/ademola.png" alt="Ademola Adebise" />
            </figure>
            <div class="person__info">
              <h5 class="person__name">Ademola Adebise</h5>
              <span class="person__designation">Non-Executive Director</span>
              <button class="person__profile-btn" id="board-5" data-toggle="modal" data-target="#profileModal">
                view profile
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="person">
            <figure class="person__avatar-wrapper">
              <img class="person__avatar" src="../images/mgt/sobanjo.png" alt="S.D.A Sobanjo" />
            </figure>
            <div class="person__info">
              <h5 class="person__name">S.D.A Sobanjo</h5>
              <span class="person__designation">Non-Executive Director</span>
              <button class="person__profile-btn" id="board-6" data-toggle="modal" data-target="#profileModal">
                view profile
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="person">
            <figure class="person__avatar-wrapper">
              <img class="person__avatar" src="../images/mgt/samaila.png" alt="Samaila Dalhat Zubairu" />
            </figure>
            <div class="person__info">
              <h5 class="person__name">Samaila Dalhat Zubairu</h5>
              <span class="person__designation">Non-Exec Director (Independent)</span>
              <button class="person__profile-btn" id="board-7" data-toggle="modal" data-target="#profileModal">
                view profile
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="person">
            <figure class="person__avatar-wrapper">
              <img class="person__avatar" src="../images/mgt/folakemi.png" alt="Folakemi Fajemirokun" />
            </figure>
            <div class="person__info">
              <h5 class="person__name">Folakemi Fajemirokun</h5>
              <span class="person__designation">Non-Executive Director</span>
              <button class="person__profile-btn" id="board-8" data-toggle="modal" data-target="#profileModal">
                view profile
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>




  <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="full-profile">
            <div class="full-profile__picture">
              <figure class="person__avatar-wrapper">
                <img class="person__avatar" src="../images/mgt/babatunde.png" />
              </figure>
            </div>
            <div class="full-profile__info">
              <h5 class="person__name2">Babatunde Fajemirokun</h5>
              <span class="person__designation2">Executive Director, Operations</span>
              <p class="paragraph my-5 person__bio">

              </p>
              <h5 class="heading heading--tertiary">Educational Background</h5>
              <p class="paragraph person__education">

              </p>
            </div>
            <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include 'php-component/footer.php' ?>
