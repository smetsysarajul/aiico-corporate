<?php
 /**
 * @package Gallery WD Lite
 * @author Web-Dorado
 * @copyright (C) 2014 Web-Dorado. All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/
 
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');


class gallery_wdVieweditThumb extends JViewLegacy {
    ////////////////////////////////////////////////////////////////////////////////////////
    // Events                                                                             //
    ////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
    // Constants                                                                          //
    ////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
    // Variables                                                                          //
    ////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
    // Constructor & Destructor                                                           //
    ////////////////////////////////////////////////////////////////////////////////////////
    public function __construct() {
        parent::__construct();
    }


    ////////////////////////////////////////////////////////////////////////////////////////
    // Public Methods                                                                     //
    ////////////////////////////////////////////////////////////////////////////////////////
    public function display($tpl = null) {
        $model = $this->getModel();

		$id=JRequest::getVar('image_id');
		$type=JRequest::getVar('type','display');
		switch($type)
		{
		case 'display':
			$this->_layout = 'display';
		break;
		
		case 'crop':
		$get_image_data=$model->get_image_data($id);
		$get_option_data=$model->get_option_data();
		$this->assignRef('get_image_data',$get_image_data);
		$this->assignRef('get_option_data',$get_option_data);
		$this->_layout = 'crop';
		break;
		
		case 'rotate':
				$get_image_data=$model->get_image_data($id);
		$this->assignRef('get_image_data',$get_image_data);
		$this->_layout = 'rotate';
		break;
		
		}
		
		
        parent::display($tpl);
    }


    ////////////////////////////////////////////////////////////////////////////////////////
    // Getters & Setters                                                                  //
    ////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
    // Private Methods                                                                    //
    ////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////
    // Listeners                                                                          //
    ////////////////////////////////////////////////////////////////////////////////////////
}