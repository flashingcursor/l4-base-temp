<?php namespace App\Models;

use Eloquent;
use Zizaco\Confide\ConfideUser;
use Zizaco\Entrust\HasRole;

class User extends extends ConfideUser {
	use HasRole;

}