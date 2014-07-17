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

	public function action_join()
	{
		if (HTTP_Request::POST == $this->request->method())
		{
			$id = $this->request->param('id');
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

		$this->template->layout = View::factory('game/view')
			->bind('message', $message)
			->bind('errors', $errors)
			->bind('game', $game);
		// $players = $game->get_all_players();
		// $can_view = $game->can_view_game();

		// echo "<pre>";
		// var_dump($players);
		// var_dump($can_view);
		// echo "</pre>";
	}
}
