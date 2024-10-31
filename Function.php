<?php

/**

 * @package Remove the Updates Submenu 
 * @author Websiteguy
 * @version 0.1
*/

/*

Plugin Name: Remove the Updates Submenu
Plugin URI: http://www.wordpress.org/plugins/remove-the-updates-submenu/
Version: 0.1
Description: This plugin will remove the updates page from your admin dashborad.
Author: <a href="http://profiles.wordpress.org/kidsguide">Websiteguy</a>
Author URL: http://profiles.wordpress.org/kidsguide
Compatible with WordPress 2.3+.


*/


/*

Copyright 2013 Websiteguy (email : mpsparrow@cogeco.ca)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



// Remove Update Submenu Under Dashboard

add_action('admin_menu', 'remove_menus', 102);
function remove_menus() {
	global $submenu;
	remove_submenu_page ( 'index.php', 'update-core.php' );
}