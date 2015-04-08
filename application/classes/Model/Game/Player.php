<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Game_Player extends ORM {
	protected $_table_name  = 'players';
	protected $_table_columns = array(
		'id'         => null,
		'game_id'    => null,
		'user_id'    => null,
		'playername' => null,
		'archetype'  => null,
		'health'     => null,
		'sanity'     => null,
		'fighting'   => null,
		'social'     => null,
		'survival'   => null,
		'active'     => null,
		'dead'       => null,
		'bitten'     => null,
		'xp'         => null
	);

	protected $_belongs_to = array(
		'game' => array('model' => 'Game', 'foreign_key' => 'game_id'),
		'user' => array('model' => 'User', 'foreign_key' => 'user_id')
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
		// return array(
		// 	'gm_id' => array(
		// 		array('not_empty')
		// 	),
		// 	'name' => array(
		// 		array('not_empty')
		// 	)
		// );
		return array();
	}

	/**
	 * Create a new Player
	 *
	 * Example usage:
	 * ~~~
	 * $player = ORM::factory('Player')->create_player($_POST, array(
	 *	'game_id',
	 *  'user_id',
	 *  'playername',
	 *  'archetype',
	 *  'health',
	 *  'sanity',
	 *  'fighting',
	 *  'social',
	 *  'survival',
	 *  'active',
	 *  'dead',
	 *  'bitten'
	 * );
	 * ~~~
	 *
	 * @param array $values
	 * @param array $expected
	 * @throws ORM_Validation_Exception
	 */
	public function create_player($values, $expected)
	{
		return $this->values($values, $expected)->create();
	}
}
