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
		$params            = $_POST;
		$user              = Auth::instance()->get_user();
		$params['gm_id']   = $user->id;
		$params['started'] = time();

		$game = ORM::factory('game')->create_game($params, array(
			'gm_id',
			'name',
			'started'
		));

		return $game;
	}

	/**
	* @param $game_id Integer A game ID to check
	* @param $user_id Integer A user ID to check
	* @return bool
	*/
	public function can_view_game($game_id, $user_id)
	{
		// Check the program cache for ability to view game first
		if ($this->_can_view_game[$game_id])
		{
			return true;
		}

		$game   = ORM::factory('game')->where('id', '=', $game_id)->find();
		$player = $game->players
			->where('player_id', '=', $user_id)
			->where('active', '=', 1)
			->find();

		switch (true)
		{
			case ($game->gm_id === $user_id):
			case ($player->id !== null):
				$this->_can_view_game[$game_id] = true;
				return true;
				break;
			default:
				return false;
		}
	}

	/**
	* Thar be magic getters and setters beyond this point. Enter at own risk.
	*/
	private $data = array();
	protected function __set($name, $value)
	{
		$this->data[$name] = $value;
	}

	protected function __get($name)
	{
		if (array_key_exists($name, $this->data))
		{
			return $this->data[$name];
		}

		return null;
	}
}
