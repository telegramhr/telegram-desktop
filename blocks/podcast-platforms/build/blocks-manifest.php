<?php
// This file is generated. Do not modify it manually.
return array(
	'podcast-platforms' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'create-block/podcast-platforms',
		'version' => '0.1.0',
		'title' => 'Podcast Platforms',
		'category' => 'widgets',
		'icon' => 'microphone',
		'description' => 'Prikazuje vaše podcast kanale na popularnim platformama poput YouTubea, Spotifyja, Apple Podcasts i drugih.',
		'supports' => array(
			'align' => array(
				'full'
			)
		),
		'attributes' => array(
			'link1' => array(
				'type' => 'string',
				'default' => ''
			),
			'link2' => array(
				'type' => 'string',
				'default' => ''
			),
			'link3' => array(
				'type' => 'string',
				'default' => ''
			),
			'link4' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'textdomain' => 'podcast-platforms',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	)
);
