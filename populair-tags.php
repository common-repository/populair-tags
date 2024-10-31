<?php
/*  Copyright 2008 Johnny Mast  (email : info@phpvrouwen.nl)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/*
Plugin Name: populair-tags
Plugin URI: http://www.phpvrouwen.nl/forums/forum.php?id=8
Description: This plugin adds a tag cloud of the most used tags by the blog author(s)..
Version: 1.3.1
Author: Johnny Mast
Author URI: http://www.phpvrouwen.nl
*/

define (POPULAIR_TAGS_PATH, '../'.PLUGINDIR.'/populair-tags/');
define (POPULAIR_TAGS_CSSPATH, '../'.PLUGINDIR.'/populair-tags/css/');

function calc_populair_class ($percent)
{

	if ($percent >= 99)
	$class = 1;
	else if ($percent >= 70)
	$class = 2;
	else if ($percent >= 60)
	$class = 3;
	else if ($percent >= 50)
	$class = 4;
	else if ($percent >= 40)
	$class = 5;
	else if ($percent >= 30)
	$class = 6;
	else if ($percent >= 20)
	$class = 7;
	else if ($percent >= 10)
	$class = 8;
	else if ($percent >= 5)
	$class = 9;
	else
	$class = 0;

	 return 'size'.$class;
}

function show_populair_tags ()
{
	$aPosts   = get_posts();
	$aTags    = array ();
	$iNumTags = 0;
	
	foreach ($aPosts as $aPost) {
	 $aTagInfo =  get_tags ($aPost->ID);
	 
	 	if (is_array ($aTagInfo)) {
		 foreach ($aTagInfo as $aTag) {
			 if (!isset ($aTags [$aTag ->name]))
			 {
				$aTags [$aTag ->name] = array ('number_used' => $aTag->count,
											   'class'       => '',
											   'name'        => $aTag->name
											   );
				
				$iNumTags += $aTag ->count;
			 }		 		 
		 }
		}
	}
	
	foreach ($aTags as $key => $aTag)
	{
	 $aTag ['class'] = calc_populair_class (($aTag['number_used']/$iNumTags) * 100);
	 $aTags [$key]   = $aTag; 
	}
	
	require_once PLUGINDIR.'/populair-tags/templates/template.php';
	
	
}
?>
