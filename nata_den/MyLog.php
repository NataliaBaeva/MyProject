<?php

namespace nata_den;

class MyLog extends \core\LogAbstract implements \core\LogInterface {
	public static function log($str) {
		self::Instance()->log[] = $str;
	}
	public function _write() {
		echo implode ("\n", $this->log);

		$date = new \DateTime();
		if (!is_dir('./Log')) mkdir('./Log');

		file_put_contents('./Log/'.$date->format('d-m-Y\TH-i-s.u').'.log', implode ("\n", $this->log));
	}
	public static function write() {
		self::Instance()->_write();
	}
}