<?php
/**
 * @version     1.0.0
 * @package     com_helpmio
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Remco Janssen <remco@remcojanssen.nl> - http://www.remcojanssen.nl
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller	= JControllerLegacy::getInstance('Helpmio');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
