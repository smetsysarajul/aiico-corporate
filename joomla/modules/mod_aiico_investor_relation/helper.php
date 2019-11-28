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
class ModAiicoInvestorRelationHelper
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
		$result = array();
		//get all the details in a well arranged manner especially the menu item information and article content
		$result['top_content']=$params->get('upper_page_content');
		$tabSize = 3;
		for ($i=0; $i < $tabSize; $i++) {
			$field = 'tab_'.($i+1);
			$content = "content_".($i+1); 
			$tabIcon = "icon_".($i+1);
			$result['tabs'][]=array('label'=>$params->get($field),'content'=>$params->get($content),'icon'=>$params->get($tabIcon));
		}
		$tempIndex = $params->get('article_position');
		$index = ($tempIndex && is_numeric($tempIndex))?$tempIndex:1;
		$result['tabs'][$index]['articles']=self::fetchArticles($params->get('tab_articles'));
		return $result;
	}


	public static function fetchArticles($menus)
	{
		$len=150;
		$result=array();
		//get the intro text, the cover image and the title of the article and the link to the main article
		$app = JFactory::getApplication();
		$menu = $app->getMenu();
		$result = array();
		foreach ($menus as $item) {
			$temp= array();
			$menu_item=$menu->getItem($item->article_category);
			$article = JControllerLegacy::getInstance('Content')->getModel('Article')->getItem($menu_item->query['article']);
			$images = json_decode($article->images);
			$temp['title']=$article->title;
			$temp['introtext']=substr(strip_tags($article->introtext),0, $len);
			$temp['cover_image']=$images->image_intro?$images->image_intro:'images/press/aiico-student.jpg';
			$temp['date']=self::formatDate($article->publish_up);
			$temp['link']= $menu_item->link;
			$result[]=$temp;
		}
		return $result;
	}

	public static function formatDate($date)
	{
	    $dateObject = date_create_from_format("Y-m-d H:i:s",$date);
	    $result =$dateObject->format("F d, Y");
	    return $result;
	}
}
