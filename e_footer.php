<?php

$livetimePref = e107::getPlugPref('livetime');

if ($livetimePref['livetime_active']) {
	e107::js('footer', '{e_PLUGIN}livetime/js/libs/moment/moment.js', 'jquery', 1);
	e107::js('footer', '{e_PLUGIN}livetime/js/libs/livestamp/livestamp.js', 'jquery', 1);
}
