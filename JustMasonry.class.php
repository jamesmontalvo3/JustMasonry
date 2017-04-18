<?php

class JustMasonry {
	public static function setup ( &$out, &$skin ) {
		// $out->addModules( 'ext.justmasonry' );

		global $wgServer, $wgExtensionAssetsPath;
		$scriptURL = "$wgServer/$wgExtensionAssetsPath/JustMasonry/masonry.pkgd.js";
		$out->addScript( "<script type='text/javascript' src='$scriptURL'></script>" );
	}
}
