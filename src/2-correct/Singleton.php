<?php

/**
 * Original Singleton class
 */
abstract class Singleton {

	/**
	 * Any Singleton class.
	 *
	 * @var Singleton[] $instances
	 */
	private static $instances = array();

	/**
	 * Consctruct.
	 * Private to avoid "new".
	 */
	private function __construct() {
	}

	/**
	 * Get Instance
   *
   * @return Singleton
	 */
	final public static function get_instance() {
		$class = get_called_class();

		if ( ! isset( $instances[ $class ] ) ) {
			self::$instances[ $class ] = new $class();
		}

		return self::$instances[ $class ];
	}

	/**
	 * Avoid clone instance
	 */
	private function __clone() {
	}

	/**
	 * Avoid serialize instance
	 */
	private function __sleep() {
	}

	/**
	 * Avoid unserialize instance
	 */
	private function __wakeup() {
	}
}
