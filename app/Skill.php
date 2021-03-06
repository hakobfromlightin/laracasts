<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

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
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * Calculates percentage of completion.
     *
     * @return float|int
     */
    public function completion()
    {
        $skillLessonCount = $this->lessons->count();
        $skillCompletedLessonCount = $this->lessons->where('watched', true)->count();

        if ($skillLessonCount == 0) {
            return 0;
        }

        return $skillCompletedLessonCount / $skillLessonCount * 100;
    }

    /**
     * Show the url for image.
     *
     * @return mixed
     */
    public function imageUrl()
    {
        return Storage::url($this->image);
    }

    /**
     * Set the start_date attribute.
     *
     * @param $date
     */
    public function setStartDateAttribute($date)
    {
        $this->attributes['start_date'] = Carbon::parse($date);
    }

    /**
     * Set the end_date attribute.
     *
     * @param $date
     */
    public function setEndDateAttribute($date)
    {
        $this->attributes['end_date'] = Carbon::parse($date);
    }

    /**
     * Set the started_at attribute.
     *
     * @param $date
     */
    public function setStartedAtAttribute($date)
    {
        $this->attributes['started_at'] = Carbon::parse($date);
    }

    /**
     * Set the completed_at attribute.
     *
     * @param $date
     */
    public function setCompletedAtAttribute($date)
    {
        $this->attributes['completed_at'] = Carbon::parse($date);
    }

    /**
     * Set the deleted_at attribute.
     *
     * @param $date
     */
    public function setDeletedAtAttribute($date)
    {
        $this->attributes['deleted_at'] = Carbon::parse($date);
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
