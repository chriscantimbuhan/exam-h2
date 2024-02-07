<?php

namespace App\Exam\Controllers;

use App\Exam\Actions\ProcessAnswer;
use App\Exam\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of questions.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json((new Question)->with('choices')->get()->shuffle());
    }

    /**
     * Get result from the exam
     *
     *  @return \Illuminate\Http\Response
     */
    public function result(Request $request)
    {
        $result = (new ProcessAnswer)
            ->setRequest($request)
            ->execute();

        return response()->json($result);
    }
}
