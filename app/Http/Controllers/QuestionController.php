<?php

namespace App\Http\Controllers;

// models
use App\Models\User;
use App\Models\Question;
use App\Models\QuestionComment;
use App\Models\QuestionCommentReply;
use App\Notifications\Comment;

// helerps
use Illuminate\Http\Request;
use Auth;

class QuestionController extends Controller
{
    public function getAllQuestions()
    {

        $questions = Question::with('user')->paginate(20);
        return view('question')->with('questions', $questions);
    }


    // ask a question
    public function addQuestion(Request $request)
    {
        $this->validate($request, array(
            'title'  => 'required | string',
            'description'  => 'required | string',
        ));


        $question = Question::create([
            'title' => $request->title,
            'detailed_question' => $request->description,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/questions/single/' . $question->id);
    }


    // get question by id
    public function getQuestionById($id)
    {
        $question = Question::where('id', $id)
            ->with('user')
            // ->with('comments', 'comments.replies')
            ->withCount('comments')
            ->with('comments')
            ->first();


        return view('question-single')->with('question', $question);
    }



    // add Comment
    public function addComment(Request $request)
    {

        // dd($request);
        $question = QuestionComment::create([
            'user_id' => Auth::user()->id,
            'question_id' => $request->question_id,
            'comment' => $request->comment
        ]);

        $user_id = QuestionComment::where('question_id', $request->question_id)
            ->where('user_id', '!=', Auth::user()->id)
            ->first()->user_id;

        if (!isset($user_id)) {
            return redirect('/questions/single/' . $request->question_id);
        }
        $user = User::where('id', $user_id)->first();

        $user->notify(new Comment('You have a new comment in your question', $user_id));
        return redirect('/questions/single/' . $request->question_id);
    }


    // add reply
    public function addReply(Request $request)
    {

        $question = QuestionCommentReply::create([
            'user_id' => Auth::user()->id,
            'question_id' => $request->question_id,
            'question_comment_id' => $request->question_comment_id,
            'comment' => $request->comment
        ]);

        return redirect('/questions/single/' . $request->question_id);
    }
}
