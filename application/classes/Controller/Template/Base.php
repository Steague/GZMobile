<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Template_Base extends Controller_Template
{
	// Define the template to use
	public $template = 'templates/base';

	public function before()
	{
		parent::before();

		// Page Title
		$this->template->title = '';

		// Meta Tags
		$this->template->meta_tags = array();

		// Relational Links (other than stylesheets)
		$this->template->links = array();

		// Stylesheets
		$this->template->stylesheets = array();

		// Javascripts
		$this->template->javascripts = array();

		// Javascript Custom
		$this->template->js_custom = '';

		// Default layout
		$this->template->layout = View::factory('layouts/empty')
			->bind('message', $message)
			->bind('errors', $errors);

		// $sessionmessage = Session::instance()->get_once('message');
		// if ($sessionmessage) $message = $sessionmessage;

		// No content by default
		$this->template->layout->content = '';

		// Layout Shortcut
		$this->layout = $this->template->layout;

		$this->template->title = 'Generation Z Game';

		$this->template->stylesheets[] = array(
			"href"  => "http://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.css",
			"media" => "screen"
		);
		$this->template->stylesheets[] = array(
			"href"  => "/assets/css/main.css",
			"media" => "screen"
		);

		$this->template->javascripts[] = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js";
		$this->template->javascripts[] = "http://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.js";
		$this->template->javascripts[] = "/assets/js/main.js";
	}

} // End Controller_Template_Base
