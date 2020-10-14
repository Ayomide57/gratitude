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

    public function getCategoryPage()
    {
        return view('category.add-category');
    }

    public function getEditCategoryPage($id)
    {
        $category = Category::getSingleCategory($id);
        return view('category.edit-category',['category' => $category]);
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

    public function updateCategory(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            ]);
    
            $result = Category::updateCategory($request->all(),$id); 
    
            if($result){
    
            Session::flash('categorysuccess', 'Category have been updated');
            return redirect()->back();
            }
            Session::flash('categoryfailed', 'Category update failed');
            return redirect()->back();
    }

    public function getAllCategoryPage()
    {
        $category = Category::getAllCategory();
        return view('category.view-all-category', ['categories' => $category]);
    }

    public function deleteCategory($id)
    {
        $result = Category::deleteSingleCategory($id);
        
        if($result){

            Session::flash('categorydelsuccess', 'Category has bdeen successfully deleted');
            return redirect()->back();
        }

        Session::flash('categorydelfailed', 'Failed to delete Category');
        return redirect()->back();
    }


    //Exam

    public function getExamPage()
    {

        $category = Category::getAllCategory();
        return view('Question.add-exam', ['categories' => $category]);
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

    public function getEditQuestionPage($id)
    {
        $category = Category::getAllCategory();
        $question = Exam::getSingleQuestion($id);
        return view('Question.edit-exam', [
            'categories' => $category,
            'question' => $question
            ]);
    }

    public function updateQuestion(Request $request,$id)
    {
        $this->validate($request,[
        'cat_id' => 'required',
        'question' => 'required',
        ]);

        $result = Exam::updateExam($request->all(),$id); 

        if($result){

        Session::flash('examsuccess', 'Exam have been updated sucessfully');
        return redirect()->back();
        }
        Session::flash('examfailed', 'Exam update failed');
        return redirect()->back();
    }

    public function getAllQuestions()
    {
        $exams = Exam::getAllExamAndAnswers();
        //dd($exams);
        return view('Question.view-all-exam',['exams' => $exams]);
    }

    public function deleteQuestion($id)
    {
        $result = Exam::deleteQuestion($id);
        $result = Answer::deleteAnswers($id);

        if($result){

            Session::flash('examdelsuccess', 'Question have been successfully deleted');
            return redirect()->back();
        }

        Session::flash('examdelfailed', 'Failed to delete Question');
        return redirect()->back();
    }

    // Answer

    public function getAnswerPage()
    {
        $exams = Exam::getAllExam();
        return view('Answer.add-answer',['exams' => $exams]);
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

    public function getEditAnswerPage($id)
    {
        $exams = Exam::getAllExam();
        $answer = Answer::getSingleAnswer($id);
        return view('Answer.edit-answer', ['answer' => $answer, 'exams' => $exams]);
    }

    public function updateAnswer(Request $request)
    {
        $this->validate($request,[
        'exam_id' => 'required',
        'answer' => 'required',
        ]);

        $result = Answer::updateAnswer($request->all(),$id); 

        if($result){

        Session::flash('answersuccess', 'Answer has been saved sucessfully');
        return redirect()->back();
        }
        Session::flash('answerfailed', 'Answer was not saved');
        return redirect()->back();
    }

    public function deleteAnswer($id)
    {
        $result = Answer::deleteSingleAnswers($id);

        if($result){

            Session::flash('answersuccess', 'Answer have been successfully deleted');
            return redirect()->back();
        }

        Session::flash('answerfailed', 'Failed to delete Answer');
        return redirect()->back();
    }


   

    

}
