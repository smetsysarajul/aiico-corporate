<?php 
  $page='feedback-form';
  $pageTitle ='Feedback Form | AIICO Insurance Plc.';
 ?>
<?php include 'php-component/header.php' ?>

<main>
  <section class="section">
    <div class="container">
      <div class="section__intro">
        <h3 class="section__heading">Customer Feedback Form</h3>
      </div>
    </div>
  </section>
  <section class="section pt-0">
    <div class="container">
      <div class="row align-items-center justify-content-between mb-5">
        <div class="col-md-5">
          <p class="paragraph">Talk with our team and start building your payments solution.</p>
          <p class="paragraph">
            Notified, adequately substantiated, discreetly investigated and equitably quantified, an approved
            settlement offer is communicated to the Insured and/or the Broker as an acceptance of liability on the
            policy.
          </p>
          <p class="paragraph">
            AIICO Insurance Plc. issues its cheque in settlement of claims immediately upon receipt of the Discharge
            Voucher from the insured
          </p>
        </div>
        <div class="col-md-6">
          <figure class="image-wrapper ">
            <img class="image " src="../images//feedback.png" alt="ask ella" />
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section class="section bg-blue-light">
    <div class="container">
      <div class="section__intro">
        <h3 class="section__heading">Kindly fill the form below</h3>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <form id="whistleBlowerForm" class="general-form">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="policyNumber"> <span class="star">*</span>Policy Number </label>
                  <input type="text" class="form-control text-box" id="policyNumber" />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="customerName"> <span class="star">*</span>Customer Name </label>
                  <input type="text" class="form-control text-box" id="customerName" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="emailAddress"> <span class="star">*</span>Email Address </label>
                  <input type="text" class="form-control text-box" id="emailAddress" />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="telephoneNumber">
                    <span class="star">*</span>Telephone Number
                  </label>
                  <input type="text" class="form-control text-box" id="telephoneNumber" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="caseSegment"> <span class="star">*</span>Case Segment </label>
                  <input type="text" class="form-control text-box" id="caseSegment" />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="caseType"> <span class="star">*</span>Case Type </label>
                  <input type="text" class="form-control text-box" id="caseType" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="subject"> <span class="star">*</span>Subject </label>
                  <input type="text" class="form-control text-box" id="subject" />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="product"> <span class="star">*</span>Product </label>
                  <input type="text" class="form-control text-box" id="product" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="caseDescription"> <span class="star">*</span>Case Description </label>
              <textarea class="form-control text-area" id="caseDescription" rows="3"></textarea>
            </div>
            <a href="#" class="form-link"> <span class="star">*</span>Read complaints management policy. </a>
            <div class="btn-section">
              <button type="submit" class="btn btn-primary submit-btn">
                Submit Form
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'php-component/footer.php' ?>