<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Users extends Api_Controller {

	private static $LOGIN_ERROR = array("code"=>401,"message"=>"Login Error");

	public function before()
	{
		parent::before();

	}

	public function action_get()
	{
		$resource_id = $this->request->param('resource_id');

		switch (true)
		{
			case ($resource_id == "login"):
				// login user
				$user = new User();
				$user = $user->login($this->request);
				if ($user === false)
				{
					$this->error_response(401, self::$LOGIN_ERROR['message']);
					return;
				}
				
				break;
		}

		$json_encode = json_encode($user);
		$this->response->body($json_encode);
	}
}
