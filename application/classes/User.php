<?php defined('SYSPATH') OR die('No direct access allowed.');
class User {
	const SECRET_KEY = "temp_signed_request_salt!@)#($*%&^";

	public function __construct()
	{
		
	}

	public function login($request)
	{
		$signed_request = ($request->query('signed_request') ? $request->query('signed_request') : $_POST["signed_request"]);

		if ($request->query('username') !== null &&
			$request->query('password') !== null)
		{
			// Attempt to login user
			$remember = array_key_exists('remember', $request->query()) ? (bool) $request->query('remember') : false;
			$user = Auth::instance()->login($request->query('username'), $request->query('password'), $remember);
		}
		elseif ($signed_request !== null &&
			$this->validate_signature($signed_request) === true)
		{
			list($sig, $payload) = explode(".", $signed_request);

			$data = json_decode(base64_decode($payload), true);

			Auth::instance()->force_login($data["username"]);

			$user = true;
		}
		else
		{
			return false;
		}

		if ($user)
		{
			$user = Auth::instance()->get_user();
			$user_array = array(
				"id"         => $user->id,
				"email"      => $user->email,
				"username"   => $user->username,
				"last_login" => Date::fuzzy_span($user->last_login)
			);

			$rtn = array(
				"signed_request" => $this->generate_signature($user_array).".".base64_encode(json_encode($user_array)),
				"user"           => $user_array
			);

			$rtn["valid"] = $this->validate_signature($rtn["signed_request"]);

			return $rtn;
		}
		
		return false;
	}

	public function generate_signature($data)
	{
		if (!is_array($data))
		{
			return false;
		}

		ksort($data);
		$dataString = strtolower(json_encode($data));

		return base64_encode(sha1(hash_hmac("sha256",$dataString,self::SECRET_KEY)));
	}

	public function validate_signature($parcel)
	{
		list($sig, $payload) = explode(".", $parcel);

		return ($this->generate_signature(json_decode(base64_decode($payload), true)) === $sig);
	}
}
