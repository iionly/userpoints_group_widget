<?php
/**
 * Groups profile page Userpoints widget for Widget Manager plugin
 *
 */

// get widget settings
$count = sanitise_int($vars["entity"]->userpoints_group_widget_count, false);
if(empty($count)){
	$count = 5;
}

$prev_context = elgg_get_context();
elgg_set_context('groups');

$content = elgg_list_entities_from_relationship([
	'type' => 'user',
	'limit' => $count,
	'relationship' => 'member',
	'relationship_guid' => elgg_get_page_owner_guid(),
	'inverse_relationship' => true,
	'order_by_metadata' =>  [
		'name' => 'userpoints_points',
		'direction' => 'DESC',
		'as' => 'integer',
	],
	'metadata_name_value_pairs' => [
		[
			'name' => 'userpoints_points',
			'value' => 0,
			'operand' => '>',
		],
	],
	'pagination' => false,
	'item_view' => 'elggx_userpoints/list/user',
]);

elgg_set_context($prev_context);

echo $content;
