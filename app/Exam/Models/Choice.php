<?php

namespace App\Exam\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    const ATTR_QUESTION_ID = 'question_id';

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
        $this->setConnection(config('database.default'));
    }

    /**
     * @var string
     */
    protected $table = 'choices';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = [
        self::ATTR_QUESTION_ID,
        'weight',
        'details'
    ];

    /**
     * Prepare choices for insert
     *
     * @param array $choices
     * @return \Illuminate\Support\Collection
     */
    public function prepareChoices($choices)
    {
        return collect($choices)->map(function ($item) {
            return new self($item);
        });
    }
}
