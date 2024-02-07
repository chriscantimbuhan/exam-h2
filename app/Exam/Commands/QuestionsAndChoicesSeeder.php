<?php

namespace App\Exam\Commands;

use App\Exam\Actions\StoreOrUpdateQuestion;
use App\Exam\Models\Choice;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionsAndChoicesSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exam:questions-and-choices:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed default questions and choices';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (
            $this->confirm('Are you sure you want to populate questions and answers?
            This operation will truncate the related tables first.')
        ) {
            $this->warn('Truncating choices...');

            DB::table('choices')->truncate();

            $this->info('Truncating choices completed');

            if (! Choice::count()) {
                $this->warn('Truncating questions...');

                DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                DB::table('questions')->truncate();
                DB::statement('SET FOREIGN_KEY_CHECKS=1;');

                $this->info('Truncating questions completed');
            }

            $this->warn('Seeding data initiated...');

            $this->seedData();

            $this->info('Seeding completed');
        } else {
            $this->info('Operation halted. No changes has been made.');
        }
    }

    /**
     * Seed questions and choices
     *
     * @return void
     */
    protected function seedData()
    {
        collect(config('exam.questions_and_choices'))->each(function ($item) {
            (new StoreOrUpdateQuestion)
                ->setRequest(new Request([
                    'question' => $item['question'],
                    'choices' => (new Choice)->prepareChoices($item['choices'])
                ]))
                ->execute();
        });
    }
}
