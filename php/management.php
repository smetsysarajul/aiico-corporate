<?php 
    $page='management';
    $pageTitle ="Executive Management | AIICO Insurance Plc."
 ?>
<?php include 'php-component/header.php' ?>

     <main>
     <section class="page-intro page-intro--alt" style="background-image: linear-gradient(to right bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.42)), url(../images/banner.jpg)">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Executive Management</li>
            </ol>
          </nav>
          <h3 class="page-title">Executive Management</h3>
          <p class="page-desc">Put nice caption here </p>
        </div>
      </div>
    </div>
  </section>
    <section class="section section__about-page">
      <div class="container">
        <div class="row">
        <div class="col-md-4 mb-4 mb-4">
          <div class="person">
              <figure class="person__avatar-wrapper">
                <img class="person__avatar" src="../images/mgt/Babatunde.jpg" alt="Babatunde Fajemirokun" />
              </figure>
              <div class="person__info">
                <h5 class="person__name">Babatunde Fajemirokun</h5>
                <span class="person__designation">Executive Director, Operations</span>
                <button class="person__profile-btn" id="management-1" data-toggle="modal" data-target="#profileModal">
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
                <h5 class="person__name">Adewale Kadri</h5>
                <span class="person__designation">Executive Director, Operations</span>
                <button class="person__profile-btn" id="management-2" data-toggle="modal" data-target="#profileModal">
                  view profile
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="person">
              <figure class="person__avatar-wrapper">
                <img class="person__avatar" src="../images/mgt/Sola.jpg" alt="Sola Ajayi" />
              </figure>
              <div class="person__info">
                <h5 class="person__name">Olusola Ajayi</h5>
                <span class="person__designation">Executive Director, Group Retail Businesss</span>
                <button class="person__profile-btn" id="management-3" data-toggle="modal" data-target="#profileModal">
                  view profile
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="person">
              <figure class="person__avatar-wrapper">
                <img class="person__avatar" src="../images/mgt/Donald.jpg" alt="Donald Kanu" />
              </figure>
              <div class="person__info">
                <h5 class="person__name">Donald Kanu</h5>
                <span class="person__designation">Company Secretary</span>
                <button class="person__profile-btn" id="management-4" data-toggle="modal" data-target="#profileModal">
                  view profile
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="person">
              <figure class="person__avatar-wrapper">
                <img class="person__avatar" src="../images/mgt/Adebanjo.jpg" alt="Abiodun Adebanjo" />
              </figure>
              <div class="person__info">
                <h5 class="person__name">Abiodun Adebanjo</h5>
                <span class="person__designation">Head, Risk Management Division</span>
                <button class="person__profile-btn" id="management-5" data-toggle="modal" data-target="#profileModal">
                  view profile
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="person">
              <figure class="person__avatar-wrapper">
                <img class="person__avatar" src="../images/mgt/Oduniyi.jpg" alt="Joseph Oduniyi" />
              </figure>
              <div class="person__info">
                <h5 class="person__name">Joseph Oduniyi</h5>
                <span class="person__designation">Head, Non Life Technical</span>
                <button class="person__profile-btn" id="management-6" data-toggle="modal" data-target="#profileModal">
                  view profile
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="person">
              <figure class="person__avatar-wrapper">
                <img class="person__avatar" src="../images/mgt/Benson.jpg" alt="Benson Ogunyamoju" />
              </figure>
              <div class="person__info">
                <h5 class="person__name">Benson Ogunyamoju</h5>
                <span class="person__designation">Head, Group Life Business</span>
                <button class="person__profile-btn" id="management-7" data-toggle="modal" data-target="#profileModal">
                  view profile
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="person">
              <figure class="person__avatar-wrapper">
                <img class="person__avatar" src="../images/mgt/Sanjo.jpg" alt="Olusanjo Shodimu" />
              </figure>
              <div class="person__info">
                <h5 class="person__name">Olusanjo Shodimu</h5>
                <span class="person__designation">Head, Shared Services Division</span>
                <button class="person__profile-btn" id="management-8" data-toggle="modal" data-target="#profileModal">
                  view profile
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="profileModal" tabindex  ="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="full-profile">
              <div class="full-profile__picture">
                <figure class="person__avatar-wrapper">
                  <img class="person__avatar" src="../images/mgt/babatunde.jpg" />
                </figure>
              </div>
              <div class="full-profile__info">
                <h5 class="person__name2"></h5>
                <span class="person__designation2"></span>
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