<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die; 
jimport( 'joomla.plugin.plugin' );
jimport( 'joomla.filesystem.file');
jimport( 'joomla.html.parameter' );


JLoader::registerPrefix('Phocacart', JPATH_ADMINISTRATOR . '/components/com_phocacart/libraries/phocacart');

class plgPCVDefault extends JPlugin
{
	function __construct(& $subject, $config) {
		parent :: __construct($subject, $config);
		$this->loadLanguage(); 
	}
	
	public function onCategoriesBeforeHeader($context, &$categories, &$params) {
		//$output = '';
		//return $output;
	}
	
	public function onCategoryBeforeHeader($context, &$items, &$params) {
	}
	
	public function onItemsBeforeHeader($context, &$items, &$params) {
	}
	
	public function onCategoryItemAfterAddToCart($context, &$item, &$params) {
	}
	
	public function onItemsItemAfterAddToCart($context, &$item, &$params) {
	}
	
	public function onItemBeforeHeader($context, &$item, &$params) {
	}
	
	public function onItemAfterAddToCart($context, &$item, &$params) {
	}
	
	public function onItemBeforeEndPricePanel($context, &$item, &$params) {
	}
	
	public function onItemInsideTabPanel($context, &$item, &$params) {
		
		$tab 			= array();
		//$tab['title']	= JText::_('Test');
		//$tab['alias']	= 'test';
		//$tab['content']	= JText::_('This is the content of the tab');
		
		return $tab;
	}
	
	public function onCheckoutAfterCart($context, $access, &$params) {
	}
	
	public function onCheckoutAfterLogin($context, $access, &$params) {
	}
	
	public function onCheckoutAfterAddress($context, $access, &$params) {
	}
	
	public function onCheckoutAfterShipping($context, $access, &$params) {
	}
	
	public function onCheckoutAfterPayment($context, $access, &$params) {
	}
	
	public function onCheckoutAfterConfirm($context, $access, &$params) {
	}
}
?>