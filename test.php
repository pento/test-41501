<?php

require __DIR__ . '/vendor/autoload.php';

$languages = array(
	'en_US', // ASCII
	'de_DE', // Occasional multibyte
	'zh_TW', // Always multibyte
);

$lengths = array(
	'Short' => array(
		'paragraphs' => 1,
		'length' => 100,
	),
	'Medium' => array(
		'paragraphs' => 3,
		'length' => 1000,
	),
	'Long' => array(
		'paragraphs' => 10,
		'length' => 10000,
	),
	'Super Long' => array(
		'paragraphs' => 50,
		'length' => 100000,
	),
	/*'Epic' => array(
		'paragraphs' => 500,
		'length' => 1000000,
	),*/

);

$strings = array();

foreach ( $languages as $language ) {
	$faker = Faker\Factory::create( $language );
	$strings[ $language ] = array();
	foreach ( $lengths as $length => $settings ) {
		$strings[ $language ][ $length ] = '';
		for ( $ii = 0; $ii < $settings['paragraphs']; $ii++ ) {
			$strings[ $language ][ $length ] .= $faker->realText( $settings['length'] / $settings['paragraphs'] );
			$strings[ $language ][ $length ] .= "\n\n";
		}
	}
}

$emoji_chance = array(
	0,
	1,
	10,
);

