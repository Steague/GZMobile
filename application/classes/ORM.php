<?php defined('SYSPATH') OR die('No direct script access.');

class ORM extends Kohana_ORM {

    /**
     * Proxy method to Database list_columns.
     *
     * <a href="/profile/return">@return array
     */
    public function list_columns() {
        switch ($this->_table_name) {
            case 'users':
                return array(
                    'id' => NULL,
                    'email' => NULL,
                    'username' => NULL,
                    'password' => NULL,
                    'logins' => NULL,
                    'last_login' => NULL,
                );

                break;
            case 'roles':
                return array(
                    'id' => NULL,
                    'name' => NULL,
                    'description' => NULL,
                );
                break;
            case 'roles_users':
                return array(
                    'user_id' => NULL,
                    'role_id' => NULL,
                );

                break;
            case 'user_tokens':
                return array(
                    'id' => NULL,
                    'user_id' => NULL,
                    'user_agent' => NULL,
                    'token' => NULL,
                    'created' => NULL,
                    'expires' => NULL,
                );
                break;
            default:
                return array();
                break;
        }
    }

}