<?php
require_once __DIR__ .'/../vendor/autoload.php';
use nata_den as n_t;
use PHPUnit\Framework\TestCase;

final class LinearTest extends TestCase 
{
	protected $LinearObject;
	
	protected function setUp(): void
	{
		$this->LinearObject = new n_t\Linear();
	}
	
	/**
     * @dataProvider linearProvider
     */
	
	public function testValidLinearFunction($a, $b, $c): void
	{
		$this->assertEquals($c, $this->LinearObject->MachLinear($a, $b));
	}
	
	public function linearProvider()
	{
		return [
		[4,8,-2],
		[1,-1,1],
		[14,7,-0.5]
		];
	}
	
	/**
     * @dataProvider linearProvider2
     */
	
	public function testInvalidLinearFunction($a, $b): void
	{
		$this->expectExceptionMessage('Division by zero');
		$this->LinearObject->MachLinear($a, $b);
	}
	
	public function linearProvider2()
	{
		return [
		[0,8],
		[0,-1],
		[0,7]
		];
	}
}
?>