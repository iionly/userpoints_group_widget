Userpoints Group Widget plugin for Elgg 4.3 and newer Elgg 4.X
==============================================================

Latest Version: 4.3.0  
Released: 2023-09-17  
Contact: iionly@gmx.de  
License: GNU General Public License version 2  
Copyright: (c) iionly 2013


Description
-----------

This plugin adds an (optional) widget to groups profile pages listing group members with most (site-wide) userpoints. It works both with and without the Widget Manager plugin.

This plugin does only list users of the site who are also member of the currently viewed group. This plugin does NOT list the members based on userpoints they gained for actions within the corresponding group but lists them based on their total number of userpoints.

If you would like to list the members in the group sidebar instead of within a widget take a look in elgg-plugin.php. Uncomment the "view_extensions" lines and comment out the "widgets" and "group_tools" code to disable the widgets.


Installation
------------

1. If you have a previous version of the Userpoints Group Widget plugin installed, first remove the old plugin folder from your mod directory before copying/extracting the new version to your server,
2. Copy the userpoints_group_widget plugin folder into the mod folder on your server,
3. Enable the plugin in the admin section of your site.
