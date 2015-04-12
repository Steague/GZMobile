<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller_Template_Base {
	
	public $rediska = null;

	public function before()
	{
		parent::before();

		$this->rediska = Rediska_Manager::get();
	}

	public function action_test()
	{
		echo "<pre>";
		var_dump($rediska);
		echo "</pre>";
	}

	public function action_redisset()
	{
		$key = new Rediska_Key('voodoo');
		$key->setValue('foobar');
	}

	public function action_redisget()
	{
		$key = new Rediska_Key('voodoo');
		echo $key;
	}
}