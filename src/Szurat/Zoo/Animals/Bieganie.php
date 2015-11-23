<?php

namespace Szurat\Zoo\Animals;


class Bieganie
{
	private $Lew;
	private $Dzik;
	private $Surykatka;

	public function __construct($Lew, $Dzik, $Surykatka)
	{
		$this->Lew = $Lew;
		$this->Dzik = $Dzik;
		$this->Surykatka = $Surykatka;
	}

	

	public function bieganie()
	{
		$this->Lew->bieganie();
		$this->Dzik->bieganie();
		$this->Surykatka->bieganie();
	}
}
