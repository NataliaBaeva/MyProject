<?php
namespace nata_den;

class Square extends Linear implements \core\EquationInterface{
	private $discr;

	protected function discriminant($a,$b,$c){
		return (($b*$b) - (4 * $a * $c));
	}

	public function solve($a,$b,$c)
	{
		if ($a == 0)
		{
			return array($this->linear($b,$c));
		} 
		else 
		{
			$disc = $this->discriminant($a,$b,$c);
			if ($disc < 0)
			{
				$this->x = false;
				throw new NataDenException('Discriminant < 0');
			} 
			elseif ($disc > 0)
			{
				MyLog::log("This is a square equation");
				$t1=((-$b + sqrt($disc)) / (2 * $a));
				$t2=((-$b - sqrt($disc)) / (2 * $a));
				return $this->x = array($t1,$t2);
			} 

			else 
			{
				return $this->x = array((-$b) / (2 * $a));
			}
		}
	}
}
?>
