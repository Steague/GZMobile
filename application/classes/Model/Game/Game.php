<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Game_Game extends ORM {
	protected $_table_name  = 'games';
	protected $_table_columns = array(
		'id'         => NULL,
		'gm_id'      => NULL,
		'name'       => NULL,
		'started'    => NULL
	);

	protected $_belongs_to = array('user' => array('model' => 'User', 'foreign_key' => 'gm_id'));

	/**
	 * A game has many players and one user (GM)
	 *
	 * @var array Relationhips
	 */
	protected $_has_many = array(
		'players' => array('model' => 'Game_Player')
	);

	/**
	 * Rules for the game model.
	 *
	 * @return array Rules
	 */
	public function rules()
	{
		return array(
			'gm_id' => array(
				array('not_empty')
			),
			'name' => array(
				array('not_empty')
			)
		);
	}

	/**
	 * Create a new game
	 *
	 * Example usage:
	 * ~~~
	 * $game = ORM::factory('Game')->create_game($_POST, array(
	 *	'gm_id',
	 *	'name'
	 * );
	 * ~~~
	 *
	 * @param array $values
	 * @param array $expected
	 * @throws ORM_Validation_Exception
	 */
	public function create_game($values, $expected)
	{
		return $this->values($values, $expected)->create();
	}

} // End Auth User Model
