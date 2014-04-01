<?php defined('SYSPATH') OR die('No direct access allowed.');
class Game {

	// Game instances
	protected static $_instance;

	/**
	 * Singleton pattern
	 *
	 * @return Game
	 */
	public static function instance()
	{
		if ( ! isset(Game::$_instance))
		{
			$class = __CLASS__;

			// Create a new session instance
			Auth::$_instance = new $class();
		}

		return Game::$_instance;
	}

	public function create()
	{
		return true;
	}
}