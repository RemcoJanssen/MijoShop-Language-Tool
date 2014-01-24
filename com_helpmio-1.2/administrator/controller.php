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

class HelpmioController extends JControllerLegacy
{
	/**
	 * Method to display a view.
	 *
	 * @param	boolean			$cachable	If true, the view output will be cached
	 * @param	array			$urlparams	An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return	JController		This object to support chaining.
	 * @since	1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		require_once JPATH_COMPONENT.'/helpers/helpmio.php';

		$view= JFactory::getApplication()->input->getCmd('view', 'settings');
        JFactory::getApplication()->input->set('view', $view);

		parent::display($cachable, $urlparams);

		return $this;
	}
	
		
	public function create() {
		
		$jinput = JFactory::getApplication()->input;
		$product = $jinput->get('products');
		$category = $jinput->get('categorys');
		$option = $jinput->get('options');
		$attribute = $jinput->get('attributes');
		$banner = $jinput->get('banners');
		$information = $jinput->get('information');
		$lang1 = $jinput->get('langid1');
		$lang2 = $jinput->get('langid2');
		
	
	$db = JFactory::getDBO();
  	$tables = array();

	if ($product == 1) {
		array_push($tables, array("product_description","product_id"));
				};
	if ($category == 1) {
			array_push($tables, array("category_description","category_id"));
			};
	if ($options == 1) {
			array_push($tables, array("option_description","option_id"));
			array_push($tables, array("option_value_description","option_value_id"));
			};
	if ($attribute == 1) {
			array_push($tables, array("attribute_description","attribute_id"));
			array_push($tables, array("attribute_group_description","attribute_group_id"));
			};
	if ($banner == 1) {
			array_push($tables, array("banner_image_description","banner_id"));
			
			};

foreach ($tables as $key => $value) {
$query = "CREATE TEMPORARY TABLE temprod SELECT * FROM `#__mijoshop_".$value[0]."` WHERE language_id=$lang1;";
$db->setQuery($query);
$db->execute();
$query = "DELETE FROM temprod WHERE ".$value[1]." IN (SELECT ".$value[1]." FROM `#__mijoshop_".$value[0]."` WHERE language_id=$lang2);";
$db->setQuery($query);
$db->execute();
$query="UPDATE temprod SET language_id=$lang2;";
$db->setQuery($query);
$db->execute();
$query = "INSERT INTO `#__mijoshop_".$value[0]."` SELECT * FROM temprod;";
$db->setQuery($query);
$db->execute();
$query = "DROP TABLE temprod";
$db->setQuery($query);
$db->execute();}
		$this->display();
	}
}

