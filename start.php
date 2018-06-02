<?php

elgg_register_event_handler('init', 'system', 'userpoints_group_widget_init');

function userpoints_group_widget_init() {

	// uncommenting the following line would list the top users in the sidebar of groups
	//elgg_extend_view('groups/sidebar/members', 'userpoints_group_widget/sidebar');

	// Add group option
	add_group_tool_option('userpoints_group_widget', elgg_echo('userpoints_group_widget:enable_userpoints_group_widget'), true);
	elgg_extend_view('groups/tool_latest', 'userpoints_group_widget/group_module');

	if (elgg_is_active_plugin('widget_manager')) {
		//add groups widget
		elgg_register_widget_type('userpoints_group_widget', elgg_echo("userpoints_group_widget:top_group_members"), elgg_echo('userpoints_group_widget:top_group_members'), ["groups"]);
		
		// handle the availability of the groups widget with the Widget Manager plugin installed
		elgg_register_plugin_hook_handler("group_tool_widgets", "widget_manager", "userpoints_group_widget_widget_handler");
	}
}

// Add or remove a group's Tidypics widgets based on the corresponding group tools option
function userpoints_group_widget_widget_handler($hook, $type, $return_value, $params) {
	if (!empty($params) && is_array($params)) {
		$entity = elgg_extract("entity", $params);

		if (!empty($entity) && elgg_instanceof($entity, "group")) {
			if (!is_array($return_value)) {
				$return_value = [];
			}

			if (!isset($return_value["enable"])) {
				$return_value["enable"] = [];
			}
			if (!isset($return_value["disable"])) {
				$return_value["disable"] = [];
			}

			if ($entity->userpoints_group_widget_enable == "yes") {
				$return_value["enable"][] = "userpoints_group_widget";
			} else {
				$return_value["disable"][] = "userpoints_group_widget";
			}
		}
	}

	return $return_value;
}
