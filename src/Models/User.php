<?php

use Amsgames\LaravelShop\Traits\ShopUserTrait;

class User extends Model {

	use Authenticatable, CanResetPassword, ShopUserTrait;

}