<?php
/**
 * Deep Sea - Brickimedia's new skin - Vector with some Oasis-like features
 *
 * @todo document
 * @file
 * @ingroup Skins
 */


if( !defined( 'MEDIAWIKI' ) ) {
	die( -1 );
}

require_once(dirname(__FILE__) . '/../common/headers.php');

$wgExtensionCredits['skin'][] = array (
	'path' => __FILE__,
	'name' => 'Deep Sea',
	'author' => array( 'UltrasonicNXT', 'modified from Vector (Trevor Parscal',
	 'Roan Kattouw', 'Nimish Gautam', 'Adam Miller)' ),
	'descriptionmsg' => 'deepsea-desc',
	'url' => "url",
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

$wgAutoloadClasses['SkinDeepSea'] = $dir . 'DeepSea.skin.php';
$wgAutoloadClasses['DeepSeaTemplate'] = $dir . 'DeepSea.skin.php';
$wgExtensionMessagesFiles['SkinDeepSea'] = $dir . 'DeepSea.i18n.php';

$wgHooks['OutputPageBodyAttributes'][] = 'DeepSeaTemplate::addToBody';

$wgResourceModules['skins.deepsea'] = array(
    'styles' => array(
        "skins/common/commonElements.css" => array( 'media' => 'screen' ),
        "skins/common/commonContent.css" => array( 'media' => 'screen' ),
        "skins/common/commonInterface.css" => array( 'media' => 'screen' ),
        "skins/DeepSea/deepsea/screen.css" => array( 'media' => 'screen' ),
        "skins/DeepSea/deepsea/big.css" => array( 'media' => 'only screen and (min-width: 800px), only screen and (min-device-width: 800px)' ),
        "skins/DeepSea/deepsea/small.css" => array( 'media' => 'only screen and (max-width: 800px), only screen and (max-device-width: 800px)' ),
        "skins/DeepSea/deepsea/interactive.css" => array( 'media' => 'screen' ),
    	"skins/common/forums.css" => array( 'media' => 'screen' ),
    	"skins/DeepSea/deepsea/projects/$bmProject.css" => array( 'media' => 'screen' )
    ),
    'scripts' => array(
    	"skins/DeepSea/deepsea/deepsea.js",
    	"skins/common/foes.js"
    ),