<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_lujaracarousel
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
echo "got here";exit;
// Load the required admin language files
$lang   = JFactory::getLanguage();
$app    = JFactory::getApplication();

if ($app->input->get('view') === 'items' && $app->input->get('layout') === 'modal')
{
	if (!JFactory::getUser()->authorise('core.create', 'com_lujaracarousel'))
	{
		$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'warning');

		return;
	}
}

$lang->load('com_lujaracarousel', JPATH_ADMINISTRATOR);

// Trigger the controller
$controller = JControllerLegacy::getInstance('LujaraCarousel');
$controller->execute($app->input->get('task'));
$controller->redirect();
