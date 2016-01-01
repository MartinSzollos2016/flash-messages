<?php
/**
 * Message.php
 *
 * @copyright      More in license.md
 * @license        http://www.ipublikuj.eu
 * @author         Adam Kadlec http://www.ipublikuj.eu
 * @package        iPublikuj:FlashMessages!
 * @subpackage     Entities
 * @since          1.0.0
 *
 * @date           06.02.15
 */

namespace IPub\FlashMessages\Entities;

use Nette;
use Nette\Localization;

use IPub;
use IPub\FlashMessages\Adapters;
use IPub\FlashMessages\Exceptions;

/**
 * Flash message entity interface
 *
 * @package        iPublikuj:FlashMessages!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IMessage
{
	const LEVEL_INFO = 'info';
	const LEVEL_SUCCESS = 'success';
	const LEVEL_WARNING = 'warning';
	const LEVEL_ERROR = 'error';

	/**
	 * @param string $message
	 *
	 * @return $this
	 */
	public function setMessage($message);

	/**
	 * @return string
	 */
	public function getMessage();

	/**
	 * @param string $level
	 *
	 * @return $this
	 */
	public function setLevel($level);

	/**
	 * @return string
	 */
	public function getLevel();

	/**
	 * @return $this
	 */
	public function info();

	/**
	 * @return $this
	 */
	public function success();

	/**
	 * @return $this
	 */
	public function warning();

	/**
	 * @return $this
	 */
	public function error();

	/**
	 * @param string|NULL $title
	 *
	 * @return $this
	 */
	public function setTitle($title = NULL);

	/**
	 * @return string|NULL
	 */
	public function getTitle();

	/**
	 * @param bool $overlay
	 *
	 * @return $this
	 */
	public function setOverlay($overlay);

	/**
	 * @return bool
	 */
	public function getOverlay();

	/**
	 * @param array $parameter
	 *
	 * @return $this
	 *
	 * @throws Exceptions\InvalidStateException when object is unserialized
	 */
	public function setParameters(array $parameter);

	/**
	 * @param int $count
	 *
	 * @return $this
	 *
	 * @throws Exceptions\InvalidStateException when object is unserialized
	 */
	public function setCount($count);

	/**
	 * @param bool $displayed
	 *
	 * @return $this
	 */
	public function setDisplayed($displayed = TRUE);

	/**
	 * @return bool
	 */
	public function isDisplayed();
}
