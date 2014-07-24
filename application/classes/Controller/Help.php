<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Help extends Controller {

	public function before()
	{
		parent::before();

		// Load the user information
		$user = Auth::instance()->get_user();

		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			// Redirect to login page
			$this->redirect('/user/login', 302);
			return;
		}
	}

	public function action_lookup()
	{
		$title = $this->request->query("title");

		//TODO: Get the actual content of the help topic.

		$this->response->headers('Content-Type','application/json');
		$this->response->body(json_encode(array(
			"title"   => $title,
			"content" => str_repeat($title." ", 25)
		)));
	}
}
