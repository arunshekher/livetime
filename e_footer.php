<?php

$livetimePref = e107::getPlugPref('livetime');

if ($livetimePref['livetime_active']) {

	if ($livetimePref['global_libs']) {
		loadLibsGlobally();
	} else {
		loadLibsLocally();
	}
}



/**
 * Loads libs from the local path
 */
function loadLibsLocally()
{
	e107::js('footer', '{e_PLUGIN}livetime/js/libs/moment/min/moment.min.js', 'jquery', 1);
	e107::js('footer', '{e_PLUGIN}livetime/js/libs/livestamp/livestamp.min.js', 'jquery', 1);
}


/**
 * Loads libs from the global path
 */
function loadLibsGlobally()
{
	e107::library('load', 'moment.js', 'minified');
	e107::library('load', 'livestamp.js', 'minified');
}
