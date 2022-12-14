<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $sport_id
 * @property integer $school_id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 * @property School $school
 * @property Sport $sport
 * @property CertificateDetail[] $certificateDetails
 */
class Certificate extends Model
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
    protected $fillable = ['sport_id', 'school_id', 'title', 'created_at', 'updated_at'];

    public static function getForm()
    {
        return ['sport_id', 'school_id', 'title'];
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('title', 'like', '%' . $query . '%')
                ->orWhereHas('sport', function ($q) use ($query) {
                    $q->where('title', 'like', '%' . $query . '%');
                })->orWhereHas('school', function ($q) use ($query) {
                    $q->where('title', 'like', '%' . $query . '%');
                });
    }

    public static function getRules()
    {
        return [
            'data.title' => 'required|max:255',
            'data.school_id' => 'required',
        ];
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school()
    {
        return $this->belongsTo('App\Models\School');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sport()
    {
        return $this->belongsTo('App\Models\Sport');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function certificateDetails()
    {
        return $this->hasMany('App\Models\CertificateDetail');
    }
}
