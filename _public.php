<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of Gris-Gris, a theme for Dotclear 2.
#
# Copyright (c) Franck Paul and contributors
# carnet.franck.paul@gmail.com
#
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')) { return; }

$core->addBehavior('publicPrepend',array('behaviorGrisGrisTheme','publicPrepend'));

class behaviorGrisGrisTheme
{
	public static function publicPrepend($core)
	{
		$core->themes->loadModuleL10N($GLOBALS['__theme'],$GLOBALS['_lang'],'main');
	}
}
