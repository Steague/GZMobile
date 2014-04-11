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
		}
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
				$game = Game::instance()->create();

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

	public function action_view()
	{
		$id = $this->request->param('id');
		$user = Auth::instance()->get_user();
		// $this->template->layout = View::factory('game/view')
		// 	->bind('message', $message)
		// 	->bind('errors', $errors)
		// 	->bind('id', $id);

		//$players = ORM::factory('player')->with('game')->find_all();
		$can_view = Game::instance()->can_view_game($id,$user->id);

		echo "<pre>";
		var_dump($can_view);
		echo "</pre>";
	}
}
