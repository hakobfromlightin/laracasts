<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skills';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'started_at',
        'completed_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'image' => 'string',
        'description' => 'string',
        'completed' => 'boolean',
        'times_completed' => 'integer',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
        'description',
        'completed',
        'times_completed',
        'started_at',
        'completed_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'd-m-Y H:i:s';

    public function skillCompletion()
    {
        $skillLessonCount = $this->lessons->count();
        $skillCompletedLessonCount = $this->lessons->where('watched', true)->count();

        if ($skillLessonCount == 0) {
            return 0;
        }

        return $skillCompletedLessonCount / $skillLessonCount * 100;
    }

    /**
     * Skill can have many series.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function series()
    {
        return $this->belongsToMany(Serie::class);
    }

    /**
     * Skill can have many lessons.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }
}
