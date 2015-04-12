<?php defined('SYSPATH') OR die('No direct access allowed.');
class Player {

	public function __construct($player_id = null)
	{
		switch (true)
		{
			case ($player_id === null):
				return null;
			case (is_a($player_id, 'Game')):
				$game = $player_id;
				$user = Auth::instance()->get_user();
				$player = ORM::factory('Player')->where('game_id', '=', $game->id)->where('user_id', '=', $user->id)->find();
				break;
			default:
				$player = ORM::factory('Player')->where('id', '=', $player_id)->find();
				break;
		}

		if ($player)
		{
			$this->_player = $player;

			return $player;
		}

		return null;
	}

	public static function get_all_games()
	{
		$user = Auth::instance()->get_user();

		$gm_orm = ORM::factory('Game')->where('gm_id', '=', $user->id)->find_all();
		$player_orm = ORM::factory('Player')->where('user_id', '=', $user->id)->where('active', '=', 1)->find_all();

		$result = array_merge(self::get_all_x_games($gm_orm, "id"), self::get_all_x_games($player_orm, "game_id"));
		$result = array_map("unserialize", array_unique(array_map("serialize", $result)));

		sort($result);

		return $result;
	}

	public static function get_all_x_games($games, $id_name)
	{
		if ($games)
		{
			$rtn_games = array();
			foreach ($games as $game)
			{
				$game = new Game($game->$id_name);
				if ($game->can_view_game())
				{
					array_push($rtn_games, $game);
				}
			}
			return $rtn_games;
		}

		return array();
	}

	public function save()
	{
		if (array_key_exists('_player', $this->data))
		{
			return $this->data['_player']->save();
		}

		return false;
	}

	public function is_me()
	{
		$user = Auth::instance()->get_user();
		if ($this->user_id !== $user->id)
		{
			return false;
		}

		return true;
	}

	public function leave()
	{
		$this->data['_player']->delete();
		$this->data['_player'] = null;

		return;
	}

	/**
	* Thar be magic getters and setters beyond this point. Enter at own risk.
	*/
	private $data = array();
	public function __set($name, $value)
	{
		if (!empty($name))
		{
			if (array_key_exists('_player', $this->data))
			{
				try
				{
					$this->data['_player']->$name = $value;
					return;
				}
				catch (Exception $e)
				{
					//$name property doesn't exist in player object
				}
			}
			if ($name == '_player')
			{
				//echo "Setting up ORM object";
			}
			$this->data[$name] = $value;
		}
	}

	public function __get($name)
	{
		if (array_key_exists('_player', $this->data) &&
			isset($this->data['_player']->$name))
		{
			return $this->data['_player']->$name;
		}
		elseif (array_key_exists($name, $this->data))
		{
			return $this->data[$name];
		}
		return;
	}
}
