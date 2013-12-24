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
	'author' => 'UltrasonicNXT',
	'descriptionmsg' => 'deepsea-desc',
	'url' => 'https://github.com/Brickimedia/DeepSea',
);

// Autoload the skin class, make it a valid skin, set up i18n, set up CSS & JS
// (via ResourceLoader)
$skinID = basename( dirname( __FILE__ ) );
$dir = dirname( __FILE__ ) . '/';

// The first instance must be strtolower()ed so that useskin=deepsea works and
// so that it does *not* force an initial capital (i.e. we do NOT want
// useskin=DeepSea) and the second instance is used to determine the name of
// *this* file.
$wgValidSkinNames[strtolower( $skinID )] = 'DeepSea';

$wgExtensionMessagesFiles['SkinDeepSea'] = $dir . 'DeepSea.i18n.php';

// Autoload the main skin class, but NOT the class extending BaseTemplate
// Fun MediaWiki fact: autoloading the class that extends BaseTemplate causes
// said class to *not* recognize the messages in this skin's i18n file
// Who would've thought of that, huh?
$wgAutoloadClasses['SkinDeepSea'] = $dir . 'DeepSea.skin.php';

// $bmProject is a Brickimedia-specific global that doesn't exist on vanilla
// MW installations, but if it's not defined, we'll get ResourceLoader errors
// and without loading the proper project-specific CSS file, DeepSea looks like
// Yet Another Vector Clone.
//
// Also, this is a register_globals vulnerability, but if you have register_globals
// enabled...you have much bigger issues than this. Just sayin', you know.
if ( !isset( $bmProject ) ) {
	$bmProject = 'en';
}

$wgResourceModules['skins.deepsea'] = array(
	'styles' => array(
		'skins/common/commonElements.css' => array( 'media' => 'screen' ),
		'skins/common/commonContent.css' => array( 'media' => 'screen' ),
		'skins/common/commonInterface.css' => array( 'media' => 'screen' ),
		'skins/DeepSea/deepsea/screen.css' => array( 'media' => 'screen' ),
		'skins/DeepSea/deepsea/big.css' => array( 'media' => 'only screen and (min-width: 800px), only screen and (min-device-width: 800px)' ),
		'skins/DeepSea/deepsea/small.css' => array( 'media' => 'only screen and (max-width: 800px), only screen and (max-device-width: 800px)' ),
		'skins/DeepSea/deepsea/interactive.css' => array( 'media' => 'screen' ),
		#'skins/common/forums.css' => array( 'media' => 'screen' ),
		"skins/DeepSea/deepsea/projects/$bmProject.css" => array( 'media' => 'screen' )
	),
	'scripts' => array(
		'skins/DeepSea/deepsea/deepsea.js'
	)
);
