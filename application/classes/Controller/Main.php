<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template_Base {

	public function before()
	{
		parent::before();
		// if (Auth::instance()->logged_in('admin'))
		// {
		// 	$this->request->redirect('/user');
		// }
	}

	public function action_index()
	{
		$this->template->layout = View::factory('user/login')
			->bind('message', $message)
			->bind('errors', $errors);
	}

} // End Welcome
