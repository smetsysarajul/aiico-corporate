<?php 
  $page='claims-center';
  $pageTitle ='Claims Center | AIICO Insurance Plc.';
 ?>
<?php include 'php-component/header.php' ?>

    <main>
        <section class="section">
            <div class="container">
                <div class="section__intro">
                    <h3 class="section__heading">Claims Center</h3>
                </div>
            </div>
        </section>
        <section class="section pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5">
                        <p class="paragraph">The singular objective of our Claims management process is to guarantee our numerous customers a prompt and friendly claims settlement experience.</p>
                        <p class="paragraph">As such, we continuously define, manage and accelerate our processes to improve our service delivery standard. Once a claim has been notified, adequately substantiated, discreetly investigated and equitably quantified, an approved settlement offer is communicated to the Insured and/or the Broker as an acceptance of liability on the policy.</p>
                        <p class="paragraph">AIICO Insurance Plc. issues its cheque in settlement of claims immediately upon receipt of the Discharge Voucher from the insured.</p>
                    </div>
                    <div class="col-md-6">
                        <figure class="image-wrapper ">
                            <img class="image " src="./images/ella.png" alt="ask ella">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section__claims-form">
            <div class="container">
                <div class="section__intro">
                    <h3 class="section__heading">What would like to report?</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="general-tab">
                            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="item1-tab" data-toggle="tab" href="#item1" role="tab" aria-controls="item1" aria-selected="true">
                                        auto insurance
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="item2-tab" data-toggle="tab" href="#item2" role="tab" aria-controls="item2" aria-selected="false">
                                        TRAVEL INSURANCE
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="item3-tab" data-toggle="tab" href="#item3" role="tab" aria-controls="item3" aria-selected="false">
                                        LIFE INSURANCE
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="item1" role="tabpanel" aria-labelledby="item1-tab">
                                  <div class="row justify-content-center">
                                    <div class="col-md-10">
                                      <form id="autoInsuranceForm" class="general-form">
                                        <div class="row">
                                          <div class="col">
                                            <h3 class="form-name">Auto Claims</h3>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="policyNumber">
                                                <span class="star">*</span>Policy Number
                                              </label>
                                              <input type="text" class="form-control text-box" id="policyNumber">
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="registrationNumber">
                                                <span class="star">*</span>Registration Number
                                              </label>
                                              <input type="text" class="form-control text-box" id="registrationNumber">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="emailAddress">
                                                <span class="star">*</span>Email Address
                                              </label>
                                              <input type="text" class="form-control text-box" id="emailAddress">
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="incidentDate">
                                                <span class="star">*</span>Date of Incident
                                              </label>
                                              <input type="text" class="form-control text-box" id="incidentDate">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="incidentTime">
                                                <span class="star">*</span>Time of Incident
                                              </label>
                                              <input type="text" class="form-control text-box" id="incidentTime">
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="repairsEstimate">
                                                <span class="star">*</span>Estimate Of Repairs
                                              </label>
                                              <input type="text" class="form-control text-box" id="repairsEstimate">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="form-label" for="incidentDetails">
                                            <span class="star">*</span>Details of Incident
                                          </label>
                                          <textarea class="form-control text-area" id="incidentDetails" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label class="form-label" for="driversLicenseFile">
                                            <span class="star">*</span>Upload Drivers License (Not more than 2MB)*
                                          </label>
                                          <input type="file" class="form-control-file file-input" id="driversLicenseFile">
                                          <div class="custom-file-browser">
                                            <button class="file-browser-btn">
                                              <i class="fas fa-cloud-upload-alt file-browser-btn__icon"></i>
                                              Choose file
                                            </button>
                                            <span class="file-info">No file chosen</span>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="form-label" for="driversLicenseFile">
                                            <span class="star">*</span>Upload Picture of Incident
                                          </label>
                                          <input type="file" class="form-control-file file-input" id="driversLicenseFile">
                                          <div class="custom-file-browser">
                                            <button class="file-browser-btn">
                                              <i class="fas fa-cloud-upload-alt file-browser-btn__icon"></i>
                                              Choose file
                                            </button>
                                            <span class="file-info">No file chosen</span>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="form-label" for="driversLicenseFile">
                                            <span class="star">*</span>Upload Estimate Of Repairs
                                          </label>
                                          <input type="file" class="form-control-file file-input" id="driversLicenseFile">
                                          <div class="custom-file-browser">
                                            <button class="file-browser-btn">
                                              <i class="fas fa-cloud-upload-alt file-browser-btn__icon"></i>
                                              Choose file
                                            </button>
                                            <span class="file-info">No file chosen</span>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="form-label" for="carDamage">
                                            <span class="star">*</span>Where was the car damaged?
                                          </label>
                                            <div class="row">
                                              <div class="col">
                                                <h3 class="form-section-heading">Driver Side:</h3>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="driverSideFrontWing">
                                                  <label class="form-check-label check-box-label" for="driverSideFrontWing">
                                                    Front Wing
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="driverSideFrontDoor">
                                                  <label class="form-check-label check-box-label" for="driverSideFrontDoor">
                                                    Front Door
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="driverSideRearDoor">
                                                  <label class="form-check-label check-box-label" for="driverSideRearDoor">
                                                    Rear Door
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="driverSideRearWing">
                                                  <label class="form-check-label check-box-label" for="driverSideRearWing">
                                                    Rear Wing
                                                  </label>
                                                </div>
                                              </div>
                                              <div class="col">
                                                <h3 class="form-section-heading">Passenger Side:</h3>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="passengerSideFrontWing">
                                                  <label class="form-check-label check-box-label" for="passengerSideFrontWing">
                                                    Front Wing
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="passengerSideFrontDoor">
                                                  <label class="form-check-label check-box-label" for="passengerSideFrontDoor">
                                                    Front Door
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="passengerSideRearDoor">
                                                  <label class="form-check-label check-box-label" for="passengerSideRearDoor">
                                                    Rear Door
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="passengerSideRearWing">
                                                  <label class="form-check-label check-box-label" for="passengerSideRearWing">
                                                    Rear Wing
                                                  </label>
                                                </div>
                                              </div>
                                              <div class="col">
                                                <h3 class="form-section-heading">Car Side:</h3>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="carSideFront">
                                                  <label class="form-check-label check-box-label" for="carSideFront">
                                                    Front
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="carSideBonnet">
                                                  <label class="form-check-label check-box-label" for="carSideBonnet">
                                                    Bonnet
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="carSideRoof">
                                                  <label class="form-check-label check-box-label" for="carSideRoof">
                                                    Roof
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="carSideRearWindow">
                                                  <label class="form-check-label check-box-label" for="carSideRearWindow">
                                                    Rear Window / Screen
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="carSideBoot">
                                                  <label class="form-check-label check-box-label" for="carSideBoot">
                                                    Boot
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input check-box" type="checkbox" value="" id="carSideRear">
                                                  <label class="form-check-label check-box-label" for="carSideRear">
                                                    Rear
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="btn-section">
                                            <button type="submit" class="btn btn-primary submit-btn">Submit Claim</button>
                                          </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="item2" role="tabpanel" aria-labelledby="item2-tab">
                                  <div class="row justify-content-center">
                                    <div class="col-md-10">
                                      <form id="travelInsuranceForm" class="general-form">
                                        <div class="row">
                                          <div class="col">
                                            <h3 class="form-name">travel Claims</h3>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="policyNumber">
                                                <span class="star">*</span>Policy Number
                                              </label>
                                              <input type="text" class="form-control text-box" id="policyNumber">
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="emailAddress">
                                                <span class="star">*</span>Email Address
                                              </label>
                                              <input type="text" class="form-control text-box" id="emailAddress">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="departureDate">
                                                <span class="star">*</span>Departure Date
                                              </label>
                                              <input type="text" class="form-control text-box" id="departureDate">
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="returnDate">
                                                <span class="star">*</span>Return Date
                                              </label>
                                              <input type="text" class="form-control text-box" id="returnDate">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="occurrenceDate">
                                                <span class="star">*</span>Date of Occurrence
                                              </label>
                                              <input type="text" class="form-control text-box" id="occurrenceDate">
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="occurrenceLocation">
                                                <span class="star">*</span>Location of Occurrence
                                              </label>
                                              <input type="text" class="form-control text-box" id="occurrenceLocation">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="form-label" for="incidentDetails">
                                            <span class="star">*</span>Details of Incident
                                          </label>
                                          <textarea class="form-control text-area" id="incidentDetails" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label class="form-label" for="supportingDocument">
                                            <span class="star">*</span>Attach supporting document
                                          </label>
                                          <input type="file" class="form-control-file file-input" id="supportingDocument">
                                          <div class="custom-file-browser">
                                            <button class="file-browser-btn">
                                              <i class="fas fa-cloud-upload-alt file-browser-btn__icon"></i>
                                              Choose file
                                            </button>
                                            <span class="file-info">No file chosen</span>
                                          </div>
                                        </div>
                                        <div class="btn-section">
                                          <button type="submit" class="btn btn-primary submit-btn">Submit Claim</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="item3" role="tabpanel" aria-labelledby="item3-tab">
                                  <div class="row justify-content-center">
                                    <div class="col-md-10">
                                      <form id="lifeInsuranceForm" class="general-form">
                                        <div class="row">
                                          <div class="col">
                                            <h3 class="form-name">life Claims</h3>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="policyNumber">
                                                <span class="star">*</span>Policy Number
                                              </label>
                                              <input type="text" class="form-control text-box" id="policyNumber">
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="emailAddress">
                                                <span class="star">*</span>Email Address
                                              </label>
                                              <input type="text" class="form-control text-box" id="emailAddress">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="claimType">
                                                <span class="star">*</span>Type of Claim
                                              </label>
                                              <input type="text" class="form-control text-box" id="claimType">
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                              <label class="form-label" for="occurrenceDate">
                                                <span class="star">*</span>Date of Occurrence
                                              </label>
                                              <input type="text" class="form-control text-box" id="occurrenceDate">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="form-label" for="incidentDetails">
                                            <span class="star">*</span>Details of Incident
                                          </label>
                                          <textarea class="form-control text-area" id="incidentDetails" rows="3"></textarea>
                                        </div>
                                        <div class="btn-section">
                                          <button type="submit" class="btn btn-primary submit-btn">Submit Claim</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'php-component/footer.php' ?>