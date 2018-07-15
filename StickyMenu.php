<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 10.07.2018
 * Time: 0:46
 */

function StickyMenu_config() {
	$configarray = [
		"name"        => "Липкое меню",
		"description" => "Данное дополнение позволяет закрепить меню с верху когда клиент пролистывает достаточно большую страницу",
		"version"     => "1",
		"author"      => "service-voice",
		"fields"      => [
			'Note'     => [
				'Description'  => 'Данный модуль не имеет административного вывода',
				'FriendlyName' => 'Заметка:'
			],
			"Template" => [
				"FriendlyName" => "Шаблон",
				"Type"         => "dropdown",
				"Options"      => [ "Five", "Six" ],
				"Description"  => "",
				"Default"      => "Six",
			],
		]
	];

	return $configarray;
}