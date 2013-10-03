<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of Gris-Gris, a Dotclear 2 theme.
#
# Copyright (c) Franck Paul and contributors
# http://open-time.net/
#
#
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')) die;

$core->addBehavior('publicPrepend',array('behaviorGrisGrisTheme','publicPrepend'));

class behaviorGrisGrisTheme
{
	public static function publicPrepend($core)
	{
		$core->themes->loadModuleL10N($GLOBALS['__theme'],$GLOBALS['_lang'],'main');
	}
}	

?>