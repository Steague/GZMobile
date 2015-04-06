<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Game extends Controller_Template_Base {

	public function before()
	{
		parent::before();

		// Load the user information
		$user = Auth::instance()->get_user();

		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			// Redirect to login page
			$this->template->layout = View::factory('user/login')
				->bind('message', $message)
				->bind('errors', $errors);
			return;
		}

		$this->template->layout = View::factory('user/info')
			->bind('message', $message)
			->bind('errors', $errors)
			->bind('user', $user);
	}

	public function action_create()
	{
		$this->template->layout = View::factory('game/create')
			->bind('message', $message)
			->bind('errors', $errors)
			->bind('user', $user);

		if (HTTP_Request::POST == $this->request->method())
		{
			try
			{
				$game = new Game();
				$game = $game->create();

				// Reset values so form is not sticky
				$_POST = array();

				$this->redirect(Route::get('default')->uri(
					array(
						'controller' => 'game',
						'action'     => 'view',
						'id'         => $game->id,
					)));
			}
			catch (ORM_Validation_Exception $e)
			{
				// Set failure message
				$message = 'There were errors, please see form below.';

				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
	}

	public function action_request()
	{
		$this->template->layout = View::factory('game/request')
			->bind('message', $message)
			->bind('errors', $errors);

		if (HTTP_Request::POST == $this->request->method())
		{
			try
			{
				$game = new Game(Game::get_id_from_short_id($_POST['game']));

				// ob_start();
				// var_dump($game);
				// $log = ob_get_clean();
				// error_log($log);

				if (!$game->valid_game())
				{
					$message = "Invalid game.";
					return;
				}

				// Reset values so form is not sticky
				$_POST = array();

				// Are you already in the game?
				if ($game->is_player() === true)
				{
					$message = 'Already in the game.';
					return;
				}

				$_POST['active'] = 0;
				$game->add_player();

				$message = 'Request to join game sent to GM.';
			}
			catch (Exception $e)
			{
				// Set failure message
				$message = 'There were errors, please see form below.';

				// Set errors using custom messages
				$errors = array("game"=>$e);
			}
		}
	}

	public function action_admit()
	{
		$id = $this->request->param('id');
		var_dump($_GET);
		$player_id = (array_key_exists("player", $_GET) ? $_GET["player"] : null);

		if ($player_id === null)
		{
			echo "1";
			return;
		}

		$game = new Game($id);
		$player = new Player($player_id);
		if ($player === null)
		{
			echo "2";
			return;
		}

		if ($game->is_player($player->user_id) === true)
		{
			echo "3:".$player->user_id;
			var_dump($player);
			// I am already a played in the game.
			return;
		}

		echo "4";
	}

	public function action_join()
	{
		$id = $this->request->param('id');
		
		$game = new Game($id);
		if ($game->is_player() === true)
		{
			// I am already a played in the game.
			return;
		}

		//Add me to the game
		$game->add_player();

		$this->template->layout = View::factory('game/join')
			->bind('message', $message)
			->bind('errors', $errors)
			->bind('game', $game);
	}

	public function action_view()
	{
		$id = $this->request->param('id');

		$game = new Game($id);
		if ($game->can_view_game() === false)
		{
			return;
		}

		$this->template->layout = View::factory('game/view')
			->bind('message', $message)
			->bind('errors', $errors)
			->bind('game', $game);
	}

	public function action_viewall()
	{
		$user = Auth::instance()->get_user();
		$games = Player::get_all_games($user->id);

		$this->template->layout = View::factory('game/viewall')
			->bind('message', $message)
			->bind('errors', $errors)
			->bind('games', $games);
	}
}
