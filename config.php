<?php
function GetConfig()
{
	return array(
	'name' => "SlashCo Wiki", 
	'front_page' => 'gmod.md',
	'missing_page' => 'missing.md',
	'cache_page' => 'cache.md',
	'pages_path' => 'pages/',
	'issues_url' => 'https://github.com/RaphaelIT7/SlashCo/issues/',
	'code_language' => 'lua', // lua or c++
	'icon' => '',
	'version' => 0,
	'next_version' => 0,
	'description' => 'Welcome to the SlashCo Wiki.&#xA;Here you will find the Lua documentation of SlashCo.&#xA;',
	'xampp' => str_contains($_SERVER['SERVER_SOFTWARE'], "Apache"),
	'realm' => 'gmod',
	'categories' => array(
		array(
			'name' => 'Basics', 
			'categories' => array(
				array(
					'mdi' => 'mdi-book',
					'name' => 'Basics',
					'path' => 'basics',
				),
				array(
					'mdi' => 'mdi-book',
					'name' => 'Wiki',
					'path' => 'wiki',
				),
			),
		),
		array(
			'name' => 'Types', 
			'categories' => array(
				array(
					'mdi' => 'mdi-language-lua',
					'name' => 'Lua Types',
					'path' => 'types',
				),
			),
		),
		array( // A category containing EVERY single thing
			'name' => 'Lua', 
			'categories' => array(
				array(
					'mdi' => 'mdi-code-braces',
					'name' => 'Globals',
					'path' => 'lua/globals',
					'tags' => 'true',
				),
				array(
					'mdi' => 'mdi-bookshelf',
					'name' => 'Libraries',
					'path' => 'lua/libraries',
					'tags' => 'true',
				),
				array(
					'mdi' => 'mdi-hook',
					'name' => 'Hooks',
					'path' => 'lua/hooks',
					'tags' => 'true',
				),
				array(
					'mdi' => 'mdi-book',
					'name' => 'Classes',
					'path' => 'lua/classes',
					'tags' => 'true',
				),
				/*array(
					'mdi' => 'mdi-format-list-numbered',
					'name' => 'Enums',
					'path' => 'lua/enums',
					'tags' => 'true',
				),*/
				array(
					'mdi' => 'mdi-database',
					'name' => 'Structs',
					'path' => 'lua/structs',
					'tags' => 'true',
				),
				array(
					'mdi' => 'mdi-database',
					'name' => 'ConVars',
					'path' => 'lua/convars',
					'tags' => 'true',
				),
				array(
					'mdi' => 'mdi-server',
					'name' => 'Commands',
					'path' => 'lua/commands',
					'tags' => 'true',
				),
			),
		),
	)
	);
}
?>