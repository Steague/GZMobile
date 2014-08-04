<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Newgame extends Api_Controller {

	public function before()
	{
		parent::before();

	}

	public function action_get()
	{
		$user = new User();
		$user = $user->login($this->request);
		if ($user === false)
		{
			$this->error_response(401, "User must pass valid signed request.");
			return;
		}

		$result = array(
			"result"         => "success",
			"signed_request" => $user["signed_request"],
			"valid"          => $user["valid"],
			"callback"       => array(
				"function" => "navigate_to",
				"params"   => array(
					"template" => "view_game",
					"data"     => $user["user"]
				)
			)
		);
		$json_encode = json_encode($result);
		$this->response->body($json_encode);
	}
}
