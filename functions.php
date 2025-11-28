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
			// 24.11. (Nedjelja)
			[
				"date" => "2025-11-24T23:00:00.000Z",
				"time" => "1899-12-30T09:00:00.000Z",
				"title" => "Otvaranje Adventa - svečani doručak",
				"location" => "Kavana Korzo",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-24T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Dječja radionica - izrada adventskih vijenaca",
				"location" => "Centar mladih",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-11-24T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Adventski ručak",
				"location" => "Restoran Luka",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-24T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Glazbeni program - otvorenje Adventa",
				"location" => "Glavni trg",
				"category" => "provod"
			],
			[
				"date" => "2025-11-24T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Kuhano vino - dobrodošlica",
				"location" => "Adventski štandovi",
				"category" => "cuga"
			],

			// 25.11. (Ponedjeljak)
			[
				"date" => "2025-11-25T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Jutarnja kava uz kolače",
				"location" => "Kavana Centar",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-25T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Sportski dan - advent hodnja",
				"location" => "Park Maksimir",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-11-25T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Popodnevni zalogaj",
				"location" => "Bistro Luna",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-25T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Večernji koncert",
				"location" => "Dom kulture",
				"category" => "provod"
			],

			// 26.11. (Utorak)
			[
				"date" => "2025-11-26T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Kreativna radionica za djecu",
				"location" => "Knjižnica",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-11-26T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Ručak tradicionalnih jela",
				"location" => "Gostionica Stari Grad",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-26T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Sajam božićnih ukrasa",
				"location" => "Kulturni centar",
				"category" => "pokloni"
			],
			[
				"date" => "2025-11-26T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Karaoke večer",
				"location" => "Pub Stara vrata",
				"category" => "provod"
			],

			// 27.11. (Srijeda)
			[
				"date" => "2025-11-27T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Jutarnji zalogaj",
				"location" => "Kavana City",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-27T23:00:00.000Z",
				"time" => "1899-12-30T12:00:00.000Z",
				"title" => "Izrada božićnih čestitki",
				"location" => "Atelier Art",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-11-27T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Degustacija vina",
				"location" => "Vinska klet",
				"category" => "cuga"
			],
			[
				"date" => "2025-11-27T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Stand-up comedy večer",
				"location" => "Kazalište",
				"category" => "provod"
			],

			// 28.11. (Četvrtak)
			[
				"date" => "2025-11-28T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Božićna priča - čitanje",
				"location" => "Knjižnica",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-11-28T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Tradicionalni ručak",
				"location" => "Restoran Mediteran",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-28T23:00:00.000Z",
				"time" => "1899-12-30T15:00:00.000Z",
				"title" => "Filmska projekcija",
				"location" => "Dom kulture",
				"category" => "provod"
			],
			[
				"date" => "2025-11-28T23:00:00.000Z",
				"time" => "1899-12-30T18:00:00.000Z",
				"title" => "Večernji zalogaj",
				"location" => "Bistro Luna",
				"category" => "zalogaj"
			],

			// 29.11. (Petak)
			[
				"date" => "2025-11-29T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Jutarnja joga",
				"location" => "Park Maksimir",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-11-29T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Petkov ručak",
				"location" => "Restoran Luka",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-29T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Happy hour - kuhano vino",
				"location" => "Adventski štandovi",
				"category" => "cuga"
			],
			[
				"date" => "2025-11-29T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Petak jazz večer",
				"location" => "Jazz klub",
				"category" => "provod"
			],

			// 30.11. (Subota)
			[
				"date" => "2025-11-30T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Subotnji brunch",
				"location" => "Kavana Korzo",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-11-30T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Radionica za djecu - ukrasi",
				"location" => "Centar mladih",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-11-30T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Božićni sajam",
				"location" => "Glavni trg",
				"category" => "pokloni"
			],
			[
				"date" => "2025-11-30T23:00:00.000Z",
				"time" => "1899-12-30T18:00:00.000Z",
				"title" => "Glazbeni nastup",
				"location" => "Trg Republike",
				"category" => "provod"
			],
		],

		"01.12. - 07.12.2025." => [
			// 01.12. (Nedjelja)
			[
				"date" => "2025-12-01T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Nedjeljni doručak",
				"location" => "Restoran Mediteran",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-01T23:00:00.000Z",
				"time" => "1899-12-30T12:00:00.000Z",
				"title" => "Obiteljska šetnja adventom",
				"location" => "Adventski trg",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-01T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Advent afternoontea",
				"location" => "Kavana City",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-01T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Koralni koncert",
				"location" => "Crkva sv. Marka",
				"category" => "provod"
			],

			// 02.12. (Ponedjeljak)
			[
				"date" => "2025-12-02T23:00:00.000Z",
				"time" => "1899-12-30T09:00:00.000Z",
				"title" => "Jutarnja kava",
				"location" => "Bistro Luna",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-02T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Izrada adventskih ukrasa",
				"location" => "Atelier Art",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-02T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Tradicionalni ručak",
				"location" => "Gostionica Stari Grad",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-02T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Live bend večer",
				"location" => "Klub Podrum",
				"category" => "provod"
			],

			// 03.12. (Utorak)
			[
				"date" => "2025-12-03T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Doručak sa Djedićem Božićnjakom",
				"location" => "Hotel Regent",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-03T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Božićni ručak",
				"location" => "Restoran Luka",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-03T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Sajam rukotvorina",
				"location" => "Kulturni centar",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-03T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Degustacija zagorskih vina",
				"location" => "Vinska pivnica",
				"category" => "cuga"
			],

			// 04.12. (Srijeda)
			[
				"date" => "2025-12-04T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Božićne bajke - čitanje",
				"location" => "Knjižnica",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-04T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Brzi ručak",
				"location" => "Kavana Korzo",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-04T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Film projekcija - Jedan sam doma",
				"location" => "Kino Europa",
				"category" => "provod"
			],
			[
				"date" => "2025-12-04T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Quiz večer - božićna trivia",
				"location" => "Pub Stara vrata",
				"category" => "provod"
			],

			// 05.12. (Četvrtak)
			[
				"date" => "2025-12-05T23:00:00.000Z",
				"time" => "1899-12-30T09:00:00.000Z",
				"title" => "Jutarnji fitness",
				"location" => "Sportska dvorana",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-05T23:00:00.000Z",
				"time" => "1899-12-30T12:00:00.000Z",
				"title" => "Ručak uz glazbu",
				"location" => "Restoran Mediteran",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-05T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Kuhano vino afternoon",
				"location" => "Adventski štandovi",
				"category" => "cuga"
			],
			[
				"date" => "2025-12-05T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Acoustic session",
				"location" => "Kavana City",
				"category" => "provod"
			],

			// 06.12. (Petak - Sveti Nikola)
			[
				"date" => "2025-12-06T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Doručak sa Svetim Nikolom",
				"location" => "Hotel Regent",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-06T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Svečani ručak",
				"location" => "Restoran Luka",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-06T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Sveti Nikola dijeli poklone",
				"location" => "Glavni trg",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-06T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Petak party night",
				"location" => "Klub Podrum",
				"category" => "provod"
			],

			// 07.12. (Subota)
			[
				"date" => "2025-12-07T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Subotnji brunch",
				"location" => "Bistro Luna",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-07T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Kreativna radionica za djecu",
				"location" => "Centar mladih",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-07T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Božićni vašar",
				"location" => "Trg Republike",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-07T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Subotnja zabava",
				"location" => "Dom kulture",
				"category" => "provod"
			],
		],

		"08.12. - 14.12.2025." => [
			// 08.12. (Nedjelja)
			[
				"date" => "2025-12-08T23:00:00.000Z",
				"time" => "1899-12-30T09:00:00.000Z",
				"title" => "Nedjeljni doručak",
				"location" => "Kavana Korzo",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-08T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Adventski party za djecu",
				"location" => "Centar mladih",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-08T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Tradicionalni ručak",
				"location" => "Gostionica Stari Grad",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-08T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Koralni koncert",
				"location" => "Crkva",
				"category" => "provod"
			],

			// 09.12. (Ponedjeljak)
			[
				"date" => "2025-12-09T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Kava i kolači",
				"location" => "Kavana City",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-09T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Sportski advent",
				"location" => "Sportska dvorana",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-09T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Medenjaci workshop",
				"location" => "Atelier Art",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-09T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Pivo degustacija",
				"location" => "Pivnica Zlatna pinta",
				"category" => "cuga"
			],

			// 10.12. (Utorak)
			[
				"date" => "2025-12-10T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Božićne priče - čitanje",
				"location" => "Knjižnica",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-10T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Brzi ručak",
				"location" => "Bistro Luna",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-10T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Božićni sajam",
				"location" => "Kulturni centar",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-10T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Stand-up comedy",
				"location" => "Kazalište",
				"category" => "provod"
			],

			// 11.12. (Srijeda)
			[
				"date" => "2025-12-11T23:00:00.000Z",
				"time" => "1899-12-30T09:00:00.000Z",
				"title" => "Jutarnji yoga",
				"location" => "Park Maksimir",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-11T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Ručak uz vino",
				"location" => "Restoran Mediteran",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-11T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Advent filmski maraton",
				"location" => "Kino Europa",
				"category" => "provod"
			],
			[
				"date" => "2025-12-11T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Karaoke večer",
				"location" => "Pub Stara vrata",
				"category" => "provod"
			],

			// 12.12. (Četvrtak)
			[
				"date" => "2025-12-12T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Doručak sa pogledom",
				"location" => "Hotel Regent",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-12T23:00:00.000Z",
				"time" => "1899-12-30T12:00:00.000Z",
				"title" => "Izrada božićnih ukras",
				"location" => "Centar mladih",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-12T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Happy hour - kuhano vino",
				"location" => "Adventski štandovi",
				"category" => "cuga"
			],
			[
				"date" => "2025-12-12T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Acoustic večer",
				"location" => "Jazz klub",
				"category" => "provod"
			],

			// 13.12. (Petak)
			[
				"date" => "2025-12-13T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Petkov brunch",
				"location" => "Kavana Korzo",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-13T23:00:00.000Z",
				"time" => "1899-12-30T15:00:00.000Z",
				"title" => "Dječja predstava",
				"location" => "Kazalište lutaka",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-13T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Božićni shopping",
				"location" => "Trg Republike",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-13T23:00:00.000Z",
				"time" => "1899-12-30T21:00:00.000Z",
				"title" => "Friday night party",
				"location" => "Klub Podrum",
				"category" => "provod"
			],

			// 14.12. (Subota)
			[
				"date" => "2025-12-14T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Subotnji doručak",
				"location" => "Bistro Luna",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-14T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Obiteljska radionica",
				"location" => "Atelier Art",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-14T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Degustacija craft piva",
				"location" => "Pivnica",
				"category" => "cuga"
			],
			[
				"date" => "2025-12-14T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Adventski koncert",
				"location" => "Glavni trg",
				"category" => "provod"
			],
		],

		"15.12. - 21.12.2025." => [
			// 15.12. (Nedjelja)
			[
				"date" => "2025-12-15T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Nedjeljni brunch",
				"location" => "Restoran Luka",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-15T23:00:00.000Z",
				"time" => "1899-12-30T12:00:00.000Z",
				"title" => "Obiteljska šetnja",
				"location" => "Park Maksimir",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-15T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Božićni sajam rukotvorina",
				"location" => "Trg Republike",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-15T23:00:00.000Z",
				"time" => "1899-12-30T18:00:00.000Z",
				"title" => "Glazbeni program",
				"location" => "Dom kulture",
				"category" => "provod"
			],

			// 16.12. (Ponedjeljak)
			[
				"date" => "2025-12-16T23:00:00.000Z",
				"time" => "1899-12-30T09:00:00.000Z",
				"title" => "Jutarnja kava",
				"location" => "Kavana City",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-16T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Božićna radionica za djecu",
				"location" => "Centar mladih",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-16T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Tradicionalni ručak",
				"location" => "Gostionica Stari Grad",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-16T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Adventski party",
				"location" => "Klub Podrum",
				"category" => "provod"
			],

			// 17.12. (Utorak)
			[
				"date" => "2025-12-17T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Božićna priča - čitanje za djecu",
				"location" => "Knjižnica",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-17T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Brzi ručak",
				"location" => "Bistro Luna",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-17T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Božićni vašar",
				"location" => "Glavni trg",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-17T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Wine & cheese večer",
				"location" => "Vinska klet",
				"category" => "cuga"
			],

			// 18.12. (Srijeda)
			[
				"date" => "2025-12-18T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Doručak uz glazbu",
				"location" => "Kavana Korzo",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-18T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Kreativna radionica",
				"location" => "Atelier Art",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-18T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Film projekcija",
				"location" => "Kino Europa",
				"category" => "provod"
			],
			[
				"date" => "2025-12-18T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Večer kuhanog vina",
				"location" => "Adventski trg",
				"category" => "cuga"
			],

			// 19.12. (Četvrtak)
			[
				"date" => "2025-12-19T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Jutarnji fitness",
				"location" => "Sportska dvorana",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-19T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Ručak tradicionalnih jela",
				"location" => "Restoran Mediteran",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-19T23:00:00.000Z",
				"time" => "1899-12-30T18:00:00.000Z",
				"title" => "Sajam božićnih poklona",
				"location" => "Dvorana Arena",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-19T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Live music night",
				"location" => "Jazz klub",
				"category" => "provod"
			],

			// 20.12. (Petak)
			[
				"date" => "2025-12-20T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Petkov brunch",
				"location" => "Hotel Regent",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-20T23:00:00.000Z",
				"time" => "1899-12-30T15:00:00.000Z",
				"title" => "Božićna predstava za djecu",
				"location" => "Kazalište",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-20T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Happy hour - craft pivo",
				"location" => "Pivnica Zlatna pinta",
				"category" => "cuga"
			],
			[
				"date" => "2025-12-20T23:00:00.000Z",
				"time" => "1899-12-30T21:00:00.000Z",
				"title" => "Friday night fever",
				"location" => "Klub Podrum",
				"category" => "provod"
			],

			// 21.12. (Subota)
			[
				"date" => "2025-12-21T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Subotnji doručak",
				"location" => "Bistro Luna",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-21T23:00:00.000Z",
				"time" => "1899-12-30T13:00:00.000Z",
				"title" => "Obiteljska radionica - božićni ukrasi",
				"location" => "Centar mladih",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-21T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Last minute shopping",
				"location" => "Glavni trg",
				"category" => "pokloni"
			],
			[
				"date" => "2025-12-21T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Subotnja zabava",
				"location" => "Dom kulture",
				"category" => "provod"
			],
		],

		"22.12. - 24.12.2025." => [
			// 22.12. (Nedjelja)
			[
				"date" => "2025-12-22T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Predblagdanski brunch",
				"location" => "Restoran Luka",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-22T23:00:00.000Z",
				"time" => "1899-12-30T12:00:00.000Z",
				"title" => "Obiteljska radionica - posljednji ukrasi",
				"location" => "Atelier Art",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-22T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Predblagdanski Zalogaj",
				"location" => "Adventski štandovi",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-22T23:00:00.000Z",
				"time" => "1899-12-30T19:00:00.000Z",
				"title" => "Svečani koralni koncert",
				"location" => "Katedrala",
				"category" => "provod"
			],

			// 23.12. (Ponedjeljak)
			[
				"date" => "2025-12-23T23:00:00.000Z",
				"time" => "1899-12-30T11:00:00.000Z",
				"title" => "Jutarnja kava - badnjak",
				"location" => "Kavana Korzo",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-23T23:00:00.000Z",
				"time" => "1899-12-30T14:00:00.000Z",
				"title" => "Dječja proslava - badnjak",
				"location" => "Centar mladih",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-23T23:00:00.000Z",
				"time" => "1899-12-30T17:00:00.000Z",
				"title" => "Tradicionalni badnjak",
				"location" => "Glavni trg",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-23T23:00:00.000Z",
				"time" => "1899-12-30T20:00:00.000Z",
				"title" => "Veliki božićni koncert",
				"location" => "Glavni trg",
				"category" => "provod"
			],

			// 24.12. (Utorak - Badnji dan)
			[
				"date" => "2025-12-24T23:00:00.000Z",
				"time" => "1899-12-30T10:00:00.000Z",
				"title" => "Badnji doručak",
				"location" => "Hotel Regent",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-24T23:00:00.000Z",
				"time" => "1899-12-30T12:00:00.000Z",
				"title" => "Božićna radionica za djecu",
				"location" => "Dječji centar",
				"category" => "obitelj-i-djeca"
			],
			[
				"date" => "2025-12-24T23:00:00.000Z",
				"time" => "1899-12-30T16:00:00.000Z",
				"title" => "Badnji post - tradicionalna večera",
				"location" => "Gostionica Stari Grad",
				"category" => "zalogaj"
			],
			[
				"date" => "2025-12-24T23:00:00.000Z",
				"time" => "1899-12-30T22:00:00.000Z",
				"title" => "Ponoćka - božićno slavlje",
				"location" => "Katedrala",
				"category" => "provod"
			],
		]
	];

	update_option('advent_2025', $all_events);
});
