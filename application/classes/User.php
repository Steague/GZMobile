<?php defined('SYSPATH') OR die('No direct access allowed.');
class User {
	public function __construct()
	{
		
	}

	public function login($request)
	{
		// Attempt to login user
		$remember = array_key_exists('remember', $request->query()) ? (bool) $request->query('remember') : false;
		$user = Auth::instance()->login($request->query('username'), $request->query('password'), $remember);

		if ($user)
		{
			$user = Auth::instance()->get_user();
			$user_array = array(
				"id"         => $user->id,
				"email"      => $user->email,
				"username"   => $user->username,
				"last_login" => Date::fuzzy_span($user->last_login)
			);

			return array(
				"signed_request" => $this->generate_signature(array("user"=>Auth::instance()->get_user())).".".base64_encode(json_encode(array("user" => $user_array))),
				"user"           => $user_array
			);
		}
		
		return false;
	}

	public function generate_signature($data)
	{
		$secretKey = "temp_signed_request_salt!@)#($*%&^";
		ksort($data);
		$dataString = strtolower(json_encode($data));

		return base64_encode(sha1(hash_hmac("sha256",$dataString,$secretKey)));
	}


}
