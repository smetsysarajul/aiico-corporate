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
class ModLujaraAdsliderHelper
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

	public static function getOtherParameters(&$params){
		$result['type']=$params['ad_type'];
		$result['caption']=$params['caption'];
		$result['subtitle']=$params['subtitle'];
		$result['background_image']= $params['background_image'];
		$result['background_color']=$params['background_color'];
		$result['action_link']=$params['action_link'];
		$result['action_text']=$params['action_text'];
		return $result;

	}

}
