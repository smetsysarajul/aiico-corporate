      <?php 
          $navStructure = array
          (
            'Individual'=>array
            (
              'double'=>true,
              'children'=>array(
              'Annuity Plan'=>'services.php?p=annuity',
              'Auto Insurance Plan'=>'services.php?p=auto_insurance',
              'Endowment Plan'=>array
                (
                    'Education Legacy Assurance'=>'services.php?p=education_legacy',
                    'Flexible Endowment Plan'=>'services.php?p=flexible_endowment',
                    'Life Celebration Plan'=>'services.php?p=life_celebration',
                    'New Income Investment'=>'services.php?p=new_income'
                ),
                'Life Plan'=>array
                (
                    'Credit Life Policy'=>'services.php?p=credit_life',
                    'Mortgage Protection Plan'=>'services.php?p=mortgage',

                ),
                'Personal Accident Plan'=>'services.php?p=personal_accident',
                'Savings Plan'=>array
                (
                  // 'Children’s Education Plan'=>'services.php?p=credit_life',
                  'Term Assurance'=>'services.php?p=terms_assurance'
                ), 'Travel Insurance Plans'=>array
                (
                  ' International Plan'=>'services.php?p=international',
                  'Local Plans'=>'services.php?p=local'
                )
              )
            ),
            'Business'=>array
            (
              'double'=>true,
              'children'=>array(
              'Marine Industry'=>array
                (
                    'Marine Insurance (cargo)'=>'services.php?p=cash_accumulation',
                    'Marine Hull & Machinery'=>'services.php?p=credit_life'
                ),
                'Manufacturing Industry'=>array
                (
                    'Machinery Loss of Profit (MLOP)'=>'services.php?p=mlop',
                    'Marine Hull & Machinery'=>'services.php?p=marine_hull',

                ),
                'Oil and Gas'=>'services.php?p=oil_gas',
                'Agric. Insurance'=>'services.php?p=agric',
                'General Business Plan'=>array
                (
                  'Group Life Insurance'=>'services.php?p=group_life',
                  'Group Education Plan'=>'services.php?p=group_education',
                  'Fire & Special Peril'=>'services.php?p=fire_peril',
                  'Cash Accumulation Plan'=>'services.php?p=cash_accumulation',
                  'Consequential Loss '=>'services.php?p=consequential_loss',
                  'Contractor-All-Risk '=>'services.php?p=contractor',
                  'Electronic Equipment Policy'=>'services.php?p=electronic_equipment',
                  'Employer’s Liability'=>'services.php?p=employer_liability',
                  'Erection-All-Risk '=>'services.php?p=erection_risk',
                  'Fidelity Guarantee'=>'services.php?p=fidelity_guarantee',
                  'Home Insurance'=>'services.php?p=home_insurance',
                )
              )
            )
            ,
            'About Us'=>array
            (
              'double'=>true,
              'children'=>array(
              'Our Company'=>array
                (
                    'About AIICO'=>'about.php',
                    'Mission and Vision'=>'services.php?p=credit_life'
                ),
                'Leadership'=>array
                (
                    'Corperate Governance'=>'corporate-governance.php',
                    'Board of Directors'=>'board.php',
                    'Executive Management'=>'management.php',
                ),
                'Careers'=>array
                (
                  'Our Culture'=>'culture.php',
                  'Vacancies'=>'vacancies.php',
                  'Entreneurship'=>'entreneurship.php'
                ),
                'Media'=>array
                (
                  'News and Events'=>'news.php',
                  'Image Gallery'=>'album.php',
                  'Video Gallery'=>'videos.php'
                ),
                'Investor Relations'=>array
                (
                  'Financial Information'=>'financial-info.php',
                  'Investor News'=>'investor-news.php',
                  'Shareholders Info.'=>'shareholders-info.php'
                ),
                'Business Locations'=>'locations.php',
                'Contact Us'=>'contact-us.php'
              )
            )            ,
            'Support'=>array
            (
              'double'=>false,
              'children'=>array(
                'Whistle Blower'=>'whistle-blower.php',
                'Form Download'=>'form-download.php',
                'Customer Feedback Form'=>'feedback-form.php',
                'Update your info'=>'update-info.php',
                'Claims Center'=>'claims-center.php',
                'Claims Payment'=>'claims-payment.php'
              )
            ),
          );
       ?>

      <div class="header__navigation hidden-tablet hidden-phone">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/php">
              <img src="../images/logo.svg" class="logo" />
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <?php foreach ($navStructure as $key=> $navItem): ?>
                  <?php if ($navItem['double']): ?>
                    <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="services.html"
                      id="<?php echo str_replace(' ', '_', $key).'Dropdown' ?>"
                      role="button"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <?php echo $key ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="<?php echo str_replace(' ', '_', $key).'Dropdown' ?>">
                      <div class="dropdown-menu-block">
                        <div class="dropdown-menu-column">
                          <ul class="dropdown-list">
                            <?php foreach ($navItem['children'] as $childKey => $grandChildren): ?>
                              <?php if (is_array($grandChildren)): ?>
                                <li class="dropdown-item dropdown-submenu">
                                  <a class="dropdown-link" href="#">
                                    <?php echo $childKey ?>
                                  </a>
                                  <div class="dropdown-menu-column dropdown-menu-column--child">
                                    <ul class="dropdown-list">
                                      <?php foreach ($grandChildren as $grandKey => $grandLink): ?>
                                         <li class="dropdown-item">
                                  <a class="dropdown-link" href="<?php echo $grandLink ?>">
                                    <?php echo $grandKey ?>
                                  </a>
                                </li>
                                        
                                      <?php endforeach ?>
                                    </ul>
                                  </div>
                                </li>
                              <?php else: ?>
                                <li class="dropdown-item">
                                  <a class="dropdown-link" href="<?php echo $grandChildren ?>">
                                    <?php echo $childKey ?>
                                  </a>
                                </li>
                              <?php endif ?>
                            <?php endforeach ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <?php else: ?>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="supportDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <?php echo $key ?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="supportDropdown">
                    <div class="dropdown-menu-column dropdown-menu-column--full-width">
                      <ul class="dropdown-list">
                      <?php foreach ($navItem['children'] as $childKey => $childLink): ?>
                        <li class="dropdown-item">
                          <a class="dropdown-link" href="<?php echo $childLink ?>"><?php echo $childKey ?></a>
                        </li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                </div>
                <?php endif ?>
                 
                <?php endforeach ?>
             </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="btn text-red bold" href="claims_center.php"> REPORT A CLAIM</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn--primary" href="#"> VISIT e-Business</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="mobile__navigation hidden-desktop">
        <nav class="navbar-mobile ">
          <div class="container">
            <div class="mb-3 mt-3">
              <button class="navbar-toggler" type="button">
                <span class="navbar-icon active" id="openNavBarIcon">
                  <i class="fas fa-bars"></i>
                </span>
              </button>
            </div>

            <div class="navbar-mobile__header">
              <a class="navbar-brand" href="/">
                <img src="../images/logo.svg" class="logo" />
              </a>
              <a class="btn btn--primary ml-auto" href="#"> E-Business</a>
            </div>
          </div>

          <div class="navbar-mobile__body">
            <div class="container">
              <div class="navbar-mobile__header">
                <a class="navbar-brand" href="/">
                  <img src="../images/logo.svg" class="logo" />
                </a>
                <button class="navbar-toggler" type="button">
                  <span class="navbar-icon active" id="closeNavBarIcon">
                    <i class="fas fa-times"></i>
                  </span>
                </button>
              </div>
  
              <div class="navbar-nav-block">
                <ul class="navbar-nav">
                  <!-- start the loop here -->
                  <?php foreach ($navStructure as $linkName => $children): ?>
                    <li class="nav-item">
                    <a class="nav-link mobile-dropdown" href="<?= $children['double']?'javascript:void(0)':'#' ?>">
                      <?php echo $linkName ?>
                    </a>
                    <div class="mobile-submenu">
                      <div class="nav-header">
                        <div class="nav-title"><?php echo $linkName ?></div>
                      </div>
                      <ul class="navbar-nav">
                        <?php foreach ($children['children'] as $childName => $grandChildren): ?>
                          <?php if (is_array($grandChildren)): ?>
                            <li class="nav-item">
                              <a class="nav-link mobile-dropdown" href="javascript:void(0)">
                                <?php echo $childName ?>
                              </a>
                              <div class="mobile-submenu mobile-submenu--child">
                                <div class="nav-header">
                                  <div class="nav-title"><?php echo $childName ?></div>
                                </div>
                                <ul class="navbar-nav">
                                  <?php foreach ($grandChildren as $label => $link): ?>
                                    <li class="nav-item">
                                      <a class="nav-link" href="<?php echo $link ?>">
                                        <?php echo $label ?>
                                      </a>
                                    </li>
                                  <?php endforeach ?>                                  
                                </ul>
                              </div>
                            </li>
                          <?php else: ?>
                            <li class="nav-item">
                          <a class="nav-link" href="<?php echo $grandChildren ?>">
                            <?php echo $childName ?>
                          </a>
                        </li>
                          <?php endif ?>
                        <?php endforeach ?>
                      </ul>
                    </div>

                  </li>
                  <?php endforeach ?>
                  <li class="nav-item claim-btn">
                    <a class="btn btn--primary w-100" href="claims-center.html"> REPORT A CLAIM</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
