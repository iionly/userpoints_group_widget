<?php

return [
	'plugin' => [
		'name' => 'Userpoints Group Widget',
		'version' => '4.0.0',
		'dependencies' => [
			'elggx_userpoints' => [],
			'groups' => [],
		],
	],
	'hooks' => [
		'group_tool_widgets' => [
			'widget_manager' => [
				"\UserpointsGroupWidgetHooks::userpoints_group_widget_widget_handler" => [],
			],
		],
	],
	'widgets' => [
		'userpoints_group_widget' => [
			'context' => ['groups'],
		],
	],
	'group_tools' => [
		'userpoints_group_widget' => [
			'default_on' => true,
		],
	],
// uncommenting the following lines would list the top users in the sidebar of groups
// 	'view_extensions' => [
// 		'groups/sidebar/members' => [
// 			'userpoints_group_widget/sidebar' => [],
// 		],
// 	],
];
