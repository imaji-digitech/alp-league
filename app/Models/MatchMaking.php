<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $id
 * @property integer $school1_id
 * @property integer $school2_id
 * @property integer $sport_id
 * @property string $title
 * @property string $date_match
 * @property string $supervisor
 * @property string $created_at
 * @property string $updated_at
 * @property string $reference_to
 * @property string $key
 * @property School $school1
 * @property School $school2
 * @property Sport $sport
 */
class MatchMaking extends Model
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
    protected $fillable = ['school1_id', 'school2_id', 'sport_id', 'title', 'update_score', 'score1', 'score2', 'date_match', 'supervisor','key','reference_to', 'created_at', 'updated_at'];

    public static function getForm()
    {
        return ['school1_id', 'school2_id', 'sport_id', 'title', 'date_match', 'supervisor','reference_to','key'];
    }

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('title', 'like', '%' . $query . '%')
                ->orWhere('supervisor', 'like', '%' . $query . '%')
                ->orWhereHas('sport', function ($q) use ($query) {
                    $q->where('title', 'like', '%' . $query . '%');
                })->orWhereHas('school2', function ($q) use ($query) {
                    $q->where('title', 'like', '%' . $query . '%');
                })->orWhereHas('school1', function ($q) use ($query) {
                    $q->where('title', 'like', '%' . $query . '%');
                });
    }

    public static function getRules()
    {
        return [
            'data.title' => 'required|max:255',
            'data.supervisor' => 'required|max:255',

            'data.sport_id' => 'required',
        ];
    }

    /**
     * @return BelongsTo
     */
    public function school1()
    {
        return $this->belongsTo('App\Models\School', 'school1_id');
    }

    /**
     * @return BelongsTo
     */
    public function school2()
    {
        return $this->belongsTo('App\Models\School', 'school2_id');
    }

    /**
     * @return BelongsTo
     */
    public function sport()
    {
        return $this->belongsTo('App\Models\Sport');
    }
}
