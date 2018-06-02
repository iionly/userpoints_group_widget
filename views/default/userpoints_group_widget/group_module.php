<?php
/**
 * Userpoints group module
 */

$group = elgg_get_page_owner_entity();

if ($group->userpoints_group_widget_enable == "no") {
	return true;
}

$limit = 5;

elgg_push_context('widgets');

$content = elgg_list_entities_from_relationship([
	'type' => 'user',
	'limit' => $limit,
	'relationship' => 'member',
	'relationship_guid' => $group->guid,
	'inverse_relationship' => true,
	'order_by_metadata' =>  [
		'name' => 'userpoints_points',
		'direction' => DESC,
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

elgg_pop_context();

echo elgg_view('groups/profile/module', [
	'title' => elgg_echo('userpoints_group_widget:top_group_members'),
	'content' => $content,
]);
