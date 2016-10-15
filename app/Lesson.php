<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lessons';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'recorded_at',
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
        'length' => 'integer',
        'times_watched' => 'integer',
        'times_coded' => 'integer',
        'type' => 'string',
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
        'length',
        'times_watched',
        'times_coded',
        'type',
        'archived',
        'available',
        'downloaded',
        'watched',
        'coded',
        'due_to',
        'recorded_at',
        'first_watched_at',
        'last_watched_at',
        'deleted_at',
    ];

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * Lesson can belong to many Series.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function series()
    {
        return $this->belongsToMany(Serie::class);
    }

    /**
     * Lesson can belong to many Skills.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function skill()
    {
        return $this->belongsToMany(Skill::class);
    }

    /**
     * Lesson can have many tags.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
