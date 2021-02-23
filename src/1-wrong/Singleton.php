<?php

/**
 * Simple singleton that we will extend
 */
class Singleton {

	/**
	 * @var SimpleSingleton $instance Instance
	 */
	private static $instance;

	/**
	 * Construct
	 */
	private function __construct() {
	}

	/**
	 * Get Instance
	 *
	 * @return SimpleSingleton Instance
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}
}
