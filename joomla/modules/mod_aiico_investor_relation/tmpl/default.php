<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lujaracarousel
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$num = count($list);
$customClass=array('section__accordion bg-white','section__news','section__downloads')
?>
  <section class="section">
    <?=$list['top_content']?>
  </section>

  <section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="row">
        <?php foreach ($list['tabs'] as $key => $tab ): ?>
          <div class="col-4 text-center p-1 pills">
            <div class="claims-tab pill-tabs <?=$key==0?'active':''?>" id="<?=$key?>"  data-target='#pill_<?=$key?>'>
              <i class="fas <?=$tab['icon']?> fa-3x py-3"></i>
              <h4><?=$tab['label']?></h4>
            </div>
          </div>
        <?php endforeach ?>
            
          </div>
        </div>
      </div>
    </div>
    <div class="container pt-5">
      <hr />
    </div>
  </section>

  <section>
    <div class="container investor-relations ">
      <?php foreach ($list['tabs'] as $key => $item): ?>
        <div id="pill_<?=$key?>" class="pill-content  <?=$key==0?'':'d-none'?>  <?=$customClass[$key]?>  investor-relations-view">
            <?=$item['content']?>
        
        <?php if (array_key_exists('articles', $item)): ?>
          <div >
          <br>
          <div  class="section section__news">
          <div class="row">
          <?php foreach ($item['articles'] as $key => $value): ?>
            <div class="col-md-6 col-lg-4 mb-5">
              <div class="news">
                <figure class="news__cover-wrapper ">
                  <img class="news__cover" src="<?=$value['cover_image']?>" />
                </figure>
                <div class="news__body">
                  <span class="news__date"><?=$value['date']?></span>
                  <a href="<?=$value['link']?>" class="news__headline"><?=$value['title']?></a>
                  <p class="paragraph news__excerpt">
                    <?=$value['introtext']?>
                  </p>
                  <a href="<?=$value['link']?>" class="news__cta">
                    Read more &raquo;
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      </div>
        <?php endif ?>
        </div>
      <?php endforeach ?>
