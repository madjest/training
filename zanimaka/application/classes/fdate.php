<?php

class FDate extends DateTime {

	const FORMAT_MYSQL  = 'Y-m-d H:i:s';
	const FORMAT_PEOPLE = 'd.m.Y';
	const FORMAT_PEOPLE_TIME = 'H:i d.m.Y';

	const ONE_DAY       = 86400; /* 24*60*60 */
	const ONE_MONTH     = 2592000; /* 30*24*60*60 */

	const FROM_STRING   = 'с';
	const TO_STRING     = 'по';
	const YEAR_STRING   = 'года';

	/**
	 * @var Date
	 */
	private static $now = null;

	private static $monthes = array(
	    'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
	);

	/**
	 * @return Date
	 * @param string $string
	 */
	public static function create($string = null) {
	    if ($string instanceof DateTime) {
		    return new self($string->format(DateTime::ISO8601));
	    }
	    if (is_numeric($string)) {
		    return new self(date(DateTime::ISO8601, $string));
	    }
	    return new self($string);
	}
	
	/**
	 *
	 * @return type 
	 */
	public function month() {
		return self::$monthes[$this->format('m') - 1];
	}

	/**
	 * @return Date
	 */
	public static function now() {
	    if (null === self::$now) {
		    self::$now = self::create('now');
	    }
	    return self::$now;
	}
	
	public function toSql() {
		$format = self::FORMAT_MYSQL;
		return $this->format($format);
	}
	
	private function replaceMonth($string){
	    $parse = explode('.', $string);
	    $parse[1] = $this->month();
	    return implode(' ', $parse);
	}

	public function toPeople($mouth = false) {
		$format = self::FORMAT_PEOPLE;
		$d = $this->format($format);
		if($mouth){
		    return $this->replaceMonth($d);
		}
		return $d;
	}

	public function toPeopleTime($mouth = false) {
		$format = self::FORMAT_PEOPLE_TIME;
		$d = $this->format($format);
		if($mouth){
		    return $this->replaceMonth($d);
		}
		return $d;
	}

	public function __toString() {
		return $this->format(Date::ISO8601);
	}

}
