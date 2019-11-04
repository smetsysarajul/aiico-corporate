<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$id = '';

if ($tagId = $params->get('tag_id', ''))
{
	$id = ' id="' . $tagId . '"';
}
$app = JFactory::getApplication();
$templateParams = $app->getTemplate('true')->params;

// The menu class is deprecated. Use nav instead
// declare needed variables here
$previousKey='';
$level2Key='';
?>
<!-- <ul> -->
<?php foreach ($list as $i => &$item)
{
	$key=$item->title;
	$level = $item->level;
	$value = $item->parent?array(): JFilterOutput::ampReplace(htmlspecialchars($item->flink, ENT_COMPAT, 'UTF-8', false));
	if ($level==1) {
		if (is_array($value)) {
			$previousKey=$key;
			$value['children']=array();
			$value['double']=false;
		}
		
		$navStructure[$key]=$value;
		continue;
	}
	if($level==2){
		if ($level ==2) {
			$navStructure[$previousKey]['children'][$key]=$value;
			if (is_array($value)) {
				$level2Key=$key;
			}
		}
		
	}
	if ($level==3) {
		$navStructure[$previousKey]['double']=true;
		$navStructure[$previousKey]['children'][$level2Key][$key]=$value;
	}
}

$menutype = $list[0]->menutype;
// if ($menutype=='mainmenu') {
// 	print_r($navStructure);exit;
// }
?>
<?php if ($menutype=='mainmenu'): ?>
	<div class="header__navigation hidden-tablet hidden-phone">
	  <div class="container">
	    <nav class="navbar navbar-expand-lg">
	      <a class="navbar-brand" href="./index.php">
	        <img src="<?=$templateParams->get('logoFile')?>" class="logo" />
	      </a>

	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav">
	          <?php foreach ($navStructure as $key=> $navItem): ?>
	            <?php if ($navItem['double']): ?>
	              <li class="nav-item dropdown">
	              <a
	                class="nav-link dropdown-toggle"
	                href="#"
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
	            <a class="btn text-red bold" href="claims-center.php"> REPORT A CLAIM</a>
	          </li>
	          <li class="nav-item">
	            <a class="btn btn--primary" href="<?=$templateParams->get('ebusiness_link')?>"> <?=$templateParams->get('ebusiness_button_text')?></a>
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
	          <img src="<?=$templateParams['logoFile']?>" class="logo" />
	        </a>
	        <a class="btn btn--primary ml-auto" href="#"> E-Business</a>
	      </div>
	    </div>

	    <div class="navbar-mobile__body">
	      <div class="container">
	        <div class="navbar-mobile__header">
	          <a class="navbar-brand" href="/">
	            <img src="<?=$templateParams['logoFile']?>" class="logo" />
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
	              <a class="btn btn--primary w-100" href="claims-center.php"> REPORT A CLAIM</a>
	            </li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </nav>
	</div>

<?php else: ?>
	<?php if ($menutype=='bottommenu'): ?>
		<?php 
			//convert the data structure here
		$footerTemplate= array();
		foreach ($navStructure as $parent => $child) {
			$footerTemplate[$parent]=$child['children'];
		}

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
		          <img src="<?=$templateParams['logoFile']?>" class="logo" />
		        </div>
		        <div class="col-md-3 address-section">
		          <p class="address"><?=$templateParams['address']?></p>
		        </div>
		        <div class="col-md-3 contact-section">
		          <a href="#" class="contact-link"><?=$templateParams['footer_phone_1']?></a>
		          <a href="#" class="contact-link"><?=$templateParams['footer_phone_2']?></a>
		          <a href="#" class="contact-link"><?=$templateParams['footer_phone_3']?></a>
		        </div>
		        <div class="col-md-3 contact-section">
		          <a href="#" class="contact-link"><?=$templateParams['site_email']?></a>
		          <div class="social-links">
		            <a href="<?=$templateParams['facebook_link']?>" target="_blank" class="link">
		              <i class="fab fa-facebook"></i>
		            </a>
		            <a href="<?=$templateParams['twitter_link']?>" target="_blank" class="link">
		              <i class="fab fa-twitter"></i>
		            </a>
		            <a href="<?=$templateParams['instagram_link']?>" target="_blank" class="link">
		              <i class="fab fa-instagram"></i>
		            </a>
		            <a href="<?=$templateParams['linkedin_link']?>" target="_blank" class="link">
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
		        <a href="<?=$templateParams['privacy_policy_link']?>" class="link">Privacy Policy</a>
		        <a href="<?=$templateParams['terms_condition_link']?>" class="link">Terms & Conditions</a>
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
	<?php endif ?>

<?php endif ?>