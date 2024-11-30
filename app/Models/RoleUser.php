<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(int $int, string $string)
 */
class RoleUser extends Model
{
    protected $table = 'role_users';
    protected $fillable = ['role_id', 'user_id'];

    public function role(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
