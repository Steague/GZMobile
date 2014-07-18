<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Player extends Controller_Template_Base {

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

	public function action_new()
	{
		$id = $this->request->param('id');
		
		$game = new Game($id);
		if ($game->is_player() === true)
		{
			// I am already a played in the game.
			return;
		}

		$this->template->layout = View::factory('player/new')
			->bind('message', $message)
			->bind('errors', $errors)
			->bind('game', $game);
	}
}
