<?php 
  $page='feedback-form';
  $pageTitle ='Feedback Form | AIICO Insurance Plc.';
 ?>
<?php include 'php-component/header.php' ?>

<main> <section class="page-intro page-intro--alt" style="background-image: url(./images/customercare.jpg)">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Suport</li>
            </ol>
          </nav>
          <h3 class="page-title">Customer Feedback</h3>
          <p class="page-desc">Say Hello today.. </p>
        </div>
      </div>
    </div>
  </section>
 
  <section class="section">
    <div class="container">
      <div class="section__intro">
        <h3 class="section__heading">Kindly fill the form below</h3>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <form id="whistleBlowerForm" class="general-form ">
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