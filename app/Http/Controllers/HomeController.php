<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\User;
use App\Models\Exam;
use App\Models\Answer;
use App\Models\Category;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    public function getCatergoyPage()
    {
        return view('add-category');
    }

    public function getExamPage()
    {

        $category = Category::getAllCategory();
        return view('add-exam', ['categories' => $category]);
    }

    public function getAnswerPage()
    {
        $exams = Exam::getAllExam();
        return view('add-answer',['exams' => $exams]);
    }

    public function saveCategory(Request $request)
    {
        $this->validate($request,[
        'name' => 'required',
        ]);

        $result = Category::save_category($request->all()); 

        if($result){

        Session::flash('categorysuccess', 'Category has been saved sucessfully');
        return redirect()->back();
        }
        Session::flash('categoryfailed', 'Category was not saved');
        return redirect()->back();
    }

    public function saveExams(Request $request)
    {
        $this->validate($request,[
        'cat_id' => 'required',
        'question' => 'required',
        ]);

        $result = Exam::save_exam($request->all()); 

        if($result){

        Session::flash('examsuccess', 'Exam has been saved sucessfully');
        return redirect()->back();
        }
        Session::flash('examfailed', 'Exam was not saved');
        return redirect()->back();
    }

    public function saveAnswers(Request $request)
    {
        $this->validate($request,[
        'exam_id' => 'required',
        'answer' => 'required',
        ]);

        $result = Answer::save_answers($request->all()); 

        if($result){

        Session::flash('answersuccess', 'Answer has been saved sucessfully');
        return redirect()->back();
        }
        Session::flash('answerfailed', 'Answer was not saved');
        return redirect()->back();
    }

    public function getAllQuestions()
    {
        $exams = Exam::getAllExamAndAnswers();
        //dd($exams);
        return view('view-all-exam',['exams' => $exams]);
    }

    public function getAllCategoryPage()
    {
        $category = Category::getAllCategory();
        return view('view-all-category', ['categories' => $category]);
    }


}
