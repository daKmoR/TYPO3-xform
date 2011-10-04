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
class Tx_Xform_Controller_FormController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * formRepository
	 *
	 * @var Tx_Xform_Domain_Repository_FormRepository
	 */
	protected $formRepository;

	/**
	 * injectFormRepository
	 *
	 * @param Tx_Xform_Domain_Repository_FormRepository $formRepository
	 * @return void
	 */
	public function injectFormRepository(Tx_Xform_Domain_Repository_FormRepository $formRepository) {
		$this->formRepository = $formRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$forms = $this->formRepository->findAll();
		$this->view->assign('forms', $forms);
	}

	/**
	 * action show
	 *
	 * @param $form
	 * @return void
	 */
	public function showAction(Tx_Xform_Domain_Model_Form $form = NULL) {
		$this->view->assign('form', $form);
	}

	/**
	 * action new
	 *
	 * @param $newForm
	 * @dontvalidate $newForm
	 * @return void
	 */
	public function newAction(Tx_Xform_Domain_Model_Form $newForm = NULL) {
		if ($newForm === NULL) {
			$newForm = t3lib_div::makeInstance('Tx_Xform_Domain_Model_Form');
			$newForm->setRequestUrl(t3lib_div::getIndpEnv('TYPO3_REQUEST_URL'));
		}
	
		$this->view->assign('newForm', $newForm);
	}

	/**
	 * creates the actual text and sends it via e-mail
	 *
	 * @param $newForm
	 * @validate $newForm Tx_Xform_Domain_Validator_XformValidator
	 * @return void
	 */
	public function createAction(Tx_Xform_Domain_Model_Form $newForm) {
		$view = t3lib_div::makeInstance('Tx_Fluid_View_StandaloneView');
		$view->setTemplatePathAndFilename('typo3conf/ext/xform/Resources/Private/Templates/Email/TipAFriend.html');
		$view->assign('newForm', $newForm);
		$body = $view->render();
		
		$mail = t3lib_div::makeInstance('t3lib_mail_Message');
		$mail->setFrom(array($newForm->getEmail() => $newForm->getName()));
		$mail->setTo(array($newForm->getEmailTo() => $newForm->getNameTo()));
		$mail->setSubject('Tip von ' . $newForm->getName());
		$mail->setBody($body);
		$mail->send();
		
		$this->view->assign('newForm', $newForm);
	}

	/**
	 * action edit
	 *
	 * @param $form
	 * @return void
	 */
	public function editAction(Tx_Xform_Domain_Model_Form $form) {
		$this->view->assign('form', $form);
	}

	/**
	 * action update
	 *
	 * @param $form
	 * @return void
	 */
	public function updateAction(Tx_Xform_Domain_Model_Form $form) {
		$this->formRepository->update($form);
		$this->flashMessageContainer->add('Your Form was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param $form
	 * @return void
	 */
	public function deleteAction(Tx_Xform_Domain_Model_Form $form) {
		$this->formRepository->remove($form);
		$this->flashMessageContainer->add('Your Form was removed.');
		$this->redirect('list');
	}

}
?>