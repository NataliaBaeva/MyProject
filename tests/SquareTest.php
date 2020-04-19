<?php
require_once __DIR__ .'/../vendor/autoload.php';
use nata_den as n_t;
use PHPUnit\Framework\TestCase;

final class SquareTest extends TestCase 
{
	protected $SquareObject;
	
	protected function setUp(): void
	{
		$this->SquareObject = new n_t\Square();
	}
	
	/**
     * @dataProvider squareProvider
     */
	
	public function testValidSquareFunction($a, $b, $c, $d): void
	{
		$u = $this->SquareObject->solve($a, $b, $c);
		$u[0] = round($u[0], 2);
		$u[1] = round($u[1], 2);
		$this->assertEquals($d, $u);
	}
	
	public function SquareProvider()
	{
		return [
		[-2,4,5, [-0.87, 2.87]],
		[4,-9,3, [1.84, 0.41]],
		[5,6,-3, [0.38, -1.58]]
		];
	}
	
	/**
     * @dataProvider squareProvider2
     */
	
	public function testInvalidSquareFunction($a, $b, $c): void
	{
		$this->expectExceptionMessage('Discriminant < 0');
		$this->SquareObject->solve($a, $b, $c);
	}
	
	public function SquareProvider2()
	{
		return [
		[1,1,1],
		[9000,-199,199],
		[1234,24,24]
		];
	}
}
?>