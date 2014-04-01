<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Game_Player extends ORM {
	protected $_table_name  = 'players';
	protected $_table_columns = array(
		'id'        => NULL,
		'game_id'   => NULL,
		'player_id' => NULL,
		'name'      => NULL,
		'health'    => NULL,
		'sanity'    => NULL,
		'fighting'  => NULL,
		'social'    => NULL,
		'survival'  => NULL,
		'active'    => NULL,
		'dead'      => NULL,
		'bitten'    => NULL
	);

	protected $_belongs_to = array(
		'game' => array('model' => 'Game', 'foreign_key' => 'game_id'),
		'user' => array('model' => 'User', 'foreign_key' => 'player_id')
	);

	protected $_has_many = array(
		'inventory' => array('model' => 'Game_Inventory')
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
