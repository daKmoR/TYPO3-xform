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
class Tx_Xform_Domain_Model_Form extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * @var string
	 * @validate EmailAddress
	 */
	protected $email;

	/**
	 * @var string
	 * @validate NotEmpty
	 */
	protected $nameto;

	/**
	 * @var string
	 * @validate EmailAddress
	 */
	protected $emailto;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @return string $nameto
	 */
	public function getNameto() {
		return $this->nameto;
	}

	/**
	 * @param string $nameto
	 * @return void
	 */
	public function setNameto($nameto) {
		$this->nameto = $nameto;
	}

	/**
	 * @return string $emailto
	 */
	public function getEmailto() {
		return $this->emailto;
	}

	/**
	 * @param string $emailto
	 * @return void
	 */
	public function setEmailto($emailto) {
		$this->emailto = $emailto;
	}

	/**
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

}
?>