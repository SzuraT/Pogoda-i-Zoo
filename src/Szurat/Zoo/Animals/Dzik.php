<?php

namespace Szurat\Zoo\Animals;

class Dzik
{
	private $name;
	 
	public function __construct($name)
	{
	$this->name = $name;
	}

	public function say()
	{
		echo('Jestem '.$this->name);
		echo('  Teraz spie  ');
		
	}
	

	public function bieganie()
	{
		echo('Ja '.$this->name);
		echo('  hasam..hasam..  ');
		
	}
}
