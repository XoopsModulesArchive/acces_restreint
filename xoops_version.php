<?php
// $Id: xoops_version.php,v 1.00 2007/07/24 13:14:07 niluge_kiwi Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
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

$modversion['name'] = _MI_AR_NAME;
$modversion['version'] = 1.00;
$modversion['description'] = _MI_AR_DESC;
$modversion['credits'] = "Niluge_KiWi";
$modversion['author'] = "Niluge_KiWi : kiwiiii@gmail.com";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "acces_restreint_slogo.png";
$modversion['dirname'] = "acces_restreint";

//Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'ar_index.html';
$modversion['templates'][1]['description'] = '';

// Config Settings
$modversion['config'][1] = array(
	'name' => 'path',
	'title' => '_MI_AR_PATH',
	'description' => '_MI_AR_PATHDSC',
	'formtype' => 'textbox',
	'valuetype' => 'text',
	'default' => '');
$modversion['config'][] = array(
	'name' => 'display',
	'title' => '_MI_AR_DISPLAY',
	'description' => '_MI_AR_DISPLAYDSC',
	'formtype' => 'yesno',
	'valuetype' => 'int',
	'default' => '1');

?>