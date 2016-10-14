<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class TlsUser extends Model implements Authenticatable
{
    //
	use \Illuminate\Auth\Authenticatable;
	protected $guard = "tls_users";
}
