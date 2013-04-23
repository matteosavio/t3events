<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Events',
	array(
		'Event' => 'list, show, quickMenu',
		'Teaser' => 'list, show',
		//'Performance' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Event' => 'list,quickMenu',
		'Teaser' => 'list',
	)
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = 'Tx_T3events_Command_TaskCommandController';

?>