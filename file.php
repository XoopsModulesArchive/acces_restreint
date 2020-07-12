<?php
// $Id: file.php,v 1.00 2007/07/24 13:14:07 niluge_kiwi Exp $
//  ------------------------------------------------------------------------ //
//	XOOPS - PHP Content Management System		  //
//		Copyright (c) 2000 XOOPS.org   //
//		   <http://www.xoops.org/>	 //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify	 //
//  it under the terms of the GNU General Public License as published by	 //
//  the Free Software Foundation; either version 2 of the License, or		//
//  (at your option) any later version.  //
//   //
//  You may not change or alter any portion of this comment or credits	   //
//  of supporting developers from this source code or any supporting		 //
//  source code which is considered copyrighted (c) material of the		  //
//  original comment or credit authors.  //
//   //
//  This program is distributed in the hope that it will be useful,		  //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of		   //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the//
//  GNU General Public License for more details.	 //
//   //
//  You should have received a copy of the GNU General Public License		//
//  along with this program; if not, write to the Free Software  //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

include "../../mainfile.php";	
// à activer pour utiliser la superfonction readfile
include XOOPS_ROOT_PATH.'/modules/'.$xoopsModule->dirname().'/include/functions.php';

// Désactivation des messages d'erreur :
// - Pour xoops <= 2.0.13.2
// - Pour xoops >= 2.0.14
if(method_exists($xoopsErrorHandler, 'activate')) {
	$xoopsErrorHandler->activate(false);
} else {
	$xoopsLogger->activated = false;
}
	
// path du fichier (chemin interne)
$path = XOOPS_ROOT_PATH.$xoopsModuleConfig['path'];
$fileName = basename ($path);
$file_extension = strtolower(substr(strrchr($fileName,"."),1));
$fileLength = filesize($path);

// from php.net
switch ($file_extension) {
	case "pdf": $fileType="application/pdf"; break;
	case "exe": $fileType="application/octet-stream"; break;
	case "zip": $fileType="application/zip"; break;
	case "doc": $fileType="application/msword"; break;
	case "xls": $fileType="application/vnd.ms-excel"; break;
	case "ppt": $fileType="application/vnd.ms-powerpoint"; break;
	case "gif": $fileType="image/gif"; break;
	case "png": $fileType="image/png"; break;
	case "jpe": case "jpeg":
	case "jpg": $fileType="image/jpg"; break;
	case "htm": case "html": $fileType="text/html"; break;
	case "txt": $fileType="text/plain"; break;
	default: $fileType="application/octet-stream";
}

$fileLength = filesize($path);

	
Header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
Header("Last-Modified: ".gmdate( 'D, d M Y H:i:s' ) . " GMT");
Header("Cache-Control: no-store, no-cache, must-revalidate");
Header("Cache-Control: post-check=0, pre-check=0", false );
Header("Cache-control: private");
Header("Pragma: no-cache");
Header("Content-Type: $fileType");
Header("Content-Transfer-Encoding: binary");
Header("Content-Length: $fileLength");
Header("Accept-Ranges: bytes");
if($xoopsModuleConfig['display'] == 1) {
	//pour lire sur place
	Header('Content-Disposition: inline; filename="'.$fileName.'"');
} else {
	// pour télécharger
	Header('Content-Disposition: attachment; filename="'.$fileName.'"');
}
Header("Connection: close");
	
readfile_chunked($path);
?>