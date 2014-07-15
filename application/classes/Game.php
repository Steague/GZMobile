<?php defined('SYSPATH') OR die('No direct access allowed.');
class Game {
	private $_game = array();

	public function __construct($game_id)
	{
		$game = ORM::factory('Game')->where('id', '=', $game_id)->find();
		if ($game)
		{
			$this->_game['db_game'] = $game;

			return $this;
		}

		return false;
	}

	public function create()
	{
		$params            = $_POST;
		$user              = Auth::instance()->get_user();
		$params['gm_id']   = $user->id;
		$params['started'] = time();

		$game = ORM::factory('Game')->create_game($params, array(
			'gm_id',
			'name',
			'started'
		));

		$this->_game['db_game'] = $game;
		$this->_game['is_gm'] = true;
		$this->_game['can_view_game'] = true;

		return $game;
	}

	/**
	* @param $user_id Integer A user ID to check
	* @param $game_id Integer A game ID to check
	* @return bool
	*/
	public function can_view_game($user_id)
	{
		// Check the program cache for ability to view game first
		if (array_key_exists("can_view_game", $this->_game))
		{
			return $this->_game[$game_id]['can_view_game'];
		}
		elseif (!array_key_exists('db_game', $this->_game))
		{
			$game = ORM::factory('Game')->where('id', '=', $game_id)->find();
		}
		else
		{
			$game = $this->_game['db_game'];
		}

		$player = $game->players
			->where('player_id', '=', $user_id)
			->where('active', '=', 1)
			->find();

		$this->_game['db_game'] = $game;
		$this->_game['is_gm'] = false;
		$this->_game['can_view_game'] = false;

		switch (true)
		{
			case ($game->gm_id === $user_id):
				$this->_game['is_gm'] = true;
			case ($player->id !== null):
				$this->_game['can_view_game'] = true;
				return true;
				break;
			default:
				return false;
		}
	}

	public function get_all_players($game_id = null)
	{
		return $this->_game["db_game"]->players
			->where('active', '=', 1)
			->find_all();
	}

	/**
	* Thar be magic getters and setters beyond this point. Enter at own risk.
	*/
	private $data = array();
	public function __set($name, $value)
	{
		if (!empty($name))
		{
			if (is_object($value) || is_array($value))
			{
				$this->data[$name] = $value;
			}
			else
			{
				$this->data[$name] = $value;
			}
		}
	}

	public function __get($name)
	{
		if (array_key_exists($name, $this->data))
		{
			return $this->data[$name];
		}
		return;
	}
}















// <?php defined('SYSPATH') OR die('No direct access allowed.');
// class Game {

// 	// Game instances
// 	protected static $_instance;

// 	private static $_games = array();

// 	/**
// 	 * Singleton pattern
// 	 *
// 	 * @return Game
// 	 */
// 	public static function instance($game_id = null)
// 	{
// 		if (!isset(Game::$_instance))
// 		{
// 			$class = __CLASS__;

// 			// Create a new session instance
// 			Game::$_instance = new $class();
// 		}

// 		if ($game_id !== null &&
// 			!array_key_exists($game_id, $this->_game))
// 		{
// 			$game = ORM::factory('Game')->where('id', '=', $game_id)->find();
// 			if ($game)
// 			{
// 				$this->_game[$game_id]['game'] = $game;
// 			}
// 		}

// 		return Game::$_instance;
// 	}

// 	public function create()
// 	{
// 		$params            = $_POST;
// 		$user              = Auth::instance()->get_user();
// 		$params['gm_id']   = $user->id;
// 		$params['started'] = time();

// 		$game = ORM::factory('Game')->create_game($params, array(
// 			'gm_id',
// 			'name',
// 			'started'
// 		));

// 		$this->_game[$game_id]['game'] = $game;
// 		$this->_game[$game_id]['is_gm'] = true;
// 		$this->_game[$game_id]['can_view_game'] = true;

// 		return $game;
// 	}

// 	/**
// 	* @param $user_id Integer A user ID to check
// 	* @param $game_id Integer A game ID to check
// 	* @return bool
// 	*/
// 	public function can_view_game($user_id, $game_id = null)
// 	{
// 		// Check the program cache for ability to view game first
// 		if ($game_id !== null &&
// 			array_key_exists($game_id, $this->_game) &&
// 			array_key_exists("can_view_game", $this->games[$game_id]['can_view_game']))
// 		{
// 			return $this->_game[$game_id]['can_view_game'];
// 		}
// 		elseif (!array_key_exists($game_id, $this->_game))
// 		{
// 			$game = ORM::factory('Game')->where('id', '=', $game_id)->find();
// 		}
// 		else
// 		{
// 			$game = $this->_game[$game_id];
// 		}

// 		$player = $game->players
// 			->where('player_id', '=', $user_id)
// 			->where('active', '=', 1)
// 			->find();

// 		switch (true)
// 		{
// 			case ($game->gm_id === $user_id):
// 				$this->_game[$game->id]['is_gm'] = true;
// 			case ($player->id !== null):
// 				$this->_game[$game->id]['can_view_game'] = true;
// 				return true;
// 				break;
// 			default:
// 				$this->_game[$game->id]['is_gm'] = false;
// 				$this->_game[$game->id]['can_view_game'] = false;
// 				return false;
// 		}
// 	}

// 	public function get_all_players($game_id = null)
// 	{
// 		$game->players
// 			->where('active', '=', 1)
// 			->find_all();
// 	}

// 	/**
// 	* Thar be magic getters and setters beyond this point. Enter at own risk.
// 	*/
// 	private $data = array();
// 	public function __set($name, $value)
// 	{
// 		if (!empty($name))
// 		{
// 			if (is_object($value) || is_array($value))
// 			{
// 				$this->data[$name] = $value;
// 			}
// 			else
// 			{
// 				$this->data[$name] = $value;
// 			}
// 		}
// 	}

// 	public function __get($name)
// 	{
// 		if (array_key_exists($name, $this->data))
// 		{
// 			return $this->data[$name];
// 		}
// 		return;
// 	}
// }
