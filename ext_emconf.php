<?php

/**
 * *************************************************************
 * Extension Manager/Repository config file for ext "caldav".
 *
 * Auto generated 01-07-2012 14:16
 *test
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 * *************************************************************
 */

$EM_CONF [$_EXTKEY] = array (
		'title' => 'CalDAV',
		'description' => 'Extends Calendar Base with CalDAV functionality.',
		'category' => 'plugin',
		'shy' => 0,
		'version' => '1.1.0-dev',
		'loadOrder' => '',
		'state' => 'stable',
		'uploadfolder' => 0,
		'clearCacheOnLoad' => 0,
		'author' => 'Mario Matzulla',
		'author_email' => 'mario@matzullas.de',
		'author_company' => '',
		'constraints' => array (
				'depends' => array (
						'typo3' => '7.6.0-8.9.99',
						'cal' => '1.11.0-'
				)
		)
);


?>