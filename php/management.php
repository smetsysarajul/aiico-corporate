<?php 
    $page='management';
    $pageTitle ="Executive Management | AIICO Insurance Plc."
 ?>
<?php include 'php-component/header.php' ?>

    <main>
      <section class="page-intro">
        <div class="container">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Executive Management</li>
                </ol>
              </nav>
              <h3 class="page-title">Executive Management</h3>
            </div>
          </div>
        </div>
      </section>
      <section class="section section__about-page">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
                <div class="person">
                    <figure class="person__avatar-wrapper">
                        <img class="person__avatar" src="../images/mgt/edwin.png" alt="Edwin Igbiti">
                    </figure>
                    <div class="person__info">
                        <h5 class="person__name">Edwin Igbiti</h5>
                        <span class="person__designation">Managing Director / C.E.O</span>
                        <button class="person__profile-btn" data-toggle="modal" data-target="#profileModal">view profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="person">
                    <figure class="person__avatar-wrapper">
                        <img class="person__avatar" src="../images/mgt/babatunde.png" alt="Babatunde Fajemirokun">
                    </figure>
                    <div class="person__info">
                        <h5 class="person__name">Babatunde Fajemirokun</h5>
                        <span class="person__designation">Executive Director, Operations</span>
                        <button class="person__profile-btn" data-toggle="modal" data-target="#profileModal">view profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="person">
                    <figure class="person__avatar-wrapper">
                        <img class="person__avatar" src="../images/mgt/adewale.png" alt="Adewale Kadri">
                    </figure>
                    <div class="person__info">
                        <h5 class="person__name">Adewale Kadri</h5>
                        <span class="person__designation">Executive Director, Operations</span>
                        <button class="person__profile-btn" data-toggle="modal" data-target="#profileModal">view profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="person">
                    <figure class="person__avatar-wrapper">
                        <img class="person__avatar" src="../images/mgt/sola.png" alt="Ademola Adebise">
                    </figure>
                    <div class="person__info">
                        <h5 class="person__name">Sola Ajayi</h5>
                        <span class="person__designation">Executive Director, Operations</span>
                        <button class="person__profile-btn" data-toggle="modal" data-target="#profileModal">view profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="person">
                    <figure class="person__avatar-wrapper">
                        <img class="person__avatar" src="../images/mgt/donald.png" alt="S.D.A Sobanjo">
                    </figure>
                    <div class="person__info">
                        <h5 class="person__name">Donald Kanu</h5>
                        <span class="person__designation">Company Secretary</span>
                        <button class="person__profile-btn" data-toggle="modal" data-target="#profileModal">view profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="person">
                    <figure class="person__avatar-wrapper">
                        <img class="person__avatar" src="../images/mgt/abiodun.png" alt="Samaila Dalhat Zubairu">
                    </figure>
                    <div class="person__info">
                        <h5 class="person__name">Abiodun Adebanjo</h5>
                        <span class="person__designation">Head, Risk Management Division</span>
                        <button class="person__profile-btn" data-toggle="modal" data-target="#profileModal">view profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="person">
                    <figure class="person__avatar-wrapper">
                        <img class="person__avatar" src="../images/mgt/joseph.png" alt="Folakemi Fajemirokun">
                    </figure>
                    <div class="person__info">
                        <h5 class="person__name">Joseph Oduniyi</h5>
                        <span class="person__designation">Head, Non Life Technical</span>
                        <button class="person__profile-btn" data-toggle="modal" data-target="#profileModal">view profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="person">
                    <figure class="person__avatar-wrapper">
                        <img class="person__avatar" src="../images/mgt/benson.png" alt="Folakemi Fajemirokun">
                    </figure>
                    <div class="person__info">
                        <h5 class="person__name">Benson Ogunyamoju</h5>
                        <span class="person__designation">Head, Group Life Business</span>
                        <button class="person__profile-btn" data-toggle="modal" data-target="#profileModal">view profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="person">
                    <figure class="person__avatar-wrapper">
                        <img class="person__avatar" src="../images/mgt/olusanjo.png" alt="Folakemi Fajemirokun">
                    </figure>
                    <div class="person__info">
                        <h5 class="person__name">Olusanjo Shodimu</h5>
                        <span class="person__designation">Head, Shared Services Division</span>
                        <button class="person__profile-btn" data-toggle="modal" data-target="#profileModal">view profile</button>
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
                                <img class="person__avatar" src="../images/mgt/babatunde.png">
                            </figure>
                        </div>
                        <div class="full-profile__info">
                            <h5 class="person__name">Babatunde Fajemirokun</h5>
                            <span class="person__designation">Executive Director, Operations</span>
                            <p class="paragraph my-5">Mr. Edwin Igbiti is currently the Managing Director/CEO at AIIO Insurance Plc. Prior to Joining AIICO Insurance, he had served and gained vast experience in Insurance from Phoenix Insurance Company, where he worked for several years. He is a seasoned professional with an inestimable depth and wealth of technical experience that is acknowledged across the industry. He has managed relationships between the company and several international partners and affiliates and is a solution proffering, team-spirited leader with excellent inter-personal skills.</p>
                            <h5 class="heading heading--tertiary">Educational Background</h5>
                            <p class="paragraph">Mr. Igbiti holds an MBA from the University of Ado-Ekiti (2005) and an Advanced Diploma in Management from the University of Lagos. He is a Certified Insurance practitioner with the Chartered Insurance Institute of London and a Fellow of the Chartered Insurance Institute of Nigeria. Aside from being professionally affiliated to the Nigerian Institute of Management, Chartered (NIMC), he is also a certified Business Continuity Systems Lead Auditor from the British Institute, UK and an alumnus of the Howard University Business School, U.S.A. He currently seats on the Governing Council of the Chartered Insurance Institute of Nigeria (CIIN).</p>
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