<?php

class UserpointsGroupWidgetHooks {

	/**
	 * Add or remove widgets based on the group tool option
	 *
	 * @param \Elgg\Hook $hook 'group_tool_widgets', 'widget_manager'
	 *
	 * @return void|array
	 */
	public static function userpoints_group_widget_widget_handler(\Elgg\Hook $hook) {

		$entity = $hook->getEntityParam();
		if (!$entity instanceof \ElggGroup) {
			return;
		}

		$return = $hook->getValue();
		if (!is_array($return)) {
			// someone has other ideas
			return;
		}

		// check different group tools for which we supply widgets
		if ($entity->isToolEnabled('userpoints_group_widget')) {
			$return['enable'][] = 'userpoints_group_widget';
		} else {
			$return['disable'][] = 'userpoints_group_widget';
		}

		return $return;
	}
}
