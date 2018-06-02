<?php
/**
 * Groups profile page Userpoints widget for Widget Manager plugin
 *
 */

$count = sanitise_int($vars["entity"]->userpoints_group_widget_count, false);
if(empty($count)){
	$count = 5;
}

echo elgg_view_field([
	'#type' => 'number',
	'#label' => elgg_echo('userpoints_group_widget:widget:num_members'),
	'name' => 'params[userpoints_group_widget_count]',
	'value' => $count,
	'min' => 1,
	'max' => 25,
	'step' => 1,
]);