<!--       <div id="financial-view" class="section section__accordion investor-relations-view bg-white">
        <div class="row justify-content-center">
          <div class="col-md-10 py-4">
            <h5 class="financial-heading">Our financial reports, share information, analyst reports, credit rating.</h5>
            <p class="paragraph">This is everything you’ll need to keep you up to date on investing in UBA.This presentation of results is for information only and not an invitation or recommendation to invest.</p>
          </div>
          <div class="col-md-10">
            <div class="accordion" id="generalAccordion">
              <div class="accordion__item">
                <div class="collapsed accordion__item__head" id="item1" data-toggle="collapse" data-target="#collapseItem1" aria-expanded="true" aria-controls="collapseItem1">
                  <h4 class="accordion__item__head__title">
                    2019 Financial Report
                  </h4>
                  <i class="fas fa-chevron-down accordion__item__head__icon"></i>
                </div>
                <div id="collapseItem1" class="collapse show" aria-labelledby="item1" data-parent="#generalAccordion">
                  <div class="accordion__item__body">
                    <div class="info">
                      <ul class="pdf-list">
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2018 Annual Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2019 Q1 Financial Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            2019 Notice of Annual General Meeting
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion__item">
                <div class="collapsed accordion__item__head" id="item2" data-toggle="collapse" data-target="#collapseItem2" aria-expanded="false" aria-controls="collapseItem2">
                  <h4 class="accordion__item__head__title">
                    2018 Financial Report
                  </h4>
                  <i class="fas fa-chevron-down accordion__item__head__icon"></i>
                </div>
                <div id="collapseItem2" class="collapse" aria-labelledby="item2" data-parent="#generalAccordion">
                  <div class="accordion__item__body">
                    <div class="info">
                      <ul class="pdf-list">
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2018 Annual Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2019 Q1 Financial Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            2019 Notice of Annual General Meeting
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion__item">
                <div class="collapsed accordion__item__head" id="item3" data-toggle="collapse" data-target="#collapseItem3" aria-expanded="false" aria-controls="collapseItem3">
                  <h4 class="accordion__item__head__title">
                    2017 Financial Report
                  </h4>
                  <i class="fas fa-chevron-down accordion__item__head__icon"></i>
                </div>
                <div id="collapseItem3" class="collapse" aria-labelledby="item3" data-parent="#generalAccordion">
                  <div class="accordion__item__body">
                    <div class="info">
                      <ul class="pdf-list">
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2018 Annual Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2019 Q1 Financial Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            2019 Notice of Annual General Meeting
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion__item">
                <div class="collapsed accordion__item__head" id="item4" data-toggle="collapse" data-target="#collapseItem4" aria-expanded="false" aria-controls="collapseItem4">
                  <h4 class="accordion__item__head__title">
                    2016 Financial Report
                  </h4>
                  <i class="fas fa-chevron-down accordion__item__head__icon"></i>
                </div>
                <div id="collapseItem4" class="collapse" aria-labelledby="item4" data-parent="#generalAccordion">
                  <div class="accordion__item__body">
                    <div class="info">
                      <ul class="pdf-list">
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2018 Annual Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2019 Q1 Financial Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            2019 Notice of Annual General Meeting
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion__item">
                <div class="collapsed accordion__item__head" id="item5" data-toggle="collapse" data-target="#collapseItem5" aria-expanded="false" aria-controls="collapseItem5">
                  <h4 class="accordion__item__head__title">
                    2015 Financial Report
                  </h4>
                  <i class="fas fa-chevron-down accordion__item__head__icon"></i>
                </div>
                <div id="collapseItem5" class="collapse" aria-labelledby="item5" data-parent="#generalAccordion">
                  <div class="accordion__item__body">
                    <div class="info">
                      <ul class="pdf-list">
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2018 Annual Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2019 Q1 Financial Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            2019 Notice of Annual General Meeting
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion__item">
                <div class="collapsed accordion__item__head" id="item6" data-toggle="collapse" data-target="#collapseItem6" aria-expanded="false" aria-controls="collapseItem6">
                  <h4 class="accordion__item__head__title">
                    2014 Financial Report
                  </h4>
                  <i class="fas fa-chevron-down accordion__item__head__icon"></i>
                </div>
                <div id="collapseItem6" class="collapse" aria-labelledby="item6" data-parent="#generalAccordion">
                  <div class="accordion__item__body">
                    <div class="info">
                      <ul class="pdf-list">
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2018 Annual Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2019 Q1 Financial Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            2019 Notice of Annual General Meeting
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion__item">
                <div class="collapsed accordion__item__head" id="item7" data-toggle="collapse" data-target="#collapseItem7" aria-expanded="false" aria-controls="collapseItem7">
                  <h4 class="accordion__item__head__title">
                    2013 Financial Report
                  </h4>
                  <i class="fas fa-chevron-down accordion__item__head__icon"></i>
                </div>
                <div id="collapseItem7" class="collapse" aria-labelledby="item7" data-parent="#generalAccordion">
                  <div class="accordion__item__body">
                    <div class="info">
                      <ul class="pdf-list">
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2018 Annual Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            AIICO 2019 Q1 Financial Report
                          </a>
                        </li>
                        <li class="pdf-list__item">
                          <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="pdf-list__item__link">
                            2019 Notice of Annual General Meeting
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="investors-view" class="section section__news investor-relations-view">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="news">
              <figure class="news__cover-wrapper ">
                <img class="news__cover" src="../images/press/aiico-student.jpg" />
              </figure>
              <div class="news__body">
                <span class="news__date">February 20, 2019</span>
                <a href="single-news.php" class="news__headline">AIICO empowers students with work tools</a>
                <p class="paragraph news__excerpt">
                  As part of efforts to ignite passion for science and technology innovation in Nigerian youths,
                  AIICO Insurance Plc. has donated thousands of mathematical sets and calculators to pupils and
                  students in over thirty Primary and Secondary schools across 6 states of the Federation...
                </p>
                <a href="single-news.php" class="news__cta">
                  Read more &raquo;
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="news">
              <figure class="news__cover-wrapper ">
                <img class="news__cover" src="../images/press/aiico-student.jpg" />
              </figure>
              <div class="news__body">
                <span class="news__date">February 20, 2019</span>
                <a href="single-news.php" class="news__headline">AIICO empowers students with work tools</a>
                <p class="paragraph news__excerpt">
                  As part of efforts to ignite passion for science and technology innovation in Nigerian youths,
                  AIICO Insurance Plc. has donated thousands of mathematical sets and calculators to pupils and
                  students in over thirty Primary and Secondary schools across 6 states of the Federation...
                </p>
                <a href="single-news.php" class="news__cta">
                  Read more &raquo;
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="news">
              <figure class="news__cover-wrapper ">
                <img class="news__cover" src="../images/press/aiico-student.jpg" />
              </figure>
              <div class="news__body">
                <span class="news__date">February 20, 2019</span>
                <a href="single-news.php" class="news__headline">AIICO empowers students with work tools</a>
                <p class="paragraph news__excerpt">
                  As part of efforts to ignite passion for science and technology innovation in Nigerian youths,
                  AIICO Insurance Plc. has donated thousands of mathematical sets and calculators to pupils and
                  students in over thirty Primary and Secondary schools across 6 states of the Federation...
                </p>
                <a href="single-news.php" class="news__cta">
                  Read more &raquo;
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="news">
              <figure class="news__cover-wrapper ">
                <img class="news__cover" src="../images/press/aiico-student.jpg" />
              </figure>
              <div class="news__body">
                <span class="news__date">February 20, 2019</span>
                <a href="single-news.php" class="news__headline">AIICO empowers students with work tools</a>
                <p class="paragraph news__excerpt">
                  As part of efforts to ignite passion for science and technology innovation in Nigerian youths,
                  AIICO Insurance Plc. has donated thousands of mathematical sets and calculators to pupils and
                  students in over thirty Primary and Secondary schools across 6 states of the Federation...
                </p>
                <a href="single-news.php" class="news__cta">
                  Read more &raquo;
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="news">
              <figure class="news__cover-wrapper ">
                <img class="news__cover" src="../images/press/aiico-student.jpg" />
              </figure>
              <div class="news__body">
                <span class="news__date">February 20, 2019</span>
                <a href="single-news.php" class="news__headline">AIICO empowers students with work tools</a>
                <p class="paragraph news__excerpt">
                  As part of efforts to ignite passion for science and technology innovation in Nigerian youths,
                  AIICO Insurance Plc. has donated thousands of mathematical sets and calculators to pupils and
                  students in over thirty Primary and Secondary schools across 6 states of the Federation...
                </p>
                <a href="single-news.php" class="news__cta">
                  Read more &raquo;
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="news">
              <figure class="news__cover-wrapper ">
                <img class="news__cover" src="../images/press/aiico-student.jpg" />
              </figure>
              <div class="news__body">
                <span class="news__date">February 20, 2019</span>
                <a href="single-news.php" class="news__headline">AIICO empowers students with work tools</a>
                <p class="paragraph news__excerpt">
                  As part of efforts to ignite passion for science and technology innovation in Nigerian youths,
                  AIICO Insurance Plc. has donated thousands of mathematical sets and calculators to pupils and
                  students in over thirty Primary and Secondary schools across 6 states of the Federation...
                </p>
                <a href="single-news.php" class="news__cta">
                  Read more &raquo;
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="shareholders-view" class="section section__downloads investor-relations-view">
        <div class="row">
          <div class="col-md-12">
            <h3 class="heading heading--secondary mb-5">Shareholder's Forms</h3>
            <ul class="download-list">
              <li class="download-list__item">
                <h6 class="download-list__item__title">
                  APPLICATION for COPY OF lost POLICY
                </h6>
                <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="download-list__item__link">
                  <i class="fas fa-download download-list__item__link__icon"></i>
                  Download Form
                </a>
              </li>
              <li class="download-list__item">
                <h6 class="download-list__item__title">
                  AIICO AGY 87
                </h6>
                <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="download-list__item__link">
                  <i class="fas fa-download download-list__item__link__icon"></i>
                  Download Form
                </a>
              </li>
              <li class="download-list__item">
                <h6 class="download-list__item__title">
                  FIRE INSURANCE PROPOSAL FORM FOR PRIVATE BUSINESS PREMISES
                </h6>
                <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="download-list__item__link">
                  <i class="fas fa-download download-list__item__link__icon"></i>
                  Download Form
                </a>
              </li>
              <li class="download-list__item">
                <h6 class="download-list__item__title">
                  CHANGE OF BENEFICIARY
                </h6>
                <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="download-list__item__link">
                  <i class="fas fa-download download-list__item__link__icon"></i>
                  Download Form
                </a>
              </li>
              <li class="download-list__item">
                <h6 class="download-list__item__title">
                  FLEXIBLE ENDOWMENT PLAN PROPOSAL FORM
                </h6>
                <a href="https://www.aiicoplc.com/images/financial_reports/AIICO_2018_Annual_Report_and_Accounts.pdf" target="_blank" rel="noopener noreferrer" class="download-list__item__link">
                  <i class="fas fa-download download-list__item__link__icon"></i>
                  Download Form
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
    </div>
  </section>
  <style>
    
  </style>