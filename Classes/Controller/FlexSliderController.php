<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Andy Hausmann <andy@milkmonkey.de>, Milkmonkey GmbH
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
 * @package flexslider
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_FlexSlider_Controller_FlexSliderController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var tslib_cObj
	 */
	protected $contentObject;

	/**
	 * flexSliderRepository
	 *
	 * @var Tx_FlexSlider_Domain_Repository_FlexSliderRepository
	 */
	protected $flexSliderRepository;

	/**
	 * injectFlexSliderRepository
	 *
	 * @param Tx_FlexSlider_Domain_Repository_FlexSliderRepository $flexSliderRepository
	 * @return void
	 */
	public function injectFlexSliderRepository(Tx_FlexSlider_Domain_Repository_FlexSliderRepository $flexSliderRepository) {
		$this->flexSliderRepository = $flexSliderRepository;
	}

	/**
	 * Kinda constructor
	 * Beeing executed right after __construct and has access to injected Objects
	 *
	 * @return void
	 */
	public function initializeAction()
	{
		$this->contentObject = $this->configurationManager->getContentObject();
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$flexSliders = $this->flexSliderRepository->findAll();
		$this->view->assign('flexSliders', $flexSliders);
	}

}
?>