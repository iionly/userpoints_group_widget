Userpoints group widget plugin for Elgg 2.3 and newer Elgg 2.X
==============================================================

Latest Version: 2.3.3  
Released: 2019-02-24  
Contact: iionly@gmx.de  
License: GNU General Public License version 2  
Copyright: (c) iionly 2013


Description
-----------

This plugin adds an (optional) widget to groups profile pages listing group members with most (site-wide) userpoints. It works both with and without the Widget Manager plugin.

This plugin does only list users of the site who are also member of the currently viewed group. This plugin does NOT list the members based on userpoints they gained for actions within the corresponding group but lists them based on their total number of userpoints.

If you would like to list the members in the group sidebar instead of within a widget take a look in start.php. Uncomment the elgg_extend_view() line and comment out the other code to disable the widgets.


Installation
------------

1. If you have a previous version of the Userpoints group widget plugin installed, first remove the old plugin folder from your mod directory before copying/extracting the new version to your server,
2. Copy the userpoints_group_widget plugin folder into the mod folder on your server,
3. Enable the plugin in the admin section of your site.
