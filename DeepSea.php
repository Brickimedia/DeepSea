<?php
/**
 * Deep Sea - Brickimedia's new skin - Vector with some Oasis-like features
 *
 * Modified from the core MediaWiki skin Vector, which was written by
 * Trevor Parscal, Roan Kattouw, Nimish Gautam and Adam Miller.
 *
 * @file
 * @ingroup Skins
 * @author UltrasonicNXT
 * @link https://github.com/Brickimedia/DeepSea Source code
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( -1 );
}

// Skin credits that will show up on Special:Version
$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Deep Sea',
	'version' => '1.1.2',
	'author' => 'UltrasonicNXT',
	'descriptionmsg' => 'deepsea-desc',
	'url' => 'https://github.com/Brickimedia/DeepSea',
);

// The first instance must be strtolower()ed so that useskin=deepsea works and
// so that it does *not* force an initial capital (i.e. we do NOT want
// useskin=DeepSea) and the second instance is used to determine the name of
// *this* file.
$wgValidSkinNames['deepsea'] = 'DeepSea';

$wgMessagesDirs['SkinDeepSea'] = __DIR__ . '/i18n';

// Autoload the main skin class, but NOT the class extending BaseTemplate
// Fun MediaWiki fact: autoloading the class that extends BaseTemplate causes
// said class to *not* recognize the messages in this skin's i18n file
// Who would've thought of that, huh?
$wgAutoloadClasses['SkinDeepSea'] = __DIR__ . '/DeepSea.skin.php';

// Set up CSS & JS (via ResourceLoader)
$wgResourceModules['skins.deepsea'] = array(
	'styles' => array(
		'skins/DeepSea/deepsea/screen.css' => array( 'media' => 'screen' ),
		'skins/DeepSea/deepsea/big.css' => array( 'media' => 'only screen and (min-width: 800px), only screen and (min-device-width: 800px)' ),
		'skins/DeepSea/deepsea/small.css' => array( 'media' => 'only screen and (max-width: 800px), only screen and (max-device-width: 800px)' ),
		'skins/DeepSea/deepsea/interactive.css' => array( 'media' => 'screen' )
	),
	'scripts' => array(
		'skins/DeepSea/deepsea/deepsea.js'
	),
	'position' => 'top'
);