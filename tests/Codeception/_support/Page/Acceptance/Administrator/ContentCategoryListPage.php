<?php
/**
 * @package     Joomla.Test
 * @subpackage  AcceptanceTester.Page
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Page\Acceptance\Administrator;

/**
 * Acceptance Page object for content category list page.
 *
 * @package  Page\Acceptance\Administrator
 *
 * @since    4.0.0
 */
class ContentCategoryListPage extends AdminListPage
{
	/**
	 * Link to the article category listing url.
	 *
	 * @var    string
	 * @since  4.0.0
	 */
	public static $url = '/administrator/index.php?option=com_categories&view=categories&extension=com_content';

	public static $dropDownToggle = ['xpath' => "//div[@id='toolbar-dropdown-save-group']/button[contains(@class, 'dropdown-toggle')]"];

	/**
	 * Locator for category name field
	 *
	 * @var    array
	 * @since  4.0.0
	 */
	public static $seeName = ['xpath' => "//table[@id='categoryList']//tr[1]//td[4]"];

	/**
	 * Locator for category unpublished icon
	 *
	 * @var    array
	 * @since  4.0.0
	 */
	public static $seeUnpublished = ['xpath' => "//table[@id='categoryList']//*//span[@class='icon-unpublish']"];

	/**
	 * Locator for category access level field
	 *
	 * @var    array
	 * @since  4.0.0
	 */
	public static $seeAccessLevel = ['xpath' => "//table[@id='categoryList']//tr[1]//td[9]"];

	/**
	 * Locator for category language field
	 *
	 * @var    array
	 * @since  4.0.0
	 */
	public static $seeLanguage = ['xpath' => "//table[@id='categoryList']//tr[1]//td[10]"];

	/**
	 * Locator for invalid category alert
	 *
	 * @var    array
	 * @since  4.0.0
	 */
	public static $invalidTitle = ['class' => 'alert-error'];
}