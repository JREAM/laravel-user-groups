<?php

namespace Jream\UserGroups\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Jream\UserGroups\Traits\HasPermission;

class Group extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'groups';

    /**
     * Groups can belong to many users.
     *
     * @return Model
     */
    public function users()
    {
        $authModel = config('auth.providers.users.model', config('auth.model'));
        return $this->belongsToMany($authModel)->withTimestamps();
    }

    public function hasMember()
    {

    }

}
