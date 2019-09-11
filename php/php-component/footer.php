<?php 
$footerTemplate =array
(
  'Services'=>array(
    'Corporate Plans'=>'service.php',
    'Personal/Individual'=>'service.php',
    'Auto Insurance'=>'service.php',
    'Life Plan'=>'service.php',
    'Home'=>'service.php',
  ),
  'About aiico'=>array(
    'Overview'=>'index.php',
    'About Us'=>'about.php',
    'Leadership'=>'board.php',
    'Media'=>'album.php',
    'Press Release'=>'news.php',
  ),
  'Investor Relation'=>array(
    'Financial Reports'=>'corporate-governance.php',
    'Why Invest?'=>'investor-relations.php',
    'Annual Reports'=>'service.php',
    'Investor News'=>'news.php',
  ),
  'Career'=>array(
    'Apply Now'=>'vacancies.php?',
    'Our Culture'=>'culture.php',
    'Leadership'=>'board.php',
    'Enterpreneurship'=>'enterpreneuship.php',
    'Vacancy'=>'vacancies.php',
  ),
  'Quick links'=>array(
    'Refer A Friend'=>'#',
    'Whistle Blower'=>'whistle-blower.php',
    'Claims Payment'=>'claims-payment.php',
    'Business Location'=>'location.php',
    'Financial Reports'=>'service.php',
  ),
  'help service'=>array(
    'Contact Us'=>'contact-us.php?',
    'Update Your Information'=>'update-info.php',
    'Complaints Management'=>'#',
    'Form Download'=>'form-download.php',
    'Customer Feedback'=>'feedback.php',
  )
);

 ?>

<footer class="footer">
  <div class="footer__navbar">
    <div class="container">
      <div class="row  accordion" id="footerNavbarAccordion">
        <?php foreach ($footerTemplate as $name => $children): ?>
          <?php 
            $displayName =str_replace(' ', '_', $name.'Collapse');
            $displayHeading =str_replace(' ', '_', $name.'Heading');
           ?>
          <div class="col-md-2 footer__nav-section">
            <div
              class="footer__nav-section__head"
              data-toggle=""
              data-target="#<?php echo $displayName ?>"
              aria-expanded="false"
              aria-controls="<?php echo $displayName ?>"
              id="<?php echo $displayHeading ?>"
            >
              <h4 class="footer__nav-section__head__title"><?php echo $name ?></h4>
              <i class="fas fa-chevron-down footer__nav-section__head__icon"></i>
            </div>
            <div
              class="footer__nav-section__collapse-wrapper"
              id="<?php echo $displayName ?>"
              aria-labelledby="<?php echo $displayHeading ?>"
              data-parent="#footerNavbarAccordion"
            >
              <ul class="footer__nav">
                <?php foreach ($children as $label => $link): ?>
                  <li class="footer__nav-item">
                    <a href="<?php echo $link ?>" class="footer__nav-link"><?php echo $label ?></a>
                  </li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
  <div class="footer__extra-info">
    <div class="container">
      <div class="row">
        <div class="col-md-3 logo-section">
          <img src="../images/logo.svg" class="logo" />
        </div>
        <div class="col-md-3 address-section">
          <p class="address">Plot PC 12, Churchgate Street,
            <br />Victoria Island, Lagos.</p>
        </div>
        <div class="col-md-3 contact-section">
          <a href="#" class="contact-link">01 279 2930</a>
          <a href="#" class="contact-link">0700 AIIContact</a>
          <a href="#" class="contact-link">0700 2442 6682 28</a>
        </div>
        <div class="col-md-3 contact-section">
          <a href="#" class="contact-link">aiicontact@aiicoplc.com</a>
          <div class="social-links">
            <a href="#" target="_blank" class="link">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" target="_blank" class="link">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" target="_blank" class="link">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" target="_blank" class="link">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="copyright">
        <span>&copy; 2019 AIICO PLC. All rights reserved.</span>
      </div>
      <div class="extra-links">
        <a href="#" class="link">Privacy Policy</a>
        <a href="#" class="link">Terms & Conditions</a>
      </div>
    </div>
  </div>
</footer>
<style>
  @media (max-width: 768px)
  {
    .footer__nav-section__head{
      border-bottom: 1px solid #003896;
      padding-bottom: 2rem;
    }
  }
</style>
<?php  include 'resource_footer.php' ?>