$emoji = array( '😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊','😋','😎','😍','😘','😗','😙','😚','☺','🙂','🤗','🤩','🤔','🤨','😐','😑','😶','🙄','😏','😣','😥','😮','🤐','😯','😪','😫','😴','😌','😛','😜','😝','🤤','😒','😓','😔','😕','🙃','🤑','😲','☹','🙁','😖','😞','😟','😤','😢','😭','😦','😧','😨','😩','🤯','😬','😰','😱','😳','🤪','😵','😡','😠','🤬','😷','🤒','🤕','🤢','🤮','🤧','😇','🤠','🤡','🤥','🤫','🤭','🧐','🤓','😈','👿','👹','👺','💀','☠','👻','👽','👾','🤖','💩','😺','😸','😹','😻','😼','😽','🙀','😿','😾','🙈','🙉','🙊','👶','👶🏻','👶🏼','👶🏽','👶🏾','👶🏿','🧒','🧒🏻','🧒🏼','🧒🏽','🧒🏾','🧒🏿','👦','👦🏻','👦🏼','👦🏽','👦🏾','👦🏿','👧','👧🏻','👧🏼','👧🏽','👧🏾','👧🏿','🧑','🧑🏻','🧑🏼','🧑🏽','🧑🏾','🧑🏿','👨','👨🏻','👨🏼','👨🏽','👨🏾','👨🏿','👩','👩🏻','👩🏼','👩🏽','👩🏾','👩🏿','🧓','🧓🏻','🧓🏼','🧓🏽','🧓🏾','🧓🏿','👴','👴🏻','👴🏼','👴🏽','👴🏾','👴🏿','👵','👵🏻','👵🏼','👵🏽','👵🏾','👵🏿','👨‍⚕️','👨🏻‍⚕️','👨🏼‍⚕️','👨🏽‍⚕️','👨🏾‍⚕️','👨🏿‍⚕️','👩‍⚕️','👩🏻‍⚕️','👩🏼‍⚕️','👩🏽‍⚕️','👩🏾‍⚕️','👩🏿‍⚕️','👨‍🎓','👨🏻‍🎓','👨🏼‍🎓','👨🏽‍🎓','👨🏾‍🎓','👨🏿‍🎓','👩‍🎓','👩🏻‍🎓','👩🏼‍🎓','👩🏽‍🎓','👩🏾‍🎓','👩🏿‍🎓','👨‍🏫','👨🏻‍🏫','👨🏼‍🏫','👨🏽‍🏫','👨🏾‍🏫','👨🏿‍🏫','👩‍🏫','👩🏻‍🏫','👩🏼‍🏫','👩🏽‍🏫','👩🏾‍🏫','👩🏿‍🏫','👨‍⚖️','👨🏻‍⚖️','👨🏼‍⚖️','👨🏽‍⚖️','👨🏾‍⚖️','👨🏿‍⚖️','👩‍⚖️','👩🏻‍⚖️','👩🏼‍⚖️','👩🏽‍⚖️','👩🏾‍⚖️','👩🏿‍⚖️','👨‍🌾','👨🏻‍🌾','👨🏼‍🌾','👨🏽‍🌾','👨🏾‍🌾','👨🏿‍🌾','👩‍🌾','👩🏻‍🌾','👩🏼‍🌾','👩🏽‍🌾','👩🏾‍🌾','👩🏿‍🌾','👨‍🍳','👨🏻‍🍳','👨🏼‍🍳','👨🏽‍🍳','👨🏾‍🍳','👨🏿‍🍳','👩‍🍳','👩🏻‍🍳','👩🏼‍🍳','👩🏽‍🍳','👩🏾‍🍳','👩🏿‍🍳','👨‍🔧','👨🏻‍🔧','👨🏼‍🔧','👨🏽‍🔧','👨🏾‍🔧','👨🏿‍🔧','👩‍🔧','👩🏻‍🔧','👩🏼‍🔧','👩🏽‍🔧','👩🏾‍🔧','👩🏿‍🔧','👨‍🏭','👨🏻‍🏭','👨🏼‍🏭','👨🏽‍🏭','👨🏾‍🏭','👨🏿‍🏭','👩‍🏭','👩🏻‍🏭','👩🏼‍🏭','👩🏽‍🏭','👩🏾‍🏭','👩🏿‍🏭','👨‍💼','👨🏻‍💼','👨🏼‍💼','👨🏽‍💼','👨🏾‍💼','👨🏿‍💼','👩‍💼','👩🏻‍💼','👩🏼‍💼','👩🏽‍💼','👩🏾‍💼','👩🏿‍💼','👨‍🔬','👨🏻‍🔬','👨🏼‍🔬','👨🏽‍🔬','👨🏾‍🔬','👨🏿‍🔬','👩‍🔬','👩🏻‍🔬','👩🏼‍🔬','👩🏽‍🔬','👩🏾‍🔬','👩🏿‍🔬','👨‍💻','👨🏻‍💻','👨🏼‍💻','👨🏽‍💻','👨🏾‍💻','👨🏿‍💻','👩‍💻','👩🏻‍💻','👩🏼‍💻','👩🏽‍💻','👩🏾‍💻','👩🏿‍💻','👨‍🎤','👨🏻‍🎤','👨🏼‍🎤','👨🏽‍🎤','👨🏾‍🎤','👨🏿‍🎤','👩‍🎤','👩🏻‍🎤','👩🏼‍🎤','👩🏽‍🎤','👩🏾‍🎤','👩🏿‍🎤','👨‍🎨','👨🏻‍🎨','👨🏼‍🎨','👨🏽‍🎨','👨🏾‍🎨','👨🏿‍🎨','👩‍🎨','👩🏻‍🎨','👩🏼‍🎨','👩🏽‍🎨','👩🏾‍🎨','👩🏿‍🎨','👨‍✈️','👨🏻‍✈️','👨🏼‍✈️','👨🏽‍✈️','👨🏾‍✈️','👨🏿‍✈️','👩‍✈️','👩🏻‍✈️','👩🏼‍✈️','👩🏽‍✈️','👩🏾‍✈️','👩🏿‍✈️','👨‍🚀','👨🏻‍🚀','👨🏼‍🚀','👨🏽‍🚀','👨🏾‍🚀','👨🏿‍🚀','👩‍🚀','👩🏻‍🚀','👩🏼‍🚀','👩🏽‍🚀','👩🏾‍🚀','👩🏿‍🚀','👨‍🚒','👨🏻‍🚒','👨🏼‍🚒','👨🏽‍🚒','👨🏾‍🚒','👨🏿‍🚒','👩‍🚒','👩🏻‍🚒','👩🏼‍🚒','👩🏽‍🚒','👩🏾‍🚒','👩🏿‍🚒','👮','👮🏻','👮🏼','👮🏽','👮🏾','👮🏿','👮‍♂️','👮🏻‍♂️','👮🏼‍♂️','👮🏽‍♂️','👮🏾‍♂️','👮🏿‍♂️','👮‍♀️','👮🏻‍♀️','👮🏼‍♀️','👮🏽‍♀️','👮🏾‍♀️','👮🏿‍♀️','🕵','🕵🏻','🕵🏼','🕵🏽','🕵🏾','🕵🏿','🕵️‍♂️','🕵🏻‍♂️','🕵🏼‍♂️','🕵🏽‍♂️','🕵🏾‍♂️','🕵🏿‍♂️','🕵️‍♀️','🕵🏻‍♀️','🕵🏼‍♀️','🕵🏽‍♀️','🕵🏾‍♀️','🕵🏿‍♀️','💂','💂🏻','💂🏼','💂🏽','💂🏾','💂🏿','💂‍♂️','💂🏻‍♂️','💂🏼‍♂️','💂🏽‍♂️','💂🏾‍♂️','💂🏿‍♂️','💂‍♀️','💂🏻‍♀️','💂🏼‍♀️','💂🏽‍♀️','💂🏾‍♀️','💂🏿‍♀️','👷','👷🏻','👷🏼','👷🏽','👷🏾','👷🏿','👷‍♂️','👷🏻‍♂️','👷🏼‍♂️','👷🏽‍♂️','👷🏾‍♂️','👷🏿‍♂️','👷‍♀️','👷🏻‍♀️','👷🏼‍♀️','👷🏽‍♀️','👷🏾‍♀️','👷🏿‍♀️','🤴','🤴🏻','🤴🏼','🤴🏽','🤴🏾','🤴🏿','👸','👸🏻','👸🏼','👸🏽','👸🏾','👸🏿','👳','👳🏻','👳🏼','👳🏽','👳🏾','👳🏿','👳‍♂️','👳🏻‍♂️','👳🏼‍♂️','👳🏽‍♂️','👳🏾‍♂️','👳🏿‍♂️','👳‍♀️','👳🏻‍♀️','👳🏼‍♀️','👳🏽‍♀️','👳🏾‍♀️','👳🏿‍♀️','👲','👲🏻','👲🏼','👲🏽','👲🏾','👲🏿','🧕','🧕🏻','🧕🏼','🧕🏽','🧕🏾','🧕🏿','🧔','🧔🏻','🧔🏼','🧔🏽','🧔🏾','🧔🏿','👱','👱🏻','👱🏼','👱🏽','👱🏾','👱🏿','👱‍♂️','👱🏻‍♂️','👱🏼‍♂️','👱🏽‍♂️','👱🏾‍♂️','👱🏿‍♂️','👱‍♀️','👱🏻‍♀️','👱🏼‍♀️','👱🏽‍♀️','👱🏾‍♀️','👱🏿‍♀️','🤵','🤵🏻','🤵🏼','🤵🏽','🤵🏾','🤵🏿','👰','👰🏻','👰🏼','👰🏽','👰🏾','👰🏿','🤰','🤰🏻','🤰🏼','🤰🏽','🤰🏾','🤰🏿','🤱','🤱🏻','🤱🏼','🤱🏽','🤱🏾','🤱🏿','👼','👼🏻','👼🏼','👼🏽','👼🏾','👼🏿','🎅','🎅🏻','🎅🏼','🎅🏽','🎅🏾','🎅🏿','🤶','🤶🏻','🤶🏼','🤶🏽','🤶🏾','🤶🏿','🧙','🧙🏻','🧙🏼','🧙🏽','🧙🏾','🧙🏿','🧙‍♀️','🧙🏻‍♀️','🧙🏼‍♀️','🧙🏽‍♀️','🧙🏾‍♀️','🧙🏿‍♀️','🧙‍♂️','🧙🏻‍♂️','🧙🏼‍♂️','🧙🏽‍♂️','🧙🏾‍♂️','🧙🏿‍♂️','🧚','🧚🏻','🧚🏼','🧚🏽','🧚🏾','🧚🏿','🧚‍♀️','🧚🏻‍♀️','🧚🏼‍♀️','🧚🏽‍♀️','🧚🏾‍♀️','🧚🏿‍♀️','🧚‍♂️','🧚🏻‍♂️','🧚🏼‍♂️','🧚🏽‍♂️','🧚🏾‍♂️','🧚🏿‍♂️','🧛','🧛🏻','🧛🏼','🧛🏽','🧛🏾','🧛🏿','🧛‍♀️','🧛🏻‍♀️','🧛🏼‍♀️','🧛🏽‍♀️','🧛🏾‍♀️','🧛🏿‍♀️','🧛‍♂️','🧛🏻‍♂️','🧛🏼‍♂️','🧛🏽‍♂️','🧛🏾‍♂️','🧛🏿‍♂️','🧜','🧜🏻','🧜🏼','🧜🏽','🧜🏾','🧜🏿','🧜‍♀️','🧜🏻‍♀️','🧜🏼‍♀️','🧜🏽‍♀️','🧜🏾‍♀️','🧜🏿‍♀️','🧜‍♂️','🧜🏻‍♂️','🧜🏼‍♂️','🧜🏽‍♂️','🧜🏾‍♂️','🧜🏿‍♂️','🧝','🧝🏻','🧝🏼','🧝🏽','🧝🏾','🧝🏿','🧝‍♀️','🧝🏻‍♀️','🧝🏼‍♀️','🧝🏽‍♀️','🧝🏾‍♀️','🧝🏿‍♀️','🧝‍♂️','🧝🏻‍♂️','🧝🏼‍♂️','🧝🏽‍♂️','🧝🏾‍♂️','🧝🏿‍♂️','🧞','🧞‍♀️','🧞‍♂️','🧟','🧟‍♀️','🧟‍♂️','🙍','🙍🏻','🙍🏼','🙍🏽','🙍🏾','🙍🏿','🙍‍♂️','🙍🏻‍♂️','🙍🏼‍♂️','🙍🏽‍♂️','🙍🏾‍♂️','🙍🏿‍♂️','🙍‍♀️','🙍🏻‍♀️','🙍🏼‍♀️','🙍🏽‍♀️','🙍🏾‍♀️','🙍🏿‍♀️','🙎','🙎🏻','🙎🏼','🙎🏽','🙎🏾','🙎🏿','🙎‍♂️','🙎🏻‍♂️','🙎🏼‍♂️','🙎🏽‍♂️','🙎🏾‍♂️','🙎🏿‍♂️','🙎‍♀️','🙎🏻‍♀️','🙎🏼‍♀️','🙎🏽‍♀️','🙎🏾‍♀️','🙎🏿‍♀️','🙅','🙅🏻','🙅🏼','🙅🏽','🙅🏾','🙅🏿','🙅‍♂️','🙅🏻‍♂️','🙅🏼‍♂️','🙅🏽‍♂️','🙅🏾‍♂️','🙅🏿‍♂️','🙅‍♀️','🙅🏻‍♀️','🙅🏼‍♀️','🙅🏽‍♀️','🙅🏾‍♀️','🙅🏿‍♀️','🙆','🙆🏻','🙆🏼','🙆🏽','🙆🏾','🙆🏿','🙆‍♂️','🙆🏻‍♂️','🙆🏼‍♂️','🙆🏽‍♂️','🙆🏾‍♂️','🙆🏿‍♂️','🙆‍♀️','🙆🏻‍♀️','🙆🏼‍♀️','🙆🏽‍♀️','🙆🏾‍♀️','🙆🏿‍♀️','💁','💁🏻','💁🏼','💁🏽','💁🏾','💁🏿','💁‍♂️','💁🏻‍♂️','💁🏼‍♂️','💁🏽‍♂️','💁🏾‍♂️','💁🏿‍♂️','💁‍♀️','💁🏻‍♀️','💁🏼‍♀️','💁🏽‍♀️','💁🏾‍♀️','💁🏿‍♀️','🙋','🙋🏻','🙋🏼','🙋🏽','🙋🏾','🙋🏿','🙋‍♂️','🙋🏻‍♂️','🙋🏼‍♂️','🙋🏽‍♂️','🙋🏾‍♂️','🙋🏿‍♂️','🙋‍♀️','🙋🏻‍♀️','🙋🏼‍♀️','🙋🏽‍♀️','🙋🏾‍♀️','🙋🏿‍♀️','🙇','🙇🏻','🙇🏼','🙇🏽','🙇🏾','🙇🏿','🙇‍♂️','🙇🏻‍♂️','🙇🏼‍♂️','🙇🏽‍♂️','🙇🏾‍♂️','🙇🏿‍♂️','🙇‍♀️','🙇🏻‍♀️','🙇🏼‍♀️','🙇🏽‍♀️','🙇🏾‍♀️','🙇🏿‍♀️','🤦','🤦🏻','🤦🏼','🤦🏽','🤦🏾','🤦🏿','🤦‍♂️','🤦🏻‍♂️','🤦🏼‍♂️','🤦🏽‍♂️','🤦🏾‍♂️','🤦🏿‍♂️','🤦‍♀️','🤦🏻‍♀️','🤦🏼‍♀️','🤦🏽‍♀️','🤦🏾‍♀️','🤦🏿‍♀️','🤷','🤷🏻','🤷🏼','🤷🏽','🤷🏾','🤷🏿','🤷‍♂️','🤷🏻‍♂️','🤷🏼‍♂️','🤷🏽‍♂️','🤷🏾‍♂️','🤷🏿‍♂️','🤷‍♀️','🤷🏻‍♀️','🤷🏼‍♀️','🤷🏽‍♀️','🤷🏾‍♀️','🤷🏿‍♀️','💆','💆🏻','💆🏼','💆🏽','💆🏾','💆🏿','💆‍♂️','💆🏻‍♂️','💆🏼‍♂️','💆🏽‍♂️','💆🏾‍♂️','💆🏿‍♂️','💆‍♀️','💆🏻‍♀️','💆🏼‍♀️','💆🏽‍♀️','💆🏾‍♀️','💆🏿‍♀️','💇','💇🏻','💇🏼','💇🏽','💇🏾','💇🏿','💇‍♂️','💇🏻‍♂️','💇🏼‍♂️','💇🏽‍♂️','💇🏾‍♂️','💇🏿‍♂️','💇‍♀️','💇🏻‍♀️','💇🏼‍♀️','💇🏽‍♀️','💇🏾‍♀️','💇🏿‍♀️','🚶','🚶🏻','🚶🏼','🚶🏽','🚶🏾','🚶🏿','🚶‍♂️','🚶🏻‍♂️','🚶🏼‍♂️','🚶🏽‍♂️','🚶🏾‍♂️','🚶🏿‍♂️','🚶‍♀️','🚶🏻‍♀️','🚶🏼‍♀️','🚶🏽‍♀️','🚶🏾‍♀️','🚶🏿‍♀️','🏃','🏃🏻','🏃🏼','🏃🏽','🏃🏾','🏃🏿','🏃‍♂️','🏃🏻‍♂️','🏃🏼‍♂️','🏃🏽‍♂️','🏃🏾‍♂️','🏃🏿‍♂️','🏃‍♀️','🏃🏻‍♀️','🏃🏼‍♀️','🏃🏽‍♀️','🏃🏾‍♀️','🏃🏿‍♀️','💃','💃🏻','💃🏼','💃🏽','💃🏾','💃🏿','🕺','🕺🏻','🕺🏼','🕺🏽','🕺🏾','🕺🏿','👯','👯‍♂️','👯‍♀️','🧖','🧖🏻','🧖🏼','🧖🏽','🧖🏾','🧖🏿','🧖‍♀️','🧖🏻‍♀️','🧖🏼‍♀️','🧖🏽‍♀️','🧖🏾‍♀️','🧖🏿‍♀️','🧖‍♂️','🧖🏻‍♂️','🧖🏼‍♂️','🧖🏽‍♂️','🧖🏾‍♂️','🧖🏿‍♂️','🧗','🧗🏻','🧗🏼','🧗🏽','🧗🏾','🧗🏿','🧗‍♀️','🧗🏻‍♀️','🧗🏼‍♀️','🧗🏽‍♀️','🧗🏾‍♀️','🧗🏿‍♀️','🧗‍♂️','🧗🏻‍♂️','🧗🏼‍♂️','🧗🏽‍♂️','🧗🏾‍♂️','🧗🏿‍♂️','🧘','🧘🏻','🧘🏼','🧘🏽','🧘🏾','🧘🏿','🧘‍♀️','🧘🏻‍♀️','🧘🏼‍♀️','🧘🏽‍♀️','🧘🏾‍♀️','🧘🏿‍♀️','🧘‍♂️','🧘🏻‍♂️','🧘🏼‍♂️','🧘🏽‍♂️','🧘🏾‍♂️','🧘🏿‍♂️','🛀','🛀🏻','🛀🏼','🛀🏽','🛀🏾','🛀🏿','🛌','🛌🏻','🛌🏼','🛌🏽','🛌🏾','🛌🏿','🕴','🕴🏻','🕴🏼','🕴🏽','🕴🏾','🕴🏿','🗣','👤','👥','🤺','🏇','🏇🏻','🏇🏼','🏇🏽','🏇🏾','🏇🏿','⛷','🏂','🏂🏻','🏂🏼','🏂🏽','🏂🏾','🏂🏿','🏌','🏌🏻','🏌🏼','🏌🏽','🏌🏾','🏌🏿','🏌️‍♂️','🏌🏻‍♂️','🏌🏼‍♂️','🏌🏽‍♂️','🏌🏾‍♂️','🏌🏿‍♂️','🏌️‍♀️','🏌🏻‍♀️','🏌🏼‍♀️','🏌🏽‍♀️','🏌🏾‍♀️','🏌🏿‍♀️','🏄','🏄🏻','🏄🏼','🏄🏽','🏄🏾','🏄🏿','🏄‍♂️','🏄🏻‍♂️','🏄🏼‍♂️','🏄🏽‍♂️','🏄🏾‍♂️','🏄🏿‍♂️','🏄‍♀️','🏄🏻‍♀️','🏄🏼‍♀️','🏄🏽‍♀️','🏄🏾‍♀️','🏄🏿‍♀️','🚣','🚣🏻','🚣🏼','🚣🏽','🚣🏾','🚣🏿','🚣‍♂️','🚣🏻‍♂️','🚣🏼‍♂️','🚣🏽‍♂️','🚣🏾‍♂️','🚣🏿‍♂️','🚣‍♀️','🚣🏻‍♀️','🚣🏼‍♀️','🚣🏽‍♀️','🚣🏾‍♀️','🚣🏿‍♀️','🏊','🏊🏻','🏊🏼','🏊🏽','🏊🏾','🏊🏿','🏊‍♂️','🏊🏻‍♂️','🏊🏼‍♂️','🏊🏽‍♂️','🏊🏾‍♂️','🏊🏿‍♂️','🏊‍♀️','🏊🏻‍♀️','🏊🏼‍♀️','🏊🏽‍♀️','🏊🏾‍♀️','🏊🏿‍♀️','⛹','⛹🏻','⛹🏼','⛹🏽','⛹🏾','⛹🏿','⛹️‍♂️','⛹🏻‍♂️','⛹🏼‍♂️','⛹🏽‍♂️','⛹🏾‍♂️','⛹🏿‍♂️','⛹️‍♀️','⛹🏻‍♀️','⛹🏼‍♀️','⛹🏽‍♀️','⛹🏾‍♀️','⛹🏿‍♀️','🏋','🏋🏻','🏋🏼','🏋🏽','🏋🏾','🏋🏿','🏋️‍♂️','🏋🏻‍♂️','🏋🏼‍♂️','🏋🏽‍♂️','🏋🏾‍♂️','🏋🏿‍♂️','🏋️‍♀️','🏋🏻‍♀️','🏋🏼‍♀️','🏋🏽‍♀️','🏋🏾‍♀️','🏋🏿‍♀️','🚴','🚴🏻','🚴🏼','🚴🏽','🚴🏾','🚴🏿','🚴‍♂️','🚴🏻‍♂️','🚴🏼‍♂️','🚴🏽‍♂️','🚴🏾‍♂️','🚴🏿‍♂️','🚴‍♀️','🚴🏻‍♀️','🚴🏼‍♀️','🚴🏽‍♀️','🚴🏾‍♀️','🚴🏿‍♀️','🚵','🚵🏻','🚵🏼','🚵🏽','🚵🏾','🚵🏿','🚵‍♂️','🚵🏻‍♂️','🚵🏼‍♂️','🚵🏽‍♂️','🚵🏾‍♂️','🚵🏿‍♂️','🚵‍♀️','🚵🏻‍♀️','🚵🏼‍♀️','🚵🏽‍♀️','🚵🏾‍♀️','🚵🏿‍♀️','🏎','🏍','🤸','🤸🏻','🤸🏼','🤸🏽','🤸🏾','🤸🏿','🤸‍♂️','🤸🏻‍♂️','🤸🏼‍♂️','🤸🏽‍♂️','🤸🏾‍♂️','🤸🏿‍♂️','🤸‍♀️','🤸🏻‍♀️','🤸🏼‍♀️','🤸🏽‍♀️','🤸🏾‍♀️','🤸🏿‍♀️','🤼','🤼‍♂️','🤼‍♀️','🤽','🤽🏻','🤽🏼','🤽🏽','🤽🏾','🤽🏿','🤽‍♂️','🤽🏻‍♂️','🤽🏼‍♂️','🤽🏽‍♂️','🤽🏾‍♂️','🤽🏿‍♂️','🤽‍♀️','🤽🏻‍♀️','🤽🏼‍♀️','🤽🏽‍♀️','🤽🏾‍♀️','🤽🏿‍♀️','🤾','🤾🏻','🤾🏼','🤾🏽','🤾🏾','🤾🏿','🤾‍♂️','🤾🏻‍♂️','🤾🏼‍♂️','🤾🏽‍♂️','🤾🏾‍♂️','🤾🏿‍♂️','🤾‍♀️','🤾🏻‍♀️','🤾🏼‍♀️','🤾🏽‍♀️','🤾🏾‍♀️','🤾🏿‍♀️','🤹','🤹🏻','🤹🏼','🤹🏽','🤹🏾','🤹🏿','🤹‍♂️','🤹🏻‍♂️','🤹🏼‍♂️','🤹🏽‍♂️','🤹🏾‍♂️','🤹🏿‍♂️','🤹‍♀️','🤹🏻‍♀️','🤹🏼‍♀️','🤹🏽‍♀️','🤹🏾‍♀️','🤹🏿‍♀️','👫','👬','👭','💏','👩‍❤️‍💋‍👨','👨‍❤️‍💋‍👨','👩‍❤️‍💋‍👩','💑','👩‍❤️‍👨','👨‍❤️‍👨','👩‍❤️‍👩','👪','👨‍👩‍👦','👨‍👩‍👧','👨‍👩‍👧‍👦','👨‍👩‍👦‍👦','👨‍👩‍👧‍👧','👨‍👨‍👦','👨‍👨‍👧','👨‍👨‍👧‍👦','👨‍👨‍👦‍👦','👨‍👨‍👧‍👧','👩‍👩‍👦','👩‍👩‍👧','👩‍👩‍👧‍👦','👩‍👩‍👦‍👦','👩‍👩‍👧‍👧','👨‍👦','👨‍👦‍👦','👨‍👧','👨‍👧‍👦','👨‍👧‍👧','👩‍👦','👩‍👦‍👦','👩‍👧','👩‍👧‍👦','👩‍👧‍👧','🤳','🤳🏻','🤳🏼','🤳🏽','🤳🏾','🤳🏿','💪','💪🏻','💪🏼','💪🏽','💪🏾','💪🏿','👈','👈🏻','👈🏼','👈🏽','👈🏾','👈🏿','👉','👉🏻','👉🏼','👉🏽','👉🏾','👉🏿','☝','☝🏻','☝🏼','☝🏽','☝🏾','☝🏿','👆','👆🏻','👆🏼','👆🏽','👆🏾','👆🏿','🖕','🖕🏻','🖕🏼','🖕🏽','🖕🏾','🖕🏿','👇','👇🏻','👇🏼','👇🏽','👇🏾','👇🏿','✌','✌🏻','✌🏼','✌🏽','✌🏾','✌🏿','🤞','🤞🏻','🤞🏼','🤞🏽','🤞🏾','🤞🏿','🖖','🖖🏻','🖖🏼','🖖🏽','🖖🏾','🖖🏿','🤘','🤘🏻','🤘🏼','🤘🏽','🤘🏾','🤘🏿','🤙','🤙🏻','🤙🏼','🤙🏽','🤙🏾','🤙🏿','🖐','🖐🏻','🖐🏼','🖐🏽','🖐🏾','🖐🏿','✋','✋🏻','✋🏼','✋🏽','✋🏾','✋🏿','👌','👌🏻','👌🏼','👌🏽','👌🏾','👌🏿','👍','👍🏻','👍🏼','👍🏽','👍🏾','👍🏿','👎','👎🏻','👎🏼','👎🏽','👎🏾','👎🏿','✊','✊🏻','✊🏼','✊🏽','✊🏾','✊🏿','👊','👊🏻','👊🏼','👊🏽','👊🏾','👊🏿','🤛','🤛🏻','🤛🏼','🤛🏽','🤛🏾','🤛🏿','🤜','🤜🏻','🤜🏼','🤜🏽','🤜🏾','🤜🏿','🤚','🤚🏻','🤚🏼','🤚🏽','🤚🏾','🤚🏿','👋','👋🏻','👋🏼','👋🏽','👋🏾','👋🏿','🤟','🤟🏻','🤟🏼','🤟🏽','🤟🏾','🤟🏿','✍','✍🏻','✍🏼','✍🏽','✍🏾','✍🏿','👏','👏🏻','👏🏼','👏🏽','👏🏾','👏🏿','👐','👐🏻','👐🏼','👐🏽','👐🏾','👐🏿','🙌','🙌🏻','🙌🏼','🙌🏽','🙌🏾','🙌🏿','🤲','🤲🏻','🤲🏼','🤲🏽','🤲🏾','🤲🏿','🙏','🙏🏻','🙏🏼','🙏🏽','🙏🏾','🙏🏿','🤝','💅','💅🏻','💅🏼','💅🏽','💅🏾','💅🏿','👂','👂🏻','👂🏼','👂🏽','👂🏾','👂🏿','👃','👃🏻','👃🏼','👃🏽','👃🏾','👃🏿','👣','👀','👁','👁️‍🗨️','🧠','👅','👄','💋','💘','❤','💓','💔','💕','💖','💗','💙','💚','💛','🧡','💜','🖤','💝','💞','💟','❣','💌','💤','💢','💣','💥','💦','💨','💫','💬','🗨','🗯','💭','🕳','👓','🕶','👔','👕','👖','🧣','🧤','🧥','🧦','👗','👘','👙','👚','👛','👜','👝','🛍','🎒','👞','👟','👠','👡','👢','👑','👒','🎩','🎓','🧢','⛑','📿','💄','💍','💎','🐵','🐒','🦍','🐶','🐕','🐩','🐺','🦊','🐱','🐈','🦁','🐯','🐅','🐆','🐴','🐎','🦄','🦓','🦌','🐮','🐂','🐃','🐄','🐷','🐖','🐗','🐽','🐏','🐑','🐐','🐪','🐫','🦒','🐘','🦏','🐭','🐁','🐀','🐹','🐰','🐇','🐿','🦔','🦇','🐻','🐨','🐼','🐾','🦃','🐔','🐓','🐣','🐤','🐥','🐦','🐧','🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🦕','🦖','🐳','🐋','🐬','🐟','🐠','🐡','🦈','🐙','🐚','🦀','🦐','🦑','🐌','🦋','🐛','🐜','🐝','🐞','🦗','🕷','🕸','🦂','💐','🌸','💮','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌱','🌲','🌳','🌴','🌵','🌾','🌿','☘','🍀','🍁','🍂','🍃','🍇','🍈','🍉','🍊','🍋','🍌','🍍','🍎','🍏','🍐','🍑','🍒','🍓','🥝','🍅','🥥','🥑','🍆','🥔','🥕','🌽','🌶','🥒','🥦','🍄','🥜','🌰','🍞','🥐','🥖','🥨','🥞','🧀','🍖','🍗','🥩','🥓','🍔','🍟','🍕','🌭','🥪','🌮','🌯','🥙','🥚','🍳','🥘','🍲','🥣','🥗','🍿','🥫','🍱','🍘','🍙','🍚','🍛','🍜','🍝','🍠','🍢','🍣','🍤','🍥','🍡','🥟','🥠','🥡','🍦','🍧','🍨','🍩','🍪','🎂','🍰','🥧','🍫','🍬','🍭','🍮','🍯','🍼','🥛','☕','🍵','🍶','🍾','🍷','🍸','🍹','🍺','🍻','🥂','🥃','🥤','🥢','🍽','🍴','🥄','🔪','🏺','🌍','🌎','🌏','🌐','🗺','🗾','🏔','⛰','🌋','🗻','🏕','🏖','🏜','🏝','🏞','🏟','🏛','🏗','🏘','🏙','🏚','🏠','🏡','🏢','🏣','🏤','🏥','🏦','🏨','🏩','🏪','🏫','🏬','🏭','🏯','🏰','💒','🗼','🗽','⛪','🕌','🕍','⛩','🕋','⛲','⛺','🌁','🌃','🌄','🌅','🌆','🌇','🌉','♨','🌌','🎠','🎡','🎢','💈','🎪','🎭','🖼','🎨','🎰','🚂','🚃','🚄','🚅','🚆','🚇','🚈','🚉','🚊','🚝','🚞','🚋','🚌','🚍','🚎','🚐','🚑','🚒','🚓','🚔','🚕','🚖','🚗','🚘','🚙','🚚','🚛','🚜','🚲','🛴','🛵','🚏','🛣','🛤','⛽','🚨','🚥','🚦','🚧','🛑','⚓','⛵','🛶','🚤','🛳','⛴','🛥','🚢','✈','🛩','🛫','🛬','💺','🚁','🚟','🚠','🚡','🛰','🚀','🛸','🛎','🚪','🛏','🛋','🚽','🚿','🛁','⌛','⏳','⌚','⏰','⏱','⏲','🕰','🕛','🕧','🕐','🕜','🕑','🕝','🕒','🕞','🕓','🕟','🕔','🕠','🕕','🕡','🕖','🕢','🕗','🕣','🕘','🕤','🕙','🕥','🕚','🕦','🌑','🌒','🌓','🌔','🌕','🌖','🌗','🌘','🌙','🌚','🌛','🌜','🌡','☀','🌝','🌞','⭐','🌟','🌠','☁','⛅','⛈','🌤','🌥','🌦','🌧','🌨','🌩','🌪','🌫','🌬','🌀','🌈','🌂','☂','☔','⛱','⚡','❄','☃','⛄','☄','🔥','💧','🌊','🎃','🎄','🎆','🎇','✨','🎈','🎉','🎊','🎋','🎍','🎎','🎏','🎐','🎑','🎀','🎁','🎗','🎟','🎫','🎖','🏆','🏅','🥇','🥈','🥉','⚽','⚾','🏀','🏐','🏈','🏉','🎾','🎱','🎳','🏏','🏑','🏒','🏓','🏸','🥊','🥋','🥅','🎯','⛳','⛸','🎣','🎽','🎿','🛷','🥌','🎮','🕹','🎲','♠','♥','♦','♣','🃏','🀄','🎴','🔇','🔈','🔉','🔊','📢','📣','📯','🔔','🔕','🎼','🎵','🎶','🎙','🎚','🎛','🎤','🎧','📻','🎷','🎸','🎹','🎺','🎻','🥁','📱','📲','☎','📞','📟','📠','🔋','🔌','💻','🖥','🖨','⌨','🖱','🖲','💽','💾','💿','📀','🎥','🎞','📽','🎬','📺','📷','📸','📹','📼','🔍','🔎','🔬','🔭','📡','🕯','💡','🔦','🏮','📔','📕','📖','📗','📘','📙','📚','📓','📒','📃','📜','📄','📰','🗞','📑','🔖','🏷','💰','💴','💵','💶','💷','💸','💳','💹','💱','💲','✉','📧','📨','📩','📤','📥','📦','📫','📪','📬','📭','📮','🗳','✏','✒','🖋','🖊','🖌','🖍','📝','💼','📁','📂','🗂','📅','📆','🗒','🗓','📇','📈','📉','📊','📋','📌','📍','📎','🖇','📏','📐','✂','🗃','🗄','🗑','🔒','🔓','🔏','🔐','🔑','🗝','🔨','⛏','⚒','🛠','🗡','⚔','🔫','🏹','🛡','🔧','🔩','⚙','🗜','⚗','⚖','🔗','⛓','💉','💊','🚬','⚰','⚱','🗿','🛢','🔮','🛒','🏧','🚮','🚰','♿','🚹','🚺','🚻','🚼','🚾','🛂','🛃','🛄','🛅','⚠','🚸','⛔','🚫','🚳','🚭','🚯','🚱','🚷','📵','🔞','☢','☣','⬆','↗','➡','↘','⬇','↙','⬅','↖','↕','↔','↩','↪','⤴','⤵','🔃','🔄','🔙','🔚','🔛','🔜','🔝','🛐','⚛','🕉','✡','☸','☯','✝','☦','☪','☮','🕎','🔯','♈','♉','♊','♋','♌','♍','♎','♏','♐','♑','♒','♓','⛎','🔀','🔁','🔂','▶','⏩','⏭','⏯','◀','⏪','⏮','🔼','⏫','🔽','⏬','⏸','⏹','⏺','⏏','🎦','🔅','🔆','📶','📳','📴','♀','♂','⚕','♻','⚜','🔱','📛','🔰','⭕','✅','☑','✔','✖','❌','❎','➕','➖','➗','➰','➿','〽','✳','✴','❇','‼','⁉','❓','❔','❕','❗','〰','©','®','™','#️⃣','*️⃣','0️⃣','1️⃣','2️⃣','3️⃣','4️⃣','5️⃣','6️⃣','7️⃣','8️⃣','9️⃣','🔟','💯','🔠','🔡','🔢','🔣','🔤','🅰','🆎','🅱','🆑','🆒','🆓','ℹ','🆔','Ⓜ','🆕','🆖','🅾','🆗','🅿','🆘','🆙','🆚','🈁','🈂','🈷','🈶','🈯','🉐','🈹','🈚','🈲','🉑','🈸','🈴','🈳','㊗','㊙','🈺','🈵','▪','▫','◻','◼','◽','◾','⬛','⬜','🔶','🔷','🔸','🔹','🔺','🔻','💠','🔘','🔲','🔳','⚪','⚫','🔴','🔵','🏁','🚩','🎌','🏴','🏳','🏳️‍🌈','🇦🇨','🇦🇩','🇦🇪','🇦🇫','🇦🇬','🇦🇮','🇦🇱','🇦🇲','🇦🇴','🇦🇶','🇦🇷','🇦🇸','🇦🇹','🇦🇺','🇦🇼','🇦🇽','🇦🇿','🇧🇦','🇧🇧','🇧🇩','🇧🇪','🇧🇫','🇧🇬','🇧🇭','🇧🇮','🇧🇯','🇧🇱','🇧🇲','🇧🇳','🇧🇴','🇧🇶','🇧🇷','🇧🇸','🇧🇹','🇧🇻','🇧🇼','🇧🇾','🇧🇿','🇨🇦','🇨🇨','🇨🇩','🇨🇫','🇨🇬','🇨🇭','🇨🇮','🇨🇰','🇨🇱','🇨🇲','🇨🇳','🇨🇴','🇨🇵','🇨🇷','🇨🇺','🇨🇻','🇨🇼','🇨🇽','🇨🇾','🇨🇿','🇩🇪','🇩🇬','🇩🇯','🇩🇰','🇩🇲','🇩🇴','🇩🇿','🇪🇦','🇪🇨','🇪🇪','🇪🇬','🇪🇭','🇪🇷','🇪🇸','🇪🇹','🇪🇺','🇫🇮','🇫🇯','🇫🇰','🇫🇲','🇫🇴','🇫🇷','🇬🇦','🇬🇧','🇬🇩','🇬🇪','🇬🇫','🇬🇬','🇬🇭','🇬🇮','🇬🇱','🇬🇲','🇬🇳','🇬🇵','🇬🇶','🇬🇷','🇬🇸','🇬🇹','🇬🇺','🇬🇼','🇬🇾','🇭🇰','🇭🇲','🇭🇳','🇭🇷','🇭🇹','🇭🇺','🇮🇨','🇮🇩','🇮🇪','🇮🇱','🇮🇲','🇮🇳','🇮🇴','🇮🇶','🇮🇷','🇮🇸','🇮🇹','🇯🇪','🇯🇲','🇯🇴','🇯🇵','🇰🇪','🇰🇬','🇰🇭','🇰🇮','🇰🇲','🇰🇳','🇰🇵','🇰🇷','🇰🇼','🇰🇾','🇰🇿','🇱🇦','🇱🇧','🇱🇨','🇱🇮','🇱🇰','🇱🇷','🇱🇸','🇱🇹','🇱🇺','🇱🇻','🇱🇾','🇲🇦','🇲🇨','🇲🇩','🇲🇪','🇲🇫','🇲🇬','🇲🇭','🇲🇰','🇲🇱','🇲🇲','🇲🇳','🇲🇴','🇲🇵','🇲🇶','🇲🇷','🇲🇸','🇲🇹','🇲🇺','🇲🇻','🇲🇼','🇲🇽','🇲🇾','🇲🇿','🇳🇦','🇳🇨','🇳🇪','🇳🇫','🇳🇬','🇳🇮','🇳🇱','🇳🇴','🇳🇵','🇳🇷','🇳🇺','🇳🇿','🇴🇲','🇵🇦','🇵🇪','🇵🇫','🇵🇬','🇵🇭','🇵🇰','🇵🇱','🇵🇲','🇵🇳','🇵🇷','🇵🇸','🇵🇹','🇵🇼','🇵🇾','🇶🇦','🇷🇪','🇷🇴','🇷🇸','🇷🇺','🇷🇼','🇸🇦','🇸🇧','🇸🇨','🇸🇩','🇸🇪','🇸🇬','🇸🇭','🇸🇮','🇸🇯','🇸🇰','🇸🇱','🇸🇲','🇸🇳','🇸🇴','🇸🇷','🇸🇸','🇸🇹','🇸🇻','🇸🇽','🇸🇾','🇸🇿','🇹🇦','🇹🇨','🇹🇩','🇹🇫','🇹🇬','🇹🇭','🇹🇯','🇹🇰','🇹🇱','🇹🇲','🇹🇳','🇹🇴','🇹🇷','🇹🇹','🇹🇻','🇹🇼','🇹🇿','🇺🇦','🇺🇬','🇺🇲','🇺🇳','🇺🇸','🇺🇾','🇺🇿','🇻🇦','🇻🇨','🇻🇪','🇻🇬','🇻🇮','🇻🇳','🇻🇺','🇼🇫','🇼🇸','🇽🇰','🇾🇪','🇾🇹','🇿🇦','🇿🇲','🇿🇼','🏴󠁧󠁢󠁥󠁮󠁧󠁿','🏴󠁧󠁢󠁳󠁣󠁴󠁿','🏴󠁧󠁢󠁷󠁬󠁳󠁿' );
$emoji_length = count( $emoji );

