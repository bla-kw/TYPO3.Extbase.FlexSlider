<?php

########################################################################
# Extension Manager/Repository config file for ext "flexslider".
#
# Auto generated 16-04-2012 20:30
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FlexSlider',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Andy Hausmann',
	'author_email' => 'andy@milkmonkey.de',
	'author_company' => 'Milkmonkey GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3.0',
			'fluid' => '1.3.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:24:{s:21:"ExtensionBuilder.json";s:4:"548a";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"fb33";s:14:"ext_tables.php";s:4:"f170";s:14:"ext_tables.sql";s:4:"f50f";s:43:"Classes/Controller/FlexSliderController.php";s:4:"1127";s:35:"Classes/Domain/Model/FlexSlider.php";s:4:"fdb7";s:50:"Classes/Domain/Repository/FlexSliderRepository.php";s:4:"8ed1";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"8bff";s:36:"Configuration/FlexForms/flexform.xml";s:4:"fb9c";s:32:"Configuration/TCA/FlexSlider.php";s:4:"a713";s:38:"Configuration/TypoScript/constants.txt";s:4:"ff79";s:34:"Configuration/TypoScript/setup.txt";s:4:"cd69";s:40:"Resources/Private/Language/locallang.xml";s:4:"23ce";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"2182";s:84:"Resources/Private/Language/locallang_csh_tx_flexslider_domain_model_flexslider.xml";s:4:"bbb7";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"8c66";s:38:"Resources/Private/Layouts/Default.html";s:4:"9749";s:48:"Resources/Private/Templates/FlexSlider/List.html";s:4:"9838";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:66:"Resources/Public/Icons/tx_flexslider_domain_model_flexslider.gif";s:4:"905a";s:50:"Tests/Unit/Controller/FlexSliderControllerTest.php";s:4:"c8a0";s:42:"Tests/Unit/Domain/Model/FlexSliderTest.php";s:4:"dbfa";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>