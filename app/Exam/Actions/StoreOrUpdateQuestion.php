<?php

namespace App\Exam\Actions;

use App\Exam\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreOrUpdateQuestion
{
    /**
     * @var \App\Exam\Models\Question
     */
    protected $model;

    /**
     * @var array
     */
    protected $choices;

    /**
     * Initialize Action
     */
    public function __construct(Question $question = null)
    {
        $this->model = $question ?? new Question;
    }

    /**
     * Execute the action
     *
     * @return \App\Exam\Models\Question
     */
    public function execute()
    {
        DB::transaction(function () {
            $this->model->save();

            $this->afterModelSave();
        });

        return $this->model;
    }

    /**
     * Actions after model is saved
     *
     * @return void
     */
    protected function afterModelSave()
    {
        $this->model->choices()->saveMany($this->choices);
    }

   /**
     * Set Requests data
     *
     * @return self
     */
    public function setRequest(Request $request)
    {
        $this->setChoices($request->input('choices'));

        $this->prepareRequest($request);

        return $this;
    }

    /**
     * Prepare requests
     *
     * @return void
     */
    protected function prepareRequest(Request $request)
    {
        collect($this->model->getFillable())->each(function ($field) use ($request) {
            $this->model->$field = $request->input($field);
        });
    }

    /**
     * Set choices attribute
     *
     * @return self
     */
    protected function setChoices($choices)
    {
        $this->choices = $choices;

        return $this;
    }
}
