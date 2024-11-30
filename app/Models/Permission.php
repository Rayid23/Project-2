<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static pluck(string $string)
 * @method static where(string $string, string|null $routeName)
 * @method static paginate(int $int)
 */
class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = ['key', 'name'];
    public function roles(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_permissions', 'permission_id', 'role_id');
    }

}
