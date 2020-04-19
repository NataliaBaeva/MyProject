<?php

namespace nata_den;

ini_set('display_errors', 1);
error_reporting(-1);
require_once __DIR__ .'/vendor/autoload.php';
/*include_once('nata_den/Nata_den_Exception.php');
include_once('core/EquationInterface.php');
include_once('core/LogAbstract.php');
include_once('core/LogInterface.php');
include_once('nata_den/Linear.php');
include_once('nata_den/Square.php');
include_once('nata_den/MyLog.php');*/

MyLog::log('Version '.file_get_contents('./version'));
echo "Enter 3 parameters divided by space \n";
$params = explode(" ", fgets(STDIN));

try {
	if (count($params) != 3) {
		throw new NataDenException("Wrong parameter count. Please enter exactly 3 parameters.");
	}
	$a = (float)$params[0];
	$b = (float)$params[1];
	$c = (float)$params[2];
	if ($params[0] == 0) {
		MyLog::log("Linear equation: ".$b."x + ".$c." = 0");
		$linear = new Linear();
		MyLog::log("Answer: ".$linear->MachLinear($b, $c));	
	}
	else {
		MyLog::log("Square equation: ".$a."x^2 + ".$b."x + ".$c." = 0");
		$square = new Square();
		if (is_array($temp = $square->solve($a, $b, $c))) {
			MyLog::log("Answer: ". implode(" , ", $temp));
		}
		else {
			MyLog::log("Answer: ".$temp);
		}
		
	}	
}
catch (NataDenException $e){
	MyLog::log($e->GetMessage());
}

MyLog::write()."\n";

?>