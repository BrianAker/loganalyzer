<?php
/*
	*********************************************************************
	* -> www.phplogcon.org <-											*
	* -----------------------------------------------------------------	*
	* Helperfunctions for the web frontend								*
	*																	*
	* -> 		*
	*																	*
	* All directives are explained within this file						*
	*
	* Copyright (C) 2008 Adiscon GmbH.
	*
	* This file is part of phpLogCon.
	*
	* PhpLogCon is free software: you can redistribute it and/or modify
	* it under the terms of the GNU General Public License as published by
	* the Free Software Foundation, either version 3 of the License, or
	* (at your option) any later version.
	*
	* PhpLogCon is distributed in the hope that it will be useful,
	* but WITHOUT ANY WARRANTY; without even the implied warranty of
	* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	* GNU General Public License for more details.
	*
	* You should have received a copy of the GNU General Public License
	* along with phpLogCon. If not, see <http://www.gnu.org/licenses/>.
	*
	* A copy of the GPL can be found in the file "COPYING" in this
	* distribution.
	*********************************************************************
*/

// --- Avoid directly accessing this file! 
if ( !defined('IN_PHPLOGCON') )
{
	die('Hacking attempt');
	exit;
}
// --- 

function InitFrontEndDefaults()
{
	// To create the current URL
	CreateCurrentUrl();

	// --- BEGIN Main Info Area


	
	// --- END Main Info Area
	
	// Check if install file still exists
	InstallFileReminder();
}

function InstallFileReminder()
{
	global $content;

	if ( is_file($content['BASEPATH'] . "install.php") ) 
	{
		// No Servers - display warning!
		$content['error_installfilereminder'] = "true";
	}
}

function CreateCurrentUrl()
{
	global $content;
	$content['CURRENTURL'] = $_SERVER['PHP_SELF']; // . "?" . $_SERVER['QUERY_STRING']

	// Now the query string:
	if ( isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0 )
	{
		// Append ?
		$content['CURRENTURL'] .= "?";

		$queries = explode ("&", $_SERVER['QUERY_STRING']);
		$counter = 0;
		for ( $i = 0; $i < count($queries); $i++ )
		{
			if ( strpos($queries[$i], "sourceid") === false ) 
			{
				$tmpvars = explode ("=", $queries[$i]);
				if ( isset($tmpvars[1]) ) // Only if value param is set!
				{
					// 4Server Selector
					$content['HIDDENVARS'][$counter]['varname'] = $tmpvars[0];
					$content['HIDDENVARS'][$counter]['varvalue'] = $tmpvars[1];

					$counter++;
				}
			}
		}
	}

	// May can be removed later
	$content['additional_url'] = ""; // "&serverid=" . $content['serverid'];
}

function GetFormatedDate($evttimearray)
{
	global $content, $CFG;

	if ( isset($CFG['ViewUseTodayYesterday']) && $CFG['ViewUseTodayYesterday'] == 1 )
	{
		if ( date('d', $evttimearray[EVTIME_TIMESTAMP]) == date('d') )
			return "Today " . date("H:i:s", $evttimearray[EVTIME_TIMESTAMP] );
		else if ( date('d', $evttimearray[EVTIME_TIMESTAMP] + 86400) == date('d') )
			return "Yesterday " . date("H:i:s", $evttimearray[EVTIME_TIMESTAMP] );
	}

	// Reach return normal format!
	return $szDateFormatted = date("Y-m-d H:i:s", $evttimearray[EVTIME_TIMESTAMP] );
}

?>
