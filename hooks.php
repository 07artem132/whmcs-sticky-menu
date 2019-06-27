<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 10.07.2018
 * Time: 0:46
 */

use WHMCS\Module\Addon\StickyMenu\ConfigController;


add_hook( 'ClientAreaFooterOutput', 1, function ( $vars ) {
	$Config = new ConfigController();
	if ( $Config['Template'] === 0 ) {
		return '<script type="text/javascript" async  src="/modules/addons/' . ConfigController::$MODULE_NAME . '/js/five.js"></script>';
	} else {
		return '<script type="text/javascript" async  src="/modules/addons/' . ConfigController::$MODULE_NAME . '/js/six.js"></script>';
	}
} );
