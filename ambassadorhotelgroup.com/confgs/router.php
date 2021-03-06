<?php
$language = require_once('language_configs.php');
$lang = '';
$i=0;
foreach ($language as $key => $value) {
	$lang .=$key;
	if($i<count($language)-1){
		$lang .= '|';
	}
	$i++;
}

return array(
			'admin' => 'admin/site/login',
			'<lang:'.$lang.'>/<hotel:\S+>/<room:rooms>/<room_slug:\S+>' => 'room/detail',
			'<lang:'.$lang.'>/<hotel:\S+>/<cms:gallery>' => 'gallery/index',
			'<lang:'.$lang.'>/<hotel:\S+>/about' => 'site/about',
			'<lang:'.$lang.'>/<hotel:\S+>/<room:rooms>' => 'room/index',
			'<lang:'.$lang.'>/<hotel:\S+>/<special:(special-offers)>' => 'special/index',
			'<lang:'.$lang.'>/<hotel:\S+>/<cms:services>/<cms_slug:\S+>' => 'cms/detail',
			'<lang:'.$lang.'>/<hotel:\S+>/<cms:services>' => 'cms/index',
			'<lang:'.$lang.'>/<hotel:\S+>' => 'site/index',
			'<lang:'.$lang.'>/about' => 'site/about',
			'' => 'site/index',
			'<lang:'.$lang.'>/<special:(special-offers)>' => 'special/index',
			//'<lang:'.$lang.'>/<services:(dining-offer|meeting-event-offer)>' => 'special/index',			
			'<lang:'.$lang.'>/<special:(special-offers|dining-offer|meeting-event-offer)>/<sp_slug:\S+>.html' => 'special/detail',			
			'<lang:'.$lang.'>' => 'site/index',
			
			
			'<lang:'.$lang.'>/<cms:contact>' => 'site/contact',
			'<lang:'.$lang.'>/404' => 'site/error',
			'<lang:'.$lang.'>/<cms:services>' => 'cms/index',
			'<lang:'.$lang.'>/destination' => 'destination/index',
			'<lang:'.$lang.'>/site/recieve' => 'site/recieve',
			'<controller:\w+>/<id:\d+>'=>'<controller>/view',
			'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
			'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
		);
?>