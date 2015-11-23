<?php

namespace Szurat\Zoo\Animals;

class Lew
{
	private $name;
	 
	public function __construct($name)
	{
	$this->name = $name;
	}

	public function say()
	{
		echo('Jestem '.$this->name);
		echo('  Teraz jem  ');
		
	}

	public function bieganie()
	{
		echo('Ja '.$this->name);
		echo('  hasam..hasam..  ');
		
	}

}
