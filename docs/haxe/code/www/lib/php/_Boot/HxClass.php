<?php
/**
 * Generated by Haxe 4.3.2
 */

namespace php\_Boot;

use \php\Boot;

/**
 * Class<T> implementation for Haxe->PHP internals.
 */
class HxClass {
	/**
	 * @var string
	 */
	public $phpClassName;

	/**
	 * @param string $phpClassName
	 * 
	 * @return void
	 */
	public function __construct ($phpClassName) {
		#/usr/local/lib/haxe/std/php/Boot.hx:665: characters 3-35
		$this->phpClassName = $phpClassName;
	}

	/**
	 * Magic method to call static methods of this class, when `HxClass` instance is in a `Dynamic` variable.
	 * 
	 * @param string $method
	 * @param array $args
	 * 
	 * @return mixed
	 */
	public function __call ($method, $args) {
		#/usr/local/lib/haxe/std/php/Boot.hx:673: characters 3-111
		$callback = ((($this->phpClassName === "String" ? HxString::class : $this->phpClassName))??'null') . "::" . ($method??'null');
		#/usr/local/lib/haxe/std/php/Boot.hx:674: characters 3-53
		return \call_user_func_array($callback, $args);
	}

	/**
	 * Magic method to get static vars of this class, when `HxClass` instance is in a `Dynamic` variable.
	 * 
	 * @param string $property
	 * 
	 * @return mixed
	 */
	public function __get ($property) {
		#/usr/local/lib/haxe/std/php/Boot.hx:682: lines 682-690
		if (\defined("" . ($this->phpClassName??'null') . "::" . ($property??'null'))) {
			#/usr/local/lib/haxe/std/php/Boot.hx:683: characters 4-54
			return \constant("" . ($this->phpClassName??'null') . "::" . ($property??'null'));
		} else if (Boot::hasGetter($this->phpClassName, $property)) {
			#/usr/local/lib/haxe/std/php/Boot.hx:685: characters 29-41
			$tmp = $this->phpClassName;
			#/usr/local/lib/haxe/std/php/Boot.hx:685: characters 4-59
			return $tmp::{"get_" . ($property??'null')}();
		} else if (\method_exists($this->phpClassName, $property)) {
			#/usr/local/lib/haxe/std/php/Boot.hx:687: characters 4-56
			return Boot::getStaticClosure($this->phpClassName, $property);
		} else {
			#/usr/local/lib/haxe/std/php/Boot.hx:689: characters 33-45
			$tmp = $this->phpClassName;
			#/usr/local/lib/haxe/std/php/Boot.hx:689: characters 4-56
			return $tmp::${$property};
		}
	}

	/**
	 * Magic method to set static vars of this class, when `HxClass` instance is in a `Dynamic` variable.
	 * 
	 * @param string $property
	 * @param mixed $value
	 * 
	 * @return void
	 */
	public function __set ($property, $value) {
		#/usr/local/lib/haxe/std/php/Boot.hx:698: lines 698-702
		if (Boot::hasSetter($this->phpClassName, $property)) {
			#/usr/local/lib/haxe/std/php/Boot.hx:699: characters 22-34
			$tmp = $this->phpClassName;
			#/usr/local/lib/haxe/std/php/Boot.hx:699: characters 4-59
			$tmp::{"set_" . ($property??'null')}($value);
		} else {
			#/usr/local/lib/haxe/std/php/Boot.hx:701: characters 26-38
			$tmp = $this->phpClassName;
			#/usr/local/lib/haxe/std/php/Boot.hx:701: characters 4-56
			$tmp::${$property} = $value;
		}
	}
}

Boot::registerClass(HxClass::class, 'php._Boot.HxClass');
