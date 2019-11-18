<?php

namespace nata_den;

class Linear {
	private $x;
	public function MachLinear($a,$b){
		if ($a == 0)
		{
			throw new NataDenException('Division by zero');
		} 
		else 
		{
			MyLog::log("This is a linear equation");
			$this->x = (-$b/$a);
			return $this->x;
		}
	}
}

