<?php defined('SYSPATH') OR die('No direct access allowed.');
class Player {

	public static function get_all_games($user_id)
	{
		$games = ORM::factory('Player')->where('user_id', '=', $user_id)->find_all();
		if ($games)
		{
			$rtn_games = array();
			foreach ($games as $game)
			{
				$game = new Game($game->game_id);
				if ($game->can_view_game())
				{
					array_push($rtn_games, $game);
				}
			}
			return $rtn_games;
		}

		return array();
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
