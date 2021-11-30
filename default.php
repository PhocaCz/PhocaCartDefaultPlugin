<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
use Joomla\CMS\Plugin\CMSPlugin;

jimport( 'joomla.plugin.plugin' );
jimport( 'joomla.filesystem.file');
jimport( 'joomla.html.parameter' );


JLoader::registerPrefix('Phocacart', JPATH_ADMINISTRATOR . '/components/com_phocacart/libraries/phocacart');

class plgPCVDefault extends CMSPlugin
{
	function __construct(& $subject, $config) {
		parent :: __construct($subject, $config);
		$this->loadLanguage();
	}

	public function onPCVonCategoriesBeforeHeader($context, &$categories, &$params) {
		// return "test";
	}

	public function onPCVonCategoryBeforeHeader($context, &$items, &$params) {
	}

	public function onPCVonItemsBeforeHeader($context, &$items, &$params) {
	}

	public function onPCVonCategoryItemAfterAddToCart($context, &$item, &$params) {
	}

	public function onPCVonItemsItemAfterAddToCart($context, &$item, &$params) {
	}

	public function onPCVonItemBeforeHeader($context, &$item, &$params) {
	}

	public function onPCVonItemAfterAddToCart($context, &$item, &$params) {
	}

	public function onPCVonItemBeforeEndPricePanel($context, &$item, &$params) {
	}

	public function onPCVonItemInsideTabPanel($context, &$item, &$params) {

		$tab 			= array();
		
		// Example
		/*$tab['title']	= JText::_('Title');
		$tab['alias']	= 'title';
		if (isset($item[0]->features)) {
			$tab['content']	= JHTML::_('content.prepare', $item[0]->features);
		}
		return $tab;*/
	}

	public function onPCVonCheckoutAfterCart($context, $access, &$params, $total) {
	}

	public function onPCVonCheckoutAfterLogin($context, $access, &$params, $total) {
	}

	public function onPCVonCheckoutAfterAddress($context, $access, &$params, $total) {
	}

	public function onPCVonCheckoutAfterShipping($context, $access, &$params, $total) {
	}

	public function onPCVonCheckoutAfterPayment($context, $access, &$params, $total) {
	}

	public function onPCVonCheckoutAfterConfirm($context, $access, &$params, $total) {
	}


	/*
	public function onPCVonPopupAddToCartAfterHeader($context, $product, $products, $total) {

	} */

}
?>
