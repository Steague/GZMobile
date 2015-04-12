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

				if (!$game->valid_game())
				{
					$message = "Invalid game.";
					return;
				}

				if ($game->is_gm === true)
				{
					$this->template->layout = View::factory('player/new')
						->bind('game', $game)
						->bind('message', $message)
						->bind('errors', $errors);

					$message = "You are the GM of this game.";

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
		//var_dump($_GET);
		$player_id = (array_key_exists("player", $_GET) ? $_GET["player"] : null);

		if ($player_id === null)
		{
			return;
		}

		$game = new Game($id);
		$player = new Player($player_id);
		if ($player === null)
		{
			return;
		}

		if ($game->is_player($player->user_id) === true &&
			$player->active == true)
		{
			// I am already a player in the game.
			return;
		}

		if ($player->active != false)
		{
			return;
		}

		$player->active = 1;
		$player->save();

		$message = "Player has been admitted to the game.";

		try
		{
			$this->redirect(Route::get('default')->uri(
				array(
					'controller' => 'game',
					'action'     => 'view',
					'id'         => $id
				)));
		}
		catch (HTTP_Exception_Redirect $e)
		{
			throw $e;
		}
		catch (Exception $e)
		{
			$response = $e->get_response();
		}
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

	public function action_leave()
	{
		$id = $this->request->param('id');
		$game = new Game($id);

		$player_id = (array_key_exists("player", $_GET) ? $_GET["player"] : null);

		if ($player_id === null)
		{
			return;
		}

		$player = new Player($player_id);

		if ($game->is_player($player->user_id) !== true ||
			$player->active != true)
		{
			return;
		}

		if (!$player->is_me())
		{
			return;
		}

		$message = "You have left the game.";
		try
		{
			$player->leave();

			$this->redirect(Route::get('default')->uri(
				array(
					'controller' => 'user',
					'action'     => 'index'
				)));
		}
		catch (HTTP_Exception_Redirect $e)
		{
			throw $e;
		}
		catch (Exception $e)
		{
			$response = $e->get_response();
		}
	}

	public function action_view()
	{
		$id = $this->request->param('id');

		$game = new Game($id);
		if ($game->can_view_game() === false)
		{
			return;
		}

		$player = new Player($game);
		if (is_null($player->playername) || strlen($player->playername) <= 0)
		{
			$this->template->layout = View::factory('player/new');
		}
		else
		{
			$this->template->layout = View::factory('game/view');
		}

		$this->template->layout
			->bind('message', $message)
			->bind('errors', $errors)
			->bind('game', $game);
	}

	public function action_viewall()
	{
		$games = Player::get_all_games();

		$this->template->layout = View::factory('game/viewall')
			->bind('message', $message)
			->bind('errors', $errors)
			->bind('games', $games);
	}
}
