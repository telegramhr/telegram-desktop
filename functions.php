<?php

require_once(__DIR__ . '/functions-shared.php');

add_action('wp_enqueue_scripts', 'telegram_scripts');

if (! isset($content_width)) {
	$content_width = 710;
}

function telegram_scripts()
{

	wp_register_script('sticky-kit', get_template_directory_uri() . '/assets/js/sticky_kit.min.js', array('jquery'), null, true);
	wp_register_script('colour-brightness', get_template_directory_uri() . '/assets/js/jquery.colourbrightness.min.js', array('jquery'), null, true);

	wp_register_script('telegram-script', get_template_directory_uri() . '/assets/js/functions.js', array('jquery', 'slick', 'colour-brightness', 'sticky-kit'), '95138.98', true);
	wp_register_style('telegram-style', get_stylesheet_uri(), array('slick', 'slick-theme'), '95070.24');
	if ('native' === get_post_type()) {
		wp_enqueue_script('jquery');
		wp_enqueue_script('slick');
		wp_enqueue_script('wow');
		wp_enqueue_style('native-animate');
		if (get_post_meta(get_the_ID(), 'include_styles', true)) {
			wp_enqueue_style('telegram-style');
			wp_enqueue_script('telegram-script');
		}
	} else {
		wp_enqueue_style('telegram-style');
		wp_enqueue_script('telegram-script');
	}
}


add_action('init', function () {
	$all_events = [
		"24.11. - 30.11.2025." => [
			[
				"date" => "2025-11-24T23:00:00.000Z",
				"time" => "1899-12-30T09:00:00.000Z",
				"title" => "Kava",
				"location" => "Kavana Korzo",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-24T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Derneci i KRila",
				"location" => "Centar mladih",
				"category" => "provod"
			],
			[
				"date" => "2025-11-24T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Predavanje",
				"location" => "Gradska knjižnica",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-11-24T23:00:00.000Z",
				"time" => "1899-12-30T15:00:00.000Z",
				"title" => "Večernji Zalogaj",
				"location" => "Restoran Luka",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-25T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Sportski dan",
				"location" => "Sportska dvorana",
				"category" => "cuga"
			],
			[
				"date" => "2025-11-26T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "GTest Update",
				"location" => "Kulturni centar",
				"category" => "pokloni"
			],
			[
				"date" => "2025-11-27T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Brzi zaloga",
				"location" => "Kavana City",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-27T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Kreativni test",
				"location" => "Atelier Art",
				"category" => "provod"
			],
			[
				"date" => "2025-11-28T23:00:00.000Z",
				"time" => "1899-12-30T15:00:00.000Z",
				"title" => "Filmska večer",
				"location" => "Dom kulture",
				"category" => "pokloni"
			],
			[
				"date" => "2025-11-28T23:00:00.000Z",
				"time" => "1899-12-30T18:00:00.000Z",
				"title" => "Petkov Zalogaj",
				"location" => "Bistro Luna",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-29T23:00:00.000Z",
				"time" => "1899-12-30T12:00:00.000Z",
				"title" => "Jutarnja joga - Subota",
				"location" => "Park Maksimir",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-11-29T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Subotnji Zalogaj",
				"location" => "Restoran Mediteran",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-30T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Nedjeljni ručak",
				"location" => "Gostionica Stari Grad",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-30T23:00:00.000Z",
				"time" => "1899-12-30T18:00:00.000Z",
				"title" => "Glazbeni nastup",
				"location" => "Trg Republike",
				"category" => "provod"
			]
		],
		"01.12. - 07.12.2025." => [
			[
				"date" => "2025-12-01T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Novi Test 1",
				"location" => "lokacija 1",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-02T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Novi Test 2",
				"location" => "lokacija 2",
				"category" => "zalogaj"
			]
		],
		"08.12. - 14.12.2025." => [
			[
				"date" => "2025-12-08T23:00:00.000Z",
				"time" => "1899-12-30T09:00:00.000Z",
				"title" => "Jutarnji Zalogaj",
				"location" => "Kavana Korzo",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-08T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Adventski Party",
				"location" => "Centar mladih",
				"category" => "provod"
			],
			[
				"date" => "2025-12-08T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Radionica za djecu",
				"location" => "Knjižnica",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-08T23:00:00.000Z",
				"time" => "1899-12-30T15:00:00.000Z",
				"title" => "Popodnevni zalogaj",
				"location" => "Restoran Luka",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-09T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Sportski Advent",
				"location" => "Sportska dvorana",
				"category" => "cuga"
			],
			[
				"date" => "2025-12-10T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Update radionica",
				"location" => "Kulturni centar",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-10T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Brzi ručak",
				"location" => "Kavana City",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-10T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Kreativna radionica",
				"location" => "Atelier ART",
				"category" => "provod"
			],
			[
				"date" => "2025-12-11T23:00:00.000Z",
				"time" => "1899-12-30T15:00:00.000Z",
				"title" => "Filmska večer",
				"location" => "Dom kulture",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-11T23:00:00.000Z",
				"time" => "1899-12-30T18:00:00.000Z",
				"title" => "Advent Friday Zalogaj",
				"location" => "Bistro Luna",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-12T23:00:00.000Z",
				"time" => "1899-12-30T12:00:00.000Z",
				"title" => "Jutarnja joga",
				"location" => "Park Maksimir",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-12T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Subotnji zalogaj",
				"location" => "Restoran Mediteran",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-13T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Nedjeljni ručak",
				"location" => "Gostionica Stari Grad",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-13T23:00:00.000Z",
				"time" => "1899-12-30T18:00:00.000Z",
				"title" => "Glazbeni nastup",
				"location" => "Trg Republike",
				"category" => "provod"
			],
			[
				"date" => "2025-12-14T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Adventski koncert",
				"location" => "Crkveni trg",
				"category" => "pokloni"
			],
		],


		"15.12. - 21.12.2025." => [
			[
				"date" => "2025-12-15T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Gastro Advent – ponedjeljak",
				"location" => "Kavana Korzo",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-16T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Adventski party",
				"location" => "Centar mladih",
				"category" => "provod"
			],
			[
				"date" => "2025-12-17T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Božićna priča – čitanje za djecu",
				"location" => "Knjižnica",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-18T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Večer kuhanog vina",
				"location" => "Adventski trg",
				"category" => "cuga"
			],
			[
				"date" => "2025-12-19T23:00:00.000Z",
				"time" => "1899-12-30T18:00:00.000Z",
				"title" => "Sajam božićnih poklona",
				"location" => "Dvorana Arena",
				"category" => "pokloni"
			],
		],

		"22.12. - 24.12.2025." => [
			[
				"date" => "2025-12-22T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Predblagdanski Zalogaj",
				"location" => "Kućica 4",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-23T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Veliki božićni koncert",
				"location" => "Glavni trg",
				"category" => "provod"
			],
			[
				"date" => "2025-12-24T23:00:00.000Z",
				"time" => "1899-12-30T12:00:00.000Z",
				"title" => "Božićna radionica za djecu",
				"location" => "Dječji centar",
				"category" => "obitelj-i-djeca"
			]
		]
	];


	update_option('advent_2025', $all_events);
});
