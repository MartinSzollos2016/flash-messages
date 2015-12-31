<?php
/**
 * IControl.php
 *
 * @copyright      More in license.md
 * @license        http://www.ipublikuj.eu
 * @author         Adam Kadlec http://www.ipublikuj.eu
 * @package        iPublikuj:FlashMessages!
 * @subpackage     Components
 * @since          1.0.0
 *
 * @date           12.03.14
 */

namespace IPub\FlashMessages\Components;

/**
 * Flash messages control factory interface
 *
 * @package        iPublikuj:FlashMessages!
 * @subpackage     Components
 */
interface IControl
{
	/**
	 * @param NULL|string $templateFile
	 *
	 * @return Control
	 */
	public function create($templateFile = NULL);
}
