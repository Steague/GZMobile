<?php defined('SYSPATH') OR die('No direct access allowed.');
class Game {
	private $_game = array();
	public $starting_points = 3;

	public function __construct($game_id = null)
	{
		if ($game_id === null)
		{
			return;
		}

		$game = ORM::factory('Game')->where('id', '=', $game_id)->find();
		if ($game)
		{
			$user = Auth::instance()->get_user();
			$user_id = $user->id;

			$this->_game['db_game'] = $game;
			$this->id               = $game->id;
			$this->title            = $game->name;
			$this->is_gm            = ($game->gm_id == $user_id ? true : false);
			$this->players          = $this->get_all_players();
		}
		else
		{
			return;
		}

		$this->starting_points = 3;
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
		$this->id               = $game->id;
		$this->title            = $game->name;
		$this->is_gm            = true;

		return $game;
	}

	public function get_game_data()
	{
		return array(
			"id"        => $this->id,
			"title"     => $this->title,
			"is_gm"     => $this->is_gm,
			"players"   => $this->get_all_players(),
			"is_player" => $this->is_player(),
		);
	}

	public function valid_game()
	{
		$game = $this->_game["db_game"];

		if ($game == null)
		{
			return false;
		}

		if ($game->id == null)
		{
			return false;
		}

		return true;
	}

	public static function get_short_id($id)
	{
		$c = base_convert(60466175 + $id, 10, 36);
		return $c;
	}

	public static function get_id_from_short_id($short_id)
	{
		$c = base_convert($short_id, 36, 10) - 60466175;
		return $c;
	}

	/**
	* @param $user_id Integer A user ID to check
	* @return bool
	*/
	public function can_view_game($user_id = null)
	{
		if ($this->valid_game() === false)
		{
			return false;
		}

		// If no user ID specified, get the currently logged in user
		if ($user_id === null)
		{
			$user = Auth::instance()->get_user();
			$user_id = $user->id;
		}

		$game = $this->_game['db_game'];

		if (array_key_exists('players', $this->_game))
		{
			$can_see = false;
			foreach ($this->_game['players'] as $player)
			{
				if ($player->id == $user_id)
				{
					$can_see = true;
				}
			}

			if ($can_see !== true &&
				$game->gm_id !== $user_id)
			{
				return false;
			}
		}

		$players = $game->players
			->where('active', '=', 1)
			->find_all();

		// Cache all the players
		$can_see = false;
		foreach ($players as $player)
		{
			$this->_game['players'][$player->id] = $player;
			if ($player->id == $user_id)
			{
				$can_see = true;
			}
		}

		if ($can_see !== true &&
			$game->gm_id !== $user_id)
		{
			return false;
		}

		return true;
	}

	public function is_me($player)
	{
		$user = Auth::instance()->get_user();

		$players = $this->get_all_players();

		if ($players === false)
		{
			return false;
		}

		if (!array_key_exists($user->id, $players))
		{
			return false;
		}

		if ($player->user_id !== $user->id)
		{
			return false;
		}

		return true;
	}

	public function is_player($user_id = null)
	{
		// If no user ID specified, get the currently logged in user
		if ($user_id === null)
		{
			$user = Auth::instance()->get_user();
			$user_id = $user->id;
		}

		$players = $this->get_all_players();

		if ($players === false)
		{
			return false;
		}

		if (!array_key_exists($user_id, $players))
		{
			return false;
		}

		return true;
	}

	public function add_player($user_id = null)
	{
		// If no user ID specified, get the currently logged in user
		if ($user_id === null)
		{
			$user = Auth::instance()->get_user();
			$user_id = $user->id;
		}

		if ($this->valid_game() === false)
		{
			return false;
		}

		$params            = $_POST;
		$params['game_id'] = $this->id;
		$params['user_id'] = $user_id;

		$player = ORM::factory('Player')->create_player($params, array(
			'game_id',
			'user_id',
			'playername',
			'health',
			'sanity',
			'fighting',
			'social',
			'survival',
			'active',
			'dead',
			'bitten'));

		$this->players = $this->get_all_players(true);

		return $player;
	}

	public function update_player(Player $player = null)
	{
		// If no user ID specified, get the currently logged in user
		if ($player === null)
		{
			$player = new Player($this);
		}

		if ($this->valid_game() === false)
		{
			return false;
		}

		$params = $_POST;
		$params['game_id']    = $player->game_id;
		$params['id']         = $player->id;
		$params['user_id']    = $player->user_id;

		foreach ($params as $k => $v)
		{
			$player->$k = $v;
		}

		$player->save();

		$this->players = $this->get_all_players(true);

		return $player;
	}

	public function get_all_players($flush = false)
	{
		if ($this->valid_game() === false)
		{
			return false;
		}
		
		if (array_key_exists('players', $this->_game) &&
			$flush == false)
		{
			return $this->_game['players'];
		}

		$players = $this->_game["db_game"]->players
			//->where('active', '=', 1)
			->find_all();
		
		$this->_game['players'] = array();
		foreach ($players as $player)
		{
			$this->_game['players'][$player->user_id] = $player;
		}
		return $this->_game['players'];
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
