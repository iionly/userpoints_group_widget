<?php
/**
 * Groups profile page Userpoints widget for Widget Manager plugin
 *
 */

$widget = elgg_extract('entity', $vars);

$limit = (int) $widget->userpoints_group_widget_count ?: 4;

$prev_context = elgg_get_context();
elgg_set_context('groups');

$content = elgg_list_entities([
	'type' => 'user',
	'limit' => $limit,
	'relationship' => 'member',
	'relationship_guid' => elgg_get_page_owner_guid(),
	'inverse_relationship' => true,
	'sort_by' => [
		'property' => 'userpoints_points',
		'direction' => 'DESC',
		'signed' => true,
		'property_type' => 'metadata',
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