$functions = array( 'wp_staticize_emoji', 'wp_staticize_emoji2' );

$tests = array();
foreach ( $strings as $language => $set ) {
	$tests[ $language ] = array();
	foreach ( $set as $len => $string ) {
		$tests[ $language ][ $len ] = array();

		$string = mb_convert_encoding( $string, 'utf-32', 'utf-8' );

		foreach ( $emoji_chance as $chance ) {
			if ( ! $chance ) {
				$tests[ $language ][ $len ][ $chance ] = mb_convert_encoding( $string, 'utf-8', 'utf-32' );
				continue;
			}

			$length = mb_strlen( $string, 'utf-32' );
			$tests[ $language ][ $len ][ $chance ] = '';
			$prev = 0;
			for( $ii = mt_rand( 0, 50 / $chance ); $ii < $length; $ii += mt_rand( 50 / $chance, 150 / $chance ) ) {
				$tests[ $language ][ $len ][ $chance ] .= mb_convert_encoding( mb_substr( $string, $prev, $ii - $prev, 'utf-32' ), 'utf-8', 'utf-32' );
				$tests[ $language ][ $len ][ $chance ] .= $emoji[ mt_rand( 0, $emoji_length - 1 ) ];

				$prev = $ii;
			}
			$tests[ $language ][ $len ][ $chance ] .= mb_convert_encoding( mb_substr( $string, $prev, $length - $prev ), 'utf-8', 'utf-32' );
		}
	}
}

// Warm up PCRE's regex cache, for a fair comparison.
wp_staticize_emoji( '🔥' );
wp_staticize_emoji2( '🔥' );

$times = array();
$loops = 10;

foreach ( $tests as $language => $strings ) {
	echo "$language\n";
	$times[ $language ] = array();
	foreach ( $strings as $length => $set ) {
		echo "$length\n";
		$times[ $language ][ $length ] = array();
		foreach ( $set as $chance => $string ) {
			$strlen = mb_strlen( $string );
			echo "$chance% ($strlen chars): ";
			$times[ $language ][ $length ][ $chance ] = array();
			foreach ( $functions as $func ) {
				$start = microtime( true );
				for ( $ii = 0; $ii < $loops; $ii++ ) {
					echo ".";
					$foo = $func( $string );
				}
				$stop = microtime( true );
				$times[ $language ][ $length ][ $chance ][ $func ] = $stop - $start;
			}
			echo "\n";
		}
		echo "\n";
	}
}
foreach ( $times as $language => $everything ) {
	echo "$language Posts\n";
	echo "===========\n\n";
	foreach ( $everything as $length => $set ) {
		echo "$length Posts\n";
		echo str_repeat( '-', strlen( $length ) + 6 ) . "\n\n";
		foreach ( $set as $chance => $funcs ) {
			echo "$chance%: ";
			$factor = 1000 / $loops;
			$old = round( $funcs[ 'wp_staticize_emoji' ] * $factor, 1 );
			$new = round( $funcs[ 'wp_staticize_emoji2' ] * $factor, 1 );
			echo "Old averages {$old}ms, New averages {$new}ms\n";
		}
		echo "\n";
	}
}

function wp_encode_emoji( $content ) {
	if ( function_exists( 'mb_convert_encoding' ) ) {
		$regex = '/(
		     \x23\xE2\x83\xA3               # Digits
		     [\x30-\x39]\xE2\x83\xA3
		   | \xF0\x9F[\x85-\x88][\xA6-\xBF] # Enclosed characters
		   | \xF0\x9F[\x8C-\x97][\x80-\xBF] # Misc
		   | \xF0\x9F\x98[\x80-\xBF]        # Smilies
		   | \xF0\x9F\x99[\x80-\x8F]
		   | \xF0\x9F\x9A[\x80-\xBF]        # Transport and map symbols
		)/x';

		$matches = array();
		if ( preg_match_all( $regex, $content, $matches ) ) {
			if ( ! empty( $matches[1] ) ) {
				foreach ( $matches[1] as $emoji ) {
					/*
					 * UTF-32's hex encoding is the same as HTML's hex encoding.
					 * So, by converting the emoji from UTF-8 to UTF-32, we magically
					 * get the correct hex encoding.
					 */
					$unpacked = unpack( 'H*', mb_convert_encoding( $emoji, 'UTF-32', 'UTF-8' ) );
					if ( isset( $unpacked[1] ) ) {
						$entity = '&#x' . ltrim( $unpacked[1], '0' ) . ';';
						$content = str_replace( $emoji, $entity, $content );
					}
				}
			}
		}
	}

	return $content;
}

function wp_staticize_emoji( $text ) {
	$text = wp_encode_emoji( $text );

	/** This filter is documented in wp-includes/formatting.php */
	$cdn_url = apply_filters( 'emoji_url', 'https://s.w.org/images/core/emoji/2.3/72x72/' );

	/** This filter is documented in wp-includes/formatting.php */
	$ext = apply_filters( 'emoji_ext', '.png' );

	$output = '';
	/*
	 * HTML loop taken from smiley function, which was taken from texturize function.
	 * It'll never be consolidated.
	 *
	 * First, capture the tags as well as in between.
	 */
	$textarr = preg_split( '/(<.*>)/U', $text, -1, PREG_SPLIT_DELIM_CAPTURE );
	$stop = count( $textarr );

	// Ignore processing of specific tags.
	$tags_to_ignore = 'code|pre|style|script|textarea';
	$ignore_block_element = '';

	for ( $i = 0; $i < $stop; $i++ ) {
		$content = $textarr[$i];

		// If we're in an ignore block, wait until we find its closing tag.
		if ( '' == $ignore_block_element && preg_match( '/^<(' . $tags_to_ignore . ')>/', $content, $matches ) )  {
			$ignore_block_element = $matches[1];
		}

		// If it's not a tag and not in ignore block.
		if ( '' ==  $ignore_block_element && strlen( $content ) > 0 && '<' != $content[0] ) {
			$matches = array();
			if ( preg_match_all( '/(&#x1f1(e[6-9a-f]|f[0-9a-f]);){2}/', $content, $matches ) ) {
				if ( ! empty( $matches[0] ) ) {
					foreach ( $matches[0] as $flag ) {
						$chars = str_replace( array( '&#x', ';'), '', $flag );

						list( $char1, $char2 ) = str_split( $chars, 5 );
						$entity = sprintf( '<img src="%s" alt="%s" class="wp-smiley" style="height: 1em; max-height: 1em;" />', $cdn_url . $char1 . '-' . $char2 . $ext, html_entity_decode( $flag ) );

						$content = str_replace( $flag, $entity, $content );
					}
				}
			}

			// Loosely match the Emoji Unicode range.
			$regex = '/(&#x[2-3][0-9a-f]{3};|&#x1f[1-6][0-9a-f]{2};)/';

			$matches = array();
			if ( preg_match_all( $regex, $content, $matches ) ) {
				if ( ! empty( $matches[1] ) ) {
					foreach ( $matches[1] as $emoji ) {
						$char = str_replace( array( '&#x', ';'), '', $emoji );
						$entity = sprintf( '<img src="%s" alt="%s" class="wp-smiley" style="height: 1em; max-height: 1em;" />', $cdn_url . $char . $ext, html_entity_decode( $emoji ) );

						$content = str_replace( $emoji, $entity, $content );
					}
				}
			}
		}

		// Did we exit ignore block.
		if ( '' != $ignore_block_element && '</' . $ignore_block_element . '>' == $content )  {
			$ignore_block_element = '';
		}

		$output .= $content;
	}

	return $output;
}

function wp_encode_emoji2( $content ) {
	if ( function_exists( 'mb_convert_encoding' ) ) {
		$regex = wp_emoji_regex( 'codepoints' );

		$encoding = mb_internal_encoding();
		mb_internal_encoding( 'UTF-32' );

		$content = mb_convert_encoding( $content, 'UTF-32', 'UTF-8' );

		$matches = array();
		if ( preg_match_all( $regex, $content, $matches ) ) {
			if ( ! empty( $matches[1] ) ) {
				foreach ( array_unique( $matches[1] ) as $emoji ) {
					/*
					 * UTF-32's hex encoding is the same as HTML's hex encoding.
					 * So, by converting the emoji from UTF-8 to UTF-32, we magically
					 * get the correct hex encoding.
					 */
					$unpacked = unpack( 'H*', $emoji );
					if ( isset( $unpacked[1] ) ) {
						$parts = str_split( $unpacked[1], 8 );
						$entity = '';

						foreach ( $parts as $part ) {
							$entity .= '&#x' . ltrim( $part, '0' ) . ';';
						}

						$content = str_replace( $emoji, $entity, $content );
					}
				}
			}
		} else {
			$content = mb_convert_encoding( $content, 'UTF-8', 'UTF-32' );
		}

		mb_internal_encoding( $encoding );
	}

	return $content;
}


function wp_staticize_emoji2( $text ) {
	$text = wp_encode_emoji2( $text );

	$output = '';
	/*
	 * HTML loop taken from smiley function, which was taken from texturize function.
	 * It'll never be consolidated.
	 *
	 * First, capture the tags as well as in between.
	 */
	$textarr = preg_split( '/(<.*>)/U', $text, -1, PREG_SPLIT_DELIM_CAPTURE );
	$stop = count( $textarr );

	// Ignore processing of specific tags.
	$tags_to_ignore = 'code|pre|style|script|textarea';
	$ignore_block_element = '';

	$regex = wp_emoji_regex( 'entities' );

	for ( $i = 0; $i < $stop; $i++ ) {
		$content = $textarr[$i];

		// If we're in an ignore block, wait until we find its closing tag.
		if ( '' == $ignore_block_element && preg_match( '/^<(' . $tags_to_ignore . ')>/', $content, $matches ) )  {
			$ignore_block_element = $matches[1];
		}

		// If it's not a tag and not in ignore block.
		if ( '' ==  $ignore_block_element && strlen( $content ) > 0 && '<' != $content[0] ) {
			$content = preg_replace_callback( $regex, '_wp_staticize_emoji', $content );
		}

		// Did we exit ignore block.
		if ( '' != $ignore_block_element && '</' . $ignore_block_element . '>' == $content )  {
			$ignore_block_element = '';
		}

		$output .= $content;
	}

	return $output;
}

function _wp_staticize_emoji( $matches ) {
	static $cdn_url;
	if ( ! $cdn_url ) {
		/** This filter is documented in wp-includes/formatting.php */
		$cdn_url = apply_filters( 'emoji_url', 'https://s.w.org/images/core/emoji/2.3/72x72/' );
	}

	static $ext;
	if ( ! $ext ) {
		/** This filter is documented in wp-includes/formatting.php */
		$ext = apply_filters( 'emoji_ext', '.png' );
	}

	$char = str_replace( ';&#x', '-', $matches[1] );
	$char = str_replace( array( '&#x', ';'), '', $char );

	return sprintf( '<img src="%s" alt="%s" class="wp-smiley" style="height: 1em; max-height: 1em;" />', $cdn_url . $char . $ext, html_entity_decode( $matches[1] ) );
}

