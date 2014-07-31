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
			return array("user"=>$user, "sig"=>$this->generate_signature(array("user"=>$user)));
		}
		
		return false;
	}

	public function generate_signature($data)
	{
		$secretKey = "temp_signed_request_salt!@)#($*%&^";
		ksort($data);
		$dataString = strtolower(json_encode($data));

		return hash_hmac("sha256",$dataString,$secretKey);
	}


}
