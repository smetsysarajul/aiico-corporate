<?php 
  $page='claims-center';
  $pageTitle ='Claims Center | AIICO Insurance Plc.';
 ?>
<?php include 'php-component/header.php' ?>

   <main>
    <section class="section section__numbers">
      <div class="container">
        <div class="text-center mb-4">
          <h3 class="section__heading mb-2">Welcome to AIICO claims center!</h3>
          <p class="paragraph mb-0">
            It only takes 3 steps to get your claims settled.
            <br /> What you’d like to report?
          </p>
        </div>
      </div>
    </section>

    <section class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="row">
              <div class="col-4 text-center p-1">
                <div class="claims-tab" id="auto-insurance-tab">
                  <i class="fas fa-car fa-3x py-3"></i>
                  <h4>Auto
                    <span class="d-none d-md-block">Insurance</span>
                  </h4>
                </div>
              </div>
              <div class="col-4 text-center p-1">
                <div class="claims-tab" id="travel-insurance-tab">
                  <i class="fas fa-space-shuttle fa-3x py-3"></i>
                  <h4>Travel
                    <span class="d-none d-md-block">Insurance</span>
                  </h4>
                </div>
              </div>
              <div class="col-4 text-center p-1">
                <div class="claims-tab" id="life-insurance-tab">
                  <i class="fas fa-briefcase-medical fa-3x py-3"></i>
                  <h4>Life
                    <span class="d-none d-md-block">Insurance</span>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container pt-5">
        <hr />
      </div>
    </section>

    <section class="forms-section tabs-view">
      <div id="auto-insurance-form" class="claims-form">
        <div class="container">
          <h1 class="heading--secondary text-center">First...we're sorry about the auto incident</h1>

          <div class="claims-form-inner">
            <div class="row">
              <div class="col">
                <form id="contactForm" class="general-form">
                  <div id="auto-section-one">
                    <h4 class="form-name">Step 1:</h4>
                    <hr class="form-divider">

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="policy-number" class="form-label">
                          What is your policy number ?
                          <span class="star">*</span>
                        </label>
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="form-control text-box" id="policy-number" />
                      </div>
                    </div>

                    <div class="row">
                      <div class="filler"></div>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <a href="#auto-insurance-form" id="auto-step-2" class="btn btn--primary-blue w-100">Proceed to Step 2</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="auto-section-two">
                    <h4 class="form-name">Step 2:</h4>
                    <p class="paragraph form-desc">
                      Kindly confirm the following details belong to you. </p>

                    <hr class="form-divider">

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="policy-number" class="form-label">
                          Policy number:
                        </label>
                      </div>
                      <div class="col-md-7">
                        <p class="paragraph text-blue">NCSP/IB/2017/077067</p>
                      </div>
                    </div>


                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="policy-number" class="form-label">
                          Full name:
                        </label>
                      </div>
                      <div class="col-md-7">
                        <p class="paragraph text-blue">Amodu Oluwatobi Junior</p>
                      </div>
                    </div>



                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="reg-number" class="form-label">
                          Car registration number:
                        </label>
                      </div>

                      <div class="col-md-7">
                        <p class="paragraph text-blue">IKJ12351 ARSV CS</p>
                      </div>
                    </div>

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="email" class="form-label">
                          Email address :
                        </label>
                      </div>

                      <div class="col-md-7">
                        <p class="paragraph text-blue">amodutobby@gmail.com</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="filler"></div>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <a href="#auto-insurance-form" id="autoback-step-1" class="btn btn--tertiary w-100">Back to Step 1</a>
                          </div>
                          <div class="col-md-6">
                            <a href="#auto-insurance-form" id="auto-step-3" class="btn btn--primary-blue w-100">Proceed to Step 3</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="auto-section-three">
                    <h4 class="form-name">Step 3:</h4>
                    <p class="paragraph form-desc">
                      Kindly provide some information related to the incident.
                    </p>

                    <hr class="form-divider">


                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="day" class="form-label">
                          What day did the incident happen ?
                          <span class="star">*</span>
                        </label>
                      </div>

                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <input type="date" class="form-control text-box" id="day" />
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="details" class="form-label">
                          Which option best describes what happened?
                          <span class="star">*</span>
                        </label>
                      </div>

                      <div class="col-md-7">
                        <select class="form-control  select-box">
                          <option class="form-control">-- choose an option --</option>
                          <option class="form-control"> I was hit by a Commercial Vehicle</option>
                          <option class="form-control"> I hit a road ramp while driving</option>
                          <option class="form-control"> My vehicle was damaged by a pedestrian</option>
                          <option class="form-control"> Robbers attacked my vehicle</option>
                          <option class="form-control"> Others...</option>
                        </select>
                        <!-- <textarea class="form-control text-area" id="details" rows="4"></textarea> -->
                      </div>
                    </div>

                    <hr class="form-divider">



                    <p class="paragraph form-desc">
                      Pls indicate below where the car was damaged
                    </p>


                    <div class="row mb-3">
                      <div class="col">
                        <h3 class="form-section-heading">Driver Side:</h3>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="driverSideFrontWing" />
                          <label class="form-check-label check-box-label" for="driverSideFrontWing">
                            Front Wing
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="driverSideFrontDoor" />
                          <label class="form-check-label check-box-label" for="driverSideFrontDoor">
                            Front Door
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="driverSideRearDoor" />
                          <label class="form-check-label check-box-label" for="driverSideRearDoor">
                            Rear Door
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="driverSideRearWing" />
                          <label class="form-check-label check-box-label" for="driverSideRearWing">
                            Rear Wing
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <h3 class="form-section-heading">Passenger Side:</h3>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="passengerSideFrontWing" />
                          <label class="form-check-label check-box-label" for="passengerSideFrontWing">
                            Front Wing
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="passengerSideFrontDoor" />
                          <label class="form-check-label check-box-label" for="passengerSideFrontDoor">
                            Front Door
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="passengerSideRearDoor" />
                          <label class="form-check-label check-box-label" for="passengerSideRearDoor">
                            Rear Door
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="passengerSideRearWing" />
                          <label class="form-check-label check-box-label" for="passengerSideRearWing">
                            Rear Wing
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <h3 class="form-section-heading">Car Side:</h3>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="carSideFront" />
                          <label class="form-check-label check-box-label" for="carSideFront">
                            Front
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="carSideBonnet" />
                          <label class="form-check-label check-box-label" for="carSideBonnet">
                            Bonnet
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="carSideRoof" />
                          <label class="form-check-label check-box-label" for="carSideRoof">
                            Roof
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="carSideRearWindow" />
                          <label class="form-check-label check-box-label" for="carSideRearWindow">
                            Rear Window / Screen
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="carSideBoot" />
                          <label class="form-check-label check-box-label" for="carSideBoot">
                            Boot
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input check-box" type="checkbox" value="" id="carSideRear" />
                          <label class="form-check-label check-box-label" for="carSideRear">
                            Rear
                          </label>
                        </div>
                      </div>
                    </div>

                    <hr class="form-divider">




                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label class="form-label" for="driversLicenseFile">
                          Upload Picture of Incident
                          <span class="star">*</span>
                        </label>
                      </div>

                      <div class="col-md-7">
                        <input type="file" class="form-control-file file-input" id="driversLicenseFile" />
                        <div class="custom-file-browser">
                          <button class="file-browser-btn">
                            <i class="fas fa-cloud-upload-alt file-browser-btn__icon"></i>
                            Choose file
                          </button>
                          <span class="file-info">No file chosen</span>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label class="form-label" for="driversLicenseFile">
                          Upload Estimate Of Repairs
                          <span class="star">*</span>
                        </label>
                      </div>

                      <div class="col-md-7">
                        <input type="file" class="form-control-file file-input" id="driversLicenseFile" />
                        <div class="custom-file-browser">
                          <button class="file-browser-btn">
                            <i class="fas fa-cloud-upload-alt file-browser-btn__icon"></i>
                            Choose file
                          </button>
                          <span class="file-info">No file chosen</span>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="filler"></div>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <a href="#auto-insurance-form" id="autoback-step-2" class="btn btn--tertiary w-100">Back to Step 2</a>
                          </div>
                          <div class="col-md-6">
                            <a href="#" class="btn btn--primary-green w-100">All Set! Submit</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="btn-section d-none">
                    <p>Thanks for your time!</p>
                    <button type="submit" class="btn btn-primary submit-btn">
                      Submit Form
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="travel-insurance-form" class="claims-form">
        <div class="container">
          <h1 class="heading--secondary text-center">Sorry about your travel experience.</h1>

          <div class="claims-form-inner">
            <div class="row">
              <div class="col">
                <form id="contactForm" class="general-form">
                  <div id="travel-section-one">
                    <h4 class="form-name">Step 1:</h4>
                    <hr class="form-divider">

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="policy-number" class="form-label">
                          What is your policy number ?
                          <span class="star">*</span>
                        </label>
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="form-control text-box" id="policy-number" />
                      </div>
                    </div>

                    <div class="row">
                      <div class="filler"></div>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <a href="#travel-insurance-form" id="travel-step-2" class="btn btn--primary-blue w-100">Proceed to Step 2</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="travel-section-two">
                    <h4 class="form-name">Step 2:</h4>
                    <p class="paragraph form-desc">
                      Kindly confirm the following details belong to you. </p>

                    <hr class="form-divider">

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="policy-number" class="form-label">
                          Policy number:
                        </label>
                      </div>
                      <div class="col-md-7">
                        <p class="paragraph text-blue">NCSP/IB/2017/077067</p>
                      </div>
                    </div>


                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="policy-number" class="form-label">
                          Full name:
                        </label>
                      </div>
                      <div class="col-md-7">
                        <p class="paragraph text-blue">Amodu Oluwatobi Junior</p>
                      </div>
                    </div>



                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="reg-number" class="form-label">
                          Car registration number:
                        </label>
                      </div>

                      <div class="col-md-7">
                        <p class="paragraph text-blue">IKJ12351 ARSV CS</p>
                      </div>
                    </div>

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="email" class="form-label">
                          Email address :
                        </label>
                      </div>

                      <div class="col-md-7">
                        <p class="paragraph text-blue">amodutobby@gmail.com</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="filler"></div>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <a href="#travel-insurance-form" id="travelback-step-1" class="btn btn--tertiary w-100">Back to Step 1</a>
                          </div>
                          <div class="col-md-6">
                            <a href="#travel-insurance-form" id="travel-step-3" class="btn btn--primary-blue w-100">Proceed to Step 3</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="travel-section-three">
                    <h4 class="form-name">Step 3:</h4>
                    <p class="paragraph form-desc">
                      Kindly provide some information related to the incident.
                    </p>

                    <hr class="form-divider">


                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="day" class="form-label">
                          When was the Departure Date ?
                          <span class="star">*</span>
                        </label>
                      </div>

                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <input type="date" class="form-control text-box" id="day" />
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="day" class="form-label">
                          When was Return Date ?
                          <span class="star">*</span>
                        </label>
                      </div>

                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <input type="date" class="form-control text-box" id="day" />
                          </div>

                        </div>
                      </div>
                    </div>


                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="day" class="form-label">
                          Where did this happen?
                          <span class="star">*</span>
                        </label>
                      </div>

                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <input type="text" class="form-control text-box" id="day" />
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="details" class="form-label">
                          Which option best describes what happened?
                          <span class="star">*</span>
                        </label>
                      </div>

                      <div class="col-md-7">
                        <select class="form-control  select-box">
                          <option class="form-control">-- choose an option --</option>
                          <option class="form-control"> I missed my flight</option>
                          <option class="form-control"> The flight was cancelled</option>
                          <option class="form-control"> The flight was delayed</option>
                          <option class="form-control">The airline shutdown</option>
                          <option class="form-control"> Others...</option>
                        </select>
                        <!-- <textarea class="form-control text-area" id="details" rows="4"></textarea> -->
                      </div>
                    </div>






                    <hr class="form-divider">




                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label class="form-label" for="driversLicenseFile">
                          Upload supporting document
                          <span class="star">*</span>
                        </label>
                      </div>

                      <div class="col-md-7">
                        <input type="file" class="form-control-file file-input" id="driversLicenseFile" />
                        <div class="custom-file-browser">
                          <button class="file-browser-btn">
                            <i class="fas fa-cloud-upload-alt file-browser-btn__icon"></i>
                            Choose file
                          </button>
                          <span class="file-info">No file chosen</span>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="filler"></div>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <a href="#travel-insurance-form" id="travelback-step-2" class="btn btn--tertiary w-100">Back to Step 2</a>
                          </div>
                          <div class="col-md-6">
                            <a href="#" class="btn btn--primary-green w-100">All Set! Submit</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="btn-section d-none">
                    <p>Thanks for your time!</p>
                    <button type="submit" class="btn btn-primary submit-btn">
                      Submit Form
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div id="life-insurance-form" class="claims-form">
        <div class="container">
          <h1 class="heading--secondary text-center">At AIICO, all lives are precious.</h1>

          <div class="claims-form-inner">
            <div class="row">
              <div class="col">
                <form id="contactForm" class="general-form">
                  <div id="life-section-one">
                    <h4 class="form-name">Step 1:</h4>
                    <hr class="form-divider">

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="policy-number" class="form-label">
                          What is your policy number ?
                          <span class="star">*</span>
                        </label>
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="form-control text-box" id="policy-number" />
                      </div>
                    </div>

                    <div class="row">
                      <div class="filler"></div>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <a href="#life-insurance-form" id="life-step-2" class="btn btn--primary-blue w-100">Proceed to Step 2</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="life-section-two">
                    <h4 class="form-name">Step 2:</h4>
                    <p class="paragraph form-desc">
                      Kindly confirm the following details belong to you. </p>

                    <hr class="form-divider">

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="policy-number" class="form-label">
                          Policy number:
                        </label>
                      </div>
                      <div class="col-md-7">
                        <p class="paragraph text-blue">NCSP/IB/2017/077067</p>
                      </div>
                    </div>


                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="policy-number" class="form-label">
                          Full name:
                        </label>
                      </div>
                      <div class="col-md-7">
                        <p class="paragraph text-blue">Amodu Oluwatobi Junior</p>
                      </div>
                    </div>



                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="reg-number" class="form-label">
                          Car registration number:
                        </label>
                      </div>

                      <div class="col-md-7">
                        <p class="paragraph text-blue">IKJ12351 ARSV CS</p>
                      </div>
                    </div>

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="email" class="form-label">
                          Email address :
                        </label>
                      </div>

                      <div class="col-md-7">
                        <p class="paragraph text-blue">amodutobby@gmail.com</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="filler"></div>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <a href="#life-insurance-form" id="lifeback-step-1" class="btn btn--tertiary w-100">Back to Step 1</a>
                          </div>
                          <div class="col-md-6">
                            <a href="#life-insurance-form" id="life-step-3" class="btn btn--primary-blue w-100">Proceed to Step 3</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="life-section-three">
                    <h4 class="form-name">Step 3:</h4>
                    <p class="paragraph form-desc">
                      Kindly provide some information related to the incident.
                    </p>

                    <hr class="form-divider">

                    <div class="form-group row align-items-center">
                      <div class="col-md-5">
                        <label for="details" class="form-label">
                          What type of claim?
                          <span class="star">*</span>
                        </label>
                      </div>

                      <div class="col-md-7">
                        <select class="form-control  select-box">
                          <option class="form-control">-- choose an option --</option>
                          <option class="form-control"> Death</option>
                          <option class="form-control">Disability</option>
                          <option class="form-control"> Medical Illness</option>
                          <option class="form-control">Funeral Expose</option>
                          <option class="form-control"> Others...</option>
                        </select>
                        <!-- <textarea class="form-control text-area" id="details" rows="4"></textarea> -->
                      </div>
                    </div>

                    <hr class="form-divider">

                    <div class="row">
                      <div class="filler"></div>
                      <div class="col-md-7">
                        <div class="row">
                          <div class="col-md-6">
                            <a href="#life-insurance-form" id="lifeback-step-2" class="btn btn--tertiary w-100">Back to Step 2</a>
                          </div>
                          <div class="col-md-6">
                            <a href="#" class="btn btn--primary-green w-100">All Set! Submit</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="btn-section d-none">
                    <p>Thanks for your time!</p>
                    <button type="submit" class="btn btn-primary submit-btn">
                      Submit Form
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>









    </section>


  </main>

<?php include 'php-component/footer.php' ?>