<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lujaracarousel
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the menu functions only once
require_once dirname(__FILE__) . '/helper.php';

$list       = ModLujaraAdsliderHelper::getList($params);
$otherParam = ModLujaraAdsliderHelper::getOtherParameters($params);

if (count($list))
{
	require JModuleHelper::getLayoutPath('mod_lujaraadslider', $params->get('layout', 'default'));
}
