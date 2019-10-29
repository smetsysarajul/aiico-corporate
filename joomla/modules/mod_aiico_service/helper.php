<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lujaraadslider
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
class ModAiicoServiceHelper
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

	public static function getSettings(&$params){
		//other times might require separate approach for retrieving the data
		return $params;

	}

}
