<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\Registry\Registry;

class plgPCVDefault extends CMSPlugin
{
	protected $autoloadLanguage = true;

	/**
	 * Renders modules on specific modules position
	 *
	 * @param   string|null  $position - modules position to render
	 *
	 * @since 4.1.0
	 */
	private function renderModules(?string $position): string
	{
		if (!$position) {
			return '';
		}

		$document = Factory::getApplication()->getDocument();
		$renderer = $document->loadRenderer('module');
		$modules  = ModuleHelper::getModules($position);

		ob_start();
		foreach ($modules as $module) {
			echo $renderer->render($module, []);
		}

		return ob_get_clean();
	}

	/**
	 * In Categories model, load additional columns
	 *
	 * @param   string    $context
	 * @param   array     $options
	 * @param   array     $event
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonCategoriesBeforeLoadColumns(string $context, array &$options, array &$event): void
	{
	}

	/**
	 * In Categories view, displayed at the top of the page
	 *
	 * @param   string    $context
	 * @param   array     $categories
	 * @param   Registry  $params
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonCategoriesBeforeHeader(string $context, array &$categories, Registry &$params)
	{
		return $this->renderModules($this->params->get('categories_before_header'));
	}

	/**
	 * In Category model, load additional columns
	 *
	 * @param   string    $context
	 * @param   array     $options
	 * @param   array     $event
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonCategoryBeforeLoadColumns(string $context, array &$options, array &$event): void
	{
	}

	/**
	 * In Category view, displayed at the top of the page
	 *
	 * @param   string    $context
	 * @param   array     $items
	 * @param   Registry  $params
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonCategoryBeforeHeader(string $context, array &$items, Registry &$params): string
	{
    return $this->renderModules($this->params->get('category_before_header'));
	}

  /**
   * In Category view, displayed above top pagination
   *
   * @param   string    $context
   * @param   array     $items
   * @param   Registry  $params
   *
   * @return string
   *
   * @since 4.1.0
   */
  public function onPCVonCategoryBeforePaginationTop(string $context, array &$items, Registry &$params): string
  {
    return $this->renderModules($this->params->get('category_before_pagination_top'));
  }

	/**
	 * In Category view, displayed after add to cart of single item
	 *
	 * @param   string    $context
	 * @param   stdClass  $item
	 * @param   Registry  $params
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonCategoryItemAfterAddToCart(string $context, \stdClass &$item, Registry &$params): string
	{
    return $this->renderModules($this->params->get('category_item_after_add_to_cart'));
	}

	/**
	 * In Items model, load additional columns
	 *
	 * @param   string    $context
	 * @param   array     $options
	 * @param   array     $event
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonItemsBeforeLoadColumns(string $context, array &$options, array &$event): void
	{
	}

	/**
	 * In Items view, displayed at the top of the page
	 *
	 * @param   string    $context
	 * @param   array     $items
	 * @param   Registry  $params
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonItemsBeforeHeader(string $context, array &$items, Registry &$params): string
	{
    return $this->renderModules($this->params->get('items_before_header'));
	}

  /**
   * In Items view, displayed above top pagination
   *
   * @param   string    $context
   * @param   array     $items
   * @param   Registry  $params
   *
   * @return string
   *
   * @since 4.1.0
   */
  public function onPCVonItemsBeforePaginationTop(string $context, array &$items, Registry &$params): string
  {
    return $this->renderModules($this->params->get('items_before_pagination_top'));
  }

	/**
	 * In Items view, displayed after add to cart of single item
	 *
	 * @param   string    $context
	 * @param   stdClass  $item
	 * @param   Registry  $params
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonItemsItemAfterAddToCart(string $context, \stdClass &$item, Registry &$params): string
	{
    return $this->renderModules($this->params->get('items_item_after_add_to_cart'));
	}

	/**
	 * In Item model, load additional columns
	 *
	 * @param   string    $context
	 * @param   array     $options
	 * @param   array     $event
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonItemBeforeLoadColumns(string $context, array &$options, array &$event): void
	{
	}

	/**
	 * In Item view, displayed before header
	 *
	 * @param   string    $context
	 * @param   array     $item
	 * @param   Registry  $params
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonItemBeforeHeader(string $context, array &$item, Registry &$params): string
	{
    return $this->renderModules($this->params->get('item_before_header'));
	}

	/**
	 * In Item view, displayed after add to cart
	 *
	 * @param   string    $context
	 * @param   array     $item
	 * @param   Registry  $params
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonItemAfterAddToCart(string $context, array &$item, Registry &$params): string
	{
    return $this->renderModules($this->params->get('item_after_add_to_cart'));
	}

	/**
	 * In Item view, displayed after price
	 *
	 * @param   string    $context
	 * @param   array     $item
	 * @param   Registry  $params
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonItemBeforeEndPricePanel(string $context, array &$item, Registry &$params): string
	{
    return $this->renderModules($this->params->get('item_before_end_price_panel'));
	}

	/**
	 * In Item view, displayed as tab
	 *
	 * @param   string    $context
	 * @param   array     $item
	 * @param   Registry  $params
	 *
	 * @return array
	 *
	 * @since 4.1.0
	 */
	public function onPCVonItemInsideTabPanel(string $context, array &$item, Registry &$params): array
	{
    $tabs = $this->params->get('item_tabs', []);

    if (!$tabs) {
      return [];
    }

    $return = [];
    foreach ($tabs as $tab) {
      $content = $this->renderModules($tab->position);
      if ($content && $tab->title && $tab->id) {
        $return[] = [
          'alias' => $tab->id,
          'title' => Text::_($tab->title),
          'content' => $content,
        ];
      }
    }

		return $return;
	}

