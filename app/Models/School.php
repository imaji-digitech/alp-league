<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer $id
 * @property string $name
 * @property string $village
 * @property string $created_at
 * @property string $updated_at
 * @property User[] $users
 * @property Student[] $students
 */
class School extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'village','upload1','upload2', 'created_at', 'updated_at'];

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%' . $query . '%')
                ->orWhere('village', 'like', '%' . $query . '%');
    }

    /**
     * @return HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    /**
     * @return HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }
}
