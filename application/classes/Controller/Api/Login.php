<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Login extends Api_Controller {

	private static $LOGIN_ERROR = array("code"=>401,"message"=>"Login Error");

	public function before()
	{
		parent::before();

	}

	public function action_get()
	{

		// login user
		$user = new User();
		$user = $user->login($this->request);
		if ($user === false)
		{
			$this->error_response(401, self::$LOGIN_ERROR['message']);
			return;
		}

		$result = array(
			"result"         => "success",
			"signed_request" => $user["signed_request"],
			"valid"          => $user["valid"],
			"callback"       => array(
				"function" => "navigate_to",
				"params"   => array(
					"template" => "info",
					"data"     => $user["user"]
				)
			)
		);
		$json_encode = json_encode($result);
		$this->response->body($json_encode);
	}
}
