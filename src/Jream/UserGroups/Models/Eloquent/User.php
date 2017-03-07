<?php

namespace Jream\UserGroups\Models\Eloquent;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Jream\UserGroups\Traits\HasPermission;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use Authenticatable;
    use HasPermission;
    use SoftDeletes;

    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = ['username', 'first_name', 'last_name', 'email', 'password',];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
}
