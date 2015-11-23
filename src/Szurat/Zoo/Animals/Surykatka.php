<?php

namespace Szurat\Zoo\Animals;

class Surykatka
{
	private $name;
	 
	public function __construct($name)
	{
	$this->name = $name;
	}

	public function say()
	{
		echo('Jestem '.$this->name);
		echo('  Teraz gadam  ');
		
	}


	public function bieganie()
	{
		echo('Ja '.$this->name);
		echo('  hasam..hasam..  ');
		
	}

}
