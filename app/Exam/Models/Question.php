<?php

namespace App\Exam\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
        $this->setConnection(config('database.default'));
    }

    /**
     * @var string
     */
    protected $table = 'questions';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = [
        'question'
    ];

    /**
     * Get related choices
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\App\Exam\Models\Choice>
     */
    public function choices()
    {
        return $this->hasMany(Choice::class, Choice::ATTR_QUESTION_ID);
    }
}
