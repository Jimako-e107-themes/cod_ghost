<?php

if (!defined('e107_INIT')) { exit; }    

$sitetheme = e107::getPref('sitetheme');

e107::themeLan('admin', $sitetheme, true);


class theme_config implements e_theme_config
{

	function __construct()
	{
 
	}


	function config()
	{
		 
		return array(
			'carousel_images' => array('title' => LAN_THEMEPREF_01, 'type' => 'number', 'writeParms' => array("default"=>8), 'help' => LAN_THEMEPREF_01_HELP),
	 	);

	}

	function help()
	{
		return null; 
	}
	
	function process()
	{
	 	return null;
	}

}

