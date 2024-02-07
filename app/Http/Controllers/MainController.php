<?php

namespace App\Http\Controllers;

use App\Exam\Controllers\ExamController;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display the exam view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = (new ExamController)->index()->getData();

        return view('exams.index', ['data' => $data]);
    }

    /**
     * Display the exam result view.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function result(Request $request)
    {
        return view('exams.result', ['data' => collect($request->all())]);
    }
}
