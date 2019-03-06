<?php

class ReadMoreAdminHelper {
	public static function getPluginActivationUrl($key) {
		$action = 'install-plugin';
		$contactFormUrl = wp_nonce_url(
			add_query_arg(
				array(
					'action' => $action,
					'plugin' => $key
				),
				admin_url( 'update.php' )
			),
			$action.'_'.$key
		);

		return $contactFormUrl;
	}

	public static function getVersionString() {
	    $version = 'YRM_VERSION='.EXPM_VERSION;
	    if(YRM_PKG > YRM_FREE_PKG) {
		    $version = 'YRM_VERSION_PRO=' . EXPM_VERSION_PRO.";";
	    }

	    return $version;
    }
}