function wp_emoji_regex( $type = 'codepoints' ) {
	// If we're using a PCRE version that doesn't support Unicode, return a loose match regex.
	if ( 'codepoints' === $type && ( ! defined( 'PCRE_VERSION' ) || version_compare( PCRE_VERSION, '8.30', '<=' ) ) ) {
		return '/(
		     \xE2\x98[\x80-\xFF]            # Symbols
		   | \xE2\x99[\x00-\xFF]
		   | [\xE3-\xED][\x00-\xFF]{2}
		   | [\x23\x30-\x39]\xE2\x83\xA3    # Digits
		   | \xF0\x9F[\x85-\x88][\xA6-\xBF] # Enclosed characters
		   | \xF0\x9F[\x8C-\x97][\x80-\xBF] # Misc
		   | \xF0\x9F\x98[\x80-\xBF]        # Smilies
		   | \xF0\x9F\x99[\x80-\x8F]
		   | \xF0\x9F[\xA4-\xA7][\x00-\xFF]
		   | \xF0\x9F\x9A[\x80-\xBF]        # Transport and map symbols
		   | \xE2\x80\x8D                   # Zero Width Joiner
		   | \xEF\xB8\x8F                   # Emoji Variation Selector
		)/x';
	}

	// Do not remove the START/END comments - they're used to find where to insert the regex.

	// START: emoji regex
	$codepoints = '/(\x00\x01\xf4\x68|\x00\x01\xf4\x69(?:\x00\x01(?:\xf3\xfb|\xf3\xfc|\xf3\xfd|\xf3\xfe|\xf3\xff))?\x00\x00\x20\x0d(?:\x00\x00\x26\x95\x00\x00\xfe\x0f|\x00\x00\x26\x96\x00\x00\xfe\x0f|\x00\x00\x27\x08\x00\x00\xfe\x0f|\x00\x01(?:\xf3\x3e|\xf3\x73|\xf3\x93|\xf3\xa4|\xf3\xa8|\xf3\xeb|\xf3\xed|\xf4\xbb|\xf4\xbc|\xf5\x27|\xf5\x2c|\xf6\x80|\xf6\x92))|(?:\x00\x01(?:\xf3\xcb|\xf3\xcc|\xf5\x75)|\x00\x00\x26\xf9)(?:\x00\x00\xfe\x0f|\x00\x01(?:\xf3\xfb|\xf3\xfc|\xf3\xfd|\xf3\xfe|\xf3\xff))\x00\x00\x20\x0d\x00\x00\x26\x40\x00\x00\xfe\x0f|\x00\x00\x20\x0d\x00\x00\x26\x42\x00\x00\xfe\x0f|(?:\x00\x01(?:\xf3\xc3|\xf3\xc4|\xf3\xca|\xf4\x6e|\xf4\x71|\xf4\x73|\xf4\x77|\xf4\x81|\xf4\x82|\xf4\x86|\xf4\x87|\xf6\x45|\xf6\x46|\xf6\x47|\xf6\x4b|\xf6\x4d|\xf6\x4e|\xf6\xa3|\xf6\xb4|\xf6\xb5|\xf6\xb6|\xf9\x26|\xf9\x37|\xf9\x38|\xf9\x39|\xf9\x3d|\xf9\x3e|\xf9\xd6|\xf9\xd7|\xf9\xd8|\xf9\xd9|\xf9\xda|\xf9\xdb|\xf9\xdc|\xf9\xdd))(?:\x00\x01(?:\xf3\xfb|\xf3\xfc|\xf3\xfd|\xf3\xfe|\xf3\xff))?\x00\x00\x20\x0d\x00\x00\x26\x40\x00\x00\xfe\x0f|\x00\x00\x20\x0d\x00\x00\x26\x42\x00\x00\xfe\x0f|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x00\x27\x64\x00\x00\xfe\x0f\x00\x00\x20\x0d\x00\x01\xf4\x8b\x00\x00\x20\x0d\x00\x01\xf4\x68|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x66\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x67\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x67\x00\x00\x20\x0d\x00\x01\xf4\x67|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x66\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x67\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x67\x00\x00\x20\x0d\x00\x01\xf4\x67|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x00\x27\x64\x00\x00\xfe\x0f\x00\x00\x20\x0d\x00\x01\xf4\x8b\x00\x00\x20\x0d\x00\x01\xf4\x68|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x00\x27\x64\x00\x00\xfe\x0f\x00\x00\x20\x0d\x00\x01\xf4\x8b\x00\x00\x20\x0d\x00\x01\xf4\x69|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x66\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x67\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x67\x00\x00\x20\x0d\x00\x01\xf4\x67|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x00\x27\x64\x00\x00\xfe\x0f\x00\x00\x20\x0d\x00\x01\xf4\x68|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x66\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x67\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x67\x00\x00\x20\x0d\x00\x01\xf4\x67|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x67|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x67|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x00\x27\x64\x00\x00\xfe\x0f\x00\x00\x20\x0d\x00\x01\xf4\x68|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x00\x27\x64\x00\x00\xfe\x0f\x00\x00\x20\x0d\x00\x01\xf4\x69|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x66\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x67\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x67\x00\x00\x20\x0d\x00\x01\xf4\x67|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x67|\x00\x01\xf3\xf3\x00\x00\xfe\x0f\x00\x00\x20\x0d\x00\x01\xf3\x08|\x00\x01\xf3\xf4\x00\x00\x20\x0d\x00\x00\x26\x20\x00\x00\xfe\x0f|\x00\x01\xf4\x41\x00\x00\x20\x0d\x00\x01\xf5\xe8|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x68\x00\x00\x20\x0d\x00\x01\xf4\x67|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x66|\x00\x01\xf4\x69\x00\x00\x20\x0d\x00\x01\xf4\x67|\x00\x01\xf4\x6f\x00\x00\x20\x0d\x00\x00\x26\x40\x00\x00\xfe\x0f|\x00\x01\xf4\x6f\x00\x00\x20\x0d\x00\x00\x26\x42\x00\x00\xfe\x0f|\x00\x01\xf9\x3c\x00\x00\x20\x0d\x00\x00\x26\x40\x00\x00\xfe\x0f|\x00\x01\xf9\x3c\x00\x00\x20\x0d\x00\x00\x26\x42\x00\x00\xfe\x0f|\x00\x01\xf9\xde\x00\x00\x20\x0d\x00\x00\x26\x40\x00\x00\xfe\x0f|\x00\x01\xf9\xde\x00\x00\x20\x0d\x00\x00\x26\x42\x00\x00\xfe\x0f|\x00\x01\xf9\xdf\x00\x00\x20\x0d\x00\x00\x26\x40\x00\x00\xfe\x0f|\x00\x01\xf9\xdf\x00\x00\x20\x0d\x00\x00\x26\x42\x00\x00\xfe\x0f|(?:(?:(?:\x00){3}(?:\x23|\x2a|\x30|\x31|\x32|\x33|\x34|\x35|\x36|\x37|\x38|\x39)))\x00\x00\xfe\x0f?\x00\x00\x20\xe3|(?:(?:\x00\x01(?:\xf3\xcb|\xf3\xcc|\xf5\x74|\xf5\x75|\xf5\x90)|(?:(?:\x00){2}(?:\x26\x1d|\x26\xf7|\x26\xf9|\x27\x0c|\x27\x0d)))(?:\x00\x00\xfe\x0f|(?!\x00\x00\xfe\x0e))|\x00\x01(?:\xf3\x85|\xf3\xc2|\xf3\xc3|\xf3\xc4|\xf3\xc7|\xf3\xca|\xf4\x42|\xf4\x43|\xf4\x46|\xf4\x47|\xf4\x48|\xf4\x49|\xf4\x4a|\xf4\x4b|\xf4\x4c|\xf4\x4d|\xf4\x4e|\xf4\x4f|\xf4\x50|\xf4\x66|\xf4\x67|\xf4\x68|\xf4\x69|\xf4\x6e|\xf4\x70|\xf4\x71|\xf4\x72|\xf4\x73|\xf4\x74|\xf4\x75|\xf4\x76|\xf4\x77|\xf4\x78|\xf4\x7c|\xf4\x81|\xf4\x82|\xf4\x83|\xf4\x85|\xf4\x86|\xf4\x87|\xf4\xaa|\xf5\x7a|\xf5\x95|\xf5\x96|\xf6\x45|\xf6\x46|\xf6\x47|\xf6\x4b|\xf6\x4c|\xf6\x4d|\xf6\x4e|\xf6\x4f|\xf6\xa3|\xf6\xb4|\xf6\xb5|\xf6\xb6|\xf6\xc0|\xf6\xcc|\xf9\x18|\xf9\x19|\xf9\x1a|\xf9\x1b|\xf9\x1c|\xf9\x1e|\xf9\x1f|\xf9\x26|\xf9\x30|\xf9\x31|\xf9\x32|\xf9\x33|\xf9\x34|\xf9\x35|\xf9\x36|\xf9\x37|\xf9\x38|\xf9\x39|\xf9\x3d|\xf9\x3e|\xf9\xd1|\xf9\xd2|\xf9\xd3|\xf9\xd4|\xf9\xd5|\xf9\xd6|\xf9\xd7|\xf9\xd8|\xf9\xd9|\xf9\xda|\xf9\xdb|\xf9\xdc|\xf9\xdd)|(?:(?:\x00){2}(?:\x27\x0a|\x27\x0b)))(?:\x00\x01(?:\xf3\xfb|\xf3\xfc|\xf3\xfd|\xf3\xfe|\xf3\xff)|)|\x00\x01\xf3\xf4\x00\x0e\x00\x67\x00\x0e\x00\x62\x00\x0e\x00\x65\x00\x0e\x00\x6e\x00\x0e\x00\x67\x00\x0e\x00\x7f|\x00\x01\xf3\xf4\x00\x0e\x00\x67\x00\x0e\x00\x62\x00\x0e\x00\x73\x00\x0e\x00\x63\x00\x0e\x00\x74\x00\x0e\x00\x7f|\x00\x01\xf3\xf4\x00\x0e\x00\x67\x00\x0e\x00\x62\x00\x0e\x00\x77\x00\x0e\x00\x6c\x00\x0e\x00\x73\x00\x0e\x00\x7f|\x00\x01\xf1\xe6\x00\x01\xf1\xe8|\x00\x01\xf1\xe6\x00\x01\xf1\xe9|\x00\x01\xf1\xe6\x00\x01\xf1\xea|\x00\x01\xf1\xe6\x00\x01\xf1\xeb|\x00\x01\xf1\xe6\x00\x01\xf1\xec|\x00\x01\xf1\xe6\x00\x01\xf1\xee|\x00\x01\xf1\xe6\x00\x01\xf1\xf1|\x00\x01\xf1\xe6\x00\x01\xf1\xf2|\x00\x01\xf1\xe6\x00\x01\xf1\xf4|\x00\x01\xf1\xe6\x00\x01\xf1\xf6|\x00\x01\xf1\xe6\x00\x01\xf1\xf7|\x00\x01\xf1\xe6\x00\x01\xf1\xf8|\x00\x01\xf1\xe6\x00\x01\xf1\xf9|\x00\x01\xf1\xe6\x00\x01\xf1\xfa|\x00\x01\xf1\xe6\x00\x01\xf1\xfc|\x00\x01\xf1\xe6\x00\x01\xf1\xfd|\x00\x01\xf1\xe6\x00\x01\xf1\xff|\x00\x01\xf1\xe7\x00\x01\xf1\xe6|\x00\x01\xf1\xe7\x00\x01\xf1\xe7|\x00\x01\xf1\xe7\x00\x01\xf1\xe9|\x00\x01\xf1\xe7\x00\x01\xf1\xea|\x00\x01\xf1\xe7\x00\x01\xf1\xeb|\x00\x01\xf1\xe7\x00\x01\xf1\xec|\x00\x01\xf1\xe7\x00\x01\xf1\xed|\x00\x01\xf1\xe7\x00\x01\xf1\xee|\x00\x01\xf1\xe7\x00\x01\xf1\xef|\x00\x01\xf1\xe7\x00\x01\xf1\xf1|\x00\x01\xf1\xe7\x00\x01\xf1\xf2|\x00\x01\xf1\xe7\x00\x01\xf1\xf3|\x00\x01\xf1\xe7\x00\x01\xf1\xf4|\x00\x01\xf1\xe7\x00\x01\xf1\xf6|\x00\x01\xf1\xe7\x00\x01\xf1\xf7|\x00\x01\xf1\xe7\x00\x01\xf1\xf8|\x00\x01\xf1\xe7\x00\x01\xf1\xf9|\x00\x01\xf1\xe7\x00\x01\xf1\xfb|\x00\x01\xf1\xe7\x00\x01\xf1\xfc|\x00\x01\xf1\xe7\x00\x01\xf1\xfe|\x00\x01\xf1\xe7\x00\x01\xf1\xff|\x00\x01\xf1\xe8\x00\x01\xf1\xe6|\x00\x01\xf1\xe8\x00\x01\xf1\xe8|\x00\x01\xf1\xe8\x00\x01\xf1\xe9|\x00\x01\xf1\xe8\x00\x01\xf1\xeb|\x00\x01\xf1\xe8\x00\x01\xf1\xec|\x00\x01\xf1\xe8\x00\x01\xf1\xed|\x00\x01\xf1\xe8\x00\x01\xf1\xee|\x00\x01\xf1\xe8\x00\x01\xf1\xf0|\x00\x01\xf1\xe8\x00\x01\xf1\xf1|\x00\x01\xf1\xe8\x00\x01\xf1\xf2|\x00\x01\xf1\xe8\x00\x01\xf1\xf3|\x00\x01\xf1\xe8\x00\x01\xf1\xf4|\x00\x01\xf1\xe8\x00\x01\xf1\xf5|\x00\x01\xf1\xe8\x00\x01\xf1\xf7|\x00\x01\xf1\xe8\x00\x01\xf1\xfa|\x00\x01\xf1\xe8\x00\x01\xf1\xfb|\x00\x01\xf1\xe8\x00\x01\xf1\xfc|\x00\x01\xf1\xe8\x00\x01\xf1\xfd|\x00\x01\xf1\xe8\x00\x01\xf1\xfe|\x00\x01\xf1\xe8\x00\x01\xf1\xff|\x00\x01\xf1\xe9\x00\x01\xf1\xea|\x00\x01\xf1\xe9\x00\x01\xf1\xec|\x00\x01\xf1\xe9\x00\x01\xf1\xef|\x00\x01\xf1\xe9\x00\x01\xf1\xf0|\x00\x01\xf1\xe9\x00\x01\xf1\xf2|\x00\x01\xf1\xe9\x00\x01\xf1\xf4|\x00\x01\xf1\xe9\x00\x01\xf1\xff|\x00\x01\xf1\xea\x00\x01\xf1\xe6|\x00\x01\xf1\xea\x00\x01\xf1\xe8|\x00\x01\xf1\xea\x00\x01\xf1\xea|\x00\x01\xf1\xea\x00\x01\xf1\xec|\x00\x01\xf1\xea\x00\x01\xf1\xed|\x00\x01\xf1\xea\x00\x01\xf1\xf7|\x00\x01\xf1\xea\x00\x01\xf1\xf8|\x00\x01\xf1\xea\x00\x01\xf1\xf9|\x00\x01\xf1\xea\x00\x01\xf1\xfa|\x00\x01\xf1\xeb\x00\x01\xf1\xee|\x00\x01\xf1\xeb\x00\x01\xf1\xef|\x00\x01\xf1\xeb\x00\x01\xf1\xf0|\x00\x01\xf1\xeb\x00\x01\xf1\xf2|\x00\x01\xf1\xeb\x00\x01\xf1\xf4|\x00\x01\xf1\xeb\x00\x01\xf1\xf7|\x00\x01\xf1\xec\x00\x01\xf1\xe6|\x00\x01\xf1\xec\x00\x01\xf1\xe7|\x00\x01\xf1\xec\x00\x01\xf1\xe9|\x00\x01\xf1\xec\x00\x01\xf1\xea|\x00\x01\xf1\xec\x00\x01\xf1\xeb|\x00\x01\xf1\xec\x00\x01\xf1\xec|\x00\x01\xf1\xec\x00\x01\xf1\xed|\x00\x01\xf1\xec\x00\x01\xf1\xee|\x00\x01\xf1\xec\x00\x01\xf1\xf1|\x00\x01\xf1\xec\x00\x01\xf1\xf2|\x00\x01\xf1\xec\x00\x01\xf1\xf3|\x00\x01\xf1\xec\x00\x01\xf1\xf5|\x00\x01\xf1\xec\x00\x01\xf1\xf6|\x00\x01\xf1\xec\x00\x01\xf1\xf7|\x00\x01\xf1\xec\x00\x01\xf1\xf8|\x00\x01\xf1\xec\x00\x01\xf1\xf9|\x00\x01\xf1\xec\x00\x01\xf1\xfa|\x00\x01\xf1\xec\x00\x01\xf1\xfc|\x00\x01\xf1\xec\x00\x01\xf1\xfe|\x00\x01\xf1\xed\x00\x01\xf1\xf0|\x00\x01\xf1\xed\x00\x01\xf1\xf2|\x00\x01\xf1\xed\x00\x01\xf1\xf3|\x00\x01\xf1\xed\x00\x01\xf1\xf7|\x00\x01\xf1\xed\x00\x01\xf1\xf9|\x00\x01\xf1\xed\x00\x01\xf1\xfa|\x00\x01\xf1\xee\x00\x01\xf1\xe8|\x00\x01\xf1\xee\x00\x01\xf1\xe9|\x00\x01\xf1\xee\x00\x01\xf1\xea|\x00\x01\xf1\xee\x00\x01\xf1\xf1|\x00\x01\xf1\xee\x00\x01\xf1\xf2|\x00\x01\xf1\xee\x00\x01\xf1\xf3|\x00\x01\xf1\xee\x00\x01\xf1\xf4|\x00\x01\xf1\xee\x00\x01\xf1\xf6|\x00\x01\xf1\xee\x00\x01\xf1\xf7|\x00\x01\xf1\xee\x00\x01\xf1\xf8|\x00\x01\xf1\xee\x00\x01\xf1\xf9|\x00\x01\xf1\xef\x00\x01\xf1\xea|\x00\x01\xf1\xef\x00\x01\xf1\xf2|\x00\x01\xf1\xef\x00\x01\xf1\xf4|\x00\x01\xf1\xef\x00\x01\xf1\xf5|\x00\x01\xf1\xf0\x00\x01\xf1\xea|\x00\x01\xf1\xf0\x00\x01\xf1\xec|\x00\x01\xf1\xf0\x00\x01\xf1\xed|\x00\x01\xf1\xf0\x00\x01\xf1\xee|\x00\x01\xf1\xf0\x00\x01\xf1\xf2|\x00\x01\xf1\xf0\x00\x01\xf1\xf3|\x00\x01\xf1\xf0\x00\x01\xf1\xf5|\x00\x01\xf1\xf0\x00\x01\xf1\xf7|\x00\x01\xf1\xf0\x00\x01\xf1\xfc|\x00\x01\xf1\xf0\x00\x01\xf1\xfe|\x00\x01\xf1\xf0\x00\x01\xf1\xff|\x00\x01\xf1\xf1\x00\x01\xf1\xe6|\x00\x01\xf1\xf1\x00\x01\xf1\xe7|\x00\x01\xf1\xf1\x00\x01\xf1\xe8|\x00\x01\xf1\xf1\x00\x01\xf1\xee|\x00\x01\xf1\xf1\x00\x01\xf1\xf0|\x00\x01\xf1\xf1\x00\x01\xf1\xf7|\x00\x01\xf1\xf1\x00\x01\xf1\xf8|\x00\x01\xf1\xf1\x00\x01\xf1\xf9|\x00\x01\xf1\xf1\x00\x01\xf1\xfa|\x00\x01\xf1\xf1\x00\x01\xf1\xfb|\x00\x01\xf1\xf1\x00\x01\xf1\xfe|\x00\x01\xf1\xf2\x00\x01\xf1\xe6|\x00\x01\xf1\xf2\x00\x01\xf1\xe8|\x00\x01\xf1\xf2\x00\x01\xf1\xe9|\x00\x01\xf1\xf2\x00\x01\xf1\xea|\x00\x01\xf1\xf2\x00\x01\xf1\xeb|\x00\x01\xf1\xf2\x00\x01\xf1\xec|\x00\x01\xf1\xf2\x00\x01\xf1\xed|\x00\x01\xf1\xf2\x00\x01\xf1\xf0|\x00\x01\xf1\xf2\x00\x01\xf1\xf1|\x00\x01\xf1\xf2\x00\x01\xf1\xf2|\x00\x01\xf1\xf2\x00\x01\xf1\xf3|\x00\x01\xf1\xf2\x00\x01\xf1\xf4|\x00\x01\xf1\xf2\x00\x01\xf1\xf5|\x00\x01\xf1\xf2\x00\x01\xf1\xf6|\x00\x01\xf1\xf2\x00\x01\xf1\xf7|\x00\x01\xf1\xf2\x00\x01\xf1\xf8|\x00\x01\xf1\xf2\x00\x01\xf1\xf9|\x00\x01\xf1\xf2\x00\x01\xf1\xfa|\x00\x01\xf1\xf2\x00\x01\xf1\xfb|\x00\x01\xf1\xf2\x00\x01\xf1\xfc|\x00\x01\xf1\xf2\x00\x01\xf1\xfd|\x00\x01\xf1\xf2\x00\x01\xf1\xfe|\x00\x01\xf1\xf2\x00\x01\xf1\xff|\x00\x01\xf1\xf3\x00\x01\xf1\xe6|\x00\x01\xf1\xf3\x00\x01\xf1\xe8|\x00\x01\xf1\xf3\x00\x01\xf1\xea|\x00\x01\xf1\xf3\x00\x01\xf1\xeb|\x00\x01\xf1\xf3\x00\x01\xf1\xec|\x00\x01\xf1\xf3\x00\x01\xf1\xee|\x00\x01\xf1\xf3\x00\x01\xf1\xf1|\x00\x01\xf1\xf3\x00\x01\xf1\xf4|\x00\x01\xf1\xf3\x00\x01\xf1\xf5|\x00\x01\xf1\xf3\x00\x01\xf1\xf7|\x00\x01\xf1\xf3\x00\x01\xf1\xfa|\x00\x01\xf1\xf3\x00\x01\xf1\xff|\x00\x01\xf1\xf4\x00\x01\xf1\xf2|\x00\x01\xf1\xf5\x00\x01\xf1\xe6|\x00\x01\xf1\xf5\x00\x01\xf1\xea|\x00\x01\xf1\xf5\x00\x01\xf1\xeb|\x00\x01\xf1\xf5\x00\x01\xf1\xec|\x00\x01\xf1\xf5\x00\x01\xf1\xed|\x00\x01\xf1\xf5\x00\x01\xf1\xf0|\x00\x01\xf1\xf5\x00\x01\xf1\xf1|\x00\x01\xf1\xf5\x00\x01\xf1\xf2|\x00\x01\xf1\xf5\x00\x01\xf1\xf3|\x00\x01\xf1\xf5\x00\x01\xf1\xf7|\x00\x01\xf1\xf5\x00\x01\xf1\xf8|\x00\x01\xf1\xf5\x00\x01\xf1\xf9|\x00\x01\xf1\xf5\x00\x01\xf1\xfc|\x00\x01\xf1\xf5\x00\x01\xf1\xfe|\x00\x01\xf1\xf6\x00\x01\xf1\xe6|\x00\x01\xf1\xf7\x00\x01\xf1\xea|\x00\x01\xf1\xf7\x00\x01\xf1\xf4|\x00\x01\xf1\xf7\x00\x01\xf1\xf8|\x00\x01\xf1\xf7\x00\x01\xf1\xfa|\x00\x01\xf1\xf7\x00\x01\xf1\xfc|\x00\x01\xf1\xf8\x00\x01\xf1\xe6|\x00\x01\xf1\xf8\x00\x01\xf1\xe7|\x00\x01\xf1\xf8\x00\x01\xf1\xe8|\x00\x01\xf1\xf8\x00\x01\xf1\xe9|\x00\x01\xf1\xf8\x00\x01\xf1\xea|\x00\x01\xf1\xf8\x00\x01\xf1\xec|\x00\x01\xf1\xf8\x00\x01\xf1\xed|\x00\x01\xf1\xf8\x00\x01\xf1\xee|\x00\x01\xf1\xf8\x00\x01\xf1\xef|\x00\x01\xf1\xf8\x00\x01\xf1\xf0|\x00\x01\xf1\xf8\x00\x01\xf1\xf1|\x00\x01\xf1\xf8\x00\x01\xf1\xf2|\x00\x01\xf1\xf8\x00\x01\xf1\xf3|\x00\x01\xf1\xf8\x00\x01\xf1\xf4|\x00\x01\xf1\xf8\x00\x01\xf1\xf7|\x00\x01\xf1\xf8\x00\x01\xf1\xf8|\x00\x01\xf1\xf8\x00\x01\xf1\xf9|\x00\x01\xf1\xf8\x00\x01\xf1\xfb|\x00\x01\xf1\xf8\x00\x01\xf1\xfd|\x00\x01\xf1\xf8\x00\x01\xf1\xfe|\x00\x01\xf1\xf8\x00\x01\xf1\xff|\x00\x01\xf1\xf9\x00\x01\xf1\xe6|\x00\x01\xf1\xf9\x00\x01\xf1\xe8|\x00\x01\xf1\xf9\x00\x01\xf1\xe9|\x00\x01\xf1\xf9\x00\x01\xf1\xeb|\x00\x01\xf1\xf9\x00\x01\xf1\xec|\x00\x01\xf1\xf9\x00\x01\xf1\xed|\x00\x01\xf1\xf9\x00\x01\xf1\xef|\x00\x01\xf1\xf9\x00\x01\xf1\xf0|\x00\x01\xf1\xf9\x00\x01\xf1\xf1|\x00\x01\xf1\xf9\x00\x01\xf1\xf2|\x00\x01\xf1\xf9\x00\x01\xf1\xf3|\x00\x01\xf1\xf9\x00\x01\xf1\xf4|\x00\x01\xf1\xf9\x00\x01\xf1\xf7|\x00\x01\xf1\xf9\x00\x01\xf1\xf9|\x00\x01\xf1\xf9\x00\x01\xf1\xfb|\x00\x01\xf1\xf9\x00\x01\xf1\xfc|\x00\x01\xf1\xf9\x00\x01\xf1\xff|\x00\x01\xf1\xfa\x00\x01\xf1\xe6|\x00\x01\xf1\xfa\x00\x01\xf1\xec|\x00\x01\xf1\xfa\x00\x01\xf1\xf2|\x00\x01\xf1\xfa\x00\x01\xf1\xf3|\x00\x01\xf1\xfa\x00\x01\xf1\xf8|\x00\x01\xf1\xfa\x00\x01\xf1\xfe|\x00\x01\xf1\xfa\x00\x01\xf1\xff|\x00\x01\xf1\xfb\x00\x01\xf1\xe6|\x00\x01\xf1\xfb\x00\x01\xf1\xe8|\x00\x01\xf1\xfb\x00\x01\xf1\xea|\x00\x01\xf1\xfb\x00\x01\xf1\xec|\x00\x01\xf1\xfb\x00\x01\xf1\xee|\x00\x01\xf1\xfb\x00\x01\xf1\xf3|\x00\x01\xf1\xfb\x00\x01\xf1\xfa|\x00\x01\xf1\xfc\x00\x01\xf1\xeb|\x00\x01\xf1\xfc\x00\x01\xf1\xf8|\x00\x01\xf1\xfd\x00\x01\xf1\xf0|\x00\x01\xf1\xfe\x00\x01\xf1\xea|\x00\x01\xf1\xfe\x00\x01\xf1\xf9|\x00\x01\xf1\xff\x00\x01\xf1\xe6|\x00\x01\xf1\xff\x00\x01\xf1\xf2|\x00\x01\xf1\xff\x00\x01\xf1\xfc|\x00\x01(?:\x00\x00|\xf0\xcf|\xf1\x8e|\xf1\x91|\xf1\x92|\xf1\x93|\xf1\x94|\xf1\x95|\xf1\x96|\xf1\x97|\xf1\x98|\xf1\x99|\xf1\x9a|\xf1\xe6|\xf1\xe7|\xf1\xe8|\xf1\xe9|\xf1\xea|\xf1\xeb|\xf1\xec|\xf1\xed|\xf1\xee|\xf1\xef|\xf1\xf0|\xf1\xf1|\xf1\xf2|\xf1\xf3|\xf1\xf4|\xf1\xf5|\xf1\xf6|\xf1\xf7|\xf1\xf8|\xf1\xf9|\xf1\xfa|\xf1\xfb|\xf1\xfc|\xf1\xfd|\xf1\xfe|\xf1\xff|\xf2\x01|\xf2\x32|\xf2\x33|\xf2\x34|\xf2\x35|\xf2\x36|\xf2\x38|\xf2\x39|\xf2\x3a|\xf2\x50|\xf2\x51|\xf3\x00|\xf3\x01|\xf3\x02|\xf3\x03|\xf3\x04|\xf3\x05|\xf3\x06|\xf3\x07|\xf3\x08|\xf3\x09|\xf3\x0a|\xf3\x0b|\xf3\x0c|\xf3\x0d|\xf3\x0e|\xf3\x0f|\xf3\x10|\xf3\x11|\xf3\x12|\xf3\x13|\xf3\x14|\xf3\x15|\xf3\x16|\xf3\x17|\xf3\x18|\xf3\x19|\xf3\x1a|\xf3\x1b|\xf3\x1c|\xf3\x1d|\xf3\x1e|\xf3\x1f|\xf3\x20|\xf3\x2d|\xf3\x2e|\xf3\x2f|\xf3\x30|\xf3\x31|\xf3\x32|\xf3\x33|\xf3\x34|\xf3\x35|\xf3\x37|\xf3\x38|\xf3\x39|\xf3\x3a|\xf3\x3b|\xf3\x3c|\xf3\x3d|\xf3\x3e|\xf3\x3f|\xf3\x40|\xf3\x41|\xf3\x42|\xf3\x43|\xf3\x44|\xf3\x45|\xf3\x46|\xf3\x47|\xf3\x48|\xf3\x49|\xf3\x4a|\xf3\x4b|\xf3\x4c|\xf3\x4d|\xf3\x4e|\xf3\x4f|\xf3\x50|\xf3\x51|\xf3\x52|\xf3\x53|\xf3\x54|\xf3\x55|\xf3\x56|\xf3\x57|\xf3\x58|\xf3\x59|\xf3\x5a|\xf3\x5b|\xf3\x5c|\xf3\x5d|\xf3\x5e|\xf3\x5f|\xf3\x60|\xf3\x61|\xf3\x62|\xf3\x63|\xf3\x64|\xf3\x65|\xf3\x66|\xf3\x67|\xf3\x68|\xf3\x69|\xf3\x6a|\xf3\x6b|\xf3\x6c|\xf3\x6d|\xf3\x6e|\xf3\x6f|\xf3\x70|\xf3\x71|\xf3\x72|\xf3\x73|\xf3\x74|\xf3\x75|\xf3\x76|\xf3\x77|\xf3\x78|\xf3\x79|\xf3\x7a|\xf3\x7b|\xf3\x7c|\xf3\x7e|\xf3\x7f|\xf3\x80|\xf3\x81|\xf3\x82|\xf3\x83|\xf3\x84|\xf3\x86|\xf3\x87|\xf3\x88|\xf3\x89|\xf3\x8a|\xf3\x8b|\xf3\x8c|\xf3\x8d|\xf3\x8e|\xf3\x8f|\xf3\x90|\xf3\x91|\xf3\x92|\xf3\x93|\xf3\xa0|\xf3\xa1|\xf3\xa2|\xf3\xa3|\xf3\xa4|\xf3\xa5|\xf3\xa6|\xf3\xa7|\xf3\xa8|\xf3\xa9|\xf3\xaa|\xf3\xab|\xf3\xac|\xf3\xad|\xf3\xae|\xf3\xaf|\xf3\xb0|\xf3\xb1|\xf3\xb2|\xf3\xb3|\xf3\xb4|\xf3\xb5|\xf3\xb6|\xf3\xb7|\xf3\xb8|\xf3\xb9|\xf3\xba|\xf3\xbb|\xf3\xbc|\xf3\xbd|\xf3\xbe|\xf3\xbf|\xf3\xc0|\xf3\xc1|\xf3\xc5|\xf3\xc6|\xf3\xc8|\xf3\xc9|\xf3\xcf|\xf3\xd0|\xf3\xd1|\xf3\xd2|\xf3\xd3|\xf3\xe0|\xf3\xe1|\xf3\xe2|\xf3\xe3|\xf3\xe4|\xf3\xe5|\xf3\xe6|\xf3\xe7|\xf3\xe8|\xf3\xe9|\xf3\xea|\xf3\xeb|\xf3\xec|\xf3\xed|\xf3\xee|\xf3\xef|\xf3\xf0|\xf3\xf4|\xf3\xf8|\xf3\xf9|\xf3\xfa|\xf3\xfb|\xf3\xfc|\xf3\xfd|\xf3\xfe|\xf3\xff|\xf4\x00|\xf4\x01|\xf4\x02|\xf4\x03|\xf4\x04|\xf4\x05|\xf4\x06|\xf4\x07|\xf4\x08|\xf4\x09|\xf4\x0a|\xf4\x0b|\xf4\x0c|\xf4\x0d|\xf4\x0e|\xf4\x0f|\xf4\x10|\xf4\x11|\xf4\x12|\xf4\x13|\xf4\x14|\xf4\x15|\xf4\x16|\xf4\x17|\xf4\x18|\xf4\x19|\xf4\x1a|\xf4\x1b|\xf4\x1c|\xf4\x1d|\xf4\x1e|\xf4\x1f|\xf4\x20|\xf4\x21|\xf4\x22|\xf4\x23|\xf4\x24|\xf4\x25|\xf4\x26|\xf4\x27|\xf4\x28|\xf4\x29|\xf4\x2a|\xf4\x2b|\xf4\x2c|\xf4\x2d|\xf4\x2e|\xf4\x2f|\xf4\x30|\xf4\x31|\xf4\x32|\xf4\x33|\xf4\x34|\xf4\x35|\xf4\x36|\xf4\x37|\xf4\x38|\xf4\x39|\xf4\x3a|\xf4\x3b|\xf4\x3c|\xf4\x3d|\xf4\x3e|\xf4\x40|\xf4\x44|\xf4\x45|\xf4\x51|\xf4\x52|\xf4\x53|\xf4\x54|\xf4\x55|\xf4\x56|\xf4\x57|\xf4\x58|\xf4\x59|\xf4\x5a|\xf4\x5b|\xf4\x5c|\xf4\x5d|\xf4\x5e|\xf4\x5f|\xf4\x60|\xf4\x61|\xf4\x62|\xf4\x63|\xf4\x64|\xf4\x65|\xf4\x6a|\xf4\x6b|\xf4\x6c|\xf4\x6d|\xf4\x6f|\xf4\x79|\xf4\x7a|\xf4\x7b|\xf4\x7d|\xf4\x7e|\xf4\x7f|\xf4\x80|\xf4\x84|\xf4\x88|\xf4\x89|\xf4\x8a|\xf4\x8b|\xf4\x8c|\xf4\x8d|\xf4\x8e|\xf4\x8f|\xf4\x90|\xf4\x91|\xf4\x92|\xf4\x93|\xf4\x94|\xf4\x95|\xf4\x96|\xf4\x97|\xf4\x98|\xf4\x99|\xf4\x9a|\xf4\x9b|\xf4\x9c|\xf4\x9d|\xf4\x9e|\xf4\x9f|\xf4\xa0|\xf4\xa1|\xf4\xa2|\xf4\xa3|\xf4\xa4|\xf4\xa5|\xf4\xa6|\xf4\xa7|\xf4\xa8|\xf4\xa9|\xf4\xab|\xf4\xac|\xf4\xad|\xf4\xae|\xf4\xaf|\xf4\xb0|\xf4\xb1|\xf4\xb2|\xf4\xb3|\xf4\xb4|\xf4\xb5|\xf4\xb6|\xf4\xb7|\xf4\xb8|\xf4\xb9|\xf4\xba|\xf4\xbb|\xf4\xbc|\xf4\xbd|\xf4\xbe|\xf4\xbf|\xf4\xc0|\xf4\xc1|\xf4\xc2|\xf4\xc3|\xf4\xc4|\xf4\xc5|\xf4\xc6|\xf4\xc7|\xf4\xc8|\xf4\xc9|\xf4\xca|\xf4\xcb|\xf4\xcc|\xf4\xcd|\xf4\xce|\xf4\xcf|\xf4\xd0|\xf4\xd1|\xf4\xd2|\xf4\xd3|\xf4\xd4|\xf4\xd5|\xf4\xd6|\xf4\xd7|\xf4\xd8|\xf4\xd9|\xf4\xda|\xf4\xdb|\xf4\xdc|\xf4\xdd|\xf4\xde|\xf4\xdf|\xf4\xe0|\xf4\xe1|\xf4\xe2|\xf4\xe3|\xf4\xe4|\xf4\xe5|\xf4\xe6|\xf4\xe7|\xf4\xe8|\xf4\xe9|\xf4\xea|\xf4\xeb|\xf4\xec|\xf4\xed|\xf4\xee|\xf4\xef|\xf4\xf0|\xf4\xf1|\xf4\xf2|\xf4\xf3|\xf4\xf4|\xf4\xf5|\xf4\xf6|\xf4\xf7|\xf4\xf8|\xf4\xf9|\xf4\xfa|\xf4\xfb|\xf4\xfc|\xf4\xff|\xf5\x00|\xf5\x01|\xf5\x02|\xf5\x03|\xf5\x04|\xf5\x05|\xf5\x06|\xf5\x07|\xf5\x08|\xf5\x09|\xf5\x0a|\xf5\x0b|\xf5\x0c|\xf5\x0d|\xf5\x0e|\xf5\x0f|\xf5\x10|\xf5\x11|\xf5\x12|\xf5\x13|\xf5\x14|\xf5\x15|\xf5\x16|\xf5\x17|\xf5\x18|\xf5\x19|\xf5\x1a|\xf5\x1b|\xf5\x1c|\xf5\x1d|\xf5\x1e|\xf5\x1f|\xf5\x20|\xf5\x21|\xf5\x22|\xf5\x23|\xf5\x24|\xf5\x25|\xf5\x26|\xf5\x27|\xf5\x28|\xf5\x29|\xf5\x2a|\xf5\x2b|\xf5\x2c|\xf5\x2d|\xf5\x2e|\xf5\x2f|\xf5\x30|\xf5\x31|\xf5\x32|\xf5\x33|\xf5\x34|\xf5\x35|\xf5\x36|\xf5\x37|\xf5\x38|\xf5\x39|\xf5\x3a|\xf5\x3b|\xf5\x3c|\xf5\x3d|\xf5\x4b|\xf5\x4c|\xf5\x4d|\xf5\x4e|\xf5\x50|\xf5\x51|\xf5\x52|\xf5\x53|\xf5\x54|\xf5\x55|\xf5\x56|\xf5\x57|\xf5\x58|\xf5\x59|\xf5\x5a|\xf5\x5b|\xf5\x5c|\xf5\x5d|\xf5\x5e|\xf5\x5f|\xf5\x60|\xf5\x61|\xf5\x62|\xf5\x63|\xf5\x64|\xf5\x65|\xf5\x66|\xf5\x67|\xf5\xa4|\xf5\xfb|\xf5\xfc|\xf5\xfd|\xf5\xfe|\xf5\xff|\xf6\x00|\xf6\x01|\xf6\x02|\xf6\x03|\xf6\x04|\xf6\x05|\xf6\x06|\xf6\x07|\xf6\x08|\xf6\x09|\xf6\x0a|\xf6\x0b|\xf6\x0c|\xf6\x0d|\xf6\x0e|\xf6\x0f|\xf6\x10|\xf6\x11|\xf6\x12|\xf6\x13|\xf6\x14|\xf6\x15|\xf6\x16|\xf6\x17|\xf6\x18|\xf6\x19|\xf6\x1a|\xf6\x1b|\xf6\x1c|\xf6\x1d|\xf6\x1e|\xf6\x1f|\xf6\x20|\xf6\x21|\xf6\x22|\xf6\x23|\xf6\x24|\xf6\x25|\xf6\x26|\xf6\x27|\xf6\x28|\xf6\x29|\xf6\x2a|\xf6\x2b|\xf6\x2c|\xf6\x2d|\xf6\x2e|\xf6\x2f|\xf6\x30|\xf6\x31|\xf6\x32|\xf6\x33|\xf6\x34|\xf6\x35|\xf6\x36|\xf6\x37|\xf6\x38|\xf6\x39|\xf6\x3a|\xf6\x3b|\xf6\x3c|\xf6\x3d|\xf6\x3e|\xf6\x3f|\xf6\x40|\xf6\x41|\xf6\x42|\xf6\x43|\xf6\x44|\xf6\x48|\xf6\x49|\xf6\x4a|\xf6\x80|\xf6\x81|\xf6\x82|\xf6\x83|\xf6\x84|\xf6\x85|\xf6\x86|\xf6\x87|\xf6\x88|\xf6\x89|\xf6\x8a|\xf6\x8b|\xf6\x8c|\xf6\x8d|\xf6\x8e|\xf6\x8f|\xf6\x90|\xf6\x91|\xf6\x92|\xf6\x93|\xf6\x94|\xf6\x95|\xf6\x96|\xf6\x97|\xf6\x98|\xf6\x99|\xf6\x9a|\xf6\x9b|\xf6\x9c|\xf6\x9d|\xf6\x9e|\xf6\x9f|\xf6\xa0|\xf6\xa1|\xf6\xa2|\xf6\xa4|\xf6\xa5|\xf6\xa6|\xf6\xa7|\xf6\xa8|\xf6\xa9|\xf6\xaa|\xf6\xab|\xf6\xac|\xf6\xad|\xf6\xae|\xf6\xaf|\xf6\xb0|\xf6\xb1|\xf6\xb2|\xf6\xb3|\xf6\xb7|\xf6\xb8|\xf6\xb9|\xf6\xba|\xf6\xbb|\xf6\xbc|\xf6\xbd|\xf6\xbe|\xf6\xbf|\xf6\xc1|\xf6\xc2|\xf6\xc3|\xf6\xc4|\xf6\xc5|\xf6\xd0|\xf6\xd1|\xf6\xd2|\xf6\xeb|\xf6\xec|\xf6\xf4|\xf6\xf5|\xf6\xf6|\xf6\xf7|\xf6\xf8|\xf9\x10|\xf9\x11|\xf9\x12|\xf9\x13|\xf9\x14|\xf9\x15|\xf9\x16|\xf9\x17|\xf9\x1d|\xf9\x20|\xf9\x21|\xf9\x22|\xf9\x23|\xf9\x24|\xf9\x25|\xf9\x27|\xf9\x28|\xf9\x29|\xf9\x2a|\xf9\x2b|\xf9\x2c|\xf9\x2d|\xf9\x2e|\xf9\x2f|\xf9\x3a|\xf9\x3c|\xf9\x40|\xf9\x41|\xf9\x42|\xf9\x43|\xf9\x44|\xf9\x45|\xf9\x47|\xf9\x48|\xf9\x49|\xf9\x4a|\xf9\x4b|\xf9\x4c|\xf9\x50|\xf9\x51|\xf9\x52|\xf9\x53|\xf9\x54|\xf9\x55|\xf9\x56|\xf9\x57|\xf9\x58|\xf9\x59|\xf9\x5a|\xf9\x5b|\xf9\x5c|\xf9\x5d|\xf9\x5e|\xf9\x5f|\xf9\x60|\xf9\x61|\xf9\x62|\xf9\x63|\xf9\x64|\xf9\x65|\xf9\x66|\xf9\x67|\xf9\x68|\xf9\x69|\xf9\x6a|\xf9\x6b|\xf9\x80|\xf9\x81|\xf9\x82|\xf9\x83|\xf9\x84|\xf9\x85|\xf9\x86|\xf9\x87|\xf9\x88|\xf9\x89|\xf9\x8a|\xf9\x8b|\xf9\x8c|\xf9\x8d|\xf9\x8e|\xf9\x8f|\xf9\x90|\xf9\x91|\xf9\x92|\xf9\x93|\xf9\x94|\xf9\x95|\xf9\x96|\xf9\x97|\xf9\xc0|\xf9\xd0|\xf9\xde|\xf9\xdf|\xf9\xe0|\xf9\xe1|\xf9\xe2|\xf9\xe3|\xf9\xe4|\xf9\xe5|\xf9\xe6)|(?:(?:\x00){2}(?:\x23\xe9|\x23\xea|\x23\xeb|\x23\xec|\x23\xf0|\x23\xf3|\x26\x40|\x26\x42|\x26\x95|\x26\xce|\x27\x05|\x27\x28|\x27\x4c|\x27\x4e|\x27\x53|\x27\x54|\x27\x55|\x27\x95|\x27\x96|\x27\x97|\x27\xb0|\x27\xbf|\xe5\x0a))|(?:\x00\x01(?:\xf0\x04|\xf1\x70|\xf1\x71|\xf1\x7e|\xf1\x7f|\xf2\x02|\xf2\x1a|\xf2\x2f|\xf2\x37|\xf3\x21|\xf3\x24|\xf3\x25|\xf3\x26|\xf3\x27|\xf3\x28|\xf3\x29|\xf3\x2a|\xf3\x2b|\xf3\x2c|\xf3\x36|\xf3\x7d|\xf3\x96|\xf3\x97|\xf3\x99|\xf3\x9a|\xf3\x9b|\xf3\x9e|\xf3\x9f|\xf3\xcd|\xf3\xce|\xf3\xd4|\xf3\xd5|\xf3\xd6|\xf3\xd7|\xf3\xd8|\xf3\xd9|\xf3\xda|\xf3\xdb|\xf3\xdc|\xf3\xdd|\xf3\xde|\xf3\xdf|\xf3\xf3|\xf3\xf5|\xf3\xf7|\xf4\x3f|\xf4\x41|\xf4\xfd|\xf5\x49|\xf5\x4a|\xf5\x6f|\xf5\x70|\xf5\x73|\xf5\x76|\xf5\x77|\xf5\x78|\xf5\x79|\xf5\x87|\xf5\x8a|\xf5\x8b|\xf5\x8c|\xf5\x8d|\xf5\xa5|\xf5\xa8|\xf5\xb1|\xf5\xb2|\xf5\xbc|\xf5\xc2|\xf5\xc3|\xf5\xc4|\xf5\xd1|\xf5\xd2|\xf5\xd3|\xf5\xdc|\xf5\xdd|\xf5\xde|\xf5\xe1|\xf5\xe3|\xf5\xe8|\xf5\xef|\xf5\xf3|\xf5\xfa|\xf6\xcb|\xf6\xcd|\xf6\xce|\xf6\xcf|\xf6\xe0|\xf6\xe1|\xf6\xe2|\xf6\xe3|\xf6\xe4|\xf6\xe5|\xf6\xe9|\xf6\xf0|\xf6\xf3)|(?:(?:\x00){3}(?:\xa9|\xae)|(?:\x00){2}(?:\x20\x3c|\x20\x49|\x21\x22|\x21\x39|\x21\x94|\x21\x95|\x21\x96|\x21\x97|\x21\x98|\x21\x99|\x21\xa9|\x21\xaa|\x23\x1a|\x23\x1b|\x23\x28|\x23\xcf|\x23\xed|\x23\xee|\x23\xef|\x23\xf1|\x23\xf2|\x23\xf8|\x23\xf9|\x23\xfa|\x24\xc2|\x25\xaa|\x25\xab|\x25\xb6|\x25\xc0|\x25\xfb|\x25\xfc|\x25\xfd|\x25\xfe|\x26\x00|\x26\x01|\x26\x02|\x26\x03|\x26\x04|\x26\x0e|\x26\x11|\x26\x14|\x26\x15|\x26\x18|\x26\x20|\x26\x22|\x26\x23|\x26\x26|\x26\x2a|\x26\x2e|\x26\x2f|\x26\x38|\x26\x39|\x26\x3a|\x26\x48|\x26\x49|\x26\x4a|\x26\x4b|\x26\x4c|\x26\x4d|\x26\x4e|\x26\x4f|\x26\x50|\x26\x51|\x26\x52|\x26\x53|\x26\x60|\x26\x63|\x26\x65|\x26\x66|\x26\x68|\x26\x7b|\x26\x7f|\x26\x92|\x26\x93|\x26\x94|\x26\x96|\x26\x97|\x26\x99|\x26\x9b|\x26\x9c|\x26\xa0|\x26\xa1|\x26\xaa|\x26\xab|\x26\xb0|\x26\xb1|\x26\xbd|\x26\xbe|\x26\xc4|\x26\xc5|\x26\xc8|\x26\xcf|\x26\xd1|\x26\xd3|\x26\xd4|\x26\xe9|\x26\xea|\x26\xf0|\x26\xf1|\x26\xf2|\x26\xf3|\x26\xf4|\x26\xf5|\x26\xf8|\x26\xfa|\x26\xfd|\x27\x02|\x27\x08|\x27\x09|\x27\x0f|\x27\x12|\x27\x14|\x27\x16|\x27\x1d|\x27\x21|\x27\x33|\x27\x34|\x27\x44|\x27\x47|\x27\x57|\x27\x63|\x27\x64|\x27\xa1|\x29\x34|\x29\x35|\x2b\x05|\x2b\x06|\x2b\x07|\x2b\x1b|\x2b\x1c|\x2b\x50|\x2b\x55|\x30\x30|\x30\x3d|\x32\x97|\x32\x99)))(?:\x00\x00\xfe\x0f|(?!\x00\x00\xfe\x0e)))/';
	$entities = '/(&#x1f468;|&#x1f469;(?:&#x1f3fb;|&#x1f3fc;|&#x1f3fd;|&#x1f3fe;|&#x1f3ff;)?&#x200d;(?:&#x2695;&#xfe0f;|&#x2696;&#xfe0f;|&#x2708;&#xfe0f;|&#x1f33e;|&#x1f373;|&#x1f393;|&#x1f3a4;|&#x1f3a8;|&#x1f3eb;|&#x1f3ed;|&#x1f4bb;|&#x1f4bc;|&#x1f527;|&#x1f52c;|&#x1f680;|&#x1f692;)|(?:&#x1f3cb;|&#x1f3cc;|&#x1f575;|&#x26f9;)(?:&#xfe0f;|&#x1f3fb;|&#x1f3fc;|&#x1f3fd;|&#x1f3fe;|&#x1f3ff;)&#x200d;&#x2640;&#xfe0f;|&#x200d;&#x2642;&#xfe0f;|(?:&#x1f3c3;|&#x1f3c4;|&#x1f3ca;|&#x1f46e;|&#x1f471;|&#x1f473;|&#x1f477;|&#x1f481;|&#x1f482;|&#x1f486;|&#x1f487;|&#x1f645;|&#x1f646;|&#x1f647;|&#x1f64b;|&#x1f64d;|&#x1f64e;|&#x1f6a3;|&#x1f6b4;|&#x1f6b5;|&#x1f6b6;|&#x1f926;|&#x1f937;|&#x1f938;|&#x1f939;|&#x1f93d;|&#x1f93e;|&#x1f9d6;|&#x1f9d7;|&#x1f9d8;|&#x1f9d9;|&#x1f9da;|&#x1f9db;|&#x1f9dc;|&#x1f9dd;)(?:&#x1f3fb;|&#x1f3fc;|&#x1f3fd;|&#x1f3fe;|&#x1f3ff;)?&#x200d;&#x2640;&#xfe0f;|&#x200d;&#x2642;&#xfe0f;|&#x1f468;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;|&#x1f468;&#x200d;&#x1f468;&#x200d;&#x1f466;&#x200d;&#x1f466;|&#x1f468;&#x200d;&#x1f468;&#x200d;&#x1f467;&#x200d;&#x1f466;|&#x1f468;&#x200d;&#x1f468;&#x200d;&#x1f467;&#x200d;&#x1f467;|&#x1f468;&#x200d;&#x1f469;&#x200d;&#x1f466;&#x200d;&#x1f466;|&#x1f468;&#x200d;&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f466;|&#x1f468;&#x200d;&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f467;|&#x1f469;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f468;|&#x1f469;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f48b;&#x200d;&#x1f469;|&#x1f469;&#x200d;&#x1f469;&#x200d;&#x1f466;&#x200d;&#x1f466;|&#x1f469;&#x200d;&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f466;|&#x1f469;&#x200d;&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f467;|&#x1f468;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;|&#x1f468;&#x200d;&#x1f466;&#x200d;&#x1f466;|&#x1f468;&#x200d;&#x1f467;&#x200d;&#x1f466;|&#x1f468;&#x200d;&#x1f467;&#x200d;&#x1f467;|&#x1f468;&#x200d;&#x1f468;&#x200d;&#x1f466;|&#x1f468;&#x200d;&#x1f468;&#x200d;&#x1f467;|&#x1f468;&#x200d;&#x1f469;&#x200d;&#x1f466;|&#x1f468;&#x200d;&#x1f469;&#x200d;&#x1f467;|&#x1f469;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f468;|&#x1f469;&#x200d;&#x2764;&#xfe0f;&#x200d;&#x1f469;|&#x1f469;&#x200d;&#x1f466;&#x200d;&#x1f466;|&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f466;|&#x1f469;&#x200d;&#x1f467;&#x200d;&#x1f467;|&#x1f469;&#x200d;&#x1f469;&#x200d;&#x1f466;|&#x1f469;&#x200d;&#x1f469;&#x200d;&#x1f467;|&#x1f3f3;&#xfe0f;&#x200d;&#x1f308;|&#x1f3f4;&#x200d;&#x2620;&#xfe0f;|&#x1f441;&#x200d;&#x1f5e8;|&#x1f468;&#x200d;&#x1f466;|&#x1f468;&#x200d;&#x1f467;|&#x1f469;&#x200d;&#x1f466;|&#x1f469;&#x200d;&#x1f467;|&#x1f46f;&#x200d;&#x2640;&#xfe0f;|&#x1f46f;&#x200d;&#x2642;&#xfe0f;|&#x1f93c;&#x200d;&#x2640;&#xfe0f;|&#x1f93c;&#x200d;&#x2642;&#xfe0f;|&#x1f9de;&#x200d;&#x2640;&#xfe0f;|&#x1f9de;&#x200d;&#x2642;&#xfe0f;|&#x1f9df;&#x200d;&#x2640;&#xfe0f;|&#x1f9df;&#x200d;&#x2642;&#xfe0f;|(?:(?:&#x0023;|&#x002a;|&#x30;|&#x31;|&#x32;|&#x33;|&#x34;|&#x35;|&#x36;|&#x37;|&#x38;|&#x39;))&#xfe0f;?&#x20e3;|(?:(?:&#x1f3cb;|&#x1f3cc;|&#x1f574;|&#x1f575;|&#x1f590;|(?:&#x261d;|&#x26f7;|&#x26f9;|&#x270c;|&#x270d;))(?:&#xfe0f;|(?!&#xfe0e;))|&#x1f385;|&#x1f3c2;|&#x1f3c3;|&#x1f3c4;|&#x1f3c7;|&#x1f3ca;|&#x1f442;|&#x1f443;|&#x1f446;|&#x1f447;|&#x1f448;|&#x1f449;|&#x1f44a;|&#x1f44b;|&#x1f44c;|&#x1f44d;|&#x1f44e;|&#x1f44f;|&#x1f450;|&#x1f466;|&#x1f467;|&#x1f468;|&#x1f469;|&#x1f46e;|&#x1f470;|&#x1f471;|&#x1f472;|&#x1f473;|&#x1f474;|&#x1f475;|&#x1f476;|&#x1f477;|&#x1f478;|&#x1f47c;|&#x1f481;|&#x1f482;|&#x1f483;|&#x1f485;|&#x1f486;|&#x1f487;|&#x1f4aa;|&#x1f57a;|&#x1f595;|&#x1f596;|&#x1f645;|&#x1f646;|&#x1f647;|&#x1f64b;|&#x1f64c;|&#x1f64d;|&#x1f64e;|&#x1f64f;|&#x1f6a3;|&#x1f6b4;|&#x1f6b5;|&#x1f6b6;|&#x1f6c0;|&#x1f6cc;|&#x1f918;|&#x1f919;|&#x1f91a;|&#x1f91b;|&#x1f91c;|&#x1f91e;|&#x1f91f;|&#x1f926;|&#x1f930;|&#x1f931;|&#x1f932;|&#x1f933;|&#x1f934;|&#x1f935;|&#x1f936;|&#x1f937;|&#x1f938;|&#x1f939;|&#x1f93d;|&#x1f93e;|&#x1f9d1;|&#x1f9d2;|&#x1f9d3;|&#x1f9d4;|&#x1f9d5;|&#x1f9d6;|&#x1f9d7;|&#x1f9d8;|&#x1f9d9;|&#x1f9da;|&#x1f9db;|&#x1f9dc;|&#x1f9dd;|(?:&#x270a;|&#x270b;))(?:&#x1f3fb;|&#x1f3fc;|&#x1f3fd;|&#x1f3fe;|&#x1f3ff;|)|&#x1f3f4;&#xe0067;&#xe0062;&#xe0065;&#xe006e;&#xe0067;&#xe007f;|&#x1f3f4;&#xe0067;&#xe0062;&#xe0073;&#xe0063;&#xe0074;&#xe007f;|&#x1f3f4;&#xe0067;&#xe0062;&#xe0077;&#xe006c;&#xe0073;&#xe007f;|&#x1f1e6;&#x1f1e8;|&#x1f1e6;&#x1f1e9;|&#x1f1e6;&#x1f1ea;|&#x1f1e6;&#x1f1eb;|&#x1f1e6;&#x1f1ec;|&#x1f1e6;&#x1f1ee;|&#x1f1e6;&#x1f1f1;|&#x1f1e6;&#x1f1f2;|&#x1f1e6;&#x1f1f4;|&#x1f1e6;&#x1f1f6;|&#x1f1e6;&#x1f1f7;|&#x1f1e6;&#x1f1f8;|&#x1f1e6;&#x1f1f9;|&#x1f1e6;&#x1f1fa;|&#x1f1e6;&#x1f1fc;|&#x1f1e6;&#x1f1fd;|&#x1f1e6;&#x1f1ff;|&#x1f1e7;&#x1f1e6;|&#x1f1e7;&#x1f1e7;|&#x1f1e7;&#x1f1e9;|&#x1f1e7;&#x1f1ea;|&#x1f1e7;&#x1f1eb;|&#x1f1e7;&#x1f1ec;|&#x1f1e7;&#x1f1ed;|&#x1f1e7;&#x1f1ee;|&#x1f1e7;&#x1f1ef;|&#x1f1e7;&#x1f1f1;|&#x1f1e7;&#x1f1f2;|&#x1f1e7;&#x1f1f3;|&#x1f1e7;&#x1f1f4;|&#x1f1e7;&#x1f1f6;|&#x1f1e7;&#x1f1f7;|&#x1f1e7;&#x1f1f8;|&#x1f1e7;&#x1f1f9;|&#x1f1e7;&#x1f1fb;|&#x1f1e7;&#x1f1fc;|&#x1f1e7;&#x1f1fe;|&#x1f1e7;&#x1f1ff;|&#x1f1e8;&#x1f1e6;|&#x1f1e8;&#x1f1e8;|&#x1f1e8;&#x1f1e9;|&#x1f1e8;&#x1f1eb;|&#x1f1e8;&#x1f1ec;|&#x1f1e8;&#x1f1ed;|&#x1f1e8;&#x1f1ee;|&#x1f1e8;&#x1f1f0;|&#x1f1e8;&#x1f1f1;|&#x1f1e8;&#x1f1f2;|&#x1f1e8;&#x1f1f3;|&#x1f1e8;&#x1f1f4;|&#x1f1e8;&#x1f1f5;|&#x1f1e8;&#x1f1f7;|&#x1f1e8;&#x1f1fa;|&#x1f1e8;&#x1f1fb;|&#x1f1e8;&#x1f1fc;|&#x1f1e8;&#x1f1fd;|&#x1f1e8;&#x1f1fe;|&#x1f1e8;&#x1f1ff;|&#x1f1e9;&#x1f1ea;|&#x1f1e9;&#x1f1ec;|&#x1f1e9;&#x1f1ef;|&#x1f1e9;&#x1f1f0;|&#x1f1e9;&#x1f1f2;|&#x1f1e9;&#x1f1f4;|&#x1f1e9;&#x1f1ff;|&#x1f1ea;&#x1f1e6;|&#x1f1ea;&#x1f1e8;|&#x1f1ea;&#x1f1ea;|&#x1f1ea;&#x1f1ec;|&#x1f1ea;&#x1f1ed;|&#x1f1ea;&#x1f1f7;|&#x1f1ea;&#x1f1f8;|&#x1f1ea;&#x1f1f9;|&#x1f1ea;&#x1f1fa;|&#x1f1eb;&#x1f1ee;|&#x1f1eb;&#x1f1ef;|&#x1f1eb;&#x1f1f0;|&#x1f1eb;&#x1f1f2;|&#x1f1eb;&#x1f1f4;|&#x1f1eb;&#x1f1f7;|&#x1f1ec;&#x1f1e6;|&#x1f1ec;&#x1f1e7;|&#x1f1ec;&#x1f1e9;|&#x1f1ec;&#x1f1ea;|&#x1f1ec;&#x1f1eb;|&#x1f1ec;&#x1f1ec;|&#x1f1ec;&#x1f1ed;|&#x1f1ec;&#x1f1ee;|&#x1f1ec;&#x1f1f1;|&#x1f1ec;&#x1f1f2;|&#x1f1ec;&#x1f1f3;|&#x1f1ec;&#x1f1f5;|&#x1f1ec;&#x1f1f6;|&#x1f1ec;&#x1f1f7;|&#x1f1ec;&#x1f1f8;|&#x1f1ec;&#x1f1f9;|&#x1f1ec;&#x1f1fa;|&#x1f1ec;&#x1f1fc;|&#x1f1ec;&#x1f1fe;|&#x1f1ed;&#x1f1f0;|&#x1f1ed;&#x1f1f2;|&#x1f1ed;&#x1f1f3;|&#x1f1ed;&#x1f1f7;|&#x1f1ed;&#x1f1f9;|&#x1f1ed;&#x1f1fa;|&#x1f1ee;&#x1f1e8;|&#x1f1ee;&#x1f1e9;|&#x1f1ee;&#x1f1ea;|&#x1f1ee;&#x1f1f1;|&#x1f1ee;&#x1f1f2;|&#x1f1ee;&#x1f1f3;|&#x1f1ee;&#x1f1f4;|&#x1f1ee;&#x1f1f6;|&#x1f1ee;&#x1f1f7;|&#x1f1ee;&#x1f1f8;|&#x1f1ee;&#x1f1f9;|&#x1f1ef;&#x1f1ea;|&#x1f1ef;&#x1f1f2;|&#x1f1ef;&#x1f1f4;|&#x1f1ef;&#x1f1f5;|&#x1f1f0;&#x1f1ea;|&#x1f1f0;&#x1f1ec;|&#x1f1f0;&#x1f1ed;|&#x1f1f0;&#x1f1ee;|&#x1f1f0;&#x1f1f2;|&#x1f1f0;&#x1f1f3;|&#x1f1f0;&#x1f1f5;|&#x1f1f0;&#x1f1f7;|&#x1f1f0;&#x1f1fc;|&#x1f1f0;&#x1f1fe;|&#x1f1f0;&#x1f1ff;|&#x1f1f1;&#x1f1e6;|&#x1f1f1;&#x1f1e7;|&#x1f1f1;&#x1f1e8;|&#x1f1f1;&#x1f1ee;|&#x1f1f1;&#x1f1f0;|&#x1f1f1;&#x1f1f7;|&#x1f1f1;&#x1f1f8;|&#x1f1f1;&#x1f1f9;|&#x1f1f1;&#x1f1fa;|&#x1f1f1;&#x1f1fb;|&#x1f1f1;&#x1f1fe;|&#x1f1f2;&#x1f1e6;|&#x1f1f2;&#x1f1e8;|&#x1f1f2;&#x1f1e9;|&#x1f1f2;&#x1f1ea;|&#x1f1f2;&#x1f1eb;|&#x1f1f2;&#x1f1ec;|&#x1f1f2;&#x1f1ed;|&#x1f1f2;&#x1f1f0;|&#x1f1f2;&#x1f1f1;|&#x1f1f2;&#x1f1f2;|&#x1f1f2;&#x1f1f3;|&#x1f1f2;&#x1f1f4;|&#x1f1f2;&#x1f1f5;|&#x1f1f2;&#x1f1f6;|&#x1f1f2;&#x1f1f7;|&#x1f1f2;&#x1f1f8;|&#x1f1f2;&#x1f1f9;|&#x1f1f2;&#x1f1fa;|&#x1f1f2;&#x1f1fb;|&#x1f1f2;&#x1f1fc;|&#x1f1f2;&#x1f1fd;|&#x1f1f2;&#x1f1fe;|&#x1f1f2;&#x1f1ff;|&#x1f1f3;&#x1f1e6;|&#x1f1f3;&#x1f1e8;|&#x1f1f3;&#x1f1ea;|&#x1f1f3;&#x1f1eb;|&#x1f1f3;&#x1f1ec;|&#x1f1f3;&#x1f1ee;|&#x1f1f3;&#x1f1f1;|&#x1f1f3;&#x1f1f4;|&#x1f1f3;&#x1f1f5;|&#x1f1f3;&#x1f1f7;|&#x1f1f3;&#x1f1fa;|&#x1f1f3;&#x1f1ff;|&#x1f1f4;&#x1f1f2;|&#x1f1f5;&#x1f1e6;|&#x1f1f5;&#x1f1ea;|&#x1f1f5;&#x1f1eb;|&#x1f1f5;&#x1f1ec;|&#x1f1f5;&#x1f1ed;|&#x1f1f5;&#x1f1f0;|&#x1f1f5;&#x1f1f1;|&#x1f1f5;&#x1f1f2;|&#x1f1f5;&#x1f1f3;|&#x1f1f5;&#x1f1f7;|&#x1f1f5;&#x1f1f8;|&#x1f1f5;&#x1f1f9;|&#x1f1f5;&#x1f1fc;|&#x1f1f5;&#x1f1fe;|&#x1f1f6;&#x1f1e6;|&#x1f1f7;&#x1f1ea;|&#x1f1f7;&#x1f1f4;|&#x1f1f7;&#x1f1f8;|&#x1f1f7;&#x1f1fa;|&#x1f1f7;&#x1f1fc;|&#x1f1f8;&#x1f1e6;|&#x1f1f8;&#x1f1e7;|&#x1f1f8;&#x1f1e8;|&#x1f1f8;&#x1f1e9;|&#x1f1f8;&#x1f1ea;|&#x1f1f8;&#x1f1ec;|&#x1f1f8;&#x1f1ed;|&#x1f1f8;&#x1f1ee;|&#x1f1f8;&#x1f1ef;|&#x1f1f8;&#x1f1f0;|&#x1f1f8;&#x1f1f1;|&#x1f1f8;&#x1f1f2;|&#x1f1f8;&#x1f1f3;|&#x1f1f8;&#x1f1f4;|&#x1f1f8;&#x1f1f7;|&#x1f1f8;&#x1f1f8;|&#x1f1f8;&#x1f1f9;|&#x1f1f8;&#x1f1fb;|&#x1f1f8;&#x1f1fd;|&#x1f1f8;&#x1f1fe;|&#x1f1f8;&#x1f1ff;|&#x1f1f9;&#x1f1e6;|&#x1f1f9;&#x1f1e8;|&#x1f1f9;&#x1f1e9;|&#x1f1f9;&#x1f1eb;|&#x1f1f9;&#x1f1ec;|&#x1f1f9;&#x1f1ed;|&#x1f1f9;&#x1f1ef;|&#x1f1f9;&#x1f1f0;|&#x1f1f9;&#x1f1f1;|&#x1f1f9;&#x1f1f2;|&#x1f1f9;&#x1f1f3;|&#x1f1f9;&#x1f1f4;|&#x1f1f9;&#x1f1f7;|&#x1f1f9;&#x1f1f9;|&#x1f1f9;&#x1f1fb;|&#x1f1f9;&#x1f1fc;|&#x1f1f9;&#x1f1ff;|&#x1f1fa;&#x1f1e6;|&#x1f1fa;&#x1f1ec;|&#x1f1fa;&#x1f1f2;|&#x1f1fa;&#x1f1f3;|&#x1f1fa;&#x1f1f8;|&#x1f1fa;&#x1f1fe;|&#x1f1fa;&#x1f1ff;|&#x1f1fb;&#x1f1e6;|&#x1f1fb;&#x1f1e8;|&#x1f1fb;&#x1f1ea;|&#x1f1fb;&#x1f1ec;|&#x1f1fb;&#x1f1ee;|&#x1f1fb;&#x1f1f3;|&#x1f1fb;&#x1f1fa;|&#x1f1fc;&#x1f1eb;|&#x1f1fc;&#x1f1f8;|&#x1f1fd;&#x1f1f0;|&#x1f1fe;&#x1f1ea;|&#x1f1fe;&#x1f1f9;|&#x1f1ff;&#x1f1e6;|&#x1f1ff;&#x1f1f2;|&#x1f1ff;&#x1f1fc;|&#x10000;|&#x1f0cf;|&#x1f18e;|&#x1f191;|&#x1f192;|&#x1f193;|&#x1f194;|&#x1f195;|&#x1f196;|&#x1f197;|&#x1f198;|&#x1f199;|&#x1f19a;|&#x1f1e6;|&#x1f1e7;|&#x1f1e8;|&#x1f1e9;|&#x1f1ea;|&#x1f1eb;|&#x1f1ec;|&#x1f1ed;|&#x1f1ee;|&#x1f1ef;|&#x1f1f0;|&#x1f1f1;|&#x1f1f2;|&#x1f1f3;|&#x1f1f4;|&#x1f1f5;|&#x1f1f6;|&#x1f1f7;|&#x1f1f8;|&#x1f1f9;|&#x1f1fa;|&#x1f1fb;|&#x1f1fc;|&#x1f1fd;|&#x1f1fe;|&#x1f1ff;|&#x1f201;|&#x1f232;|&#x1f233;|&#x1f234;|&#x1f235;|&#x1f236;|&#x1f238;|&#x1f239;|&#x1f23a;|&#x1f250;|&#x1f251;|&#x1f300;|&#x1f301;|&#x1f302;|&#x1f303;|&#x1f304;|&#x1f305;|&#x1f306;|&#x1f307;|&#x1f308;|&#x1f309;|&#x1f30a;|&#x1f30b;|&#x1f30c;|&#x1f30d;|&#x1f30e;|&#x1f30f;|&#x1f310;|&#x1f311;|&#x1f312;|&#x1f313;|&#x1f314;|&#x1f315;|&#x1f316;|&#x1f317;|&#x1f318;|&#x1f319;|&#x1f31a;|&#x1f31b;|&#x1f31c;|&#x1f31d;|&#x1f31e;|&#x1f31f;|&#x1f320;|&#x1f32d;|&#x1f32e;|&#x1f32f;|&#x1f330;|&#x1f331;|&#x1f332;|&#x1f333;|&#x1f334;|&#x1f335;|&#x1f337;|&#x1f338;|&#x1f339;|&#x1f33a;|&#x1f33b;|&#x1f33c;|&#x1f33d;|&#x1f33e;|&#x1f33f;|&#x1f340;|&#x1f341;|&#x1f342;|&#x1f343;|&#x1f344;|&#x1f345;|&#x1f346;|&#x1f347;|&#x1f348;|&#x1f349;|&#x1f34a;|&#x1f34b;|&#x1f34c;|&#x1f34d;|&#x1f34e;|&#x1f34f;|&#x1f350;|&#x1f351;|&#x1f352;|&#x1f353;|&#x1f354;|&#x1f355;|&#x1f356;|&#x1f357;|&#x1f358;|&#x1f359;|&#x1f35a;|&#x1f35b;|&#x1f35c;|&#x1f35d;|&#x1f35e;|&#x1f35f;|&#x1f360;|&#x1f361;|&#x1f362;|&#x1f363;|&#x1f364;|&#x1f365;|&#x1f366;|&#x1f367;|&#x1f368;|&#x1f369;|&#x1f36a;|&#x1f36b;|&#x1f36c;|&#x1f36d;|&#x1f36e;|&#x1f36f;|&#x1f370;|&#x1f371;|&#x1f372;|&#x1f373;|&#x1f374;|&#x1f375;|&#x1f376;|&#x1f377;|&#x1f378;|&#x1f379;|&#x1f37a;|&#x1f37b;|&#x1f37c;|&#x1f37e;|&#x1f37f;|&#x1f380;|&#x1f381;|&#x1f382;|&#x1f383;|&#x1f384;|&#x1f386;|&#x1f387;|&#x1f388;|&#x1f389;|&#x1f38a;|&#x1f38b;|&#x1f38c;|&#x1f38d;|&#x1f38e;|&#x1f38f;|&#x1f390;|&#x1f391;|&#x1f392;|&#x1f393;|&#x1f3a0;|&#x1f3a1;|&#x1f3a2;|&#x1f3a3;|&#x1f3a4;|&#x1f3a5;|&#x1f3a6;|&#x1f3a7;|&#x1f3a8;|&#x1f3a9;|&#x1f3aa;|&#x1f3ab;|&#x1f3ac;|&#x1f3ad;|&#x1f3ae;|&#x1f3af;|&#x1f3b0;|&#x1f3b1;|&#x1f3b2;|&#x1f3b3;|&#x1f3b4;|&#x1f3b5;|&#x1f3b6;|&#x1f3b7;|&#x1f3b8;|&#x1f3b9;|&#x1f3ba;|&#x1f3bb;|&#x1f3bc;|&#x1f3bd;|&#x1f3be;|&#x1f3bf;|&#x1f3c0;|&#x1f3c1;|&#x1f3c5;|&#x1f3c6;|&#x1f3c8;|&#x1f3c9;|&#x1f3cf;|&#x1f3d0;|&#x1f3d1;|&#x1f3d2;|&#x1f3d3;|&#x1f3e0;|&#x1f3e1;|&#x1f3e2;|&#x1f3e3;|&#x1f3e4;|&#x1f3e5;|&#x1f3e6;|&#x1f3e7;|&#x1f3e8;|&#x1f3e9;|&#x1f3ea;|&#x1f3eb;|&#x1f3ec;|&#x1f3ed;|&#x1f3ee;|&#x1f3ef;|&#x1f3f0;|&#x1f3f4;|&#x1f3f8;|&#x1f3f9;|&#x1f3fa;|&#x1f3fb;|&#x1f3fc;|&#x1f3fd;|&#x1f3fe;|&#x1f3ff;|&#x1f400;|&#x1f401;|&#x1f402;|&#x1f403;|&#x1f404;|&#x1f405;|&#x1f406;|&#x1f407;|&#x1f408;|&#x1f409;|&#x1f40a;|&#x1f40b;|&#x1f40c;|&#x1f40d;|&#x1f40e;|&#x1f40f;|&#x1f410;|&#x1f411;|&#x1f412;|&#x1f413;|&#x1f414;|&#x1f415;|&#x1f416;|&#x1f417;|&#x1f418;|&#x1f419;|&#x1f41a;|&#x1f41b;|&#x1f41c;|&#x1f41d;|&#x1f41e;|&#x1f41f;|&#x1f420;|&#x1f421;|&#x1f422;|&#x1f423;|&#x1f424;|&#x1f425;|&#x1f426;|&#x1f427;|&#x1f428;|&#x1f429;|&#x1f42a;|&#x1f42b;|&#x1f42c;|&#x1f42d;|&#x1f42e;|&#x1f42f;|&#x1f430;|&#x1f431;|&#x1f432;|&#x1f433;|&#x1f434;|&#x1f435;|&#x1f436;|&#x1f437;|&#x1f438;|&#x1f439;|&#x1f43a;|&#x1f43b;|&#x1f43c;|&#x1f43d;|&#x1f43e;|&#x1f440;|&#x1f444;|&#x1f445;|&#x1f451;|&#x1f452;|&#x1f453;|&#x1f454;|&#x1f455;|&#x1f456;|&#x1f457;|&#x1f458;|&#x1f459;|&#x1f45a;|&#x1f45b;|&#x1f45c;|&#x1f45d;|&#x1f45e;|&#x1f45f;|&#x1f460;|&#x1f461;|&#x1f462;|&#x1f463;|&#x1f464;|&#x1f465;|&#x1f46a;|&#x1f46b;|&#x1f46c;|&#x1f46d;|&#x1f46f;|&#x1f479;|&#x1f47a;|&#x1f47b;|&#x1f47d;|&#x1f47e;|&#x1f47f;|&#x1f480;|&#x1f484;|&#x1f488;|&#x1f489;|&#x1f48a;|&#x1f48b;|&#x1f48c;|&#x1f48d;|&#x1f48e;|&#x1f48f;|&#x1f490;|&#x1f491;|&#x1f492;|&#x1f493;|&#x1f494;|&#x1f495;|&#x1f496;|&#x1f497;|&#x1f498;|&#x1f499;|&#x1f49a;|&#x1f49b;|&#x1f49c;|&#x1f49d;|&#x1f49e;|&#x1f49f;|&#x1f4a0;|&#x1f4a1;|&#x1f4a2;|&#x1f4a3;|&#x1f4a4;|&#x1f4a5;|&#x1f4a6;|&#x1f4a7;|&#x1f4a8;|&#x1f4a9;|&#x1f4ab;|&#x1f4ac;|&#x1f4ad;|&#x1f4ae;|&#x1f4af;|&#x1f4b0;|&#x1f4b1;|&#x1f4b2;|&#x1f4b3;|&#x1f4b4;|&#x1f4b5;|&#x1f4b6;|&#x1f4b7;|&#x1f4b8;|&#x1f4b9;|&#x1f4ba;|&#x1f4bb;|&#x1f4bc;|&#x1f4bd;|&#x1f4be;|&#x1f4bf;|&#x1f4c0;|&#x1f4c1;|&#x1f4c2;|&#x1f4c3;|&#x1f4c4;|&#x1f4c5;|&#x1f4c6;|&#x1f4c7;|&#x1f4c8;|&#x1f4c9;|&#x1f4ca;|&#x1f4cb;|&#x1f4cc;|&#x1f4cd;|&#x1f4ce;|&#x1f4cf;|&#x1f4d0;|&#x1f4d1;|&#x1f4d2;|&#x1f4d3;|&#x1f4d4;|&#x1f4d5;|&#x1f4d6;|&#x1f4d7;|&#x1f4d8;|&#x1f4d9;|&#x1f4da;|&#x1f4db;|&#x1f4dc;|&#x1f4dd;|&#x1f4de;|&#x1f4df;|&#x1f4e0;|&#x1f4e1;|&#x1f4e2;|&#x1f4e3;|&#x1f4e4;|&#x1f4e5;|&#x1f4e6;|&#x1f4e7;|&#x1f4e8;|&#x1f4e9;|&#x1f4ea;|&#x1f4eb;|&#x1f4ec;|&#x1f4ed;|&#x1f4ee;|&#x1f4ef;|&#x1f4f0;|&#x1f4f1;|&#x1f4f2;|&#x1f4f3;|&#x1f4f4;|&#x1f4f5;|&#x1f4f6;|&#x1f4f7;|&#x1f4f8;|&#x1f4f9;|&#x1f4fa;|&#x1f4fb;|&#x1f4fc;|&#x1f4ff;|&#x1f500;|&#x1f501;|&#x1f502;|&#x1f503;|&#x1f504;|&#x1f505;|&#x1f506;|&#x1f507;|&#x1f508;|&#x1f509;|&#x1f50a;|&#x1f50b;|&#x1f50c;|&#x1f50d;|&#x1f50e;|&#x1f50f;|&#x1f510;|&#x1f511;|&#x1f512;|&#x1f513;|&#x1f514;|&#x1f515;|&#x1f516;|&#x1f517;|&#x1f518;|&#x1f519;|&#x1f51a;|&#x1f51b;|&#x1f51c;|&#x1f51d;|&#x1f51e;|&#x1f51f;|&#x1f520;|&#x1f521;|&#x1f522;|&#x1f523;|&#x1f524;|&#x1f525;|&#x1f526;|&#x1f527;|&#x1f528;|&#x1f529;|&#x1f52a;|&#x1f52b;|&#x1f52c;|&#x1f52d;|&#x1f52e;|&#x1f52f;|&#x1f530;|&#x1f531;|&#x1f532;|&#x1f533;|&#x1f534;|&#x1f535;|&#x1f536;|&#x1f537;|&#x1f538;|&#x1f539;|&#x1f53a;|&#x1f53b;|&#x1f53c;|&#x1f53d;|&#x1f54b;|&#x1f54c;|&#x1f54d;|&#x1f54e;|&#x1f550;|&#x1f551;|&#x1f552;|&#x1f553;|&#x1f554;|&#x1f555;|&#x1f556;|&#x1f557;|&#x1f558;|&#x1f559;|&#x1f55a;|&#x1f55b;|&#x1f55c;|&#x1f55d;|&#x1f55e;|&#x1f55f;|&#x1f560;|&#x1f561;|&#x1f562;|&#x1f563;|&#x1f564;|&#x1f565;|&#x1f566;|&#x1f567;|&#x1f5a4;|&#x1f5fb;|&#x1f5fc;|&#x1f5fd;|&#x1f5fe;|&#x1f5ff;|&#x1f600;|&#x1f601;|&#x1f602;|&#x1f603;|&#x1f604;|&#x1f605;|&#x1f606;|&#x1f607;|&#x1f608;|&#x1f609;|&#x1f60a;|&#x1f60b;|&#x1f60c;|&#x1f60d;|&#x1f60e;|&#x1f60f;|&#x1f610;|&#x1f611;|&#x1f612;|&#x1f613;|&#x1f614;|&#x1f615;|&#x1f616;|&#x1f617;|&#x1f618;|&#x1f619;|&#x1f61a;|&#x1f61b;|&#x1f61c;|&#x1f61d;|&#x1f61e;|&#x1f61f;|&#x1f620;|&#x1f621;|&#x1f622;|&#x1f623;|&#x1f624;|&#x1f625;|&#x1f626;|&#x1f627;|&#x1f628;|&#x1f629;|&#x1f62a;|&#x1f62b;|&#x1f62c;|&#x1f62d;|&#x1f62e;|&#x1f62f;|&#x1f630;|&#x1f631;|&#x1f632;|&#x1f633;|&#x1f634;|&#x1f635;|&#x1f636;|&#x1f637;|&#x1f638;|&#x1f639;|&#x1f63a;|&#x1f63b;|&#x1f63c;|&#x1f63d;|&#x1f63e;|&#x1f63f;|&#x1f640;|&#x1f641;|&#x1f642;|&#x1f643;|&#x1f644;|&#x1f648;|&#x1f649;|&#x1f64a;|&#x1f680;|&#x1f681;|&#x1f682;|&#x1f683;|&#x1f684;|&#x1f685;|&#x1f686;|&#x1f687;|&#x1f688;|&#x1f689;|&#x1f68a;|&#x1f68b;|&#x1f68c;|&#x1f68d;|&#x1f68e;|&#x1f68f;|&#x1f690;|&#x1f691;|&#x1f692;|&#x1f693;|&#x1f694;|&#x1f695;|&#x1f696;|&#x1f697;|&#x1f698;|&#x1f699;|&#x1f69a;|&#x1f69b;|&#x1f69c;|&#x1f69d;|&#x1f69e;|&#x1f69f;|&#x1f6a0;|&#x1f6a1;|&#x1f6a2;|&#x1f6a4;|&#x1f6a5;|&#x1f6a6;|&#x1f6a7;|&#x1f6a8;|&#x1f6a9;|&#x1f6aa;|&#x1f6ab;|&#x1f6ac;|&#x1f6ad;|&#x1f6ae;|&#x1f6af;|&#x1f6b0;|&#x1f6b1;|&#x1f6b2;|&#x1f6b3;|&#x1f6b7;|&#x1f6b8;|&#x1f6b9;|&#x1f6ba;|&#x1f6bb;|&#x1f6bc;|&#x1f6bd;|&#x1f6be;|&#x1f6bf;|&#x1f6c1;|&#x1f6c2;|&#x1f6c3;|&#x1f6c4;|&#x1f6c5;|&#x1f6d0;|&#x1f6d1;|&#x1f6d2;|&#x1f6eb;|&#x1f6ec;|&#x1f6f4;|&#x1f6f5;|&#x1f6f6;|&#x1f6f7;|&#x1f6f8;|&#x1f910;|&#x1f911;|&#x1f912;|&#x1f913;|&#x1f914;|&#x1f915;|&#x1f916;|&#x1f917;|&#x1f91d;|&#x1f920;|&#x1f921;|&#x1f922;|&#x1f923;|&#x1f924;|&#x1f925;|&#x1f927;|&#x1f928;|&#x1f929;|&#x1f92a;|&#x1f92b;|&#x1f92c;|&#x1f92d;|&#x1f92e;|&#x1f92f;|&#x1f93a;|&#x1f93c;|&#x1f940;|&#x1f941;|&#x1f942;|&#x1f943;|&#x1f944;|&#x1f945;|&#x1f947;|&#x1f948;|&#x1f949;|&#x1f94a;|&#x1f94b;|&#x1f94c;|&#x1f950;|&#x1f951;|&#x1f952;|&#x1f953;|&#x1f954;|&#x1f955;|&#x1f956;|&#x1f957;|&#x1f958;|&#x1f959;|&#x1f95a;|&#x1f95b;|&#x1f95c;|&#x1f95d;|&#x1f95e;|&#x1f95f;|&#x1f960;|&#x1f961;|&#x1f962;|&#x1f963;|&#x1f964;|&#x1f965;|&#x1f966;|&#x1f967;|&#x1f968;|&#x1f969;|&#x1f96a;|&#x1f96b;|&#x1f980;|&#x1f981;|&#x1f982;|&#x1f983;|&#x1f984;|&#x1f985;|&#x1f986;|&#x1f987;|&#x1f988;|&#x1f989;|&#x1f98a;|&#x1f98b;|&#x1f98c;|&#x1f98d;|&#x1f98e;|&#x1f98f;|&#x1f990;|&#x1f991;|&#x1f992;|&#x1f993;|&#x1f994;|&#x1f995;|&#x1f996;|&#x1f997;|&#x1f9c0;|&#x1f9d0;|&#x1f9de;|&#x1f9df;|&#x1f9e0;|&#x1f9e1;|&#x1f9e2;|&#x1f9e3;|&#x1f9e4;|&#x1f9e5;|&#x1f9e6;|(?:&#x23e9;|&#x23ea;|&#x23eb;|&#x23ec;|&#x23f0;|&#x23f3;|&#x2640;|&#x2642;|&#x2695;|&#x26ce;|&#x2705;|&#x2728;|&#x274c;|&#x274e;|&#x2753;|&#x2754;|&#x2755;|&#x2795;|&#x2796;|&#x2797;|&#x27b0;|&#x27bf;|&#xe50a;)|(?:&#x1f004;|&#x1f170;|&#x1f171;|&#x1f17e;|&#x1f17f;|&#x1f202;|&#x1f21a;|&#x1f22f;|&#x1f237;|&#x1f321;|&#x1f324;|&#x1f325;|&#x1f326;|&#x1f327;|&#x1f328;|&#x1f329;|&#x1f32a;|&#x1f32b;|&#x1f32c;|&#x1f336;|&#x1f37d;|&#x1f396;|&#x1f397;|&#x1f399;|&#x1f39a;|&#x1f39b;|&#x1f39e;|&#x1f39f;|&#x1f3cd;|&#x1f3ce;|&#x1f3d4;|&#x1f3d5;|&#x1f3d6;|&#x1f3d7;|&#x1f3d8;|&#x1f3d9;|&#x1f3da;|&#x1f3db;|&#x1f3dc;|&#x1f3dd;|&#x1f3de;|&#x1f3df;|&#x1f3f3;|&#x1f3f5;|&#x1f3f7;|&#x1f43f;|&#x1f441;|&#x1f4fd;|&#x1f549;|&#x1f54a;|&#x1f56f;|&#x1f570;|&#x1f573;|&#x1f576;|&#x1f577;|&#x1f578;|&#x1f579;|&#x1f587;|&#x1f58a;|&#x1f58b;|&#x1f58c;|&#x1f58d;|&#x1f5a5;|&#x1f5a8;|&#x1f5b1;|&#x1f5b2;|&#x1f5bc;|&#x1f5c2;|&#x1f5c3;|&#x1f5c4;|&#x1f5d1;|&#x1f5d2;|&#x1f5d3;|&#x1f5dc;|&#x1f5dd;|&#x1f5de;|&#x1f5e1;|&#x1f5e3;|&#x1f5e8;|&#x1f5ef;|&#x1f5f3;|&#x1f5fa;|&#x1f6cb;|&#x1f6cd;|&#x1f6ce;|&#x1f6cf;|&#x1f6e0;|&#x1f6e1;|&#x1f6e2;|&#x1f6e3;|&#x1f6e4;|&#x1f6e5;|&#x1f6e9;|&#x1f6f0;|&#x1f6f3;|(?:&#x00a9;|&#x00ae;|&#x203c;|&#x2049;|&#x2122;|&#x2139;|&#x2194;|&#x2195;|&#x2196;|&#x2197;|&#x2198;|&#x2199;|&#x21a9;|&#x21aa;|&#x231a;|&#x231b;|&#x2328;|&#x23cf;|&#x23ed;|&#x23ee;|&#x23ef;|&#x23f1;|&#x23f2;|&#x23f8;|&#x23f9;|&#x23fa;|&#x24c2;|&#x25aa;|&#x25ab;|&#x25b6;|&#x25c0;|&#x25fb;|&#x25fc;|&#x25fd;|&#x25fe;|&#x2600;|&#x2601;|&#x2602;|&#x2603;|&#x2604;|&#x260e;|&#x2611;|&#x2614;|&#x2615;|&#x2618;|&#x2620;|&#x2622;|&#x2623;|&#x2626;|&#x262a;|&#x262e;|&#x262f;|&#x2638;|&#x2639;|&#x263a;|&#x2648;|&#x2649;|&#x264a;|&#x264b;|&#x264c;|&#x264d;|&#x264e;|&#x264f;|&#x2650;|&#x2651;|&#x2652;|&#x2653;|&#x2660;|&#x2663;|&#x2665;|&#x2666;|&#x2668;|&#x267b;|&#x267f;|&#x2692;|&#x2693;|&#x2694;|&#x2696;|&#x2697;|&#x2699;|&#x269b;|&#x269c;|&#x26a0;|&#x26a1;|&#x26aa;|&#x26ab;|&#x26b0;|&#x26b1;|&#x26bd;|&#x26be;|&#x26c4;|&#x26c5;|&#x26c8;|&#x26cf;|&#x26d1;|&#x26d3;|&#x26d4;|&#x26e9;|&#x26ea;|&#x26f0;|&#x26f1;|&#x26f2;|&#x26f3;|&#x26f4;|&#x26f5;|&#x26f8;|&#x26fa;|&#x26fd;|&#x2702;|&#x2708;|&#x2709;|&#x270f;|&#x2712;|&#x2714;|&#x2716;|&#x271d;|&#x2721;|&#x2733;|&#x2734;|&#x2744;|&#x2747;|&#x2757;|&#x2763;|&#x2764;|&#x27a1;|&#x2934;|&#x2935;|&#x2b05;|&#x2b06;|&#x2b07;|&#x2b1b;|&#x2b1c;|&#x2b50;|&#x2b55;|&#x3030;|&#x303d;|&#x3297;|&#x3299;))(?:&#xfe0f;|(?!&#xfe0e;)))/u';
	// END: emoji regex

	if ( 'entities' === $type ) {
		return $entities;
	}

	return $codepoints;
}

function apply_filters( $filter, $data ) {
	return $data;
}