<?php 
  $page='whistle-blower';
  $pageTitle ='Whistle Blower | AIICO Insurance Plc.';
 ?>
<?php include 'php-component/header.php' ?>

<main>
  <section class="section">
    <div class="container">
      <div class="section__intro">
        <h3 class="section__heading">Whistle Blower</h3>
      </div>
    </div>
  </section>
  <section class="section pt-0">
    <div class="container">
      <div class="row align-items-center justify-content-between mb-5">
        <div class="col-md-5">
          <p class="paragraph">
            Have you experienced or observed any unethical or unprofessional conduct on the part of any of our staff
            or representatives? Do you have an incident or behavior that may expose the Company to a risk? Please
            complete the whistleblower form below or reach us via the other contact details for anonymous and
            confidential reporting.
          </p>

          <p class="paragraph">
            The form also allows you to express your concerns or dilemmas, or to seek advice on a matter related to
            compliance with the law, our business principles and/or our Code of Conduct.
          </p>
        </div>
        <div class="col-md-6 mb-5">
          <figure class="image-wrapper ">
            <img class="image " src="../images//whistle-blower.png" alt="ask ella" />
          </figure>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <ol class="numbered-list">
            <li class="numbered-list__item">
              This service is not meant for customer service complaints or enquiries, this would be adequately
              handled by AIICONTACT
            </li>
            <li class="numbered-list__item">
              It is not mandatory you provide your contact details. However, if provided, it will enable us keep you
              updated on the progress of the investigation as well as contact you for clarification or further
              information on your complaint.
            </li>
            <li class="numbered-list__item">
              The most important principle of the Company’s Whistle blowing Policy is the protection of the
              whistleblower. Therefore, with the exception of a malicious tip – off, your confidentiality wishes
              shall be fully respected and protected.
            </li>
          </ol>
          <p class="paragraph">
            Because we do not undertake investigations without adequate cause, we require as much evidence as
            possible to corroborate the allegation(s) such as documents, witnesses, and other specific and relevant
            information. Should you remain anonymous, we advise you provide sufficient information to initiate and
            sustain the investigation.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="section section__contact-info pt-0">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-4">
          <div class="contact-box">
            <h5 class="label">You may Reach us:</h5>
            <p class="value">Email: <a href="#" class="link">whisleblowing@aiicoplc.com</a></p>
            <p class="value">Tel: <a href="#" class="link">+234 279 2930 989</a></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-box">
            <h5 class="label">Mail by post to:</h5>
            <p class="value">C/o Head, Internal Audit Services</p>
            <p class="value">AIICO Plaza</p>
            <p class="value">AIICO Insurance PLC.</p>
            <p class="value">Plot PC12 Churchgate Street</p>
            <p class="value">Victoria Island, Lagos State</p>
            <p class="value">Nigeria.</p>
          </div>
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
                  <label class="form-label" for="firstName"> <span class="star">*</span>First Name </label>
                  <input type="text" class="form-control text-box" id="firstName" />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="lastName"> <span class="star">*</span>Last Name </label>
                  <input type="text" class="form-control text-box" id="lastName" />
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
            <div class="form-group">
              <label class="form-label" for="contactAddress"> <span class="star">*</span>Contact Address </label>
              <textarea class="form-control text-area" id="contactAddress" rows="3"></textarea>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="city"> <span class="star">*</span>City </label>
                  <input type="text" class="form-control text-box" id="city" />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="form-label" for="state"> <span class="star">*</span>State </label>
                  <select class="form-control select-box" id="state">
                    <option>Select State</option>
                    <option>Lagos</option>
                    <option>Ogun</option>
                    <option>Ibadan</option>
                    <option>Oyo</option>
                    <option>Abia</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="incidentDescription">
                <span class="star">*</span>Please describe the incident as detailed as possible.
              </label>
              <textarea class="form-control text-area" id="incidentDescription" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label class="form-label" for="carDamage">
                <span class="star">*</span>How would you like to be contacted? (Check all that apply)
              </label>
              <div class="form-check">
                <input class="form-check-input check-box" type="checkbox" value="" id="phoneContact" />
                <label class="form-check-label check-box-label" for="phoneContact">
                  Phone
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input check-box" type="checkbox" value="" id="emailContact" />
                <label class="form-check-label check-box-label" for="emailContact">
                  Email
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input check-box" type="checkbox" value="" id="postContact" />
                <label class="form-check-label check-box-label" for="postContact">
                  Post
                </label>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="supportingDocument">
                <span class="star">*</span>Attach supporting document (Not more than 4MB)
              </label>
              <input type="file" class="form-control-file file-input" id="supportingDocument" />
              <div class="custom-file-browser">
                <button class="file-browser-btn">
                  <i class="fas fa-cloud-upload-alt file-browser-btn__icon"></i>
                  Choose file
                </button>
                <span class="file-info">No file chosen</span>
              </div>
            </div>
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