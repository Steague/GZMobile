<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template_Base {

	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$this->template->layout = View::factory('user/info')
			->bind('message', $message)
			->bind('errors', $errors)
			->bind('user', $user);
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

	public function action_login()
	{
		$user = Auth::instance()->get_user();

		if ($user)
		{
			// Redirect to login page
			$this->template->layout = View::factory('user/info')
				->bind('message', $message)
				->bind('errors', $errors)
				->bind('user', $user);

			return;
		}

		$this->template->layout = View::factory('user/login')
			->bind('message', $message)
			->bind('errors', $errors);

		if (HTTP_Request::POST == $this->request->method())
		{
			// Attempt to login user
			$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
			$user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);

			// If successful, redirect user
			if ($user)
			{
				//Request::current()->redirect('user/index');
				$this->redirect(Route::get('default')->uri(array(
         			'controller' => 'user',
            		'action'     => 'index'
        		)),302);
			}
			else
			{
				$errors['login.error'] = 'Login failed';
			}
		}
	}

	public function action_register()
	{
		// TODO: Check if user is already in the system (based on username or email)
		$this->template->layout = View::factory('user/register')
			->bind('errors', $errors)
			->bind('message', $message);


		if (HTTP_Request::POST == $this->request->method())
		{
			try
			{
				// Create the user using form values
				$user = ORM::factory('User')->create_user($this->request->post(), array(
					'username',
					'password',
					'email'
				));

				// Grant user login role
				$user->add('roles', ORM::factory('Role', array('name' => 'login')));

				// Reset values so form is not sticky
				$_POST = array();

				// $this->template->layout = View::factory('layouts/empty')
				// 	->bind('errors', $errors)
				// 	->bind('message', $message);

				// Set success message
				$message = "Welcome, {$user->username}. Please login now.";
				Session::instance()->set('message', $message);

				$this->redirect(Route::get('default')->uri());

			} catch (ORM_Validation_Exception $e) {

				// Set failure message
				$message = 'There were errors, please see form below.';

				// Set errors using custom messages
				$errors = $e->errors('models');
			}

			// TODO: Send user confirmation email
		}
	}

	public function action_logout()
	{
		// Log user out
		Auth::instance()->logout();

		// Redirect to login page
		$this->template->layout = View::factory('user/login')
			->bind('message', $message)
			->bind('errors', $errors);
	}

} // End Welcome
