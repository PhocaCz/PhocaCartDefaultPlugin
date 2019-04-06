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

	public function PCVonCategoriesBeforeHeader($context, &$categories, &$params) {
		// return "test";
	}

	public function PCVonCategoryBeforeHeader($context, &$items, &$params) {
	}

	public function PCVonItemsBeforeHeader($context, &$items, &$params) {
	}

	public function PCVonCategoryItemAfterAddToCart($context, &$item, &$params) {
	}

	public function PCVonItemsItemAfterAddToCart($context, &$item, &$params) {
	}

	public function PCVonItemBeforeHeader($context, &$item, &$params) {
	}

	public function PCVonItemAfterAddToCart($context, &$item, &$params) {
	}

	public function PCVonItemBeforeEndPricePanel($context, &$item, &$params) {
	}

	public function PCVonItemInsideTabPanel($context, &$item, &$params) {

		$tab 			= array();
		//$tab['title']	= JText::_('Test');
		//$tab['alias']	= 'test';
		//$tab['content']	= JText::_('This is the content of the tab');

		return $tab;
	}

	public function PCVonCheckoutAfterCart($context, $access, &$params) {
	}

	public function PCVonCheckoutAfterLogin($context, $access, &$params) {
	}

	public function PCVonCheckoutAfterAddress($context, $access, &$params) {
	}

	public function PCVonCheckoutAfterShipping($context, $access, &$params) {
	}

	public function PCVonCheckoutAfterPayment($context, $access, &$params) {
	}

	public function PCVonCheckoutAfterConfirm($context, $access, &$params) {
	}

	
	/*
	public function PCVonPopupAddToCartAfterHeader($context, $product, $products, $total) {
		
	} */

}
?>
