      <?php 
          $navStructure = array
          (
            'Individual'=>array
            (
              'double'=>true,
              'children'=>array(
              'Annuity Plan'=>'services.php',
              'Auto Insurance Plan'=>'services.php',
              'Endowment Plan'=>array
                (
                    'Cash Accummulation'=>'services.php?p=cash_accumulation',
                    'Credit Life Policy'=>'services.php?p=credit_life',
                    'Education Legacy Assurance'=>'services.php?p=credit_life',
                    'Flexible Endowment Plan'=>'services.php?p=flexible_endowment',
                    'Life Celebration Plan'=>'services.php?p=credit_life',
                    'New Income Investment'=>'services.php?p=credit_life'
                ),
                'Life Plan'=>array
                (
                    'Credit Life Policy'=>'services.php?p=credit_life',
                    'Mortgage Protection Plan'=>'services.php?p=credit_life',

                ),
                'Personal Accident Plan'=>'services.php?p=credit_life',
                'Savings Plan'=>array
                (
                  'Children’s Education Plan'=>'services.php?p=credit_life',
                  'Term Assurance'=>'services.php?p=credit_life'
                ),

                'Travel Insurance Plan'=>'services.php?p=credit_life'
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
                    'Machinery Loss of Profit (MLOP)'=>'services.php?p=credit_life',
                    'Marine Hull & Machinery'=>'services.php?p=credit_life',

                ),
                'Oil and Gas'=>'services.php?p=credit_life',
                'Agric. Insurance'=>'services.php?p=credit_life',
                'General Business Plan'=>array
                (
                  'Group Life Insurance'=>'services.php?p=credit_life',
                  'Group Education Plan'=>'services.php?p=credit_life',
                  'Fire & Special Peril'=>'services.php?p=credit_life',
                  'Cash Accumulation Plan'=>'services.php?p=credit_life',
                  'Bond Insurance'=>'services.php?p=credit_life',
                  // 'Occupiers Liability'=>'services.php?p=credit_life',
                  // 'Fidelity Guarantee'=>'services.php?p=credit_life',
                  // 'Goods-in-Transit'=>'services.php?p=credit_life',
                  // 'Machinery Breakdown'=>'services.php?p=credit_life',
                  // 'Erection All Risk'=>'services.php?p=credit_life',
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
                  'Image Gallery'=>'image-gallery.php',
                  'Video Gallery'=>'video-gallery.html.html'
                ),
                'Investor Relations'=>array
                (
                  'Financial Information'=>'financial-info.php',
                  'Investor News'=>'investor-news.php',
                  'Shareholders Info.'=>'shareholders-info.php'
                ),
                'Business Locations'=>'locations.php'
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

      <div class="header__navigation">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/">
              <img src="../images/logo.svg" class="logo" />
            </a>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <?php foreach ($navStructure as $key=> $navItem): ?>
                  <?php if ($navItem['double']): ?>
                    <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="services.html"
                      id="individualDropdown"
                      role="button"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <?php echo $key ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="individualDropdown">
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
<!--                 <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="services.html"
                    id="individualDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Individual
                  </a>
                  <div class="dropdown-menu" aria-labelledby="individualDropdown">
                    <div class="dropdown-menu-block">
                      <div class="dropdown-menu-column">
                        <ul class="dropdown-list">
                          <li class="dropdown-item">
                            <a class="dropdown-link" href="#">
                              Annuity Plan
                            </a>
                          </li>
                          <li class="dropdown-item">
                            <a class="dropdown-link" href="#">
                              Auto Insurance Plan
                            </a>
                          </li>
                          <li class="dropdown-item dropdown-submenu">
                            <a class="dropdown-link" href="#">
                              Endowment Plan
                            </a>

                            <div class="dropdown-menu-column dropdown-menu-column--child">
                              <ul class="dropdown-list">
                                <li class="dropdown-item">
                                  <a class="dropdown-link" href="services.html">
                                    Cash Accumulation
                                  </a>
                                </li>
                                <li class="dropdown-item">
                                  <a class="dropdown-link" href="services.html">
                                    Credit Life Policy
                                  </a>
                                </li>
                                <li class="dropdown-item">
                                  <a class="dropdown-link" href="services.html">
                                    Education Legacy Assurance
                                  </a>
                                </li>
                                <li class="dropdown-item">
                                  <a class="dropdown-link" href="services.html">
                                    Flexible Endowment Plan
                                  </a>
                                </li>
                                <li class="dropdown-item">
                                  <a class="dropdown-link" href="services.html">
                                    Life Celebration Plan
                                  </a>
                                </li>
                                <li class="dropdown-item">
                                  <a class="dropdown-link" href="services.html">
                                    New Income Investment
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li class="dropdown-item dropdown-submenu">
                            <a class="dropdown-link" href="#">
                              Life Plan
                            </a>

                            <div class="dropdown-menu-column dropdown-menu-column--child">
                              <ul class="dropdown-list">
                                <li class="dropdown-item">
                                  <a class="dropdown-link" href="services.html">
                                    Credit Life Policy
                                  </a>
                                </li>
                                <li class="dropdown-item">
                                  <a class="dropdown-link" href="services.html">
                                    Mortgage Protection Plan
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li class="dropdown-item">
                            <a class="dropdown-link" href="#">
                              Personal Accident Plan
                            </a>
                          </li>
                          <li class="dropdown-item dropdown-submenu">
                            <a class="dropdown-link" href="#">
                              Savings Plan
                            </a>

                            <div class="dropdown-menu-column dropdown-menu-column--child">
                              <ul class="dropdown-list">
                                <li class="dropdown-item">
                                  <a class="dropdown-link" href="services.html">
                                    Children’s Education Plan
                                  </a>
                                </li>
                                <li class="dropdown-item">
                                  <a class="dropdown-link" href="services.html">
                                    Term Assurance
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li class="dropdown-item">
                            <a class="dropdown-link" href="#">
                              Travel Insurance Plan
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="services.html"
                    id="businessDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Business
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="businessDropdown">
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="services.html">Marine Industry</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="services.html">Marine Insurance (cargo)</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="services.html">Marine Hull & Machinery</a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="services.html">Manufacturing Industry</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="services.html">Machinery Loss of Profit (MLOP)</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="services.html">Marine Hull & Machinery</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="services.html">Oil and Gas</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="services.html">Agric. Insurance</a>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="services.html">General Business Plan</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="services.html">Group Life Insurance</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="services.html">Group Education Plan</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="services.html">Fire & Special Peril</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="services.html">Cash Accumulation Plan</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="services.html">Bond Insurance</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="services.html">Occupiers Liability</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="services.html">Fidelity Guarantee</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="services.html">Goods-in-Transit</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="services.html">Machinery Breakdown</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="services.html">Erection All Risk</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="aboutDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    About Us
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="#">Our Company</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="about.html">About AIICO</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="mission.html">Mission and Vision</a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="#">Leadership</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="corperate-governance.html">Corperate Governance</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="board.html">Board of Directors</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="management.html">Executive Management</a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="#">Careers</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="culture.html">Our Culture</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="vacancies.html">Vacancies</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="entreneurship.html">Entreneurship</a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="#">Media</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="news.html">News and Events</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="image-gallery.html">Image Gallery</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="video-gallery.html.html">Video Gallery</a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="#">Investor Relations</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item" href="financial-info.html">Financial Information</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="investor-news.html">Investor News</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="shareholders-info.html">Shareholders Info.</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="locations.html">Business Locations</a>
                    </li>
                  </ul>
                </li>
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
                    Support
                  </a>
                  <div class="dropdown-menu" aria-labelledby="supportDropdown">
                    <div class="dropdown-menu-column dropdown-menu-column--full-width">
                      <ul class="dropdown-list">
                        <li class="dropdown-item">
                          <a class="dropdown-link" href="whistle-blower.html">Whistle Blower</a>
                        </li>
                        <li class="dropdown-item">
                          <a class="dropdown-link" href="form-download.html">Form Download</a>
                        </li>
                        <li class="dropdown-item">
                          <a class="dropdown-link" href="feedback-form.html">Customer Feedback form</a>
                        </li>
                        <li class="dropdown-item">
                          <a class="dropdown-link" href="update-info.html">Update your info</a>
                        </li>
                        <li class="dropdown-item">
                          <a class="dropdown-link" href="claims-center.html">Claims Center</a>
                        </li>
                        <li class="dropdown-item">
                          <a class="dropdown-link" href="claims-payment.html">Claims Payment</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
 -->              </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link text-red" href="#"> REPORT A CLAIM</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn--primary" href="#"> VISIT e-Business</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>