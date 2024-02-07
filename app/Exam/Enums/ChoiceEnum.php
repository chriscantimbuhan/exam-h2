<?php

namespace App\Exam\Enums;

class ChoiceEnum
{
    const CHOICE_A = 'a';
    const CHOICE_B = 'b';
    const CHOICE_C = 'c'; 

    /**
     * Make choices to collection
     *
     * @return \Illuminate\Support\Collection
     */
    public function toCollection()
    {
        return collect([
            self::CHOICE_A => 'A',
            self::CHOICE_B => 'B',
            self::CHOICE_C => 'C'
        ]);
    }

    /**
     * Make collection to options
     *
     * @return \Illuminate\Support\Collection
     */
    public function toOptions()
    {
        $options = [];

        $this->toCollection()->each(function ($item, $key) {
            $options[] = [
                'label' => $item,
                'value' => $key
            ];
        });

        return collect($options);
    }
}
