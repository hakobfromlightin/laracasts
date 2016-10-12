<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Serie extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'series';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'due_to',
        'first_watched_at',
        'last_watched_at',
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
        'times_watched' => 'integer',
        'times_coded' => 'integer',
        'level' => 'string',
        'archived' => 'boolean',
        'available' => 'boolean',
        'downloaded' => 'boolean',
        'watched' => 'boolean',
        'coded' => 'boolean',
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
        'times_watched',
        'times_coded',
        'level',
        'archived',
        'available',
        'downloaded',
        'watched',
        'coded',
        'due_to',
        'first_watched_at',
        'last_watched_at',
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

    /**
     * Calculates percentage of completion.
     *
     * @return float|int
     */
    public function completion()
    {
        $serieLessonCount = $this->lessons->count();
        $serieCompletedLessonCount = $this->lessons->where('watched', true)->count();

        if ($serieLessonCount == 0) {
            return 0;
        }

        return $serieCompletedLessonCount / $serieLessonCount * 100;
    }

    /**
     * Serie can have many Lessons.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    /**
     * Serie can belong to many Skills.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
