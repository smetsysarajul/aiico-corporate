<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_lujaracarousel
 *
 * @since  1.5
 */
class ModLujaraCarouselHelper
{
	/**
	 * Get a list of the menu items.
	 *
	 * @param   \Joomla\Registry\Registry  &$params  The module options.
	 *
	 * @return  array
	 *
	 * @since   1.5
	 */
	public static function getList(&$params)
	{
		$slides = $params->get('slides');
		$result = array();
		foreach ($slides as $slide) {
			$result[]=$slide;
		}
		return $result;

	}

}
