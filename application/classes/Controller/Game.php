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
				$user             = Auth::instance()->get_user();
				$_POST['gm_id']   = $user->id;
				$_POST['started'] = time();
				
				//$game = Game::instance()->create($this->request->post('name'));
				$game = ORM::factory('game')->create_game($_POST, array(
					'gm_id',
					'name',
					'started'				
				));

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
		$can_view = $this->can_view_game($id,$user->id);

		echo "<pre>";
		var_dump($can_view);
		echo "</pre>";
	}

	public function can_view_game($game_id, $user_id)
	{
		$game   = ORM::factory('game')->where('id', '=', $game_id)->find();
		$player = $game
			->players
			->where('player_id', '=', $user_id)
			->where('active', '=', 1)
			->find();

		switch (true)
		{
			case ($game->id !== null):
			case ($player->id !== null):
				return true;
				break;
			default:
				return false;
		}
	}
}