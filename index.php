<?php
// $Id: index.php,v 1.00 2007/07/24 13:14:07 niluge_kiwi Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

include("header.php");
global $xoopsTpl;

$xoopsOption['template_main'] = "ar_index.html";

include(XOOPS_ROOT_PATH."/header.php");

$xoopsTpl->assign('lang_message', _MD_MESSAGE);

if($xoopsModuleConfig['display'] == 1) {
	$xoopsTpl->assign('iframe', true);
	
		
} else {
	$xoopsTpl->assign('lang_link_to_file', _MD_LINK_TO_FILE);
	
}

include(XOOPS_ROOT_PATH."/footer.php");
?>