	/**
	 * In Item view, displayed after tabs
	 *
	 * @param   string    $context
	 * @param   array     $item
	 * @param   Registry  $params
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonItemAfterTabs(string $context, array &$item, Registry &$params): string
	{
    return $this->renderModules($this->params->get('item_after_tabs'));
	}

	/**
	 * In Item view, alternative image display
	 *
	 * @param   string    $context
	 * @param   stdClass  $item
	 * @param   array     $template
	 * @param   Registry  $params
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonItemImage(string $context, \stdClass &$item, array $template, Registry &$params): string
	{
		return '';
	}

	/**
	 * In Checkout View, displayed after cart box
	 *
	 * @param   string           $context
	 * @param   PhocacartAccess  $access
	 * @param   Registry         $params
	 * @param   array            $total
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonCheckoutAfterCart(string $context, PhocacartAccess $access, Registry &$params, array $total): string
	{
    return $this->renderModules($this->params->get('checkout_after_cart'));
	}

	/**
	 * In Checkout View, displayed after Login box
	 *
	 * @param   string           $context
	 * @param   PhocacartAccess  $access
	 * @param   Registry         $params
	 * @param   array            $total
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonCheckoutAfterLogin(string $context, PhocacartAccess $access, Registry &$params, array $total): string
	{
    return $this->renderModules($this->params->get('checkout_after_login'));
	}

	/**
	 * In Checkout View, displayed after address box
	 *
	 * @param   string           $context
	 * @param   PhocacartAccess  $access
	 * @param   Registry         $params
	 * @param   array            $total
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonCheckoutAfterAddress(string $context, PhocacartAccess $access, Registry &$params, array $total): string
	{
    return $this->renderModules($this->params->get('checkout_after_address'));
	}

	/**
	 * In Checkout View, displayed after shipping methods box
	 *
	 * @param   string           $context
	 * @param   PhocacartAccess  $access
	 * @param   Registry         $params
	 * @param   array            $total
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonCheckoutAfterShipping(string $context, PhocacartAccess $access, Registry &$params, array $total): string
	{
    return $this->renderModules($this->params->get('checkout_after_shipping'));
	}

	/**
	 * In Checkout View, displayed after payment methods box
	 *
	 * @param   string           $context
	 * @param   PhocacartAccess  $access
	 * @param   Registry         $params
	 * @param   array            $total
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonCheckoutAfterPayment(string $context, PhocacartAccess $access, Registry &$params, array $total): string
	{
    return $this->renderModules($this->params->get('checkout_after_payment'));
	}

	/**
	 * In Checkout View, displayed after confirmation box
	 *
	 * @param   string           $context
	 * @param   PhocacartAccess  $access
	 * @param   Registry         $params
	 * @param   array            $total
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonCheckoutAfterConfirm(string $context, PhocacartAccess $access, Registry &$params, array $total): string
	{
    return $this->renderModules($this->params->get('checkout_after_confirm'));
	}

	/**
	 * In Info view (checkout result) - displayed under description
	 *
	 * @param   string  $context
	 * @param   array   $data
	 * @param   int     $action
	 * @param   array   $event
	 *
	 * @return array
	 *
	 * @since version
	 */
	public function onPCVonInfoViewDisplayContent(string $context, array &$data, int &$action, array $event): array
	{
		return [
      'content' => $this->renderModules($this->params->get('info_view_display_content'))
    ];
	}

	/**
	 * In popup_add_to_cart layout - displayed at the top of popup window
	 *
	 * @param   string    $context
	 * @param   array     $product
	 * @param   array     $products
	 * @param   array     $total
	 *
	 * @return string
	 *
	 * @since 4.1.0
	 */
	public function onPCVonPopupAddToCartAfterHeader(string $context, array $product, array $products, array $total): string
	{
		return '';
	}

}

