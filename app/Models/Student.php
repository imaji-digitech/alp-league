<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $id
 * @property integer $sport_id
 * @property integer $school_id
 * @property string $name
 * @property string $nisn
 * @property string $place_birth
 * @property string $date_birth
 * @property string $mother_name
 * @property string $report
 * @property string $created_at
 * @property string $updated_at
 * @property School $school
 * @property Sport $sport
 */
class Student extends Model
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
    protected $fillable = ['sport_id', 'school_id', 'name', 'nisn', 'place_birth', 'date_birth', 'mother_name','father_name','parent_job', 'report', 'created_at', 'updated_at'];

    public static function search($query)
    {
        return empty($query) ? static::query()->whereSchoolId(auth()->user()->school_id)
            : static::whereSchoolId(auth()->user()->school_id)
                ->where(function ($q) use ($query) {
                    $q->where('name', 'like', '%' . $query . '%')
                        ->orWhere('nisn', 'like', '%' . $query . '%')
                        ->orWhere('place_birth', 'like', '%' . $query . '%')
                        ->orWhere('mother_name', 'like', '%' . $query . '%')
                        ->orWhereHas('sport', function ($q) use ($query) {
                            $q->where('title', 'like', '%' . $query . '%');
                        });
                });


    }

    public static function searchSchool($query,$dataId)
    {
        return empty($query) ? static::query()->whereSchoolId($dataId)
            : static::whereSchoolId($dataId)
                ->where(function ($q) use ($query) {
                    $q->where('name', 'like', '%' . $query . '%')
                        ->orWhere('nisn', 'like', '%' . $query . '%')
                        ->orWhere('place_birth', 'like', '%' . $query . '%')
                        ->orWhere('mother_name', 'like', '%' . $query . '%')
                        ->orWhereHas('sport', function ($q) use ($query) {
                            $q->where('title', 'like', '%' . $query . '%');
                        });
                });


    }


    public static function searchAll($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%' . $query . '%')
                ->orWhere('nisn', 'like', '%' . $query . '%')
                ->orWhere('place_birth', 'like', '%' . $query . '%')
                ->orWhere('mother_name', 'like', '%' . $query . '%')
                ->orWhereHas('sport', function ($q) use ($query) {
                    $q->where('title', 'like', '%' . $query . '%');
                })->orWhereHas('school', function ($q) use ($query) {
                    $q->where('name', 'like', '%' . $query . '%')
                        ->orWhere('village', 'like', '%' . $query . '%');
                });

    }

    public static function getForm()
    {
        return ['sport_id', 'school_id', 'name', 'nisn', 'place_birth', 'date_birth', 'mother_name','father_name','parent_job', 'report',];
    }

    /**
     * @return BelongsTo
     */
    public function school()
    {
        return $this->belongsTo('App\Models\School');
    }

    /**
     * @return BelongsTo
     */
    public function sport()
    {
        return $this->belongsTo('App\Models\Sport');
    }
}
