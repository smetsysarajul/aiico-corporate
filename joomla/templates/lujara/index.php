<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.lujara
 *
 * @copyright   Copyright (C) 2019 Lujara Systems, Inc. All rights reserved.
 * @license     lujara system; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();
$document  = JFactory::getDocument();
$activeMenu = $app->getMenu()->getActive();
$pageClass = $activeMenu->params->get('pageclass_sfx');
//clear any previously added automatic scripts
$document->_scripts=array();
$this->_scripts = array();
unset($this->_script['text/javascript']);

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

JHtml::_('stylesheet', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
JHtml::_('stylesheet', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
JHtml::_('stylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css');
JHtml::_('stylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
JHtml::_('stylesheet', 'style.css', array('version' => 'auto', 'relative' => true));

// Add template js
$document->addScript("https://code.jquery.com/jquery-3.3.1.min.js")
->addScript("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js",array(),array('integrity'=>'sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1','crossorigin'=>'anonymous'))
->addScript("https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",array(),array('integrity'=>'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM','crossorigin'=>'anonymous'))
->addScript("https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js")
->addScript("https://kit.fontawesome.com/4f7ef06e39.js")
->addScript("templates/lujara/js/navbar.js")
->addScript("templates/lujara/js/truncate.js")
->addScript("templates/lujara/js/main.js")
->addScript("templates/lujara/js/file-browser.js")
->addScript("templates/lujara/js/modal.js")
->addScript("templates/lujara/js/forms.js")
->addScript("templates/lujara/js/slider.js");
// Add Stylesheets
$position7ModuleCount = $this->countModules('position-7');
$position8ModuleCount = $this->countModules('position-8');

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT, 'UTF-8') . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
</head>
<body>
			<header>
				 <!-- this will be converted to a module later -->
				 <div class="header__top">
				   <div class="container">
				     <div class="slogan">
				       <span><?=$params->get('motto')?></span>
				     </div>
				     <div class="contact-info">
				       <a href="#" class="link"><?=$this->params->get('site_email')?></a>
				       <a href="#" class="link"><?=$this->params->get('site_telephone')?></a>
				       <a href="#" class="link"><?=$this->params->get('site_mobile')?></a>
				     </div>
				     <div class="social-links">
				       <a href="<?=$this->params->get('facebook_link')?>" target="_blank" class="link">
				         <i class="fab fa-facebook-square"></i>
				       </a>
				       <a href="<?=$this->params->get('twitter_link')?>" target="_blank" class="link">
				         <i class="fab fa-twitter"></i>
				       </a>
				       <a href="<?=$this->params->get('instagram_link')?>" target="_blank" class="link">
				         <i class="fab fa-instagram"></i>
				       </a>
				       <a href="<?=$this->params->get('linkedin_link')?>" target="_blank" class="link">
				         <i class="fab fa-linkedin"></i>
				       </a>
				     </div>
				   </div>
				 </div>
				<jdoc:include type="modules" name="position-0" style="none" />

			</header>

			<jdoc:include type="modules" name="banner" style="xhtml" />
				<main class="<?=$pageClass?$pageClass:''?>">
					<!-- Begin Content -->
					<jdoc:include type="modules" name="position-1" style="xhtml" />
					<jdoc:include type="modules" name="position-2" style="none" />
					<jdoc:include type="modules" name="position-3" style="xhtml" />
					<jdoc:include type="message" />
					<section class="section">
						<jdoc:include type="component" />
					</section>
					<div class="clearfix"></div>
					<jdoc:include type="modules" name="position-4" style="xhtml" />
					<jdoc:include type="modules" name="position-5" style="xhtml" />
					<!-- End Content -->
				</main>

		<jdoc:include type="modules" name="footer" style="none" />
</body>
</html>