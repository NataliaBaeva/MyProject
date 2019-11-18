                                  <?php    /*
class A{
}
class B extends A {
	public $num;
	public function __construct($a) {
		$this->num = $a;
	}
}
class C extends B {
	public $num2;
	public function __construct($a,$b) {
		$this->num2 = $b;
		parent::__construct($a);
	}
}
$ob1 = new A();
$ob2 = new B($ob1);
$ob3 = new B($ob2);
$ob4 = new C($ob3,$ob1);
$ob5 = new B($ob4);
echo '<pre>';
var_dump($ob5);
echo '</pre>';
                             */     


class Linear {
    private $x;
    public function linear($a,$b){
    	if($a==0){
    	$this->x = false;
    	}	
        $this->x = (-$b/$a);
        return $this->x;
    }

}
        		
class Square extends linear {
	private $x1;
	private $discr;

	protected function discriminant($a,$b,$c){
		return (($b*$b) - (4 * $a * $c));
	}

	public function square($a,$b,$c)
	{
		if($a==0)
        {
			$this->x1 = array($this->linear($b,$c));
		}
		else
		{
			$discr = $this->discriminant($a,$b,$c);
			if ($discr < 0)
			{
				return $this->x1 = false;
			}
			elseif ($discr > 0)
			{
				$t1=((-$b + sqrt($discr)) / (2 * $a));
				$t2=((-$b - sqrt($discr)) / (2 * $a));
				return $this->x1= array($t1,$t2);
			}
		
			else
			{
				return $this->x1 = array((-$b/2*$a));
			}
		}		
	}
}

$ob1 = new A();
$ob2 = new B($ob1);
list($xx1,$xx2) = $ob2->square(1,4,1);
echo $xx1."<br>".$xx2."<br>";








?>


