<?php
/**
 * @version     1.0.0
 * @package     com_helpmio
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Remco Janssen <remco@remcojanssen.nl> - http://www.remcojanssen.nl
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Setting controller class.
 */
class HelpmioControllerSetting extends JControllerForm
{

    function __construct() {
        $this->view_list = 'settings';
        parent::__construct();
    }

}