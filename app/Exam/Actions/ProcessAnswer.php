<?php

namespace App\Exam\Actions;

use App\Exam\Enums\ChoiceEnum;
use Illuminate\Http\Request;

class ProcessAnswer
{
    /**
     * @var array
     */
    protected $answers;

    /**
     * Initialize Action
     */
    public function __construct()
    {
        // 
    }

    /**
     * Execute the action
     *
     * @return \Illuminate\Support\Collection
     */
    public function execute()
    {
        return $this->totalAnswersPerChoice()->merge($this->getResult());
    }

   /**
     * Set Requests data
     *
     * @return self
     */
    public function setRequest(Request $request)
    {
        $this->setAnswers($request->input('answers'));

        return $this;
    }

    /**
     * Count answers per choice
     *
     * @return \Illuminate\Support\Collection
     */
    protected function totalAnswersPerChoice()
    {
        $defaultCount = (new ChoiceEnum)->toCollection()->map(function () {
            return 0;
        });

        return $defaultCount->merge(collect($this->answers)->countBy())->each(function ($count, $value) {
            $result[] = [
                $value => $count
            ];
        });
    }

    /**
     * Get result based on  max choice and value
     *
     * @return array
     */
    protected function getResult() {
        $results = config('exam.results');
        $answersCount = $this->totalAnswersPerChoice();
        $result = '';
        $value = 0;

        $answersCount->each(function ($item, $key) use (&$result, &$value, $results, $answersCount) {
            if ($item >= $answersCount->max() && $results[$key]['value'] > $value) {
                $result = $results[$key]['description'];
                $value = $results[$key]['value'];
            }
        });

        return ['result' => $result];
    }

    /**
     * Set answers attribute
     *
     * @return self
     */
    protected function setAnswers($answers)
    {
        $this->answers = $answers;

        return $this;
    }
}
