<?php
/*
	*********************************************************************
	* -> www.phplogcon.org <-											*
	* -----------------------------------------------------------------	*
	* Some constants													*
	*																	*
	* -> Stuff which has to be static and predefined					*
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

// --- Some custom defines
define('RUNMODE_COMMANDLINE', 1);
define('RUNMODE_WEBSERVER', 2);

define('DEBUG_ULTRADEBUG', 5);
define('DEBUG_DEBUG', 4);
define('DEBUG_INFO', 3);
define('DEBUG_WARN', 2);
define('DEBUG_ERROR', 1);
define('DEBUG_ERROR_WTF', 0);

define('STR_DEBUG_ULTRADEBUG', "UltraDebug");
define('STR_DEBUG_DEBUG', "Debug");
define('STR_DEBUG_INFO', "Information");
define('STR_DEBUG_WARN', "Warning");
define('STR_DEBUG_ERROR', "Error");
define('STR_DEBUG_ERROR_WTF', "WTF OMFG");

// --- Source Type defines
define('SOURCE_DISK', '1');
define('SOURCE_MYSQLDB', '2');
// --- 

// --- 
define('UID_UNKNOWN', -1);
// --- 

// --- Syslog specific defines!
define('SYSLOG_KERN', 0);
define('SYSLOG_USER', 1);
define('SYSLOG_MAIL', 2);
define('SYSLOG_DAEMON', 3);
define('SYSLOG_AUTH', 4);
define('SYSLOG_SYSLOG', 5);
define('SYSLOG_LPR', 6);
define('SYSLOG_NEWS', 7);
define('SYSLOG_UUCP', 8);
define('SYSLOG_CRON', 9);
define('SYSLOG_LOCAL0', 16);
define('SYSLOG_LOCAL1', 17);
define('SYSLOG_LOCAL2', 18);
define('SYSLOG_LOCAL3', 19);
define('SYSLOG_LOCAL4', 20);
define('SYSLOG_LOCAL5', 21);
define('SYSLOG_LOCAL6', 22);
define('SYSLOG_LOCAL7', 23);
$facility_colors[SYSLOG_KERN] = "#F1BEA7";
$facility_colors[SYSLOG_USER] = "#F1D0A7";
$facility_colors[SYSLOG_MAIL] = "#F1E3A7";
$facility_colors[SYSLOG_DAEMON] = "#E5F1A7";
$facility_colors[SYSLOG_AUTH] = "#D3F1A7";
$facility_colors[SYSLOG_SYSLOG] = "#C1F1A7";
$facility_colors[SYSLOG_LPR] = "#A7F1D6";
$facility_colors[SYSLOG_NEWS] = "#A7F1E8";
$facility_colors[SYSLOG_UUCP] = "#A7E1F1";
$facility_colors[SYSLOG_CRON] = "#A7C8F1";
$facility_colors[SYSLOG_LOCAL0] = "#F2F2F2";
$facility_colors[SYSLOG_LOCAL1] = "#E4E5E6";
$facility_colors[SYSLOG_LOCAL2] = "#D6D9DA";
$facility_colors[SYSLOG_LOCAL3] = "#C9CDCF";
$facility_colors[SYSLOG_LOCAL4] = "#BEC2C4";
$facility_colors[SYSLOG_LOCAL5] = "#B1B6B9";
$facility_colors[SYSLOG_LOCAL6] = "#A3AAAD";
$facility_colors[SYSLOG_LOCAL7] = "#969DA1";

define('SYSLOG_EMERG', 0);
define('SYSLOG_ALERT', 1);
define('SYSLOG_CRIT', 2);
define('SYSLOG_ERR', 3);
define('SYSLOG_WARNING', 4);
define('SYSLOG_NOTICE', 5);
define('SYSLOG_INFO', 6);
define('SYSLOG_DEBUG', 7);
$severity_colors[SYSLOG_EMERG] = "#840A15";
$severity_colors[SYSLOG_ALERT] = "#BA0716";
$severity_colors[SYSLOG_CRIT] = "#CE0819";
$severity_colors[SYSLOG_ERR] = "#FF0A1F";
$severity_colors[SYSLOG_WARNING] = "#EF8200";
$severity_colors[SYSLOG_NOTICE] = "#14AD42";
$severity_colors[SYSLOG_INFO] = "#0C9C91";
$severity_colors[SYSLOG_DEBUG] = "#119BDE";
// --- 

?>
