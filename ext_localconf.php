<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Xform',
	array(
		'Form' => 'new, create, show, list, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Form' => 'create, update, delete',
		
	)
);

?>