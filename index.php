                                  <?php    
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
                             
     

?>


