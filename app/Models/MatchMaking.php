<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    protected $fillable = ['school1_id', 'school2_id', 'sport_id', 'title', 'date_match', 'supervisor', 'created_at', 'updated_at'];

    public static function getForm(){
        return ['school1_id', 'school2_id', 'sport_id', 'title', 'date_match', 'supervisor',];
    }

    public static function search($query){
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

    public static function getRules(){
        return [
            'data.title'=>'required|max:255',
            'data.supervisor'=>'required|max:255',
            'data.school1_id'=>'required',
            'data.school2_id'=>'required',
            'data.sport_id'=>'required',
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school1()
    {
        return $this->belongsTo('App\Models\School', 'school1_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school2()
    {
        return $this->belongsTo('App\Models\School', 'school2_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sport()
    {
        return $this->belongsTo('App\Models\Sport');
    }
}
