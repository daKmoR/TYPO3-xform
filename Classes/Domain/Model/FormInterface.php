<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Thomas Allmer <at@delusionworld.com>, WEBTEAM GmbH
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 *
 *
 * @package xform
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
interface Tx_Xform_Domain_Model_FormInterface {

	/**
	 * @return string $name
	 */
	public function getName();

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($name);

	/**
	 * @return string $email
	 */
	public function getEmail();

	/**
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email);

	/**
	 * @return string $nameto
	 */
	public function getNameto();

	/**
	 * @param string $nameto
	 * @return void
	 */
	public function setNameto($nameto);

	/**
	 * @return string $emailto
	 */
	public function getEmailto();

	/**
	 * @param string $emailto
	 * @return void
	 */
	public function setEmailto($emailto);

	/**
	 * @return string $requestUrl
	 */
	public function getRequestUrl();
	
	/**
	 * @param string $requestUrl
	 * @return void
	 */
	public function setRequestUrl($requestUrl);

}
?>