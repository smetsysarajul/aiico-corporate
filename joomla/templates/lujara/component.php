<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.Lujara
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app = JFactory::getApplication();
$document  = JFactory::getDocument();
// Output as HTML5
$this->setHtml5(true);

// Add JavaScript Frameworks
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
->addScript("templates/lujara/js/services.js")
->addScript("templates/lujara/js/modal.js")
->addScript("templates/lujara/js/modal.js");
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<jdoc:include type="head" />
</head>
<body class="contentpane modal<?php echo $this->direction === 'rtl' ? ' rtl' : ''; ?>">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>
</html>
