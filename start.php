<?php

	define('COLOR_ORANGE', 			'#F48120');
	define('COLOR_ANCHOR_ORANGE', 	'#b95101');
	define('COLOR_LIGHT_ORANGE', 	'#F5A357');
	define('COLOR_BLUE',			'#1B5090');

	function theme_bevolkingszorg_init() {
	
		elgg_extend_view('css/elgg', 'theme_bevolkingszorg/css/site');
		elgg_extend_view('page/layouts/widgets', 'theme_bevolkingszorg/widgets_layout',400);
		
	}
	
	elgg_register_event_handler('init', 'system', 'theme_bevolkingszorg_init');